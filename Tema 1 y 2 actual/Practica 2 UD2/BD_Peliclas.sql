drop database if exists cartelera_BD;
create database if not exists cartelera_BD;

use cartelera_BD;

drop table if exists T_Categoria;
create table T_Categoria(
id int primary key,
genero varchar(20)
);

INSERT INTO `cartelera_BD`.`T_Categoria`
(`id`,
`genero`)
VALUES
(1, 'Terror');

INSERT INTO `cartelera_BD`.`T_Categoria`
(`id`,
`genero`)
VALUES
(2, 'Anime');

drop table if exists T_Peliculas;
CREATE TABLE T_Peliculas (
    id INT PRIMARY KEY auto_increment,
    titulo VARCHAR(100) default null,
    año int default null,
    duracion_min INT  default null,
    sinopsis varchar(500) default null,
    imagen varchar(100) default null,
    votos INT DEFAULT 0,
    idCategoria INT default null,
    FOREIGN KEY (idCategoria)
        REFERENCES T_Categoria (id)
);

insert into T_Peliculas (titulo, año, duracion_min, sinopsis, imagen, idCategoria) 
values ('Expediente Warren',2013,112, ' Está basada en la historia real de los reputados 
investigadores de sucesos paranormales, Ed y Lorraine Warren, que acuden a la llamada de 
socorro de una familia que vive aterrorizada por un ser diabólico.', 'expediente_warren', 1),
('El Exorcista', 1973, 132, 'Se trata de una adaptación de la novela de 
William Peter Blatty inspirada en un exorcismo real en los años cincuenta, 
en Washington, de Regan, una niña de doce años. Y tú, ¿aún no la has visto?','el_exorcista', 1),
('La Matanza de Texas', 1974,103,'Un grupo de jóvenes se pierde en medio de las 
desérticas carreteras de Texas, y termina encontrándose con una familia de matarifes 
que los persigue con una sierra mecánica, descuartizándolos uno por uno.','laMatanzaDeTexas',1),
('Hereditary', 2018,127, 'Después de la muerte de la matriarca de los Graham, 
su hija, Annie, se muda a la casa con su familia. Annie espera olvidar los problemas 
que tuvo en su infancia allí, pero todo se tuerce cuando su hija empieza a ver figuras 
fantasmales.',1),
('El Resplandor',1980,146,'Jack Torrance es un hombre que se muda con su familia a un 
hotel aislado que debe cuidar, con la esperanza de salir del bloqueo creativo de su 
escritura. Mientras Jack no puede escapar del bloqueo, las visiones psíquicas de su 
hijo van en aumento.',1),
('Viernes 13', 1980,95,'El campamento de verano de Crystal Lake reabre sus puertas 
tras permanecer varios años cerrado a raíz de un accidente. A partir de ese momento, 
comienza a aparecer gente muerta en extrañas circunstancias.',1),
('Elviaje de Chihiro',2001,125,'Chihiro es una niña de diez años caprichosa y testaruda 
que cree que el universo entero debe someterse a sus deseos.',2),
('Your Name', 2016, 112, 'El joven Taki vive en Tokio: la joven Mitsuha, en un pequeño 
pueblo en las montañas. Durante el sueño, los cuerpos de ambos se intercambian. 
Recluidos en un cuerpo que les resulta extraño, comienzan a comunicarse.', 2),
('El tiempo contigo', 2019, 116, 'Un chico de secundaria que se ha mudado a Tokio se 
hace amigo de una chica con el misterioso poder de manipular y controlar el clima a 
su antojo.', 2),
('La tumba de las luciernagas',1988,'90','Un adolescente se ve obligado a cuidar a su 
hermana menor después de que un bombardeo aliado durante la Segunda Guerra Mundial 
destruye su casa.',2),
('Penguin Highway: El misterio de los pingüinos',2018,119,'Aoyama es un niño precoz que, 
además de poseer una envidiable capacidad para el análisis y la retórica, ha contado la 
cantidad exacta de días que le faltan para ser adulto. Pero todo pasa a segundo plano 
cuando su pueblo es invadido por pingüinos.',2),
('My Hero Academia: Dos Héroes',2018,96,'Deku y All-Might visitan la isla I, una ciudad 
flotante hecha por el hombre. Allí, conocen a una chica y pelean contra un villano que 
domina el lugar. Además, se develará información sobre el pasado de All-Might.',2);

select * from T_Peliculas;



-- ConnectionString.com

