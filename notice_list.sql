-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 25, 2022 at 10:34 AM
-- Server version: 10.5.16-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u663555798_mnsnhs`
--

-- --------------------------------------------------------

--
-- Table structure for table `notice_list`
--

CREATE TABLE `notice_list` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `new` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice_list`
--

INSERT INTO `notice_list` (`id`, `title`, `filename`, `created`, `new`) VALUES
(1, 'MADHYAMIK ROUTINE 2021 ', 'mpse_2021_09022021.pdf', '2021-02-18 11:12:56', 1),
(2, 'CLASS XI ANNUAL EXAM ROUTINE, 2021', 'Revises_Routine_ALL_2021_3.pdf', '2021-02-18 11:15:47', 1),
(3, 'H.S. EXAM ROUTINE, 2021', 'Revises_Routine_ALL_2021_2.pdf', '2021-02-18 11:16:12', 1),
(4, 'CLASS X TEST EXAMINATION 2021', 'CLASS X TEST EXAMINATION 2021.pdf', '2021-03-10 05:55:00', 1),
(6, 'BASANTA UTSAV, 2021', 'vasant utsav.pdf', '2021-03-25 11:39:13', 1),
(7, 'Admission for class XI and XII', 'admission xi xii.pdf', '2021-06-15 12:47:34', 1),
(8, 'Online Exam for class V to X', 'on line exam.pdf', '2021-06-15 12:48:31', 1),
(9, 'Admission Notice for Class V to IX, 2022', 'AdmNotice.pdf', '2021-11-13 08:15:51', 1),
(10, 'Revised Routine of HS and Class XI, 2022', 'revised_routine2022.pdf', '2022-03-21 18:16:09', 1),
(11, 'Admission Notice for Class XI, 2022', 'NOTICE for XI Adm.pdf', '2022-05-05 02:38:29', 1),
(12, 'Admission Notice for Class V to IX for new Students 2023', 'Admission2023.pdf', '2022-11-14 09:47:42', 0),
(13, 'Class XI WBCHSE Routine 2023', 'ClassXI_2023.pdf', '2022-11-14 09:56:44', 0),
(14, 'Class XII WBCHSE Routine 2023', 'ClassXII_2023.pdf', '2022-11-14 09:56:59', 0),
(15, 'Class X Madhyamik Routine 2023', 'Madhyamik2023.pdf', '2022-11-14 10:00:02', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notice_list`
--
ALTER TABLE `notice_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notice_list`
--
ALTER TABLE `notice_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
