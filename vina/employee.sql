-- SCHEMA

create database employee;
create schema leave;
create schema travel;
create schema posisi;


-- =============================================
-- SCHEMA public

create table biodata (
	id serial not null,
	first_name varchar(50) not null,
	last_name varchar(50),
	dob  date not null,
	pob varchar(50) not null,
	address varchar(100) not null,
	marital_status varchar(10) not null
);

insert into biodata(
	first_name,
	last_name,
	dob,
	pob,
	address,
	marital_status
) 
values
	('Raya','Indriyani','1991-01-01','Bali','Jl. Raya Baru, Bali', 'FALSE'),
	('Rere','Wulandari','1992-01-02','Bandung','Jl. Berkah Ramadhan, Bandung', 'FALSE'),
	('Bunga','Maria','1992-03-03','Jakarta','Jl. Mawar Semerbak, Bogor', 'TRUE'),
	('Natasha','Wulan','1990-04-10','Jakarta','Jl. Mawar Harum, Jakarta', 'FALSE'),
	('Zahra','Aurelia Putri','1991-03-03','Jakarta','Jl. Mawar Semerbak, Bogor','TRUE'),
	('Katniss','Everdeen','1989-01-12','Jakarta','Jl. Bunga Melati, Jakarta', 'TRUE');

-- alter table biodata alter column marital_status type varchar(10);

-- drop table contact_person;

alter table biodata rename column id to biodata_id;
alter table biodata add constraint biodata_id_pkey primary key(biodata_id); 


create table contact_person(
	cp_id serial primary key not null,
	biodata_id int,
	type varchar(10),
	contact varchar(100),
	constraint cp_biodata_fkey foreign key (biodata_id) references biodata(biodata_id)
);

insert into contact_person(
	biodata_id,
	type,
	contact
)
values
	('1','MAIL','raya.indriyani@gmail.com'),
	('1','PHONE','085612345678'),
	('2','MAIL','rere.wulandari@gmail.com'),
	('2','PHONE','081312345678'),
	('2','PHONE','087812345678'),
	('3','MAIL','bunga.maria@gmail.com'),
	('4','MAIL','natasha.wulan@gmail.com'),
	('5','MAIL','zahra.putri@gmail.com'),
	('6','MAIL','katniss,everdeen@gmail.com');

update contact_person set contact='katniss.everdeen@gmail.com' where cp_id=9;


create table employee(
	employee_id serial primary key not null,
	biodata_id int,
	nip varchar(10),
	status varchar(100),
	salary int,
	constraint em_biodata_fkey foreign key (biodata_id) references biodata(biodata_id)
);

insert into employee(
	biodata_id,
	nip,
	status,
	salary
) values 
	('1','NX001','Permanen','12000000'),
	('2','NX002','Kontrak','15000000'),
	('4','NX003','Permanen','13500000'),
	('5','NX004','Permanen','12000000'),
	('6','NX005','Permanen','17000000');

create table family(
	family_id serial primary key not null,
	biodata_id int,
	name varchar(50),
	status varchar(50),
	constraint f_biodata_fkey foreign key (biodata_id) references biodata(biodata_id)
);

insert into family(
	biodata_id,
	name,
	status
)values 
	('3','Azka Fadlan Zikrullah','Suami'),
	('3','Primrose Everdeen','Anak'),
	('5','Jaka Samudra Buana','Suami'),
	('5','Friska Davira','Anak'),
	('5','Harum Indah Az Zahra','Anak'),
	('6','Adya Pratama Yuda','Suami')
;

create table employee_position(
	ep_id serial primary key not null,
	employee_id int,
	position_id int,
	constraint ep_employee_fkey foreign key (employee_id) references employee(employee_id)
);

insert into employee_position(
	employee_id,
	position_id
) values 
	('5','1'),
	('4','2'),
	('3','3'),
	('2','4'),
	('1','4')
;


-- =============================================
-- SCHEMA leave

create table leave.leave(
	id serial not null,
	type varchar(50),
	name varchar(50)
);

insert into leave.leave(
	type,
	name
) values 
('Regular','Cuti Tahunan'),
('Khusus','Cuti Menikah'),
('Khusus','Cuti Haji & Umroh'),
('Khusu','Melahirkan');

update leave.leave leave set type ='Khusus' where id=4;

drop table leave.employee_leave ;
drop table leave.leave_request ;

create table leave.employee_leave (
	employee_leave_id serial primary key not null,
	employee_id int,
	period varchar(10),
	regular_kuota int,
	constraint el_employee_fkey foreign key (employee_id) references public.employee(employee_id)
);

alter table leave.employee_leave rename column emloyee_leave_id to employee_leave_id;

--drop table leave.leave_request;

insert into leave.employee_leave(
	employee_id,
	period,
	regular_kuota
) values 
	('1','2020','16'),
	('2','2020','12'),
	('1','2021','16'),
	('2','2021','12'),
	('4','2021','12'),
	('5','2021','12')
;

-- employe.leave dihapus pada employee_id 6 karena tidak ada di table employee

--truncate table leave.employee_leave cascade;
--alter sequence employee_leave_employee_leave_id_seq restart with 1;

create table leave.leave_request(
	request_id serial not null,
	employee_id int,
	employee_leave_id int,
	start_date date,
	end_date date,
	reason varchar(100),
	constraint lr_employee_fkey foreign key (employee_id) references public.employee(employee_id),
	constraint lr_leave_fkey foreign key (employee_leave_id) references leave.employee_leave (employee_leave_id)
);

insert into leave.leave_request(
	employee_id,
	employee_leave_id,
	start_date,
	end_date,
	reason
) values 
	('1','1','2020-10-10','2020-10-12','Liburan'),
	('1','1','2020-11-12','2020-11-15','Acara Keluarga'),
	('2','2','2020-05-05','2020-05-07','Menikah'),
	('2','1','2020-09-09','2020-09-13','Touring'),
	('2','1','2020-12-24','2020-12-25','Acara Keluarga');

-- =============================================
-- SCHEMA posisi

create table posisi.department(
	id serial not null,
	name varchar(50)
);

alter table posisi."position" rename id to position_id

insert into posisi.department(
	name
) values 
	('Recruitment'),
	('Sales'),
	('Human Resource'),
	('General Affair');

create table posisi.position(
	id serial not null,
	name varchar(50)
);

insert into posisi.position(
	name
) values 
	('Direktur'),
	('General Manager'),
	('Manager'),
	('Staff');


-- =============================================
-- SCHEMA travel

drop table travel.travel_type;
create table travel.travel_type(
	id serial primary key not null,
	name varchar(50),
	travel_fee int
);

alter table travel.travel_type rename column id to travel_type_id;

insert into travel.travel_type(
	name,
	travel_fee
) values 
	('In Indonesia','200000'),
	('Out Indonesia','350000');

drop table travel.travel_request;
create table travel.travel_request(
	travel_request_id serial primary key not null,
	employee_id int,
	travel_type_id int,
	start_date date,
	end_date date,
	constraint tr_employee_fkey foreign key (employee_id) references public.employee(employee_id),
	constraint tr_travel_type_fkey foreign key (travel_type_id) references travel.travel_type(travel_type_id)
);

insert into travel.travel_request(
	employee_id,
	travel_type_id,
	start_date,
	end_date
) values 
	('1','1','2020-07-07','2020-07-08'),
	('1','1','2020-08-07','2020-08-08'),
	('2','2','2020-04-04','2020-04-07');

create table travel.travel_settlement(
	travel_settlement_id serial not null,
	travel_request_id int,
	item_name varchar(100),
	item_cost int,
	constraint ts_travel_request_fkey foreign key (travel_request_id) references travel.travel_request(travel_request_id)
);

insert into travel.travel_settlement(
	travel_request_id,
	item_name,
	item_cost
) values 
	('1','Tiket travel Do-Car berangkat','165000'),
	('1','Hotel','750000'),
	('1','Tiket travel Do-Car pulang','165000'),
	('2','Tiket pesawat berangkat','750000'),
	('2','Hotel','650000'),
	('2','Tiket pesawat pulang','1250000'),
	('3','Tiket pesawat berangkat','4750000'),
	('3','Hotel','6000000'),
	('2','Tiket pesawat pulang','4250000');


--==========================================================

-- NOMOR 1
-- Tampilkan data lengkap karyawan dan rata-rata gaji setahun untuk masing-masing.

select 
	b.biodata_id,
	b.first_name,
	b.last_name,
	b.address,
	e.salary,
	(e.salary) as total_data,
	((e.salary*12)/12) as nilai_rata2
from employee e
join biodata b on b.biodata_id=e.biodata_id;


-- NOMOR 2 
-- Tambahkan 3 orang pelamar, dimana 2 diantaranya diterima sebagai karyaawan kontrak dan 1 nya lagi
-- tidak diterima sebagai karyawan.
-- Lalu tampilkan semua biodata berupa full name, nip, status karyawan dan salary.

insert into biodata(
	first_name,
	last_name,
	dob,
	pob,
	address,
	marital_status
) values 
	('Lee','Haechan','2000-03-02','Seoul','Jl. Soekarno, Palembang','FALSE'),
	('Lee','Mark','1999-03-23','Toronto','Jl. Gandaria, Kebayoran','FALSE'),
	('Kim','Taeri','1998-09-10','Jeju','Jl. Sudirman, Jakarta','TRUE');

insert into employee(
	biodata_id,
	nip,
	status,
	salary
) values 
	('7','NX006','Kontrak','13000000'),
	('8','NX007','Kontrak','13000000');

select 
	concat(first_name,' ',last_name) as full_name,
	e.nip,
	e.status,
	e.salary
from biodata b  
join employee e on b.biodata_id = e.biodata_id;




-- NOMOR 3 
-- Tampilkan fullname pelamar yang tanggal lahirnya antara 01-01-1991 s/d 31-12-1991
select 
	concat(first_name,' ',last_name) as full_name,
	b.dob
from biodata b
where dob >= '1991-01-01' and dob <= '1991-12-31';

-- NOMOR 4
-- Tampilkan nama-nama pelamar yang tidak diterima sebagai karyawan

select 
	concat(first_name,' ',last_name) as full_name,
	e.status 
from biodata b
full join employee e on e.biodata_id = b.biodata_id
where e.status is null ;

-- NOMOR 5
-- Tampilkan nama karyawan, jenis perjalanan dinas, tanggal perjalanan dinas, dan total pengeluarannya
-- selama perjalanan dinas tersebut.

select 
	concat(first_name,' ',last_name) as full_name,
	tt.name,
	tr.start_date,
	tt.travel_fee + sum(ts.item_cost) as Total_Pengeluaran
from employee e  
join biodata b on b.biodata_id = e.biodata_id 
join travel.travel_request tr on tr.employee_id = e.employee_id 
join travel.travel_type tt on tt.travel_type_id = tr.travel_type_id 
join travel.travel_settlement ts on ts.travel_request_id = tr.travel_request_id
group by tt.name, b.first_name, b.last_name, tr.start_date, tt.travel_fee  ;

-- NOMOR 6
-- Tampilkan sisa cuti tahun 2020 yang dimiliki oleh karyawan

select 
	concat(first_name,' ',last_name) as full_name,
	el.regular_kuota
from employee e  
join biodata b on b.biodata_id = e.biodata_id
join leave.employee_leave el on el.employee_id =e.employee_id
where el.period = '2020';

--NOMOR 7 
--Urutkan nama-nama karyawan dan statusnya, diurutkan dari yang paling tua ke paling muda
select 
	concat(first_name,' ',last_name) as full_name,
	e.status,
	dob
from biodata b 
join employee e  on b.biodata_id = e.biodata_id 
order by b.dob;

--NOMOR 8
-- Tampilkan selisih antara total item cost dengan total travel fee untuk masing-masing karyawan

select 
	e.employee_id,
	concat(first_name,' ',last_name) as full_name,
	sum(tt.travel_fee),
	sum(ts.item_cost),
	abs(sum(ts.item_cost) - sum(tt.travel_fee)) as selisih
from employee e 
join biodata b on b.biodata_id = e.biodata_id 
join travel.travel_request tr on tr.employee_id = e.employee_id 
join travel.travel_settlement ts on tr.travel_request_id =ts.travel_request_id 
join travel.travel_type tt on tt.travel_type_id = tr.travel_type_id 
group by full_name, e.employee_id  ;

-- NOMOR 9 
-- Tampilkan full name, jabatan, usia, dan jumlah anak dari masing-masing karyawn saat ini
-- kalau tidak ada anak tulis 0 (nol) atau "-" saja

select 
	concat(first_name,' ',last_name) as full_name,
	p.name as jabatan,
	age(b.dob) as usia,
	count(f.status) as jumlah_anak
from employee e 
join biodata b on b.biodata_id = e.biodata_id 
join employee_position ep on ep.employee_id = e.employee_id 
join posisi.position p on p.position_id = ep.position_id 
join family f on f.biodata_id =b.biodata_id
where f.status='Anak'
group by full_name,p.name,b.dob;

select 
	concat(first_name,' ',last_name) as full_name,
	p.name as jabatan,
	age(b.dob) as usia,
	count(case when f.status = 'Anak' then 1 end) as jumlah_anak
from employee e 
full join biodata b on b.biodata_id = e.biodata_id 
full join employee_position ep on ep.employee_id = e.employee_id 
full join posisi.position p on p.position_id = ep.position_id 
full join family f on f.biodata_id =b.biodata_id
group by full_name,p.name,b.dob;

-- NOMOR 10
-- Tampilkan fullname dan jabatan karyawan paling tua

select 
	concat(first_name,' ',last_name) as full_name,
	p.name
from employee e 
join biodata b on b.biodata_id = e.biodata_id 
join employee_position ep on ep.employee_id =e.employee_id 
join posisi."position" p on p.position_id = ep.position_id 
order by dob 
limit 3;

-- NOMOR 11
-- Hitung berapa rata-rata gaji karyawan level staff

select 
	concat(first_name,' ',last_name) as full_name,
	count(p.name='staff') as jumlah_staff,
	sum(e.salary) as salary,
	avg(salary)
from employee e  
join biodata b on b.biodata_id = e.biodata_id 
join employee_position ep on ep.employee_id = e.employee_id 
join posisi."position" p on p.position_id = ep.position_id 
where p.name = 'Staff'
group by full_name,salary;




-- NOMOR 12
-- Hitung ada berapa karyawan yang sudah menikah dan yang tidak menikah
-- (tabel: menikah x orang, tidak menikah x orang)

select 
	concat(('menikah ',sum(case when b.marital_status = 'TRUE' then 1 else 0 end),'orang'),
	('Tidak menikah ',sum(case when b.marital_status = 'FALSE' then 1 else 0 end),'orang'))
from employee e 
join biodata b on b.biodata_id = e.biodata_id;

-- NOMOR 13 
-- jika digabungkan antara cuti dan perjalanan dinas,
-- berapa hari raya tidak berada di kantor pada tahun 2020

select 
	b.first_name,
	(sum(date_part('day', age(tr.end_date,tr.start_date))) + sum(date_part('day', age(lr.end_date,lr.start_date)))) as total_hari
from employee e 
join biodata b on b.biodata_id = e.biodata_id 
join travel.travel_request tr on tr.employee_id = e.employee_id 
join leave.leave_request lr on lr.employee_id = e.employee_id 
where b.first_name = 'Raya'
group by b.first_name;


	





















