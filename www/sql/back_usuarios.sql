create database login;
use login;
create table usuarios (
id_usuario int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
username varchar(20) NOT NULL,
password char(32) NOT NULL,
email varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
alter table usuarios add column fecha_alta TIMESTAMP;
alter table usuarios modify column fecha_alta TIMESTAMP DEFAULT CURRENT_TIMESTAMP;
insert into usuarios (username,password,email) values ('maria',MD5('maria'), 'maria@surlatamtec.com');
