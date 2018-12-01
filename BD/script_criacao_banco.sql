-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema PETADOPT
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema PETADOPT
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `PETADOPT` DEFAULT CHARACTER SET utf8 ;
USE `PETADOPT` ;

-- -----------------------------------------------------
-- Table `PETADOPT`.`Usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PETADOPT`.`Usuario` (
  `idUsuario` INT NOT NULL AUTO_INCREMENT,
  `nome_completo` VARCHAR(75) NOT NULL,
  `login` VARCHAR(30) NOT NULL,
  `senha` VARCHAR(32) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `ddd` VARCHAR(2) NULL,
  `telefone` VARCHAR(9) NULL,
  PRIMARY KEY (`idUsuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PETADOPT`.`Pet`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PETADOPT`.`Pet` (
  `idPet` INT NOT NULL AUTO_INCREMENT,
  `nome_provisorio` VARCHAR(30) NOT NULL,
  `especie` ENUM('cão', 'gato') NOT NULL,
  `cidade` VARCHAR(45) NOT NULL,
  `estado` VARCHAR(2) NOT NULL,
  `sexo` ENUM('F', 'M') NOT NULL,
  `porte` ENUM('P', 'M', 'G') NOT NULL,
  `dataCadastro` DATE NOT NULL,
  `descricao` VARCHAR(150) NOT NULL,
  `outrasInfo` VARCHAR(100) NOT NULL,
  `Usuario_idUsuario` INT NOT NULL,
  PRIMARY KEY (`idPet`),
  INDEX `fk_Pet_Usuario1_idx` (`Usuario_idUsuario` ASC),
  CONSTRAINT `fk_Pet_Usuario1`
    FOREIGN KEY (`Usuario_idUsuario`)
    REFERENCES `PETADOPT`.`Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PETADOPT`.`Endereco_Usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PETADOPT`.`Endereco_Usuario` (
  `idEndereco_Usuario` INT NOT NULL AUTO_INCREMENT,
  `UF` CHAR(2) NOT NULL,
  `cidade` VARCHAR(45) NOT NULL,
  `bairro` VARCHAR(25) NOT NULL,
  `logradouro` VARCHAR(15) NOT NULL,
  `nome_logradouro` VARCHAR(45) NOT NULL,
  `numero` INT NOT NULL,
  `complemento` VARCHAR(20) NULL,
  `Usuario_idUsuario` INT NOT NULL,
  PRIMARY KEY (`idEndereco_Usuario`),
  INDEX `fk_Endereco_Usuario_Usuario1_idx` (`Usuario_idUsuario` ASC),
  CONSTRAINT `fk_Endereco_Usuario_Usuario1`
    FOREIGN KEY (`Usuario_idUsuario`)
    REFERENCES `PETADOPT`.`Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PETADOPT`.`fotosPet`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PETADOPT`.`fotosPet` (
  `idfotosPet` INT NOT NULL AUTO_INCREMENT,
  `linkFotoPerfil` VARCHAR(60) NOT NULL,
  `linkFoto1` VARCHAR(60) NULL,
  `linkFoto2` VARCHAR(60) NULL,
  `linkFoto3` VARCHAR(60) NULL,
  `linkFoto4` VARCHAR(60) NULL,
  `linkFoto5` VARCHAR(60) NULL,
  `linkFoto6` VARCHAR(60) NULL,
  `Pet_idPet` INT NOT NULL,
  PRIMARY KEY (`idfotosPet`),
  INDEX `fk_fotosPet_Pet1_idx` (`Pet_idPet` ASC),
  CONSTRAINT `fk_fotosPet_Pet1`
    FOREIGN KEY (`Pet_idPet`)
    REFERENCES `PETADOPT`.`Pet` (`idPet`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
