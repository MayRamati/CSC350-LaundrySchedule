use college;

create table schedule(
course_number varchar(25),
title varchar(25),
credits int,
phone char(10),
section varchar(25),
room varchar(25),
instructor_name varchar(25),
email varchar(25),
position varchar(25),
id int NOT NULL AUTO_INCREMENT,
primary key(id)

);

insert into schedule (course_number,title,credits,phone,section,room,instructor_name,email,position) values 
('CIS100', 'Comp. Applications','3','900','f-0930Q','Feng,dave','feng@gmail.com','Faculty','212-555-2027');

select * from schedule;