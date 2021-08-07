DROP TABLE IF EXISTS details;


CREATE TABLE details(
	id int(12) AUTO_INCREMENT PRIMARY KEY not null ,
	name varchar(30) not null,
	roll_no varchar(11) not null unique,
	dob date not null,
	address text not null,
	mobile varchar(20) not null,
	mailid varchar(40) not null,
	sem1 DECIMAL(4,2) not null,
	sem2 DECIMAL(4,2) not null,
	sem3 DECIMAL(4,2) ,
	sem4 DECIMAL(4,2) ,
	sem5 DECIMAL(4,2) ,
	sem6 DECIMAL(4,2) ,
	sem7 DECIMAL(4,2) ,
	sem8 DECIMAL(4,2) ,
	cgpa DECIMAL(4,2) not null,
	hobbies text,
	hord varchar(12) not null,
	ref text

);


