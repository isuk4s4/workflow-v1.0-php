-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2023 at 04:32 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workflow`
--

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE `img` (
  `taskId` varchar(500) NOT NULL,
  `location` varchar(500) NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `img`
--

INSERT INTO `img` (`taskId`, `location`, `id`) VALUES
('a?8?,څ', 'images/Untitled.png', 8),
('', 'images/Untitled.png', 9),
('0c27175a269984', 'images/Untitled.png', 10),
('8f2732cb33524b', 'images/Untitled.png', 11),
('645f76bf4ff3c', 'images/Untitled.png', 12);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `name` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `type` varchar(500) NOT NULL,
  `statusTask` varchar(200) NOT NULL,
  `statusId` text NOT NULL,
  `location` text NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`name`, `description`, `type`, `statusTask`, `statusId`, `location`, `id`) VALUES
('ssssss', 'ss', 'Web', 'Done', '645fb991c4ef1', 'images/Screenshot (4).png', 24),
('Web', '', '', '', '645fb991cdc0d', 'images/', 25),
('', '', '', '', '645fb991d513c', 'images/', 26),
('', '', '', '', '645fb991dc2aa', 'images/', 27),
('', '', '', '', '645fb991e285c', 'images/', 28),
('', '', '', '', '645fb991e7ad7', 'images/', 29),
('', '', '', '', '645fb991ecfc3', 'images/', 30),
('', '', '', '', '645fb991f219f', 'images/', 31),
('', '', '', '', '645fb99202e68', 'images/', 32),
('', '', '', '', '645fb9920846a', 'images/', 33),
('', '', '', '', '645fb9920d90d', 'images/', 34),
('', '', '', '', '645fb99212c3c', 'images/', 35),
('', '', '', '', '645fb992175be', 'images/', 36),
('', '', '', '', '645fb9921c639', 'images/', 37),
('', '', '', '', '645fb99220eb6', 'images/', 38),
('', '', '', '', '645fb9922612a', 'images/', 39),
('', '', '', '', '645fb9922aaa9', 'images/', 40),
('', '', '', '', '645fb9922f7b5', 'images/', 41),
('', '', '', '', '645fb992344b7', 'images/', 42),
('', '', '', '', '645fb99239428', 'images/', 43),
('', '', '', '', '645fb9923dd11', 'images/', 44),
('', '', '', '', '645fb992426a2', 'images/', 45),
('', '', '', '', '645fb99247769', 'images/', 46),
('', '', '', '', '645fb9924cde4', 'images/', 47),
('', '', '', '', '645fb9925173e', 'images/', 48),
('', '', '', '', '645fb99257008', 'images/', 49),
('', '', '', '', '645fb9925b87a', 'images/', 50),
('', '', '', '', '645fb99260c36', 'images/', 51),
('', '', '', '', '645fb992650cc', 'images/', 52),
('', '', '', '', '645fb992696c3', 'images/', 53),
('', '', '', '', '645fb9926ebac', 'images/', 54),
('', '', '', '', '645fb99273b1e', 'images/', 55),
('', '', '', '', '645fb992783bb', 'images/', 56),
('', '', '', '', '645fb9927d3ac', 'images/', 57),
('', '', '', '', '645fb99281c8d', 'images/', 58),
('', '', '', '', '645fb99286815', 'images/', 59),
('', '', '', '', '645fb9928b85d', 'images/', 60),
('', '', '', '', '645fb992b0f86', 'images/', 61),
('', '', '', '', '645fb992b6c00', 'images/', 62),
('', '', '', '', '645fb992bbcf1', 'images/', 63),
('', '', '', '', '645fb992c08b0', 'images/', 64),
('', '', '', '', '645fb992c684b', 'images/', 65),
('', '', '', '', '645fb992ccef4', 'images/', 66),
('', '', '', '', '645fb992d40a2', 'images/', 67),
('', '', '', '', '645fb992dad9c', 'images/', 68),
('', '', '', '', '645fb992df164', 'images/', 69),
('', '', '', '', '645fb992e3d2f', 'images/', 70),
('', '', '', '', '645fb992e8596', 'images/', 71),
('', '', '', '', '645fb992ed0e3', 'images/', 72),
('', '', '', '', '645fb992f1bf4', 'images/', 73),
('', '', '', '', '645fb993029d6', 'images/', 74),
('', '', '', '', '645fb99306ec8', 'images/', 75),
('', '', '', '', '645fb9930bfcf', 'images/', 76),
('', '', '', '', '645fb9931079d', 'images/', 77),
('', '', '', '', '645fb99315cdb', 'images/', 78),
('', '', '', '', '645fb9931a553', 'images/', 79),
('', '', '', '', '645fb9931fae4', 'images/', 80),
('', '', '', '', '645fb99324033', 'images/', 81),
('', '', '', '', '645fb993294d0', 'images/', 82),
('', '', '', '', '645fb9932d928', 'images/', 83),
('', '', '', '', '645fb99331ec7', 'images/', 84),
('', '', '', '', '645fb99336da8', 'images/', 85),
('', '', '', '', '645fb9933b3d1', 'images/', 86),
('', '', '', '', '645fb99340051', 'images/', 87),
('', '', '', '', '645fb99344280', 'images/', 88),
('', '', '', '', '645fb993488f1', 'images/', 89),
('', '', '', '', '645fb9934d076', 'images/', 90),
('', '', '', '', '645fb99351948', 'images/', 91),
('', '', '', '', '645fb99356763', 'images/', 92),
('', '', '', '', '645fb9935aeb1', 'images/', 93),
('', '', '', '', '645fb99360911', 'images/', 94),
('', '', '', '', '645fb99364da9', 'images/', 95),
('', '', '', '', '645fb99369b4e', 'images/', 96),
('', '', '', '', '645fb9936e421', 'images/', 97),
('', '', '', '', '645fb9937297f', 'images/', 98),
('', '', '', '', '645fb99377ab4', 'images/', 99),
('', '', '', '', '645fb9937bddc', 'images/', 100),
('', '', '', '', '645fb99380b42', 'images/', 101),
('', '', '', '', '645fb993859e9', 'images/', 102),
('', '', '', '', '645fb9938a4c2', 'images/', 103),
('', '', '', '', '645fb9938ea18', 'images/', 104),
('', '', '', '', '645fb99393ae3', 'images/', 105),
('', '', '', '', '645fb9939b4e2', 'images/', 106),
('', '', '', '', '645fb9939ffd8', 'images/', 107),
('', '', '', '', '645fb993a5824', 'images/', 108),
('', '', '', '', '645fb993aa15d', 'images/', 109),
('', '', '', '', '645fb993aebaa', 'images/', 110),
('', '', '', '', '645fb993b6a35', 'images/', 111),
('', '', '', '', '645fb993be6e5', 'images/', 112),
('', '', '', '', '645fb993c7b74', 'images/', 113),
('', '', '', '', '645fb993d12fb', 'images/', 114),
('', '', '', '', '645fb993da732', 'images/', 115),
('', '', '', '', '645fb993e4829', 'images/', 116),
('', '', '', '', '645fb993f2bd6', 'images/', 117),
('', '', '', '', '645fb99406995', 'images/', 118),
('', '', '', '', '645fb9940f7fa', 'images/', 119),
('', '', '', '', '645fb99419da4', 'images/', 120),
('', '', '', '', '645fb994253f7', 'images/', 121),
('', '', '', '', '645fb9942daae', 'images/', 122),
('', '', '', '', '645fb99433f05', 'images/', 123),
('', '', '', '', '645fb9943866e', 'images/', 124),
('', '', '', '', '645fb9943e4a1', 'images/', 125),
('', '', '', '', '645fb99442b59', 'images/', 126),
('', '', '', '', '645fb99447471', 'images/', 127),
('', '', '', '', '645fb9944c161', 'images/', 128),
('', '', '', '', '645fb99450a58', 'images/', 129),
('', '', '', '', '645fb994563e5', 'images/', 130),
('', '', '', '', '645fb9945ca0b', 'images/', 131),
('', '', '', '', '645fb994616b1', 'images/', 132),
('', '', '', '', '645fb994678c5', 'images/', 133),
('', '', '', '', '645fb9946cadd', 'images/', 134),
('', '', '', '', '645fb99471b88', 'images/', 135),
('', '', '', '', '645fb994778a4', 'images/', 136),
('', '', '', '', '645fb9947c89e', 'images/', 137),
('', '', '', '', '645fb99482415', 'images/', 138),
('', '', '', '', '645fb994886cd', 'images/', 139),
('', '', '', '', '645fb9948d7c8', 'images/', 140),
('', '', '', '', '645fb994922c7', 'images/', 141),
('', '', '', '', '645fb99497333', 'images/', 142),
('', '', '', '', '645fb9949be57', 'images/', 143),
('', '', '', '', '645fb994a0a8f', 'images/', 144),
('', '', '', '', '645fb994a5bae', 'images/', 145),
('', '', '', '', '645fb994aa713', 'images/', 146),
('', '', '', '', '645fb994aefbe', 'images/', 147),
('', '', '', '', '645fb994b36f7', 'images/', 148),
('', '', '', '', '645fb994b9912', 'images/', 149),
('', '', '', '', '645fb994bed05', 'images/', 150),
('', '', '', '', '645fb994c347a', 'images/', 151),
('', '', '', '', '645fb994c7e87', 'images/', 152),
('', '', '', '', '645fb994cc814', 'images/', 153),
('', '', '', '', '645fb994d16cd', 'images/', 154),
('', '', '', '', '645fb994d5bd9', 'images/', 155),
('', '', '', '', '645fb994da0bf', 'images/', 156),
('', '', '', '', '645fb9c566e1d', 'images/', 157);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `img`
--
ALTER TABLE `img`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
