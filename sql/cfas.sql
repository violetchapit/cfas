-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2018 at 05:39 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cfas`
--

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `bank_number` varchar(255) NOT NULL,
  `bank_balance` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `uid`, `bank_name`, `bank_number`, `bank_balance`) VALUES
(1, 5, 'MayBank', '2234333322', '23.45'),
(2, 0, 'RHB Bank', '2234333322', '345.34'),
(17, 0, 'CIMB Bank', '78733783793', '6777.98');

-- --------------------------------------------------------

--
-- Table structure for table `checkbook`
--

CREATE TABLE `checkbook` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `description` varchar(255) NOT NULL,
  `folio` int(11) NOT NULL,
  `amount` double NOT NULL,
  `balance` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkbook`
--

INSERT INTO `checkbook` (`id`, `date`, `description`, `folio`, `amount`, `balance`) VALUES
(1, '2018-11-22 07:04:16', 'abcd', 3, 980, 123),
(2, '2018-11-22 07:04:39', 'abcde', 1, 99.1, 193),
(3, '2018-11-22 07:10:16', 'abcde', 1, 99.1, 193),
(4, '2018-11-22 07:10:33', 'abcd', 2, 99.1, 193),
(5, '2018-11-22 07:11:34', 'abcd', 2, 99.1, 123),
(6, '2018-12-05 16:03:19', 'asdqdasd', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `invoice_number` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `amount` double NOT NULL,
  `total` double NOT NULL,
  `customer_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ledger`
--

CREATE TABLE `ledger` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `description` varchar(255) NOT NULL,
  `folio` int(11) NOT NULL,
  `debit` double NOT NULL,
  `credit` double NOT NULL,
  `balance` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ledger`
--

INSERT INTO `ledger` (`id`, `date`, `description`, `folio`, `debit`, `credit`, `balance`) VALUES
(1, '2018-11-21 19:32:59', 'abc', 6, 456, 345, 6777),
(2, '2018-11-21 19:34:11', 'abcd', 2, 200, 0, 123),
(3, '2018-11-21 19:41:45', 'abcde', 3, 900, 0, 1000),
(4, '2018-11-22 03:19:29', 'abcd', 2, 200, 0, 9700000),
(5, '2018-11-22 07:18:03', 'pembayaran gaji', 101, 0, 900, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `ssm_number` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `company_name`, `ssm_number`, `phone_number`, `username`, `email`, `password`, `role`) VALUES
(5, 'Muhammad', 'Afiq', 'Air Batu Campur SDN BHD', '2233562431', '0123456789', 'Muhammad_Afiq', 'mrafiq22298@gmail.com', 'afiq123', 'contractor'),
(6, 'Mirul', 'Deen', 'Air Batu Campur SDN BHD', '2233562431', '013-363-4357', 'mirul', 'xyberworm@yahoo.com', '123', 'clerk'),
(7, 'Acap', 'Azfar', 'Air Batu Campur SDN BHD', '2233562431', '0122237654', 'acap', 'acap@gmail.com', '123', 'project_manager'),
(8, 'Azfar', 'Gay', 'Gay Company Ent', '123456789', '019-882-3810', 'azfar', 'azfar@gmail.com', '123', 'contractor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkbook`
--
ALTER TABLE `checkbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ledger`
--
ALTER TABLE `ledger`
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
-- AUTO_INCREMENT for table `checkbook`
--
ALTER TABLE `checkbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ledger`
--
ALTER TABLE `ledger`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
