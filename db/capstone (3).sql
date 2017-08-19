-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2017 at 08:13 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstone`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `category_id` varchar(20) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `description` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`no`, `category_id`, `category_name`, `description`, `status`) VALUES
(0001, '0000', '0000', '0000', 'inactive'),
(0002, 'CT0001', 'unskilled', 'labor', 'active'),
(0003, 'CT0002', 'skilled', 'labor', 'active'),
(0004, 'CT0003', 'foreman', 'labor', 'active'),
(0009, 'CT0004', 'light Equipment', 'equipment', 'active'),
(0010, 'CT0009', 'heavy Equipment', 'equipment', 'active'),
(0011, 'CT0010', 'wood', 'material', 'active'),
(0012, 'CT0011', 'steel', 'material', 'active'),
(0013, 'CT0012', 'rock', 'material', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `client_id` varchar(20) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_person` varchar(50) NOT NULL,
  `client_position` varchar(50) NOT NULL,
  `client_contact` varchar(20) NOT NULL,
  `client_address` varchar(255) NOT NULL,
  `client_email` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`no`, `client_id`, `client_name`, `client_person`, `client_position`, `client_contact`, `client_address`, `client_email`, `status`) VALUES
(0001, 'cl1', 'Celeena Alonzo', '', '', '0912', 'Mandaluyong', 'celeena@ymail.com', 'active'),
(0002, 'CLI-0001', 'bernie', '', '', 'bernei', 'bernie', 'berei', 'active'),
(0003, 'CLI-0002', 'bernie drilling', 'bernie', 'boss', '09066073883', 'bahay nila malamang', 'bernie.remollo@yahoo.com', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `consultant`
--

CREATE TABLE `consultant` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `consult_id` varchar(20) NOT NULL,
  `consult_name` varchar(255) NOT NULL,
  `consult_company` varchar(255) NOT NULL,
  `scope_id` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consultant`
--

INSERT INTO `consultant` (`no`, `consult_id`, `consult_name`, `consult_company`, `scope_id`, `status`) VALUES
(0001, '0000', '0000', '0000', '0000', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `contract`
--

CREATE TABLE `contract` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `contract_id` varchar(20) NOT NULL,
  `contract_name` varchar(255) NOT NULL,
  `contract_refnum` int(50) NOT NULL,
  `contract_period` int(50) NOT NULL,
  `contract_amt` decimal(30,2) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contract`
--

INSERT INTO `contract` (`no`, `contract_id`, `contract_name`, `contract_refnum`, `contract_period`, `contract_amt`, `status`) VALUES
(0001, '0000', '0000', 0, 0, '0.00', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `engineer`
--

CREATE TABLE `engineer` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `engr_id` varchar(20) NOT NULL,
  `engr_name` varchar(255) NOT NULL,
  `engr_type` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `engineer`
--

INSERT INTO `engineer` (`no`, `engr_id`, `engr_name`, `engr_type`, `status`) VALUES
(0001, '0000', '0', '0000', 'inactive'),
(0002, '0001', 'bernie', 'wew', 'active'),
(0003, '0002', 'bob', 'death', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `eqpt_id` varchar(50) NOT NULL,
  `category_id` varchar(50) NOT NULL,
  `subcat_id` varchar(50) NOT NULL,
  `eqpt_name` varchar(255) NOT NULL,
  `model` varchar(50) NOT NULL,
  `serial_no` varchar(50) NOT NULL,
  `cp_size` varchar(50) NOT NULL,
  `plate_no` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`no`, `eqpt_id`, `category_id`, `subcat_id`, `eqpt_name`, `model`, `serial_no`, `cp_size`, `plate_no`, `status`) VALUES
(0000, '0000', '0000', '0000', '0000', '0000', '0000', '0000', '0000', 'inactive'),
(0003, 'EQ0000', 'CT0004', 'SB0003', 'mixer with l', 'mixer with l', '0000', '1000', 'N/A', 'active'),
(0004, 'EQ0003', 'CT0009', 'SB0005', 'drills', 'n/a', '00001', 'n/a', 'n/a', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `labor`
--

CREATE TABLE `labor` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `labor_id` varchar(50) NOT NULL,
  `category_id` varchar(50) NOT NULL,
  `labor_name` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labor`
--

INSERT INTO `labor` (`no`, `labor_id`, `category_id`, `labor_name`, `status`) VALUES
(0001, '0000', '0000', '0000', 'inactive'),
(0002, 'LB0001', 'CT0001', 'unskilled', 'active'),
(0003, 'LB0002', 'CT0002', 'skilled', 'active'),
(0004, 'LB0003', 'CT0003', 'forman', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `material_id` varchar(50) NOT NULL,
  `category_id` varchar(50) NOT NULL,
  `material_name` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`no`, `material_id`, `category_id`, `material_name`, `status`) VALUES
(0001, '0000', '0000', '0000', 'inactive'),
(0005, 'MT0001', 'CT0011', 'iron rod', 'active'),
(0006, 'MT0005', 'CT0010', '2x2 with naills', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `proj_id` varchar(20) NOT NULL,
  `contract_id` varchar(20) NOT NULL,
  `proj_code` varchar(255) NOT NULL,
  `proj_name` varchar(255) NOT NULL,
  `proj_location` varchar(255) NOT NULL,
  `client_id` varchar(20) NOT NULL,
  `award_date` date NOT NULL,
  `ntp_date` date NOT NULL,
  `target_date` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `scope`
--

CREATE TABLE `scope` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `scope_id` varchar(20) NOT NULL,
  `scope_name` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scope`
--

INSERT INTO `scope` (`no`, `scope_id`, `scope_name`, `status`) VALUES
(0001, '0000', '0000', 'inactive'),
(0002, 'SC0001', 'tew', 'active'),
(0003, 'SC0002', 'qwert', 'inactive'),
(0004, 'SC0003', 'transport', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `subcat_id` varchar(20) NOT NULL,
  `category_id` varchar(20) NOT NULL,
  `subcat_name` varchar(255) NOT NULL,
  `description` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`no`, `subcat_id`, `category_id`, `subcat_name`, `description`, `status`) VALUES
(0001, '0000', '0000', '0000', '0000', 'active'),
(0002, 'SB0001', 'CT0000', 'subtest 1', 'equipment', 'active'),
(0003, 'SB0002', 'CT0000', 'subtest 2-1', 'equipment', 'active'),
(0004, 'SB0003', 'CT0004', 'mixer', 'equipment', 'active'),
(0005, 'SB0004', 'CT0004', 'shovel', 'equipment', 'active'),
(0006, 'SB0005', 'CT0009', 'drill', 'equipment', 'active'),
(0007, 'SB0006', 'CT0009', 'reaper', 'equipment', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `subcontractor`
--

CREATE TABLE `subcontractor` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `subcon_id` varchar(20) NOT NULL,
  `subcon_name` varchar(255) NOT NULL,
  `subcon_contact` varchar(20) NOT NULL,
  `subcon_amt` decimal(30,2) NOT NULL,
  `scope_id` int(11) NOT NULL,
  `billing_sched` date NOT NULL,
  `subcon_duration` varchar(50) NOT NULL,
  `num_personnel` int(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcontractor`
--

INSERT INTO `subcontractor` (`no`, `subcon_id`, `subcon_name`, `subcon_contact`, `subcon_amt`, `scope_id`, `billing_sched`, `subcon_duration`, `num_personnel`, `status`) VALUES
(0001, 's1', 'Erwin Builders', '123456', '45000.00', 12, '2017-07-25', '30 cal. days', 50, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_name` varchar(15) NOT NULL,
  `user_pass` varchar(50) NOT NULL,
  `user_type` varchar(15) NOT NULL,
  `user_stat` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_name`, `user_pass`, `user_type`, `user_stat`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'ADMIN', 'active'),
('user', '21232f297a57a5a743894a0e4a801fc3', 'USER', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `no` (`no`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`),
  ADD UNIQUE KEY `no` (`no`);

--
-- Indexes for table `consultant`
--
ALTER TABLE `consultant`
  ADD PRIMARY KEY (`consult_id`),
  ADD UNIQUE KEY `no` (`no`);

--
-- Indexes for table `contract`
--
ALTER TABLE `contract`
  ADD PRIMARY KEY (`contract_id`),
  ADD UNIQUE KEY `no` (`no`);

--
-- Indexes for table `engineer`
--
ALTER TABLE `engineer`
  ADD UNIQUE KEY `no` (`no`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD UNIQUE KEY `no` (`no`);

--
-- Indexes for table `labor`
--
ALTER TABLE `labor`
  ADD UNIQUE KEY `no` (`no`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD UNIQUE KEY `no` (`no`);

--
-- Indexes for table `scope`
--
ALTER TABLE `scope`
  ADD UNIQUE KEY `no` (`no`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD UNIQUE KEY `no` (`no`);

--
-- Indexes for table `subcontractor`
--
ALTER TABLE `subcontractor`
  ADD UNIQUE KEY `no` (`no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `users_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `consultant`
--
ALTER TABLE `consultant`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contract`
--
ALTER TABLE `contract`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `engineer`
--
ALTER TABLE `engineer`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `labor`
--
ALTER TABLE `labor`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `scope`
--
ALTER TABLE `scope`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `subcontractor`
--
ALTER TABLE `subcontractor`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
