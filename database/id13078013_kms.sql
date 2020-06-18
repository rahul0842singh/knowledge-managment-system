-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 12, 2020 at 08:16 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id13078013_kms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `profeesion` varchar(50) NOT NULL,
  `about` varchar(200) NOT NULL,
  `profilepicture` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `name`, `gender`, `profeesion`, `about`, `profilepicture`) VALUES
(1, 'kumar_rahulkkcs@yahoo.com', '12345678', 'rahul kumar', 'male', 'student', 'hii!!! I am rahul singh from Techno India Salt Lake. I currently purusuing B.TECH and working for Infosoys as intern.', 'admin/rahul.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `uploadbooks`
--

CREATE TABLE `uploadbooks` (
  `id` int(11) NOT NULL,
  `date` varchar(10) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  `bookname` varchar(1000) NOT NULL,
  `bookfile` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uploadbooks`
--

INSERT INTO `uploadbooks` (`id`, `date`, `month`, `year`, `bookname`, `bookfile`) VALUES
(146, '1', '1', '2000', 'rahul', 'uploadbooks/147MyDoctor.pdf'),
(147, '1', '1', '2000', 'honey singh', 'uploadbooks/580CS603 assignment_2.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `about` varchar(50) NOT NULL,
  `phonenumber` varchar(50) NOT NULL,
  `profilepicture` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `middlename`, `lastname`, `email`, `password`, `date`, `month`, `year`, `gender`, `occupation`, `address`, `about`, `phonenumber`, `profilepicture`) VALUES
(233, 'rahul', 'kumar', 'singh', 'kumar_rahulkkcs@yahoo.com', 'rahulmother', '5', '5', '2001', 'male', 'service', 'howarh sec 5, near railway station', 'hi hello i am rahul singh from techno india salt l', '8340251638', 'private/rahul.jpg'),
(236, 'priyanka', 'kumari', 'singh', 'rah0987654321@gmail.com', '12345678', '15', '12', '2020', 'female', 'service', 'sector 12 e, 1144', 'hi hello i am rahul singh from techno india salt l', '9507267971', 'private/guddi.jpg'),
(237, 'azora', 'devi', 'singh', 'rah350924@gmail.com', 'anitasingh', '30', '7', '2020', 'female', 'service12', '', 'hi hello i am rahul singh from techno india salt l', '8709191362', 'private/342download.jpg'),
(243, 'chandra', 'shekhar', 'singh', 'chandra1975shekharsingh@gmail.com', '12345678', '1', '1', '2000', 'male', 'government service', 'SEC 12/B, H N 3177', 'hi hello i am rahul singh from techno india salt l', '8002624520', 'private/44download.jpg'),
(244, 'priyanshu', 'raj', 'singh', 'pr24071@gmail.com', '12345678', '15', '10', '2000', 'male', 'student', 'kaderabad,dharbhanga', 'hi hello i am rahul singh from techno india salt l', '9304321399', 'private/755priyashu.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploadbooks`
--
ALTER TABLE `uploadbooks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `uploadbooks`
--
ALTER TABLE `uploadbooks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
