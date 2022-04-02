create database urldb;
use urldb;
create table `users`(
	`ip` VARCHAR(20) ,
    `urlname` VARCHAR(20),
    `url` varchar(40),
	PRIMARY KEY(`ip`)
);
alter table users
modify ip VARCHAR(20);