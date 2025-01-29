-- Drop database if it already exists
DROP DATABASE IF EXISTS lnz_database;

-- Create the database
CREATE DATABASE lnz_database;

-- Use the database
USE lnz_database;

-- Drop tables if they already exist
DROP TABLE IF EXISTS orders;
DROP TABLE IF EXISTS items;

-- Create the items table
CREATE TABLE items (
                       item_id INT AUTO_INCREMENT PRIMARY KEY,
                       item_name VARCHAR(255) NOT NULL,
                       item_description TEXT,
                       item_price DECIMAL(10, 2) NOT NULL
);

-- Create the orders table
CREATE TABLE orders (
                        order_id INT AUTO_INCREMENT PRIMARY KEY,
                        item_id INT NOT NULL,
                        quantity_ordered INT NOT NULL,
                        cost DECIMAL(10, 2) NOT NULL,
                        order_date DATE NOT NULL,
                        additional_info TEXT,
                        FOREIGN KEY (item_id) REFERENCES items(item_id)
);
