create database taiikusoubu;

grant all on taiikusoubu.* to dbuser@localhost identified by '44-masaya';

use taiikusoubu

create table users (
  id int not null auto_increment primary key,
  email varchar(255) unique,
  password varchar(255),
  created datetime,
  modified datetime

);


desc users;
