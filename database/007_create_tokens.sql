CREATE TABLE `tokens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(255) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `creationDateTime` datetime DEFAULT CURRENT_TIMESTAMP,
  `lastUpdateDateTime` datetime DEFAULT NULL,
  `expirationDateTime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1