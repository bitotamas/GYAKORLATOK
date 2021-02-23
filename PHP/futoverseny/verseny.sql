-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2019. Máj 22. 21:24
-- Kiszolgáló verziója: 10.1.37-MariaDB
-- PHP verzió: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `verseny`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `eredmenyek`
--

CREATE TABLE `eredmenyek` (
  `fid` int(11) NOT NULL,
  `vid` int(11) NOT NULL,
  `ido` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `eredmenyek`
--

INSERT INTO `eredmenyek` (`fid`, `vid`, `ido`) VALUES
(1, 1, '02:11:00'),
(1, 5, '02:56:00'),
(1, 6, '03:21:00'),
(2, 1, '02:19:00'),
(2, 2, '03:50:00'),
(2, 4, '04:16:00'),
(2, 5, '03:12:00'),
(2, 6, '03:45:00'),
(3, 1, '03:01:00'),
(3, 5, '03:24:00'),
(3, 6, '03:43:00'),
(4, 1, '01:25:00'),
(4, 3, '04:02:00'),
(4, 5, '03:00:00'),
(4, 6, '03:28:00'),
(5, 1, '01:24:00'),
(5, 3, '03:38:00'),
(5, 5, '03:00:00'),
(5, 6, '03:35:00'),
(6, 1, '02:20:00'),
(6, 2, '03:42:00'),
(6, 3, '03:45:00'),
(6, 5, '03:12:00'),
(6, 6, '03:54:00'),
(7, 1, '02:25:00'),
(7, 4, '04:55:00'),
(7, 5, '03:04:00'),
(7, 6, '03:57:00'),
(8, 1, '01:29:00'),
(8, 5, '02:57:00'),
(8, 6, '04:09:00'),
(9, 1, '02:47:00'),
(9, 3, '03:29:00'),
(9, 5, '03:11:00'),
(9, 6, '04:00:00'),
(10, 1, '02:50:00'),
(10, 2, '03:12:00'),
(10, 5, '03:16:00'),
(10, 6, '03:19:00'),
(11, 1, '01:39:00'),
(11, 2, '03:48:00'),
(11, 6, '03:27:00'),
(12, 1, '01:58:00'),
(12, 6, '03:36:00'),
(13, 1, '01:25:00'),
(13, 2, '03:22:00'),
(13, 6, '03:28:00'),
(14, 1, '02:44:00'),
(14, 3, '03:30:00'),
(14, 6, '04:05:00'),
(15, 1, '03:02:00'),
(15, 4, '04:25:00'),
(15, 6, '03:18:00'),
(16, 1, '02:13:00'),
(16, 3, '03:20:00'),
(16, 6, '03:25:00'),
(17, 1, '02:16:00'),
(17, 3, '04:00:00'),
(17, 6, '03:55:00'),
(18, 1, '01:34:00'),
(18, 6, '03:41:00'),
(19, 1, '01:55:00'),
(19, 4, '04:48:00'),
(19, 6, '03:52:00'),
(20, 1, '02:22:00'),
(20, 2, '03:18:00'),
(20, 6, '03:31:00'),
(21, 1, '03:10:00'),
(21, 4, '04:22:00'),
(21, 6, '03:26:00'),
(22, 1, '02:33:00'),
(22, 6, '03:40:00'),
(23, 2, '03:56:00'),
(23, 6, '03:23:00'),
(24, 1, '02:18:00'),
(24, 2, '03:14:00'),
(24, 3, '03:50:00'),
(24, 4, '04:36:00'),
(24, 6, '03:49:00'),
(25, 1, '02:08:00'),
(25, 3, '03:29:00'),
(25, 6, '03:40:00'),
(26, 1, '01:55:00'),
(26, 3, '03:49:00'),
(26, 4, '04:39:00'),
(26, 6, '03:22:00'),
(27, 1, '01:56:00'),
(27, 6, '03:29:00'),
(28, 1, '02:15:00'),
(28, 4, '04:27:00'),
(28, 6, '03:36:00'),
(29, 1, '02:45:00'),
(29, 2, '03:41:00'),
(29, 4, '04:17:00'),
(29, 6, '03:37:00'),
(30, 1, '02:36:00'),
(30, 2, '03:33:00'),
(30, 3, '03:46:00'),
(30, 4, '04:28:00'),
(30, 6, '03:26:00');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `futo`
--

CREATE TABLE `futo` (
  `fid` int(11) NOT NULL,
  `fnev` varchar(15) DEFAULT NULL,
  `szulev` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `futo`
--

INSERT INTO `futo` (`fid`, `fnev`, `szulev`) VALUES
(1, 'Kő Pál', 1991),
(2, 'Papír Sándor', 2002),
(3, 'Olló Márton', 2000),
(4, 'Holló István', 2004),
(5, 'Ferenc Géza', 1998),
(6, 'Illés Béla', 1990),
(7, 'János Kornél', 1999),
(8, 'Hegedűs Dávid', 2003),
(9, 'Űllő Viktor', 1996),
(10, 'Kerekes Árpád', 1998),
(11, 'Bakai József', 1998),
(12, 'Német Richárd', 2005),
(13, 'Colos Adrián', 1993),
(14, 'Turi István', 1995),
(15, 'Medve László', 2004),
(16, 'Szegedi Zoltán', 2000),
(17, 'Papucs Károly', 1998),
(18, 'Szerencse Géza', 2000),
(19, 'Orbán Ferenc', 2000),
(20, 'Kovács Viktor', 1996),
(21, 'Papp János', 1991),
(22, 'Kő István', 1994),
(23, 'Ádám Béla', 1990),
(24, 'Kerekes József', 1995),
(25, 'Álmos Nándor', 2001),
(26, 'Győri Krisztián', 1999),
(27, 'Német Attila', 2003),
(28, 'Kovács Károly', 1993),
(29, 'Ferenc József', 2002),
(30, 'Otthon Ottó', 1991);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `versenyek`
--

CREATE TABLE `versenyek` (
  `vid` int(11) NOT NULL,
  `vnev` varchar(17) DEFAULT NULL,
  `datum` varchar(9) DEFAULT NULL,
  `helyszin` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `versenyek`
--

INSERT INTO `versenyek` (`vid`, `vnev`, `datum`, `helyszin`) VALUES
(1, 'FutaPest', '2016.6.1', 'Budapest'),
(2, 'Marathon I', '2016.4.26', 'Debrecen'),
(3, 'Marathon II', '2016.7.15', 'Sopron'),
(4, 'Kihívás Napja', '2015.5.22', 'Dunaújváros'),
(5, 'Európai Bajnokság', '2015.6.6', 'Bécs'),
(6, 'Olimpia', '2016.8.1', 'Rio');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `eredmenyek`
--
ALTER TABLE `eredmenyek`
  ADD PRIMARY KEY (`fid`,`vid`),
  ADD KEY `vid` (`vid`);

--
-- A tábla indexei `futo`
--
ALTER TABLE `futo`
  ADD PRIMARY KEY (`fid`);

--
-- A tábla indexei `versenyek`
--
ALTER TABLE `versenyek`
  ADD PRIMARY KEY (`vid`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `futo`
--
ALTER TABLE `futo`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT a táblához `versenyek`
--
ALTER TABLE `versenyek`
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `eredmenyek`
--
ALTER TABLE `eredmenyek`
  ADD CONSTRAINT `eredmenyek_ibfk_1` FOREIGN KEY (`vid`) REFERENCES `versenyek` (`vid`),
  ADD CONSTRAINT `eredmenyek_ibfk_2` FOREIGN KEY (`fid`) REFERENCES `futo` (`fid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
