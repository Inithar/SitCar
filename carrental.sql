-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 08 Cze 2021, 14:37
-- Wersja serwera: 10.4.19-MariaDB
-- Wersja PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `carrental`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `adres_dostawy`
--

CREATE TABLE `adres_dostawy` (
  `idadres` int(11) NOT NULL,
  `ulica` varchar(70) COLLATE utf8_polish_ci NOT NULL,
  `nr_budynku` int(11) NOT NULL,
  `nr_mieszkania` int(11) DEFAULT NULL,
  `miasto` varchar(70) COLLATE utf8_polish_ci NOT NULL,
  `państwo` varchar(70) COLLATE utf8_polish_ci NOT NULL,
  `kod_pocztowy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `adres_dostawy`
--

INSERT INTO `adres_dostawy` (`idadres`, `ulica`, `nr_budynku`, `nr_mieszkania`, `miasto`, `państwo`, `kod_pocztowy`) VALUES
(1, 'Stawowa', 21, 12, 'Sosnowiec', '', 41200),
(2, 'Mireckiego', 12, 0, 'Katowice', '', 41200),
(3, 'Mazowiecka', 41, 0, 'Warszawa', '', 41200),
(4, 'Jagiełły', 121, 0, 'Karków', '', 41253),
(5, 'assadsadd', 12, 0, 'Katowice', '', 41200);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rola`
--

CREATE TABLE `rola` (
  `idrola` int(11) NOT NULL,
  `nazwa` varchar(45) COLLATE utf8_polish_ci NOT NULL,
  `data_aktywacji` datetime NOT NULL,
  `data_dezaktywacji` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `rola`
--

INSERT INTO `rola` (`idrola`, `nazwa`, `data_aktywacji`, `data_dezaktywacji`) VALUES
(1, 'administrator', '2021-06-07 12:57:58', NULL),
(2, 'użytkownik', '2021-06-07 12:57:58', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `samochód`
--

CREATE TABLE `samochód` (
  `idsamochód` int(11) NOT NULL,
  `model` varchar(70) COLLATE utf8_polish_ci NOT NULL,
  `obraz` varchar(200) COLLATE utf8_polish_ci NOT NULL,
  `liczba_drzwi` varchar(70) COLLATE utf8_polish_ci NOT NULL,
  `skrzynia_biegów` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `paliwo` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `klimatyzacja` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `napęd` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `śr_spalanie` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `poduszki_powietrzne` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `pojemność_bagażnika` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `typ_samochodu` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `cena_za_dzień` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `samochód`
--

INSERT INTO `samochód` (`idsamochód`, `model`, `obraz`, `liczba_drzwi`, `skrzynia_biegów`, `paliwo`, `klimatyzacja`, `napęd`, `śr_spalanie`, `poduszki_powietrzne`, `pojemność_bagażnika`, `typ_samochodu`, `cena_za_dzień`) VALUES
(1, 'Toyota C-HR HYBRID AUT.', '../public/img/cars/car-1.png\"', '5-drzwiowy', 'Automatyczna', 'Benzyna', 'Automatyczna', 'Przednie koła', 'Śr. spalanie: 3.6 [l / 100km]', '7 poduszek powietrznych', 'Pojemność bagażnika 377 l.', 'Miejski', 160),
(2, 'Kia Sportage', '../public/img/cars/car-2.png\"', '5-drzwiowy', 'Automatyczna', 'Benzyna', 'Automatyczna', 'Przednie koła', 'Śr. spalanie: 7.9 [l / 100km]', '6 poduszek powietrznych', 'Pojemność bagażnika 480 l.', 'Miejski', 180),
(3, 'BMW serii 1 AUT.', '../public/img/cars/car-3.png\"', '5-drzwiowy', 'Automatyczna', 'Benzyna', 'Automatyczna', 'Tylnie koła', 'Śr. spalanie: 6.0 [l / 100km]', '6 poduszek powietrznych', 'Pojemność bagażnika 360 l.', 'Miejski', 120),
(4, 'Mazda CX-5 AUT', '../public/img/cars/car-5.png\"', '5-drzwiowy', 'Automatyczna', 'Benzyna', 'Automatyczna', 'Przednie koła', 'Śr. spalanie: 7.4 [l / 100km]', '6 poduszek powietrznych', 'Pojemność bagażnika 506 l.', 'Miejski', 200),
(5, 'Peugeot Partner', '../public/img/cars/car-6.png\"', '3-drzwiowy', 'Automatyczna', 'Diesel', 'Automatyczna', 'Przednie koła', 'Śr. spalanie: 4.3 [l / 100km]', '2 poduszek powietrznych', 'Pojemność bagażnika 3700 l.', 'Użytkowy', 240),
(6, 'Fiat Doblo', '../public/img/cars/car-7.png\"', '3-drzwiowy', 'Manualna', 'Diesel', 'Manualna', 'Tylnie koła', 'Śr. spalanie: 6.0 [l / 100km]', '6 poduszek powietrznych', 'Pojemność bagażnika 3400 l.', 'Użytkowy', 320),
(7, 'Mercedes Vito AUT.', '../public/img/cars/car-8.png\"', '5-drzwiowy', 'Automatyczna', 'Diesel', 'Półautomatyczna', 'Przednie koła', 'Śr. spalanie: 7.4 [l / 100km]', '6 poduszek powietrznych', 'Pojemność bagażnika 300 l.', 'Użytkowy', 380),
(8, 'Opel Vivaro 9 os.', '../public/img/cars/car-9.png\"', '5-drzwiowy', 'Manualna', 'Diesel', 'Manualna', 'Przednie koła', 'Śr. spalanie: 6.0 [l / 100km]', '2 poduszek powietrznych', 'Pojemność bagażnika 1400 l.', 'Użytkowy', 300),
(9, 'Renault Trafic 6 os.', '../public/img/cars/car-10.png\"', '5-drzwiowy', 'Manualna', 'Diesel', 'Manualna', 'Przednie koła', 'Śr. spalanie: 6.7 [l / 100km]', '6 poduszek powietrznych', 'Pojemność bagażnika 4000 l.', 'Użytkowy', 360),
(10, 'Renault Captur AUT.', '../public/img/cars/car-11.png\"', '5-drzwiowy', 'Automatyczna', 'Benzyna', 'Manualna', 'Przednie koła', 'Śr. spalanie: 5.1 [l / 100km]', '7 poduszek powietrznych', 'Pojemność bagażnika 680 l.', 'Miejski', 180),
(11, 'Porsche 911 Turbo S (992)', '../public/img/cars/car-12.png\"', '3-drzwiowy', 'Automatyczna', 'Diesel', 'Automatyczna', 'Tylnie koła', 'Śr. spalanie: 4.8 [l / 100km]', '6 poduszek powietrznych', 'Pojemność bagażnika 400 l.', 'Sportowy', 1050),
(12, 'Audi R8 Performance Green Hell', '../public/img/cars/car-13.png\"', '3-drzwiowy', 'Automatyczna', 'Diesel', 'Automatyczna', 'Przednie koła', 'Śr. spalanie: 7.4 [l / 100km]', '6 poduszek powietrznych', 'Pojemność bagażnika 320 l.', 'Sportowy', 780),
(14, 'Toyota GR Supra', '../public/img/cars/car-15.png\"', '3-drzwiowy', 'Automatyczna', 'Diesel', 'Automatyczna', 'Przednie koła', 'Śr. spalanie: 5.7 [l / 100km]', '6 poduszek powietrznych', 'Pojemność bagażnika 330 l.', 'Sportowy', 360),
(15, 'Porsche 718 Boxster', '../public/img/cars/car-16.png\"', '3-drzwiowy', 'Automatyczna', 'Benzyna', 'Automatyczna', 'Przednie koła', 'Śr. spalanie: 5.1 [l / 100km]', '7 poduszek powietrznych', 'Pojemność bagażnika 380 l.', 'Sportowy', 420),
(16, 'Lexus LC500 Superturismo', '../public/img/cars/car-17.png\"', '3-drzwiowy', 'Automatyczna', 'Diesel', 'Automatyczna', 'Przednie koła', 'Śr. spalanie: 6.4 [l / 100km]', '7 poduszek powietrznych', 'Pojemność bagażnika 480 l.', 'Luksusowy', 490),
(17, 'BMW M8 Gran Coupé', '../public/img/cars/car-18.png\"', '3-drzwiowy', 'Automatyczna', 'Diesel', 'Automatyczna', 'Przednie koła', 'Śr. spalanie: 7.0 [l / 100km]', '6 poduszek powietrznych', 'Pojemność bagażnika 560 l.', 'Luksusowy', 700),
(18, 'Mercedes-AMG C63S', '../public/img/cars/car-19.png\"', '3-drzwiowy', 'Automatyczna', 'Diesel', 'Automatyczna', 'Przednie koła', 'Śr. spalanie: 5.7 [l / 100km]', '6 poduszek powietrznych', 'Pojemność bagażnika 380 l.', 'Luksusowy', 640),
(19, 'BMW 740d', '../public/img/cars/car-20.png\"', '3-drzwiowy', 'Automatyczna', 'Benzyna', 'Automatyczna', 'Przednie koła', 'Śr. spalanie: 5.1 [l / 100km]', '6 poduszek powietrznych', 'Pojemność bagażnika 380 l.', 'Luksusowy', 760);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tranzakcja`
--

CREATE TABLE `tranzakcja` (
  `idtranzakcja` int(11) NOT NULL,
  `data_rozpoczęcia` datetime NOT NULL,
  `data_zakończenia` datetime NOT NULL,
  `cena_auta_dzień` double NOT NULL,
  `wybór_usługi` varchar(45) COLLATE utf8_polish_ci NOT NULL,
  `koszt_całkowity` double NOT NULL,
  `użytkownik_id` int(11) NOT NULL,
  `adres_dostawy_id` int(11) NOT NULL,
  `samochód_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `tranzakcja`
--

INSERT INTO `tranzakcja` (`idtranzakcja`, `data_rozpoczęcia`, `data_zakończenia`, `cena_auta_dzień`, `wybór_usługi`, `koszt_całkowity`, `użytkownik_id`, `adres_dostawy_id`, `samochód_id`) VALUES
(1, '2021-06-09 20:12:00', '2021-06-14 20:11:00', 160, 'Samochód do ślubu (+500 zł / dzień)', 3300, 2, 1, 1),
(2, '2021-06-10 18:13:00', '2021-06-21 21:10:00', 200, 'Samochód na lotnisko', 2400, 2, 2, 4),
(3, '2021-06-12 18:13:00', '2021-06-24 18:13:00', 320, 'Długoterminowy wynajem', 3840, 2, 3, 6),
(4, '2021-06-11 18:15:00', '2021-06-13 18:18:00', 160, 'Samochód na lotnisko', 480, 1, 4, 1),
(5, '2021-06-10 08:15:00', '2021-06-12 08:15:00', 160, 'Wybierz typ usługi', 320, 4, 5, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `usługa`
--

CREATE TABLE `usługa` (
  `usługa1` varchar(60) COLLATE utf8_polish_ci DEFAULT NULL,
  `usługa2` varchar(60) COLLATE utf8_polish_ci DEFAULT NULL,
  `usługa3` varchar(60) COLLATE utf8_polish_ci DEFAULT NULL,
  `usługa4` varchar(60) COLLATE utf8_polish_ci DEFAULT NULL,
  `usługa5` varchar(60) COLLATE utf8_polish_ci DEFAULT NULL,
  `usługa6` varchar(60) COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `usługa`
--

INSERT INTO `usługa` (`usługa1`, `usługa2`, `usługa3`, `usługa4`, `usługa5`, `usługa6`) VALUES
('Krótkoterminowy wynajem', 'Długoterminowy wynajem', 'Samochód na lotnisko', 'Samochód do ślubu (+500 zł / dzień)', 'Samochód z kierowcą (+300 zł / dzień)', 'Samochód z ochroną (+600 zł / dzień)');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `użytkownik`
--

CREATE TABLE `użytkownik` (
  `idużytkownik` int(11) NOT NULL,
  `imie` varchar(45) COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` varchar(45) COLLATE utf8_polish_ci NOT NULL,
  `data_urodzenia` date NOT NULL,
  `email` varchar(45) COLLATE utf8_polish_ci NOT NULL,
  `hasło` varchar(300) COLLATE utf8_polish_ci NOT NULL,
  `nr_tel` varchar(12) COLLATE utf8_polish_ci NOT NULL,
  `data_dołączenia` datetime NOT NULL,
  `ulica` varchar(70) COLLATE utf8_polish_ci NOT NULL,
  `nr_budynku` int(11) NOT NULL,
  `nr_mieszkania` int(11) DEFAULT NULL,
  `miasto` varchar(70) COLLATE utf8_polish_ci NOT NULL,
  `kod_pocztowy` int(11) NOT NULL,
  `data_modyfikacji` datetime DEFAULT NULL,
  `zmodyfikowane_przez` int(11) DEFAULT NULL,
  `utworzone_przez` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `użytkownik`
--

INSERT INTO `użytkownik` (`idużytkownik`, `imie`, `nazwisko`, `data_urodzenia`, `email`, `hasło`, `nr_tel`, `data_dołączenia`, `ulica`, `nr_budynku`, `nr_mieszkania`, `miasto`, `kod_pocztowy`, `data_modyfikacji`, `zmodyfikowane_przez`, `utworzone_przez`) VALUES
(1, 'Patryk', 'Dyrcz', '1999-07-15', 'admin@gmail.com', '0c09e8168237ac50542a2d7a1ea5d3310e9bce7892dacd302d8ab75f47008cb3c57d4c2528c80a96c4269980f9089f8fc716fd4ebf9c06dbf61cb3fa9a6fb0b5', '457238821', '2021-06-07 16:39:04', 'Zabytkowa', 24, 12, 'Katowice', 41200, '2021-06-07 16:39:04', 1, 1),
(2, 'Alicja', 'Mularczyk', '1999-12-18', 'user@gmail.com', '8b64c46bc1fde5d832c15f16b85008b95d26141816344d33be945d43b41d55aeb2df89efa23dad5e9fb036559562095e9432aa901e31e572c1b25aa0ac18247e', '123124223', '2021-06-07 16:44:27', 'Jagielońska', 12, 21, 'Katowice', 41200, '2021-06-07 16:44:27', 2, 2),
(3, 'Daniel', 'Gandyra', '1999-12-24', 'gandi@gmail.com', '85b9e5d28bc3822f7a59c575102b8d6fd8f6cbb65b3ad413a36ccf3bd939d7b23331d49750f52c00515185af462fc6103ec5b9382379757b03c5cb819d6a30eb', '125423234', '2021-06-07 16:46:23', 'Bytomska', 39, 0, 'Sosnowiec', 41200, '2021-06-07 16:46:23', 3, 3),
(4, 'Szymon', 'Świtała', '1999-12-17', 'kot@gmail.com', '0c09e8168237ac50542a2d7a1ea5d3310e9bce7892dacd302d8ab75f47008cb3c57d4c2528c80a96c4269980f9089f8fc716fd4ebf9c06dbf61cb3fa9a6fb0b5', '123123123', '2021-06-08 08:14:58', 'asdasddssd', 12, 0, 'asddsa', 12312, '2021-06-08 08:14:58', 4, 4);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `użytkownik_rola`
--

CREATE TABLE `użytkownik_rola` (
  `idużytkownik` int(11) NOT NULL,
  `idrola` int(11) NOT NULL,
  `data_nadania` date NOT NULL,
  `data_odebrania` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `użytkownik_rola`
--

INSERT INTO `użytkownik_rola` (`idużytkownik`, `idrola`, `data_nadania`, `data_odebrania`) VALUES
(1, 1, '2021-06-07', NULL),
(2, 2, '2021-06-07', NULL),
(3, 2, '2021-06-07', NULL),
(4, 2, '2021-06-08', NULL);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `adres_dostawy`
--
ALTER TABLE `adres_dostawy`
  ADD PRIMARY KEY (`idadres`);

--
-- Indeksy dla tabeli `rola`
--
ALTER TABLE `rola`
  ADD PRIMARY KEY (`idrola`);

--
-- Indeksy dla tabeli `samochód`
--
ALTER TABLE `samochód`
  ADD PRIMARY KEY (`idsamochód`);

--
-- Indeksy dla tabeli `tranzakcja`
--
ALTER TABLE `tranzakcja`
  ADD PRIMARY KEY (`idtranzakcja`),
  ADD KEY `fk_tranzakcja_użytkownik1_idx` (`użytkownik_id`),
  ADD KEY `fk_tranzakcja_adres1_idx` (`adres_dostawy_id`),
  ADD KEY `fk_tranzakcja_samochód1_idx` (`samochód_id`);

--
-- Indeksy dla tabeli `użytkownik`
--
ALTER TABLE `użytkownik`
  ADD PRIMARY KEY (`idużytkownik`),
  ADD KEY `fk_użytkownik_użytkownik1_idx` (`zmodyfikowane_przez`),
  ADD KEY `fk_użytkownik_użytkownik2_idx` (`utworzone_przez`);

--
-- Indeksy dla tabeli `użytkownik_rola`
--
ALTER TABLE `użytkownik_rola`
  ADD PRIMARY KEY (`idużytkownik`,`idrola`),
  ADD KEY `fk_użytkownik_has_rola_rola1_idx` (`idrola`),
  ADD KEY `fk_użytkownik_has_rola_użytkownik1_idx` (`idużytkownik`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `adres_dostawy`
--
ALTER TABLE `adres_dostawy`
  MODIFY `idadres` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `samochód`
--
ALTER TABLE `samochód`
  MODIFY `idsamochód` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT dla tabeli `tranzakcja`
--
ALTER TABLE `tranzakcja`
  MODIFY `idtranzakcja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `użytkownik`
--
ALTER TABLE `użytkownik`
  MODIFY `idużytkownik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `tranzakcja`
--
ALTER TABLE `tranzakcja`
  ADD CONSTRAINT `fk_tranzakcja_adres1` FOREIGN KEY (`adres_dostawy_id`) REFERENCES `adres_dostawy` (`idadres`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tranzakcja_samochód1` FOREIGN KEY (`samochód_id`) REFERENCES `samochód` (`idsamochód`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tranzakcja_użytkownik1` FOREIGN KEY (`użytkownik_id`) REFERENCES `użytkownik` (`idużytkownik`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `użytkownik`
--
ALTER TABLE `użytkownik`
  ADD CONSTRAINT `fk_użytkownik_użytkownik1` FOREIGN KEY (`zmodyfikowane_przez`) REFERENCES `użytkownik` (`idużytkownik`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_użytkownik_użytkownik2` FOREIGN KEY (`utworzone_przez`) REFERENCES `użytkownik` (`idużytkownik`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `użytkownik_rola`
--
ALTER TABLE `użytkownik_rola`
  ADD CONSTRAINT `fk_użytkownik_has_rola_rola1` FOREIGN KEY (`idrola`) REFERENCES `rola` (`idrola`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_użytkownik_has_rola_użytkownik1` FOREIGN KEY (`idużytkownik`) REFERENCES `użytkownik` (`idużytkownik`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
