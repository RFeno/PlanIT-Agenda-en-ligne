drop database projet_tm_db;

create database if not exists projet_tm_db character set ='utf8';

use projet_tm_db;

create table if not exists
user (
    idUser numeric(3) unsigned not null,
    passwd varchar(60) not null,
    mail varchar(100) not null,
    name varchar(60) not null,
    firstname varchar(60) not null,
    idEmploye numeric(3) unsigned,
    primary key (idUser),
    key (idEmploye)
)engine=InnoDB;

create table if not exists
appointment (
    idUser numeric(3) unsigned not null,
    startTime numeric(2) unsigned not null, -- Heure du début
    day char(10) not null, -- Ex : 10/10/2020
    idEmploye numeric(3) unsigned not null,
    idCompany numeric(3) unsigned not null,
    sent varchar(255) not null,
    primary key (idUser, idEmploye, startTime, day),
    key (idEmploye, idCompany, sent)
)engine=InnoDB;

create table if not exists
own (
    idCompany numeric(3) unsigned not null,
    idEmploye numeric(3) unsigned not null,
    primary key (idCompany, idEmploye),
    key (idEmploye)
)engine=InnoDB;

create table if not exists
company (
    idCompany numeric(3) unsigned not null,
    name varchar(60) not null,
    adress varchar(255) not null,
    idEmployeDefaut numeric(3) unsigned not null,
    primary key (idCompany)
)engine=InnoDB;

create table if not exists
reason (
    idCompany numeric(3) unsigned not null,
    duration numeric(2) unsigned not null,
    sent varchar(255) not null,
    primary key (idCompany, sent)
)engine=InnoDB;

alter table own
add constraint foreign key (idEmploye) references User (idEmploye),
add constraint foreign key (idCompany) references Company (idCompany);

alter table Company
add constraint foreign key (idEmployeDefaut) references User (idEmploye);

alter table Reason
add constraint foreign key (idCompany) references Company (idCompany);

alter table Appointment
add constraint foreign key (idUser) references User (idUser),
add constraint foreign key (idEmploye) references User (idEmploye),
add constraint foreign key (idCompany, sent) references Reason (idCompany, sent);
