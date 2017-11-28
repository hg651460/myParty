-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2017 at 05:55 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myparty`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerId` char(3) NOT NULL,
  `email` varchar(20) NOT NULL,
  `CustomerFname` varchar(15) NOT NULL,
  `CustomerLname` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerId`, `email`, `CustomerFname`, `CustomerLname`) VALUES
('c1', 'ab12@gmail.com', 'Aaron', 'Bryn'),
('c10', 'rl21@gmail.com', 'Rachel', 'Lobbs'),
('c11', 'th22@gmail.com', 'Theadore', 'Hackle'),
('c12', 'as23@gmail.com', 'Abby', 'Smith'),
('c13', 'hs24@gmail.com', 'Harry', 'Styles'),
('c14', 'bk25@gmail.com', 'Beyonce', 'Knowles'),
('c15', 'bc26@gmail.com', 'Brandon', 'Carter'),
('c16', 'st27@gmail.com', 'Sherry', 'Trifol'),
('c17', 'mo28@gmail.com', 'Michelle', 'Obama'),
('c18', 'jc29@gmail.com', 'Jermaine', 'Cole'),
('c19', 'kw30@gmail.com', 'Kanye', 'West'),
('c2', 'ac13@gmail.com', 'Abby', 'Craw'),
('c20', 'jc31@gmail.com', 'Jordan', 'Crawley'),
('c21', 'es32@gmail.com', 'Edward', 'Sherean'),
('c3', 'cd14@gmail.com', 'Casey', 'Dryer'),
('c4', 'fh15@gmail.com', 'Frank', 'Hobbs'),
('c5', 'kw16@gmail.com', 'Kerry', 'White'),
('c6', 'ue17@gmail.com', 'Uni', 'Eugene'),
('c7', 'og18@gmail.com', 'Olivia', 'Groundworth'),
('c8', 'jk19@gmail.com', 'Jerry', 'Krewl'),
('c9', 'dw20@gmail.com', 'Donald', 'White');

-- --------------------------------------------------------

--
-- Table structure for table `customer_phone`
--

CREATE TABLE `customer_phone` (
  `Phone` int(11) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_phone`
--

INSERT INTO `customer_phone` (`Phone`, `email`) VALUES
(2147483647, 'ab12@gmail.com'),
(2147483647, 'ac13@gmail.com'),
(2147483647, 'as23@gmail.com'),
(2147483647, 'bc26@gmail.com'),
(2147483647, 'bk25@gmail.com'),
(2147483647, 'cd14@gmail.com'),
(2147483647, 'dw20@gmail.com'),
(2147483647, 'es32@gmail.com'),
(2147483647, 'fh15@gmail.com'),
(2147483647, 'hs24@gmail.com'),
(2147483647, 'jc29@gmail.com'),
(2147483647, 'jc31@gmail.com'),
(2147483647, 'jk19@gmail.com'),
(2147483647, 'kw16@gmail.com'),
(2147483647, 'kw30@gmail.com'),
(2147483647, 'mo28@gmail.com'),
(2147483647, 'og18@gmail.com'),
(2147483647, 'rl21@gmail.com'),
(2147483647, 'st27@gmail.com'),
(2147483647, 'th22@gmail.com'),
(2147483647, 'ue17@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `logininfo`
--

CREATE TABLE `logininfo` (
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `CustomerId` char(3) DEFAULT NULL,
  `managerID` char(3) DEFAULT NULL,
  `PlannerID` char(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logininfo`
--

INSERT INTO `logininfo` (`password`, `email`, `CustomerId`, `managerID`, `PlannerID`) VALUES
('bet', 'ab12@gmail.com', 'C1', NULL, NULL),
('act', 'ac13@gmail.com', 'C2', NULL, NULL),
('pink', 'as23@gmail.com', 'c12', NULL, NULL),
('hit', 'bc26@gmail.com', 'c15', NULL, NULL),
('fit', 'bk25@gmail.com', 'c14', NULL, NULL),
('let', 'cd14@gmail.com', 'C3', NULL, NULL),
('m1234', 'cf1@myparty.com', NULL, 'M1', NULL),
('blue', 'dw20@gmail.com', 'c9', NULL, NULL),
('her', 'es32@gmail.com', NULL, NULL, 'Pl3'),
('set', 'fh15@gmail.com', 'C4', NULL, NULL),
('green', 'hs24@gmail.com', 'c13', NULL, NULL),
('look', 'jc29@gmail.com', 'c18', NULL, NULL),
('crazy', 'jc31@gmail.com', 'c20', NULL, NULL),
('purple', 'jk19@gmail.com', 'c8', NULL, NULL),
('met', 'kw16@gmail.com', 'C5', NULL, NULL),
('cook', 'kw30@gmail.com', 'c19', NULL, NULL),
('due', 'mc@myparty.com', NULL, NULL, 'Pl2'),
('book', 'mo28@gmail.com', 'c17', NULL, NULL),
('yellow', 'og18@gmail.com', 'c7', NULL, NULL),
('azul', 'rl21@gmail.com', 'c10', NULL, NULL),
('hue', 'so@myparty.com', NULL, NULL, 'Pl4'),
('shock', 'st27@gmail.com', 'c16', NULL, NULL),
('meet', 'tc@myparty.com', NULL, NULL, 'Pl1'),
('red', 'th22@gmail.com', 'c11', NULL, NULL),
('black', 'ue17@gmail.com', 'c6', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `managerID` char(3) NOT NULL,
  `ManagerFName` varchar(15) NOT NULL,
  `ManagerLName` varchar(15) NOT NULL,
  `ManagerPhone` int(11) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`managerID`, `ManagerFName`, `ManagerLName`, `ManagerPhone`, `email`) VALUES
('M1', 'Catherine', 'Franklin', 2147483647, 'cf1@myparty.com');

-- --------------------------------------------------------

--
-- Table structure for table `party`
--

CREATE TABLE `party` (
  `PartyID` char(4) NOT NULL,
  `NoOfGuests` int(11) NOT NULL,
  `DateTime` datetime NOT NULL,
  `CustomerId` varchar(20) NOT NULL,
  `PlannerID` char(3) NOT NULL,
  `PlaceID` char(3) NOT NULL,
  `TypeID` char(3) NOT NULL,
  `ThemeID` char(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `party`
--

INSERT INTO `party` (`PartyID`, `NoOfGuests`, `DateTime`, `CustomerId`, `PlannerID`, `PlaceID`, `TypeID`, `ThemeID`) VALUES
('PA1', 15, '2017-12-01 07:00:00', 'c1', 'PL1', 'P1', 't1', 'th1'),
('PA10', 30, '2018-01-04 01:00:00', 'c10', 'PL2', 'P3', 't8', 'th1'),
('PA11', 400, '2018-01-06 06:30:00', 'c11', 'PL3', 'P13', 't18', 'th2'),
('PA12', 60, '2018-03-16 07:00:00', 'c12', 'PL4', 'P11', 't19', 'th3'),
('PA13', 70, '2014-12-20 07:00:00', 'c13', 'PL1', 'P15', 't13', 'th4'),
('PA14', 150, '2018-03-11 07:00:00', 'c14', 'PL2', 'P12', 't20', 'th5'),
('PA15', 75, '2018-10-08 04:15:00', 'c15', 'PL3', 'P20', 't14', 'th6'),
('PA16', 45, '2018-02-25 07:00:00', 'c16', 'PL4', 'P17', 't13', 'th7'),
('PA17', 500, '2018-01-30 07:00:00', 'c17', 'PL1', 'P6', 't9', 'th8'),
('PA18', 530, '2018-08-31 07:00:00', 'c18', 'PL2', 'P15', 't15', 'th9'),
('PA19', 80, '2017-12-10 07:00:00', 'c19', 'Pl3', 'P17', 't19', 'th1'),
('PA2', 350, '2017-12-02 03:00:00', 'c2', 'PL2', 'P7', 't11', 'th1'),
('PA20', 20, '2018-10-05 07:00:00', 'c20', 'PL4', 'P5', 't12', 'th1'),
('PA21', 5, '2018-06-05 07:45:00', 'c21', 'PL1', 'P1', 't16', 'th5'),
('PA3', 500, '2018-01-05 07:00:00', 'c3', 'PL3', 'P15', 't10', 'th1'),
('PA4', 100, '2018-04-05 07:00:00', 'c4', 'PL4', 'P2', 't20', 'th1'),
('PA5', 30, '2018-06-04 03:30:00', 'c5', 'PL1', 'P4', 't12', 'th1'),
('PA6', 200, '2018-01-06 04:15:00', 'c6', 'PL2', 'P10', 't5', 'th2'),
('PA7', 40, '2018-09-12 07:00:00', 'c7', 'PL3', 'P17', 't3', 'th1'),
('PA8', 50, '2018-10-10 07:00:00', 'c8', 'PL4', 'P20', 't2', 'th1'),
('PA9', 100, '2018-02-05 07:00:00', 'c9', 'PL1', 'P9', 't6', 'th1');

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `PlaceID` char(3) NOT NULL,
  `address` varchar(20) NOT NULL,
  `PlaceName` varchar(15) NOT NULL,
  `City` char(15) NOT NULL,
  `max_capacity` int(11) NOT NULL,
  `min_capacity` int(11) NOT NULL,
  `costByPerson` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`PlaceID`, `address`, `PlaceName`, `City`, `max_capacity`, `min_capacity`, `costByPerson`) VALUES
('P1', '4 Crystal Court', 'House', 'Sicklerville', 15, 5, 40),
('P10', '1324 Locust Street', 'Arts Ballroom', 'Philadelphia', 400, 200, 100),
('P11', '2715 E Allegheny Ave', 'Lithuanian Musi', 'Philadelphia', 250, 45, 40),
('P12', '4809 Germantown Aven', 'The Victorian B', 'Philadelphia', 300, 85, 1250),
('P13', '399 Monmouth St', 'Windsor Ballroo', 'Hightstown', 400, 55, 60),
('P14', '48 Country Club Road', 'Spring Ford Cou', 'Royersford', 240, 75, 10),
('P15', '401 S. Columbus Blvd', 'Entertainment C', 'Philadelphia', 530, 5, 46),
('P16', '760 Langhorne Newtow', 'Bridgetown Mill', 'Langhorne', 150, 5, 35),
('P17', '707 East Lancaster A', 'Sheraton Great ', 'Malvern', 200, 5, 40),
('P18', '191 S. Newtown Stree', 'Teca Restaurant', 'Newtown Square', 200, 5, 40),
('P19', '111 South 17th Stree', '1925 Lounge', 'Philadelphia', 350, 100, 80),
('P2', '2801 Pacific Avenue', 'Cuba Libre Rest', 'Alantic City', 450, 100, 165),
('P20', '1445 East Schuylkill', 'Giannis Event V', 'Pottstown', 120, 15, 24),
('P3', '84 S Lansdowne Avenu', 'Twentieth Centu', 'Lansdowne', 175, 10, 70),
('P4', '2019 S Juniper St', 'InterCut Studio', 'Philadelphia', 100, 30, 75),
('P5', '212 Centre Street', 'The Gables', 'Beach Haven', 125, 5, 40),
('P6', '1625 Cecil B Moore A', 'TLO Event Coimp', 'Philadelphia', 500, 300, 500),
('P7', '2373 Hwy 9', 'Versailles Ball', 'Toms River', 400, 100, 60),
('P8', '2 Rector Street', 'Bourbon Blue Re', 'Philadelphia', 150, 70, 85),
('P9', 'PO Box 2234 19073', 'The Ballroom at', 'West Chester', 250, 30, 55);

-- --------------------------------------------------------

--
-- Table structure for table `planner`
--

CREATE TABLE `planner` (
  `PlannerID` char(3) NOT NULL,
  `PlannerFName` varchar(15) NOT NULL,
  `PlannerLName` varchar(15) NOT NULL,
  `PlannerPhone` int(11) NOT NULL,
  `PlannerEmail` varchar(20) NOT NULL,
  `managerID` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `planner`
--

INSERT INTO `planner` (`PlannerID`, `PlannerFName`, `PlannerLName`, `PlannerPhone`, `PlannerEmail`, `managerID`) VALUES
('Pl1', 'Tyrese', 'Carlile', 2147483647, 'tc@myparty.com', 'M1'),
('Pl2', 'Maurie', 'Calfil', 2147483647, 'mc@myparty.com', 'M1'),
('Pl3', 'Saint', 'Ofal', 2147483647, 'so@myparty.com', 'M1'),
('Pl4', 'Kim', 'Shackom', 2147483647, 'ks@myparty.com', 'M1');

-- --------------------------------------------------------

--
-- Table structure for table `theme`
--

CREATE TABLE `theme` (
  `ThemeID` char(3) NOT NULL,
  `ThemeName` varchar(15) NOT NULL,
  `ThemeCost` int(11) NOT NULL,
  `ThemePicture` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theme`
--

INSERT INTO `theme` (`ThemeID`, `ThemeName`, `ThemeCost`, `ThemePicture`) VALUES
('t10', '70s', 40, ''),
('t11', 'Animal', 70, ''),
('t12', 'Beach', 85, ''),
('t13', 'Carnival', 35, ''),
('t14', 'Western', 20, ''),
('t15', 'Nautical', 90, ''),
('t16', 'Superhero', 150, ''),
('t17', 'Unicorn', 500, ''),
('t18', 'Rockstar', 74, ''),
('t19', 'New Years', 28, ''),
('t20', 'Zombie', 94, ''),
('th1', 'Kids', 50, ''),
('th2', 'Friends', 100, ''),
('th3', '21st', 50, ''),
('th4', '50th', 75, ''),
('th5', '100th', 75, ''),
('th6', 'Toga', 10, ''),
('th7', '20s', 100, ''),
('th8', '80s', 50, ''),
('th9', '90s', 30, '');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `TypeID` char(3) NOT NULL,
  `TypeName` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`TypeID`, `TypeName`) VALUES
('t1', 'Baby Boy Shower'),
('t10', 'Garden Party'),
('t11', 'Cocktail Party'),
('t12', 'Reception'),
('t13', 'Costume Party'),
('t14', 'Christmas Party'),
('t15', 'Halloween Party'),
('t16', 'Bachlor Party'),
('t17', 'Bachlorette Party'),
('t18', 'Murder Mystery '),
('t19', 'Dance Party'),
('t2', 'Baby Girl Shower'),
('t20', 'Karoke Party'),
('t3', 'Gender Reveal'),
('t4', 'General Baby Shower'),
('t5', 'Birthday Party'),
('t6', 'Surprise Party'),
('t7', 'Dinner'),
('t8', 'Anniversary'),
('t9', 'Tea Party');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerId`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `customer_phone`
--
ALTER TABLE `customer_phone`
  ADD PRIMARY KEY (`Phone`,`email`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `logininfo`
--
ALTER TABLE `logininfo`
  ADD PRIMARY KEY (`email`),
  ADD KEY `CustomerId` (`CustomerId`),
  ADD KEY `managerID` (`managerID`),
  ADD KEY `PlannerID` (`PlannerID`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`managerID`);

--
-- Indexes for table `party`
--
ALTER TABLE `party`
  ADD PRIMARY KEY (`PartyID`),
  ADD UNIQUE KEY `DateTime` (`DateTime`),
  ADD KEY `CustomerId` (`CustomerId`),
  ADD KEY `PlannerID` (`PlannerID`),
  ADD KEY `PlaceID` (`PlaceID`),
  ADD KEY `TypeID` (`TypeID`),
  ADD KEY `ThemeID` (`ThemeID`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`PlaceID`);

--
-- Indexes for table `planner`
--
ALTER TABLE `planner`
  ADD PRIMARY KEY (`PlannerID`),
  ADD UNIQUE KEY `PlannerEmail` (`PlannerEmail`),
  ADD KEY `managerID` (`managerID`);

--
-- Indexes for table `theme`
--
ALTER TABLE `theme`
  ADD PRIMARY KEY (`ThemeID`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`TypeID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_phone`
--
ALTER TABLE `customer_phone`
  ADD CONSTRAINT `customer_phone_ibfk_1` FOREIGN KEY (`email`) REFERENCES `customer` (`email`);

--
-- Constraints for table `logininfo`
--
ALTER TABLE `logininfo`
  ADD CONSTRAINT `logininfo_ibfk_1` FOREIGN KEY (`CustomerId`) REFERENCES `customer` (`CustomerId`),
  ADD CONSTRAINT `logininfo_ibfk_2` FOREIGN KEY (`managerID`) REFERENCES `manager` (`managerID`),
  ADD CONSTRAINT `logininfo_ibfk_3` FOREIGN KEY (`PlannerID`) REFERENCES `planner` (`PlannerID`);

--
-- Constraints for table `party`
--
ALTER TABLE `party`
  ADD CONSTRAINT `party_ibfk_1` FOREIGN KEY (`CustomerId`) REFERENCES `customer` (`CustomerId`),
  ADD CONSTRAINT `party_ibfk_2` FOREIGN KEY (`PlannerID`) REFERENCES `planner` (`PlannerID`),
  ADD CONSTRAINT `party_ibfk_3` FOREIGN KEY (`PlaceID`) REFERENCES `place` (`PlaceID`),
  ADD CONSTRAINT `party_ibfk_4` FOREIGN KEY (`TypeID`) REFERENCES `type` (`TypeID`),
  ADD CONSTRAINT `party_ibfk_5` FOREIGN KEY (`ThemeID`) REFERENCES `theme` (`ThemeID`);

--
-- Constraints for table `planner`
--
ALTER TABLE `planner`
  ADD CONSTRAINT `planner_ibfk_1` FOREIGN KEY (`managerID`) REFERENCES `manager` (`managerID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
