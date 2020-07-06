-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2020 at 07:28 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epost`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `created`) VALUES
(1, 'admin', 'admin', '2020-04-20 06:17:14');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `empid` int(11) NOT NULL,
  `empname` varchar(20) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `birth` datetime DEFAULT NULL,
  `gender` char(10) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `qualification` char(20) DEFAULT NULL,
  `designation` varchar(20) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `basic_pay` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`empid`, `empname`, `password`, `birth`, `gender`, `address`, `email`, `phone`, `qualification`, `designation`, `salary`, `basic_pay`) VALUES
(101, 'surya', 'surya', '2000-02-22 00:00:00', 'Male', 'lsjdsk', 'lajdn@jsb.com', 273289, 'B.Tech', 'postal incharge', 80000, 203202),
(102, 'surya', 'sun', '2000-02-19 00:00:00', 'Male', 'ujbjub', 'ubjs@kb.com', 8296, 'B.Tech', 'JBKJB', 896, 8976),
(103, 'sunn', 'surya', '1889-02-18 00:00:00', 'Male', 'asnaln', 'lkasna@sdn.com', 289369264, 'B.Com', 'hii', 2838, 126),
(104, 'sunn', 'vishal', '1889-02-18 00:00:00', 'Male', 'asnaln', 'lkasna@sdn.com', 289369264, 'B.Com', 'hii', 2838, 126),
(105, 'sunn', 'surya', '2000-02-09 00:00:00', 'Male', 'lznsklxn', 'psal@ksk.com', 2989829, 'B.Tech', 'klan', 92389, 9282),
(106, 'sunnn', 'vishal', '2000-02-29 00:00:00', 'Male', 'kanxn', 'ksnln@fn.com', 29929229, 'B.Tech', 'aksn', 2398, 2938),
(107, 'sunnnn', 'hiiiii', '2000-02-20 00:00:00', 'Male', 'kdnxlan', 'ajsbak@gmial.com', 28371987, 'B.Tech', 'sjknd', 2937, 2899),
(201, 'surya', 'iodns', '2000-02-09 00:00:00', 'Male', 'ksndlkn', 'sljans@ks.com', 83649, 'B.Com', 'jdb', 397, 2893);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `postno` int(11) NOT NULL,
  `bookdate` date DEFAULT NULL,
  `uid` varchar(20) DEFAULT NULL,
  `fname` varchar(200) DEFAULT NULL,
  `faddress` varchar(200) DEFAULT NULL,
  `fphoneno` bigint(20) DEFAULT NULL,
  `tname` varchar(200) DEFAULT NULL,
  `taddress` varchar(200) DEFAULT NULL,
  `tphoneno` varchar(200) DEFAULT NULL,
  `pweight` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `empid` varchar(20) DEFAULT NULL,
  `disdate` date DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`postno`, `bookdate`, `uid`, `fname`, `faddress`, `fphoneno`, `tname`, `taddress`, `tphoneno`, `pweight`, `amount`, `empid`, `disdate`, `status`) VALUES
(1, '2020-04-22', '201', 'surya', 'hyd', 9876543210, 'sun', 'ecil', '0987625372', 20, 1200, '101', '2000-02-02', 'dispatched'),
(2, '2020-04-22', '201', 'surya', 'hyd', 9876543210, 'sun', 'ecil', '0987625372', 20, 1200, '101', '2000-02-02', 'pending'),
(3, '2020-04-22', '201', 'surya', 'hyd', 9876543210, 'sun', 'ecil', '0987625372', 20, 1200, '101', '2000-02-02', 'dispatched'),
(4, '2020-04-22', '201', 'vishal', 'hyd', 9876543210, 'sun', 'ecil', '0987625372', 20, 1200, '101', '2000-02-02', 'dispatched'),
(5, '2020-04-22', '201', 'vishal', 'hyd', 9876543210, 'sun', 'ecil', '0987625372', 20, 1200, '101', '2000-02-02', 'dispatched'),
(6, '2020-04-22', '201', 'vishal', 'hyd', 9876543210, 'sun', 'ecil', '0987625372', 20, 1200, '101', '2000-02-02', 'pending'),
(13, '2000-02-29', '202', 'surya', 'ouidbf', 0, 'sdbjl', 'sodfb', 'odfon', 82, 934, '101', '2020-04-26', 'dispatched'),
(14, '2000-03-28', '202', 'bharadwaj', 'osdbk', 23870, 'sldjnl', 'ljbsd', '29387', 87, 2837, 'Not Yet Assigned', '0000-00-00', 'pending'),
(15, '2000-03-08', '202', 'sjbl', '3sjfbskb', 982370, 'slfb', 'sldjbgi93', '3984', 398, 823, '101', '2020-04-26', 'dispatched'),
(16, '2000-02-28', '202', 'klnbc', 'kjcb ', 3273, 'lsjkdb', 'jkbcf', '923739', 83, 9283, 'Not Yet Assigned', '0000-00-00', 'pending'),
(22, '2000-01-02', '201', 'surya', 'jsdn', 2379287, 'suryai', 'jnsdk', '29837', 899, 2288, 'Not Yet Assigned', '0000-00-00', 'pending'),
(25, '2000-02-23', '201', 'lskn', 'sdj', 923790, 'lskn', 'djb', '20380', 23, 823, 'Not Yet Assigned', '0000-00-00', 'pending'),
(26, '2000-06-23', '201', 'lskn', 'sdj', 923790, 'lskn', 'djb', '20380', 23, 823, 'Not Yet Assigned', '0000-00-00', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `product` varchar(30) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`product`, `amount`) VALUES
('beauty cosmetics', 1000),
('stamp', 20000),
('Stamps', 900000);

-- --------------------------------------------------------

--
-- Table structure for table `savings`
--

CREATE TABLE `savings` (
  `uid` int(11) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `saving` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `savings`
--

INSERT INTO `savings` (`uid`, `pass`, `saving`) VALUES
(201, 'surya', 'yes'),
(202, 'surya', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) DEFAULT NULL,
  `uname` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `birth` date DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `password`, `birth`, `gender`, `address`, `email`, `phone`) VALUES
(201, 'surya', 'surya', '2000-02-02', 'Female', 'Hyd', 'surya@gmail.com', 9876543210),
(202, 'vishal', 'vishal', '2000-02-02', 'Female', 'pabkjbsdc', 'surya@gmail.com', 2839232893),
(0, '', '', '0000-00-00', '', '', '', 0),
(203, 'sunn', 'surya', '2000-02-02', 'Female', 'alk;ns', 'ljabd@ksjb.com', 28733);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`postno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `postno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
