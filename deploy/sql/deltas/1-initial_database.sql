CREATE TABLE `blog` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(90) DEFAULT NULL,
  `text` text,
  `date_created` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

 INSERT INTO `blog` VALUES ('','Hello world','Hello world',NOW());
 INSERT INTO `blog` VALUES ('','Hello everyone','Hello everyone',NOW());
 INSERT INTO `blog` VALUES ('','Hello all','Hello all',NOW());

--//@UNDO 
DROP TABLE IF EXISTS `blog`;
--//
