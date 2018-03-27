-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 26, 2018 at 03:30 PM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `travel_agency`
--

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `artikelnummer` int(45) NOT NULL,
  `titel` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `beskrivning` varchar(550) COLLATE utf8_unicode_ci NOT NULL,
  `bild` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `pris` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`artikelnummer`, `titel`, `beskrivning`, `bild`, `pris`) VALUES
(1, 'London', 'London är svenskarnas favoritstad - här finns något för alla, intressen och plånböcker. En weekend i London bjuder på shopping, sightseeing, museum, fotboll, prisvärda restauranger och ett fantastiskt nöjesliv.', 'res2.jpg', 599),
(2, 'Dubai', 'I Dubai kan du spela golf på morgonen, bada i 25-gradigt hav på dagen och avsluta med lite skidåkning på kvällen. Staden passar alla: barnfamiljer, kompisgäng, singlar, par, lyxlirare och budgetresenärer.', 'res3.jpg', 4350),
(3, 'Paris', 'Låt dig inspireras av allt som finns att se och göra i Paris. Vi tipsar om några av Paris mest intressanta sevärdheter och aktiviteter.Så som Eiffeltornet och Disneyland med mera.', 'res4.jpg', 899),
(4, 'Alanya', 'Boka en resa till Turkiet - landet mellan öst och väst - och låt dig förföras av lata dagar på stranden, låga priser, kryddiga matupplevelser, tebjudningar i basarerna och ändlösa nätter.', 'res5.jpg', 3700),
(5, 'Abu Dhabi', 'Abu Dhabi är den futuristiska huvudstaden i Förenade Arabemiraten. Det som började som en liten fiskeby har under bara några få årtionden förvandlats till en supermodern världsmetropol. ', 'res6.jpg', 2999),
(6, 'Mashad', 'Mashad är en av Irans mest populära resmål. Här finns det massor att se och uppleva.', 'res7.jpg', 2700),
(7, 'Najaf', 'Få länder har en så rik och fascinerande historia som Irak.Irak, också känt som Mesopotamien under antiken, var den plats där skrivkonsten uppfanns och det var också här de första civilisationerna utvecklades.', 'res8.jpg', 4200),
(8, 'Rom', 'En resa till Rom är en fantastisk upplevelse. Att strosa runt på stadens gator som ständigt avlöses av små och stora piazzor kan få vem helst att känna sig förflyttad till medeltiden. ', 'res9.jpg', 1300),
(9, 'Barcelona', 'En resa till Barcelona innehåller allt man kan önska av en weekend. Fantastisk arkitektur, ett rikt kulturutbud, shopping, fotbollsmatcher i världsklass, tapasbarer i varje hörn och ett hett nattliv.', 'res10.jpg', 1700);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ordernummer` int(10) NOT NULL,
  `kundnamn` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `epost` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mobil` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `adress` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `artikelnummer` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`artikelnummer`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ordernummer`),
  ADD KEY `artikelnummer` (`artikelnummer`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `artikelnummer` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ordernummer` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`artikelnummer`) REFERENCES `destination` (`artikelnummer`) ON DELETE NO ACTION ON UPDATE CASCADE;
