drop database if exists pingpong_BD;
create database if not exists pingpong_BD;

use pingpong_BD;

drop table if exists T_TORNEOS;
create table T_TORNEOS(
	id int primary key auto_increment,
    nombre varchar(50) not null,
    num_jugadores int not null,
    fecha date not null
);

drop table if exists T_JUGADORES;
create table T_JUGADORES(
	id int primary key,
    nombre varchar(50)
);

drop table if exists T_PARTIDOS;
create table T_PARTIDOS(
	id int primary key,
    idTorneo int,
    tipo_partido enum('cuartos','semifinal','final'),
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

-- insert into T_TORNEOS (nombre, num_jugadores,fecha) values ('Prueba de torneo', 16, 2023-01-09);

-- select * from T_TORNEOS;