-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2019 at 02:08 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cardb1`
--

-- --------------------------------------------------------

--
-- Table structure for table `car_tbl`
--

CREATE TABLE `car_tbl` (
  `car_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_tbl`
--

INSERT INTO `car_tbl` (`car_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `c_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `car_model` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `payment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`c_id`, `name`, `address`, `contact`, `car_model`, `price`, `payment`) VALUES
(2, 'Esra', 'nagar', '9087678899', 'BMW', '8989898', 'loan'),
(3, 'kawita', 'nagar road', '89909870', 'asdd', '1200000', 'credit'),
(4, 'irammm', 'puna', '808088080', 'farari', '122232322', 'cash'),
(5, 'pooja', 'nasik', '1234567890', 'BMW', '810000', 'cash'),
(6, 'Esra', 'mumbai', '9087678899', 'BMW', '8989898', 'loan'),
(7, 'kawita', 'mumbai', '89909870', 'asdd', '1200000', 'credit'),
(8, 'irammm', 'mumbai', '808088080', 'farari', '122232322', 'cash'),
(9, 'pooja', 'mumbai', '1234567890', 'BMW', '810000', 'cash');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car_tbl`
--
ALTER TABLE `car_tbl`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`c_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car_tbl`
--
ALTER TABLE `car_tbl`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
