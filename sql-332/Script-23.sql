create database mahasiswa;

create table jurusan(
	id serial not null,  --serial -> integer; bigserial -> biginteger;
	kode_jurusan varchar(5) not null primary key,
	nama_jurusan varchar(50) not null,
	status_jurusan varchar(100) not null
);

insert into jurusan (kode_jurusan, nama_jurusan, status_jurusan)
values
('j001', 'Teknik Informatika', 'Aktif'),
('j002', 'Manajemen Informatika', 'Aktif'),
('j003', 'Sistem Informasi', 'Aktif'),
('j004', 'Sistem Komputer', 'Aktif'),
('j005', 'Komputer Akuntansi', 'Non Aktif');

-- unique key memastikan nilai tiap baris berbeda;
alter table jurusan add constraint jurusan_ukey unique (nama_jurusan);

alter table jurusan drop constraint jurusan_ukey;

delete from jurusan;
truncate table jurusan restart identity;

-- test unique constraint;
insert into jurusan (kode_jurusan, nama_jurusan, status_jurusan)
values
('j011', 'Teknik Informatika', 'Aktif');

create table agama(
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
	constraint mhs_agama_fkey foreign key(kode_agama) references agama(kode_agama),
	constraint mhs_jurusan_fkey foreign key(kode_jurusan) references jurusan(kode_jurusan)
);

insert into mahasiswa(
kode_mahasiswa, 
nama_mahasiswa,
alamat, 
kode_agama, 
kode_jurusan
)values
('m001', 'Budi Gunawan', 'Jl. Mawar, Bandung', 'A001', 'j001'),
('m002', 'Budi Kurniawan', 'Jl. Melati, Bandung', 'A004', 'j002'),
('m003', 'Budi Susanto', 'Jl. Kujang, Tangerang', 'A003', 'j003'),
('m004', 'Budi Febriansyah', 'Jl. Banteng, Bogor', 'A002', 'j004'),
('m005', 'Budi Gustavo', 'Jl. Rusak, Jakarta Selatan', 'A005', 'j005');

create table ujian(
	id serial not null,
	kode_ujian varchar(5) not null primary key,
	nama_ujian varchar(50) not null,
	status_ujian varchar(100)
);

insert into ujian (kode_ujian, nama_ujian, status_ujian) values
('u001', 'algoritma', 'aktif'),
('u002', 'Aljabar', 'aktif'),
('u003', 'Statistika', 'aktif'),
('u004', 'Etika Profesi', 'Non aktif'),
('u005', 'Bahasa Inggris', 'aktif');

create schema dosen;

create table dosen.type_dosen(
	id serial not null,
	kode_typedosen varchar(5) not null primary key,
	deskripsi varchar(20)
);

insert into dosen.type_dosen (kode_typedosen, deskripsi) values
('t001', 'Tetap'),
('t002', 'Honorer'),
('t003', 'Expertise');

create table dosen.dosen(
	id serial not null,
	kode_dosen varchar(5) not null primary key,
	nama_dosen varchar(100) not null,
	kode_jurusan varchar(5) not null,
	kode_typedosen varchar(5) not null,
	constraint dosen_jurusan_fkey foreign key (kode_jurusan) references public.jurusan (kode_jurusan),
	constraint dosen_typedosen_fkey foreign key (kode_typedosen) references dosen.type_dosen(kode_typedosen)
);

insert into dosen.dosen(kode_dosen, nama_dosen, kode_jurusan, kode_typedosen) values
('d001', 'Prof. Dr. Retno', 'j001', 't002'),
('d002', 'Prof. Cokro', 'j001', 't001'),
('d003', 'Prof. Godot', 'j001', 't001'),
('d004', 'Prof. Dr. Amita', 'j001', 't003'),
('d005', 'Prof. Dr. Nano', 'j001', 't003');

create table nilai(
 id serial not null primary key,
 kode_mahasiswa varchar(5) not null,
 kode_ujian varchar(5) not null,
 nilai double precision not null,
);

alter table nilai add  constraint nilai_mhs_fkey foreign key (kode_mahasiswa) references public.mahasiswa(kode_mahasiswa);
alter table nilai constraint nilai_ujian_fkey foreign key (kode_ujian) references public.ujian(kode_ujian); 

delete from nilai; -- hapus seluruh data pada table NILAI
truncate table nilai restart identity; -- restart seial increment table

insert into nilai (kode_mahasiswa, kode_ujian, nilai) values 
('m001', 'u001', 89),
('m001', 'u002', 90),
('m004', 'u001', 80),
('m004', 'u003', 78),
('m003', 'u001', 100);


