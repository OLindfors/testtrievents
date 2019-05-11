-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05.05.2019 klo 15:58
-- Palvelimen versio: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testtri`
--

-- --------------------------------------------------------

--
-- Rakenne taululle `distance`
--

CREATE TABLE `distance` (
  `Dname` varchar(30) NOT NULL,
  `Swim` smallint(6) NOT NULL,
  `Bike` smallint(6) NOT NULL,
  `Run` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vedos taulusta `distance`
--

INSERT INTO `distance` (`Dname`, `Swim`, `Bike`, `Run`) VALUES
('Perusmatka', 1500, 40, 10),
('Pikasprint', 300, 10, 3),
('Puolimatka', 1900, 90, 21),
('Sprint', 750, 20, 5);

-- --------------------------------------------------------

--
-- Rakenne taululle `event`
--

CREATE TABLE `event` (
  `Eventname` varchar(30) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vedos taulusta `event`
--

INSERT INTO `event` (`Eventname`, `Date`) VALUES
('Helsinki TestTri', '2019-06-15'),
('Jyväskylä TestTri', '2019-07-29'),
('Kuopio TestTri', '2019-07-17'),
('Lahti TestTri', '2019-07-05'),
('Oulu TestTri', '2019-08-13'),
('Turku TestTri', '2019-06-30');

-- --------------------------------------------------------

--
-- Rakenne taululle `participation`
--

CREATE TABLE `participation` (
  `UserID` int(11) NOT NULL,
  `RaceID` char(4) NOT NULL,
  `Result` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vedos taulusta `participation`
--

INSERT INTO `participation` (`UserID`, `RaceID`, `Result`) VALUES
(2, 'R101', '00:39:34'),
(2, 'R204', '06:01:24'),
(33, 'R101', '00:40:12'),
(33, 'R203', '02:22:34'),
(34, 'R101', '00:56:45'),
(34, 'R202', '01:34:29'),
(35, 'R101', '01:00:00'),
(35, 'R204', '06:01:23'),
(36, 'R101', '00:37:56'),
(36, 'R203', '02:45:01'),
(37, 'R102', '01:34:29'),
(37, 'R202', '01:20:34'),
(38, 'R102', '01:20:34'),
(38, 'R201', '00:39:34'),
(39, 'R102', '01:14:12'),
(39, 'R204', '05:46:01'),
(40, 'R102', '01:14:56'),
(40, 'R203', '03:00:01'),
(41, 'R103', '02:22:34'),
(41, 'R202', '01:14:12'),
(42, 'R103', '02:45:01'),
(42, 'R201', '00:40:12'),
(43, 'R103', '03:00:01'),
(43, 'R204', '05:35:03'),
(44, 'R103', '02:08:34'),
(44, 'R203', '02:08:34'),
(45, 'R104', '06:01:24'),
(45, 'R202', '01:14:56'),
(46, 'R104', '06:01:23'),
(46, 'R201', '00:56:45'),
(47, 'R104', '05:46:01'),
(47, 'R204', '05:40:00'),
(48, 'R104', '05:35:03'),
(48, 'R203', '03:08:34'),
(49, 'R104', '05:40:00'),
(49, 'R202', '01:20:34'),
(50, 'R104', '05:23:00'),
(50, 'R201', '01:00:00'),
(55, 'R603', NULL),
(57, 'R403', NULL),
(60, 'R601', NULL),
(61, 'R403', NULL),
(62, 'R502', NULL),
(64, 'R303', NULL),
(65, 'R501', NULL),
(75, 'R403', NULL),
(76, 'R301', NULL),
(77, 'R504', NULL),
(79, 'R302', NULL),
(80, 'R401', NULL),
(81, 'R603', NULL),
(82, 'R502', NULL),
(83, 'R601', NULL),
(85, 'R604', NULL),
(86, 'R603', NULL);

-- --------------------------------------------------------

--
-- Rakenne taululle `race`
--

CREATE TABLE `race` (
  `RaceID` char(4) NOT NULL,
  `Eventname` varchar(30) NOT NULL,
  `Dname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vedos taulusta `race`
--

INSERT INTO `race` (`RaceID`, `Eventname`, `Dname`) VALUES
('R101', 'Helsinki TestTri', 'Pikasprint'),
('R102', 'Helsinki TestTri', 'Sprint'),
('R103', 'Helsinki TestTri', 'Perusmatka'),
('R104', 'Helsinki TestTri', 'Puolimatka'),
('R201', 'Turku TestTri', 'Pikasprint'),
('R202', 'Turku TestTri', 'Sprint'),
('R203', 'Turku TestTri', 'Perusmatka'),
('R204', 'Turku TestTri', 'Puolimatka'),
('R301', 'Lahti TestTri', 'Pikasprint'),
('R302', 'Lahti TestTri', 'Sprint'),
('R303', 'Lahti TestTri', 'Perusmatka'),
('R304', 'Lahti TestTri', 'Puolimatka'),
('R401', 'Kuopio TestTri', 'Pikasprint'),
('R402', 'Kuopio TestTri', 'Sprint'),
('R403', 'Kuopio TestTri', 'Perusmatka'),
('R404', 'Kuopio TestTri', 'Puolimatka'),
('R501', 'Jyväskylä TestTri', 'Pikasprint'),
('R502', 'Jyväskylä TestTri', 'Sprint'),
('R503', 'Jyväskylä TestTri', 'Perusmatka'),
('R504', 'Jyväskylä TestTri', 'Puolimatka'),
('R601', 'Oulu TestTri', 'Pikasprint'),
('R602', 'Oulu TestTri', 'Sprint'),
('R603', 'Oulu TestTri', 'Perusmatka'),
('R604', 'Oulu TestTri', 'Puolimatka');

-- --------------------------------------------------------

--
-- Rakenne taululle `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `Fname` varchar(25) NOT NULL,
  `Lname` varchar(30) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Passwrd` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vedos taulusta `user`
--

INSERT INTO `user` (`UserID`, `Fname`, `Lname`, `Email`, `Phone`, `Passwrd`) VALUES
(1, 'Outi', 'Lindfors', 'outli@welho.com', '503746625', '$2y$10$fdwgf77sXGfH4MxGoMkwTegIwV3r6BUWV0W.111F0Xg.9tG4d7PNa'),
(2, 'Pekka', 'Topohanta', 'pekka@p.fi', '0275097', NULL),
(33, 'Katto', 'Kassinen', 'katto@k.fi', '340957420', NULL),
(34, 'Erkki', 'Esimerkki', 'erkki@e.fi', '79689436', NULL),
(35, 'Jaska', 'Jokunen', 'j@jakke.fi', '976703', NULL),
(36, 'Terttu', 'Testi', 'terttu@t.fi', '37936734', NULL),
(37, 'Aku', 'Ankka', 'aku@a.fi', '5097506806', NULL),
(38, 'Mikki', 'Hiiri', 'mikki@m.fi', '45720572', NULL),
(39, 'Mikael', 'Jaksonen', 'mikael@m.fi', '570234896', NULL),
(40, 'Onni', 'Orava', 'onni@o.fi', '9723975', NULL),
(41, 'Sigge', 'Hygge', 'sigge@s.se', '50973587', NULL),
(42, 'Charlie', 'Chaplin', 'charlie@c.fi', '398632856', NULL),
(43, 'Pelle', 'Peloton', 'pelle@p.fi', '490709296', NULL),
(44, 'Alexi', 'Stubbi', 'alex@a.fi', '9720756', NULL),
(45, 'Tutti', 'Ritari', 'tutti@t.fi', '407606', NULL),
(46, 'Terhi', 'Testaaja', 'terhi@t.fi', '63397096', NULL),
(47, 'Valtti', 'Virtanen', 'valtti@v.fi', '94975296', NULL),
(48, 'Iisakki', 'Ilvonen', 'iisakki@i.fi', '4570659', NULL),
(49, 'Maija', 'Mehilainen', 'maija@m.fi', '30629857', NULL),
(50, 'Samu', 'Sirkka', 'samu@s.fi', '57027506', NULL),
(55, 'Ville', 'Vanne', 'ville@vanne.fi', '9877334505', '$2y$10$rYy5tatulBEQeZmudRapKe6CUFWVV1pm/21l7b.nRryAnn16gt892'),
(57, 'Dave', 'Davidson', 'dave@d.fi', '48597656598', '$2y$10$b8JxKYnRMj2qFrF1yScVMOmegSSnWfswZNHgtHi1bsdiB6DuDnW/m'),
(60, 'Karkki', 'Melli', 'karkki@m.fi', '94759465946', '$2y$10$1v35H0.HXKt3ux2R5QaKhuL0U.WxCvUVHjRwhrEC.7erSGQ3pjl6i'),
(61, 'Janne', 'Jauho', 'janne@ja.fi', '9357205665', '$2y$10$6m/7RTVqT05QN/0aMYb7tuDTYc79qZDuHQjaC/MHvUbY4h3Ne.w9K'),
(62, 'Roope', 'Ankka', 'roope@ank.fi', '25323097574', '$2y$10$CmC1EYC9HYj9gT1ZwUMDm.Le734XTYp7xyETrvQLTBfDTxkZ2AK/e'),
(64, 'Vellu', 'Vallu', 'vellu@vallu.fi', '84324970907', '$2y$10$utbhWc7YBz/9Hxe86g3Ph.TwXoLyP5rtdnMAfDTqYbleUZ3fwy/3C'),
(65, 'Stan', 'Laurel', 'stan@stan.fi', '12593752057', '$2y$10$Eho88mZHM.zlCWEvCpN/5OIQVl3f5HZnUdEkJhkJjaPPXCrGPb8bW'),
(71, 'Minni', 'Mouse', 'minni@hiiri.fi', '3054503857', '$2y$10$vOa/MyLWUXiSUpztiOpsxubbegxOTVEeZeonn8grnoexGI4B2HZte'),
(73, 'Esko', 'Karvinen', 'esko@karvis.fi', '2907532865', '$2y$10$yAvC3epdFWQ885Tu98rjg.hDrNL436cqvva9ajtbFARXxiW4b8qb2'),
(75, 'Arne', 'Anka', 'arne@a.fi', '8430248320947', '$2y$10$R35/..JqRZel.3Zu8tMYkeeKjgPUVuVEfpizT1hmM4NxIxVTo82ju'),
(76, 'Tiina', 'Tuppura', 'tiina@tiina.fi', '39075365688', '$2y$10$pJhsxUJJCIotxOpgcpR1L.n/QANk0SM59Zplp/b4sfIbJcgYggmQa'),
(77, 'Simo', 'Sulka', 'simo@simo.fi', '3579257296', '$2y$10$zxj73ogXSoQNlVQPGYnpoenUhS3bUj4RG1WL1S0Y7iNzIifIOv5sW'),
(79, 'Eetu', 'Etana', 'eetu@e.fi', '9340703260', '$2y$10$6yUSmC90ykCLHE2PLeeMbeRm7N5ErxIJk4YKD2cye2NcU0PRNsHIK'),
(80, 'Salla', 'Suhmura', 'salla@salla.fi', '48104962065', '$2y$10$fKgEb5ktFveI3uWPWdIlKeYkhVg8RHz.wz/IalWLQNVKP4s1tOs1C'),
(81, 'Testi', 'Testaajakaveri', 'testi@t.fi', '8097069866', '$2y$10$seNXb1e3NBk.NjEYHKuUrexomHVN9SVg5h/PNWq5aYy0EgxeQB2Za'),
(82, 'Teemu', 'Aura', 'teemu@te.fi', '9070575857', '$2y$10$LY6XQWIUXDef0rrsl9Knke9L3w4uhgCAHiE1tNcfDZxe5kjWNrZMu'),
(83, 'Aamu', 'Sarastus', 'aamu@a.fi', '4320975209', '$2y$10$dcbrvdCNqzI0vjIaavHIeORnvhbYa7bVf7Uru3caUDp2kWthWdDsi'),
(85, 'Kaisa', 'Kela', 'kaisa@kl.fi', '72309570329', '$2y$10$4P8sLppJYf2t.42sdmxPTehojJg55Ov.pGF/i.vqYnlnfUXLUfr0.'),
(86, 'Annis', 'Nanon', 'annis@n.fi', '4304730752715', '$2y$10$KFkI74qEYbcrUkna4pmJmuzKkvN0nDw30Gso5wLjrTXXL51dN9rDC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `distance`
--
ALTER TABLE `distance`
  ADD PRIMARY KEY (`Dname`),
  ADD UNIQUE KEY `Dname_UNIQUE` (`Dname`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`Eventname`),
  ADD UNIQUE KEY `Eventname_UNIQUE` (`Eventname`);

--
-- Indexes for table `participation`
--
ALTER TABLE `participation`
  ADD PRIMARY KEY (`UserID`,`RaceID`),
  ADD KEY `fk_participation_RaceID_idx` (`RaceID`);

--
-- Indexes for table `race`
--
ALTER TABLE `race`
  ADD PRIMARY KEY (`RaceID`),
  ADD UNIQUE KEY `RaceID_UNIQUE` (`RaceID`),
  ADD KEY `fk_race_Eventname_idx` (`Eventname`),
  ADD KEY `fk_race_Dname_idx` (`Dname`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- Rajoitteet vedostauluille
--

--
-- Rajoitteet taululle `participation`
--
ALTER TABLE `participation`
  ADD CONSTRAINT `fk_participation_RaceID` FOREIGN KEY (`RaceID`) REFERENCES `race` (`RaceID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_participation_UserID` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Rajoitteet taululle `race`
--
ALTER TABLE `race`
  ADD CONSTRAINT `fk_race_Dname` FOREIGN KEY (`Dname`) REFERENCES `distance` (`Dname`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_race_Eventname` FOREIGN KEY (`Eventname`) REFERENCES `event` (`Eventname`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
