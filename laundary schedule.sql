create database laundry_schedule;
use laundry_schedule;

create table user
(
	apt_number varchar(10),
    password varchar(20),
    primary key (apt_number)
);

create table orders
(
	apt_number varchar(10) references user(apt_number),
    slot_id int,
    primary key(apt_number)

);

create table days
(
	av_day varchar (20) primary key
);

create table hours
(
	av_time varchar(20) primary key
);

create table weekly_cal as select * from days,hours;
alter table weekly_cal add slot_id int auto_increment primary key;
alter table weekly_cal add apt_number varchar(10);
update weekly_cal set apt_number = 0;

 
create event weekly_reset_schedule
on schedule every '7' day
starts '2022-11-28 00:00:00'
DO
	update weekly_cal set apt_number = 0;
    

create event weekly_reset_orders
on schedule every '7' day
starts '2022-11-28 00:00:00'
DO
	delete from orders;


drop table days;
drop table hours;
drop table user;
drop table orders;
drop table weekly_cal;

select * from days;
select * from hours;
select * from user;
select * from orders;
select * from weekly_cal;

delete from user;
delete from orders;

show events from laundry_schedule;

insert into days (av_day) values ('Monday');
insert into days (av_day) values ('Tuesday');
insert into days (av_day) values ('Wednesday');
insert into days (av_day) values ('Thursday');
insert into days (av_day) values ('Friday');
insert into days (av_day) values ('Saturday');
insert into days (av_day) values ('Sunday');


insert into hours(av_time) values('00:00-02:00 AM'); 
insert into hours(av_time) values('02:00-04:00 AM');
insert into hours(av_time) values('04:00-06:00 AM');
insert into hours(av_time) values('06:00-08:00 AM');
insert into hours(av_time) values('08:00-10:00 AM');
insert into hours(av_time) values('10:00 AM - 12:00 PM');
insert into hours(av_time) values('12:00-02:00 PM');
insert into hours(av_time) values('02:00-04:00 PM');
insert into hours(av_time) values('04:00-06:00 PM');
insert into hours(av_time) values('06:00-08:00 PM');
insert into hours(av_time) values('08:00-10:00 PM');
insert into hours(av_time) values('10:00 PM - 12:00 AM');

