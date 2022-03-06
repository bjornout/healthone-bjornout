-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 06 mrt 2022 om 11:48
-- Serverversie: 10.4.21-MariaDB
-- PHP-versie: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthone`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `category`
--

INSERT INTO `category` (`id`, `name`, `picture`) VALUES
(1, 'roeitrainer', '/img/categories/roeitrainer.png'),
(2, 'crosstrainer', '/img/categories/crosstrainer.png'),
(3, 'hometrainer', '/img/categories/hometrainer.png'),
(4, 'loopband', '/img/categories/loopband.png');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(55) NOT NULL,
  `email` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `login`
--

INSERT INTO `login` (`id`, `first_name`, `password`, `role`, `email`, `last_name`) VALUES
(6, 'admin', 'admin', 'admin', 'admin@gmail.com', 'admin'),
(40, 'hoi', 'hoi', '', '', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `product`
--

INSERT INTO `product` (`id`, `name`, `picture`, `description`, `category_id`) VALUES
(1, 'Roeitrainer H20AR', '/img/categories/roeitrainer1.png', 'Als je op zoek bent naar een indoor roeitraining die het gevoel van roeien in het open water het best nabootst, dan is de H2OAr waterroeier iets voor jou. Van alle indoor roeimachines zijn waterroeiers de beste.', 1),
(2, 'Roeitrainer waterRower A1 Home', '/img/categories/roeitrainer2.png', 'WaterRower staat bekend om hun kwalitatief sterke Roeitrainers. Ook met de A1 Home hebben ze weer een geweldige betaalbare roeitrainer ontwikkeld. Naast de juiste prijs/kwaliteit verhouding staat WaterRower ook bekend om de prachtige houten designs.', 1),
(3, 'Roeitrainer first degree apollo V', '/img/categories/roeitrainer.png', 'De First Degree Apollo V is een stevige en stabiele roeitrainer voor de intensieve thuisgebruiker die op wil trainen als een professional. Door het unieke waterweerstandsysteem van deze roeitrainer, lijkt het alsof je écht op het water roeit.\r\n\r\n', 1),
(4, 'crosstrainer v42K', '/img/categories/crosstrainer.png', 'Je wilt rustig weer gaan sporten en afslanken? Dankzij de console met 4 parameters van de crosstrainer v42K kun je je training eenvoudig opvolgen!\r\n', 2),
(5, 'crosstrainer v45', '/img/categories/crosstrainer1.png', 'Mede dankzij het vliegwiel van 10 kg zorgt ervoor dat je altijd op een natuurlijke en soepele manier kunt trainen. Of je de  gebruikt voor revalidatie, in beweging wilt blijven of er intensief gebruik van wilt maken. ', 2),
(6, 'crosstrainer v33K', '/img/categories/crosstrainer2.png', 'Het vliegwiel van de crosstrainer bevindt zich aan de voorzijde van de crosstrainer. Het grootste voordeel van een front driven crosstrainer is dat er weinig ruimte tussen je benen is en je voeten dus dicht bij elkaar staan. ', 2),
(7, 'home trainer 33N', '/img/categories/hometrainer.png', 'Stap op de hometrainer om aan je conditie te werken. Hoe goed je ook bent, dankzij de 999 verschillende weerstandniveaus weet je zeker dat je altijd voldoende uitdaging krijgt. ', 3),
(8, 'home trainer 22M', '/img/categories/hometrainer1.png', 'De hometrainer is een uitstekende spinningfiets voor de beginnende sporter. Deze hometrainer ziet er strak en stijlvol uit dankzij de zwarte poedercoating van het frame.', 3),
(9, 'home trainer 55m', '/img/categories/hometrainer2.png', 'Breng je indoor hometrainer naar een hoger niveau met de hoogwaardige deze hometrainer. Ontworpen met een magnetisch weerstandssysteem waarmee jij ruim 100 verschillende weerstandsniveaus kan instellen voor de perfecte training.', 3),
(10, 'loopband v22', '/img/categories/loopband.png', 'Dankzij de motor met een 1,25 pk continu vermogen, kan de loopband de snelheden aan tot 14 km/u. Hij is hiermee uitermate geschikt voor een snelle hardlooptraining. ', 4),
(11, 'loopband v35', '/img/categories/loopband1.png', 'Met de loopband werk jij als beginnende sporter aan je conditie. Je kiest 1 van de 20 trainingsprogramma\'s om doelgericht te trainen. Je rent maximaal 12 km per uur met een klein hellingspercentage van 3%. Het display geeft je afstand en tijd.', 4),
(12, 'loopband v42', '/img/categories/loopband2.png', 'Met deze loopband heb je de keuze uit maar liefst 40 trainingsprogramma’s. Je hebt de keuze uit verschillende manuele programma\'s, user programma\'s en handige voorgeprogrammeerde trainingsprogramma’s', 4);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `rating` int(11) NOT NULL,
  `submit_date` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `review`
--

INSERT INTO `review` (`id`, `product_id`, `name`, `content`, `rating`, `submit_date`) VALUES
(48, 11, 'jjjj', 'eee', 5, 2147483647);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `category`
--
ALTER TABLE `category`
  ADD UNIQUE KEY `ID` (`id`);

--
-- Indexen voor tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`first_name`) USING BTREE;

--
-- Indexen voor tabel `product`
--
ALTER TABLE `product`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexen voor tabel `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`,`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT voor een tabel `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT voor een tabel `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
