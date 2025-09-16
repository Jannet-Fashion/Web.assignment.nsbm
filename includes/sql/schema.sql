-- Project schema for XAMPP / MySQL
-- Run this once to create the database with utf8mb4

CREATE DATABASE IF NOT EXISTS `jannetd`
  DEFAULT CHARACTER SET = utf8mb4
  DEFAULT COLLATE = utf8mb4_general_ci;

USE `jannetd`;

-- Example tables (uncomment/extend as needed)
-- CREATE TABLE IF NOT EXISTS users (
--   id INT AUTO_INCREMENT PRIMARY KEY,
--   email VARCHAR(255) NOT NULL UNIQUE,
--   password_hash VARCHAR(255) NOT NULL,
--   name VARCHAR(100) NOT NULL,
--   created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
-- );

-- CREATE TABLE IF NOT EXISTS products (
--   id INT AUTO_INCREMENT PRIMARY KEY,
--   code VARCHAR(50) UNIQUE,
--   name VARCHAR(255) NOT NULL,
--   price DECIMAL(10,2) NOT NULL,
--   category VARCHAR(100),
--   image_url VARCHAR(255),
--   created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
-- );
