select * from mahasiswa;

-- alter kolom
alter table dosen.dosen alter column nama_dosen type varchar(200);

-- select data
select kode_mahasiswa, nama_mahasiswa, nama_jurusan, deskripsi from mahasiswa
left join agama on mahasiswa.kode_agama = agama.kode_agama
left join jurusan on mahasiswa.kode_jurusan = jurusan.kode_jurusan;

-- select data non aktiv
select nama_mahasiswa, alamat, nama_jurusan, status_jurusan from mahasiswa
left join jurusan on mahasiswa.kode_jurusan = jurusan.kode_jurusan
where status_jurusan ilike 'non%';

-- select nilai > 80 and status ujian = aktiv
select nama_mahasiswa, nama_ujian, nilai, status_ujian from nilai
right join mahasiswa on nilai.kode_mahasiswa = mahasiswa.kode_mahasiswa 
right join ujian on nilai.kode_ujian = ujian.kode_ujian
where nilai > 80 and status_ujian ilike 'aktiv';

-- select jurusan with 'sistem'
select * from jurusan where nama_jurusan ilike '%sistem%';

-- select ujian with mahasiswa count over 1
select mahasiswa.nama_mahasiswa from nilai
left join mahasiswa on mahasiswa.kode_mahasiswa = nilai.kode_mahasiswa
group by mahasiswa.nama_mahasiswa
having count(nilai.kode_mahasiswa) > 1;

-- select mahasiswa, jurusan dosen
select kode_mahasiswa, nama_mahasiswa, nama_jurusan, agama.deskripsi , nama_dosen, status_jurusan, dosen.type_dosen.deskripsi
from mahasiswa
left join jurusan on mahasiswa.kode_jurusan = jurusan.kode_jurusan
left join dosen.dosen on jurusan.kode_jurusan = dosen.dosen.kode_jurusan
left join agama on mahasiswa.kode_agama = agama.kode_agama
left join dosen.type_dosen on dosen.type_dosen.kode_typedosen = dosen.dosen.kode_typedosen
where nama_mahasiswa ilike '%budi%' and nama_dosen ilike '%retno%';

-- make view
create or replace view view_bu_retno as
select kode_mahasiswa, nama_mahasiswa, nama_jurusan, agama.deskripsi as agama , nama_dosen, status_jurusan, dosen.type_dosen.deskripsi as type_dosen
from mahasiswa
left join jurusan on mahasiswa.kode_jurusan = jurusan.kode_jurusan
left join dosen.dosen on jurusan.kode_jurusan = dosen.dosen.kode_jurusan
left join agama on mahasiswa.kode_agama = agama.kode_agama
left join dosen.type_dosen on dosen.type_dosen.kode_typedosen = dosen.dosen.kode_typedosen
where nama_mahasiswa ilike '%budi%' and nama_dosen ilike '%retno%';

-- mahasiswa nad nilai
select mahasiswa.kode_mahasiswa, nama_mahasiswa, alamat, agama.deskripsi as agama, jurusan.nama_jurusan as jurusan, nilai
from mahasiswa
left join agama on agama.kode_agama = mahasiswa.kode_agama 
left join jurusan on jurusan.kode_jurusan = mahasiswa.kode_jurusan 
full join nilai on nilai.kode_mahasiswa = mahasiswa.kode_mahasiswa;

