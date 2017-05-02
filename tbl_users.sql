-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tbl_users` (`id`, `first_name`, `last_name`, `email_id`, `mobile`) VALUES
(24,	'sohan',	'mahamune',	'sohan@gmail.com',	'9874563210'),
(25,	'john',	'doe',	'john@someone.com',	'9778456123'),
(26,	'test',	'test',	'test@test.com',	'8745691230'),
(27,	'prashant',	'sdsdsdsd',	'admin@gmail.com',	'2222222'),
(28,	'prasahnt',	'rokade',	'admin@gmail.com',	'2222222');

-- 2017-05-02 14:03:19
