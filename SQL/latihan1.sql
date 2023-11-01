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
(2, 'Hotel', 600000),
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
	(e.salary * 12) as annual_salary
from employee e 
join biodata b on e.biodata_id = b.id;
select * from view_no_1; 

--2.


