-- 02. Buatlah query untuk mengubah column nama_dosen dengan type data varchar dengan panjang 200 pada table
	alter table dosen.dosen alter column nama_dosen type varchar(200);
	
-- 03. Buatlah query untuk menampilkan data berikut:
	-- | kode_mahasiswa | nama_mahasiswa | nama_jurusan 		| agama |
	-- | M001			| Budi Gunawan	 | Teknik Informatika	| Islam |
	select
		m.kode_mahasiswa,
		m.nama_mahasiswa,
		j.nama_jurusan,
		a.deskripsi as agama
	from mahasiswa m
	join jurusan j on m.kode_jurusan = j.kode_jurusan 
	join agama a on m.kode_agama = a.kode_agama 
	where m.nama_mahasiswa like 'Budi%';

-- 04. Buatlah query untuk menampilkan data mahasiswa yang mengambil jurusan dengan status jurusan = non aktif
	select
		m.nama_mahasiswa,
		j.status_jurusan 
	from mahasiswa m
	join jurusan j on m.kode_jurusan = j.kode_jurusan
	where j.status_jurusan like 'Non Aktiv';

-- 05. Buatlah query untuk menampilkan data mahasiswa dengan nilai diatas 80 untuk ujian dengan status ujian = aktif
	select 
		m.nama_mahasiswa,
		n.nilai,
		u.status_ujian 
	from mahasiswa m
	join nilai n on m.kode_mahasiswa = n.kode_mahasiswa
	join ujian u on n.kode_ujian = u.kode_ujian
	where n.nilai > 80 and u.status_ujian not like 'Non Aktiv';

-- 06. Buatlah query untuk menampilkan data jurusan yang mengandung kata 'sistem'
	select * from jurusan where nama_jurusan ilike '%sistem%';

-- 07. Buatlah query untuk menampilkan mahasiswa yang mengambil ujian lebih dari 1
	select 
	mahasiswa.nama_mahasiswa,
	count(nilai.kode_mahasiswa) as ujian_lebih_dari_1
	from nilai
	left join mahasiswa on mahasiswa.kode_mahasiswa = nilai.kode_mahasiswa
	group by mahasiswa.nama_mahasiswa
	having count(nilai.kode_mahasiswa) > 1;
	
	select * from mahasiswa;
	

-- 08. Buatlah query untuk menampilkan data seperti berikut:
	-- | kode_mahasiswa	| nama_mahasiswa	| nama_jurusan			| Agama	| nama_dosen					| status_jurusan	| Deskripsi	|
	-- | M001			| Budi Gunawan		| Teknik Informatika	| Islam	| Prof. Dr. Retno Wahyuningsih	| aktif				| Honorer	|
	select
		m.kode_mahasiswa,
		m.nama_mahasiswa,
		j.nama_jurusan,
		a.deskripsi as agama,
		d.dosen.nama_dosen
	from mahasiswa m;
	join jurusan j on m.kode_jurusan = j.kode_jurusan 
	join agama a on m.kode_agama = a.kode_agama 
	join dosen.dosen d on m.dosen.kode_dosen = d.dosen.kode_dosen;

	select dosen.nama_dosen from dosen ;

	select * from dosen ;

	select kode_mahasiswa, count(nilai) as jumlah_nilai from nilai group by kode_mahasiswa
	having count(nilai) = 2;

-- 09. Buatlah query untuk create view dengan menggunakan data pada no. 8, beserta query untuk mengeksekusi view tersebut


-- 10. Buatlah query untuk menampilkan data mahasiswa beserta nilainya (mahasiswa yang tidak punya nilai juga ditampilkan)
