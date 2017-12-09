-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2017 at 02:57 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `patient_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `consultation`
--

CREATE TABLE `consultation` (
  `consult_id` int(20) NOT NULL,
  `disease` varchar(20) NOT NULL,
  `drug` varchar(200) NOT NULL,
  `drug2` varchar(100) NOT NULL,
  `drug3` varchar(100) NOT NULL,
  `drug4` varchar(100) NOT NULL,
  `drug5` varchar(100) NOT NULL,
  `id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consultation`
--

INSERT INTO `consultation` (`consult_id`, `disease`, `drug`, `drug2`, `drug3`, `drug4`, `drug5`, `id`) VALUES
(1, 'keracunan makanan', 'antibiotik', '', '', '', '', 32),
(6, 'sukar bernafas', 'lioresal', 'DrugName', '', '', '', 1),
(7, 'fever', 'Paracetamol', 'ubat batuk', '', '', '', 32),
(10, 'sukar bernafas', 'alavert', 'DrugName', '', '', '', 1),
(12, 'sakit perut', 'ALAVERT', '', '', '', '', 1),
(13, 'deman,sakit perut', 'LIORESAL', '', '', '', '', 32),
(14, 'deman dan cirit biri', 'ALAVERT', '', '', '', '', 1),
(15, 'sakit perut', 'CeleXA', '', '', '', '', 1),
(17, 'sembelit dan sakit k', 'antibiotik', '', '', '', '', 36),
(18, 'deman dan cirit biri', 'panadol', 'ubat batuk', '', '', '', 36),
(19, 'sakit tangan', 'abcd', 'panadol', 'ijue', 'antibiotik', 'batuk', 32);

-- --------------------------------------------------------

--
-- Table structure for table `drug`
--

CREATE TABLE `drug` (
  `drug_id` varchar(100) NOT NULL,
  `drug_name` varchar(100) NOT NULL,
  `drug_description` varchar(100) NOT NULL,
  `price_per_unit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drug`
--

INSERT INTO `drug` (`drug_id`, `drug_name`, `drug_description`, `price_per_unit`) VALUES
('M0002', 'ACETYLCYSTEINE', 'relieve cough', '5.00'),
('M0003', 'BISACODLY', 'constipation', '7.00'),
('M0004', 'CHLORAMPHENICOL', 'red eyes abd bacterial infections', '8.00'),
('M0005', 'TENORMIN', 'treat chest pain and high blood pressure', '10.00'),
('M0006', 'AUGMENTIN', 'antibiotic,fights bacteria in the body', '9.00'),
('M0007', 'LIORESAL', 'muscle relaxer and an antispactic agent', '15.00'),
('M0008', 'ALAVERT', 'reduces the effect of sneezing, itching,watery eyes and runny nose', '16.00'),
('M0009', 'CeleXA', 'used to treat depression', '20.00'),
('M0010', 'Diflucan', 'antifungal medicine', '8.50'),
('M0011', 'Baycadron', 'treatn allergic disorders, skin conditions and breathing disorders', '25.00');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `consult_id` int(20) NOT NULL,
  `MatricNo` varchar(20) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `IC_num` varchar(20) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Faculty` varchar(20) NOT NULL,
  `Tel_No` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`consult_id`, `MatricNo`, `FullName`, `IC_num`, `Gender`, `Faculty`, `Tel_No`, `status`) VALUES
(18, 'B031610030', 'WAN MOHD IZWAN BIN WAN KAMAL', '930910021173', 'Male', 'FTK', '0111467893', 'treat'),
(17, 'B031610044', 'NUR SABRINA BINTI AMIR', '920111042966', 'female', 'ftmk', '0111278569', ' treat'),
(13, 'B031610053', 'ABDUL MUHAIMIN BIN ZAKI', '950606061237', 'Male', 'FPTT', '0146895687', ' treat'),
(7, 'B031610213', 'MOHD AMIRUL HAKIM BIN HAMID', '910414036716', 'Male', 'FKM', '0147953092', 'treat'),
(15, 'B031610217', 'MOHAMAD MAHIR BIN ALADIN', '920830063481', 'male', 'fkm', '0172278465', 'treat'),
(1, 'B031610313', 'NURUL ANITA BINTI SITAM', '950228065812', 'Female', 'FKEKK', '0111873092', 'treat'),
(6, 'B031610346', 'SYAFIQ AZIZI BINTI ROZI', '970126035613', 'Male', 'FKE', '0137758964', 'treat'),
(4, 'B031610433', 'NUR JAMSYEIQA BINTI JAMALUDDIN', '940918016664', 'Female', 'FTMK', '0111873092', 'not treat'),
(2, 'B031610449', 'NURUL FARAHIN BINTI AZMI', '950917016290', 'Female', 'FTMK', '0142755900', 'not treat'),
(10, 'B031612148', 'MOHD ASYRAN BIN SUHAILI', '920314048129', 'Male', 'FTK', '0135872906', 'not treat'),
(12, 'B031613010', 'NORASYIKIN BINTI MOHD KHAIRI', '950119046218', 'Female', 'FKE', '0178894572', ' treat'),
(20, 'B031614212', 'FATIN SYAHIRAH BINTI SAADON', '950228063628', 'female', 'fptt', '0111167450', 'not treat'),
(14, 'B031614444', 'MUHAMMAD AMIN BIN MAZLAN', '950827036879', 'male', 'fke', '0169623971', 'treat'),
(19, 'B031614567', 'AZRA SYAFIQA BINTI MURAD', '920913027834', 'female', 'fke', '0111684326', ' treat');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `drug_name` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `drug_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `user_name` text NOT NULL,
  `password` varchar(20) NOT NULL,
  `Role` varchar(30) NOT NULL,
  `email` text NOT NULL,
  `phone_no` varchar(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `password`, `Role`, `email`, `phone_no`, `name`) VALUES
(1, 'admin', 'admin123', 'admin', 'admin@gmail.com', '0111234567', 'admin'),
(32, 'Kina', 'kina123', 'doctor', 'kina@gmail.com', '0115682390', 'SYARKINA BINTI ARJULINAS'),
(33, 'Fatin', 'fatin123', 'nurse', 'fatin@gmail.com', '0116756893', 'FATIN NAJWA BINTI NAZRI'),
(34, 'Syafiqah', '123', 'doctor', 'syafiqah@gmail.com', '0116892367', 'AMIRA SYAFIQAH BINTI SHAMSUDIN'),
(35, 'Syamiza', '123', 'nurse', 'syamiza@gmail.com', '0111343434', 'NUR SYAMIZA BINTI ZAMRI'),
(36, 'Amirul', 'amirul123', 'doctor', 'amirul@gmail.com', '0116345254', 'AMIRUL HAKIM BIN AMIN'),
(37, 'Asmidar', 'asmidar123', 'nurse', 'asmidar@gmail.com', '0194598209', 'NUR ASMIDAR BINTI RAMZAN'),
(38, 'Nana', 'nana123', 'doctor', 'nana@gmail.com', '0136756879', 'NANA NAZIRA BINTI ISMAIL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consultation`
--
ALTER TABLE `consultation`
  ADD PRIMARY KEY (`consult_id`);

--
-- Indexes for table `drug`
--
ALTER TABLE `drug`
  ADD PRIMARY KEY (`drug_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`MatricNo`),
  ADD UNIQUE KEY `consult_id` (`consult_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `consult_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
