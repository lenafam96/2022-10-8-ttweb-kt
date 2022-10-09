DROP DATABASE IF EXISTS `lecongminh`;

CREATE DATABASE `lecongminh`;

DROP TABLE IF EXISTS `lecongminh`.`members`;

CREATE TABLE `lecongminh`.`members` (
  `member_id` INT(5) NOT NULL AUTO_INCREMENT,
  `member_name` VARCHAR(500) NULL COLLATE 'utf8mb4_unicode_ci',
  `member_dob` VARCHAR(15) NULL,
  `member_sex` INT(1) NOT NULL DEFAULT 0,
  `member_nativeLand` VARCHAR(500) NULL COLLATE 'utf8mb4_unicode_ci',
  `member_hobby` VARCHAR(3) NULL,
  `member_time` INT(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`member_id`))
COLLATE='utf8mb4_unicode_ci'
ENGINE=InnoDB;

INSERT INTO `lecongminh`.`members` (`member_name`,`member_dob`,`member_sex`,`member_nativeLand`,`member_hobby`,`member_time`)
VALUES 
    ('Nguyễn Mạnh Hùng','16/04/2001',0,'Hiệp Hoà, Bắc Giang','1',0),
    ('Thái Thị Quỳnh Ngân','05/04/2003',1,'Vinh, Nghệ An','13',1);
