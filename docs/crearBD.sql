create database restaurant;
use restaurant;
create table `Plato` (
	`cod` int primary key unique AUTO_INCREMENT not null,
    `nombre` varchar(300) CHARACTER SET utf8 COLLATE utf8_general_ci not null,
    /*`tipo` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci not null,*/
    `Primavera` boolean,
    `Verano` boolean,
    `Otono` boolean,
    `Invierno` boolean,
    `Gluten` boolean,
    `Crustaceo` boolean,
    `Huevo` boolean,
    `Pescado` boolean,
    `Cacahuete` boolean,
    `Soja` boolean,
    `Lacteos` boolean,
    `Cascara` boolean,
    `Apio` boolean,
    `Mostaza` boolean,
    `Sesamo` boolean,
    `Sulfitos` boolean,
    `Altramuces` boolean,
    `Moluscos` boolean
) ENGINE=InnoDB DEFAULT CHARSET=latin1;