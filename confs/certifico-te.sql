-- MySQL Script generated by MySQL Workbench
-- Ter 18 Out 2016 02:53:40 BRST
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema certifico-te
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema certifico-te
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `certifico-te` DEFAULT CHARACTER SET utf8 ;
USE `certifico-te` ;

-- -----------------------------------------------------
-- Table `certifico-te`.`Pessoa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `certifico-te`.`Pessoa` (
  `CpfPes` VARCHAR(14) NOT NULL,
  `NomPes` VARCHAR(45) NOT NULL,
  `TelPes` VARCHAR(12) NULL,
  `EmaPes` VARCHAR(60) NULL,
  PRIMARY KEY (`CpfPes`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `certifico-te`.`Curso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `certifico-te`.`Curso` (
  `CodCur` INT NOT NULL AUTO_INCREMENT,
  `DesCur` VARCHAR(255) NOT NULL,
  `HorCur` INT NOT NULL,
  `NomPalCur` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`CodCur`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `certifico-te`.`Certificado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `certifico-te`.`Certificado` (
  `CodCer` INT NOT NULL,
  `CodCur` INT NOT NULL,
  `CpfPes` VARCHAR(14) NOT NULL,
  `CamArqCer` VARCHAR(255) NULL,
  PRIMARY KEY (`CodCer`, `CodCur`, `CpfPes`),
  INDEX `fk_certificado_pessoa_idx` (`CpfPes` ASC),
  INDEX `fk_certificado_curso_idx` (`CodCur` ASC),
  CONSTRAINT `fk_certificado_pessoa`
    FOREIGN KEY (`CpfPes`)
    REFERENCES `certifico-te`.`Pessoa` (`CpfPes`)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT,
  CONSTRAINT `fk_certificado_curso`
    FOREIGN KEY (`CodCur`)
    REFERENCES `certifico-te`.`Curso` (`CodCur`)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `certifico-te`.`Pessoa_has_Pessoa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `certifico-te`.`Pessoa_has_Pessoa` (
  `Pessoa_CpfPes` VARCHAR(14) NOT NULL,
  `Pessoa_CpfPes1` VARCHAR(14) NOT NULL,
  PRIMARY KEY (`Pessoa_CpfPes`, `Pessoa_CpfPes1`),
  INDEX `fk_Pessoa_has_Pessoa_Pessoa2_idx` (`Pessoa_CpfPes1` ASC),
  INDEX `fk_Pessoa_has_Pessoa_Pessoa1_idx` (`Pessoa_CpfPes` ASC),
  CONSTRAINT `fk_Pessoa_has_Pessoa_Pessoa1`
    FOREIGN KEY (`Pessoa_CpfPes`)
    REFERENCES `certifico-te`.`Pessoa` (`CpfPes`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pessoa_has_Pessoa_Pessoa2`
    FOREIGN KEY (`Pessoa_CpfPes1`)
    REFERENCES `certifico-te`.`Pessoa` (`CpfPes`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;