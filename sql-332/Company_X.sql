create database employee;

create table biodata(
	id serial int primary key,
	first_name varchar(100) not null,
	last_name varchar(100) not null,
	dob date not null,
	pob varchar(100) not null,
	address varchar(200),
	marital_status boolean
);

insert into biodata (first_name, last_name, dob, pob, address, marital_status)
values
('Raya', 'Indriyani', '1991-01-01', 'Bali', 'Jl. Raya Baru, Bali', false),
('Rere', 'Wulandari', '1992-01-02', 'Bandung', 'Jl. Berkah Ramadhan, Bandung', false),
('Bunga', 'Maria', '1992-03-03', 'Jakarta', 'Jl. Mawar Semerbak, Bogor', true),
('Natasha', 'Wulan', '1990-04-10', 'Jakarta', 'Jl. Mawar Harum, Jakarta', false),
('Zahra', 'Aurelia Putri', '1991-03-03', 'Jakarta', 'Jl. Mawar Semerbak, Bogor', true),
('Katniss', 'Everdeen', '1989-01-12', 'Jakarta', 'Jl. Bunga Melati, Jakarta', true);

select * from biodata;

create table family(
	id serial primary key,
	biodata_id int,
	nama varchar(200),
	status varchar(100),
	constraint family_biodata_fkey foreign key (biodata_id) references biodata(id)
);

insert into family (biodata_id, nama, status)
values 
(3, 'Azka Fadlan Zikrullah', 'Suami'),
(3, 'Primrose Everdeen', 'Anak'),
(5, 'Jaka Samudera Buana ', 'Suami'),
(5, 'Friska Davira ', 'Anak'),
(5, 'Harum Indah Az Zahra ', 'Anak'),
(6, 'Adya Pratama Yuda ', 'Suami');

select * from family;

create table contact_person(
	id serial primary key,
	biodata_id int,
	type varchar(100),
	contact varchar(100),
	constraint contact_person_fkey foreign key (biodata_id) references biodata(id)
);

insert into contact_person (biodata_id, type, contact)
values 
(1, 'MAIL', 'rayaindriyani@gmail.com'),
(1, 'PHONE', '085612345678'),
(2, 'MAIL', 'rere.wulandari@gmail.com'),
(2, 'PHONE', '081312345678'),
(2, 'PHONE', '087812345678'),
(3, 'MAIL', 'bunga.maria@gmail.com'),
(4, 'MAIL', 'natasha.wulan@gmail.com'),
(5, 'MAIL', 'zahra.putri@gmail.com'),
(6, 'MAIL', 'katniss.everdeen@gmail.com');

select * from contact_person;

create table employee(
	id serial primary key,
	biodata_id int,
	nip varchar(10),
	status varchar(20),
	salary int,
	constraint employee_fkey foreign key (biodata_id) references biodata(id)
);

insert into employee (biodata_id, nip, status, salary)
values 
(1, 'NX001', 'Permanen', 12000000),
(2, 'NX002', 'Kontrak', 15000000),
(4, 'NX003', 'Permanen', 13500000),
(5, 'NX004', 'Permanen', 12000000),
(6, 'NX005', 'Permanen', 17000000);

select * from employee;

create table department(
	id serial primary key,
	name varchar(20)
);

insert into department (name) values 
('Recruitment'),
('Sales'),
('Human Resource'),
('General Affair');

select * from department;

create table position(
	id serial primary key,
	name varchar(20)
);

insert into position (name) values
('Direktur'),
('General Manager'),
('Manager'),
('Staff');

select * from position;

create table leave(
	id serial primary key,
	type varchar(20),
	name varchar(100)
);

insert into leave (type, name) values
('Reguler', 'Cuti Tahunan'),
('Khusus', 'Cuti Menikah'),
('Khusus', 'Cuti Haji & Umroh'),
('Khusus', 'Melahirkan');

select * from leave;

create table travel_type(
	id serial primary key,
	name varchar(100),
	travel_fee int
);

insert into travel_type (name, travel_fee) values 
('In Indonesia', 200000),
('Out Indonesia', 350000);

select * from travel_type;

create table employee_position(
	id serial primary key,
	employee_id int,
	position_id int,
	constraint employee_pos_fkey foreign key (employee_id) references employee(id),
	constraint position_em_fkey foreign key (position_id) references position(id)
);

insert into employee_position (employee_id, position_id) values 
(5, 1),
(4, 2),
(3, 3),
(2, 4),
(1, 4);

select * from employee_position;

create table employee_leave(
	id serial primary key,
	employee_id int,
	period int,
	regular_quota int,
	constraint employee_leave_fkey foreign key (employee_id) references employee(id)
);

insert into employee_leave (employee_id, period, regular_quota)
values 
(1, 2020, 16),
(2, 2020, 12),
(1, 2021, 16),
(2, 2021, 12),
(4, 2021, 12),
(5, 2021, 12);

select * from employee_leave;

create table leave_request(
	id serial primary key,
	employee_id int,
	leave_id int,
	start_date date,
	end_date date,
	reason varchar(100),
	constraint emp_leave_fkey foreign key (employee_id) references employee(id),
	constraint leave_req_fkey foreign key (leave_id) references leave(id)
);

insert into leave_request (employee_id, leave_id, start_date, end_date, reason) 
values 
(1, 1, '2020-10-10', '2020-10-12', 'Liburan'),
(1, 1, '2020-11-12', '2020-11-15', 'Acara Keluarga'),
(2, 2, '2020-05-05', '2020-05-07', 'Menikah'),
(2, 1, '2020-09-09', '2020-09-13', 'Touring'),
(2, 1, '2020-12-24', '2020-12-25', 'Acara Keluarga');

select * from leave_request;

create table travel_request(
	id serial primary key,
	employee_id int,
	travel_type_id int,
	start_date date,
	end_date date,
	constraint emp_trav_fkey foreign key (employee_id) references employee(id),
	constraint trav_type_fkey foreign key (travel_type_id) references travel_type(id)
);

insert into travel_request(employee_id, travel_type_id, start_date, end_date) 
values 
(1, 1, '2020-07-07', '2020-07-08'),
(1, 1, '2020-08-07', '2020-08-08'),
(2, 2, '2020-04-04', '2020-04-07');

select * from travel_request;

create table travel_settlement(
	id serial primary key,
	travel_request_id int,
	item_name varchar(100),
	item_cost int,
	constraint trav_set_req_fkey foreign key (travel_request_id) references travel_request(id)
);

insert into travel_settlement (travel_request_id, item_name, item_cost)
values 
(1, 'Tiket travel Do-Car berangkat', 165000),
(1, 'Hotel', 750000),
(1, 'Tiket travel Do-Car pulang', 165000),
(1, 'Tiket Pesawat Berangkat', 750000),
(1, 'Hotel', 650000),
(1, 'Tiket Pesawat pulang', 1250000),
(1, 'Tiket Pesawat Berangkat', 4750000),
(1, 'Hotel', 6000000),
(1, 'Tiket Pesawat pulang', 4250000);

select * from travel_settlement ;


