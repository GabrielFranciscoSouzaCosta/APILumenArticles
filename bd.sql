CREATE TABLE `myblogdb`.`articles` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(45) NULL,
  `description` TEXT NULL,
  `status` INT NULL,
  `created_at` DATETIME NULL,
  `updated_at` TIMESTAMP NULL,
  PRIMARY KEY (`id`));