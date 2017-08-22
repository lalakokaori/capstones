-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2017 at 01:14 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstones`
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
(0000, '0000', '0000', '0000', 'active'),
(0001, 'CT0000', 'test 1', 'equipment', 'active'),
(0006, 'CT0001', 'test 2', 'equipment', 'active'),
(0007, 'CT0006', 'test 6', 'equipment', 'inactive'),
(0008, 'CT0007', 'bato', 'material', 'active');

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
(0002, 'CLI-0001', 'name', 'person', 'position', 'contact', 'address', 'email', 'active');

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
  `no` int(4) NOT NULL,
  `engr_id` varchar(20) NOT NULL,
  `engr_name` int(255) NOT NULL,
  `engr_type` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(0001, 'EQ0000', 'CT0000', 'SB0001', 'sample', 'samples', '1234', '67 hp.', 'asdffg', 'active');

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
(0012, 'lab-59274282c2690', 'cat-1', 'Safety Officer', 'inactive'),
(0013, 'LB0012', 'cat-3', 'asdas', 'active'),
(0014, 'LB0013', 'cat-3', '132', 'inactive'),
(0015, 'LB0014', 'cat-1', 'sam', 'active'),
(0016, 'LB0015', 'cat-3', 'asdasd', 'inactive'),
(0017, 'LB0016', 'cat-2', 'samp', 'active'),
(0018, 'LB0017', 'cat-2', 'carpenter', 'active'),
(0000, 'LB0018', 'cat-2', 'asa', 'inactive'),
(0000, 'LB0018', 'cat-2', 'da', 'inactive'),
(0000, 'LB0018', 'CT0005', 'Worker', 'active');

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
(0002, 'MT0001', 'CT0007', 'e-test 1', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `part`
--

CREATE TABLE `part` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `part_id` varchar(20) NOT NULL,
  `part_code` varchar(50) NOT NULL,
  `part_desc` varchar(250) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part`
--

INSERT INTO `part` (`no`, `part_id`, `part_code`, `part_desc`, `status`) VALUES
(0001, '0000', '0000', '0000', 'inactive'),
(0002, 'PT0001', 'ber', 'ber', 'active'),
(0003, 'PT0002', '11100', '1111', 'active');

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
(0001, 'sc1', 'Excavation', 'active'),
(0002, 'SCSCS1', 'Sample', 'inactive'),
(0003, 'SC0002', 'Isa pa', 'active'),
(0000, 'SC0003', 'test 1', 'active');

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
(0004, 'SB0003', 'CT0001', 'subtest for 2', 'equipment', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `subcontractor`
--

CREATE TABLE `subcontractor` (
  `no` int(4) NOT NULL,
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
(1, 's1', 'Erwin Builders', '123456', '45000.00', 12, '2017-07-25', '30 cal. days', 50, 'active');

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
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD UNIQUE KEY `no` (`no`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD UNIQUE KEY `no` (`no`);

--
-- Indexes for table `part`
--
ALTER TABLE `part`
  ADD UNIQUE KEY `no` (`no`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
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
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `part`
--
ALTER TABLE `part`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
