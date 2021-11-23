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
-- Database: `bugme`
--
DROP DATABASE IF EXISTS BugMe;
CREATE DATABASE BugMe;
USE BugMe;
-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `Users` (
  `id` INT AUTO_INCREMENT,
  `firstname` VARCHAR(16) NOT NULL,
  `lastname` VARCHAR(16) NOT NULL,
  `password` VARCHAR(16) NOT NULL,
  `email` VARCHAR(32) NOT NULL,
  `date_joined` DATETIME NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Table structure for table `issues`
--

CREATE TABLE `Issues` (
  `id` INT AUTO_INCREMENT,
  `title` VARCHAR(32) NOT NULL,
  `description` TEXT NOT NULL,
  `type` VARCHAR(32) NOT NULL,
  `priority` VARCHAR(32) NOT NULL,
  `status` VARCHAR(32) NOT NULL,
  `assigned_to` INT(11) NOT NULL,
  `created_by` INT(11) NOT NULL,
  `created` DATETIME NOT NULL,
  `updated` DATETIME NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

