create database BiblioSchool ;
use BiblioSchool ;
create table Role (id int  auto_increment unique primary key, name varchar(20) );
create table User (id int  AUTO_INCREMENT primary key , name varchar(20) not null  , prenom  varchar(20)  not null, email varchar(100)  not null,
password varchar(20)  not null, id_role int  , foreign key (id_role) references Role(id)) ; 
insert into Role  (name) values ("admin") , ("Student");
select * from User ;
insert into User values (1, "younes", "kamal" , "kamalyouness277@gmail.com", "kamal1234" , 2 ) ; 