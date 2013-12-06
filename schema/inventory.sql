-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 06, 2013 at 03:12 PM
-- Server version: 5.5.24
-- PHP Version: 5.3.10-1ubuntu3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`) VALUES
(1, 'Sumsang'),
(2, 'Dell'),
(3, 'Hp');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE IF NOT EXISTS `companies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `address`, `type`) VALUES
(1, 'Netcon', 'ddddd', 1),
(3, 'Flora', 'ddddd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `openingbalances`
--

CREATE TABLE IF NOT EXISTS `openingbalances` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `srerialno` int(11) NOT NULL,
  `purchaserate` int(11) NOT NULL,
  `salesrate` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invoiceId` int(11) NOT NULL,
  `paidamount` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `invoiceId`, `paidamount`, `date`) VALUES
(1, 66, 90, '0000-00-00 00:00:00'),
(2, 66, 89, '0000-00-00 00:00:00'),
(3, 79, 56, '2013-10-02 16:53:45'),
(4, 80, 56, '2013-11-26 10:42:44');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `model` varchar(255) NOT NULL,
  `unitprice` decimal(10,0) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `brand_id`, `model`, `unitprice`, `date`) VALUES
(15, 'monitor lcd 14', 1, '234', 677, '2012-06-18'),
(14, 'tab 30', 0, '', 0, '2012-06-30'),
(16, 'tab10', 0, '', 0, '2032-01-01'),
(17, 'tab 100', 0, '', 0, '2032-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `productserials`
--

CREATE TABLE IF NOT EXISTS `productserials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `serial_no` varchar(100) NOT NULL,
  `purchasedetail_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=269 ;

--
-- Dumping data for table `productserials`
--

INSERT INTO `productserials` (`id`, `serial_no`, `purchasedetail_id`, `status`) VALUES
(1, '234445', 15, 1),
(2, '234445', 15, 1),
(3, '234445', 15, 1),
(4, '200', 15, 1),
(5, '200', 15, 1),
(6, '200', 17, 0),
(7, '100', 17, 1),
(8, '101', 17, 1),
(9, '102', 17, 1),
(10, '103', 17, 1),
(11, '104', 17, 1),
(12, '105', 17, 1),
(13, '106', 17, 1),
(14, '107', 17, 1),
(15, '108', 17, 1),
(16, '109', 17, 1),
(17, '110', 17, 1),
(18, '111', 17, 1),
(19, '112', 17, 1),
(20, '113', 17, 1),
(21, '114', 17, 1),
(22, '115', 17, 1),
(23, '116', 17, 1),
(24, '117', 17, 1),
(25, '118', 17, 1),
(26, '119', 17, 1),
(27, '120', 17, 1),
(28, '121', 17, 1),
(29, '122', 17, 1),
(30, '123', 17, 1),
(31, '124', 17, 1),
(32, '125', 17, 1),
(33, '126', 17, 1),
(34, '127', 17, 1),
(35, '128', 17, 1),
(36, '129', 17, 1),
(37, '130', 17, 1),
(38, '131', 17, 1),
(39, '132', 17, 1),
(40, '133', 17, 1),
(41, '134', 17, 1),
(42, '135', 17, 1),
(43, '136', 17, 1),
(44, '137', 17, 1),
(45, '138', 17, 1),
(46, '139', 17, 1),
(47, '140', 17, 1),
(48, '141', 17, 1),
(49, '142', 17, 1),
(50, '143', 17, 1),
(51, '144', 17, 1),
(52, '145', 17, 1),
(53, '146', 17, 1),
(54, '147', 17, 1),
(55, '148', 17, 1),
(56, '149', 17, 1),
(57, '150', 17, 1),
(58, '151', 17, 1),
(59, '152', 17, 1),
(60, '153', 17, 1),
(61, '154', 17, 1),
(62, '155', 17, 1),
(63, '156', 17, 1),
(64, '157', 17, 1),
(65, '158', 17, 1),
(66, '159', 17, 1),
(67, '160', 17, 1),
(68, '161', 17, 1),
(69, '162', 17, 1),
(70, '163', 17, 1),
(71, '164', 17, 1),
(72, '165', 17, 1),
(73, '166', 17, 1),
(74, '167', 17, 1),
(75, '168', 17, 1),
(76, '169', 17, 1),
(77, '170', 17, 1),
(78, '171', 17, 1),
(79, '172', 17, 1),
(80, '173', 17, 1),
(81, '174', 17, 1),
(82, '175', 17, 1),
(83, '176', 17, 1),
(84, '177', 17, 1),
(85, '178', 17, 1),
(86, '179', 17, 1),
(87, '180', 17, 1),
(88, '181', 17, 1),
(89, '182', 17, 1),
(90, '183', 17, 1),
(91, '184', 17, 1),
(92, '185', 17, 1),
(93, '186', 17, 1),
(94, '187', 17, 1),
(95, '188', 17, 1),
(96, '189', 17, 1),
(97, '190', 17, 1),
(98, '191', 17, 1),
(99, '192', 17, 1),
(100, '193', 17, 1),
(101, '194', 17, 1),
(102, '195', 17, 1),
(103, '196', 17, 1),
(104, '197', 17, 1),
(105, '198', 17, 1),
(106, '199', 17, 1),
(107, '200', 17, 1),
(108, '4', 20, 1),
(109, '5', 20, 1),
(110, '6', 20, 1),
(111, '7', 20, 1),
(112, '8', 20, 1),
(113, '9', 20, 1),
(114, '10', 20, 1),
(115, '11', 20, 1),
(116, '12', 20, 1),
(117, '13', 20, 1),
(118, '200', 15, 1),
(119, '201', 15, 1),
(120, '202', 15, 1),
(121, '203', 15, 1),
(122, '204', 15, 1),
(123, '205', 15, 1),
(124, '1000', 15, 1),
(125, '1001', 15, 1),
(126, '1002', 15, 1),
(127, '1003', 15, 1),
(128, '1004', 15, 1),
(129, '1005', 15, 1),
(130, '1006', 15, 1),
(131, '1007', 15, 1),
(132, '1008', 15, 1),
(133, '1009', 15, 1),
(134, '1010', 15, 1),
(135, '1011', 15, 1),
(136, '1012', 15, 1),
(137, '1013', 15, 1),
(138, '1014', 15, 1),
(139, '1015', 15, 1),
(140, '1000', 28, 1),
(141, '1001', 28, 1),
(142, '1002', 28, 1),
(143, '1003', 28, 1),
(144, '1004', 28, 1),
(145, '1005', 28, 1),
(146, '1006', 28, 1),
(147, '1007', 28, 1),
(148, '1008', 28, 0),
(149, '1009', 28, 0),
(150, '1010', 28, 0),
(151, '1011', 28, 0),
(152, '1012', 28, 0),
(153, '1013', 28, 0),
(154, '1014', 28, 0),
(155, '1015', 28, 0),
(156, '1016', 28, 0),
(157, '1017', 28, 0),
(158, '1018', 28, 0),
(159, '1019', 28, 0),
(160, '1020', 28, 0),
(161, '100', 30, 0),
(162, '101', 30, 0),
(163, '102', 30, 0),
(164, '103', 30, 0),
(165, '104', 30, 0),
(166, '105', 30, 0),
(167, '106', 30, 0),
(168, '107', 30, 0),
(169, '108', 30, 0),
(170, '109', 30, 0),
(171, '110', 30, 0),
(172, '111', 30, 0),
(173, '112', 30, 0),
(174, '113', 30, 0),
(175, '114', 30, 0),
(176, '115', 30, 0),
(177, '116', 30, 0),
(178, '117', 30, 0),
(179, '118', 30, 0),
(180, '119', 30, 0),
(181, '120', 30, 0),
(182, '121', 30, 0),
(183, '122', 30, 0),
(184, '123', 30, 0),
(185, '124', 30, 0),
(186, '125', 30, 0),
(187, '126', 30, 0),
(188, '127', 30, 0),
(189, '128', 30, 0),
(190, '129', 30, 0),
(191, '130', 30, 0),
(192, '131', 30, 0),
(193, '132', 30, 0),
(194, '133', 30, 0),
(195, '134', 30, 0),
(196, '135', 30, 0),
(197, '136', 30, 0),
(198, '137', 30, 0),
(199, '138', 30, 0),
(200, '139', 30, 0),
(201, '140', 30, 0),
(202, '141', 30, 0),
(203, '142', 30, 0),
(204, '143', 30, 0),
(205, '144', 30, 0),
(206, '145', 30, 0),
(207, '146', 30, 0),
(208, '147', 30, 0),
(209, '148', 30, 0),
(210, '149', 30, 0),
(211, '150', 30, 0),
(212, '151', 30, 0),
(213, '152', 30, 0),
(214, '153', 30, 0),
(215, '154', 30, 0),
(216, '155', 30, 0),
(217, '156', 30, 0),
(218, '157', 30, 0),
(219, '158', 30, 0),
(220, '159', 30, 0),
(221, '160', 30, 0),
(222, '161', 30, 0),
(223, '162', 30, 0),
(224, '163', 30, 0),
(225, '164', 30, 0),
(226, '165', 30, 0),
(227, '166', 30, 0),
(228, '167', 30, 0),
(229, '168', 30, 0),
(230, '169', 30, 0),
(231, '170', 30, 0),
(232, '171', 30, 0),
(233, '172', 30, 0),
(234, '173', 30, 0),
(235, '174', 30, 0),
(236, '175', 30, 0),
(237, '176', 30, 0),
(238, '177', 30, 0),
(239, '178', 30, 0),
(240, '179', 30, 0),
(241, '180', 30, 0),
(242, '181', 30, 0),
(243, '182', 30, 0),
(244, '183', 30, 0),
(245, '184', 30, 0),
(246, '185', 30, 0),
(247, '186', 30, 0),
(248, '187', 30, 0),
(249, '188', 30, 0),
(250, '189', 30, 0),
(251, '190', 30, 0),
(252, '191', 30, 0),
(253, '192', 30, 0),
(254, '193', 30, 0),
(255, '194', 30, 0),
(256, '195', 30, 0),
(257, '196', 30, 0),
(258, '197', 30, 0),
(259, '198', 30, 0),
(260, '199', 30, 0),
(261, '200', 30, 0),
(262, '', 33, 0),
(263, '100', 33, 0),
(264, '101', 33, 0),
(265, '102', 33, 0),
(266, '103', 33, 0),
(267, '104', 33, 0),
(268, '105', 33, 0);

-- --------------------------------------------------------

--
-- Table structure for table `purchasedetails`
--

CREATE TABLE IF NOT EXISTS `purchasedetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `model` varchar(255) NOT NULL,
  `purchase_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `unitprice` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `brand_id` (`brand_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `purchasedetails`
--

INSERT INTO `purchasedetails` (`id`, `model`, `purchase_id`, `qty`, `product_id`, `brand_id`, `unitprice`) VALUES
(28, '4445', 46, 1000, 15, 1, 567),
(29, '4445', 46, 43, 17, 1, 234),
(30, '4445', 46, 34, 16, 1, 34),
(31, '10000000', 46, 34, 14, 1, 34),
(32, '', 47, 56, 15, 1, 456),
(33, '', 47, 67, 15, 1, 45),
(34, '', 47, 78, 15, 1, 345);

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE IF NOT EXISTS `purchases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_no` varchar(100) NOT NULL,
  `company_id` int(11) NOT NULL,
  `paid` decimal(10,2) NOT NULL,
  `payable` decimal(10,2) NOT NULL,
  `date` date NOT NULL,
  `paymentmode` int(11) NOT NULL,
  `check_no` varchar(255) DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `branch_name` varchar(255) NOT NULL,
  `billdate` date DEFAULT NULL,
  `purchaseby` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `invoice_no`, `company_id`, `paid`, `payable`, `date`, `paymentmode`, `check_no`, `bank_name`, `branch_name`, `billdate`, `purchaseby`) VALUES
(46, '45', 1, 455.00, 0.00, '2015-05-16', 0, NULL, NULL, '', NULL, '456'),
(47, '787889', 1, 45.00, 0.00, '2013-11-26', 0, NULL, NULL, '', NULL, 'fdgdsgdrg');

-- --------------------------------------------------------

--
-- Table structure for table `retrndetails`
--

CREATE TABLE IF NOT EXISTS `retrndetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `retrning_id` int(11) NOT NULL,
  `sell_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `retrnings`
--

CREATE TABLE IF NOT EXISTS `retrnings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `retrnings`
--

INSERT INTO `retrnings` (`id`, `date`) VALUES
(22, '2012-07-04'),
(23, '2012-06-10'),
(24, '2012-06-17'),
(25, '2012-06-18');

-- --------------------------------------------------------

--
-- Table structure for table `sells`
--

CREATE TABLE IF NOT EXISTS `sells` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_no` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `company_id` int(11) NOT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `paid` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=81 ;

--
-- Dumping data for table `sells`
--

INSERT INTO `sells` (`id`, `invoice_no`, `date`, `company_id`, `amount`, `paid`) VALUES
(66, '788', '2013-09-05', 3, 90.00, 7.00),
(67, '788', '2013-09-05', 1, 789.00, 900.00),
(68, '788', '2013-09-05', 1, 789.00, 900.00),
(69, '788', '2013-09-05', 1, 789.00, 900.00),
(70, '788', '2013-09-05', 1, 789.00, 900.00),
(71, '67', '2013-09-05', 1, 455.00, 5677.00),
(72, '788', '2013-09-06', 1, 5.00, 78.00),
(73, '45', '2013-09-06', 1, 56.00, 566.00),
(74, '788', '2013-09-06', 1, 56.00, 55.00),
(75, '77', '2013-09-06', 1, 677.00, 899.00),
(76, '788', '2013-09-10', 1, 78.00, 788.00),
(77, '788', '2013-09-10', 1, 78999.00, 899.00),
(78, '788', '2013-09-10', 1, 78999.00, 899.00),
(79, '788', '2013-10-02', 1, 56.00, 4444.00),
(80, '788', '2013-11-26', 1, 56.00, 4444.00);

-- --------------------------------------------------------

--
-- Table structure for table `sellsdetails`
--

CREATE TABLE IF NOT EXISTS `sellsdetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sell_id` int(11) NOT NULL,
  `purchase_product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `serial` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

--
-- Dumping data for table `sellsdetails`
--

INSERT INTO `sellsdetails` (`id`, `sell_id`, `purchase_product_id`, `quantity`, `price`, `serial`) VALUES
(38, 66, 28, 45, 567, '1000,1001,1002,1003,1005,'),
(39, 66, 28, 45, 567, '1002,1003,1006,1007,'),
(40, 69, 28, 45, 567, '1001,1002,1003,'),
(41, 0, 0, 45, 567, ''),
(42, 0, 0, 45, 567, ''),
(47, 66, 28, 45, 567, '1000,1001,1005'),
(49, 71, 28, 45, 567, '1000,1001,1002,'),
(50, 72, 31, 34, 34, ''),
(51, 73, 31, 34, 34, ''),
(52, 73, 29, 43, 234, ''),
(53, 73, 30, 34, 34, ''),
(54, 73, 29, 43, 234, ''),
(55, 74, 30, 34, 34, ''),
(56, 75, 29, 43, 234, ''),
(57, 75, 28, 1, 567, '1004,'),
(58, 76, 28, 1000, 567, '1000,1001,1002,'),
(59, 77, 28, 1000, 567, '1000,1001,1006,'),
(60, 78, 29, 43, 234, ''),
(61, 78, 29, 43, 234, ''),
(62, 78, 31, 34, 34, ''),
(63, 78, 28, 1000, 567, '1002,1003,1004,'),
(64, 79, 28, 1000, 567, '1001,1002,'),
(65, 79, 29, 43, 234, ''),
(66, 80, 28, 1000, 567, '1000,1001,1002,');

-- --------------------------------------------------------

--
-- Table structure for table `sellsproductserials`
--

CREATE TABLE IF NOT EXISTS `sellsproductserials` (
  `id` int(11) NOT NULL,
  `sellsdetail_id` int(11) NOT NULL,
  `serial` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` char(1) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user`, `password`, `role`, `status`) VALUES
(7, 'admin', 'bdf4b9dcc80b8284c05d8baaf7830a751141635d', '1', 1),
(8, 'admin', 'ed797fd8b1b070d6318b9611c2e5158e9ed6297d', '1', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
