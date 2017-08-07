-- MySQL Script generated by MySQL Workbench
-- Mon Aug  7 10:46:55 2017
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema unityhousekeeping
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema unityhousekeeping
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `unityhousekeeping` DEFAULT CHARACTER SET utf8 ;
USE `unityhousekeeping` ;

-- -----------------------------------------------------
-- Table `unityhousekeeping`.`room`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `unityhousekeeping`.`room` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `room_num` INT NULL,
  `room_type` VARCHAR(60) NULL,
  `room_status` VARCHAR(45) NULL,
  `room_qr` BLOB NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `unityhousekeeping`.`employee`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `unityhousekeeping`.`employee` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `employee_fname` VARCHAR(60) BINARY NULL,
  `employee_lname` VARCHAR(60) NULL,
  `employee_mi` VARCHAR(3) NULL,
  `employee_department` VARCHAR(60) NULL,
  `employee_position` VARCHAR(60) NULL,
  `employee_attendance` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `unityhousekeeping`.`checklist`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `unityhousekeeping`.`checklist` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `checklist_taskname` VARCHAR(45) NULL,
  `checklist_taskdesc` VARCHAR(120) NULL,
  `checklist_status` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `unityhousekeeping`.`inspection`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `unityhousekeeping`.`inspection` (
  `room_id` INT NOT NULL,
  `employee_id` INT NOT NULL,
  `inspection_task` VARCHAR(45) NULL,
  `inspection_assignment` VARCHAR(45) NULL,
  `inspection_timein` DATETIME NULL,
  `inspection_timeout` DATETIME NULL,
  PRIMARY KEY (`room_id`, `employee_id`),
  INDEX `fk_room_has_employee_employee1_idx` (`employee_id` ASC),
  INDEX `fk_room_has_employee_room_idx` (`room_id` ASC),
  CONSTRAINT `fk_room_has_employee_room`
    FOREIGN KEY (`room_id`)
    REFERENCES `unityhousekeeping`.`room` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_room_has_employee_employee1`
    FOREIGN KEY (`employee_id`)
    REFERENCES `unityhousekeeping`.`employee` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `unityhousekeeping`.`cleaning`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `unityhousekeeping`.`cleaning` (
  `room_id` INT NOT NULL,
  `employee_id` INT NOT NULL,
  `cleaning_task` VARCHAR(45) NULL,
  `cleaning_assignment` VARCHAR(45) NULL,
  `cleaning_timein` DATETIME NULL,
  `cleaning_timeout` DATETIME NULL,
  `checklist_id` INT NOT NULL,
  PRIMARY KEY (`room_id`, `employee_id`, `checklist_id`),
  INDEX `fk_room_has_employee_employee2_idx` (`employee_id` ASC),
  INDEX `fk_room_has_employee_room1_idx` (`room_id` ASC),
  INDEX `fk_cleaning_checklist1_idx` (`checklist_id` ASC),
  CONSTRAINT `fk_room_has_employee_room1`
    FOREIGN KEY (`room_id`)
    REFERENCES `unityhousekeeping`.`room` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_room_has_employee_employee2`
    FOREIGN KEY (`employee_id`)
    REFERENCES `unityhousekeeping`.`employee` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cleaning_checklist1`
    FOREIGN KEY (`checklist_id`)
    REFERENCES `unityhousekeeping`.`checklist` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;