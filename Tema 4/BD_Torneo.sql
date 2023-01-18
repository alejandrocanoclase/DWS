drop database if exists pingpong_BD;
create database if not exists pingpong_BD;

use pingpong_BD;

drop table if exists T_TORNEOS;
create table T_TORNEOS(
	id int primary key auto_increment,
    nombre varchar(50) not null,
    numJugadores int default 8,
    fecha date not null
);

drop table if exists T_JUGADORES;
create table T_JUGADORES(
	id int primary key auto_increment,
    nombre varchar(50)
);

drop table if exists T_PARTIDOS;
create table T_PARTIDOS(
	id int primary key auto_increment,
    idTorneo int,
    tipoPartido enum('cuartos','semifinal','final'),
    idJugadorA int,
    idJugadorB int,
    ganador int,
    
    foreign key (idTorneo) references T_TORNEOS (id),
    foreign key (idJugadorA) references T_JUGADORES (id),
    foreign key (idJugadorB) references T_JUGADORES (id),
    foreign key (ganador) references T_JUGADORES (id)
);

drop table if exists T_USUARIOS;
create table T_USUARIOS(
	id int primary key,
    usuario varchar(255),
    clave varchar(255)
);

insert into T_JUGADORES (nombre) values ('Mari Carmen Alfaro'),('Alejandro Cano'),('Jaume Aguiló'),('Fernando Buendía'),
('Margalida Moyá'),('Daniel Okolo'),('Adrian Guinot'),('Sergio Díaz');

insert into T_TORNEOS (nombre,fecha) values ('Torneo navidad', "2023-01-09");
insert into T_TORNEOS (nombre,fecha) values ('Torneo fin de curso', "2023-06-015");

insert into T_PARTIDOS (idTorneo, tipoPartido, idJugadorA, idJugadorB, ganador) values 
(1,'cuartos',1,2,2), (1,'cuartos',3,4,3),(1,'cuartos',5,6,5),(1,'cuartos',7,8,8),
(1,'semifinal',2,3,2),(1,'semifinal',5,8,5),
(1,'final',2,5,2);


select * from T_TORNEOS;
select * from T_PARTIDOS;