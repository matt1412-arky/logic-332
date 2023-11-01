create database mahasiswa;
create table jurusan(
	id serial not null,-- serial -> interger; bigserial -> big integer; (auto increment)
	kode_jurusan varchar(5) not null primary key,
	nama_jurusan varchar(50) not null,
	status_jurusan varchar(100) not null
);

insert into jurusan (kode_jurusan, nama_jurusan, status_jurusan)
values
('J001','Teknik Informatika','Aktiv'),
('J002','Manajemen Infomatika','Aktiv'),
('J003','Sistem Informasi','Non Aktiv'),
('J004','Sistem Komputer','Aktiv'),
('J005','Komputer Akutansi','Non Aktiv');

-- unique key memastikan nilai tiap baris berbeda
alter table jurusan add constraint jurusan_ukey unique (nama_jurusan, status_jurusan);

-- test unique constraint
insert into jurusan (kode_jurusan, nama_jurusan, status_jurusan)

create table agama(
	id serial not null,
	kode_agama varchar(5) not null primary key,
	deskripsi varchar(20) not null
);

insert into agama (kode_agama, deskripsi) values
('A001','Islam'),
('A002','Kristen'),
('A003','Katolik'),
('A004','Hindu'),
('A005','Budha');

create table mahasiswa(
	id serial not null,
	kode_mahasiswa varchar(5) not null primary key,
	nama_mahasiswa varchar(100) not null,
	alamat varchar(200) not null,
	kode_agama varchar(5),
	kode_jurusan varchar(5),
	constraint mhs_agama_fkey foreign key (kode_agama) references agama(kode_agama),
	constraint mhs_jurusan_fkey foreign key (kode_jurusan) references jurusan(kode_jurusan)
);

insert into mahasiswa (kode_mahasiswa, nama_mahasiswa, alamat, kode_agama,kode_jurusan) values 
('M001','Budi Gunawan', 'Jl. Mawar, Bandung','A001','J001'),
('M002','Rito Raharjo', 'Jl. Kebagusan, Bandung','A002','J002'),
('M003','Asep Saepudin', 'Jl. Sumatera, Ciamis','A001','J003'),
('M004','M. Hafif Isbullah', 'Jl. Jawa, Jakarta Pusat','A001','J001'),
('M005','Cahyono', 'Jl. Niagara, Surabaya','A003','J002');

create table ujian(
id serial not null,
kode_ujian varchar(5) not null primary key,
nama_ujian varchar(50) not null,
status_ujian varchar(100)
);

insert into ujian (kode_ujian, nama_ujian, status_ujian) values
('U0001','Algoritma','Aktiv'),
('U0002','Aljabar','Aktiv'),
('U0003','Statistika','Non Aktiv'),
('U0004','Etika Profesi','Non Aktiv'),
('U0005','Bahasa Inggris','Aktiv');

-- delete table ujian --
delete from ujian; -- menghapus semua data -> gunakan where clause untuk spesifik data
-- truncate table untuk mereset data atau struktur tabel

create schema dosen;

create table dosen.type_dosen(
	id serial not null,
	kode_typedosen varchar(5) not null primary key,
	deskripsi varchar(20)
);

insert into dosen.type_dosen (kode_typedosen, deskripsi) values 
('T001','Tetep'),
('T002','Honorer'),
('T003', 'Expertise');

create table dosen.dosen(
	id serial not null,
	kode_dosen varchar(5) not null primary key,
	nama_dosen varchar(100) not null,
	kode_jurusan varchar(5) not null,
	kode_typedosen varchar(5) not null,
	constraint dosen_jurusan_fkey foreign key (kode_jurusan) references public.jurusan (kode_jurusan),
	constraint dosen_type_fkey foreign key (kode_typedosen) references dosen.type_dosen (kode_typedosen)
);
insert into dosen.dosen(kode_dosen, nama_dosen, kode_jurusan, kode_typedosen) values
('D001','Prof. Dr. Retno', 'J001','T002'),
('D002','Prof. Cokro', 'J001','T001'),
('D003','Prof. Godot', 'J001','T001'),
('D004','Prof. Dr. Amita', 'J001','T003'),
('D005','Prof. Dr. Nano', 'J001','T003');

create table nilai (
id serial not null primary key,
kode_mahasiswa varchar(5) not null,
kode_ujian varchar(5) not null,
nilai double precision not null
);

alter table nilai add  constraint nilai_mhs_fkey foreign key (kode_mahasiswa) references public.mahasiswa(kode_mahasiswa);
alter table nilai constraint nilai_ujian_fkey foreign key (kode_ujian) references public.ujian(kode_ujian);

insert into nilai (kode_mahasiswa, kode_ujian, nilai) values
('M001','U001',89),
('M002','U002',90),
('M003','U001',80),
('M004','U003',78),
('M005','U001',100);

-- Data Query Language (DQL)
-- Select Clause
select * from mahasiswa; -- (*) menandakan semua kolom
select nama_mahasiswa, alamat from mahasiswa; -- menampilkan spesifik beberapa kolom
select mhs.nama_mahasiswa, ,mhs.kode_mahasiswa from mahasiswa mhs; -- mhs adalah alias dari nama tabel
select mhs.nama_mahasiswa as mahasiswa, mhs.alamat as address from mahasiswa mhs; -- as adalah alias dari kolom

-- Select order by clause
-- order digunakan untuk melakukan sortir data berdasarkan kolom
select nama_mahasiswa, alamat from mahasiswa order by nama_mahasiswa; -- sort ascending by nama_mahasiswa
select nama_mahasiswa, alamat from mahasiswa order by alamat -- sort ascending by alamat
select nama_mahasiswa, alamat from mahasiswa order by nama_mahasiswa, alamat -- sort ascending by all
select nama_mahasiswa, alamat from mahasiswa order by nama_mahasiswa desc; -- sort descending by nama_mahasiswa

--WHERE digunakan untuk ekspesi kondisi dari data
select nama_mahasiswa, alamat from mahasiswa where nama_mahasiswa='Cahyono' order by nama_mahasiswa;
select * from mahasiswa where id=2 order by nama_mahasiswa;
select * from mahasiswa where id > 2 order by nama_mahasiswa;
select * from mahasiswa where id >= 2 order by nama_mahasiswa;
select * from mahasiswa where id < 2 order by nama_mahasiswa;
select * from mahasiswa where id <= 2 order by nama_mahasiswa;
select * from mahasiswa where id != 2 order by nama_mahasiswa;
select * from mahasiswa where id <> 2 order by nama_mahasiswa;
--LIKE digunakan untuk mencari data yang sesuai dengan kondisi (seperti)
select * from mahasiswa where alamat='Jl. Mawar, Bandung' order by nama_mahasiswa;
select * from mahasiswa where alamat like 'Jl. Mawar, Bandung' order by nama_mahasiswa;
--wildcard (%) yang artinya membiarkan /membebaskan kata yang ada disebelah kiri/kanan
select * from mahasiswa where alamat like '%Mawar, Bandung' order by nama_mahasiswa;
select * from mahasiswa where alamat like '%Bandung' order by nama_mahasiswa;
select * from mahasiswa where alamat like 'Jl. Jawa%' order by nama_mahasiswa;
select * from mahasiswa where alamat like '%wa%' order by nama_mahasiswa;
--ILIKE seperti LIKE tapi dia mengabaikan huruf besar/kecil (incase sensitif)
select * from mahasiswa where alamat ilike '%ba%' order by nama_mahasiswa;
--NOT penggunaannya untuk negasi dari yang didapat
select * from mahasiswa where alamat not ilike '%ba' order by nama_mahasiswa;
select * from mahasiswa where alamat not like '%Bandung' order by nama_mahasiswa;
--IN digunakan untuk semua kondisi didalam kurung IN.
select * from mahasiswa where id in (2,4,5) order by nama_mahasiswa; 
select * from mahasiswa where id in (1,3) order by nama_mahasiswa;
select * from mahasiswa where id not in (2,4,5) order by nama_mahasiswa;
select * from mahasiswa where id not in (1,3) order by nama_mahasiswa;
select * from mahasiswa where nama_mahasiswa in ('Cahyono', 'Rihito Raharjo') order by nama_mahasiswa; 
--BETWEEN range dari data yang dipilih
select * from mahasiswa where id between 1 and 3 order by nama_mahasiswa; 
select * from mahasiswa where id not between 1 and 3 order by nama_mahasiswa;
--AGREGAT (aggregation) pengelompokan data dan kalkulasi
--group by -> dikelompokan berdasarkan kolom tertentu
select * from mahasiswa;
select kode_jurusan from mahasiswa group by kode_jurusan;
select kode_agama from mahasiswa group by kode_agama;
select kode_jurusan from mahasiswa where kode_jurusan in ('J001', 'J002') group by kode_jurusan;
--fungsi aggregat (count()) -- menghitung berapa banyak data yang terkelompok
select kode_jurusan, count(kode_jurusan) as jumlah  from mahasiswa group by kode_jurusan order by kode_jurusan;
select kode_agama, count(*) as jumlah  from mahasiswa group by kode_agama order by kode_agama;
select kode_jurusan, count(kode_jurusan) as jumlah from mahasiswa 
	where kode_jurusan in ('J001', 'J002') 
	group by kode_jurusan
	order by kode_jurusan;
--fungsi SUM() menghitung total data
select * from nilai;
select sum(nilai) as total from nilai; 
select kode_mahasiswa, count(kode_mahasiswa) as total_data, sum(nilai) as total from nilai group by kode_mahasiswa; 
select kode_mahasiswa, sum(nilai) as total from nilai group by kode_mahasiswa; 
--fungsi AVG() menghitung nilai rata2
select kode_mahasiswa, 
	count(kode_mahasiswa) as total_data, 
	sum(nilai) as total_nilai, 
	(sum(nilai)/count(kode_mahasiswa)) as nilai_rata2 
from nilai 
group by kode_mahasiswa; 
--menggunakan fungsi AVG()
select avg(nilai) as rata2 from nilai; 
select kode_mahasiswa,  
	avg(nilai) as nilai_rata2 
from nilai 
group by kode_mahasiswa; 
--fungsi MAX() - mencari nilai max
select max(nilai) as maksimum from nilai; 
select kode_mahasiswa, 
	max(nilai) as nilai_tertinggi 	
	from nilai 
group by kode_mahasiswa; 
--fungsi MIN() - mencari nilai min
select min(nilai) as minimum from nilai; 
select kode_mahasiswa, 
	min(nilai) as nilai_terendah 
	from nilai 
group by kode_mahasiswa; 
--group by dan distinct
--group by mengelompokan berdasarkan kolom dan semua data tiap baris
--distinct mengelompokan data berdasarkan kolom saja 
select distinct kode_mahasiswa, nilai from nilai;
select distinct kode_mahasiswa, sum(nilai) from nilai group by kode_mahasiswa;
--Having kondisi berdasarkan hasil aggregat
select kode_mahasiswa, count(nilai) as jumlah_nilai from nilai group by kode_mahasiswa having count(nilai) = 2; 

--operasi date/tanggal
alter table mahasiswa add column tanggal_lahir date; --format tanggal YYYY-MM-DD
update mahasiswa set tanggal_lahir ='2001-01-09' where id=1;
update mahasiswa set tanggal_lahir ='2009-12-13' where id=2;
update mahasiswa set tanggal_lahir ='2012-09-11' where id=3;
update mahasiswa set tanggal_lahir ='1999-05-14' where id=4;
update mahasiswa set tanggal_lahir ='1998-06-18' where id=5;
select * from mahasiswa;
--menambahkan kolom umur di tabel mahasiswa
select *, extract ('year' from (current_date))- extract ('year' from tanggal_lahir) as umur from mahasiswa;
--menghitung umur menggunakan fungsi age()
select *, age(current_date, tanggal_lahir) as umur from mahasiswa; 
select *, age(tanggal_lahir) as umur from mahasiswa;

--join table digunakan untuk menyatukan data dari tabel2 yang sudah ber relasi
-- join tabel secara manual (membuka semua table yang di ingin di join)

select 
m.nama_mahasiswa,
j.nama_jurusan,
a.deskripsi
from mahasiswa m,jurursan j, agama a
jurusan j where m.kode_jurusan=j.kode_jurusan and m.kode_agama = a,kode_agama;

-- join clause setara dengan inner join
select 
m.nama_mahasiswa,
j.nama_jurusan,
a.deskripsi,
from mahasiswa m,
join jurusan j on m.kode_jurusan=j.kode_jurusan ,
join agama a on m.kode_agama = a,kode_agama;

--left join menjadikan tabel dikiri sebagai acuan pernyatuan datanya
--misalnya tabel dikiri ada 10 baris tabel yang di join ada 12 baris yang akan ditampilkan adalah 10 baris
select * from nilai;
select * from mahasiswa;
select *from ujian;

select 
m.nama_mahasiswa,
u.nama_ujian,
n.nilai
from nilai n
left join mahasiswa m on m.kode_mahasiswa = n.kode_mahasiswa 
left join ujian u on u.kode_ujian = n.kode_ujian

select 
u.nama_ujian,
n.nilai
from ujian u
left join nilai n on n.kode_ujian = u.kode_ujian 
left join mahasiswa m on m.kode_mahasiswa = n.kode_mahasiswa;

-- right join kebalika dari left join

select 
u.nama_ujian,
n.nilai
from nilai n
right join ujian u on n.kode_ujian = u.kode_ujian 

select 
u.nama_ujian,
n.nilai
from ujian u
right join nilai n on n.kode_ujian = u.kode_ujian

--inner join sama dengan join - inner join mengambil semua data irisan 2 tabel
select 
u.nama_ujian,
n.nilai
from nilai n
inner join ujian u on n.kode_ujian = u.kode_ujian 

select 
u.nama_ujian,
n.nilai
from ujian u
inner join nilai n on n.kode_ujian = u.kode_ujian

--full outer join
-- tabel di kiri dan kanan menjadi acuan data yang akan ditampilkan
select 
u.nama_ujian,
n.nilai
from ujian u
full outer join nilai n on n.kode_ujian = u.kode_ujian

--tabel view
create or replace view view_nilai as
select 
m.kode_mahasiswa,
m.nama_mahasiswa,
j.kode_jurusan,
j.nama_jurusan,
u.nama_ujian,
n.nilai
from mahasiswa m
--left join mahasiswa m on m.kode_mahasiswa = n.kode_mahasiswa 
left join jurusan j on m.kode_jurusan=j.kode_jurusan
left join ujian u on u.kode_ujian = u.kode_ujian
join nilai n on n.id = u.id

--case when
select 
	nama_mahasiswa,
	nama_jurusan,
	nama_ujian,
	nilai,
	case when nilai > 69 and nilai <= 70 then 'D'
		when nilai > 70 and nilai <= 80 then 'C'
		when nilai > 80 and nilai <= 90 then 'B'
		when nilai > 90 and nilai <= 100 then 'A'
		end nilai_huruf
from view_nilai;

-- coalesce parameternya tidak terbatas
--conalesce akan menghasilkan argument pertama yang tidak null jika semua argument = null coalesce akan return null
select coalesce (1,2,3); -- hasil = 1
select coalesce (2,1,3); -- hasil = 2
select coalesce (1,null,2,null); -- hasil = 1
select coalesce (null,1,2,3); -- hasil = 1
select coalesce (null,null,null,5,5,7,5);

-- select bebas
select (1+5) as total;
select 'lulus' as status;

-- select hash
select md5('password*123');
select sha256('password*123');

--union : mengabungkan 2 table dengan syarat jumlah kolomnya sama
select 
	nama_mahasiswa,
	nama_jurusan,
	nama_ujian,
	nilai,
	'Lulus' as keterangan
from view_nilai vn where nilai >=80
union all
select 
	nama_mahasiswa,
	nama_jurusan,
	nama_ujian,
	nilai,
	'Tidak lulus' as keterangan
from view_nilai vn where nilai <=80;

--POSTGRESQL TRANSACTION
-- postgresql transction digunakan untuk konsistensi data yang masuk
-- transaction reffered ke ACID
-- ATOMICITY menyakinkan transaksi selesai secara keseluruhan
-- CONSISTENCY meyakinkan data yang masuk kedalam database adalah data yang valid
-- ISOLATION menjelaskan bahwa transaksi yang terintegrasi bisa dilihat oleh transaksi lainnya
-- DURABILITY meyakinkan semua transaksi yang sudah di commit akan tersimpan dalam database

-- clause yang digunakan untuk transaksi adalah :
-- 1. untuk memulai transaksi BEGIN TRANSACTION; BEGIN WORK; BEGIN
-- 2. untuk commit transaksi COMMIT TRANSACTION; COMMIT WORK; COMMIT;
-- 3. untuk membatalkan transaksi ROLLBACK TRANSACTION; ROLLBACK WORK; ROLLBACK

create table account (
id serial primary key,
nama varchar(30) not null,
balance dec(15,2) not null
);

insert into account (nama, balance) values
('Peter',10000),('Bruce',10000);

begin;
	insert into account (nama,balance) values ('Megan',15000);
	select *from account;
commit;

--Megan mengirim uang ke Bruce senilai 15000
begin;
	update account set balance = 15000 where id = 2;
	update account set balance = 10000 where id = 3;
commit;

--peter pinjam uang 100
begin;
	update account set balance=balance + 100 where id = 1;
	update account set balance=balance - 100 where id = 2;
	select * from account;
rollback;
select *from account;

--subquery adalah inner query(nested query)
-- syaratnya subquery hanya boleh menghasilkan 1 return data(kolom) jika dipakai dalam select, jika dipakai dalam expression (where) dibolehkan seperti biasa

select 
	m.nama_mahasiswa,
	(select nama_jurursan from jurusan where kode_jurusan =m.kode_jurusan) as jurusan,