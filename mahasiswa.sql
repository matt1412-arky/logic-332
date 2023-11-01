create database mahasiswa;

create table jurusan(
	id serial not null,  --serial -> integer; bigserial -> biginteger; (AUTOINCREMENT)
	kode_jurusan varchar(5) not null primary key,
	nama_jurusan varchar(50) not null,
	status_jurusan varchar(100) not null
);

insert into jurusan (kode_jurusan, nama_jurusan, status_jurusan)
values
('J001', 'Teknik Informatika', 'Aktif'),
('J002', 'Manajemen Informatika', 'Aktif'),
('J003', 'Sistem Informasi', 'Non Aktif'),
('J004', 'Sistem Komputer', 'Aktif'),
('J005', 'Komputer Akutansi', 'Aktif');

-- Unique key dipergunakan untuk menjaga beberapa kolom untuk tidak dapat diisi
-- dengan data yang sama (misal 3 kolom diisi dengan data yang sama persis untuk
-- tiap kolomnya)
alter table jurusan add constraint jurusan_ukey unique 
(nama_jurusan, status_jurusan);

-- test unique constraint
insert into jurusan (kode_jurusan, nama_jurusan, status_jurusan)
values
('J006', 'Teknik Informatika', 'Aktif');

create table agama (
	id serial not null,
	kode_agama varchar(5) not null primary key,
	deskripsi varchar(20) not null
);

insert into agama (kode_agama, deskripsi) values
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
	constraint mhs_agama_fkey foreign key (kode_agama) 
	references agama (kode_agama),
	constraint mhs_jurusan_fkey foreign key (kode_jurusan)
	references jurusan(kode_jurusan)
);

insert into mahasiswa (
	kode_mahasiswa,
	nama_mahasiswa,
	alamat,
	kode_agama,
	kode_jurusan
) values
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

--Kesalahan insert data kode ujian (5 digit -  seharusnya 4 digit)
insert into ujian (kode_ujian, nama_ujian, status_ujian)values
('U001', 'Algoritma', 'Aktif'),
('U002', 'Aljabar', 'Aktif'),
('U003', 'Statistika', 'Non Aktif'),
('U004', 'Etika Profesi', 'Non Aktif'),
('U005', 'Bahasa Inggris', 'Aktif');

--Delete table ujian
delete from ujian; -- menghapus semua data dalam table ujian -> gunakan where clause untuk spesifik data

--truncate table untuk mereset data dan struktur table
truncate table ujian restart identity; --restart identity untuk me-reset sequence (kembali mulai dari 1)

create schema dosen;

create table dosen.type_dosen (
	id serial not null,
	kode_typedosen varchar(5) not null primary key,
	deskripsi varchar(20)
);

insert into dosen.type_dosen (kode_typedosen, deskripsi) values
('T001','Tetap'),
('T002','Honorer'),
('T003','Expertise');

create table dosen.dosen (
	id serial not null,
	kode_dosen varchar(5)not null primary key,
	nama_dosen varchar(100)not null,
	kode_jurusan varchar(5) not null,
	kode_typedosen varchar(5) not null,
	constraint dosen_jurusan_fkey foreign key (kode_jurusan)
	references public.jurusan (kode_jurusan),
	constraint dosen_type_fkey foreign key (kode_typedosen)
	references dosen.type_dosen (kode_typedosen)
);

insert into dosen.dosen (kode_dosen, nama_dosen, kode_jurusan, kode_typedosen)
values
('D001', 'Prof. Dr. Retno', 'J001', 'T002'),	
('D002', 'Prof. Roy', 'J001', 'T002'),
('D003', 'Prof. Hendri', 'J001', 'T002'),
('D004', 'Prof. Risma', 'J001', 'T002'),
('D005', 'Prof. Amir, MM, MA', 'J001', 'T002');
	
create table nilai (
	id serial not null primary key,
	kode_mahasiswa varchar(5) not null,
	kode_ujian varchar(5) not null,
	nilai double precision not null
);	

alter table nilai add constraint nilai_mhs_fkey foreign key (kode_mahasiswa)
references mahasiswa(kode_mahasiswa);
alter table nilai add constraint nilai_ujian_fkey foreign key (kode_ujian)
references ujian(kode_ujian);

insert into nilai (kode_mahasiswa, kode_ujian, nilai) values
('M004', 'U001', 90),
('M001', 'U001', 80),
('M002', 'U003', 85),
('M004', 'U002', 95),
('M005', 'U005', 70);


--DATA QUERY LANGUAGE (DQL)
--SELECT Clause
select * from mahasiswa; --(*) menandakan semua kolom
select nama_mahasiswa, alamat from mahasiswa; -- menampilkan spesifik beberapa kolom 
select mhs.nama_mahasiswa, mhs.kode_agama from mahasiswa mhs; -- mhs adalah alias dari nama table
select nama_mahasiswa as mahasiswa, alamat as address from mahasiswa; -- as adalah alias dari kolom
select mhs.nama_mahasiswa as mahasiswa, mhs.alamat as address from mahasiswa mhs; -- alias table dan kolom

--SELECT ORDER BY clause
--Order by digunakan untuk melakukan sortir data berdasarkan kolom
select nama_mahasiswa, alamat from mahasiswa order by nama_mahasiswa; --sort ascending by nama_mahasiswa 
select nama_mahasiswa, alamat from mahasiswa order by alamat; --sort ascending by alamat
select nama_mahasiswa, alamat from mahasiswa order by nama_mahasiswa, alamat; --sort ascending by all
select nama_mahasiswa, alamat from mahasiswa order by nama_mahasiswa desc; --sort descending by nama_mahasiswa

--WHERE digunakan untuk ekspresi kondisi dari data 
select nama_mahasiswa, alamat from mahasiswa where nama_mahasiswa'Cahyono' order by nama_mahasiswa; --sort ascending by nama_mahasiswa
select * from mahasiswa where id=2 order by nama_mahasiswa;
select * from mahasiswa where id>2 order by nama_mahasiswa;
select * from mahasiswa where id>=2 order by nama_mahasiswa;
select * from mahasiswa where id<2 order by nama_mahasiswa;
select * from mahasiswa where id<=2 order by nama_mahasiswa;
select * from mahasiswa where id!=2 order by nama_mahasiswa;
select * from mahasiswa where id<>2 order by nama_mahasiswa;

--LIKE digunakan untuk mencari data yang sesuai dengan kondisi (seperti)
select * from mahasiswa where alamat= 'Jl. Mawar, Bandung' order by nama_mahasiswa;
select * from mahasiswa where alamat like 'Jl. Mawar, Bandung' order by nama_mahasiswa;

--wildcard (%) yang artinya membiarkan/membebaskan kata yang ada di sebelah kiri/kanan
select * from mahasiswa where alamat like '%Mawar, Bandung' order by nama_mahasiswa;
select * from mahasiswa where alamat like '%Bandung' order by nama_mahasiswa;
select * from mahasiswa where alamat like 'Jl.%' order by nama_mahasiswa;
select * from mahasiswa where alamat like 'Jl. Jawa%' order by nama_mahasiswa;	
select * from mahasiswa where alamat like '%wa%' order by nama_mahasiswa;

--ILIKE seperti LIKE tapi dia mengabaikan huruf besar atau kecil (incase sensitif)
select * from mahasiswa where alamat ilike '%ba%' order by nama_mahasiswa;

-- NOT penggunaannya untuk negasi dari yang di dapat
select * from mahasiswa where alamat not like '%ba%' order by nama_mahasiswa;
select * from mahasiswa where alamat not ilike '%Bandung' order by nama_mahasiswa;

--IN digunakan untuk semua kondisi didalam kurung IN
select * from mahasiswa where id in (2,4,5) order by nama_mahasiswa;
select * from mahasiswa where id in (1,3) order by nama_mahasiswa;
select * from mahasiswa where id not in (2,4,5) order by nama_mahasiswa;
select * from mahasiswa where id not in (1,3) order by nama_mahasiswa;
select * from mahasiswa where nama_mahasiswa in ('Cahyono') order by nama_mahasiswa;

--BETWEEN range dari data yg dipilih 
select * from mahasiswa where id between 1 and 3 order by nama_mahasiswa;
select * from mahasiswa where id not between 1 and 3 order by nama_mahasiswa;

--AGREGAT (anggregation) pengelompokan data dan kalkulasi
--group by -> dikelompokkan berdasarkan kolom tertentu
select * from mahasiswa;
select kode_jurusan from mahasiswa group by kode_jurusan;
select kode_agama from mahasiswa group by kode_agama;
select kode_jurusan from mahasiswa where kode_jurusan in ('J001','J002') group by kode_jurusan;

--fungsi aggregat (count()) 
select kode_jurusan, count(kode_jurusan) as jumlah from mahasiswa group by kode_jurusan;
select kode_agama, count(*) as jumlah from mahasiswa group by kode_agama;
select kode_jurusan, count(kode_jurusan) as jumlah from mahasiswa
	where kode_jurusan in ('J001','J002') 
	group by kode_jurusan
	order by kode_jurusan;

--fungsi SUM() meghitung total data
select * from nilai;
select sum(nilai) as total from nilai;
select kode_mahasiswa, sum(nilai) as total from nilai group by kode_mahasiswa;
select kode_mahasiswa, count(kode_mahasiswa) as total_data, sum(nilai)as total from nilai
group by kode_mahasiswa;
select kode_mahasiswa, sum(nilai) as total from nilai group by kode_mahasiswa;

--fungsi AVG() menghitung nilai rata2
select 
	kode_mahasiswa,
	count(kode_mahasiswa) as total_data,
	sum(nilai) as total_nilai,
	(sum(nilai)/count(kode_mahasiswa)) as nilai_rata_rata
	from nilai 
group by kode_mahasiswa;

--menggunakan fungsi avg()
select avg(nilai) as rata2 from nilai;
select kode_mahasiswa, avg(nilai) as rata2 from nilai group by kode_mahasiswa;

--fungsi MAX() - mencari nilai maksismum
select max(nilai) as rata2 from nilai;
select kode_mahasiswa, max(nilai) as nilai_tertinggi from nilai group by kode_mahasiswa;

--fungsi MIN() - mencari nilai minimum
select min(nilai) as rata2 from nilai;
select kode_mahasiswa, min(nilai) as nilai_terendah from nilai group by kode_mahasiswa;

--group by dan distinct
--group by mengelompokan berdasarkan kolom dan semua data tiap baris
--distinct mengelompokan data berdasarkan kolom saja
select distinct kode_mahasiswa, nilai from nilai;
select distinct kode_mahasiswa, sum(nilai) from nilai group by kode_mahasiswa;

--Having kondisi berdasarkan hasil agregat
select kode_mahasiswa, count(nilai) as jumlah_nilai from nilai group by kode_mahasiswa having count(nilai) = 2;

alter table mahasiswa add column tanggal_lahir date; --format tanggal YYYY-MM-DD
select * from mahasiswa;
update mahasiswa set tanggal_lahir = '2001-01-09' where id=1;
update mahasiswa set tanggal_lahir = '2000-12-13' where id=2;
update mahasiswa set tanggal_lahir = '2012-09-16' where id=3;
update mahasiswa set tanggal_lahir = '1999-05-14' where id=4;
update mahasiswa set tanggal_lahir = '1998-06-18' where id=5;

--menambahkan kolom umur di tabel mahasiswa
select 
	*,
	(extract('year' from (current_DATE)) - extract('year' from tanggal_lahir)) as umur 
from mahasiswa;

--menghitung umur menggunakan fungsi age()
select *, age(current_date, tanggal_lahir) from mahasiswa;
select *, age(tanggal_lahir) from mahasiswa;

--join table - digunakan untuk menyatukan data dari tabel2 yang sudah ber-relasi
--join tabel secara manual (membuka semua tabel yg ingin di join)
--manual join tidak disarankan karena menyita banyak memory
--explain - untuk menampilkan query plan (peforma aktivitas dari query)
select
	m.nama_mahasiswa,
	j.nama_jurusan,
	a.deskripsi
from mahasiswa m, jurusan j, agama a
where m.kode_jurusan=j.kode_jurusan and m.kode_agama = a.kode_agama;

--join clause setara dengan inner join
select
	m.nama_mahasiswa,
	j.nama_jurusan,
	a.deskripsi
from mahasiswa m
join jurusan j on  m.kode_jurusan = j.kode_jurusan
join agama a on  m.kode_agama = a.kode_agama;

--left join menjadikan tabel dikiri sebagai acuan penyatuan datanya
--misalnya tabel dikiri ada 10 baris tabel yg dijoin ada 12 baris
--yang akan ditampilkan adalah 10 baris 
select * from nilai;

select
	m.nama_mahasiswa,
	u.nama_ujian,
	n.nilai
from nilai n
left join mahasiswa m on m.kode_mahasiswa=n.kode_mahasiswa
left join ujian u on u.kode_ujian = n.kode_ujian;

select
	m.nama_mahasiswa,
	u.nama_ujian,
	n.nilai
from ujian u
left join nilai n on n.kode_ujian = u.kode_ujian
left join mahasiswa m on m.kode_mahasiswa=n.kode_mahasiswa;

--right join kebalikan dari left join dimana sebelah kanan dijadikan acuan
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

--inner join sama dengan join - 
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
--tabel di kiri dan kanan menjadi acuan data yang ditampilkan
select
	u.nama_ujian,
	n.nilai
from ujian u
full outer join nilai n on n.kode_ujian = u.kode_ujian;

--tabel view
drop view view_nilai; --untuk me-reset view jika sudah ada view
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
--coalesce
--union
--hash









--2
ALTER TABLE dosen.dosen alter column nama_dosen SET DATA TYPE varchar (200) USING nama_dosen::varchar;


--3
select 
	m.kode_mahasiswa,
	m.nama_mahasiswa,
	j.nama_jurusan,
	a.deskripsi
from mahasiswa m 
join jurusan j on m.kode_jurusan = j.kode_jurusan
join agama a on m.kode_agama = a. kode_agama
where m.nama_mahasiswa='Budi Gunawan';


--4
select 
	m.kode_mahasiswa,
	m.nama_mahasiswa,
	j.nama_jurusan,
	j.status_jurusan
from mahasiswa m 
join jurusan j on m.kode_jurusan = j.kode_jurusan
where j.status_jurusan='Non Aktif';


--5
select 
	m.nama_mahasiswa,
	n.nilai,
	u.status_ujian
from nilai n
join ujian u on n.kode_ujian = u.kode_ujian
join mahasiswa m on m.kode_mahasiswa=n.kode_mahasiswa where status_ujian like 'Aktif' and nilai>80;

--6
select
	j.kode_jurusan,
	j.nama_jurusan,
	j.status_jurusan
from jurusan j where nama_jurusan ilike '%sistem%';

--7
select 
	m.nama_mahasiswa,  
	count(nilai) as jumlah_ujian 
from nilai n 
join mahasiswa m on m.kode_mahasiswa  = n.kode_mahasiswa
join ujian u on u.kode_ujian = n.kode_ujian
group by nama_mahasiswa having count (nilai) > 1;



--8
select 
	m.kode_mahasiswa,
	m.nama_mahasiswa,
	j.nama_jurusan,
	a.deskripsi,
	dosen.dosen.nama_dosen,
	j.status_jurusan,
	dosen.type_dosen.deskripsi 
from mahasiswa m 
join jurusan j on m.kode_jurusan = j.kode_jurusan
join agama a on m.kode_agama = a. kode_agama
join dosen.dosen on dosen.dosen.kode_dosen = dosen.dosen.kode_dosen 
join dosen.type_dosen on dosen.type_dosen.deskripsi = dosen.type_dosen.deskripsi  
where j.status_jurusan='Aktif'
and dosen.nama_dosen = 'Prof. Dr. Retno'
and m.nama_mahasiswa='Budi Gunawan'
and dosen.type_dosen.deskripsi = 'Honorer';


--9
create or replace view view_data as 
select 
	m.kode_mahasiswa,
	m.nama_mahasiswa,
	j.nama_jurusan,
	a.deskripsi as kode_agama ,
	dosen.dosen.nama_dosen,
	j.status_jurusan,
	dosen.type_dosen.deskripsi  
from mahasiswa m 
join jurusan j on m.kode_jurusan = j.kode_jurusan
join agama a on m.kode_agama = a. kode_agama
join dosen.dosen on dosen.dosen.kode_dosen = dosen.dosen.kode_dosen 
join dosen.type_dosen on dosen.type_dosen.deskripsi = dosen.type_dosen.deskripsi  
where j.status_jurusan='Aktif'
and dosen.nama_dosen = 'Prof. Dr. Retno'
and m.nama_mahasiswa='Budi Gunawan'
and dosen.type_dosen.deskripsi = 'Honorer';


--10
select
	m.kode_mahasiswa,
	m.nama_mahasiswa,
	m.alamat,
	m.kode_agama,
	m.kode_jurusan,
	m.tanggal_lahir,
	n.nilai
from mahasiswa m 
left join nilai n on n.kode_mahasiswa  = m.kode_mahasiswa;










