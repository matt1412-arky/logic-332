create database mahasiswa;

create table jurusan(
	id serial not null, --serial -> int; bigserial -> bigint; (AUTO INCREMENT) 
	kode_jurusan varchar(5) not null primary key,
	nama_jurusan varchar(50) not null,
	status_jurusan varchar(100) not null
);

insert into jurusan (
	kode_jurusan,
	nama_jurusan,
	status_jurusan 
)
values 
('J001', 'Teknik Informatika', 'Aktiv'), 
('J002', 'Manajemen Informatika', 'Aktiv'),
('J003', 'Sistem Informasi', 'Non Aktiv'),
('J004', 'Sistem Komputer', 'Aktiv'),
('J005', 'Komputer Akutansi', 'Non Aktiv');

--Unique key dipergunakan untuk menjaga beberapa kolom untuk tidak dapat 
--diisi dengan data yang sama (misal 3 kolom diisi dengan data yang sama 
--persis untuk tiap kolomnya)
alter table jurusan add constraint jurusan_ukey unique 
(nama_jurusan, status_jurusan);
--drop constraint jurusan_ukey
--alter table jurusan drop constraint jurusan_ukey; 
--test unique constraint
insert into jurusan (
	kode_jurusan,
	nama_jurusan,
	status_jurusan 
)
values 
('J006', 'Teknik Informatika', 'Aktif'); 
create table agama(
	id serial not null,
	kode_agama varchar(5) not null primary key,
	deskripsi varchar(20)not null
);

insert into agama  (
	kode_agama,
	deskripsi 
)
values 
('A001', 'Islam'), 
('A002', 'Kristen'),
('A003', 'Katolik'),
('A004', 'Hindu'),
('A005', 'Budha');

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

insert into mahasiswa (
	kode_mahasiswa,
	nama_mahasiswa,
	alamat,
	kode_agama,
	kode_jurusan
)
values 
('M001', 'Budi Gunawan', 'Jl. Mawar, Bandung', 'A001', 'J001'),
('M002', 'Rinto Raharjo', 'Jl. Kebagusan, Bandung', 'A002', 'J002'),
('M003', 'Asep Saepudin', 'Jl. Sumatera, Ciamis', 'A001', 'J003'),
('M004', 'M. Hafif Isbullah', 'Jl. Jawa, Jakarta Pusat', 'A001', 'J001'),
('M005', 'Cahyono', 'Jl. Niagara, Surabaya', 'A003', 'J002');

create table ujian (
	id serial not null,
	kode_ujian varchar(5) not null primary key,
	nama_ujian varchar(50) not null,
	status_ujian varchar(100)
);

--Kesalahan insert data kode ujian (5 digit - seharusnya 4 digit)
insert into ujian (
	kode_ujian,
	nama_ujian,
	status_ujian
)
values 
('U001', 'Algoritma', 'Aktiv'),
('U002', 'Aljabar','Aktiv'),
('U003', 'Statistika', 'Non Aktiv'),
('U004', 'Etika Profesi', 'Non Aktiv'),
('U005', 'Bahasa Ingris', 'Aktiv');

--Delete table ujian
delete from ujian; --meghapus semua data -> gunakan where clause untuk spesifik data
--truncate table untuk mereset data dan struktur table
truncate table ujian restart identity; --restart identity untuk me-reset sequence(kembali mulai dari 1) 

create schema dosen;

create table dosen.type_dosen(
	id serial not null,
	kode_typedosen varchar(5) not null primary key,
	deskripsi varchar(20)
);

insert into dosen.type_dosen(
	kode_typedosen,
	deskripsi
)
values 
('T001', 'Tetap'),
('T002', 'Honorer'),
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

insert into dosen.dosen (
	kode_dosen,
	nama_dosen,
	kode_jurusan,
	kode_typedosen
)
values 
('D001','Prof. Dr. Retno','J001','T002'),
('D002','Prof. Roy','J001','T002'),
('D003','Prof. Hendri','J001','T002'),
('D004','Prof. Risma','J001','T002'),
('D005','Prof. Amir, MM, MA','J001','T002');

create table nilai (
	id serial not null primary key,
	kode_mahasiswa varchar(5) not null,
	kode_ujian varchar(5) not null,
	nilai double precision not null
);

alter table nilai add constraint nilai_mhs_fkey foreign key (kode_mahasiswa) references mahasiswa (kode_mahasiswa);
alter table nilai add constraint nilai_ujian_fkey foreign key (kode_ujian) references ujian (kode_ujian);

insert into nilai (
	kode_mahasiswa,
	kode_ujian,
	nilai
)
values
('M004','U001', 90),
('M001','U001', 80),
('M002','U003', 85),
('M004', 'U002', 95),
('M005','U005', 70);

--DATA QUERY LANGUAGE(DQL)
--SELECT clause 
select * from mahasiswa; --(*) menandakan semua kolom
select nama_mahasiswa, alamat from mahasiswa; --menampilkan spesifik beberapa kolom
select mhs.nama_mahasiswa, mhs.kode_agama from mahasiswa mhs; --mhs adalah alias dari nama tabel mahasiswa
select nama_mahasiswa as mahasiswa, alamat as address from mahasiswa; --ass adalah alias dari kolom
select mhs.nama_mahasiswa as mahasiswa,mhs.alamat as address from mahasiswa mhs; --alias table dan kolom
-- SELECT ORDER BY clause
-- Order by digunakan untuk melakukan sortir data berdasarkan kolom
select nama_mahasiswa, alamat from mahasiswa order by nama_mahasiswa; --sort ascending by nama mahasiswa
select nama_mahasiswa, alamat from mahasiswa order by alamat; --sort ascending by alamat
select nama_mahasiswa, alamat from mahasiswa order by nama_mahasiwa, alamat; --sort ascending by nama mahasiswa dan alamat
select nama_mahasiswa, alamat from mahasiswa order by nama_mahasiswa desc; --sort descending by nama mahasiswa
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

--join table - digunakan untuk menyatukan data dari tabel2 yang sudah ber-relasi
--join table secara manual (membuka semua tabel yang ingin di join)
--manual join tidak disarankan karena menyita banyak memory
--explain untuk menampilkan query plan (perfoma aktivitas dari query) 
select 
	m.nama_mahasiswa, 
	j.nama_jurusan, 
	a.deskripsi  
from mahasiswa m, jurusan j, agama a 
where m.kode_jurusan=j.kode_jurusan and m.kode_agama = a.kode_agama;  
--join clause - setara dengan inner join 
select 
	m.nama_mahasiswa, 
	j.nama_jurusan, 
	a.deskripsi  
from mahasiswa m 
join jurusan j on m.kode_jurusan = j.kode_jurusan
join agama a on m.kode_agama = a.kode_agama;  
--left join menjadikan tabel dikiri sebagai acuan penyatuan datanya
--misalnya tabel dikiri ada 10 baris tabel yg dijoin ada 12 baris yg akan ditampilkan ada 10 baris
select 
	m.nama_mahasiswa, 
	n.nilai,
	u.nama_ujian
from nilai n 
left join mahasiswa m on m.kode_mahasiswa = n.kode_mahasiswa
left join ujian u on u.kode_ujian = n.kode_ujian;  

select 
	m.nama_mahasiswa, 
	u.nama_ujian,	
	n.nilai
from ujian u
left join nilai n on n.kode_ujian = u.kode_ujian
left join mahasiswa m on m.kode_mahasiswa = n.kode_mahasiswa;
--right join kebalikan dari left join dimana table sebelah kanan dijadikan acuan
select 
	u.nama_ujian,
	n.nilai
from ujian u
right join nilai n on n.kode_ujian = u.kode_ujian;

select 
	u.nama_ujian,
	n.nilai
from nilai n
right join ujian u on n.kode_ujian = u.kode_ujian;

--inner join sama dengan join 
--inner join mengambil semua data irisan dari 2 table
select 
	u.nama_ujian,
	n.nilai
from nilai n
inner join ujian u on n.kode_ujian = u.kode_ujian;

select 
	u.nama_ujian,
	n.nilai
from ujian u
inner join nilai n on n.kode_ujian = u.kode_ujian;

--full outer join
--tabel di kiri dan kanan menjadi acuan data yang akan ditampilkan
select 
	u.nama_ujian,
	n.nilai
from ujian u
full outer join nilai n on n.kode_ujian = u.kode_ujian;

--table view 
drop view view_nilai;
create or replace view view_nilai as
select
	m.kode_mahasiswa,
	m.nama_mahasiswa,
	j.kode_jurusan,
	j.nama_jurusan, 
	u.kode_ujian,
	u.nama_ujian,
	n.nilai	
from nilai n 
left join mahasiswa m on m.kode_mahasiswa = n.kode_mahasiswa
left join jurusan j on j.kode_jurusan = m.kode_jurusan
left join ujian u on u.kode_ujian = n.kode_ujian;  

select * from view_nilai;

select nama_mahasiswa, avg(nilai) as rata2
from view_nilai group by nama_mahasiswa
order by nama_mahasiswa;

--case when
select 
	nama_mahasiswa,
	nama_jurusan,
	nama_ujian,
	nilai,
	case when nilai > 60 and nilai <= 70 then 'D'
		when nilai > 70 and nilai <= 80 then 'C'
		when nilai > 80 and nilai <= 90 then 'B'
		when nilai > 90 and nilai <= 100 then 'A'
	end nilai_huruf
from view_nilai;
--coalesce - parameternya tidak terbatas 
--coalesce akan menghasilkan argumen pertama yang tidak null
--jika semua argumen = null - coalesce akan return null
select coalesce (1, 2, 3); --result = 1
select coalesce (2, 1, 3); -- result = 2
select coalesce (1, null, 2, null); --result = 1
select coalesce (null, 1, 2, 3); --result = 1
select coalesce (null, null, null, 5, 5, 7, 5); --result = 5

--select bebas
--select hash 
select (1+5) as total;
select 'lulus' as status;
select md5('password*123');
select sha256('password*123');

--union - menggabungkan 2 table dengan syarat jumlah kolomnya sama
select 
	vn.nama_mahasiswa,
	vn.nama_jurusan,
	vn.nama_ujian,
	vn.nilai,
	'LULUS' as keterangan
from view_nilai vn where nilai >= 80
union all 
select 
	vn.nama_mahasiswa,
	vn.nama_jurusan,
	vn.nama_ujian,
	vn.nilai,
	'TIDAK LULUS' as keterangan
from view_nilai vn where nilai < 80;

--POSTGRESQL TRANSACTION
--======================================================================
--postgresql transaction digunakan untuk konsistensi data yg masuk 
--transaction reffered ke ACID
--ATOMICITY meyakinkan transaksi selesai secara keseluruhan 
--CONSISTENCY meyakinkan data yg masuk ke database adalah data yg valid
--ISOLATION menjelaskan bahwa transaksi yg terintegrasi bisa dilihat oleh transaksi lain
--DURABILITY meyakinkan semua transaksi yg sudah di commit akan tersimpan dalam database
--======================================================================
--clause yg digunakan untuk transaksi adalah:
--1. untuk memulai transaksi BEGIN TRANSACTION; BEGIN WORK; BEGIN;
--2. untuk commit transaksi COMMIT TRANSACTION; COMMIT WORK; COMMIT;
--3. untuk membatalkan transaksi ROLLBACK TRANSACTION; ROLLBACK WORK; ROLLBACK;

create table account(
	id serial primary key,
	name varchar(30) not null,
	balance dec(15, 2) not null
);

insert into account (
	name,
	balance
)
values 
('Peter', 10000),
('Bruce', 10000);

select * from account;
truncate table account restart identity;

begin; 
	insert into account (
		name,
		balance
	)
	values 
	('Megan', 15000);
commit;

--megan kirim uang ke bruce senilai 5000
begin;
	update account set balance=15000 where id=2;
	update account set balance=10000 where id=3;
commit;

--peter pinjam uang 100 
begin;
	update account set balance=balance+100 where id=1;
	update account set balance=balance-100 where id=2;
rollback;




