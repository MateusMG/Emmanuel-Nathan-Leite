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
  `sun` VARCHAR(45) NOT NULL ,
  `moon` VARCHAR(45) NOT NULL ,
  `ascendant` VARCHAR(45) NOT NULL ,
  `mercury` VARCHAR(45) NOT NULL ,
  `venus` VARCHAR(45) NOT NULL ,
  `mars` VARCHAR(45) NOT NULL ,
  `jupiter` VARCHAR(45) NOT NULL ,
  `saturn` VARCHAR(45) NOT NULL ,
  `uranus` VARCHAR(45) NOT NULL ,
  `neptune` VARCHAR(45) NOT NULL ,
  `pluto` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`idsign`) )
ENGINE = InnoDB
COMMENT = '	';


-- -----------------------------------------------------
-- Table `Astroconnexion`.`chat`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Astroconnexion`.`chat` ;

CREATE  TABLE IF NOT EXISTS `Astroconnexion`.`chat` (
  `idchat` INT NOT NULL AUTO_INCREMENT ,
  `userchat` VARCHAR(45) NOT NULL ,
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
  `iduser` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NOT NULL ,
  `lastName` VARCHAR(45) NOT NULL ,
  `birthdate` DATE NOT NULL ,
  `birthplace` VARCHAR(60) NOT NULL ,
  `birthtime` TIME NOT NULL ,
  `gender` TINYINT(1) NOT NULL ,
  `email` VARCHAR(100) NOT NULL ,
  `password` TEXT NOT NULL ,
  `sign_idsign` INT NOT NULL ,
  `chat_idchat` INT NOT NULL ,
  `friendship_idfriendship` INT NOT NULL ,
  PRIMARY KEY (`iduser`) ,
  INDEX `fk_user_sign` (`sign_idsign` ASC) ,
  INDEX `fk_user_chat1` (`chat_idchat` ASC) ,
  INDEX `fk_user_friendship1` (`friendship_idfriendship` ASC) ,
  CONSTRAINT `fk_user_sign`
    FOREIGN KEY (`sign_idsign` )
    REFERENCES `Astroconnexion`.`sign` (`idsign` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_chat1`
    FOREIGN KEY (`chat_idchat` )
    REFERENCES `Astroconnexion`.`chat` (`idchat` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_friendship1`
    FOREIGN KEY (`friendship_idfriendship` )
    REFERENCES `Astroconnexion`.`friendship` (`idfriendship` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
