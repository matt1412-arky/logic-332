--2. Buatlah query untuk mengubah column nama_dosen dengan type data varchar dengan panjang 200 pada table dosen
 alter table dosen.dosen alter column nama_dosen type varchar(200);
 
--3.
select * from mahasiswa;
select * from jurusan;
select * from agama;
select
	m.kode_mahasiswa,
	m.nama_mahasiswa,
	j.nama_jurusan,
	a.deskripsi
from mahasiswa m 
left join jurusan j on m.kode_jurusan = j.kode_jurusan
left join agama a on m.kode_agama = a.kode_agama
where kode_mahasiswa like '%1';

--4. 
select
	m.kode_mahasiswa,
	m.nama_mahasiswa,
	m.alamat,
	m.tanggal_lahir, 
	j.status_jurusan
from mahasiswa m 
left join jurusan j on m.kode_jurusan = j.kode_jurusan
where status_jurusan  like 'Non%';

--5. 
select * from ujian;
select * from nilai;
select
	m.kode_mahasiswa,
	m.nama_mahasiswa,
	m.alamat,
	m.tanggal_lahir, 
	n.nilai,
	u.status_ujian 
from nilai n 
left join ujian u on u.kode_ujian = n.kode_ujian 
left join mahasiswa m on m.kode_mahasiswa =  n.kode_mahasiswa 
where status_ujian  like 'Aktiv%' and nilai > 80 ;  

--6. 
select * from jurusan where nama_jurusan like '%Sistem%';

--7.
select 
	m.nama_mahasiswa,
	count(n.nilai) as jumlah_nilai  
from nilai n 
left join mahasiswa m on m.kode_mahasiswa = n.kode_mahasiswa
group by nama_mahasiswa having count(n.nilai) = 2;

--8.
update dosen.dosen set nama_dosen='Prof. Dr. Retno Wahyuningsih' where kode_dosen='D001'; 
select 
	m.kode_mahasiswa,
	m.nama_mahasiswa,
	j.nama_jurusan,
	a.deskripsi,
	d.nama_dosen,
	j.status_jurusan,
	td.deskripsi
from mahasiswa m
left join jurusan j on m.kode_jurusan = j.kode_jurusan 
left join agama a on m.kode_agama = a.kode_agama 
left join dosen.dosen d on d.kode_jurusan = j.kode_jurusan 
left join dosen.type_dosen td on td.kode_typedosen = d.kode_typedosen
where kode_mahasiswa like '%1' and nama_dosen like '%Wahyuningsih';

--9.
create or replace view view_data_no8 as
select 
	m.kode_mahasiswa,
	m.nama_mahasiswa,
	j.nama_jurusan,
	a.deskripsi as agama,
	d.nama_dosen,
	j.status_jurusan,
	td.deskripsi as typedosen
from mahasiswa m
left join jurusan j on m.kode_jurusan = j.kode_jurusan 
left join agama a on m.kode_agama = a.kode_agama 
left join dosen.dosen d on d.kode_jurusan = j.kode_jurusan 
left join dosen.type_dosen td on td.kode_typedosen = d.kode_typedosen
where kode_mahasiswa like '%1' and nama_dosen like '%Wahyuningsih';

select * from view_data_no8;

--10.
select 
	m.kode_mahasiswa,
	m.nama_mahasiswa,
	m.alamat,
	a.deskripsi,
	j.nama_jurusan,
	m.tanggal_lahir,
	n.nilai 
from mahasiswa m
left join agama a on a.kode_agama = m.kode_agama
left join jurusan j on j.kode_jurusan = m.kode_jurusan 
left join nilai n on n.kode_mahasiswa = m.kode_mahasiswa 
