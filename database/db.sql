-- Creating the database
CREATE DATABASE KYBBDatabase CHARACTER SET utf8 COLLATE utf8_general_ci;

-- Creating the announcement table
USE KYBBDatabase;

CREATE TABLE user 
(
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  userName VARCHAR(255),
  email TEXT,
  password TEXT
);

CREATE TABLE IF NOT EXISTS products
(
	id varchar(4) PRIMARY KEY,
	name VARCHAR(255),
	`desc` VARCHAR(255),
	spec VARCHAR(255),
	img VARCHAR(255),
	price DECIMAL(10,2)
);

CREATE TABLE IF NOT EXISTS PCcase
(
    id varchar(4) NOT NULL,
    name varchar(255) DEFAULT NULL,
    `desc` VARCHAR(255),
    img varchar(255) DEFAULT NULL,
    PRIMARY KEY (id)
);


CREATE TABLE IF NOT EXISTS components 
(
    id varchar(4) NOT NULL,
    name varchar(255) DEFAULT NULL,
    price decimal(10,2) DEFAULT NULL,
    category varchar(50),
    PRIMARY KEY (id)
);


CREATE TABLE IF NOT EXISTS orders 
(
    order_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    address TEXT NOT NULL,
    credit_card VARCHAR(255) NOT NULL,
    expiration_month VARCHAR(255) NOT NULL,
    expiration_year VARCHAR(255) NOT NULL,
    cvv VARCHAR(255) NOT NULL,
    order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS cart_items 
(
    item_id VARCHAR(4),
    PCcase_id VARCHAR(4) ,
    order_id INT NOT NULL,
    item_name VARCHAR(100) NOT NULL,
    quantity INT NOT NULL,
    price DECIMAL(10, 2) NOT NULL,

    FOREIGN KEY (order_id) REFERENCES orders(order_id) ON DELETE CASCADE,
    FOREIGN KEY (item_id) REFERENCES products(id),
    FOREIGN KEY (PCcase_id) REFERENCES PCcase(id)
);

CREATE TABLE IF NOT EXISTS customize_components
(
    PCcase_id VARCHAR(4) NOT NULL,
    order_id INT NOT NULL,
    component_id VARCHAR(4) NOT NULL,
    component_name VARCHAR(100) NOT NULL,
    quantity INT NOT NULL,

    FOREIGN KEY (order_id) REFERENCES orders(order_id) ON DELETE CASCADE,
    FOREIGN KEY (PCcase_id) REFERENCES PCcase(id)
);

CREATE TABLE IF NOT EXISTS `feedback` 
(
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
);
