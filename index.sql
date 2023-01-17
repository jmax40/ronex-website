-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2023 at 12:49 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ronex`
--

-- --------------------------------------------------------

--
-- Table structure for table `bsaccount`
--

CREATE TABLE `bsaccount` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bsaccount`
--

INSERT INTO `bsaccount` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `mname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `birthdate` varchar(250) NOT NULL,
  `age` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `cpassword` varchar(250) NOT NULL,
  `branch` varchar(250) NOT NULL,
  `position` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `fname`, `mname`, `lname`, `birthdate`, `age`, `address`, `gender`, `username`, `password`, `cpassword`, `branch`, `position`) VALUES
(10, 'jeffrey', 'abella', 'oderio', '2023-01-09', '12', 'surallah', 'Female', 'admin', 'admin', 'admin', 'Bagumbayan', 'Agent'),
(12, 'Cloe', 'Abella', 'Oderio', '2023-01-10', '13', 'Surallah', 'Female', 'admin', 'asdasdsa', 'asdsadasd', 'Esperanza', 'Agent'),
(13, 'Jeffrey', 'oderio', 'abella', '2023-01-15', '13', 'Surallah', 'Female', 'jeff', 'jeff', 'jeff', 'Bagumbayan', 'Manager'),
(14, 'Jeffrey', 'oderio', 'abella', '2023-01-16', '13', 'Surallah', 'Female', 'bs', 'bs', 'bs', 'Esperanza', 'BS');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `idmember` varchar(250) NOT NULL,
  `product` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL,
  `edate` varchar(250) NOT NULL,
  `mop` varchar(250) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `mname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `brgy` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `prov` varchar(250) NOT NULL,
  `birthdate` varchar(250) NOT NULL,
  `religion` varchar(250) NOT NULL,
  `occupation` varchar(250) NOT NULL,
  `contact` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `payer` varchar(250) NOT NULL,
  `pcontact` varchar(250) NOT NULL,
  `bfname` varchar(250) NOT NULL,
  `blname` varchar(250) NOT NULL,
  `bage` varchar(250) NOT NULL,
  `brelationship` varchar(250) NOT NULL,
  `b2fname` varchar(250) NOT NULL,
  `b2lname` varchar(250) NOT NULL,
  `b2age` varchar(250) NOT NULL,
  `b2relation` varchar(250) NOT NULL,
  `cfname` varchar(250) NOT NULL,
  `clname` varchar(250) NOT NULL,
  `cage` varchar(250) NOT NULL,
  `crelation` varchar(250) NOT NULL,
  `coordinator` varchar(250) NOT NULL,
  `contractamount` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `modetag` varchar(250) NOT NULL,
  `installment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `idmember`, `product`, `price`, `edate`, `mop`, `fname`, `mname`, `lname`, `brgy`, `city`, `prov`, `birthdate`, `religion`, `occupation`, `contact`, `type`, `gender`, `payer`, `pcontact`, `bfname`, `blname`, `bage`, `brelationship`, `b2fname`, `b2lname`, `b2age`, `b2relation`, `cfname`, `clname`, `cage`, `crelation`, `coordinator`, `contractamount`, `status`, `modetag`, `installment`) VALUES
(67, 'LF65', 'LF', '460', '2023-01-12', 'monthly', 'Jeffrey', 'Gallardo', 'abella', 'Naci', 'Esperanza', 'Sultan Kudarat', '2023-01-12', 'INC', 'work', '09067617233', 'Sepparated', 'Female', 'Janry linda', '09067617233', 'jeffrey', 'oderio', '20', 'parent', 'ames', 'ally', '12', 'friend', 'NONE', 'NONE', 'NONE', 'NONE', 'Agent name 2', '27600', 'Active', '', 0),
(68, 'SS68', 'SS', '250', '2023-01-12', 'Yearly', 'Cloe', 'oderio', 'Oderio', 'Naci', 'esperanza', 'SK', '2023-01-12', 'Catholic', 'work', '09751133232', 'Widow', 'Female', 'Janry linda', '09261144332', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'asdasdas', 'dsad', '15', 'Parent', 'Agent name 2', '21000', 'Active', '', 0),
(93, 'M93', 'M', '380', '2023-01-17', '360', 'Jeffrey', 'oderio', 'abella', 'surallah', 'esperanza', 'Sultan Kudarat', '2023-01-17', 'Catholic', 'self employed', '09067617233', 'Merried', 'Female', 'Janry linda', '09067617233', 'jeffrey', 'oderio', '56', 'parent', 'jeffrey', 'ally', '12', 'friend', 'NONE', 'NONE', 'NONE', 'NONE', 'Agent name 2', '-1154', '30', 'A', 34),
(96, 'M94', 'M', '380', '2023-01-17', '30', 'Marites', 'oderio', 'Maregmen', 'asdsadasd', 'esperanza', 'asdasd', '', 'Catholic', 'work', 'asdas', 'Sepparated', 'Female', 'name', '09067617233', 'jeffrey', 'oderio', '12', 'dasdas', 'jeffrey', 'oderio', '123', 'friend', 'NONE', 'NONE', 'NONE', 'NONE', 'Agent name 1', '12540', '20', 'M', 23);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `ornumber` varchar(250) NOT NULL,
  `amount` varchar(250) NOT NULL,
  `effectdate` varchar(250) NOT NULL,
  `duedate` varchar(250) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL,
  `installment` varchar(250) NOT NULL,
  `aging` varchar(250) NOT NULL,
  `dueprice` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `balance` varchar(250) NOT NULL,
  `pcontact` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `ornumber`, `amount`, `effectdate`, `duedate`, `fullname`, `price`, `installment`, `aging`, `dueprice`, `address`, `balance`, `pcontact`) VALUES
(112, '', '', '2023-01-17', '2023-02-16', 'Marites oderio Maregmen', '380', '1', 'Active1', '380', 'asdsadasd esperanza asdasd', '14060', '09067617233'),
(113, '', '', '2023-01-17', '2023-02-16', 'Marites oderio Maregmen', '380', '1', '20', '380', 'asdsadasd esperanza asdasd', '14060', '09067617233'),
(114, '', '', '2023-01-17', '2023-02-16', 'Marites oderio Maregmen', '380', '1', 'Active', '380', 'asdsadasd esperanza asdasd', '12920', '09067617233');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bsaccount`
--
ALTER TABLE `bsaccount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idmember` (`idmember`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bsaccount`
--
ALTER TABLE `bsaccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
