-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 10, 2020 at 03:24 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginform`
--

-- --------------------------------------------------------

--
-- Table structure for table `registrationform`
--

DROP TABLE IF EXISTS `registrationform`;
CREATE TABLE IF NOT EXISTS `registrationform` (
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `cpassword` varchar(250) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrationform`
--

INSERT INTO `registrationform` (`username`, `email`, `password`, `cpassword`) VALUES
('prasad', 'prasadhulyal543210@gmail.com', '$2y$10$zYYzqZjjCHuc8TdOKv9zveqacJBgbsEfRjmb7y3v8C45j2sxxNGky', '$2y$10$PJdC4HeAszgOSghpjx1NMe7t2A3qg/WuhEkc1ac423oLL212/WI3a'),
('1SB17CS062', 'prasadhulyal5432110@gmail.com', '$2y$10$KPXctJ/OEzRI8DGI9pYluuV8HUPxYUoKPecZeWnx6rFS8F9VW64jW', '$2y$10$Ky9QTap7PG.a8t1WbKeY5.bij0TIJRNwedND3rujtrvHvuwAdbYFm'),
('sce17cs056@sairamtap.edu.in', 'prasadhulyal5432100@gmail.com', '$2y$10$/XFC7a..kC9WEJxXLwL9TO/gHVWLY4uBHpioAMDYRDn2eg0Nc3Voi', '$2y$10$ubWWrkpPM67lIGMlbZ5YmuIg9YmbLKh2jRqqnUQf8hvm/xrWS/epu'),
('pra', 'pra@gmail.com', '$2y$10$R3dzhzO/Eve90Fvx214P9eF/d6ES6s8Oxcb74FFuHHHy7w0RG0GvK', '$2y$10$B/JQUXtn.EgYN.IxcAkOwuF/I6WFJRP6pw5MXTZjsBTV6jmlTjNNW'),
('prasanna', 'prasanna@gmail.com', '$2y$10$CLlbu/yXaAinILnAuGjtb.4wCk5VpVlvZp3WWqxEFVOv/X3V3FvCS', '$2y$10$o7liENvea9z.oC3w3tLRD.1N4iqroQ2Lvy.5v4vbc3Ci5U9Wj97WG');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
