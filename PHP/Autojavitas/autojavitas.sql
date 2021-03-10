-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2021. Már 08. 13:27
-- Kiszolgáló verziója: 10.4.16-MariaDB
-- PHP verzió: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `autojavitas`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `autosok`
--

CREATE TABLE `autosok` (
  `autos_id` int(5) NOT NULL,
  `nev` varchar(18) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `rendszam` varchar(7) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `tipuskod` int(1) DEFAULT NULL,
  `telefon` varchar(14) COLLATE utf8_hungarian_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `autosok`
--

INSERT INTO `autosok` (`autos_id`, `nev`, `rendszam`, `tipuskod`, `telefon`) VALUES
(1, 'Verpeléti Kitty', 'JML-533', 7, '(70) 301-94-97'),
(2, 'Lukács Lilla', 'DEV-159', 7, '(70) 536-80-44'),
(3, 'Solymos Sámuel', 'GIG-070', 4, '(70) 857-69-49'),
(4, 'Szabó András', 'KKG-904', 8, '(70) 393-54-66'),
(5, 'Braun Zsanett', 'UFK-793', 6, '(70) 111-62-88'),
(6, 'Cseszneki Julianna', 'WTV-067', 3, '(20) 513-89-86'),
(7, 'Balogh Adrián', 'QXJ-407', 2, '(20) 169-73-57'),
(8, 'Halmos Bálint', 'XVY-157', 4, '(70) 802-81-31'),
(9, 'Jászai Linda', 'YOH-150', 4, '(20) 581-38-50'),
(10, 'Hertelendi Mariann', 'TLU-725', 4, '(30) 678-93-23'),
(11, 'Solymos Zoltán', 'PAO-523', 8, '(20) 516-32-29'),
(12, 'Guttmann Ákos', 'SRI-567', 7, '(70) 703-50-66'),
(13, 'Fekete Anikó', 'HTJ-311', 7, '(70) 390-41-71'),
(14, 'Halmos Margit', 'ZVH-389', 6, '(30) 698-60-27'),
(15, 'Kalányos András', 'CRE-696', 5, '(20) 754-34-57'),
(16, 'Zsolnai Lívia', 'SLX-343', 1, '(20) 284-76-98'),
(17, 'Latorczai Balázs', 'VLJ-110', 4, '(30) 392-66-44'),
(18, 'Kalányos Tibor', 'DCC-495', 2, '(70) 665-80-16'),
(19, 'Nagy Dénes', 'KYV-943', 9, '(70) 937-18-51'),
(20, 'Madarász Sámuel', 'HYL-392', 9, '(30) 317-21-12'),
(21, 'Varga Zsolt', 'AEU-691', 1, '(30) 854-25-70'),
(22, 'Gellért József', 'MHY-999', 7, '(70) 972-37-16'),
(23, 'Kabai Ádám', 'IRV-021', 8, '(20) 592-76-94'),
(24, 'Magyar Tímea', 'AQW-132', 5, '(30) 626-41-18'),
(25, 'Illovszki Gergely', 'JSZ-848', 7, '(20) 581-89-65'),
(26, 'Nyúzó Katalin', 'PKN-807', 10, '(20) 267-61-80'),
(27, 'Turai Éva', 'JVE-640', 2, '(30) 253-37-26'),
(28, 'Varga Lehel', 'SIU-753', 1, '(70) 276-39-74'),
(29, 'Kertész Lajos', 'IYU-847', 9, '(20) 217-51-25'),
(30, 'Kaló Attila', 'BTH-851', 1, '(20) 343-96-60'),
(31, 'Bethlen Lajos', 'MKV-785', 5, '(30) 902-65-33'),
(32, 'Darázs György', 'ZJH-085', 4, '(70) 495-97-82'),
(33, 'Kabai Fanny', 'TRY-111', 8, '(70) 650-46-86'),
(34, 'Hertelendi Attila', 'ZYX-114', 8, '(20) 489-99-89'),
(35, 'Gellért Bálint', 'TBK-269', 10, '(20) 387-93-31'),
(36, 'Kabai Kálmán', 'KRC-343', 7, '(20) 734-76-20'),
(37, 'Lukács Katalin', 'LVQ-766', 5, '(30) 371-75-23'),
(38, 'Kertész Margit', 'HSW-756', 7, '(30) 479-72-19'),
(39, 'Balogh Eleonóra', 'STT-218', 10, '(70) 137-73-68'),
(40, 'Hegyi Petra', 'ZKU-554', 2, '(20) 664-42-41'),
(41, 'Kabai Judit', 'OJX-516', 10, '(20) 423-42-35'),
(42, 'Verpeléti Rita', 'TZN-397', 6, '(20) 461-55-31'),
(43, 'Kertész Etelka', 'UAC-163', 6, '(20) 504-85-19'),
(44, 'Békési Bálint', 'OXG-293', 9, '(20) 902-68-32'),
(45, 'Vörös Éva', 'VRD-731', 5, '(30) 751-77-20'),
(46, 'Nagy Ferenc', 'PNO-407', 5, '(30) 208-24-11'),
(47, 'Jászai Margit', 'EIT-858', 7, '(20) 483-34-49'),
(48, 'Halmos Balázs', 'VUC-512', 6, '(20) 877-52-34'),
(49, 'Filkor Pál', 'GWX-552', 8, '(70) 201-50-91'),
(50, 'Kaló Csilla', 'RWD-314', 9, '(70) 431-35-66');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `javitasok`
--

CREATE TABLE `javitasok` (
  `javitas_id` int(11) NOT NULL,
  `szerelo_id` int(2) DEFAULT NULL,
  `autos_id` int(2) DEFAULT NULL,
  `datum` date DEFAULT NULL,
  `javido` int(1) DEFAULT NULL,
  `iranyar` int(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `javitasok`
--

INSERT INTO `javitasok` (`javitas_id`, `szerelo_id`, `autos_id`, `datum`, `javido`, `iranyar`) VALUES
(1, 6, 18, '2015-01-02', 3, 38000),
(2, 9, 30, '2015-01-02', 5, 58000),
(3, 8, 43, '2015-01-08', 4, 57000),
(4, 10, 30, '2015-01-09', 6, 18000),
(5, 5, 1, '2015-01-13', 6, 60000),
(6, 10, 49, '2015-01-13', 2, 57000),
(7, 7, 31, '2015-01-13', 3, 29000),
(8, 2, 11, '2015-01-15', 3, 37000),
(9, 10, 27, '2015-01-15', 6, 55000),
(10, 2, 43, '2015-01-16', 3, 48000),
(11, 9, 8, '2015-01-18', 3, 23000),
(12, 5, 38, '2015-01-20', 2, 21000),
(13, 9, 6, '2015-01-25', 5, 60000),
(14, 6, 27, '2015-01-26', 4, 55000),
(15, 8, 38, '2015-02-05', 3, 58000),
(16, 10, 44, '2015-02-11', 5, 33000),
(17, 8, 40, '2015-02-12', 2, 60000),
(18, 4, 44, '2015-02-15', 6, 16000),
(19, 1, 18, '2015-02-19', 2, 63000),
(20, 6, 10, '2015-02-23', 4, 16000),
(21, 3, 49, '2015-02-25', 4, 37000),
(22, 7, 39, '2015-02-27', 4, 25000),
(23, 3, 6, '2015-03-02', 5, 50000),
(24, 6, 49, '2015-03-08', 6, 46000),
(25, 2, 6, '2015-03-14', 2, 29000),
(26, 2, 14, '2015-03-15', 4, 44000),
(27, 8, 2, '2015-03-17', 4, 50000),
(28, 7, 35, '2015-03-18', 4, 57000),
(29, 8, 33, '2015-03-21', 2, 30000),
(30, 10, 47, '2015-03-24', 4, 46000),
(31, 8, 46, '2015-03-27', 5, 44000),
(32, 2, 7, '2015-04-07', 3, 38000),
(33, 4, 44, '2015-04-11', 3, 59000),
(34, 8, 14, '2015-04-16', 6, 44000),
(35, 2, 9, '2015-04-18', 6, 36000),
(36, 1, 5, '2015-04-26', 4, 63000),
(37, 5, 24, '2015-04-27', 4, 52000),
(38, 2, 1, '2015-04-27', 2, 20000),
(39, 4, 29, '2015-04-28', 6, 35000),
(40, 1, 11, '2015-05-05', 5, 30000),
(41, 5, 15, '2015-05-09', 4, 64000),
(42, 5, 35, '2015-05-09', 3, 56000),
(43, 7, 21, '2015-05-10', 2, 24000),
(44, 7, 45, '2015-05-18', 4, 54000),
(45, 1, 32, '2015-05-19', 4, 45000),
(46, 1, 22, '2015-05-20', 4, 39000),
(47, 5, 15, '2015-05-25', 3, 25000),
(48, 5, 24, '2015-06-01', 4, 61000),
(49, 4, 31, '2015-06-01', 5, 54000),
(50, 2, 9, '2015-06-05', 2, 50000),
(51, 2, 20, '2015-06-14', 6, 47000),
(52, 3, 1, '2015-06-18', 5, 51000),
(53, 6, 4, '2015-06-18', 5, 34000),
(54, 6, 3, '2015-06-22', 3, 28000),
(55, 10, 12, '2015-06-24', 2, 26000),
(56, 9, 15, '2015-06-25', 5, 22000),
(57, 6, 37, '2015-06-26', 4, 41000),
(58, 10, 15, '2015-06-28', 2, 36000),
(59, 1, 28, '2015-07-05', 2, 38000),
(60, 1, 20, '2015-07-08', 4, 50000),
(61, 4, 14, '2015-07-09', 2, 60000),
(62, 6, 37, '2015-07-11', 2, 55000),
(63, 5, 26, '2015-07-11', 2, 29000),
(64, 10, 36, '2015-07-12', 4, 44000),
(65, 4, 39, '2015-07-18', 5, 64000),
(66, 10, 12, '2015-07-24', 5, 54000),
(67, 2, 18, '2015-08-04', 2, 27000),
(68, 8, 40, '2015-08-13', 4, 21000),
(69, 9, 47, '2015-08-14', 2, 58000),
(70, 8, 14, '2015-08-18', 6, 30000),
(71, 1, 7, '2015-08-22', 5, 60000),
(72, 6, 44, '2015-08-22', 4, 35000),
(73, 1, 13, '2015-08-24', 2, 54000),
(74, 7, 41, '2015-09-01', 4, 33000),
(75, 3, 43, '2015-09-03', 3, 48000),
(76, 8, 27, '2015-09-03', 4, 41000),
(77, 10, 41, '2015-09-04', 4, 49000),
(78, 7, 37, '2015-09-05', 5, 32000),
(79, 4, 23, '2015-09-11', 2, 49000),
(80, 2, 41, '2015-09-20', 2, 31000),
(81, 4, 4, '2015-09-20', 6, 53000),
(82, 4, 44, '2015-09-27', 6, 54000),
(83, 10, 5, '2015-10-02', 3, 45000),
(84, 6, 36, '2015-10-08', 2, 62000),
(85, 2, 13, '2015-10-09', 3, 27000),
(86, 7, 13, '2015-10-16', 2, 35000),
(87, 2, 8, '2015-10-19', 2, 32000),
(88, 10, 2, '2015-10-20', 3, 19000),
(89, 7, 8, '2015-10-25', 5, 40000),
(90, 5, 10, '2015-11-05', 5, 16000),
(91, 7, 37, '2015-11-15', 4, 15000),
(92, 6, 43, '2015-11-24', 2, 37000),
(93, 2, 26, '2015-11-28', 5, 36000),
(94, 6, 10, '2015-12-01', 3, 43000),
(95, 7, 22, '2015-12-07', 5, 43000),
(96, 2, 22, '2015-12-09', 6, 60000),
(97, 2, 33, '2015-12-15', 2, 36000),
(98, 3, 44, '2015-12-16', 3, 35000),
(99, 1, 2, '2015-12-23', 5, 55000),
(100, 8, 15, '2015-12-27', 3, 18000);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `szerelok`
--

CREATE TABLE `szerelok` (
  `szerelo_id` int(5) NOT NULL,
  `nev` varchar(17) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `cim` varchar(37) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `telefon` varchar(14) COLLATE utf8_hungarian_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `szerelok`
--

INSERT INTO `szerelok` (`szerelo_id`, `nev`, `cim`, `telefon`) VALUES
(1, 'Keller János', 'Pécs, Ceglédi utca 88.', '(30) 834-47-72'),
(2, 'Megyeri György', 'Tapolca, Virág utca 80.', '(20) 716-19-54'),
(3, 'Eszes Lehel', 'Székesfehérvár, Mikszáth utca 37.', '(70) 599-12-77'),
(4, 'Csikós László', 'Budapest, Mikszáth utca 39.', '(20) 825-55-55'),
(5, 'Verpeléti Bence', 'Pécs, Arany János utca 86.', '(70) 611-94-92'),
(6, 'Józsa Sándor', 'Fót, Kossuth utca 47.', '(30) 394-33-50'),
(7, 'Lukács Pál', 'Balatonfüred, Arany János utca 95.', '(20) 302-85-17'),
(8, 'Madarász Bálint', 'Pécs, Petőfi utca 30.', '(20) 256-60-58'),
(9, 'Szabó Mátyás', 'Székesfehérvár, Csillag utca 86.', '(70) 115-20-98'),
(10, 'Kalányos Lajos', 'Szeged, Kossuth utca 22.', '(20) 696-11-95');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `tipusok`
--

CREATE TABLE `tipusok` (
  `tipus_id` int(5) NOT NULL,
  `tipusnev` varchar(30) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `tipusok`
--

INSERT INTO `tipusok` (`tipus_id`, `tipusnev`) VALUES
(1, 'Chevrolet Matiz'),
(2, 'Porsche 911'),
(3, 'Mini Cooper'),
(4, 'Jaguar'),
(5, 'Lada Samara'),
(6, 'Volkswagen Golf'),
(7, 'BMW'),
(8, 'Mercedes Benz'),
(9, 'Audi'),
(10, 'Citroen');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `autosok`
--
ALTER TABLE `autosok`
  ADD PRIMARY KEY (`autos_id`);

--
-- A tábla indexei `javitasok`
--
ALTER TABLE `javitasok`
  ADD PRIMARY KEY (`javitas_id`);

--
-- A tábla indexei `szerelok`
--
ALTER TABLE `szerelok`
  ADD PRIMARY KEY (`szerelo_id`);

--
-- A tábla indexei `tipusok`
--
ALTER TABLE `tipusok`
  ADD PRIMARY KEY (`tipus_id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `autosok`
--
ALTER TABLE `autosok`
  MODIFY `autos_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT a táblához `javitasok`
--
ALTER TABLE `javitasok`
  MODIFY `javitas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT a táblához `szerelok`
--
ALTER TABLE `szerelok`
  MODIFY `szerelo_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT a táblához `tipusok`
--
ALTER TABLE `tipusok`
  MODIFY `tipus_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
