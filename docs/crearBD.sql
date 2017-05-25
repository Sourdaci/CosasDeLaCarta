create database restaurant;
use restaurant;
create table `Plato` (
	`cod` int primary key unique AUTO_INCREMENT not null,
    `nombre` varchar(300) CHARACTER SET utf8 COLLATE utf8_general_ci not null,
    `Primavera` boolean not null,
    `Verano` boolean not null,
    `Otono` boolean not null,
    `Invierno` boolean not null,
    `Gluten` boolean not null,
    `Crustaceo` boolean not null,
    `Huevo` boolean not null,
    `Pescado` boolean not null,
    `Cacahuete` boolean not null,
    `Soja` boolean not null,
    `Lacteos` boolean not null,
    `Cascara` boolean not null,
    `Apio` boolean not null,
    `Mostaza` boolean not null,
    `Sesamo` boolean not null,
    `Sulfitos` boolean not null,
    `Altramuces` boolean not null,
    `Moluscos` boolean not null, 
	`Visible` boolean not null
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

create table `Config` (
	`Temporada` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci not null,
    `Password` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci not null
) ENGINE=InnoDB DEFAULT CHARSET=latin1;