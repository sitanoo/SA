-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema laravel
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema laravelsequenciausuario
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `laravel` DEFAULT CHARACTER SET utf8 ;
USE `laravel` ;

-- -----------------------------------------------------
-- Table `laravel`.`Produto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `laravel`.`Produto` (
  `ProCod` INT NOT NULL,
  `ProNom` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`ProCod`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `laravel`.`Operação`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `laravel`.`Operacao` (
  `OpCod` INT NOT NULL AUTO_INCREMENT,
  `OpNom` VARCHAR(45) NOT NULL,
  `ProCod` INT NOT NULL,
  `OpMaq` VARCHAR(45) NOT NULL,
  `OpCron` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`OpCod`),
  CONSTRAINT `fk_Operacao_Produto`
    FOREIGN KEY (`ProCod`)
    REFERENCES `laravel`.`Produto` (`ProCod`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `laravel`.`Sequência`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `laravel`.`Sequencia` (
  `SeqCod` INT NOT NULL AUTO_INCREMENT,
  `SeqNom` VARCHAR(45) NOT NULL,
  `OpCod` INT NOT NULL,
  `ProCod` INT NOT NULL,
  `SeqRit` DOUBLE NOT NULL,
  `SeqInt` DOUBLE NOT NULL,
  `SeqCon` DOUBLE NOT NULL,
  `SeqQtdVez` INT NOT NULL DEFAULT 1,
  `SeqPorPec` INT NOT NULL,
  PRIMARY KEY (`SeqCod`),
  CONSTRAINT `fk_Sequencia_Operacao1`
    FOREIGN KEY (`OpCod`)
    REFERENCES `laravel`.`Operacao` (`OpCod`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `laravel`.`Tomada_Tempo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `laravel`.`Tomada_Tempo` (
  `TomCod` INT NOT NULL AUTO_INCREMENT,
  `TomDat` DATE NOT NULL,
  `TomTurno` VARCHAR(2) NOT NULL,
  `OpCod` INT NOT NULL,
  `ProCod` INT NOT NULL,
  `TomNumLei` INT(2) NOT NULL,
  `TomOpe` VARCHAR(45) NOT NULL,
  `TomObs` VARCHAR(200) NULL,
  PRIMARY KEY (`TomCod`),
  CONSTRAINT `fk_Tomada_Tempo_Operacao1`
    FOREIGN KEY (`OpCod`)
    REFERENCES `laravel`.`Operacao` (`OpCod`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `laravel`.`Cronometragem`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `laravel`.`Cronometragem` (
  `CroCod` INT NOT NULL AUTO_INCREMENT,
  `CroTem` DOUBLE NOT NULL,
  `CroCronNom` VARCHAR(45) NOT NULL,
  `TomCod` INT NOT NULL,
  `Tomada_Tempo_OpCod` INT NOT NULL,
  `SeqCod` INT NOT NULL,
  `ProCod` INT NOT NULL,
  `OpCod` INT NOT NULL,
  PRIMARY KEY (`CroCod`),
  CONSTRAINT `fk_Cronometragem_Tomada_Tempo1`
    FOREIGN KEY (`TomCod`)
    REFERENCES `laravel`.`Tomada_Tempo` (`TomCod`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Cronometragem_Sequencia1`
    FOREIGN KEY (`SeqCod`)
    REFERENCES `laravel`.`Sequencia` (`SeqCod`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `laravel`.`Usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `laravel`.`Usuario` (
  `UsuCod` INT NOT NULL AUTO_INCREMENT,
  `UsuName` VARCHAR(45) NOT NULL,
  `UsuSen` VARCHAR(45) NOT NULL,
  `UsuNom` VARCHAR(45) NOT NULL,
  `UsuTip` VARCHAR(1) NOT NULL,
  PRIMARY KEY (`UsuCod`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;