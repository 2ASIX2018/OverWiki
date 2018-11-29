-- MySQL Workbench Forward Engineering
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
/*!40101 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES' */;

-- -----------------------------------------------------
-- Schema OverWiki
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `OverWiki` DEFAULT CHARACTER SET utf8 ;
USE `OverWiki` ;

-- -----------------------------------------------------
-- Table `OverWiki`.`Personajes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `OverWiki`.`Personajes` (
  `Nombre` VARCHAR(45) NULL,
  `Apellido` VARCHAR(45) NULL,
  `Alias` VARCHAR(45) NULL,
  `Clase` VARCHAR(45) NULL,
  `DisparoP` VARCHAR(45) NULL,
  `DisparoS` VARCHAR(45) NULL,
  `HabilidadPrimaria` VARCHAR(45) NULL,
  `HabilidadSecundaria` VARCHAR(45) NULL,
  `HabilidadTercera` VARCHAR(45) NULL,
  `Definitva` VARCHAR(45) NULL,
  `Pasiva` VARCHAR(45) NULL)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `OverWiki`.`Usuari`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `OverWiki`.`Usuari` (
  `login` VARCHAR(45) NULL,
  `rol` VARCHAR(45) NULL,
  `password` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- Usuarios

INSERT INTO `Usuari` VALUES ('admin','admin','admin','admin@admin'),('user','user','user','user@user');
