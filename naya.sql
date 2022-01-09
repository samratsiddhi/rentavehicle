-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 13, 2021 at 12:30 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `naya`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `SN` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`SN`, `username`, `email`, `subject`, `message`) VALUES
(1, 'samrat', 'siddhibro@gmail.com', 'compliment', 'very easy to use'),
(2, 'samrat', 'siddhibro@gmail.com', 'compliment', 'very easy to use'),
(3, 'samrat', 'siddhibro@gmail.com', 'praise', ''),
(4, 'samrat', 'siddhibro@gmail.com', 'praise', ''),
(5, 'samrat', 'siddhibro@gmail.com', 'praise', ''),
(6, 'samrat', 'siddhibro@gmail.com', 'praise', ''),
(7, 'samrat', 'siddhibro@gmail.com', 'praise', 'i love using this site'),
(8, 'susmita', 'susmita@gmail.com', 'compliment', 'it so easy to use i love this website');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `userid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `bannedaccount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`userid`, `username`, `email`, `password`, `bannedaccount`) VALUES
(15, 'samrat', 'siddhibro@gmail.com', 'samrat382', 'no'),
(16, 'Sishan', 'sishan@gmail.com', 'sishan123', 'no'),
(17, 'surakshyt', 'surakshyt@gmail.com', 'surakshyt456', 'no'),
(18, 'Sushil', 'sushil@gmail.com', 'sushil123', 'no'),
(19, 'susmita', 'susmita@gmail.com', 'susmita123', 'no'),
(20, 'sagar', 'sagar@gmail.com', 'sagar123', 'no'),
(21, 'sabina', 'sabina@gmail.com', 'sabina123', 'no'),
(22, 'samrat', 'samrat@gmail.com', 'samrat444', 'no'),
(23, 'runa', 'runa@gmail.com', 'runa12345', 'no'),
(24, 'shubham', 'shubham@gmail.com', 'shubham123', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `vehicleinfo`
--

CREATE TABLE `vehicleinfo` (
  `vehicleid` int(11) NOT NULL,
  `vehiclename` varchar(255) NOT NULL,
  `cc` varchar(255) NOT NULL,
  `milage` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `photo1` text NOT NULL,
  `photo2` text NOT NULL,
  `photo3` text NOT NULL,
  `photo4` text NOT NULL,
  `vehicletype` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `availability` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicleinfo`
--

INSERT INTO `vehicleinfo` (`vehicleid`, `vehiclename`, `cc`, `milage`, `price`, `contact`, `photo1`, `photo2`, `photo3`, `photo4`, `vehicletype`, `email`, `availability`) VALUES
(123, 'maruti', '500', '45', '2000', '9860447723', 'maruti1.PNG', 'maruti2.PNG', 'maruti3.PNG', 'maruti4.PNG', 'car', 'siddhibro@gmail.com', 'yes'),
(124, 'yamaha FZ', '150', '40', '600', '9860447723', 'bike1.PNG', 'bike2.PNG', 'bike3.PNG', 'bike4.PNG', 'Moterbike', 'siddhibro@gmail.com', 'yes'),
(125, 'Aviator', '110', '40', '300', '9860567720', 'scooty1.PNG', 'scooty2.PNG', 'scooty3.PNG', 'scooty4.PNG', 'Scooter', 'sishan@gmail.com', 'yes'),
(126, 'R8', '1000', '80', '2000', '9843374592', 'r81.PNG', 'r82.PNG', 'r83.PNG', 'r84.PNG', 'car', 'sushil@gmail.com', 'yes'),
(127, 'Hummer', '3000', '30', '3000', '9842345674', 'hummer1.PNG', 'hummer2.PNG', 'hummer3.PNG', 'hummer4.PNG', 'car', 'sushil@gmail.com', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `vehicleinfo`
--
ALTER TABLE `vehicleinfo`
  ADD PRIMARY KEY (`vehicleid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `SN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `vehicleinfo`
--
ALTER TABLE `vehicleinfo`
  MODIFY `vehicleid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
