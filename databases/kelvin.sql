-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2022 at 12:42 PM
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
-- Database: `kelvin`
--

-- --------------------------------------------------------

--
-- Table structure for table `gvn`
--

CREATE TABLE `gvn` (
  `candidate_id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `votecount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gvn`
--

INSERT INTO `gvn` (`candidate_id`, `firstname`, `votecount`) VALUES
(1, 'Mike Sonko', 2),
(2, 'Kelvin Kamau', 10),
(3, 'Vincent Mwanzia', 11),
(4, 'Mercy Mandi', 2),
(5, 'Anne Mumbi', 2),
(6, 'BASE', 0);

-- --------------------------------------------------------

--
-- Table structure for table `loginusers`
--

CREATE TABLE `loginusers` (
  `pid` int(200) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `id` int(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `rank` varchar(80) NOT NULL DEFAULT 'voter',
  `status` varchar(10) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loginusers`
--

INSERT INTO `loginusers` (`pid`, `firstname`, `lastname`, `username`, `id`, `password`, `rank`, `status`) VALUES
(75, 'vin', 'jr', 'kmk11', 1268548, '81dc9bdb52d04dc20036dbd8313ed055', 'voter', 'ACTIVE'),
(65, 'admin', 'admin', 'admin', 0, '81dc9bdb52d04dc20036dbd8313ed055', 'administrator', 'ACTIVE'),
(74, 'kmk', 'kmk', 'kmk', 28968233, 'e10adc3949ba59abbe56e057f20f883e', 'voter', 'ACTIVE'),
(80, 'dftygu', 'sdftgyh', 'esrtyu', 945465, '1b15ebdbb483c17fbf73e994a5de8fbe', 'voter', 'ACTIVE'),
(81, 'sredtfyguhijok', 'zdsfghjbkml', 'dfgyhj', 0, '4e78a09c94e8827ea252bffac61c58e3', 'voter', 'ACTIVE'),
(79, 'pk', 'dyuiowqjd', 'nji', 84654981, 'e10adc3949ba59abbe56e057f20f883e', 'voter', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `mca`
--

CREATE TABLE `mca` (
  `candidate_id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `votecount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mca`
--

INSERT INTO `mca` (`candidate_id`, `firstname`, `votecount`) VALUES
(1, 'Pierre Auba', 3),
(2, 'Mohammed Salah', 2),
(3, 'Sadio Mane', 5),
(4, 'Bobby Firmino', 2),
(5, 'Diogo Jota', 2),
(6, 'BASE', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mp`
--

CREATE TABLE `mp` (
  `candidate_id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `votecount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mp`
--

INSERT INTO `mp` (`candidate_id`, `firstname`, `votecount`) VALUES
(1, 'Ndindi Nyoro', 3),
(2, 'Alice Chebet', 3),
(3, 'James Orengo', 2),
(4, 'Oscar Sudi', 2),
(5, 'Aden Duale', 2),
(6, 'BASE', 0);

-- --------------------------------------------------------

--
-- Table structure for table `president`
--

CREATE TABLE `president` (
  `candidate_id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `votecount` int(100) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `president`
--

INSERT INTO `president` (`candidate_id`, `firstname`, `votecount`) VALUES
(1, 'Uhuru Kenyatta', 4),
(2, 'Raila Odinga', 2),
(3, 'William Ruto', 5),
(4, 'Kalonzo Musyoka', 2),
(5, 'Martha Karua', 3),
(6, 'BASE', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sen`
--

CREATE TABLE `sen` (
  `candidate_id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `votecount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sen`
--

INSERT INTO `sen` (`candidate_id`, `firstname`, `votecount`) VALUES
(1, 'Kipchumba Murkomen', 2),
(2, 'Mutula Kilonzo Jr', 4),
(3, 'Johnson Sakaja', 3),
(4, 'Susan Kihika', 2),
(5, 'Millicent Omanga', 2),
(6, 'BASE', 0);

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `id` int(100) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'NOTVOTED',
  `voted` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`firstname`, `lastname`, `username`, `id`, `status`, `voted`) VALUES
('John', 'Peter', 'kmk1', 0, 'VOTED', 'Martha'),
('vin', 'jr', 'kmk11', 0, 'NOTVOTED', NULL),
('kmk', 'kmk', 'kmk', 0, 'VOTED', 'Uhuru'),
('', '', '', 0, 'NOTVOTED', NULL),
('Julius', 'kimandulo', 'vot1', 1546898, 'NOTVOTED', NULL),
('m', 'k', 'kmk12', 123456, 'NOTVOTED', NULL),
('kimani', 'kiggz', 'kiggz1', 94659845, 'NOTVOTED', NULL),
('pk', 'dyuiowqjd', 'nji', 84654981, 'VOTED', 'William Ruto'),
('dftygu', 'sdftgyh', 'esrtyu', 945465, 'NOTVOTED', NULL),
('sredtfyguhijok', 'zdsfghjbkml', 'dfgyhj', 0, 'NOTVOTED', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `woman`
--

CREATE TABLE `woman` (
  `candidate_id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `votecount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `woman`
--

INSERT INTO `woman` (`candidate_id`, `firstname`, `votecount`) VALUES
(1, 'Sabina Chege', 3),
(2, 'Mary Mwangaza', 3),
(3, 'Fatuma Duro', 3),
(4, 'Mishi Mboko', 4),
(5, 'Easther Passaris', 2),
(6, 'BASE', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gvn`
--
ALTER TABLE `gvn`
  ADD PRIMARY KEY (`candidate_id`);

--
-- Indexes for table `loginusers`
--
ALTER TABLE `loginusers`
  ADD PRIMARY KEY (`pid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `mca`
--
ALTER TABLE `mca`
  ADD PRIMARY KEY (`candidate_id`);

--
-- Indexes for table `mp`
--
ALTER TABLE `mp`
  ADD PRIMARY KEY (`candidate_id`);

--
-- Indexes for table `president`
--
ALTER TABLE `president`
  ADD PRIMARY KEY (`candidate_id`);

--
-- Indexes for table `sen`
--
ALTER TABLE `sen`
  ADD PRIMARY KEY (`candidate_id`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `woman`
--
ALTER TABLE `woman`
  ADD PRIMARY KEY (`candidate_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loginusers`
--
ALTER TABLE `loginusers`
  MODIFY `pid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
