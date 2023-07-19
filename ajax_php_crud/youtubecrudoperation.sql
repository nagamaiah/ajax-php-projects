-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2019 at 06:23 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `youtubecrudoperation`
--

-- --------------------------------------------------------

--
-- Table structure for table `insertdata`
--

CREATE TABLE `insertdata` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insertdata`
--

INSERT INTO `insertdata` (`id`, `firstname`, `lastname`, `email`, `mobile`) VALUES
(7, 'King jjgjh', 'Maker 23e', 'undklaa@gmail.com', '9898983'),
(8, 'Latest name', 'Latname', 'dkaljf@gamil.com', '359875974'),
(23, 'dkjf;ladjfl;k', ';ljd;lfskjsd;lgj', ';lkdjg;sdlfkg', ';lekwjg;ldfksjg'),
(24, 'dhsaliuhflkasjdhkl', 'lkjdfshlkjdhflk', 'lkjdhlkajdh', 'lkjdhslakjdshflkjd'),
(25, 'sasdasdhjjh9879', 'sdasdasdas98798kjhk', 'nagamaiah63@gmail.com', '7878787900');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `insertdata`
--
ALTER TABLE `insertdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `insertdata`
--
ALTER TABLE `insertdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
