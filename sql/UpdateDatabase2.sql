USE furnitures;


DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned,
  `dateOrderPlaced` Date NOT NULL,
  `totalOrderPrice` float unsigned NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (user_id) REFERENCES users(id)
);


DROP TABLE IF EXISTS `order_details`;
CREATE TABLE IF NOT EXISTS `order_details` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT ,
  `order_id` int unsigned,
  `furniture_id` int unsigned,
  `price` float NOT NULL,
  `quantity` int unsigned NOT NULL,
  `furnitureCode` varchar(4) NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (order_id) REFERENCES orders(id),
  FOREIGN KEY (furniture_id) REFERENCES furnitures(id)
);

