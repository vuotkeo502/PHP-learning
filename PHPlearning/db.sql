CREATE database php;

create table users(
id int(10) not null primary key auto_increment,
fullname varchar (32) not null,
email varchar(32) not null,
username varchar(12) not null unique ,
password varchar (100) not null
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;