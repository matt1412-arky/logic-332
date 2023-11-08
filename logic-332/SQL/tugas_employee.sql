-- 01. Tampilkan data lengkap karyawan dan rata-rata gaji setahun masing-masing dari mereka
		select nip, concat(first_name,' ',last_name) as fullname, status, salary, (salary * 12) / 12 as average_per_year
		from employee
		left join biodata on biodata_id = biodata.id;
﻿

-- 02. Tambahkan 3 orang pelamar, dimana 2 di antaranya diterima sebagai karyawan kontrak
--	   dan 1 nya lagi tidak diterima sebagai karyawan.
--	   Lalu tampilkan semua biodata berupa fullname, nip, status karyawan dan salary
		insert into biodata (first_name, last_name, dob, pob, address, marital_status) values 
		('Osama', 'Ali', '1997-04-14', 'Jakarta','Jl. Condet, Jakarta', false),
		('Roy', 'Siregar', '1998-07-21', 'Medan','Jl. Tambun, Bekasi', false),
		('Bell', 'Clay', '2001-02-03', 'Bali','Jl. Kebon Agung, Surabaya', true);
		
		insert into employee (biodata_id, nip, status, salary) values
		(7, 'NX006', 'Kontrak', '10000000'),
		(8, 'NX007', 'Kontrak', '11000000');
			
		select concat(first_name,' ',last_name) as fullname,
		nip,
		status,
		salary
		from employee
		left join biodata on biodata_id = biodata.id;
	
	
-- 03. Tampilkan fullname pelamar yang tanggal lahirnya antara 01-01-1991 s/d 31-12-1991
		select concat(first_name,' ',last_name) as fullname, dob
		from biodata
		where dob >= '01-01-1991' and dob <= '31-12-1991';\


-- 04. Tampilkan nama-nama pelamar yang tidak diterima sebagai karyawan
		select concat(first_name,' ' ,last_name) as fullname,
		dob,
		pob,
		address,
		marital_status, 
		case when employee.status is null then 'Tidak Diterima' 
			 when employee.status is not null then employee.status
			 end status
		from biodata
		left join employee on biodata_id = biodata.id
		where biodata_id is null; 


-- 05. Tampilkan nama karyawan, jenis perjalanan dinas, tanggal perjalanan dinas,
--	   dan total pengeluarannya selama perjalanan dinas tersebut
		select
			travel_request.id,
			concat(first_name,' ',last_name) as nama_karyawan,
			travel_type.name as jenis_perjalanan, 
			start_date as tanggal_perjalanan,
			sum(item_cost) + sum(travel_fee) as total_pengeluaran
		from travel_request
		left join employee on employee_id = employee.id
		left join biodata on employee.biodata_id = biodata.id
		left join travel_type on travel_type_id = travel_type.id
		left join travel_settlement on travel_request_id = travel_request.id
		group by travel_request.id, nama_karyawan, jenis_perjalanan, tanggal_perjalanan
		order by travel_request.id;


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