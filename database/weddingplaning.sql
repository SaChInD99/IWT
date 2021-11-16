-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2020 at 07:48 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weddingplaning`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `c_email` varchar(50) NOT NULL,
  `c_phoneno` int(20) NOT NULL,
  `c_subject` varchar(100) NOT NULL,
  `c_comment` varchar(400) NOT NULL,
  `c_rate` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`c_id`, `c_name`, `c_email`, `c_phoneno`, `c_subject`, `c_comment`, `c_rate`) VALUES
(26, 'kaveesha', 'kaveejayamaha@gmail.com', 714356789, 'late reply', 'The server is slow', 'Good'),
(27, 'kavindya', 'kavindyaumeshi@gmail.com', 714567894, 'regarding poor quality', 'quality is bad', 'Need improvement'),
(28, 'kaushini', 'kaushinipraba@gmail.com', 71567543, 'contact us is bad', 'not in time', 'Excellent'),
(29, 'aaaaaa pppp', 'mm@gmail.com', 1234567890, 'ssssss', 'ssssss', 'Excellent');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `year` int(11) NOT NULL,
  `vision` varchar(100) NOT NULL,
  `achievements` varchar(100) NOT NULL,
  `goals` varchar(100) NOT NULL,
  `staff` int(11) NOT NULL,
  `branches` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`year`, `vision`, `achievements`, `goals`, `staff`, `branches`, `id`) VALUES
(2019, 'kl', 'k', 'l', 4, 8, 18),
(2020, 'fyuk', 'ghggggggggggggggggggggggggggggg', 'nnnnnnnnnnnnnnnnnnnnnnnnnnnn', 4, 2, 19),
(2019, 'aaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaa', 3, 8, 20),
(2020, 'aaaaasssssxx dddddd ddddddd', 'ddd eeeeeeeeeeeeeeeeeeeeee', 'oooooooooooooooooooooooooooooooooo 2', 4, 33, 21),
(2020, 'a', 'a', 'a', 3, 8, 22),
(2019, 'zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz', 'zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz', 'zzzzzzzzzz', 4, 8, 23),
(1, '111111', '1111111', '1111111', 4, 4, 24);

-- --------------------------------------------------------

--
-- Table structure for table `log_form`
--

CREATE TABLE `log_form` (
  `Id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_form`
--

INSERT INTO `log_form` (`Id`, `user_name`, `password`) VALUES
(1, 'qqqqqq', 'qqqqq'),
(2, 'ytszf', 'qwert'),
(3, '', ''),
(4, '', ''),
(5, 'abcd', 'asd'),
(6, 'IT20183004', ''),
(7, 'IT20183004', ''),
(8, '', ''),
(9, '', ''),
(10, 'sdfg', ''),
(11, 'sss', 'ssss'),
(12, 'qwert', 'qw'),
(13, 'aaaaaaaa', 'aaaaaaaaaaa'),
(14, 'ssssss', 'sssssssssssss'),
(15, 'qwe', 'qwe'),
(16, 'aaa', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `ContactNumber` int(11) NOT NULL,
  `DOB` varchar(10) NOT NULL,
  `Gender` varchar(11) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Confirmpassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`FirstName`, `LastName`, `Email`, `ContactNumber`, `DOB`, `Gender`, `Password`, `Confirmpassword`) VALUES
('dilesha', 'kavindi', 'kavindidilesha@gmail.com', 718655423, '1998-08-03', '', 'dile', 'dile'),
('lakitha', 'mitchel', 'kuluulaki@gmail.com', 713536785, '1994-08-08', 'male', '7890', '7890'),
('aaaaaa', 'pppp', 'mm@gmail.com', 1234567890, '2020-10-02', 'male', 'qqq', 'qqq'),
('indrani', 'rupasinghe', 'zxrcfvdrs@gmail.com', 717165658, '1999-03-04', 'male', '234', '234');

-- --------------------------------------------------------

--
-- Table structure for table `requirement`
--

CREATE TABLE `requirement` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `foodtype` char(15) NOT NULL,
  `area` varchar(10) NOT NULL,
  `gender` char(1) NOT NULL,
  `dateofbirth` bigint(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phoneCode` int(11) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `requirements` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requirement`
--

INSERT INTO `requirement` (`id`, `firstname`, `lastname`, `address`, `foodtype`, `area`, `gender`, `dateofbirth`, `email`, `phoneCode`, `phone`, `requirements`) VALUES
(1, 'kaveesha', 'pereraj', 'no 90,old road,pannipitiya', 'SriLankanfoods', 'colombo', 'f', 1995, 'kperera41@gmail.com', 94, 763055154, 'zzzaff'),
(19, 'kaveesha', 'pereraj', 'no 90,old road,pannipitiya', 'Italianfoods', 'colombo', 'm', 1995, 'kperera412@gmail.comy', 94, 763055154, 'zzzaff'),
(20, 'kaveesha', 'perera', 'no 90,old road,pannipitiya', 'Italianfoods', 'colombo', 'f', 1995, 'kperera41@gmail.coms', 94, 763055154, 'zzz'),
(21, 'kaveesha', 'dasun', 'no 90,old road,pannipitiya', 'Italianfoods', 'colombo', 'm', 1990, 'kpererad41@gmail.com', 94, 763055154, 'zzz'),
(22, 'ashini', 'perera', 'no 90,old road,pannipitiya', 'Indianfoods', 'kandy', 'f', 1995, 'ashini@gmail.com', 73, 763055154, 'sample data'),
(23, 'kaveesha', 'dasun', 'no 90,old road,pannipitiya', 'Indianfoods', 'colombo', 'f', 1995, 'it20178154@my.sliit.lk', 79, 763055154, 'sample data'),
(24, 'ashinidi', 'perera', 'no 90,old road,pannipitiya', 'Indianfoods', 'colombo', 'f', 1994, 'it20178154gt@my.sliit.lk', 94, 763055154, 'sample data'),
(25, 'aaaaaa', 'pppp', 'aaaaa', 'Indianfoods', 'other', 'm', 0, 'mm@gmail.com', 77, 1234567890, 'jjjjjjjj');

-- --------------------------------------------------------

--
-- Table structure for table `videographyphotography`
--

CREATE TABLE `videographyphotography` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `requirementtype` char(15) NOT NULL,
  `area` varchar(10) NOT NULL,
  `gender` char(1) NOT NULL,
  `dateofbirth` bigint(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phoneCode` int(11) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `requirements` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videographyphotography`
--

INSERT INTO `videographyphotography` (`id`, `firstname`, `lastname`, `address`, `requirementtype`, `area`, `gender`, `dateofbirth`, `email`, `phoneCode`, `phone`, `requirements`) VALUES
(1, 'kaveesha', 'perera', 'no 90,old road,pannipitiya', 'Photography', 'kandy', 'm', 1995, 'it20178154@my.sliit.lk', 972, 763055154, 'zzzaff'),
(6, 'kaveesha', 'perera', 'no 90,old road,pannipitiya', 'Videography', 'colombo', 'm', 1995, 'kperera4111@gmail.com', 79, 763055154, 'zzzaff'),
(7, 'kaveesha', 'pereraj', 'no 90,old road,pannipitiya', 'Photography', 'colombo', 'f', 1995, 'kperera412@gmail.comy', 78, 763055154, 'zzzaff'),
(8, 'sad', 'perera', 'no 90,old road,pannipitiya', 'Videography', 'colombo', 'm', 1990, 'kperera4e1@gmail.com', 78, 763055154, 'zzz'),
(9, 'ashini', 'dasu', 'no 90,old road,pannipitiya', 'Videography', 'colombo', 'f', 1994, 'ashini@gmail.com', 94, 763055154, 'sample data'),
(10, 'ashinidi', 'perera', 'no 90,old road,pannipitiya', 'Videography', 'colombo', 'f', 1994, 'it201781544@my.sliit.lk', 78, 763055154, 'sample data'),
(11, 'aaaaaa', 'pppp', 'aaaaa', 'Photography', 'colombo', 'm', 0, 'mm@gmail.com', 77, 34567890, 'aaaaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_form`
--
ALTER TABLE `log_form`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `requirement`
--
ALTER TABLE `requirement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videographyphotography`
--
ALTER TABLE `videographyphotography`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `log_form`
--
ALTER TABLE `log_form`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `requirement`
--
ALTER TABLE `requirement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `videographyphotography`
--
ALTER TABLE `videographyphotography`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
