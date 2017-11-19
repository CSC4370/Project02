-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 19, 2017 at 02:20 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project2db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `adminname` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adminname`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'admin2', 'admin2'),
(3, 'admin3', 'admin3');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(25) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `sport` varchar(50) NOT NULL,
  `classification` varchar(15) NOT NULL,
  `moreinfo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `lastname`, `middlename`, `gender`, `sport`, `classification`, `moreinfo`) VALUES
(1, 'bher123', 'qwerty', 'Tang', 'Her', 'NMN', 'Male', 'Football', 'Athlete', 'Superbowl Champ'),
(2, 'herbot321', 'poiuy', 'Rob', 'Thomas', 'Smith', 'Male', 'Basketball', 'Coach', 'Division Champ Coach'),
(3, 'LadyGaga', 'pokerface', 'Stefani Joanne ', 'Germanotta', 'Angelina', 'Female', 'Volley Ball', 'Athlete', 'Grammy Award Winner'),
(4, 'HannaMontana', 'wreckingball', 'Miley', 'Cyrus', 'Ray', 'Female', 'Volley Ball', 'Athlete', 'Grammy Award Winner'),
(5, 'trollerboi02', 'hater', 'Salty', 'Balls', 'Chocolate', 'Male', 'MMO Player', 'Coach', 'MMO Champion'),
(6, 'missingno1', 'glitches', 'Cinnabars', 'Islands', 'Reds And Blues', 'Female', 'Gamboy RPG', 'Athlete', '99 Master Balls'),
(8, 'jetJones', 'number11', 'Julio', 'Jones', 'Quintorres-Lopez', 'Male', 'Footbal', 'Athlete', 'Number 1 Wide Receiver'),
(9, 'newGuy101', 'newbie', 'Newt', 'Newton', 'Norbit', 'Male', 'Ping-Pong', 'Athlete', 'Beginner'),
(10, 'notNewGuy', 'notnewbie', 'Newt', 'Newton', 'Norbit', 'Male', 'Basketball', 'Coach', 'NBA All-Star');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
