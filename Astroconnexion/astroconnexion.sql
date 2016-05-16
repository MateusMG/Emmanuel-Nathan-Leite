SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

DROP SCHEMA IF EXISTS `Astroconnexion` ;
CREATE SCHEMA IF NOT EXISTS `Astroconnexion` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `Astroconnexion` ;

-- -----------------------------------------------------
-- Table `Astroconnexion`.`sign`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Astroconnexion`.`sign` ;

CREATE  TABLE IF NOT EXISTS `Astroconnexion`.`sign` (
  `idsign` INT NOT NULL AUTO_INCREMENT ,
  `sun` TEXT NOT NULL ,
  `moon` TEXT NOT NULL ,
  `ascendant` TEXT NOT NULL ,
  `mercury` TEXT NOT NULL ,
  `venus` TEXT NOT NULL ,
  `mars` TEXT NOT NULL ,
  `jupiter` TEXT NOT NULL ,
  `saturn` TEXT NOT NULL ,
  `uranus` TEXT NOT NULL ,
  `neptune` TEXT NOT NULL ,
  `pluto` TEXT NOT NULL ,
  PRIMARY KEY (`idsign`) )
ENGINE = InnoDB
COMMENT = '	';


-- -----------------------------------------------------
-- Table `Astroconnexion`.`chat`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Astroconnexion`.`chat` ;

CREATE  TABLE IF NOT EXISTS `Astroconnexion`.`chat` (
  `idchat` INT NOT NULL AUTO_INCREMENT ,
  `userchat` VARCHAR(50) NOT NULL ,
  PRIMARY KEY (`idchat`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Astroconnexion`.`friendship`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Astroconnexion`.`friendship` ;

CREATE  TABLE IF NOT EXISTS `Astroconnexion`.`friendship` (
  `idfriendship` INT NOT NULL AUTO_INCREMENT ,
  `solicitation` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`idfriendship`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Astroconnexion`.`user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Astroconnexion`.`user` ;

CREATE  TABLE IF NOT EXISTS `Astroconnexion`.`user` (
  `firstName` VARCHAR(50) NOT NULL ,
  `lastName` VARCHAR(50) NOT NULL ,
  `birthdate` DATE NOT NULL ,
  `birthplace` VARCHAR(50) NOT NULL ,
  `birthtime` TIME NOT NULL ,
  `gender` VARCHAR(50) NOT NULL ,
  `email` VARCHAR(100) NOT NULL ,
  `password` TEXT NOT NULL ,
  `codSign` INT NOT NULL ,
  `codChat` INT NOT NULL ,
  `codFriendship` INT NOT NULL ,
  INDEX `fk_user_sign` (`codSign` ASC) ,
  INDEX `fk_user_chat1` (`codChat` ASC) ,
  INDEX `fk_user_friendship1` (`codFriendship` ASC) ,
  PRIMARY KEY (`email`) ,
  CONSTRAINT `fk_user_sign`
    FOREIGN KEY (`codSign` )
    REFERENCES `Astroconnexion`.`sign` (`idsign` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_chat1`
    FOREIGN KEY (`codChat` )
    REFERENCES `Astroconnexion`.`chat` (`idchat` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_friendship1`
    FOREIGN KEY (`codFriendship` )
    REFERENCES `Astroconnexion`.`friendship` (`idfriendship` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
