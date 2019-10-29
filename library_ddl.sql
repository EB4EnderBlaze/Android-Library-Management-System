create database library;
	use library;
create table book 
	(title varchar(255),
	edition numeric(5,0), 
	book_id numeric(10), 
	issued boolean, 
	category varchar(10), 
	author varchar(50), 
	publisher varchar(100),
	primary key(book_id)
	);
create table employee 
	(employee_id numeric(10), 
	name varchar(50), 
	salary numeric(7,0),
	position varchar(9),
	primary key(employee_id)
	);
create table branch 
	(address varchar(100), 
	branch_id numeric(10), 
	manager_id numeric(10),
	primary key(branch_id)
	);
create table customer 
	(customer_id numeric(10),
	regdate date, 
	books_issued numeric(2, 0), 
	name varchar(50),
	address_id numeric(10),
	fine numeric(5, 0),
	primary key(customer_id)
	);
create table address
	(address_id numeric(10),
	contact_number varchar(15),
 	branch_number varchar(15),
 	street varchar(40),
 	city varchar(35),
 	state varchar(25),
 	zipcode varchar(10),
 	primary key(address_id)
 	);
create table transaction_status
	(customer_id numeric(10), 
	book_id numeric(10), 
	issue boolean, 
	trans_date date, 
	trans_id numeric(10),
	primary key(trans_id),
	foreign key(customer_id) references customer(customer_id),
	foreign key(book_id) references book(book_id)
	);