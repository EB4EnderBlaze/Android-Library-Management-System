create database library;
	use library;
create table name
	(name_id numeric(10, 0),
	first_name varchar(15),
	middle_name varchar(15),
	last_name varchar(15),
	primary key(name_id)
	);
create table book 
	(title varchar(255) not null,
	edition numeric(5,0),
	book_id numeric(10), 
	status varchar(8)
		check (status in ('issued', 'free')), 
	category varchar(10), 
	author varchar(50),
	publisher varchar(100),
	primary key(book_id)
	);
create table employee 
	(employee_id numeric(10), 
	name_id numeric(10) not null, 
	salary numeric(7,0),
	position varchar(9)
		check (position in ('manager', 'clerk', 'peon')),
	primary key(employee_id),
	foreign key(name_id) references name(name_id)
	);
create table address
	(address_id numeric(10),
	contact_number varchar(15) not null,
 	status varchar(10)
 		check (status in ('customer', 'library')),
 	street varchar(40),
 	city varchar(35) not null,
 	state varchar(25) not null,
 	zipcode varchar(10) not null,
 	primary key(address_id)
 	);
create table branch 
	(address_id numeric(10), 
	branch_id numeric(10), 
	manager_id numeric(10),
	primary key(branch_id),
	foreign key(address_id) references address(address_id),
	foreign key(manager_id) references employee(employee_id)
	);
create table customer 
	(customer_id numeric(10),
	regdate date, 
	books_issued numeric(2, 0)
		check (books_issued >= 0 and books_issued < 4), 
	name_id numeric(10),
	address_id numeric(10),
	fine numeric(5, 0),
	primary key(customer_id),
	foreign key(address_id) references address(address_id),
	foreign key(name_id) references name(name_id)
	);
create table transaction_status
	(customer_id numeric(10), 
	book_id numeric(10),
	branch_id numeric(10), 
	issue varchar(10)
		check (issue in ('issued', 'returned')), 
	trans_date date, 
	trans_id numeric(10),
	primary key(trans_id),
	foreign key(customer_id) references customer(customer_id),
	foreign key(book_id) references book(book_id),
	foreign key(branch_id) references branch(branch_id)
	);
