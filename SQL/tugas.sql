-- 02. Buatlah query untuk mengubah column nama_dosen dengan type data varchar dengan panjang 200 pada table
alter table dosen.dosen alter column nama_dosen type varchar (200);

-- 03. Buatlah query untuk menampilkan data berikut:
	-- | kode_mahasiswa | nama_mahasiswa | nama_jurusan 		| agama |
	-- | M001			| Budi Gunawan	 | Teknik Informatika	| Islam |
select kode_mahasiswa, nama_mahasiswa, nama_jurusan, deskripsi from mahasiswa
left join agama on mahasiswa.kode_agama = agama.kode_agama
left join jurusan on mahasiswa.kode_jurusan = jurusan.kode_jurusan
where nama_mahasiswa ilike 'budi%';

-- 04. Buatlah query untuk menampilkan data mahasiswa yang mengambil jurusan dengan status jurusan = non aktif
select kode_mahasiswa, nama_mahasiswa, nama_jurusan, status_jurusan from mahasiswa
left join jurusan on mahasiswa.kode_jurusan = jurusan.kode_jurusan
where status_jurusan ilike 'non%';

-- 05. Buatlah query untuk menampilkan data mahasiswa dengan nilai diatas 80 untuk ujian dengan status ujian = aktif
select nama_mahasiswa, nama_ujian, nilai, status_ujian from nilai
left join mahasiswa on nilai.kode_mahasiswa = mahasiswa.kode_mahasiswa
left join ujian on nilai.kode_ujian = ujian.kode_ujian
where nilai > 80 and status_ujian like 'Aktif%';

-- 06. Buatlah query untuk menampilkan data jurusan yang mengandung kata 'sistem'
select * from jurusan where nama_jurusan like '%Sistem%';

-- 07. Buatlah query untuk menampilkan mahasiswa yang mengambil ujian lebih dari 1
select mahasiswa.nama_mahasiswa, count(nilai.kode_mahasiswa) as ujian_lebih1 from nilai
left join mahasiswa on mahasiswa.kode_mahasiswa = nilai.kode_mahasiswa 
group by mahasiswa.nama_mahasiswa
having count(nilai.kode_mahasiswa) > 1;

-- 08. Buatlah query untuk menampilkan data seperti berikut:
	-- | kode_mahasiswa	| nama_mahasiswa	| nama_jurusan			| Agama	| nama_dosen					| status_jurusan	| Deskripsi	|
	-- | M001			| Budi Gunawan		| Teknik Informatika	| Islam	| Prof. Dr. Retno Wahyuningsih	| aktif				| Honorer	|
select 
	kode_mahasiswa,
	nama_mahasiswa,
	nama_jurusan,
	agama.deskripsi,
	nama_dosen,
	status_jurusan,
	dosen.type_dosen.deskripsi 
from mahasiswa
left join jurusan on mahasiswa.kode_jurusan = jurusan.kode_jurusan 
left join dosen.dosen on jurusan.kode_jurusan = dosen.dosen.kode_jurusan  
left join agama on mahasiswa.kode_agama = agama.kode_agama  
left join dosen.type_dosen on dosen.type_dosen.kode_typedosen = dosen.dosen.kode_typedosen  
where nama_mahasiswa ilike '%Budi%' and nama_dosen ilike '%Retno%';

-- 09. Buatlah query untuk create view dengan menggunakan data pada no. 8, beserta query untuk mengeksekusi view tersebut
create or replace view view_data as
select 
	kode_mahasiswa,
	nama_mahasiswa,
	nama_jurusan,
	agama.deskripsi as agama,
	nama_dosen, status_jurusan,
	dosen.type_dosen.deskripsi as status 
from mahasiswa
left join jurusan on mahasiswa.kode_jurusan = jurusan.kode_jurusan 
left join dosen.dosen on jurusan.kode_jurusan = dosen.dosen.kode_jurusan  
left join agama on mahasiswa.kode_agama = agama.kode_agama  
left join dosen.type_dosen on dosen.type_dosen.kode_typedosen = dosen.dosen.kode_typedosen  
where nama_mahasiswa ilike '%Budi%' and nama_dosen ilike '%Retno%';

-- 10. Buatlah query untuk menampilkan data mahasiswa beserta nilainya (mahasiswa yang tidak punya nilai juga ditampilkan)
select mahasiswa.kode_mahasiswa , nama_mahasiswa, alamat, agama.deskripsi as agama,
jurusan.nama_jurusan as jurusan, nilai from mahasiswa
left join agama on agama.kode_agama = mahasiswa.kode_agama 
left join jurusan on jurusan.kode_jurusan = mahasiswa.kode_jurusan 
left join nilai on nilai.kode_mahasiswa = mahasiswa.kode_mahasiswa ;