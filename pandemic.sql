-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2020 at 04:09 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pandemic`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_trace`
--

CREATE TABLE `contact_trace` (
  `contact_id` int(11) NOT NULL,
  `user_case_id` int(11) NOT NULL,
  `person_name` varchar(255) DEFAULT NULL,
  `contact_date` date DEFAULT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_trace`
--

INSERT INTO `contact_trace` (`contact_id`, `user_case_id`, `person_name`, `contact_date`, `address`) VALUES
(3, 2, 'William Doe', '2020-12-03', 'Bella Luz San Mateo, Isabela'),
(4, 2, 'Johny Smith', '2020-12-02', 'Villa Magat San Mateo, Isabela'),
(5, 1, 'Levi Ackerman', '2020-12-09', 'Barangay 4 San Mateo, Isabela'),
(6, 1, 'Eren Yeager', '2020-12-02', 'Barangay 1 San Mateo, Isabela'),
(38, 39, 'sad', '2020-12-11', 'asd'),
(39, 40, 'Trafalgar Law', '2020-12-11', 'Vancouver CA'),
(43, 48, 'sadf', '2020-12-04', 'sd'),
(44, 48, 'sadf', '2020-12-04', 'sadf'),
(45, 48, 'sdfa', '2020-12-03', 'sadf'),
(46, 49, 'Trafalgar Law', '2020-12-04', 'Wano Kuni'),
(47, 50, 'sad', '2020-12-02', 'sdasa'),
(143, 51, 'Bamboo', '2020-12-04', 'Quezon City Manila'),
(144, 52, 'Jomel Carpio Cadiente', '2020-12-03', 'Dagupan San Mateo, Isabela'),
(154, 56, 'Bartelomeow Kuma', '2018-12-03', 'Rev HQ'),
(167, 56, 'Monkey D. Dragon', '2020-12-03', 'Wano Kuni'),
(168, 56, 'Monkey D. Garp (updated)', '2020-12-08', 'Wano Kuni'),
(169, 56, 'Admiral Akainu (UPDATED)', '2020-12-04', 'Navy HQ'),
(174, 56, 'Admiral Kizaru', '2020-12-03', 'Navy HQ'),
(182, 56, 'Gol D. Roger', '2020-12-03', 'Raftel'),
(183, 56, 'Trafalgar Laws', '2020-12-03', 'Vancouver CA'),
(184, 56, 'Jake Jake', '2020-12-03', 'Vancouver CA'),
(185, 57, 'Bartelomeow Kuma', '2018-12-03', 'Rev HQ'),
(186, 57, 'Monkey D. Dragon', '2020-12-03', 'Wano Kuni'),
(187, 57, 'Monkey D. Garp (updated)', '2020-12-08', 'Wano Kuni'),
(188, 57, 'Admiral Akainu (UPDATED)', '2020-12-04', 'Navy HQ'),
(189, 57, 'Admiral Kizaru', '2020-12-03', 'Navy HQ'),
(190, 57, 'Gol D. Roger', '2020-12-03', 'Raftel'),
(191, 57, 'Trafalgar Laws', '2020-12-03', 'Vancouver CA'),
(192, 57, 'Jake Jake', '2020-12-03', 'Vancouver CA'),
(193, 57, 'dsa', '2020-12-04', 'dsa'),
(204, 66, 'as (updated)', '2020-12-10', 'as'),
(205, 66, 'as', '2020-12-10', 'as'),
(206, 66, 'as', '2020-12-10', 'as'),
(207, 66, 'as', '2020-12-10', 'as'),
(208, 67, 'dsaf', '2020-12-04', 'dsf'),
(209, 67, 'dsaf', '2020-12-04', 'dsf'),
(210, 67, 'Person Interact Test', '2020-12-08', 'Vancouver CA');

-- --------------------------------------------------------

--
-- Table structure for table `covid`
--

CREATE TABLE `covid` (
  `user_id` int(11) NOT NULL,
  `case_id` int(11) NOT NULL,
  `covid_status` varchar(30) DEFAULT 'NA',
  `days` int(11) DEFAULT NULL,
  `covid_case` varchar(40) DEFAULT 'NA'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `covid`
--

INSERT INTO `covid` (`user_id`, `case_id`, `covid_status`, `days`, `covid_case`) VALUES
(1, 1, 'Negative', 8, 'NA'),
(2, 2, 'Positive', 14, 'Asymptomatic'),
(45, 39, 'Positive', 14, 'Asymptomatic'),
(46, 40, 'Positive', 2, 'Symptomatic'),
(47, 41, 'NA', 2, 'NA'),
(48, 42, 'Negative', 2, 'Asymptomatic'),
(49, 43, 'Negative', 12, 'Asymptomatic'),
(50, 44, 'Positive', 14, 'Asymptomatic'),
(51, 45, 'Positive', 5, 'Symptomatic'),
(54, 48, 'Negative', 8, 'Asymptomatic'),
(55, 49, 'Positive', 8, 'Asymptomatic'),
(56, 50, 'Positive', 8, 'Asymptomatic'),
(57, 51, 'Under Investigation', 14, 'Asymptomatic'),
(58, 52, 'Negative', 4, 'Asymptomatic'),
(59, 53, 'Under Investigation', 14, 'Asymptomatic'),
(62, 56, 'Negative', 8, 'Asymptomatic'),
(63, 57, 'Positive', 12, 'Asymptomatic'),
(72, 66, 'Positive', 2, 'Asymptomatic'),
(73, 67, 'Positive', 2, 'Symptomatic'),
(74, 68, 'Negative', 14, 'Asymptomatic');

-- --------------------------------------------------------

--
-- Table structure for table `travel_history`
--

CREATE TABLE `travel_history` (
  `user_travel` int(11) NOT NULL,
  `travel_id` int(11) NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `travel_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `travel_history`
--

INSERT INTO `travel_history` (`user_travel`, `travel_id`, `location`, `travel_date`) VALUES
(2, 3, 'Bella Luz San Mateo, Isabela ', '2020-12-03'),
(2, 4, 'Villa Magat San Mateo, Isabela (updated)', '2020-12-04'),
(1, 5, 'Dagupan San Mateo, Isabela (updated)', '2020-12-02'),
(1, 6, 'Bacarena San Mateo, Isabela (updated)', '2020-12-02'),
(39, 39, 'sad', '2020-12-11'),
(40, 40, 'Wano Kuni', '2020-12-11'),
(48, 44, 'sadfds', '2020-12-02'),
(49, 45, 'Alberta CA', '2020-12-01'),
(50, 46, 'sad', '2020-12-05'),
(51, 416, 'Pasay City Manila', '2020-12-03'),
(52, 417, 'Barangay 1 San Mateo, Isabela', '2020-12-09'),
(43, 424, 'Pasay City Manila (updated)', '2020-12-03'),
(53, 436, 'East Blue', '2012-02-02'),
(56, 448, 'New Updated (NEW)', '2020-12-01'),
(56, 449, 'NEW TRAVEL ', '2020-12-01'),
(56, 450, 'NEW TRAVEL ', '2020-12-01'),
(57, 451, 'New Updated (NEW)', '2020-12-01'),
(57, 452, 'NEW TRAVEL ', '2020-12-01'),
(57, 453, 'NEW TRAVEL ', '2020-12-01'),
(57, 454, 'dsa', '2020-12-11'),
(66, 464, 'as (ypds', '2020-12-09'),
(66, 465, 'as', '2020-12-09'),
(66, 466, 'as', '2020-12-09'),
(66, 467, 'as', '2020-12-09'),
(67, 468, 'dsaf', '2020-12-04'),
(67, 469, 'dsaf', '2020-12-04'),
(68, 470, 'New Travel History', '2020-12-02'),
(68, 471, 'Raftel', '2020-12-04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `civil_status` varchar(20) DEFAULT 'NA',
  `occupation` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `civil_status`, `occupation`, `address`) VALUES
(1, 'john', 'smith', 23, '', 'IT Consultant', 'Purok1 Dagupan San Mateo, Isabela'),
(2, 'Johny', 'Dough', 32, 'Married', 'Stock Investor', 'San Antonio San Mateo, Isabela'),
(45, 'Zoro', 'Jay', 12, 'Married', 'Student', 'East Blue'),
(46, 'Zoro', 'Roronoa', 12, 'Married', 'Student', 'Manila PH'),
(47, 's', 'ds', 1, 'NA', 'ss', 'ss'),
(48, 'Jomel', 'Cadiente', 12, 'Single', 'sds', 'hgfwqf'),
(49, 'Potpot', 'hhwr', 123, 'Single', 'dsjrtfv', 'irtjw'),
(50, 'Jhon', 'Jay', 12, 'Married', 'Student', 'Manila PH'),
(51, 'Zoro', 'sadf', 12, 'Married', 'dsfa', 'sdaf'),
(54, 'Jhon', 'Jay', 25, 'Single', 'Student', 'East Blue'),
(55, 'Luffy', 'Roronoa', 12, 'Married', 'Student', 'Manila PH'),
(56, 'sdsd', 'sdagfsadfsadfs', 2, 'Widow', 'sad', 'sad'),
(57, 'Rico', 'Blanco', 41, 'Married', 'Music Writer', 'Metro Manila'),
(58, 'Benjie', 'Malagayo', 20, 'Married', 'Web Developer', 'Victoria San Mateo, Isabela'),
(59, 'Zoro', 'Roronoa', 19, 'Single', 'Swordsman', 'North Blue'),
(62, 'Dummy', 'Data', 12, 'Single', 'sds', 'hgfwqf'),
(63, 'dum dum', 'dat dat', 23, 'Married', 'd', 'dsal'),
(72, 'zzzzzzzz (updated)', 'zzz (updated)', 2, 'Married', 'z', 'z'),
(73, 'cxzv', 'cxzv', 1, 'Widow', 'cxz', 'dfs'),
(74, 'b', 'b', 12, 'Married', 'bv', 'bv');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_trace`
--
ALTER TABLE `contact_trace`
  ADD PRIMARY KEY (`contact_id`),
  ADD KEY `user_case_id` (`user_case_id`);

--
-- Indexes for table `covid`
--
ALTER TABLE `covid`
  ADD PRIMARY KEY (`case_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `travel_history`
--
ALTER TABLE `travel_history`
  ADD PRIMARY KEY (`travel_id`),
  ADD KEY `user_travel` (`user_travel`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_trace`
--
ALTER TABLE `contact_trace`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;

--
-- AUTO_INCREMENT for table `covid`
--
ALTER TABLE `covid`
  MODIFY `case_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `travel_history`
--
ALTER TABLE `travel_history`
  MODIFY `travel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=472;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contact_trace`
--
ALTER TABLE `contact_trace`
  ADD CONSTRAINT `contact_trace_ibfk_1` FOREIGN KEY (`user_case_id`) REFERENCES `covid` (`case_id`) ON DELETE CASCADE;

--
-- Constraints for table `covid`
--
ALTER TABLE `covid`
  ADD CONSTRAINT `covid_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `travel_history`
--
ALTER TABLE `travel_history`
  ADD CONSTRAINT `travel_history_ibfk_1` FOREIGN KEY (`user_travel`) REFERENCES `covid` (`case_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
