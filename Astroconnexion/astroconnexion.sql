SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

DROP SCHEMA IF EXISTS `Astroconnexion` ;
CREATE SCHEMA IF NOT EXISTS `Astroconnexion` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `Astroconnexion` ;

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
  `email` VARCHAR(100) NOT NULL ,
  `password` TEXT NOT NULL ,
  PRIMARY KEY (`email`) )
ENGINE = InnoDB;


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
  `user_email` VARCHAR(100) NOT NULL ,
  PRIMARY KEY (`idsign`) ,
  INDEX `fk_sign_user` (`user_email` ASC) ,
  CONSTRAINT `fk_sign_user`
    FOREIGN KEY (`user_email` )
    REFERENCES `Astroconnexion`.`user` (`email` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = '	';


-- -----------------------------------------------------
-- Table `Astroconnexion`.`friendship`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Astroconnexion`.`friendship` ;

CREATE  TABLE IF NOT EXISTS `Astroconnexion`.`friendship` (
  `idfriendship` INT NOT NULL AUTO_INCREMENT ,
  `solicitation` VARCHAR(45) NOT NULL ,
  `user_email` VARCHAR(100) NOT NULL ,
  PRIMARY KEY (`idfriendship`) ,
  INDEX `fk_friendship_user1` (`user_email` ASC) ,
  CONSTRAINT `fk_friendship_user1`
    FOREIGN KEY (`user_email` )
    REFERENCES `Astroconnexion`.`user` (`email` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Astroconnexion`.`chat`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Astroconnexion`.`chat` ;

CREATE  TABLE IF NOT EXISTS `Astroconnexion`.`chat` (
  `idchat` INT NOT NULL AUTO_INCREMENT ,
  `userchat` VARCHAR(50) NOT NULL ,
  `user_email` VARCHAR(100) NOT NULL ,
  PRIMARY KEY (`idchat`) ,
  INDEX `fk_chat_user1` (`user_email` ASC) ,
  CONSTRAINT `fk_chat_user1`
    FOREIGN KEY (`user_email` )
    REFERENCES `Astroconnexion`.`user` (`email` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
