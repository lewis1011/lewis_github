-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2024 at 02:02 PM
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
-- Database: `agroexchangetrade`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(10) NOT NULL,
  `Full_name` varchar(255) NOT NULL,
  `Position` varchar(25) NOT NULL,
  `Phone` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Full_name`, `Position`, `Phone`) VALUES
(1, 'Lewis Ngendahimana', 'CEO', 788997755),
(0, '', '', 0),
(0, '', '', 0),
(0, '', '', 0),
(0, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `buyertable`
--

CREATE TABLE `buyertable` (
  `ID` int(40) NOT NULL,
  `Full_name` varchar(60) NOT NULL,
  `Phone_number` varchar(60) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Message_user` varchar(100) NOT NULL,
  `Country` varchar(40) NOT NULL,
  `Province` varchar(40) NOT NULL,
  `District` varchar(40) NOT NULL,
  `Sectors` varchar(40) NOT NULL,
  `Cell` varchar(40) NOT NULL,
  `Village` varchar(40) NOT NULL,
  `categories` varchar(40) NOT NULL,
  `Passwords` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buyertable`
--

INSERT INTO `buyertable` (`ID`, `Full_name`, `Phone_number`, `Email`, `Message_user`, `Country`, `Province`, `District`, `Sectors`, `Cell`, `Village`, `categories`, `Passwords`) VALUES
(1, 'munyembugah ', '0784857700', 'munyembugajd@gmail.com', '         fghjkl;lkjhgfdfghjkl;   ', 'Rwanda', 'Amajyaruguru', 'Gicumbi', 'a', 'ddd', 'hjjxl;s;', 'Industry', '0'),
(2, 'munyembugah ', '0784857700', 'munyembugajd@gmail.com', '         fghjkl;lkjhgfdfghjkl;   ', 'Rwanda', 'Amajyaruguru', 'Gicumbi', 'a', 'ddd', 'hjjxl;s;', 'Group farmer', '0'),
(3, 'munyembuga ', '0784857700', 'munyembugajdd@gmail.com', '          wefghjkjhgfdsasdfgh  ', 'Rwanda', 'Amajyaruguru', 'Gicumbi', 'dd', 'a', 'dd', 'Industry', '0'),
(4, 'munyembuga ', '0784857700', 'munyembugajdd@gmail.com', '          wefghjkjhgfdsasdfgh  ', 'Rwanda', 'Amajyaruguru', 'Gicumbi', 'dd', 'a', 'dd', 'Industry', '0'),
(5, 'munyembuga ', '0784857700', 'munyembugajdd@gmail.com', '          wefghjkjhgfdsasdfgh  ', 'Rwanda', 'Amajyaruguru', 'Gicumbi', 'dd', 'a', 'dd', 'Industry', 'Munye'),
(6, 'munyembuga ', '0784857700', 'munyembugajdd@gmail.com', '          wefghjkjhgfdsasdfgh  ', 'Rwanda', 'Amajyaruguru', 'Gicumbi', 'dd', 'a', 'dd', 'Industry', ''),
(7, 'munyembuga ', '0784857700', 'munyembugajdd@gmail.com', '          wefghjkjhgfdsasdfgh  ', 'Rwanda', 'Amajyaruguru', 'Gicumbi', 'dd', 'a', 'dd', 'Industry', ''),
(8, 'munyembuga ', '0784857700', 'munyembugajd@gmail.com', '          wertyueretyuiertyu  ', 'Rwanda', 'Amajyaruguru', 'dddddddddd', 'ss', 'ggjsllsm', 'munyembugajd@gmail.com', 'Industry', 'mu'),
(9, 'munyembuga ', '0784857700', 'munyembugajd@gmail.com', '          wertyueretyuiertyu  ', 'Rwanda', 'Amajyaruguru', 'dddddddddd', 'ss', 'ggjsllsm', 'munyembugajd@gmail.com', 'Industry', ''),
(10, 'munyembuga ', '0784857700', 'munyembugajd@gmail.com', '          wertyueretyuiertyu  ', 'Rwanda', 'Amajyaruguru', 'dddddddddd', 'ss', 'ggjsllsm', 'munyembugajd@gmail.com', 'Industry', ''),
(11, 'munyembuga ', '0784857700', 'munyembugajd@gmail.com', '          wertyueretyuiertyu  ', 'Rwanda', 'Amajyaruguru', 'dddddddddd', 'ss', 'ggjsllsm', 'munyembugajd@gmail.com', 'Industry', '');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `buyer_name` varchar(255) NOT NULL,
  `selected_crop` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `crop_image_path` varchar(255) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `buyer_name`, `selected_crop`, `quantity`, `price`, `crop_image_path`, `order_date`) VALUES
(1, 'rururru', 'crop2', 49, 30000.00, 'uploads/', '2024-01-04 09:53:40'),
(2, 'rururru', 'crop2', 49, 30000.00, 'uploads/', '2024-01-04 09:54:31'),
(3, 'Lewis', 'crop4', 20, 10000.00, 'uploads/Screenshot 2023-07-06 105143.png', '2024-01-04 10:05:06'),
(4, 'Lewis', 'crop4', 20, 10000.00, 'uploads/Screenshot 2023-07-06 105143.png', '2024-01-04 10:09:04'),
(5, 'Lewis', 'crop4', 20, 10000.00, 'uploads/ibigori.jpg', '2024-01-04 10:09:36');

-- --------------------------------------------------------

--
-- Table structure for table `ordertable`
--

CREATE TABLE `ordertable` (
  `Full_name` varchar(80) NOT NULL,
  `Categories` varchar(50) NOT NULL,
  `Name_crops` varchar(50) NOT NULL,
  `Quantity` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `id` int(10) NOT NULL,
  `Full_name` varchar(50) NOT NULL,
  `Phone_number` varchar(15) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Message_user` text NOT NULL,
  `Country` text NOT NULL,
  `Province` text NOT NULL,
  `District` text NOT NULL,
  `Sector` varchar(30) NOT NULL,
  `Cell` varchar(30) NOT NULL,
  `Village` varchar(30) NOT NULL,
  `categories` varchar(40) NOT NULL,
  `Passwords` varchar(30) NOT NULL,
  `photo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`id`, `Full_name`, `Phone_number`, `Email`, `Message_user`, `Country`, `Province`, `District`, `Sector`, `Cell`, `Village`, `categories`, `Passwords`, `photo`) VALUES
(6, 'munyembuga ', '0784857700', 'munyembugajd@gmail.com', '     dfghjkl;lkjhgfdsdfghjkl       ', 'Rwanda', 'Amajyaruguru', 'Gicumbi', 'd', 'ss', 'Cyo', '', '', ''),
(7, 'munyembuga ', '0784857700', 'munyembugajd@gmail.com', '     dfghjkl;lkjhgfdsdfghjkl       ', 'Rwanda', 'Amajyaruguru', 'Gicumbi', 'd', 'ss', 'Cyo', '', '', ''),
(8, 'munyembuga ', '0784857700', 'munyembugajd@gmail.com', '     dfghjkl;lkjhgfdsdfghjkl       ', 'Rwanda', 'Amajyaruguru', 'Gicumbi', 'd', 'ss', 'Cyo', '', 'uu', ''),
(9, 'munyembuga ', '0784857700', 'munyembugajd@gmail.com', '     dfghjkl;lkjhgfdsdfghjkl       ', 'Rwanda', 'Amajyaruguru', 'Gicumbi', 'd', 'ss', 'Cyo', '', 'kai', ''),
(10, 'munyembuga ', '0784857700', 'munyembugajd@gmail.com', '     dfghjkl;lkjhgfdsdfghjkl       ', 'Rwanda', 'Amajyaruguru', 'Gicumbi', 'd', 'ss', 'Cyo', '', 'kai', ''),
(11, 'munyembuga ', '0784857700', 'munyembugajd@gmail.com', '     dfghjkl;lkjhgfdsdfghjkl       ', 'Rwanda', 'Amajyaruguru', 'Gicumbi', 'd', 'ss', 'Cyo', '', '', ''),
(12, 'munyembugah ', '0784857700', 'munyembugajd@gmail.com', '         fghjkl;lkjhgfdfghjkl;   ', 'Rwanda', 'Amajyaruguru', 'Gicumbi', 'a', 'ddd', 'Cooperative', 'hjjxl;s;', 'mmm', ''),
(13, 'munyembugah ', '0784857700', 'munyembugajd@gmail.com', '         fghjkl;lkjhgfdfghjkl;   ', 'Rwanda', 'Amajyaruguru', 'Gicumbi', 'a', 'ddd', 'hjjxl;s;', 'Group farmer', 'dfghj', ''),
(14, 'munyembugah ', '0784857700', 'munyembugajd@gmail.com', '         fghjkl;lkjhgfdfghjkl;   ', 'Rwanda', 'Amajyaruguru', 'Gicumbi', 'a', 'ddd', 'hjjxl;s;', 'self farme', 'gbhjkl', ''),
(15, 'munyembugah ', '0784857700', 'munyembugajd@gmail.com', '         fghjkl;lkjhgfdfghjkl;   ', 'Rwanda', 'Amajyaruguru', 'Gicumbi', 'a', 'ddd', 'hjjxl;s;', 'self farme', 'fghjk', ''),
(16, 'munyembugah ', '0784857700', 'munyembugajd@gmail.com', '         fghjkl;lkjhgfdfghjkl;   ', 'Rwanda', 'Amajyaruguru', 'Gicumbi', 'a', 'ddd', 'hjjxl;s;', 'self farme', 'ghjk', ''),
(17, 'munyembugah ', '0784857700', 'munyembugajd@gmail.com', '         fghjkl;lkjhgfdfghjkl;   ', 'Rwanda', 'Amajyaruguru', 'Gicumbi', 'a', 'ddd', 'hjjxl;s;', 'self farme', 'tre', ''),
(18, 'munyembugah ', '0784857700', 'munyembugajd@gmail.com', '         fghjkl;lkjhgfdfghjkl;   ', 'Rwanda', 'Amajyaruguru', 'Gicumbi', 'a', 'ddd', 'hjjxl;s;', 'self farme', 'ghj', ''),
(19, 'munyembugah ', '0784857700', 'munyembugajd@gmail.com', '         fghjkl;lkjhgfdfghjkl;   ', 'Rwanda', 'Amajyaruguru', 'Gicumbi', 'a', 'ddd', 'hjjxl;s;', 'self farme', 'fghjk', ''),
(20, 'munyembugah ', '0784857700', 'munyembugajd@gmail.com', '         fghjkl;lkjhgfdfghjkl;   ', 'Rwanda', 'Amajyaruguru', 'Gicumbi', 'a', 'ddd', 'hjjxl;s;', 'self farme', 'dfghj', ''),
(21, 'munyembugah ', '0784857700', 'munyembugajd@gmail.com', '         fghjkl;lkjhgfdfghjkl;   ', 'Rwanda', 'Amajyaruguru', 'Gicumbi', 'a', 'ddd', 'hjjxl;s;', 'self farme', 'fghj', ''),
(22, 'munyembuga', '0784857700', 'munyembugajd2@gmail.com', '            ertyuiuytre', 'Rwanda', 'ggg', 'ssss', 'ffghjkl', 'ddd', 'hjjxl;s;', 'Cooperative', 'mu', ''),
(23, 'Lewis N', '0788999000', 'lewisngendahimana@yahoo.fr', '            LLLLhxfujdgiugfsidfsdbuigsdfsodioysdo', 'Rwanda', 'Kigali', 'Gasabo', 'Nyarugunga', 'Rukiri', 'Remera', 'Cooperative', '00pp', ''),
(24, 'Lewis N', '0788999000', 'lewisngendahimana@yahoo.fr', '            qmhofahspdfiohadofhaUDFHSPID', 'Rwanda', 'Kigali', 'Gasabo', 'Nyarugunga', 'Rukiri', 'Remera', 'Cooperative', '00PP', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyertable`
--
ALTER TABLE `buyertable`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyertable`
--
ALTER TABLE `buyertable`
  MODIFY `ID` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `useraccount`
--
ALTER TABLE `useraccount`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
