-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema laravel
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema laravel
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `laravel` DEFAULT CHARACTER SET utf8 ;
USE `laravel` ;

-- -----------------------------------------------------
-- Table `laravel`.`produto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `laravel`.`produto` (
  `ProCod` INT(11) NOT NULL AUTO_INCREMENT,
  `ProNom` VARCHAR(45) NOT NULL,
  `created_at` DATETIME NULL DEFAULT NULL,
  `updated_at` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`ProCod`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `laravel`.`operacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `laravel`.`operacao` (
  `OpCod` INT(11) NOT NULL AUTO_INCREMENT,
  `OpNom` VARCHAR(45) NOT NULL,
  `ProCod` INT(11) NOT NULL,
  `OpMaq` VARCHAR(45) NOT NULL,
  `OpCron` VARCHAR(45) NOT NULL,
  `created_at` DATETIME NULL DEFAULT NULL,
  `updated_at` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`OpCod`),
  INDEX `fk_Operacao_Produto` (`ProCod` ASC) VISIBLE,
  CONSTRAINT `fk_Operacao_Produto`
    FOREIGN KEY (`ProCod`)
    REFERENCES `laravel`.`produto` (`ProCod`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `laravel`.`sequencia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `laravel`.`sequencia` (
  `SeqCod` INT(11) NOT NULL AUTO_INCREMENT,
  `SeqNom` VARCHAR(45) NOT NULL,
  `OpCod` INT(11) NOT NULL,
  `ProCod` INT(11) NOT NULL,
  `SeqRit` DOUBLE NOT NULL,
  `SeqInt` DOUBLE NOT NULL,
  `SeqCon` DOUBLE NOT NULL,
  `SeqQtdVez` INT(11) NOT NULL DEFAULT 1,
  `SeqPorPec` INT(11) NOT NULL,
  `created_at` DATETIME NULL DEFAULT NULL,
  `updated_at` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`SeqCod`),
  INDEX `fk_Sequencia_Operacao1` (`OpCod` ASC) VISIBLE,
  CONSTRAINT `fk_Sequencia_Operacao1`
    FOREIGN KEY (`OpCod`)
    REFERENCES `laravel`.`operacao` (`OpCod`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `laravel`.`tomada_tempo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `laravel`.`tomada_tempo` (
  `TomCod` INT(11) NOT NULL AUTO_INCREMENT,
  `TomDat` DATE NOT NULL,
  `TomTurno` VARCHAR(2) NOT NULL,
  `OpCod` INT(11) NOT NULL,
  `ProCod` INT(11) NOT NULL,
  `TomNumLei` INT(2) NOT NULL,
  `TomOpe` VARCHAR(45) NOT NULL,
  `TomObs` VARCHAR(200) NULL DEFAULT NULL,
  `created_at` DATETIME NULL DEFAULT NULL,
  `updated_at` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`TomCod`),
  INDEX `fk_Tomada_Tempo_Operacao1` (`OpCod` ASC) VISIBLE,
  CONSTRAINT `fk_Tomada_Tempo_Operacao1`
    FOREIGN KEY (`OpCod`)
    REFERENCES `laravel`.`operacao` (`OpCod`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `laravel`.`cronometragem`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `laravel`.`cronometragem` (
  `CroCod` INT(11) NOT NULL,
  `CroTem` VARCHAR(8) NOT NULL,
  `TomCod` INT(11) NOT NULL,
  `SeqCod` INT(11) NOT NULL,
  PRIMARY KEY (`CroCod`),
  INDEX `fk_Cronometragem_Tomada_Tempo1` (`TomCod` ASC) VISIBLE,
  INDEX `fk_Cronometragem_Sequencia1` (`SeqCod` ASC) VISIBLE,
  CONSTRAINT `fk_Cronometragem_Sequencia1`
    FOREIGN KEY (`SeqCod`)
    REFERENCES `laravel`.`sequencia` (`SeqCod`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Cronometragem_Tomada_Tempo1`
    FOREIGN KEY (`TomCod`)
    REFERENCES `laravel`.`tomada_tempo` (`TomCod`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `laravel`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `laravel`.`usuario` (
  `UsuCod` INT(11) NOT NULL AUTO_INCREMENT,
  `UsuName` VARCHAR(45) NOT NULL,
  `UsuSen` VARCHAR(45) NOT NULL,
  `UsuNom` VARCHAR(45) NOT NULL,
  `UsuTip` VARCHAR(1) NOT NULL,
  `created_at` DATETIME NULL DEFAULT NULL,
  `updated_at` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`UsuCod`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
