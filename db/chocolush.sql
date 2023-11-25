-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2023 at 03:26 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chocolush`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `mobile` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `mobile`) VALUES
(1, 'preet', '12345', '7418529630');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `oid` int(100) NOT NULL,
  `cake` varchar(100) NOT NULL,
  `filling` varchar(100) NOT NULL,
  `shape` varchar(100) NOT NULL,
  `icing` varchar(100) NOT NULL,
  `flavours` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `allergies` varchar(100) NOT NULL,
  `requests` varchar(100) NOT NULL,
  `photos` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(1500) NOT NULL,
  `phone` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`oid`, `cake`, `filling`, `shape`, `icing`, `flavours`, `qty`, `allergies`, `requests`, `photos`, `name`, `email`, `address`, `phone`) VALUES
(1, 'chocolate', 'buttercream', 'circle', 'buttercream', 'chocolate', '1', 'no', 'no', '', 'goldpreet kaur', 'goldpreetkaur062@gmail.com', 'setia colony', 2147483647),
(4, 'chocolate', 'chocolate', 'circle', 'on', 'on', '2', '\r\nno', 'no\r\n', 'pic', 'pinky arora', 'punky123@gmail.com', 'Array', 2147483647),
(5, 'chocolate', 'chocolate', 'rectangle', 'on', 'on', '1', '\r\nxddd', 'Dddd', 'pic', 'szss fff', 'cfff', 'Array', 2147483647),
(6, 'chocolate', 'chocolate', 'rectangle', 'on', 'on', '1', '\r\nxddd', 'Dddd', 'pic', 'szss fff', 'cfff', 'Array', 2147483647),
(7, 'chocolate', 'chocolate', 'rectangle', 'on', 'on', '1', '\r\nxddd', 'Dddd', 'pic', 'szss fff', 'cfff', 'Array', 2147483647),
(8, 'chocolate', 'chocolate', 'rectangle', 'on', 'on', '1', '\r\nxddd', 'Dddd', 'pic', 'szss fff', 'cfff', 'a:5:{s:4:\"add1\"', 2147483647),
(9, 'chocolate', 'chocolate', 'rectangle', 'on', 'on', '1', '\r\nxddd', 'Dddd', 'pic', 'szss fff', 'cfff', 'a:5:{s:4:\"add1\"', 2147483647),
(10, 'chocolate', 'chocolate', 'rectangle', 'on', 'on', '1', '\r\nxddd', 'Dddd', 'pic', 'szss fff', 'cfff', 'a:5:{s:4:\"add1\";s:7:\"zfszfsz\";s:4:\"add2\";s:3:\"ddd\";s:4:\"city\";s:2:\"ff\";s:5:\"state\";s:3:\"ddd\";s:3:\"zip\";s:3:\"das\";}', 2147483647),
(11, '', '', '', '', '', '', '\r\n', '\r\n', 'pic', ' ', '', 'a:5:{s:4:\"add1\";s:0:\"\";s:4:\"add2\";s:0:\"\";s:4:\"city\";s:0:\"\";s:5:\"state\";s:0:\"\";s:3:\"zip\";s:0:\"\";}', 0),
(12, 'butterscotch', 'chocolate', 'rectangle', 'on', 'on', '2', 'no\r\n', 'no\r\n', 'pic', 'd k', 'preet kaur', 'a:5:{s:4:\"add1\";s:4:\"sjsj\";s:4:\"add2\";s:3:\"kkw\";s:4:\"city\";s:7:\"dkjdjie\";s:5:\"state\";s:5:\"ekkee\";s:3:\"zip\";s:6:\"212154\";}', 2147483647),
(13, 'butterscotch', 'chocolate', 'rectangle', 'on', 'on', '3', '\r\nno', '\r\nno', 'pic', 'ki ty', 'ty', 'a:5:{s:4:\"add1\";s:3:\"ety\";s:4:\"add2\";s:0:\"\";s:4:\"city\";s:2:\"er\";s:5:\"state\";s:2:\"ty\";s:3:\"zip\";s:2:\"rt\";}', 2147483647),
(14, 'red_velvet', 'chocolate', 'square', 'on', 'on', '5', 'no\r\n', 'no\r\n', 'pic', 'tr th', 'hjgyh', 'a:5:{s:4:\"add1\";s:5:\"bnvhj\";s:4:\"add2\";s:5:\"xnbjk\";s:4:\"city\";s:4:\"cddd\";s:5:\"state\";s:3:\"eee\";s:3:\"zip\";s:4:\"2223\";}', 2147483647),
(15, 'chocolate', 'buttercream', 'rectangle', 'Buttercream', '', '5', 'no\r\n', '\r\nno', 'pic', 'rt er', 'rff', 'a:5:{s:4:\"add1\";s:12:\"wdeewefeeeee\";s:4:\"add2\";s:3:\"eee\";s:4:\"city\";s:6:\"eeww3e\";s:5:\"state\";s:3:\"eee\";s:3:\"zip\";s:6:\"ewewew\";}', 2147483647),
(16, 'butterscotch', 'chocolate', 'square', 'Buttercream', 'Chocolate', '4', 'yes\r\n', 'yes\r\n', 'pic', 'jghg bjgh', 'ugugyu', 'a:5:{s:4:\"add1\";s:3:\"jgy\";s:4:\"add2\";s:4:\"jhui\";s:4:\"city\";s:6:\"khiyut\";s:5:\"state\";s:3:\"khi\";s:3:\"zip\";s:4:\"8764\";}', 963258741);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`oid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `oid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
