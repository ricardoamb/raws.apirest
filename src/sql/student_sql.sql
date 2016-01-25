DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
	`student_id` INT(11) NOT NULL AUTO_INCREMENT,
	`email_address` VARCHAR(255) NOT NULL,
	`password` VARCHAR(255) NOT NULL,
	`first_name` VARCHAR(100) NOT NULL,
	`last_name` VARCHAR (100) NOT NULL,
	`phone_number` VARCHAR(30) NOT NULL,
	`ip_address` VARCHAR(30) NOT NULL,
	`status` ENUM('active','deleted') NOT NULL DEFAULT 'active',
	`created_timestamp` DATETIME NOT NULL,
	`updated_timestamp` DATETIME DEFAULT NULL,
	PRIMARY KEY (`student_id`),
	UNIQUE KEY `email_address` (`email_address`),
	KEY `status` (`status`)
) ENGINE=INNODB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

INSERT INTO students VALUES (NULL, 'ricardoamb.dev@gmail.com', MD5('123'), 'Ricardo', 'Amb', '+55(19)993153204', '127.0.0.1','active', '2016-01-25 06:51:46',NULL);
INSERT INTO students VALUES (NULL, 'michellemendes@gmail.com', MD5('321'), 'Michelle', 'Mendes', '+55(19)992592826', '127.0.0.1','active', '2016-01-25 08:23:46',NULL);
	
	