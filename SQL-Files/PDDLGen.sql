-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 15, 2019 at 01:32 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `PDDLGen`
--

-- --------------------------------------------------------

--
-- Table structure for table `documentStorage`
--

CREATE TABLE `documentStorage` (
  `docId` int(11) NOT NULL,
  `docArchiveId` int(11) NOT NULL,
  `docName` text NOT NULL,
  `DocLink` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userDetails`
--

CREATE TABLE `userDetails` (
  `user_id` int(11) NOT NULL,
  `user_firstName` varchar(200) NOT NULL,
  `userCode` text NOT NULL,
  `problemName` text NOT NULL,
  `dateClicked` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Next Time` text,
  `trafficName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userDetails`
--

INSERT INTO `userDetails` (`user_id`, `user_firstName`, `userCode`, `problemName`, `dateClicked`, `Next Time`, `trafficName`) VALUES
(1, 'Emeka', 'PDDL-570176840', '', '2018-12-22 23:30:37', NULL, ''),
(2, 'Emisco', 'PDDL-122188597', '', '2018-12-22 23:32:27', NULL, ''),
(3, 'Loine', 'PDDL-1041014275', '', '2018-12-22 23:34:00', NULL, ''),
(4, 'Messi', 'PDDL-1035451493', '', '2018-12-22 23:35:00', NULL, ''),
(5, 'Ronaldo', 'PDDL-591101520', '', '2018-12-22 23:39:46', NULL, ''),
(6, 'Ronaldo', 'PDDL-236930543', '', '2018-12-22 23:40:49', NULL, ''),
(7, 'Maradona', 'PDDL-451461837', '', '2018-12-23 00:22:39', NULL, ''),
(8, 'Ronaldinho', 'PDDL-1619757024', 'problemfile.pddl', '2018-12-23 03:01:50', '2018-12-23 06:01:50', 'trafficsystem.pddl');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userDetails`
--
ALTER TABLE `userDetails`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userDetails`
--
ALTER TABLE `userDetails`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
