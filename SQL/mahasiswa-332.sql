create database mahasiswa;

create table jurusan (
	id serial not null, --serial -> integer; bigserial -> biginter; (AUTO INCREMENT)
	kode_jurusan varchar (5) not null primary key,
	nama_jurusan varchar (50) not null,
	status_jurusan varchar (100) not null
);

insert  into jurusan (kode_jurusan, nama_jurusan , status_jurusan)
values
('J001','Teknik Informatika', 'Aktif'),
('J002','Management Infotmatika', 'Aktif'),
('J003', 'Sistem Informasi', 'Non Akitf'),
('J004', 'Sistem Komputer', 'Aktif'),
('J005', 'Komputer Akutansi', 'Non Aktif');

--unique key dipergunakan untuk menjaga beberapa kolom untuk tidak dapat diisi
--dengan data yang sama (misal : 3 kolom diisi dengan data yang sama persis untuk
--tiap kolom nya)
alter table	jurusan add constraint jurusan_ukey unique (nama_jurusan, status_jurusan);
--test unique constraint
insert  into jurusan (kode_jurusan, nama_jurusan , status_jurusan)
values ('J006', 'Teknik Informatika', 'Aktif');

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

create table mahasiswa (
	id serial not null,
	kode_mahasiswa varchar(5) not null primary key,
	nama_mahasiswa varchar(100) not null,
	alamat varchar(200) not null,
	kode_agama varchar(5),
	kode_jurusan varchar(5),
	constraint mhs_agama_fkey foreign key (kode_agama) references agama (kode_agama),
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
('M003', 'Asep Saepudin', 'Jl. Sumatra , Ciamis', 'A001', 'J003'),
('M004', 'M. Hafif Isbullah', 'Jl. Jawa, Jakarta Pusat', 'A001', 'J001'),
('M005', 'Cahyono', 'Jl. Niagara, Surabaya', 'A003', 'J002');

create table ujian (
	id serial not null,
	kode_ujian varchar(5) not null primary key,
	nama_ujian varchar(50) not null,
	status_ujian varchar(50)
);

insert into ujian (kode_ujian, nama_ujian, status_ujian) values
('U001', 'Algoritma', 'Aktif'),
('U002', 'Aljabar', 'Aktif'),
('U003', 'Statistika', 'Non Aktif'),
('U004', 'Etika Profesi', 'Non Aktif'),
('U005', 'Bahasa Inggris', 'Aktif');

create schema dosen;

create table dosen.type_dosen (
	id serial not null,
	kode_typedosen varchar(5) not null primary key,
	deskripsi varchar(20)
);

insert into dosen.type_dosen (kode_typedosen, deskripsi) values 
('T001', 'Tetap'),
('T002', 'Honorer'),
('T003', 'Expertise');

create table dosen.dosen ( 
	id serial not null,
	kode_dosen varchar(5) not null primary key,
	nama_dosen varchar(100) not null,
	kode_jurusan varchar(5) not null,
	kode_typedosen varchar(5) not null,
	constraint dosen_jurusan_fkey foreign key (kode_jurusan)
	references public.jurusan (kode_jurusan),
	constraint dosen_type_fkey foreign key (kode_typedosen)
	references dosen.type_dosen (kode_typedosen)
);

alter table dosen.dosen drop constraint dosen_type_fkey; -- menghapus contstraint

alter table dosen.dosen add constraint dosen_type_fkey foreign key (kode_typedosen)
references dosen.type_dosen(kode_typedosen); -- menambah constraint



insert into dosen.dosen (kode_dosen, nama_dosen, kode_jurusan, kode_typedosen)
values
('D001', 'Prof. Dr. Retno', 'J001', 'T002'),
('D002', 'Prof. Roy', 'J001', 'T002'),
('D003', 'Prof. Hendri', 'J001', 'T002'),
('D004', 'Prof. Risma', 'J001', 'T002'),
('D005', 'Prof. Amir, MM, MA', 'J001', 'T002');

--Delete table ujian
delete from ujian; -- menghapus semua data -> gunakan where clause untuk spesifikasi data
--truncate table untuk mereset data dan structure table
truncate table ujian restart identity; --restart identity untuk me-reset sequence (kembali) 

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
select * from mahasiswa;-- (*) menandakan semua kolom
select nama_mahasiswa, alamat from mahasiswa;-- Menampilkan spesifikasi beberapa kolom
select mhs.nama_mahasiswa, mhs.kode_agama from mahasiswa mhs;-- mhs adalah alias dari nama tabel
select nama_mahasiswa as mahasiswa, alamat as address from mahasiswa;-- as adalah alias dari kolom
select mhs.nama_mahasiswa as mahasiswa, mhs.alamat as address from mahasiswa mhs;-- alias dari kolom
--SELECT ORDER BY clause
--Order by digunakan untuk melakukan sortir data berdasarkan kolom
select nama_mahasiswa, alamat from mahasiswa order by nama_mahasiswa; --sort ascending by nama mahasiswa
select nama_mahasiswa, alamat from mahasiswa order by alamat; --sort ascending by nama alamat
select nama_mahasiswa, alamat from mahasiswa order by nama_mahasiswa, alamat; --sort ascending by all
select nama_mahasiswa, alamat from mahasiswa order by nama_mahasiswa desc; --sort descending by nama mahasiswa
--Where digunakan untuk melakukan sortir data berdasarkan kolom
select nama_mahasiswa, alamat from mahasiswa where nama_mahasiswa 'Cahyono' order by nama_mahasiswa -- sort ascending by nama_mahasiswa
select * from mahasiswa where id=2 order by nama_mahasiswa;
select * from mahasiswa where id>2 order by nama_mahasiswa;
select * from mahasiswa where id>=2 order by nama_mahasiswa;
select * from mahasiswa where id<2 order by nama_mahasiswa;
select * from mahasiswa where id<=2 order by nama_mahasiswa;
select * from mahasiswa where id!=2 order by nama_mahasiswa;
select * from mahasiswa where id<>2 order by nama_mahasiswa;
--Like digunakan untuk mencari data yang sesuai dengan kondisi (seperti)
select * from mahasiswa where alamat = 'Jl. Mawar, Bandung' order by nama_mahasiswa;
select * from mahasiswa where alamat like 'Jl. Mawar, Bandung' order by nama_mahasiswa;
--wildcard (%)
select * from mahasiswa where alamat like '%Mawar, Bandung' order by nama_mahasiswa;
select * from mahasiswa where alamat like '%Bandung' order by nama_mahasiswa;
select * from mahasiswa where alamat like '%Jl. Jawa' order by nama_mahasiswa;
select * from mahasiswa where alamat like '%wa' order by nama_mahasiswa;
--ILIKE seperi LIKE tapi dia mengabaikan huruf besar dan kecil (incase sensitif)
select * from mahasiswa where alamat ilike '%ba' order by nama_mahasiswa;
--NOT penggunaannya untuk negasi dari yang di dapat
select * from mahasiswa where alamat not ilike '%ba' order by nama_mahasiswa;
select * from mahasiswa where alamat not like '%Bandung' order by nama_mahasiswa;
--IN digunakan untuk semua kondisi didalam kurung IN
select * from mahasiswa where id in (2,4,5) order by nama_mahasiswa;
select * from mahasiswa where id in (1,3) order by nama_mahasiswa;
select * from mahasiswa where id not in (2,4,5) order by nama_mahasiswa;
select * from mahasiswa where id not in (1,3) order by nama_mahasiswa;
select * from mahasiswa where mahasiswa in ('Cahyono','Rinto Raharjo') order by nama_mahasiswa;
--BETWEEN range dari data yang dipilih
select * from mahasiswa where id between 1 and 3 order by nama_mahasiswa;
select * from mahasiswa where id not between 1 and 3 order by nama_mahasiswa;
--AGREGAT (aggregation) pengelompokan data dan kalkulasi
-- Group by -> dikelompokan berdasarkan kolom tertentu
select * from mahasiswa;
select kode_jurusan from mahasiswa group by kode_jurusan;
select kode_agama from mahasiswa group by kode_agama;
select kode_jurusan from mahasiswa where kode_jurusan in ('J001', 'J002') group by kode_jurusan; 
-- Fungsi aggregat (count()) - menghitung berapa banyak data yang terkelompok
select kode_jurusan, count(kode_jurusan) as jumlah from mahasiswa group by kode_jurusan;
select kode_agama, count(*) as jumlah from mahasiswa group by kode_agama order by kode_agama;
select kode_jurusan, count(kode_jurusan)as jumlah from mahasiswa where 
kode_jurusan in ('J001', 'J002') group by kode_jurusan order by kode_jurusan;
-- Fungsi SUM() - menghitung total data
select * from nilai;
select sum(nilai) as total from nilai;
select kode_mahasiswa, count(kode_mahasiswa) as total_data, sum(nilai) as total from nilai group by kode_mahasiswa;
select kode_mahasiswa, sum(nilai) as total from nilai group by kode_mahasiswa;
-- Fungsi AVG() - mehitung nilai rata rata
select kode_mahasiswa, count(kode_mahasiswa) as total_data, sum(nilai) as total_nilai ,
(sum(nilai) / count(kode_mahasiswa)) as nilai_rata_rata from nilai group by kode_mahasiswa;
-- Menggunakan fungsi avg()
select avg(nilai) as rata2 from nilai;
select kode_mahasiswa, avg(nilai) as rata2 from nilai group by kode_mahasiswa;
-- Fungsi MAX() - mecari nilai maximum
select max(nilai) as maximum from nilai;
select kode_mahasiswa, max(nilai) as nilai_tertinggi from nilai group by kode_mahasiswa;
-- Fungsi MIN() - mencari nilai minimum
select min(nilai) as minimum from nilai;
select kode_mahasiswa, min(nilai) as nilai_tertinggi from nilai group by kode_mahasiswa;
-- Group by dan distinct
-- group by yang mengelompokan berdasarkan kolom dan semua data tiap baris
-- distinct mengelompokan data berdasarkan kolom saja
select distinct kode_mahasiswa, nilai from nilai;
select distinct kode_mahasiswa, sum(nilai) from nilai group by kode_mahasiswa;
-- Having kondisi berdasarkan hasil aggregat
select kode_mahasiswa, count(nilai) as jumlah_nilai from nilai group by kode_mahasiswa having count(nilai)=2;
--operasi date/tanggal
alter table mahasiswa add column tanggal_lahir date;-- format tanggal YYYY-MM-DD
select * from mahasiswa;
update mahasiswa set tanggal_lahir = '2001-01-09' where id =1;
update mahasiswa set tanggal_lahir = '2009-12-13' where id =2;
update mahasiswa set tanggal_lahir = '2012-09-11' where id =3;
update mahasiswa set tanggal_lahir = '1999-05-14' where id =4;
update mahasiswa set tanggal_lahir = '1998-06-18' where id =5;
--menambahkan kolom umur di tabel mahasiswa
select * ,(extract('year' from (current_DATE)) . extract ('year' from tanggal_lahir)) as umur from mahasiswa;
--menghitung umur menggunakan fungsi age()
select *, age(current_date, tanggal_lahir) from mahasiswa;
select *, age(tanggal_lahir) from mahasiswa;
--Join table - digunakan untuk menyatukan data dari tabel-tabel yang sudah ber-relasi
--join table secara manual (membuka semua table yang ingin di join)
--manual join tidak disarankan karena menyita banyak memory
--explain untuk menampilkan query plan (performa aktivitas dari query)
select m.nama_mahasiswa, j.nama_jurusan, a.deskripsi from mahasiswa m, jurusan j , agama a where 
m.kode_jurusan=j.kode_jurusan and m.kode_agama = a.kode_agama;
--join clause setara dengan inner join
select m.nama_mahasiswa, j.nama_jurusan, a.deskripsi from mahasiswa m
join jurusan j on  m.kode_jurusan = j.kode_jurusan 
join agama a on m.kode_agama = a.kode_agama;
--left join menjadikan tabel dikiri sebagai acuan penyatu datanya
-- misalnya tabel dikiri ada 10 baris tabel yang di join ada 12 baris
-- yang akan di tampilkan
select * from nilai;
select * from mahasiswa;
select * from nilai;
select m.nama_mahasiswa, u.nama_ujian, n.nilai from nilai n
left join mahasiswa m on m.kode_mahasiswa = n.kode_mahasiswa
left join ujian u on u.kode_ujian = n.kode_ujian;
select m.nama_mahasiswa, u.nama_ujian, n.nilai from ujian u 
left join nilai n on n.kode_ujian = u.kode_ujian
left join mahasiswa m on m.kode_mahasiswa = n.kode_mahasiswa ;
--right join kebalikan dari left join dimana tabel sebelah kanan dijadikan acuan
select u.nama_ujian , n.nilai from ujian u right join nilai n on n.kode_ujian = u.kode_ujian;
--inner join sama dengan join
-- inner join mengambil semua data irisan dari 2 table
select u.nama_ujian , n.nilai from nilai n inner join ujian u on n.kode_ujian = u.kode_ujian;
select u.nama_ujian , n.nilai from ujian u right join nilai n on n.kode_ujian = u.kode_ujian;
--table view
drop view view_nilai ;
create or replace view view_nilai as 
select 
	m.kode_mahasiswa , 
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
select nama_mahasiswa, avg(nilai) as rata2 from view_nilai group by nama_mahasiswa order by nama_mahasiswa;
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
--coalesce akan menghasilkan argument pertama yang tidak null
--jika semua argument = null - coalesce akan return null
select coalesce (1, 2, 3); --hasil = 1
select coalesce (2, 1, 3); --hasil = 2
select coalesce (1, null , 2, null); -- hasil = 1
select coalesce (null, 1, 2 ,3); -- hasil = 1
select coalesce (null, null, null, 5, 5, 7, 5);

--select bebas
select (1+5) as total;
select 'lulus' as status;
--select hash
select md5('password*123');
select sha256('pasword*123');
--union - menggabungkan 2 table dengan syarat jumlah kolomnya sama
select 
	nama_mahasiswa,
	nama_jurusan,
	nama_ujian,
	nilai,
	'LULUS' as keterangan 
from view_nilai where nilai >= 80
union all
select 
	nama_mahasiswa,
	nama_jurusan,
	nama_ujian,
	nilai,
	'TIDAK LULUS' as keterangan
from view_nilai where nilai < 80;
