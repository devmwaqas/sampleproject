-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 18, 2023 at 10:52 PM
-- Server version: 5.7.36
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sampledb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

DROP TABLE IF EXISTS `admin_users`;
CREATE TABLE IF NOT EXISTS `admin_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `email`, `password`) VALUES
(1, 'waqas', 'dev.mwaqas@gmail.com', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_unique` varchar(255) DEFAULT NULL,
  `title_id` int(11) DEFAULT NULL,
  `first_name` varchar(14) NOT NULL,
  `last_name` varchar(16) NOT NULL,
  `birth_date` date NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `zip` int(11) DEFAULT NULL,
  `gender` enum('M','F') NOT NULL,
  `hire_date` date NOT NULL,
  `term_date` date DEFAULT NULL,
  `salary` decimal(10,2) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '1 = Active, 2 = Inactive, 3 = Terminated, 4 = Deleted',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `emp_unique`, `title_id`, `first_name`, `last_name`, `birth_date`, `email`, `password`, `address`, `city`, `state`, `zip`, `gender`, `hire_date`, `term_date`, `salary`, `status`, `created_at`, `updated_at`) VALUES
(1, 'e35886b54b595ebe12857cde9d51a631', 5, 'Waqas', 'Amjad', '1993-08-19', 'dev.mwaqas@gmail.com', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', 'Barkat Market', 'Lahore', 'PU', 630023, 'M', '2023-02-20', NULL, '140000.00', 1, '2023-02-18 20:11:51', '2023-02-18 10:50:57'),
(2, 'e35886b54b595ebe12857cde9d51a632', 4, 'William', 'Jacob', '1989-05-23', 'johndoe@gmail.com', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', 'Anarkali Bazaar', 'Lahore', 'PU', 63000, 'M', '2023-02-19', NULL, '140000.00', 1, '2023-02-18 20:11:51', '2023-02-18 20:11:51'),
(3, 'e35886b54b595ebe12857cde9d51a633', 5, 'Benjamin', 'Ethan', '1991-10-05', 'sarahsmith@yahoo.com', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', 'Ichhra Bazaar', 'Lahore', 'PU', 63000, 'M', '2023-02-19', NULL, '140000.00', 1, '2023-02-18 20:11:51', '2023-02-18 20:11:51'),
(4, 'e35886b54b595ebe12857cde9d51a634', 6, 'James', 'Noah', '1998-02-17', 'jenniferbrown@hotmail.com', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', 'Liberty Market', 'Lahore', 'PU', 63000, 'M', '2023-02-19', NULL, '140000.00', 1, '2023-02-18 20:11:51', '2023-02-18 20:11:51'),
(5, 'e35886b54b595ebe12857cde9d51a636', 4, 'Michael', 'Liam', '2003-11-21', 'michaeljones@gmail.com', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', 'Shadman Market', 'Lahore', 'PU', 63000, 'M', '2023-02-19', NULL, '140000.00', 1, '2023-02-18 20:11:51', '2023-02-18 20:11:51'),
(6, 'e35886b54b595ebe12857cde9d51a638', 4, 'Alexander', 'Michael', '1995-09-01', 'katewilson@yahoo.com', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', 'Hall Road Market', 'Lahore', 'PU', 63000, 'M', '2023-02-19', NULL, '140000.00', 1, '2023-02-18 20:11:51', '2023-02-18 20:11:51'),
(7, 'e35886b54b595ebe12857cde9d51a654', 3, 'Daniel', 'Alexander', '2000-06-14', 'davidbrown@gmail.com', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', 'Mochi Gate Bazaar', 'Lahore', 'PU', 63000, 'M', '2023-02-19', NULL, '140000.00', 1, '2023-02-18 20:11:51', '2023-02-18 20:11:51'),
(8, 'e35886b54b595ebe12857cde9d51a623', 6, 'Matthew', 'William', '1987-12-28', 'aliciawilliams@hotmail.com', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', 'Brandreth Road Market', 'Lahore', 'PU', 63000, 'M', '2023-02-19', NULL, '140000.00', 1, '2023-02-18 20:11:51', '2023-02-18 20:11:51'),
(9, 'e35886b54b595ebe12857cde9d51a667', 2, 'Christopher', 'Benjamin', '1992-07-19', 'tomjohnson@yahoo.com', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', 'Azam Cloth Market', 'Lahore', 'PU', 63000, 'M', '2023-02-19', NULL, '140000.00', 1, '2023-02-18 20:11:51', '2023-02-18 20:11:51'),
(10, 'e35886b54b595ebe12857cde9d51a655', 5, 'David', 'James', '2001-04-03', 'emilythomas@gmail.com', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', 'Ferozepur Road Market', 'Lahore', 'PU', 63000, 'M', '2023-02-19', NULL, '140000.00', 1, '2023-02-18 20:11:51', '2023-02-18 20:11:51'),
(11, 'e35886b54b595ebe12857cde9d51a644', 7, 'Andrew', 'Daniel', '1996-08-08', 'robertgreen@yahoo.com', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', 'Model Town Market', 'Lahore', 'PU', 63000, 'M', '2023-02-19', NULL, '140000.00', 1, '2023-02-18 20:11:51', '2023-02-18 20:11:51'),
(12, 'e35886b54b595ebe12857cde9d51a611', 8, 'Joseph', 'David', '1988-03-29', 'lauramiller@hotmail.com', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', 'Gawalmandi Bazaar', 'Lahore', 'PU', 63000, 'M', '2023-02-19', NULL, '140000.00', 1, '2023-02-18 20:11:51', '2023-02-18 20:11:51'),
(13, 'e35886b54b595ebe12857cde9d51a622', 4, 'Samuel', 'Samuel', '1990-12-06', 'stevenlee@gmail.com', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', 'Shah Alam Market', 'Lahore', 'PU', 63000, 'M', '2023-02-19', NULL, '140000.00', 1, '2023-02-18 20:11:51', '2023-02-18 20:11:51'),
(14, 'e35886b54b595ebe12857cde9d51a699', 9, 'John', 'Joseph', '1997-01-09', 'ashleymorgan@yahoo.com', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', 'Raja Bazaar', 'Lahore', 'PU', 63000, 'M', '2023-02-19', NULL, '140000.00', 1, '2023-02-18 20:11:51', '2023-02-18 20:11:51'),
(15, 'e35886b54b595ebe12857cde9d51a600', 4, 'Ethan', 'Matthew', '2002-09-27', 'brianrobinson@gmail.com', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', 'Sabzi Mandi', 'Lahore', 'PU', 63000, 'M', '2023-02-19', NULL, '140000.00', 1, '2023-02-18 20:11:51', '2023-02-18 20:11:51'),
(16, 'e35886b54b595ebe12857cde9d51a622', 5, 'Ryan', 'Andrew', '1994-07-16', 'christopherdavis@yahoo.com', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', 'Taxali Gate Bazaar', 'Lahore', 'PU', 63000, 'M', '2023-02-19', NULL, '140000.00', 1, '2023-02-18 20:11:51', '2023-02-18 20:11:51'),
(17, 'e35886b54b595ebe12857cde9d51a612', 2, 'Tyler', 'Christopher', '1986-11-02', 'lisasmith@hotmail.com', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', 'Liaquatabad Market', 'Lahore', 'PU', 63000, 'M', '2023-02-19', NULL, '140000.00', 1, '2023-02-18 20:11:51', '2023-02-18 20:11:51'),
(18, 'e35886b54b595ebe12857cde9d51a621', 1, 'Jacob', 'Joshua', '1999-04-22', 'ericjackson@gmail.com', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', 'Johar Town Market', 'Lahore', 'PU', 63000, 'M', '2023-02-19', NULL, '140000.00', 1, '2023-02-18 20:11:51', '2023-02-18 20:11:51'),
(19, 'e35886b54b595ebe12857cde9d51a698', 4, 'Nathan', 'Jonathan', '1993-08-14', 'amandawalker@yahoo.com', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', 'Badami Bagh Market', 'Lahore', 'PU', 63000, 'M', '2023-02-19', NULL, '140000.00', 1, '2023-02-18 20:11:51', '2023-02-18 20:11:51'),
(20, 'e35886b54b595ebe12857cde9d51a691', 10, 'Joshua', 'Ryan', '1985-10-12', 'kevinwhite@gmail.com', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', 'Saddar Bazaar', 'Lahore', 'PU', 63000, 'M', '2023-02-19', NULL, '140000.00', 1, '2023-02-18 20:11:51', '2023-02-18 20:11:51'),
(21, 'e35886b54b595ebe12857cde9d51a610', 8, 'Brandon', 'Anthony', '1991-02-25', 'mariarodriguez@yahoo.com', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', 'Defence Shopping Mall', 'Lahore', 'PU', 63000, 'M', '2023-02-19', NULL, '140000.00', 1, '2023-02-18 20:11:51', '2023-02-18 20:11:51');

-- --------------------------------------------------------

--
-- Table structure for table `titles`
--

DROP TABLE IF EXISTS `titles`;
CREATE TABLE IF NOT EXISTS `titles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `titles`
--

INSERT INTO `titles` (`id`, `title`) VALUES
(1, 'General Manager'),
(2, 'Marketing Coordinator'),
(3, 'Medical Assistant'),
(4, 'Web Developer'),
(5, 'Web Designer'),
(6, 'Dog Trainer'),
(7, 'President of Sales'),
(8, 'Nursing Assistant'),
(9, 'Project Manager'),
(10, 'Librarian'),
(11, 'Project Manager'),
(12, 'Account Executive');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
