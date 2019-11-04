create database library;
	use library;
create table book 
	(title varchar(255) not null,
	edition numeric(5,0),
	book_id numeric(10), 
	status varchar(8)
		check (status in ('issued', 'free')), 
	category varchar(10), 
	author_name varchar(20),
	publisher varchar(20),
	primary key(book_id)
	);
create table employee 
	(employee_id numeric(10), 
	name varchar(20), 
	salary numeric(7,0),
	position varchar(9)
		check (position in ('manager', 'clerk', 'peon')),
	primary key(employee_id)
	);
create table branch 
	(address varchar(50), 
	branch_id numeric(10), 
	manager_id numeric(10),
	primary key(branch_id),
	foreign key(manager_id) references employee(employee_id)
	);
create table customer 
	(customer_id numeric(10),
	regdate date, 
	books_issued numeric(2, 0)
		check (books_issued >= 0 and books_issued < 4), 
	name varchar(20),
	address varchar(20),
	fine numeric(5, 0),
	primary key(customer_id)
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