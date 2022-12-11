drop database if exists cartelera_BD;
create database if not exists cartelera_BD;

use cartelera_BD;

drop table if exists T_CATEGORIAS;
create table T_CATEGORIAS(
id int primary key,
genero varchar(20),
estilo varchar(20)
);

INSERT INTO `cartelera_BD`.`T_CATEGORIAS`
(`id`,
`genero`,
`estilo`)
VALUES
(1, 'Terror','terror.css');

INSERT INTO `cartelera_BD`.`T_CATEGORIAS`
(`id`,
`genero`,
`estilo`)
VALUES
(2, 'Anime','anime.css');

drop table if exists T_PELICULAS;
CREATE TABLE T_PELICULAS (
    id INT PRIMARY KEY auto_increment,
    titulo VARCHAR(100) default null,
    año int default null,
    duracion_min INT  default null,
    sinopsis varchar(500) default null,
    imagen varchar(100) default null,
    votos INT DEFAULT 0,
    idCategoria INT not null,
    FOREIGN KEY (idCategoria)
        REFERENCES T_CATEGORIAS (id)
);

drop table if exists T_ACTORES;
create table T_ACTORES(
id int primary key,
nombre varchar (150)
);

drop table if exists T_DIRECTORES;
create table T_DIRECTORES(
id int primary key,
nombre varchar (150)
);

drop table if exists T_ACTORES_PELICULAS;
create table T_ACTORES_PELICULAS(
idActores int,
idPelicula int,
primary key (idActores, idPelicula),
foreign key (idActores) references T_ACTORES(id),
foreign key (idPelicula) references T_PELICULAS(id)
);

drop table if exists T_DIRECTORES_PELICULAS;
create table T_DIRECTORES_PELICULAS(
idDirector int,
idPelicula int,
primary key (idDirector, idPelicula),
foreign key (idDirector) references T_DIRECTORES(id),
foreign key (idPelicula) references T_PELICULAS(id)
);


insert into T_PELICULAS (titulo, año, duracion_min, sinopsis, imagen, idCategoria) 
values ('Expediente Warren',2013,112, ' Está basada en la historia real de los reputados 
investigadores de sucesos paranormales, Ed y Lorraine Warren, que acuden a la llamada de 
socorro de una familia que vive aterrorizada por un ser diabólico.', 'expediente_warren.jpg', 1),
('El Exorcista', 1973, 132, 'Se trata de una adaptación de la novela de 
William Peter Blatty inspirada en un exorcismo real en los años cincuenta, 
en Washington, de Regan, una niña de doce años. Y tú, ¿aún no la has visto?','el_exorcista.jpg', 1),
('La Matanza de Texas', 1974,103,'Un grupo de jóvenes se pierde en medio de las 
desérticas carreteras de Texas, y termina encontrándose con una familia de matarifes 
que los persigue con una sierra mecánica, descuartizándolos uno por uno.','laMatanzaDeTexas.jpg',1),
('Hereditary', 2018,127, 'Después de la muerte de la matriarca de los Graham, 
su hija, Annie, se muda a la casa con su familia. Annie espera olvidar los problemas 
que tuvo en su infancia allí, pero todo se tuerce cuando su hija empieza a ver figuras 
fantasmales.', 'hereditary.jpeg',1),
('El Resplandor',1980,146,'Jack Torrance es un hombre que se muda con su familia a un 
hotel aislado que debe cuidar, con la esperanza de salir del bloqueo creativo de su 
escritura. Mientras Jack no puede escapar del bloqueo, las visiones psíquicas de su 
hijo van en aumento.', 'el_resplandor.webp',1),
('Viernes 13', 1980,95,'El campamento de verano de Crystal Lake reabre sus puertas 
tras permanecer varios años cerrado a raíz de un accidente. A partir de ese momento, 
comienza a aparecer gente muerta en extrañas circunstancias.', 'viernes13.jpg',1),
('Elviaje de Chihiro',2001,125,'Chihiro es una niña de diez años caprichosa y testaruda 
que cree que el universo entero debe someterse a sus deseos.', 'elViajeDeChihiro.jpg',2),
('Your Name', 2016, 112, 'El joven Taki vive en Tokio: la joven Mitsuha, en un pequeño 
pueblo en las montañas. Durante el sueño, los cuerpos de ambos se intercambian. 
Recluidos en un cuerpo que les resulta extraño, comienzan a comunicarse.', 'yourName.jpg',2),
('El tiempo contigo', 2019, 116, 'Un chico de secundaria que se ha mudado a Tokio se 
hace amigo de una chica con el misterioso poder de manipular y controlar el clima a 
su antojo.', 'elTiempoContigo.jpg',2),
('La tumba de las luciernagas',1988,'90','Un adolescente se ve obligado a cuidar a su 
hermana menor después de que un bombardeo aliado durante la Segunda Guerra Mundial 
destruye su casa.', 'laTumbaDeLasLucierngas.jpg',2),
('Penguin Highway: El misterio de los pingüinos',2018,119,'Aoyama es un niño precoz que, 
además de poseer una envidiable capacidad para el análisis y la retórica, ha contado la 
cantidad exacta de días que le faltan para ser adulto. Pero todo pasa a segundo plano 
cuando su pueblo es invadido por pingüinos.', 'pinguinos.jpeg',2),
('My Hero Academia: Dos Héroes',2018,96,'Deku y All-Might visitan la isla I, una ciudad 
flotante hecha por el hombre. Allí, conocen a una chica y pelean contra un villano que 
domina el lugar. Además, se develará información sobre el pasado de All-Might.', 'MyHeroAcademia.webp',2);

insert into T_DIRECTORES (id, nombre) values (1,"Michael Chaves"),
(2,"James Wan"), (3,"William Friedkin"), (4,"Tobe Hooper"),(5,"Ari Asier"),(6,"Stanley Kubrick"),
(7,"Sean S. Cunningham"), (8,"Hayao Miyazaki"),(9,"Makoto Shinkai"),(10,"Isao Takahata"),
(11,"Hiroyasu Ishida"),(12,"Kenji Nagasaki");

insert into T_DIRECTORES_PELICULAS (idDirector, idPelicula) values (1,1),(2,1), (3,2),
(4,3), (5,4),(6,5),(7,6),(8,7),(9,8),(10,9), (11,10), (12,11);

insert into T_ACTORES (id, nombre) values (1, "Vera Farmiga"),(2, "Patrick Wilson"),
(3, "Sterling Jerins"),(4, "Joseph Bishara"),(5, "Shannon Kook"),(6, "Joey King"),(7, "Linda Blair"),
(8, "Ellen Burstyn"),(9, "Jason Miller"),(10, "Max Von Sydow"),(11, "Vasilik Maliaros"),
(12, "Lee J. Cobb"), (13, "Marilyn Burns"), (14, "Gunnar Hansen"),(15, "Edwin Neal"),(16, "Teri McMinn"),
(17, "Paul A. Partain"),(18, "Jim Siedow"),(19, "Toni Collete"),(20, "Alex Wolf"),(21, "Milly Shapiro"),
(22, "Gabriel Byrne"),(23, "Ann Dowd"),(24, "Mallory Bechtel"), (25, "Jack Nicholson"), (26, "Shelly Duvall"),
(27, "Danny Lloyd"), (28, "Scatman Crothers"), (29, "Louise Burns"),(30, "Lia Beldam"), (31, "Kevin Bacon"),
(32, "Bets Palmer"),(33, "Adrienne King"), (34, "Robbi Morgan"), (35, "Jeannine Taylor"),
(36, "Laurie Bartram"), (37, "Miyu Irino"),(38, "Ryunosuke Kamiki"),(39, "Akio Nakamura"),
(40, "Daveigh Chase"), (41, "Bunta Sugawara"), (42, "Mari Natsuki"), (43, "Mone Kamishiraishi"),
(44, "Ryo Narita"), (45, "Laura Post"), (46, "Sayaka Ohara"), (47, "Kanon Tani"),
(48, "Nana Mori"), (49, "Sakura kiryu"),(50, "Shun Oguri"), (51, "Ayane Sakura"), (52, "Alison Brie"),
(53, "Nana Mori"), (54, "Ayano Shiraishi"), (55, "Adam Gibbs"), (56, "Akemi Yamaguchi"),
(57, "Yoshiko Shinobara"), (58, "Teruhisa Harita"), (59, "Massayo Sakai"),
(60, "Kana Kita"), (61, "Yu Aoi"), (62, "Rie Kugimiya"), (63, "Megumi Han"),(64, "Hidetoshi Nishijima"),
(65, "Mamiko Noto"), (66, "Daiki Yamashita"), (67, "Kenta Miyake"), (68, "Nobuhiko Okamto"),
(69, "Yuki Kaji"), (70, "Mirai Shida");

select * from T_PELICULAS;

/*
CREATE USER 'alex'@'localhost' IDENTIFIED BY '1234';
GRANT ALL PRIVILEGES ON cartelera_bd.* TO 'alex'@'localhost';
*/
-- ConnectionString.com

