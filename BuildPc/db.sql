CREATE TABLE IF NOT EXISTS `components` (
    `id` int NOT NULL AUTO_INCREMENT,
    `name` varchar(255) DEFAULT NULL,
    `price` decimal(10,2) DEFAULT NULL,
    `img` varchar(255) DEFAULT NULL,
    PRIMARY KEY (`id`)
)ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3;


INSERT INTO `components`(`id`, `name`, `price`, `img`) VALUES ('1','DAYLIGHT',NULL,'white.jpg');
INSERT INTO `components`(`id`, `name`, `price`, `img`) VALUES ('2','ROSELIA',NULL,'pink.jpg');
INSERT INTO `components`(`id`, `name`, `price`, `img`) VALUES ('3','NIGHTWING',NULL,'black.jpg');
INSERT INTO `components`(`id`, `name`, `price`, `img`) VALUES ('4','AMD B450M GAMING MOTHERBOARD',425,NULL);
INSERT INTO `components`(`id`, `name`, `price`, `img`) VALUES ('5','ASUS STRIX Z270F GAMING MOTHERBOARD',483,NULL);
INSERT INTO `components`(`id`, `name`, `price`, `img`) VALUES ('6','ASUS TUF B550M-PLUS GAMING MOTHERBAORD',628,NULL);
INSERT INTO `components`(`id`, `name`, `price`, `img`) VALUES ('7','AMD RYZEN 5 5500',399,NULL);
INSERT INTO `components`(`id`, `name`, `price`, `img`) VALUES ('8','Intel® Core™ i5-12400F',619,NULL);
INSERT INTO `components`(`id`, `name`, `price`, `img`) VALUES ('9','Intel® Core™ i7-12700F',1199,NULL);
INSERT INTO `components`(`id`, `name`, `price`, `img`) VALUES ('10','ADATA XPG SPECTRIX 8GB DDR4 3200MHZ',115,NULL);
INSERT INTO `components`(`id`, `name`, `price`, `img`) VALUES ('11','KINGSTON HYPERX FURY 8GB DDR4 3200MHZD',162,NULL);
INSERT INTO `components`(`id`, `name`, `price`, `img`) VALUES ('12','ADATA XPG SPECTRIX 16GB DDR4 3600MHZ',235,NULL);
INSERT INTO `components`(`id`, `name`, `price`, `img`) VALUES ('13','GIGABYTE GTX 1650 WINDFORCE 4GB',1159,NULL);
INSERT INTO `components`(`id`, `name`, `price`, `img`) VALUES ('14','ZOTAC RTX 4060 TWIN EDGE 8GB',1520,NULL);
INSERT INTO `components`(`id`, `name`, `price`, `img`) VALUES ('15','ASUS RTX 4070 DUAL GEFORCE 12GB',3892,NULL);
INSERT INTO `components`(`id`, `name`, `price`, `img`) VALUES ('16','WD SA510 500GB SATA SSD',308,NULL);
INSERT INTO `components`(`id`, `name`, `price`, `img`) VALUES ('17','XPG S60 1TB PCIE SSD',416,NULL);
INSERT INTO `components`(`id`, `name`, `price`, `img`) VALUES ('18','SAMSUNG 980 1TB NVME M.2 SSD',642,NULL);