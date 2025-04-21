-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2024 at 01:25 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wedding`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  `Location` varchar(255) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `date_created` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`ID`, `FirstName`, `LastName`, `Password`, `Email`, `Phone`, `Location`, `City`, `date_created`) VALUES
(1, 'Lucy', 'Loveless', '123', 'lucy@whatever.com', '01922938212', 'Libra Scencira', 'Witch villey', '2024-05-24'),
(2, 'Sir Pencious', 'Viper', '123', 'viper@anything.com', '01992347495', 'Hazbin Hotel', 'Fire Rock', '2024-05-24'),
(3, 'Alestor', 'Alroist', '123', 'alestor@anything.com', '01928374658', 'Hazbin Hotel', 'Fire Rock', '2024-05-31'),
(4, 'Akash', 'Islam', '123', 'akash@gmai.com', '0123456789', 'Dhaka', 'Dhaka', '2024-06-02');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `address` varchar(120) DEFAULT NULL,
  `access_level` int(11) DEFAULT NULL,
  `profile_picture` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `lastname`, `gender`, `username`, `email`, `password`, `designation`, `address`, `access_level`, `profile_picture`) VALUES
(2, 'Charlie', ' Morningstar', 'female', 'charliemorningstar', 'charlie@something.com', '123', 'Admin', 'Hazbin Hotel', 10, 'charlie.jpg'),
(3, 'Sunehra', 'Tabassum', 'female', 'sun3003', 'sunehra6@gmail.com', '123', 'Admin', 'Dhaka', 10, 'sunehra.jpg'),
(4, 'Ameer', 'Sohail', 'male', 'ameer123', 'ameer@anything.com', '123', 'Admin', 'Dhaka', 10, 'ameer.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `groom_name` varchar(120) DEFAULT NULL,
  `bride_name` varchar(120) DEFAULT NULL,
  `wedding_type` varchar(120) DEFAULT NULL,
  `email` varchar(120) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `location` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `groom_name`, `bride_name`, `wedding_type`, `email`, `Date`, `location`) VALUES
(2, 'Luca Overloard', 'Lucy Morningstar', 'Silver', ' lucy@whatever.com', '2024-12-15', 'Fantasy'),
(8, 'Romayan Owlwings', 'Replica Ray', 'Fantasy', 'romayan@something.com', '2024-12-13', 'Hazbin'),
(13, 'Alestor Alroist', 'Rosie Hill', 'Fantasy', 'alestor@anything.com', '2024-12-25', 'Hazbin Hotel'),
(14, 'Junie Risk', 'Miora Butterfly', 'Starry Night', 'junie@example.com', '2024-12-05', 'Jerresic Park Hotel');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `Features_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `Title` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`Features_id`, `category_id`, `Title`) VALUES
(1, 1, 'Floral Decoration'),
(2, 1, 'Tea Time'),
(3, 1, 'Cake'),
(4, 1, 'Dance Platform'),
(5, 1, 'Music'),
(6, 1, 'Flower Bouquet'),
(7, 1, 'Buffet'),
(8, 1, 'Photo Shooting'),
(9, 1, 'Fire Works'),
(10, 1, 'Al fresco Drinks'),
(11, 1, 'Wedding Pinata'),
(12, 1, 'Instant Photo Printing'),
(13, 1, 'Photo Booth'),
(14, 1, 'Party Popper'),
(15, 1, 'DJ'),
(16, 2, 'Floral Decoration'),
(17, 2, 'Tea Time'),
(18, 2, 'Cake'),
(19, 2, 'Dance Platform'),
(20, 2, 'Music'),
(21, 2, 'Flower Bouquet'),
(22, 2, 'Buffet'),
(23, 2, 'Photo Shooting'),
(24, 2, 'Wedding Pinata'),
(25, 2, 'Party Popper'),
(26, 2, 'Makeup Artist'),
(27, 1, 'Makeup Artist'),
(28, 1, 'Hair Dresser'),
(29, 2, 'Hair Dresser'),
(30, 3, 'Tea Time'),
(32, 3, 'Dance Platform'),
(33, 3, 'Piano Play'),
(34, 3, 'Flour Bouquet'),
(35, 3, 'Fire Works'),
(36, 3, 'Photo Shooting'),
(37, 3, 'Photo Booth'),
(38, 3, 'DJ'),
(39, 3, 'Dance Platform'),
(40, 3, 'Makeup Artist'),
(41, 3, 'Hair Dresser'),
(43, 3, 'Floral Decoration'),
(44, 3, 'Cake'),
(45, 4, 'Fancy Drinks'),
(46, 4, 'Fancy Buffet'),
(47, 4, 'Pegion Fly'),
(48, 4, 'Music'),
(49, 4, 'Music Band'),
(50, 4, 'Candel Decoration'),
(51, 4, 'Dance Platform'),
(52, 4, 'Hair Dresser'),
(53, 4, 'Makeup Artist'),
(54, 4, 'Flower Decoration'),
(55, 4, 'Fire Works'),
(56, 4, 'Party Popper'),
(57, 4, 'Flower Bouquet'),
(58, 4, 'Photo Shooting'),
(59, 4, 'Fantasy Decoration'),
(60, 4, 'Swan View'),
(61, 5, 'Light Decoration'),
(62, 5, 'Fire Work'),
(63, 5, 'Party Popper'),
(64, 5, 'Buffet'),
(65, 5, 'Starry Decoration'),
(66, 5, 'Makeup Artist'),
(67, 5, 'Hair Dresser'),
(68, 5, 'Blue Ocean hour'),
(69, 5, 'Photo Shooting'),
(70, 5, 'Photo Booth'),
(71, 5, 'Dance Platform'),
(72, 5, 'Flower Buquet'),
(73, 5, 'Floral Decoration'),
(74, 5, 'DJ'),
(75, 5, 'Piano Music'),
(76, 5, 'Music Band'),
(79, 2, 'Slow Dance');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `image_title` varchar(255) NOT NULL,
  `image_description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image_url`, `image_title`, `image_description`) VALUES
(1, 'image1.jpg', 'Lavender', '  Roses are red , Lavenders are blue..'),
(2, 'image2.jpg', 'Spring Day', ' In the spring field we shall meet again..'),
(4, 'image3.jpg', 'My world', 'You are my World');

-- --------------------------------------------------------

--
-- Table structure for table `liquidity`
--

CREATE TABLE `liquidity` (
  `booking_id` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `issue_date` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `liquidity`
--

INSERT INTO `liquidity` (`booking_id`, `price`, `issue_date`) VALUES
(2, 1100000, '2024-05-27'),
(8, 2100000, '2024-05-28'),
(13, 2100000, '2024-06-01'),
(14, 2000000, '2024-06-01');

-- --------------------------------------------------------

--
-- Table structure for table `wedding_category`
--

CREATE TABLE `wedding_category` (
  `ID` int(11) NOT NULL,
  `Type` varchar(120) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Image` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wedding_category`
--

INSERT INTO `wedding_category` (`ID`, `Type`, `Price`, `Image`) VALUES
(1, 'Premium', 2400000, 'premium.jpg'),
(2, 'Gold', 1200000, 'goldens.jpg'),
(3, 'Silver', 1100000, 'Silver.jpg'),
(4, 'Fantasy', 2100000, 'fantasy.jpg'),
(5, 'Starry Night', 2000000, 'night.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Email_2` (`Email`),
  ADD UNIQUE KEY `Phone` (`Phone`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`,`username`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `email_2` (`email`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`Features_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wedding_category`
--
ALTER TABLE `wedding_category`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `Features_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wedding_category`
--
ALTER TABLE `wedding_category`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
