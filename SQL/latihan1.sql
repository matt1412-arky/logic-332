create database employee;

create schema master;

--create dan insert tabel departement
create table master.departement(
	id serial primary key not null,
	nama varchar(50) not null
);

insert into master.departement (
	nama
)
values
('Recruitment'),
('Sales'),
('Human Resource'),
('General Affair');

--create dan insert table position
create table master.position(
	id serial primary key not null,
	nama varchar(50) not null
);

insert into master.position (
	nama
)
values
('Direktur'),
('General Manager'),
('Manager'),
('Staff');

--create dan insert table leave
create table master.leave(
	id serial primary key not null,
	type varchar(20) not null,
	nama varchar(50) not null
);

insert into master.leave (
	type,	
	nama
)
values
('Regular', 'Cuti Tahunan'),
('Khusus', 'Cuti Menikah'),
('Khusus', 'Cuti Haji & Umroh'),
('Khusus', 'Melahirkan');

--create dan insert table travel_type
create table master.travel_type(
	id serial primary key not null,
	nama varchar(50) not null,
	travel_fee dec(15, 2) not null
);

insert into master.travel_type (
	nama,	
	travel_fee
)
values
('In Indonesia', 200000),
('Out Indonesia', 350000);

--create dan insert table biodata
create table biodata(
	id serial primary key not null,
	first_name varchar(100) not null,
	last_name varchar(100) not null,
	dob date not null,
	pob varchar(100) not null,
	address text not null,
	marital_status boolean not null
);

insert into biodata (
	first_name,
	last_name,
	dob,
	pob,
	address,
	marital_status
)
values
('Raya', 'Indriyani', '1991-01-01', 'Bali', 'Jl. Raya Baru, Bali', FALSE),
('Rere', 'Wulandari', '1992-01-02', 'Bandung', 'Jl. Berkah Ramadhan, Bandung', FALSE),
('Bunga', 'Maria', '1992-03-03', 'Jakarta', 'Jl. Mawar Semerbak, Bogor', TRUE),
('Natasha', 'Wulan', '1990-04-10', 'Jakarta', 'Jl. Mawar Harum, Jakarta', FALSE),
('Zahra', 'Aurelia Putri', '1991-03-03', 'Jakarta', 'Jl. Mawar Semerbak, Bogor', TRUE),
('Katniss', 'Everdeen', '1989-01-12', 'Jakarta', 'Jl. Bunga Melati, Jakarta', TRUE);

--create dan insert table contact_person
create table contact_person(
	id serial primary key not null,
	biodata_id int not null,
	type varchar(15) not null,
	contact varchar(50)not null,
	constraint cp_fkey foreign key (biodata_id) references biodata(id)
);

--drop table contact_person; 
--alter table contact_person alter column biodata_id type int using biodata_id::int;
--alter table contact_person add constraint cp_fkey foreign key (biodata_id) references biodata(id);

insert into contact_person (
	biodata_id,
	type,
	contact
)
values
(1, 'MAIL', 'raya.indriyani@gmail.com'),
(1, 'PHONE', '085612345678'),
(2, 'MAIL', 'rere.wulandari@gmail.com'),
(2, 'PHONE', '081312345678'),
(2, 'PHONE', '087812345678'),
(3, 'MAIL', 'bunga.maria@gmail.com'),
(4, 'MAIL', 'natasha.wulan@gmail.com'),
(5, 'MAIL', 'zahra.putri@gmail.com'),
(6, 'MAIL', 'katniss.everdeen@gmail.com');

--create dan insert table employee
create table employee(
	id serial primary key not null,
	biodata_id int not null,
	nip varchar(10) not null,
	status varchar(20) not null,
	salary dec(15, 2) not null,
	constraint employee_fkey foreign key (biodata_id) references biodata(id)
);

--drop table employee;

insert into employee(
	biodata_id,
	nip,
	status,
	salary
)
values
(1, 'NX001', 'Permanen', 12000000),
(2, 'NX002', 'Kontrak', 15000000),
(4, 'NX003', 'Permanen', 13500000),
(5, 'NX004', 'Permanen', 12000000),
(6, 'NX005', 'Permanen', 17000000);

--create dan insert table family
create table family(
	id serial primary key not null,
	biodata_id int not null,
	nama varchar(50) not null,
	status varchar(25)not null,
	constraint family_fkey foreign key (biodata_id) references biodata(id)
);

insert into family(
	biodata_id,
	nama,
	status
)
values
(3, 'Azka Fadlan Zikrullah', 'Suami'),
(3, 'Primrose Everdeen', 'Anak'),
(5, 'Jaka Samudera Buana', 'Suami'),
(5, 'Friska Davira', 'Anak'),
(5, 'Harum Indah Az Zahra', 'Anak'),
(6, 'Adya Pratama Yuda', 'Suami');

--create dan insert table employee_position
create table employee_position(
	id serial primary key not null,	
	employee_id int not null,
	position_id int not null,
	constraint ep_employee_id_fkey foreign key (employee_id) references employee(id),
	constraint ep_position_fkey foreign key (position_id) references master.position(id)
);

insert into employee_position(
	employee_id,
	position_id
) 
values
(5, 1),
(4, 2),
(3, 3),
(2, 4),
(1, 4);

--create dan insert table employee_leave
create table employee_leave(
	id serial primary key not null,
	employee_id int not null,
	period int not null,
	regular_quota int not null,
	constraint el_employee_id_fkey foreign key (employee_id) references employee(id)
);

insert into employee_leave(
	employee_id,
	period,
	regular_quota
)
values
(1, 2020, 16),
(2, 2020, 12),
(1, 2021, 16),
(2, 2021, 12),
(4, 2021, 12),
(5, 2021, 12);

--create dan insert table leave_request
create table leave_request (
	id serial primary key not null,
	employee_id int not null,
	leave_id int not null,
	start_date date not null,
	end_date date not null,
	reason varchar(25) not null,
	constraint lr_employee_id_fkey foreign key (employee_id) references employee(id),
	constraint lr_leave_id_fkey foreign key (leave_id) references master.leave(id)
);

insert into leave_request(
	employee_id,
	leave_id,
	start_date,
	end_date,
	reason
)
values
(1, 1, '2020-10-10', '2020-10-12', 'Liburan'),
(1, 1, '2020-11-12', '2020-11-15', 'Acara keluarga'),
(2, 2, '2020-05-05', '2020-05-07', 'Menikah'),
(2, 1, '2020-09-09', '2020-09-13', 'Touring'),
(2, 1, '2020-12-24', '2020-12-25', 'Acara keluarga');

--create dan insert table travel_request
create table travel_request(
	id serial primary key not null,
	employee_id int not null,
	travel_type_id int not null,
	start_date date not null,
	end_date date not null,
	constraint tr_employee_id_fkey foreign key (employee_id) references employee(id),
	constraint tr_travel_type_id_fkey foreign key (travel_type_id) references master.travel_type(id)
);

insert into travel_request(
	employee_id,
	travel_type_id,
	start_date,
	end_date
)
values
(1, 1, '2020-07-07', '2020-07-08'),
(1, 1, '2020-08-07', '2020-08-08'),
(2, 2, '2020-04-04', '2020-04-07');

--create dan insert table travel_settlement
create table travel_settlement(
	id serial primary key not null,
	travel_request_id int not null,
	item_name varchar(50) not null,
	item_cost dec(15, 2) not null,
	constraint ts_travel_request_id_fkey foreign key (travel_request_id) references travel_request(id)
);

insert into travel_settlement(
	travel_request_id,
	item_name,
	item_cost
)
values
(1, 'Tiket travel Do-Car berangkat', 165000),
(1, 'Hotel', 750000),
(1, 'Tiket travel Do-Car pulang', 165000),
(2, 'Tiket pesawat berangkat', 750000),
(2, 'Hotel', 650000),
(2, 'Tiket pesawat pulang', 1250000),
(3, 'Tiket pesawat berangkat', 4750000),
(3, 'Hotel', 6000000),
(2, 'Tiket pesawat pulang', 4250000);

--1. 
drop view view_no_1; 
create or replace view view_no_1 as
select
	b.first_name,
	b.last_name,
	e.nip,
	e.salary,
	(e.salary * 12) as annual_salary,
	(e.salary * 12 /12) as rata_rata_gaji_tahunan
from employee e 
join biodata b on e.biodata_id = b.id;
select * from view_no_1; 

--2.
insert into biodata (
	first_name,
	last_name,
	dob,
	pob,
	address,
	marital_status
)
values
('Vina', 'Nurmadani', '2000-01-01', 'Bali', 'Jl. Raya Lama, Bali', FALSE),
('Muhammad', 'Rian', '2000-01-02', 'Semarang', 'Jl. Berkah, Semarang', FALSE),
('Ilham', 'Sangaji', '2000-03-03', 'Jakarta', 'Jl. Mawar, Bogor', FALSE);

-- Menambahkan 3 pelamar ke tabel employee
insert into employee (
	biodata_id, 
	nip, 
	status, 
	salary
)
values
     --Pelamar pertama diterima sebagai karyawan kontrak
    (7, 'NX006', 'Kontrak', 15000000),
     --Pelamar kedua diterima sebagai karyawan kontrak
    (8, 'NX007', 'Kontrak', 15000000);
     --Pelamar ketiga tidak diterima, jadi tidak dimasukkan datanya 
    
drop view view_no_2; 
create or replace view view_no_2 as   
select 
    b.first_name || ' ' || b.last_name as full_name,
    e.nip,
    e.status,
    e.salary
from employee e
right join biodata b on e.biodata_id = b.id;
select * from view_no_2;

--3.
drop view view_no_3; 
create or replace view view_no_3 as 
select
	b.first_name || ' ' || b.last_name as full_name,
	b.dob as tanggal_lahir_antara_01_01_1991_sampai_31_12_1991
from biodata b
where b.dob between '1991-01-01' and '1991-12-31';
select * from view_no_3;

--4. 
drop view view_no_4; 
create or replace view view_no_4 as 
select
	b.first_name || ' ' || b.last_name as full_name,	 
	b.dob as tanggal_lahir,
	b.pob,
	b.address,
	b.marital_status,
	case 
		when e.status is not null then e.status
		when e.status is null then 'Tidak Diterima'
	end
	as employee_status
from biodata b
left join employee e on e.biodata_id = b.id;
select * from view_no_4;

--5. 
drop view view_no_5; 
create or replace view view_no_5 as 
select
	b.first_name || ' ' || b.last_name as nama_karyawan,
	tt.nama as jenis_perjalanan_dinas,
	tr.start_date as tanggal_perjalanan_dinas,
	sum(ts.item_cost) + tt.travel_fee as total_pengeluaran_dinas
from travel_settlement ts 
join travel_request tr on ts.travel_request_id = tr.id 
join master.travel_type tt on tr.travel_type_id = tt.id 
join employee e on tr.employee_id = e.id
join biodata b on e.biodata_id = b.id
group by 
	b.first_name,
	b.last_name,
	tt.nama,
	tr.start_date,
	tt.travel_fee 
order by nama_karyawan;
select * from view_no_5;

--6. 
drop view view_no_6; 
create or replace view view_no_6 as 
select
	b.first_name || ' ' || b.last_name as nama_karyawan,
	e.nip,
	el.regular_quota - count(lr.employee_id) as cuti_tersisa
from employee_leave el  
join employee e  on el.employee_id = e.id   
join biodata b on e.biodata_id = b.id
join leave_request lr on lr.employee_id = el.employee_id 
where el.period = 2020
group by nama_karyawan, e.nip, el.regular_quota;
select * from view_no_6;

--7.
drop view view_no_7; 
create or replace view view_no_7 as 
select
	b.first_name || ' ' || b.last_name as nama_karyawan,
	b.marital_status as status_karyawan,
	extract ('year' from age(b.dob)) as umur
from biodata b 
order by umur;
select * from view_no_7;

--8.
drop view view_no_8; 
create or replace view view_no_8 as 
select
	b.first_name || ' ' || b.last_name as nama_karyawan,
	sum(ts.item_cost) as total_item_cost,
	sum(tt.travel_fee) as total_travel_fee,
	(sum(ts.item_cost) - sum(tt.travel_fee)) as selisih 
from travel_settlement ts 
join travel_request tr on ts.travel_request_id = tr.id 
join master.travel_type tt on tr.travel_type_id = tt.id 
join employee e on tr.employee_id = e.id 
join biodata b on e.biodata_id = b.id 
group by b.first_name, b.last_name 
order by nama_karyawan;
select * from view_no_8;

--9.
drop view view_no_9; 
create or replace view view_no_9 as 
select
	b.first_name || ' ' || b.last_name as fullname_karyawan,
	case 
		when p.nama is not null then p.nama
		when p.nama is null then 'Tidak ada jabatan'
	end as jabatan,
	extract ('year' from age(b.dob)) as usia,
	count( 
		case 
			when f.status like 'Anak%' then 1 
		else null
		end
	) as jumlah_anak
from employee e  
left join biodata b on e.biodata_id = b.id
left join employee_position ep on ep.employee_id = e.id  
left join "family" f on f.biodata_id = b.id
left join master."position" p on p.id = ep.position_id
group by fullname_karyawan, jabatan, usia
order by fullname_karyawan; 
select * from view_no_9;

--10.
drop view view_no_10; 
create or replace view view_no_10 as 
select
	b.first_name || ' ' || b.last_name as fullname_karyawan,
	case 
		when p.nama is not null then p.nama
		when p.nama is null then 'Tidak ada jabatan'
	end as jabatan,
	extract ('year' from age(b.dob)) as usia
from biodata b 
full join employee e on e.biodata_id = b.id
full join employee_position ep on ep.employee_id  = e.id  
full join master."position" p on p.id = ep.position_id
group by fullname_karyawan, jabatan, usia
order by usia desc
limit 3; 
select * from view_no_10;

--11.
drop view view_no_11;
create or replace view view_no_11 as
select
	p.nama as jabatan,
	avg(salary) as rata_rata_gaji
from employee_position ep
left join master."position" p on p.id = ep.position_id
left join employee e on e.id = ep.employee_id
group by jabatan
having p.nama = 'Staff'; 
select * from view_no_11;

--12.
drop view view_no_12;
create or replace view view_no_12 as 
select
	case
		when b.marital_status is true then 'Menikah'
		when b.marital_status is false then 'Tidak Menikah'
	end as status_karyawan,
	count(b.marital_status) as jumlah_orang
from employee e 
left join biodata b on e.biodata_id = b.id
group by status_karyawan;
select * from view_no_12;

--13.
create or replace view view_tr_dan_lr_libur_Raya as 
select
	b.first_name || ' ' || b.last_name as fullname_karyawan,
	sum(extract ('days' from age(tr.end_date, tr.start_date))) as total_libur
from employee e 
left join biodata b on e.biodata_id = b.id 
join travel_request tr on tr.employee_id = e.id
group by b.first_name, b.last_name  
having b.first_name like 'Raya%'
union
select
	b.first_name || ' ' || b.last_name as fullname_karyawan,
	sum(extract ('days' from age(lr.end_date, lr.start_date))) as total_libur
from employee e 
left join biodata b on e.biodata_id = b.id 
join leave_request lr on lr.employee_id  = e.id
group by b.first_name, b.last_name  
having b.first_name like 'Raya%';

drop view view_no_13;
create or replace view view_no_13 as
select
	fullname_karyawan,
	sum(total_libur) as total_libur
from view_tr_dan_lr_libur_Raya
group by fullname_karyawan;
select * from view_no_13;

