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

create table family(
	id serial primary key,
	biodata_id int,
	nama varchar(200),
	status varchar(100),
	constraint family_biodata_fkey foreign key (biodata_id) references biodata(id)
);

create table contact_person(
	id serial primary key,
	biodata_id int,
	type varchar(100),
	contact varchar(100),
	constraint contact_person_fkey foreign key (biodata_id) references biodata(id)
);

create table employee(
	id serial primary key,
	biodata_id int,
	nip varchar(10),
	status varchar(20),
	salary int,
	constraint employee_fkey foreign key (biodata_id) references biodata(id)
);


