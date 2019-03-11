docker-compose up -d
docker-compose exec mysql mysql -h127.0.0.1 -P3306 -uroot -proot
SHOW DATABASES;
USE school;
SHOW TABLES;

CREATE TABLE `categories` (
`id` INT(11) NOT NULL AUTO_INCREMENT,
`name` VARCHAR(255) NOT NULL,
`description` TEXT,
PRIMARY KEY (`id`)
) ENGINE = InnoDB;

CREATE TABLE `products` (
`id` INT(11) NOT NULL AUTO_INCREMENT,
`category_id` INT(11) NOT NULL,
`name` VARCHAR(255) NOT NULL,
`price` DECIMAL(12,2) NOT NULL,
`description` TEXT,
PRIMARY KEY (`id`)
) ENGINE = InnoDB;

CREATE TABLE `product_description` (
`product_id` INT(11) NOT NULL AUTO_INCREMENT,
`lang` INT(11) NOT NULL,
`name` VARCHAR(255) NOT NULL,
`description` TEXT,
PRIMARY KEY (`product_id`)
) ENGINE = InnoDB;

INSERT INTO `product_description` (`product_id`, `name`, `description`)
SELECT `id`, `name`, `description`
FROM `products`;

DESCRIBE product_description;

ALTER TABLE products
DROP COLUMN name,
DROP COLUMN description;

DESCRIBE products;

Ctrl+D
docker-compose down