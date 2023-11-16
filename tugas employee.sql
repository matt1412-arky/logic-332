--1
select
  concat(first_name,' ' ,last_name) as fullname,
  sum(j.salary * 12)/12 as rata2_gaji_pertahun
from biodata m
join employee j on m.id = j.id
group by fullname;

--2
insert into biodata(first_name, last_name, dob, pob, address, marital_status) values 
('Aries', 'Solus', '1992-02-04', 'Bandung','Jl. Pohon Beringin, Bandung', false),
('Haris', 'Jaya', '1992-02-07', 'Bandung','Jl. Pohon Asam Jawa, Bandung', false),
('Ares', 'Kusuma', '1993-06-04', 'Bandung','Jl. Pohon Bambu, Bandung', true);

insert into employee(biodata_id, nip, status, salary) values 
(7, 'NX006', 'Kontrak', 100000000),
(8, 'NX007', 'Kontrak', 50000000);

select 
first_name||' '||last_name as fullname,
nip, status, salary
from employee
inner join biodata on biodata_id = biodata.id;

--3
select concat(first_name,' ',last_name) as fullname, dob from biodata where dob between '1991-01-01' and '1991-12-31';

--4
select concat(first_name,' ' ,last_name) as fullname, dob, pob, address, marital_status,employee.status
from biodata
left join employee on biodata_id = biodata.id
where biodata_id is null;

--5
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


SELECT travel_request_id, SUM(item_cost) AS total_cost
FROM travel_settlement
GROUP BY travel_request_id;

--6
select
concat(first_name,' ' ,last_name) as fullname,
n.period,
n.regular_qouta
from biodata m
join employee_leave n on m.id=n.id 
where n.period =2020;

--7
SELECT
  concat(first_name,' ' ,last_name) as fullname,
  n.status,
  extract(year from age(current_date, m.dob)) as umur
from biodata m
join employee n on m.id = n.id
order by umur desc;

--8
select 
	employee_id,
	sum(item_cost) as item_cost,
	sum(travel_fee) as travel_fee,
	abs(sum(item_cost) - sum(travel_fee)) as selisih
from travel_request
left join travel_settlement on travel_request_id = travel_request.id
left join travel_type on travel_type_id = travel_type.id
group by employee_id;

--9
SELECT
  concat (b.first_name, ' ', b.last_name) as fullname,
  coalesce(p.name, 'Tidak memiliki jabatan') as jabatan,
  extract (year from age(current_date, b.dob)) as usia,
  coalesce(count(case when f.status = 'Anak' then 1 end), 0) as jumlah_anak
from employee e 
left join biodata b on b.id = e.biodata_id
left join family f on b.id = f.biodata_id
left join employee_position ep on b.id = ep.employee_id
left join position p on p.id = ep.position_id
group by b.first_name, b.last_name, p.name, b.dob
order by fullname;


--10
select
	concat(first_name,' ' ,last_name) as fullname,
	position.name as position,
	extract('year' from age(current_date, dob)) as umur
from employee_position
left join employee on employee_id = employee.id
left join biodata on employee.biodata_id = biodata.id
left join position on position_id = position.id
order by umur desc
limit 3;

--11
select
	concat(first_name,' ' ,last_name) as fullname,
	position.name as jabatan,
	avg(salary) as average
from employee_position
left join employee on employee_id = employee.id
left join position on position_id = position.id
left join biodata on employee.biodata_id = biodata.id
group by fullname,position.name 
having position.name ilike 'staff';

-- 12
select
	count(marital_status) as status_kawin,
	case when marital_status = 'True' then 'Menikah'
		 when marital_status = 'False' then 'Belum Menikah'
	end status
from employee
join biodata on biodata_id = biodata.id
group by marital_status;

--13
select 
  concat(first_name,' ' ,last_name) as fullname,
  sum(total_days) as total
from employee e
left join biodata b on e.biodata_id = b.id
left join (
  select
    employee_id,
    sum(extract('days' from age(end_date, start_date)) ) as total_days
  from leave_request
  where extract('year' from end_date) = 2020
  group by employee_id
  union all
  select
    employee_id,
    sum(extract('days' from age(end_date, start_date)) ) as total_days
  from travel_request
  where extract('year' from end_date) = 2020
  group by employee_id
) as totals on e.id = totals.employee_id
where first_name ilike '%raya'
group by fullname;
