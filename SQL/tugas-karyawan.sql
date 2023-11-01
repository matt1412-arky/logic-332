-- 01. Tampilkan data lengkap karyawan dan rata-rata gaji setahun masing-masing dari mereka
-- Jawaban No 1 --
select nip, concat(first_name,' ' ,last_name) as fullname, status, salary, (salary * 12) / 12 as rata_rata_gaji
from employee
left join biodata on biodata_id = biodata.id;

-- 02. Tambahkan 3 orang pelamar, dimana 2 di antaranya diterima sebagai karyawan kontrak
--	   dan 1 nya lagi tidak diterima sebagai karyawan.
--	   Lalu tampilkan semua biodata berupa fullname, nip, status karyawan dan salary
-- Jawaban No 2 --
insert into biodata (first_name, last_name, dob, pob, address, marital_status) values 
('Eka', 'Susilo', '1996-02-08', 'Bandung','Jl. Boscha, Bandung', false),
('Ilham', 'Jaya', '1999-02-07', 'Bogor','Jl. Citereup, Bogor', false),
('Arif', 'Kusuma', '1993-06-04', 'Padang','Jl. Pohon Bambu, Padang', true);

insert into employee(biodata_id, nip, status, salary) values 
(7, 'NX006', 'Kontrak', 20000000),
(8, 'NX007', 'Kontrak', 18000000);
select 
first_name||' '||last_name as fullname,
nip, status, salary
from employee
inner join biodata on biodata_id = biodata.id;

-- 03. Tampilkan fullname pelamar yang tanggal lahirnya antara 01-01-1991 s/d 31-12-1991
-- Jawaban No 3 --
select concat(first_name,' ' ,last_name) as fullname, dob from biodata
where dob between '1991-01-01' and '1991-12-31';

-- 04. Tampilkan nama-nama pelamar yang tidak diterima sebagai karyawan
-- Jawaban No 4 --
select concat(first_name,' ' ,last_name) as nama_pelamar, dob, pob, address, marital_status, 
case when employee.status is null then 'Tidak Diterima' 
	 when employee.status is not null then employee.status
	 end status
from biodata
left join employee on biodata_id = biodata.id
where biodata_id is null;

-- 05. Tampilkan nama karyawan, jenis perjalanan dinas, tanggal perjalanan dinas,
--	   dan total pengeluarannya selama perjalanan dinas tersebut
-- Jawaban No 5 --
select
	travel_request.id,
	concat(first_name,' ' ,last_name) as nama_lengkap,
	travel_type.name as jenis_perjalanan_dinas, 
	start_date,
	sum(item_cost) + sum(travel_fee) as total_pengeluaran
from travel_request
left join employee on employee_id = employee.id
left join biodata on employee.biodata_id = biodata.id
left join travel_type on travel_type_id = travel_type.id
left join travel_settlement on travel_request_id = travel_request.id
group by travel_request.id, nama_lengkap, jenis_perjalanan_dinas, start_date
order by travel_request.id;

-- 06. Tampilkan sisa cuti tahun 2020 yang dimiliki oleh karyawan
-- Jawaban No 6 --
select 
	concat(first_name,' ' ,last_name) as nama_karyawan,
	period,
	regular_quota as sisa_cuti
from employee_leave
left join employee on employee_id = employee.id
left join biodata on employee.biodata_id = biodata.id
where period = 2020;

-- 07. Urutkan nama-nama karyawan dan statusnya, diurutkan dari yang paling tua ke yang paling muda 11
-- Jawaban No 7 --
select 
	concat(first_name,' ' ,last_name) as nama_karyawan,
	extract ('year' from age(current_date, dob)) as umur,
	status
from employee
left join biodata on biodata_id = biodata.id
order by umur desc;

-- 08. Tampilkan selisih antara total item cost dengan total travel fee untuk masing-masing karyawan 12
-- Jawaban No 8 --
select 
	employee_id,
	sum(item_cost) as item_cost,
	sum(travel_fee) as travel_fee,
	abs(sum(item_cost) - sum(travel_fee)) as selisih
from travel_request
left join travel_settlement on travel_request_id = travel_request.id
left join travel_type on travel_type_id = travel_type.id
group by employee_id;

-- 09. Tampilkan fullname, jabatan, usia, dan jumlah anak dari masing-masing karyawan saat ini
--	   (kalau tidak ada anak tulis 0 (nol) atau '-' saja)
-- Jawaban No 9 --
select
	first_name||' '||last_name as fullname,
	coalesce(position.name, 'Tidak memiliki jabatan') as jabatan,
	extract ('year' from age(current_date, biodata.dob)) as umur,
	count(case when family.status ilike 'anak' then 1 end) as total_anak
from employee
left join biodata on employee.biodata_id = biodata.id 
left join family on family.biodata_id = biodata.id
left join employee_position on employee_position.employee_id = employee.id
left join position on employee_position.position_id = position.id
group by fullname, umur, position, jabatan;

-- 10. Tampilkan fullname dan jabatan 3 karyawan paling tua
-- Jawaban No 10 --
select
	concat(first_name,' ' ,last_name) as fullname,
	position.name as jabatan,
	extract('year' from age(current_date, dob)) as umur
from employee_position
left join employee on employee_id = employee.id
left join biodata on employee.biodata_id = biodata.id
left join position on position_id = position.id
order by umur desc limit 3;

-- 11. Hitung berapa rata-rata gaji karyawan dengen level staff
-- Jawaban No 11 --
select 
		position.name as jabatan,
		avg(salary) as rata_rata_gajikaryawan
	from employee_position
	left join employee on employee_id = employee.id
	left join position on position_id = position.id
	group by position.name
	having position.name ilike 'staff';

-- 12. Hitung ada berapa karyawan yang sudah menikah dan yang tidak menikah
--     (tabel: menikah x orang, tidak menikah x orang)
-- Jawaban No 12 --
select
	count(marital_status) as status_pernikahan,
	case when marital_status = true then 'Menikah'
		 when marital_status = false then 'Belum Menikah'
	end status
from employee
left join biodata on biodata_id = biodata.id
group by marital_status;

-- 13. Jika digabungkan antara cuti dan perjalanan dinas,
--	   berapa hari Raya tidak berada di kantor pada tahun 2020?
-- Jawaban No 13 --
select
	employee.id,
	biodata.first_name,
	(count(extract('day' from age(leave_request.end_date, leave_request.start_date))) + 
	count(extract('day' from age(travel_request.end_date, travel_request.start_date)))) as total
from employee
left join leave_request on leave_request.employee_id = employee.id
left join travel_request on travel_request.employee_id = employee.id
left join biodata on biodata_id = biodata.id
where extract(year from (leave_request.end_date)) = 2020  and 
extract(year from (travel_request.end_date)) = 2020
group by biodata.first_name, employee.id
having first_name ilike 'raya%';