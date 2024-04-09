CREATE DATABASE IF NOT EXISTS shopping;
USE shopping;

CREATE TABLE IF NOT EXISTS products(
	id INT(11) AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(255),
	`desc` VARCHAR(255),
	spec VARCHAR(255),
	img VARCHAR(255),
	price DECIMAL(10,2)
);

CREATE TABLE IF NOT EXISTS orders (
    order_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    address TEXT NOT NULL,
    credit_card VARCHAR(255) NOT NULL,
    expiration_month VARCHAR(255) NOT NULL,
    expiration_year VARCHAR(255) NOT NULL,
    cvv VARCHAR(255) NOT NULL,
    order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS cart_items (
    item_id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT NOT NULL,
    item_name VARCHAR(100) NOT NULL,
    quantity INT NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (order_id) REFERENCES orders(order_id) ON DELETE CASCADE
);