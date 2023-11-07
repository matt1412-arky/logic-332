-- NOMOR 2

 -- skema dosen.table dosen 
alter table dosen.dosen alter column nama_dosen type varchar(200);

-- NOMOR 3
select 
	m.kode_mahasiswa,
	m.nama_mahasiswa,
	j.nama_jurusan,
	a.deskripsi
from mahasiswa m -- m alias 
join jurusan j on j.kode_jurusan=m.kode_jurusan 
join agama a  on a.kode_agama =m.kode_agama 
where m.kode_mahasiswa = 'M001';

-- cara mengerjakan select -> from (nentuin table mana yg jadi acuan) -> join (table mana yg mau dijoin)  -> select apa aja yg dipilih untuk dipilih -> show di bagian where

--NOMOR 4
select 
	m.kode_mahasiswa,
	m.nama_mahasiswa,
	m.kode_jurusan,
	j.status_jurusan 
from mahasiswa m 
left join jurusan j on j.kode_jurusan=m.kode_jurusan 
where j.status_jurusan='Non Aktiv';

-- NOMOR 5 
select 
	m.kode_mahasiswa,
	m.nama_mahasiswa,
	n.nilai,
	u.status_ujian 
from nilai n 
join mahasiswa m  on m.kode_mahasiswa = n.kode_mahasiswa  
join ujian u on u.kode_ujian =n.kode_ujian
where n.nilai > 80 and u.status_ujian = 'Aktiv';

truncate table nilai restart identity; --restart identity untuk me-reset sequence(kembali mulai dari 1) 

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

-- NOMOR 6
select * from jurusan where nama_jurusan ilike 'sistem%';


--select kode_jurusan, count(kode_jurusan) as jumlah  from mahasiswa group by kode_jurusan order by kode_jurusan;

update dosen.dosen set nama_dosen = 'Prof. Dr. Retno Wahyuningsih' where nama_dosen = 'Prof. Dr. Retno'; 

-- NOMOR 7
select
	m.kode_mahasiswa,
	m.nama_mahasiswa,
	count(m.kode_mahasiswa) as jumlah
from nilai n
join mahasiswa m on m.kode_mahasiswa = n.kode_mahasiswa  
group by m.kode_mahasiswa , m.nama_mahasiswa
having count(m.kode_mahasiswa) > 1;

-- NOMOR 8
select 
	m.kode_mahasiswa,
	m.nama_mahasiswa,
	j.nama_jurusan,
	a.deskripsi,
	d.nama_dosen,
	j.status_jurusan,
	td.deskripsi 
from mahasiswa m 
join jurusan j on j.kode_jurusan = m.kode_jurusan 
join agama a on a.kode_agama = m.kode_agama 
join dosen.dosen d on d.kode_jurusan = m.kode_jurusan 
join dosen.type_dosen td on td.kode_typedosen = d.kode_typedosen 
where m.kode_mahasiswa='M001' and d.nama_dosen = 'Prof. Dr. Retno Wahyuningsih';

--NOMOR 9

create or replace view Nomor_9 as
select 
	m.kode_mahasiswa,
	m.nama_mahasiswa,
	j.nama_jurusan,
	a.deskripsi as agama,
	d.nama_dosen,
	j.status_jurusan,
	td.deskripsi as type_dosen 
from mahasiswa m 
join jurusan j on j.kode_jurusan = m.kode_jurusan 
join agama a on a.kode_agama = m.kode_agama 
join dosen.dosen d on d.kode_jurusan = m.kode_jurusan 
join dosen.type_dosen td on td.kode_typedosen = d.kode_typedosen 
where m.kode_mahasiswa='M001' and d.nama_dosen = 'Prof. Dr. Retno Wahyuningsih';

select * from Nomor_9;

-- NOMOR 10
select 
	m.kode_mahasiswa,
	m.nama_mahasiswa,
	n.nilai 
from mahasiswa m 
left join nilai n on n.kode_mahasiswa = m.kode_mahasiswa;