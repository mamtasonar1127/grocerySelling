-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2018 at 06:55 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookdetails`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bookdetails`
--

CREATE TABLE `tbl_bookdetails` (
  `book_IDnumber` int(11) NOT NULL,
  `book_title` varchar(255) NOT NULL,
  `book_genre` varchar(255) NOT NULL,
  `book_review` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `store_link` varchar(255) NOT NULL,
  `book_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bookdetails`
--

INSERT INTO `tbl_bookdetails` (`book_IDnumber`, `book_title`, `book_genre`, `book_review`, `name`, `email`, `store_link`, `book_image`) VALUES
(1, 'Avengers', 'Comic Book', 'Good to read. 5 out of 5', 'Manan', 'manan@gmail.com', 'https://www.chapters.indigo.ca', 'bookimages/1302909436.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `log_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `contact` text NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`log_id`, `first_name`, `last_name`, `contact`, `email_id`, `password`) VALUES
(1, 'Manan', 'Patel', '7056489632', 'manan@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bookdetails`
--
ALTER TABLE `tbl_bookdetails`
  ADD PRIMARY KEY (`book_IDnumber`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`log_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bookdetails`
--
ALTER TABLE `tbl_bookdetails`
  MODIFY `book_IDnumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
