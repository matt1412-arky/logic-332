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

create table agama (
	id serial not null,
	kode_agama varchar(5) not null primary key,
	deskripsi varchar(20) not null
);

insert into agama (kode_agama, deskripsi) 
values
('A001', 'Islam'),
('A002', 'Kristen'),
('A003', 'Katolik'),
('A004', 'Hindu'),
('A005', 'Budha');