create database if not exists BASE_DATOS;
use BASE_DATOS;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



-- Estructura de la tabla 'chat'
CREATE TABLE IF NOT EXISTS `chat` (
  `name` varchar(50) DEFAULT NULL,
  `message` text,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- Tabla para el registro
CREATE TABLE IF NOT EXISTS `register` (
  `id` int auto_increment primary key,
  `name` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(30) NOT NULL,
  `modified_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- Eliminar Usuario
