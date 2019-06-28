CREATE DATABASE IF NOT EXISTS `bossabox` 
    DEFAULT CHARACTER SET utf8
    DEFAULT COLLATE utf8_general_ci;

SET default_storage_engine = INNODB;

USE bossabox;

CREATE TABLE `bossabox`.`tool` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `description` TEXT NOT NULL,
  `tags` JSON NOT NULL,
  PRIMARY KEY (`id`)
);
