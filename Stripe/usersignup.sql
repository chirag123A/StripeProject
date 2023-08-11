-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2023 at 03:04 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `richpanel`
--

-- --------------------------------------------------------

--
-- Table structure for table `usersignup`
--

CREATE TABLE `usersignup` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usersignup`
--

INSERT INTO `usersignup` (`name`, `email`, `pass`) VALUES
('Chirag Ahuja', '20BCS5818@cuchd.in', 'chirag'),
('Chirag', 'asa@gmail.com', 'chirag123A@'),
('SDASD', 'ASDASD@DA', 'ASDSD'),
('Chi', 'dsfs@gdg', 'asdasda'),
('20BCS5818@cuchd.in', 'chirag@fssss', 'sdsed'),
('', '', ''),
('sdsd', 'sdfsdf@sdds', 'sdsdf'),
('dwdw', 'asda@sdf', 'sfdfsd'),
('sdfdffsdfsd', 'sdfsdf@xdfsdfs', 'sdfsdf'),
('sdsad', 'sdsdfs@sdfsd', 'dsds'),
('ghgfj', 'DSF@FSDF', 'SDFSD'),
('tyuryt', 'srfder@fedf', 'dfdf'),
('sdasds', 'sdasdasdas@sdfsdfsdfsdf', 'sdfsdf'),
('asdassad', 'sdasdasa@sdfsd', 'sdfsdf'),
('dfdfdf', 'sdfsdfsdfs@sdfsdf', 'sdfsdfs'),
('HAELLO', 'SDS@SDFSD', 'SDFSDF'),
('sds', 'sdfsd@sds', 'sdsds');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
