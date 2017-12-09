# Host: localhost  (Version 5.6.17)
# Date: 2017-12-09 12:56:12
# Generator: MySQL-Front 5.3  (Build 5.21)

/*!40101 SET NAMES latin1 */;

#
# Structure for table "payment"
#

DROP TABLE IF EXISTS `payment`;
CREATE TABLE `payment` (
  `drug_name` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `drug_id` varchar(100) NOT NULL DEFAULT '0',
  `bill_no` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "payment"
#

INSERT INTO `payment` VALUES ('BISACODLY',2,'14','M0003','2017120905463441'),('TENORMIN',2,'20','M0005','2017120905463441'),('AUGMENTIN',2,'18','M0006','2017120905463441'),('ACETYLCYSTEINE',2,'10','M0002','2017120905480635'),('AUGMENTIN',2,'18','M0006','2017120905480635'),('CeleXA',5,'100','M0009','2017120905480635');
