-- MySQL Script generated by MySQL Workbench
-- Sat Nov  2 02:20:52 2019
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema codeforgoodteam9
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema codeforgoodteam9
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `codeforgoodteam9` DEFAULT CHARACTER SET utf8 ;
USE `codeforgoodteam9` ;

-- -----------------------------------------------------
-- Table `codeforgoodteam9`.`courses`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `codeforgoodteam9`.`courses` (
  `course_id` VARCHAR(45) NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `entry_requirements` VARCHAR(45) NULL DEFAULT NULL,
  `university_id` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`course_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `codeforgoodteam9`.`universities`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `codeforgoodteam9`.`universities` (
  `university_id` INT(11) NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `country` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`university_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci
COMMENT = '		';


-- -----------------------------------------------------
-- Table `codeforgoodteam9`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `codeforgoodteam9`.`users` (
  `user_id` INT(11) NOT NULL,
  `first_name` VARCHAR(45) NOT NULL,
  `last_name` VARCHAR(45) NOT NULL,
  `country_of_study` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`user_id`),
  INDEX `country_of_residence_idx` (`country_of_study` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

USE `codeforgoodteam9` ;

-- -----------------------------------------------------
-- procedure add_course
-- -----------------------------------------------------

DELIMITER $$
USE `codeforgoodteam9`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `add_course`(in Course_id VARCHAR(45), Name VARCHAR(45), Entry_requirements VARCHAR(45), University_id INT(11))
BEGIN
	insert into codeforgoodteam9.courses(course_id, name, entry_requirements, university_id)
		values(Course_id, Name, Entry_requirements);
END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure add_university
-- -----------------------------------------------------

DELIMITER $$
USE `codeforgoodteam9`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `add_university`(in University_id int(11), Name varchar(45), Country varchar(45))
BEGIN
	insert into codeforgoodteam9.universities(university_id, name, country)
		values(University_id, Name, Country);
END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure add_user
-- -----------------------------------------------------

DELIMITER $$
USE `codeforgoodteam9`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `add_user`(in User_id int(11), First_name varchar(45), Last_name varchar(45), Country_of_study VARCHAR(45))
BEGIN
	insert into codeforgoodteam9.users(user_id, first_name, last_name, country_of_study)
		values(User_id, First_name, Last_name, Country_of_study);
END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure delete_course
-- -----------------------------------------------------

DELIMITER $$
USE `codeforgoodteam9`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_course`(in Course_id VARCHAR(45))
BEGIN
	delete from codeforgoodteam9.courses where course_id = Course_id;
END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure delete_university
-- -----------------------------------------------------

DELIMITER $$
USE `codeforgoodteam9`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_university`(University_id VARCHAR(45))
BEGIN
	delete from codeforgoodteam9.universities where university_id = University_id;
END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure delete_user
-- -----------------------------------------------------

DELIMITER $$
USE `codeforgoodteam9`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_user`(in User_id INT(11))
BEGIN
	delete from codeforgoodteam9.users where user_id = User_id;
END$$

DELIMITER ;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
