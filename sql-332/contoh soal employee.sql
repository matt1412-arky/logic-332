-- 1
select nip, concat(first_name,' ' ,last_name) as fullname, status, salary, (salary * 12) / 12 as average_per_year
from employee
left join biodata on biodata_id = biodata.id;

-- 2
--insert into biodata (first_name, last_name, dob, pob, address, marital_status) values 
--('Aries', 'Susilo', '1992-02-04', 'Bandung','Jl. Pohon Beringin, Bandung', false),
--('Aries', 'Jaya', '1992-02-07', 'Bandung','Jl. Pohon Asam Jawa, Bandung', false),
--('Jaya', 'Kusuma', '1993-06-04', 'Bandung','Jl. Pohon Bambu, Bandung', true);
--
--insert into employee(biodata_id, nip, status, salary) values 
--(7, 'NX006', 'Kontrak', 100000000),
--(8, 'NX007', 'Kontrak', 50000000);

select 
first_name||' '||last_name as fullname,
nip, status, salary
from employee
inner join biodata on biodata_id = biodata.id;

-- 3
select concat(first_name,' ' ,last_name) as fullname, dob from biodata
where dob between '1991-01-01' and '1991-12-31';

-- 4
select concat(first_name,' ' ,last_name) as fullname, dob, pob, address, marital_status,
case when employee.status is null then 'Tidak Diterima' 
	 when employee.status is not null then employee.status
	 end status
from biodata
left join employee on biodata_id = biodata.id
where status is null;

select * from employee;

-- 5
select
	travel_request.id,
	concat(first_name,' ' ,last_name) as fullname,
	travel_type.name as travel_type, 
	start_date,
	sum(item_cost) as total_cost
from travel_request
left join employee on employee_id = employee.id
left join biodata on employee.biodata_id = biodata.id
left join travel_type on travel_type_id = travel_type.id
left join travel_settlement on travel_request_id = travel_request.id
group by travel_request.id, fullname, travel_type, start_date
order by travel_request.id
;

select * from travel_settlement;

-- 6
select 
	concat(first_name,' ' ,last_name) as fullname,
	period,
	regular_quota
from employee_leave
left join employee on employee_id = employee.id
left join biodata on employee.biodata_id = biodata.id
where period = 2020;

-- 7
select 
	concat(first_name,' ' ,last_name) as fullname,
	extract ('year' from age(current_date, dob)) as age,
	status
from employee
left join biodata on biodata_id = biodata.id
order by age desc
;

-- 8
select 
	employee_id,
	sum(item_cost) as item_cost,
	sum(travel_fee) as travel_fee,
	abs(sum(item_cost) - sum(travel_fee)) as selisih
from travel_request
left join travel_settlement on travel_request_id = travel_request.id
left join travel_type on travel_type_id = travel_type.id
group by employee_id
;

select * from travel_request;
-- 9
--create or replace view my_child as
--select
--	biodata_id,
--	first_name||' '||last_name as fullname,
--	count(family.status) as jumlah_anak
--from family
--left join biodata on biodata_id = biodata.id
--group by fullname, dob, family.status, family.biodata_id
--having family.status ilike 'anak';
--
--drop view my_child;
--
--select * from my_child;
--
--select 
--	first_name||' '||last_name as fullname,
--	position.name as position,
--	extract ('year' from (age(current_date, biodata.dob))) as age,
--	case when jumlah_anak is not null then jumlah_anak
--		 when jumlah_anak is null then '0'
--	end jumlah_anak
--from employee
--left join biodata on employee.biodata_id = biodata.id
--left join my_child on employee.biodata_id = my_child.biodata_id
--left join employee_position on employee_position.employee_id = employee.id
--left join position on employee_position.position_id = position.id;

select
	first_name||' '||last_name as fullname,
	count(case when family.status ilike 'anak' then 1 end) as total_anak,
	extract ('year' from age(current_date, biodata.dob)) as age,
	position.name as position
from employee
left join biodata on employee.biodata_id = biodata.id 
left join family on family.biodata_id = biodata.id
left join employee_position on employee_position.employee_id = employee.id
left join position on employee_position.position_id = position.id
group by fullname, age, position;

-- 10
select
	concat(first_name,' ' ,last_name) as fullname,
	position.name as position,
	extract('year' from (age(current_date, dob))) as umur
from employee_position
left join employee on employee_id = employee.id
left join biodata on employee.biodata_id = biodata.id
left join position on position_id = position.id
order by umur desc
limit 3
;

-- 11
select
	position.name as jabatan,
	avg(salary) as average
from employee_position
left join employee on employee_id = employee.id
left join position on position_id = position.id
group by position.name 
having position.name ilike 'staff'
;

-- 12
select
	count(marital_status) as status_kawin,
	case when marital_status = true then 'Menikah'
		 when marital_status = false then 'Belum Menikah'
	end status
from employee
left join biodata on biodata_id = biodata.id
group by marital_status
;

-- 13
select
	first_name||' '||last_name as fullname,
	sum(days) as total_days
from 
(
	select 
	employee_id,
	extract('years' from end_date) as years,
	extract('days' from age(end_date, start_date)) as days
	from leave_request
	union all
	select 
	employee_id,
	extract('years' from end_date) as years,
	extract('days' from age(end_date, start_date)) as days
	from travel_request
)
left join employee on employee_id = employee.id 
left join biodata on employee.biodata_id = biodata.id
where first_name ilike '%raya'
and years = 2020
group by fullname
;


--



group by biodata_id 
;