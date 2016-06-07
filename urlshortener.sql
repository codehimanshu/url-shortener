-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2016 at 07:34 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `urlshortener`
--

-- --------------------------------------------------------

--
-- Table structure for table `url`
--

CREATE TABLE `url` (
  `id` int(11) NOT NULL,
  `orgurl` text NOT NULL,
  `srturl` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `url`
--

INSERT INTO `url` (`id`, `orgurl`, `srturl`) VALUES
(1000004, 'http://localhost/urlshortener/', 'lflw'),
(1000005, 'http://localhost/urlshortener/', 'lflx'),
(1000006, 'http://localhost/urlshortener/', 'lfly'),
(1000007, 'http://localhost/urlshortener/', 'lflz'),
(1000008, 'http://localhost/urlshortener/', 'lfm0'),
(1000009, 'http://localhost/urlshortener/', 'lfm1'),
(1000010, 'http://localhost/urlshortener/', 'lfm2'),
(1000011, 'http://localhost/urlshortener/', 'lfm3'),
(1000012, 'http://localhost/urlshortener/', 'lfm4'),
(1000013, 'http://localhost/urlshortener/', 'lfm5'),
(1000014, 'http://localhost/urlshortener/', 'lfm6'),
(1000015, 'http://localhost/urlshortener/', 'lfm7'),
(1000016, 'http://localhost/urlshortener/', 'lfm8'),
(1000017, 'http://localhost/urlshortener/', 'lfm9'),
(1000018, 'http://localhost/urlshortener/', 'lfma'),
(1000019, 'http://localhost/urlshortener/', 'lfmb'),
(1000020, 'http://localhost/urlshortener/', 'lfmc'),
(1000021, 'http://localhost/urlshortener/', 'lfmd'),
(1000022, 'http://localhost/urlshortener/', 'lfme'),
(1000023, 'http://localhost/urlshortener/', 'lfmf'),
(1000024, 'http://localhost/urlshortener/', 'lfmg'),
(1000025, 'http://localhost/urlshortener/', 'lfmh'),
(1000026, 'http://localhost/urlshortener/', 'lfmi'),
(1000027, 'http://localhost/urlshortener/', 'lfmj'),
(1000028, 'http://localhost/urlshortener/?orgurl=http%3A%2F%2Flocalhost%2Furlshortener%2F&short=', 'lfmk'),
(1000029, 'http://localhost/urlshortener/?orgurl=http%3A%2F%2Flocalhost%2Furlshortener%2F&short=', 'lfml'),
(1000030, 'http://localhost/urlshortener/?orgurl=http%3A%2F%2Flocalhost%2Furlshortener%2F&short=', 'lfmm'),
(1000031, 'http://localhost/urlshortener/?orgurl=http%3A%2F%2Flocalhost%2Furlshortener%2F&short=', 'lfmn'),
(1000032, 'http://localhost/urlshortener/?orgurl=http%3A%2F%2Flocalhost%2Furlshortener%2F&short=', 'lfmo'),
(1000033, 'http://localhost/urlshortener/?orgurl=http%3A%2F%2Flocalhost%2Furlshortener%2F&short=', 'lfmp'),
(1000034, 'http://localhost/urlshortener/?orgurl=http%3A%2F%2Flocalhost%2Furlshortener%2F&short=', 'lfmq'),
(1000035, 'http://localhost/urlshortener/?orgurl=http%3A%2F%2Flocalhost%2Furlshortener%2F&short=', 'lfmr');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `url`
--
ALTER TABLE `url`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `url`
--
ALTER TABLE `url`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000036;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
