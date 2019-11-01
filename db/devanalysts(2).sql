-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2019 at 02:46 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devanalysts`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(6) NOT NULL,
  `message` varchar(200) NOT NULL,
  `title` varchar(50) NOT NULL,
  `date` varchar(20) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `message`, `title`, `date`, `image`) VALUES
(1, 'conducts trainings, abroad study programs and technical support in various fields in conjunction with institutes within', 'Traings', '2019-06-16', 'uploads/confrence.jpg'),
(2, 'conducts trainings, abroad study programs and technical support in various fields in conjunction with institutes within', 'Traings', '2019-06-16', 'uploads/confrence.jpg'),
(3, 'conducts trainings, abroad study programs and technical support in various fields in conjunction with institutes within', 'Traings', '2019-06-16', 'uploads/confrence.jpg'),
(4, 'conducts trainings, abroad study programs and technical support in various fields in conjunction with institutes within', 'Traings', '2019-06-16', 'uploads/confrence.jpg'),
(5, 'conducts trainings, abroad study programs and technical support in various fields in conjunction with institutes within', 'Traings', '2019-06-16', 'uploads/confrence.jpg'),
(6, 'conducts trainings, abroad study programs and technical support in various fields in conjunction with institutes within', 'Traings', '2019-06-16', 'uploads/confrence.jpg'),
(7, 'conducts trainings, abroad study programs and technical support in various fields in conjunction with institutes within', 'Traings', '2019-06-16', 'uploads/confrence.jpg'),
(8, 'conducts trainings, abroad study programs and technical support in various fields in conjunction with institutes within', 'Traings', '2019-06-16', 'uploads/confrence.jpg'),
(9, 'conducts trainings, abroad study programs and technical support in various fields in conjunction with institutes within', 'Traings', '2019-06-16', 'uploads/confrence.jpg'),
(10, 'conducts trainings, abroad study programs and technical support in various fields in conjunction with institutes within', 'Traings', '2019-06-16', 'uploads/confrence.jpg'),
(11, 'conducts trainings, abroad study programs and technical support in various fields in conjunction with institutes within', 'Traings', '2019-06-16', 'uploads/confrence.jpg'),
(12, 'conducts trainings, abroad study programs and technical support in various fields in conjunction with institutes within', 'Traings', '2019-06-16', 'uploads/confrence.jpg'),
(13, 'conducts trainings, abroad study programs and technical support in various fields in conjunction with institutes within', 'Traings', '2019-06-16', 'uploads/confrence.jpg'),
(14, 'welcome to you all', 'the analyst', '2019-06-27', 'uploads/sample.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `experts`
--

CREATE TABLE `experts` (
  `Id` int(10) NOT NULL,
  `ename` varchar(200) NOT NULL,
  `experience` varchar(10) NOT NULL,
  `citizen` varchar(25) NOT NULL,
  `degree` varchar(10) NOT NULL,
  `cv` varchar(100) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `grants`
--

CREATE TABLE `grants` (
  `grantId` int(10) NOT NULL,
  `agency` varchar(20) NOT NULL,
  `gname` varchar(200) NOT NULL,
  `posted` varchar(10) NOT NULL,
  `location` varchar(20) NOT NULL,
  `catergory` varchar(15) NOT NULL,
  `budget` varchar(20) NOT NULL,
  `Details` longtext NOT NULL,
  `Deadline` varchar(10) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `Id` int(10) NOT NULL,
  `jname` varchar(350) NOT NULL,
  `org` varchar(20) NOT NULL,
  `posted` varchar(10) NOT NULL,
  `location` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `experience` varchar(10) NOT NULL,
  `Details` longtext NOT NULL,
  `Deadline` varchar(10) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `experts`
--
ALTER TABLE `experts`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `grants`
--
ALTER TABLE `grants`
  ADD PRIMARY KEY (`grantId`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `experts`
--
ALTER TABLE `experts`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grants`
--
ALTER TABLE `grants`
  MODIFY `grantId` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
