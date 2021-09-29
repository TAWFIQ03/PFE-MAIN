-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2021 at 04:35 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mybarber`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `ID` int(30) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `signUpDate` datetime NOT NULL,
  `phone` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`ID`, `firstName`, `lastName`, `email`, `password`, `signUpDate`, `phone`) VALUES
(1, 'tawfiq', 'aharmim', 'aharmim@gmail.com', '12345', '2021-07-28 00:00:00', 522114856),
(2, 'abderahman', 'zahmidi', 'abderahmanzahmidi@gmail.com', '123456', '2021-08-14 14:33:35', 618181155),
(8, 'zahmidi', 'abderahman', 'zahmidiabderahmanzahmidi@gmail.com', '123456', '2021-08-14 12:53:12', 618181155),
(9, 'zahmidi', 'abderahman', 'tawfiq.1999@gmail.com', '123456', '2021-08-14 22:15:47', 618181155),
(10, 'tawfiq', 'aharmim', 'tawfiq@gmqil.com', '123456', '2021-08-28 17:32:01', 690212235),
(11, 'jinan', 'ahr', 'jinan@gmail.com', '1234', '2021-09-11 08:33:59', 633225498);

-- --------------------------------------------------------

--
-- Table structure for table `coiffeur`
--

CREATE TABLE `coiffeur` (
  `ID` int(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `img` varchar(255) NOT NULL,
  `poste` varchar(30) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `in` varchar(255) NOT NULL,
  `tw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coiffeur`
--

INSERT INTO `coiffeur` (`ID`, `Name`, `Lname`, `img`, `poste`, `Email`, `phone`, `fb`, `in`, `tw`) VALUES
(3, 'zahmidi', 'abderahman', 'zahmidi.jpg', 'barber pro', 'abderahma@gmail.com', '06000022222', 'https://web.facebook.com/abderahman.zahmidi.1', 'https://www.instagram.com/zahmidi/?hl=fr', 'https://twitter.com/abderahmanzahmi'),
(4, 'tawfiq', 'abderahman', 'zahmidi.jpg', 'barber pro', 'abderahma@gmail.com', '0633225588', 'https://web.facebook.com/abderahman.zahmidi.1', 'https://www.instagram.com/zahmidi/?hl=fr', 'https://twitter.com/abderahmanzahmi'),
(5, 'mkilo', 'abderahman', 'zahmidi.jpg', 'barber pro', 'abderahma@gmail.com', '0611489575', 'https://web.facebook.com/abderahman.zahmidi.1', 'https://www.instagram.com/zahmidi/?hl=fr', 'https://twitter.com/abderahmanzahmi');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'sszdz', 'tawfiq@gmqil.com', 690212235, ''),
(2, 'sszdz', 'tawfiq@gmqil.com', 690212235, ''),
(3, 'tawfiq', 'tawfiq.1999@gmail.com', 690212235, ''),
(4, 'ali', 'ali@hello.come', 666223355, ''),
(5, 'hafssa', 'hafssa@kill.com', 622145896, 'hello dear'),
(6, 'hafssa', 'hafssa@kill.com', 622145896, 'hello dear');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `id_coiffeur` int(11) DEFAULT NULL,
  `id_client` int(11) DEFAULT NULL,
  `id_service` int(11) DEFAULT NULL,
  `dateR` date NOT NULL,
  `status` varchar(30) NOT NULL,
  `date_client` date NOT NULL,
  `heure_client` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `id_coiffeur`, `id_client`, `id_service`, `dateR`, `status`, `date_client`, `heure_client`) VALUES
(17, 3, 1, 1, '2021-08-14', 'non', '2021-08-22', '23:55:00.000000'),
(20, 4, 9, 1, '2021-08-24', 'yes', '2021-08-12', '20:29:00.000000'),
(21, 5, 9, 1, '2021-08-24', 'non', '2021-08-14', '22:32:00.000000'),
(23, 3, 9, 1, '2021-08-28', 'non', '2021-08-05', '16:20:00.000000'),
(24, 3, 9, 1, '2021-08-28', 'yes', '2021-08-05', '16:20:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `ID` int(30) NOT NULL,
  `NAMESER` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`ID`, `NAMESER`) VALUES
(1, 'new'),
(2, 'new2'),
(3, 'new3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `coiffeur`
--
ALTER TABLE `coiffeur`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_coiffeur` (`id_coiffeur`),
  ADD KEY `id_client` (`id_client`),
  ADD KEY `id_service` (`id_service`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `coiffeur`
--
ALTER TABLE `coiffeur`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`id_coiffeur`) REFERENCES `coiffeur` (`ID`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`id_client`) REFERENCES `client` (`ID`),
  ADD CONSTRAINT `reservation_ibfk_3` FOREIGN KEY (`id_service`) REFERENCES `service` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
