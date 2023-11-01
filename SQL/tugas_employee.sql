-- 01. Tampilkan data lengkap karyawan dan rata-rata gaji setahun masing-masing dari mereka
		select nip, concat(first_name,' ',last_name) as fullname, status, salary, (salary * 12) / 12 as average_per_year
		from employee
		left join biodata on biodata_id = biodata.id;
		select * from employee;
﻿

-- 02. Tambahkan 3 orang pelamar, dimana 2 di antaranya diterima sebagai karyawan kontrak
--	   dan 1 nya lagi tidak diterima sebagai karyawan.
--	   Lalu tampilkan semua biodata berupa fullname, nip, status karyawan dan salary
		insert into biodata (first_name, last_name, dob, pob, address, marital_status) values 
		('Osama', 'Ali', '1992-02-04', 'Jakarta','Jl. Condet, Jakarta', false),
		('Roy', 'Siregar', '1992-02-07', 'Medan','Jl. Tambun, Bekasi', false),
		('Bell', 'Clay', '1993-06-04', 'Bali','Jl. Kebon Agung, Surabaya', true);
		
		select
		concat(first_name,' ',last_name) as fullname,
		
		e.status,
		e.salary
		from employee
		left join biodata  on biodata_id = biodata_id;
	
	


-- 03. Tampilkan fullname pelamar yang tanggal lahirnya antara 01-01-1991 s/d 31-12-1991



-- 04. Tampilkan nama-nama pelamar yang tidak diterima sebagai karyawan



-- 05. Tampilkan nama karyawan, jenis perjalanan dinas, tanggal perjalanan dinas,
--	   dan total pengeluarannya selama perjalanan dinas tersebut



-- 06. Tampilkan sisa cuti tahun 2020 yang dimiliki oleh karyawan



-- 07. Urutkan nama-nama karyawan dan statusnya, diurutkan dari yang paling tua ke yang paling muda 11



-- 08. Tampilkan selisih antara total item cost dengan total travel fee untuk masing-masing karyawan 12



-- 09. Tampilkan fullname, jabatan, usia, dan jumlah anak dari masing-masing karyawan saat ini
--	   (kalau tidak ada anak tulis 0 (nol) atau '-' saja)



-- 10. Tampilkan fullname dan jabatan 3 karyawan paling tua



-- 11. Hitung berapa rata-rata gaji karyawan dengen level staff



-- 12. Hitung ada berapa karyawan yang sudah menikah dan yang tidak menikah
--     (tabel: menikah x orang, tidak menikah x orang)



-- 13. Jika digabungkan antara cuti dan perjalanan dinas,
--	   berapa hari Raya tidak berada di kantor pada tahun 2020?