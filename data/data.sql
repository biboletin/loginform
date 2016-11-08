INSERT INTO users(username, `password`) 
VALUES('test', MD5('test'));


CREATE TABLE users (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR (20) NOT NULL DEFAULT '',
  `password` VARCHAR (32) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE = INNODB CHARSET = utf8 COLLATE = utf8_unicode_ci ;

