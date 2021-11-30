-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2021 at 01:35 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: BugMe;
--
DROP DATABASE IF EXISTS BugMe;
CREATE DATABASE BugMe;
USE BugMe;
-- --------------------------------------------------------

--
-- Table structure for table `user`
--
DROP TABLE IF EXISTS `Users`;
CREATE TABLE `Users` (
 id INT AUTO_INCREMENT,
  firstname VARCHAR(50) NOT NULL,
  lastname VARCHAR(50) NOT NULL,
  password_h VARCHAR(64) NOT NULL,
  email VARCHAR(200),
  date_joined DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
) ENGINE = MyISAM AUTO_INCREMENT = 1 DEFAULT CHARSET = utf8mb4;

INSERT INTO Users(firstname, lastname, password_h, email,date_joined ) VALUES 
('admin', 'adminlastname', '$2y$10$aZv4YQvGDCQi032gCZEjTufKRPTSlo2KmN1rZ0lwbYL3M7n5YlXxe', 'admin@project2.com','2021-11-2 11:38:00');
-- --------------------------------------------------------

--
-- Table structure for table `issues`
--
DROP TABLE IF EXISTS `Issues`;
CREATE TABLE `Issues` (
   id INT AUTO_INCREMENT,
  title VARCHAR(64),
  description TEXT(100),
  type VARCHAR(64),
  priority VARCHAR(64),
  status VARCHAR(64),
  assigned_to INT,
  created_by INT,
  created DATETIME,
  updated DATETIME,
  PRIMARY KEY (id)
) 

