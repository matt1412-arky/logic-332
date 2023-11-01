create database employee_tugas;

create table biodata (
id serial primary key,
first_name varchar(30) not null,
last_name varchar(30) not null,
dob date not null,
pob varchar(30),
address varchar(50) not null,
marital_status varchar(10) not null
);

insert into biodata(first_name,last_name,dob,pob,address,marital_status) values
('Raya','Indriyani','1991-01-01','Bali','Jl. Raya Baru, Bali','False'),
('Rere','Wulandari','1992-01-02','Bandung','Jl. Berkah Ramadhan, Bandung','False'),
('Bunga','Maria','1992-03-03','Jakarta','Jl. Mawar Semerbak, Bogor','True'),
('Natasha','Wulan','1990-04-10','Jakarta','Jl. Mawar Harum, Jakarta','False'),
('Zahra','Aurelia Putri','1991-03-03','Jakarta','Jl. Mawar Semerbak, Bogor','True'),
('Katmiss','Everdeen','1989-01-12','Jakarta','Jl. Bunga Melati, Jakarta','True');

create table contact_person(
	id serial primary key,
	biodata_id integer,
	type varchar(20) not null,
	contact varchar(100) not null,
	constraint contact_person_biodata_fkey foreign key(biodata_id) references biodata(id)
);

insert into contact_person (biodata_id,type,contact) values
(1,'MAIL','raya.indriyani@gmail.com'),
(1,'PHONE','085612345678'),
(2,'MAIL','rere.wulandari@gmail.com'),
(2,'PHONE','081312345678'),
(2,'PHONE','087812345678'),
(3,'MAIL','bunga.maria@gmail.com'),
(4,'MAIL','natasha.wulan@gmail.com'),
(5,'MAIL','zahra.putri@gmail.com'),
(6,'MAIL','katniss.everdeen@gmail.com');

create table employee(
	id serial primary key,
	biodata_id int,
	nip varchar(10) not null,
	status varchar(20) not null,
	salary int,
	constraint employee_biodata_fkey foreign key (biodata_id) references biodata(id)
);

insert into employee (biodata_id,nip,status,salary) values
(1,'NX001','Permanen',12000000),
(2,'NX002','Kontrak',15000000),
(4,'NX003','Permanen',13500000),
(5,'NX004','Permanen',12000000),
(6,'NX005','Permanen',17000000);

create table family(
	id serial primary key,
	biodata_id int,
	name varchar(50),
	status varchar(20),
	constraint family_biodata_fkey foreign key (biodata_id) references biodata(id)
);
insert into family (biodata_id,name,status) values
(3,'Azka Fadlan Zikrullah','Suami'),
(3,'Primrose Everdeen','Anak'),
(5,'Jaka Sumadera Buana','Suami'),
(5,'Friska Davira','Anak'),
(5,'Harum Indah Az Zahra','Anak'),
(6,'Adya Pratama Yuda','Suami');

create table leave(
	id serial primary key,
	type varchar(20) not null,
	name varchar(50) not null
);
insert into leave (type,name) values
('Regular','Cuti Tahunan'),
('Khusus','Cuti Menikah'),
('Khusus','Cuti Haji & Umrah'),
('Khusus','Melahirkan');

drop table employee_position;
create table employee_position(
	id serial primary key,
	employee_id int,
	position_id int,
	constraint employee_position_employee_fkey foreign key (employee_id) references employee(id),
	constraint employee_position_position_fkey foreign key (position_id) references position(id)
);

insert into employee_position (employee_id,position_id) values
(5,1),
(4,2),
(3,3),
(2,4),
(1,4);

create table employee_leave(
	id serial primary key,
	employee_id int,
	period int not null,
	regular_qouta int not null,
	constraint employee_leave_employee_fkey foreign key (employee_id) references employee(id)
);

delete from employee_leave;
TRUNCATE TABLE employee_leave, leave_request restart identity;

insert into employee_leave(employee_id,period,regular_qouta) values
(1,2020,16),
(2,2020,12),
(1,2021,16),
(2,2021,12),
(4,2021,12),
(5,2021,12);

drop table leave_request; 
create table leave_request(
	id serial primary key,
	employee_id int,
	leave_id int,
	start_date date,
	end_date date,
	reason varchar(20) not null,
	constraint leave_request_employee_fkey foreign key (employee_id) references employee(id),
	constraint leave_request_leave_fkey foreign key (leave_id) references leave(id)
);
 insert into leave_request(employee_id,leave_id,start_date,end_date,reason) values
 (1,1,'2020-10-10','2020-10-12','liburan'),
 (1,1,'2020-11-12','2020-11-15','Acara Keluarga'),
 (2,2,'2020-05-05','2020-05-07','Menikah'),
 (2,1,'2020-09-09','2020-09-13','Touring'),
 (2,1,'2020-12-24','2020-12-25','Acara Keluarga');


create table travel_type(
	id serial primary key,
	name varchar(30) not null,
	travel_fee int
);

insert into travel_type (name,travel_fee) values
('In Indonesia',200000),
('Out Indonesia',350000);

create table travel_request(
	id serial primary key,
	employee_id int,
	travel_type_id int,
	start_date date,
	end_date date,
	constraint travel_request_employee_fkey foreign key (employee_id) references employee(id),
	constraint travel_request_travel_type_fkey foreign key (travel_type_id) references travel_type(id)
);
insert into travel_request(employee_id,travel_type_id,start_date,end_date) values
(1,1,'2020-07-07','2020-07-08'),
(1,1,'2020-08-07','2020-08-08'),
(1,1,'2020-04-04','2020-04-07');

update travel_request set travel_type_id = 2 where id =3; 

create table department(
	id serial primary key,
	name varchar(30)
);
insert into department (name) values
('Recuitment'),
('Sales'),
('Human Resoucre'),
('General Affair');

create table position(
	id serial primary key,
	name varchar(30)
);
insert into position (name) values
('Direktur'),
('General Manager'),
('Manager'),
('Staff');

create table travel_settlement(
	id serial primary key,
	travel_request_id int,
	item_name varchar(50) not null,
	item_cost int,
	constraint travel_request_travel_request_fkey foreign key (travel_request_id) references travel_request(id)
);
insert into travel_settlement(travel_request_id,item_name,item_cost) values
(1,'Tiket travel Do-Car berangkat',165000),
(1,'Hotel',750000),
(1,'Tiket travel Do-Car pulang',165000),
(2,'Tiket pesawat berangkat',750000),
(2,'Hotel',650000),
(2,'Tiket pesawat pulang',1250000),
(3,'Tiket pesawat berangkat',4750000),
(3,'THotal',6000000),
(2,'Tiket pesawat pulang',4250000);