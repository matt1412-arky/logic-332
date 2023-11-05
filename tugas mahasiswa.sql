-- 2
alter table dosen.dosen alter column nama_dosen set data type varchar(200) using nama_dosen::varchar;

--3
select
m.kode_mahasiswa, 
m.nama_mahasiswa,
j.nama_jurusan,
a.deskripsi
from mahasiswa m
join jurusan j on m.kode_jurusan=j.kode_jurusan
join agama a on m.kode_agama = a.kode_agama
where m.nama_mahasiswa = 'Budi Gunawan';

--4
select
m.kode_mahasiswa, 
m.nama_mahasiswa,
j.nama_jurusan,
j.status_jurusan 
from mahasiswa m
join jurusan j on m.kode_jurusan=j.kode_jurusan
where j.status_jurusan = 'Non Aktif';

--5
select
m.nama_mahasiswa,
a.nilai,
j.status_ujian 
from mahasiswa m
join ujian j on m.id=j.id
join nilai a on m.kode_mahasiswa=a.kode_mahasiswa
where j.status_ujian = 'Aktif' and a.nilai>80;

--6
select * from jurusan where nama_jurusan ilike '%Sistem%';

--7
SELECT nama_mahasiswa, count(nilai.kode_mahasiswa) from nilai
join mahasiswa on nilai.kode_mahasiswa = mahasiswa.kode_mahasiswa 
group by nama_mahasiswa having count(nilai.kode_mahasiswa) >1;

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
join jurusan j on m.kode_jurusan=j.kode_jurusan
join agama a on m.kode_agama = a.kode_agama
join dosen.dosen on dosen.kode_typedosen = dosen.kode_typedosen 
join dosen.type_dosen on dosen.kode_typedosen = dosen.kode_typedosen 
where m.nama_mahasiswa = 'Budi Gunawan' and dosen.dosen.nama_dosen = 'Prof. Dr. Retno' and dosen.type_dosen.deskripsi = 'Honorer';

--9
create or replace view view_data as
select
m.kode_mahasiswa, 
m.nama_mahasiswa,
j.nama_jurusan,
a.deskripsi as kode_agama,
dosen.dosen.nama_dosen,
j.status_jurusan,
dosen.type_dosen.deskripsi  
from mahasiswa m
join jurusan j on m.kode_jurusan=j.kode_jurusan
join agama a on m.kode_agama = a.kode_agama
join dosen.dosen on dosen.kode_typedosen = dosen.kode_typedosen 
join dosen.type_dosen on dosen.kode_typedosen = dosen.kode_typedosen 
where m.nama_mahasiswa = 'Budi Gunawan' and dosen.dosen.nama_dosen = 'Prof. Dr. Retno' and dosen.type_dosen.deskripsi = 'Honorer';

--10
select
m.kode_mahasiswa, 
m.nama_mahasiswa,
m.alamat,
m.kode_agama,
m.kode_jurusan, 
a.nilai
from mahasiswa m
left join nilai a on m.id=a.id