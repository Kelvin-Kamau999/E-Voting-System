-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2022 at 11:34 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `government`
--

-- --------------------------------------------------------

--
-- Table structure for table `citizens`
--

CREATE TABLE `citizens` (
  `pid` int(100) NOT NULL,
  `ID` int(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `citizens`
--

INSERT INTO `citizens` (`pid`, `ID`, `name`) VALUES
(1, 84654981, 'julian'),
(2, 74654981, 'James'),
(3, 12345678, 'John Kroos'),
(4, 12345679, 'Peter Paul'),
(5, 12345680, 'Mall Thick'),
(6, 12345681, 'Kelvin Great'),
(7, 12345682, 'Nelly Mike'),
(8, 12345683, 'Joan Locks'),
(9, 12345684, 'Georgina Mbuyu'),
(10, 12345685, 'Dominic Theri'),
(11, 12345686, 'Traicy Break'),
(12, 12345687, 'Jurgen Klopp'),
(13, 12345688, 'Antonio Conte'),
(14, 12345689, 'Ngolo Kante'),
(15, 12345690, 'Steve Gerrand'),
(16, 12345691, 'Koeman Man'),
(17, 12345692, 'Josphat Ndugu'),
(18, 12345693, 'Money Maker'),
(19, 12345694, 'Nairobery sabs'),
(20, 12345695, 'Abel Adams'),
(21, 12345696, 'Sadio Peep'),
(22, 12345697, 'Partey Kimani'),
(23, 12345698, 'Trent Defend'),
(24, 12345699, 'Andrew Robz'),
(25, 12345100, 'Allison Becker'),
(26, 12345101, 'James Milner'),
(27, 12345102, 'Adam Lallana'),
(28, 12345103, 'Diogo Jota'),
(29, 12345104, 'Reuben Diaz'),
(30, 12345105, 'Virgil Lookman'),
(31, 12345106, 'Onesmus Keys'),
(32, 12345107, 'Susan Peel'),
(33, 12345108, 'Nameless Performs'),
(34, 12345109, 'Kiss Mandu'),
(35, 12345110, 'Thomas Mercs'),
(36, 12345111, 'Loyal Subz'),
(37, 12345112, 'Quartz Itel'),
(38, 12345113, 'Captain Morgan'),
(39, 12345114, 'Jayden Vince'),
(40, 12345115, 'Prince Raymond'),
(41, 12345116, 'Ian Kesh'),
(42, 12345117, 'King Luther'),
(43, 12345118, 'Amerix eric'),
(44, 12345119, 'George Dianoh'),
(45, 12345120, 'Gabriel Angel'),
(46, 12345121, 'Edinson Cavani'),
(47, 12345122, 'Sergio Aguero'),
(48, 12345123, 'Lord Kings'),
(49, 12345124, 'Ezra Chiloba'),
(50, 12345125, 'Edgar Mwitu'),
(51, 12345126, 'Tabby Cuzen'),
(52, 12345127, 'Tom Cohen'),
(53, 12345128, 'Wendy Grace');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `citizens`
--
ALTER TABLE `citizens`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `citizens`
--
ALTER TABLE `citizens`
  MODIFY `pid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
