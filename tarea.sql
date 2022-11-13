-- Adminer 4.8.1 MySQL 8.0.31 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP DATABASE IF EXISTS `agenda`;
CREATE DATABASE `agenda` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `agenda`;

DROP TABLE IF EXISTS `tarea`;
CREATE TABLE `tarea` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `lugar` varchar(2000) NOT NULL,
  `horario_inicial` time NOT NULL,
  `horario_final` time NOT NULL,
  `fecha` date NOT NULL,
  `status` tinyint NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `tarea` (`id`, `nombre`, `descripcion`, `lugar`, `horario_inicial`, `horario_final`, `fecha`, `status`) VALUES
(1,	'Poner atencion a la clase',	'no contesta las preguntas (abejita enojada)',	'meet',	'14:30:00',	'16:30:00',	'2022-11-12',	1);

-- 2022-11-13 00:59:58
