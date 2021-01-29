-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2021 at 05:56 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `Username` varchar(20) NOT NULL,
  `Password` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`Username`, `Password`) VALUES
('Sunny', 123);

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `CustomerUserID` varchar(20) NOT NULL,
  `january` int(11) NOT NULL,
  `february` int(11) NOT NULL,
  `march` int(11) NOT NULL,
  `april` int(11) NOT NULL,
  `may` int(11) NOT NULL,
  `june` int(11) NOT NULL,
  `july` int(11) NOT NULL,
  `august` int(11) NOT NULL,
  `september` int(11) NOT NULL,
  `october` int(11) NOT NULL,
  `november` int(11) NOT NULL,
  `december` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`CustomerUserID`, `january`, `february`, `march`, `april`, `may`, `june`, `july`, `august`, `september`, `october`, `november`, `december`) VALUES
('dbd_aajharul', 0, 0, 0, 0, 0, 0, 0, 0, 554, 0, 0, 0),
('dbd_aalamgir', 600, 0, 0, 0, 0, 555, 0, 0, 6900, 0, 0, 0),
('dbd_afsan', 566, 0, 600, 0, 0, 0, 0, 0, 500, 0, 0, 0),
('dbd_ahsania', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('dbd_sunny', 666, 500, 0, 500, 0, 554, 0, 600, 58585, 0, 0, 600),
('dbd_toufik', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE `customer_info` (
  `First_Name` varchar(20) NOT NULL,
  `Last_name` varchar(20) NOT NULL,
  `Email` text NOT NULL,
  `Address` text NOT NULL,
  `Mobile` varchar(20) NOT NULL,
  `Package Type` varchar(11) NOT NULL,
  `CustomerUserID` varchar(20) NOT NULL,
  `CustomerPassword` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`First_Name`, `Last_name`, `Email`, `Address`, `Mobile`, `Package Type`, `CustomerUserID`, `CustomerPassword`) VALUES
('Ajharul', 'Islam', 'ajharul@gmail.com', 'dhaka', '1926186780', '10', 'dbd_aajharul', 12345),
('Alamgir', 'Hossain', 'alamgir@gmail.com', 'narayanganj', '016777509554', '15', 'dbd_aalamgir', 8854414),
('Afsan', 'Karim', 'afsan@gmail.com', 'Narayanganj', '01521431756', '5', 'dbd_afsan', 568554558),
('Ahsanina', 'LAjia', 'ahsan@ayapoo.com', 'Dhaka', '01755565815', '5', 'dbd_ahsania', 336511),
('Rahim', 'Karim', 'rah@gamil.com', 'Dhaka', '015555555887', '10', 'dbd_krahim', 6658485),
('NAIM UDDIN Ahmed', 'SUNNY ', 'sunnynaim@gmail.com', 'House No -491, Block-D, Painadi', '01677750934', '15', 'dbd_naim', 2147458),
('NAIM UDDIN AHMED', 'SUNNY', 'sunnynaim@gmail.com', 'Dhaka', ' 01677750934        ', '15', 'dbd_sunny', 55228555),
('Toufik', 'Rahman', 'afbn@gmail.com', 'jsnfsd', '2147483647', '15', 'dbd_toufik', 125125845);

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `SL_NO` int(255) NOT NULL,
  `month` varchar(500) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `amount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`SL_NO`, `month`, `date_time`, `description`, `amount`) VALUES
(57, 'Oct', '30-12-20', 'GO', 90),
(842, 'Aug', '30-08-20', 'SHOK DIBOS', 6000),
(1713, 'Jan', '28-1-20', 'FEE1', 12000),
(2006, 'Nov', '30-12-20', 'GO', 890),
(2105, 'May', '30-12-20', 'LOJ', 450),
(3014, 'Mar', '30-12-20', 'GO', 897),
(3062, 'Mar', '30-12-20', 'MY AH', 870),
(3395, 'Sep', '30-12-20', 'NAi', 980),
(3533, 'Jun', '30-12-20', 'POL', 568),
(4058, 'Feb', '28-12-20', 'khana', 874),
(4454, 'Feb', '28-12-20', 'khalid', 698),
(4858, 'Jun', '30-12-20', 'OUR', 894),
(4874, 'Jan', '03-01-21', 'asfsdf', 6990),
(5157, 'Aug', '08-01-21', 'Ex[emse', 200),
(5342, 'May', '30-12-20', 'HUG', 780),
(5492, 'Jan', '28-1-20', 'fee2', 950),
(6036, 'Dec', '30-12-20', 'jkki', 980),
(7209, 'Apr', '30-12-20', 'NEW', 780),
(7665, 'Nov', '30-12-20', 'adf', 856),
(7942, 'Jan', '28-12-20', 'fee3', 8741),
(8226, 'Jul', '30-12-20', 'adf', 880),
(9266, 'Jul', '30-12-20', 'TRY2', 500);

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `SL_NO` int(255) NOT NULL,
  `month` varchar(500) NOT NULL,
  `date_time` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `amount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`SL_NO`, `month`, `date_time`, `description`, `amount`) VALUES
(36, 'Apr', '28-12-20', 'NEwBill', 688),
(103, 'Jun', '28-12-20', 'A BIG DAy', 8874),
(123, 'Jan', '10-12-12', 'afaf', 6681),
(217, 'Feb', '28-12-20', 'TEST', 885),
(408, 'Jan', '29-12-20', 'GO25', 669),
(661, 'Mar', '28-12-20', '44582', 66854),
(1066, 'Mar', '28-12-20', 'TRY2', 88485),
(1464, 'Mar', '28-12-20', 'NEW', 664),
(1875, 'Apr', '28-12-20', 'TRY2', 66877),
(2158, 'Jan', '28-12-20', 'Go', 889),
(2583, 'Mar', '03-01-21', 'hjdsfbkjsdf', 66600),
(2761, 'Feb', '28-12-20', 'TEst3', 88541),
(2851, 'July', '28-12-20', 'GO', 559),
(2887, 'Sep', '28-12-20', 'GOTO', 889),
(2905, 'Feb', '28-12-20', 'TEST2', 556),
(3009, 'July', '28-12-20', 'AS TRY', 6697),
(3033, 'Jun', '29-12-20', 'HJH', 6700),
(3045, 'Jul', '28-12-20', '6689', 55744),
(3186, ' Apr', '28-12-20', 'Test55', 887984),
(3387, 'Jan', '28-12-20', '88758', 66854),
(3422, 'Jan', '28-12-20', 'TEst6', 88484),
(3808, 'Jul', '08-01-21', 'Free', 5288),
(3869, 'Jan', '28-12-20', 'RATGFG', 889857),
(4214, 'Apr', '28-12-20', '66987', 5548),
(4263, 'Jan', '28-12-20', 'adfaf', 558),
(4444, 'March', '28-12-20', 'TEST3', 88524),
(4626, 'Oct', '08-01-21', 'NOWE', 667),
(4700, 'July', '28-12-20', 'TRYkk', 8897),
(4743, 'Jun', '28-12-20', 'GO', 888),
(4931, 'May', '28-12-20', 'GO', 8898),
(5042, 'Nov', '28-12-20', 'new ad', 8897),
(5050, 'Oct', '28-12-20', 'NWW', 660),
(5265, 'Jun', '28-12-20', 'TRY', 889),
(5633, 'Sep', '28-12-20', 'ASHI', 8998),
(5681, 'Aug', '28-12-20', 'TRUK', 6698),
(5688, 'Aug', '28-12-20', 'TJUYH', 897),
(7008, 'Dec', '28-12-20', 'jkui', 5568),
(7059, 'Sep', '28-12-20', 'GO TO GO', 445),
(7097, 'Oct', '28-12-20', 'NEKIE', 5547),
(7501, 'Nov', '28-12-20', 'akhj', 8897),
(7546, 'Aug', '28-12-20', 'NEW', 568),
(8117, 'Jun', '28-12-20', 'TRY32', 500),
(8183, 'Sep', '28-12-20', 'LETS', 558),
(8697, 'May', '28-12-20', 'LKHJ', 685854),
(9091, 'Feb', '28-12-20', 'TEst5', 1055858974),
(9321, 'Mar', '28-12-20', '', 0),
(9482, 'Mar', '28-12-20', '', 0),
(9755, 'Jun', '28-12-20', 'hju', 8897),
(9991, ' Apr', '28-12-20', 'The boill', 885),
(9999, 'Mar', '28-12-20', 'Test1', 558584);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`CustomerUserID`);

--
-- Indexes for table `customer_info`
--
ALTER TABLE `customer_info`
  ADD PRIMARY KEY (`CustomerUserID`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`SL_NO`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`SL_NO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
