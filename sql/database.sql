-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Creato il: Dic 12, 2023 alle 08:24
-- Versione del server: 5.7.39
-- Versione PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `autori`
--

CREATE TABLE `autori` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cognome` varchar(255) NOT NULL,
  `nazione` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `autori`
--

INSERT INTO `autori` (`id`, `nome`, `cognome`, `nazione`) VALUES
(1, 'Gabriel', 'García Márquez', NULL),
(2, 'Ernest', 'Hemingway', NULL),
(3, 'Jane', 'Austen', NULL),
(4, 'Mark', 'Twain', NULL),
(5, 'George', 'Orwell', NULL),
(6, 'Virginia', 'Woolf', NULL),
(7, 'Oscar', 'Wilde', NULL),
(8, 'Charles', 'Dickens', NULL),
(9, 'Fyodor', 'Dostoevsky', NULL),
(10, 'Leo', 'Tolstoy', NULL);

-- --------------------------------------------------------

--
-- Struttura della tabella `editori`
--

CREATE TABLE `editori` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `luogo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `editori`
--

INSERT INTO `editori` (`id`, `nome`, `luogo`) VALUES
(1, 'Mondadori', 'Milano, Italia'),
(2, 'Einaudi', 'Torino, Italia'),
(3, 'Rizzoli', 'Milano, Italia'),
(4, 'Bompiani', 'Milano, Italia'),
(5, 'Feltrinelli', 'Milano, Italia'),
(6, 'Adelphi', 'Milano, Italia'),
(7, 'Laterza', 'Bari, Italia'),
(8, 'Garzanti', 'Milano, Italia'),
(9, 'Zanichelli', 'Bologna, Italia'),
(10, 'Giunti', 'Firenze, Italia');

-- --------------------------------------------------------

--
-- Struttura della tabella `generi`
--

CREATE TABLE `generi` (
  `id` int(11) NOT NULL,
  `genere` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `generi`
--

INSERT INTO `generi` (`id`, `genere`) VALUES
(1, 'Romanzo'),
(2, 'Poesia'),
(3, 'Fantascienza'),
(4, 'Fantasy'),
(5, 'Giallo'),
(6, 'Thriller'),
(7, 'Biografia'),
(8, 'Saggio'),
(9, 'Storico'),
(10, 'Horror');

-- --------------------------------------------------------

--
-- Struttura della tabella `libri`
--

CREATE TABLE `libri` (
  `id` int(11) NOT NULL,
  `titolo` text NOT NULL,
  `id_autore` int(11) DEFAULT NULL,
  `id_editore` int(11) DEFAULT NULL,
  `id_genere` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `libri`
--

INSERT INTO `libri` (`id`, `titolo`, `id_autore`, `id_editore`, `id_genere`) VALUES
(1, 'Aforismi', 7, 5, 8);

-- --------------------------------------------------------

--
-- Struttura della tabella `prestiti`
--

CREATE TABLE `prestiti` (
  `id` int(11) NOT NULL,
  `id_utente` int(11) DEFAULT NULL,
  `id_libro` int(11) DEFAULT NULL,
  `data_prestito` datetime DEFAULT CURRENT_TIMESTAMP,
  `data_consegna` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `prestiti`
--

INSERT INTO `prestiti` (`id`, `id_utente`, `id_libro`, `data_prestito`, `data_consegna`) VALUES
(2, 1, 1, '2023-12-12 09:23:07', NULL);

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cognome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`id`, `nome`, `cognome`, `email`, `password`) VALUES
(1, 'Carlo', 'Contardi', 'c.contardi@icloud.com', 'ed8cb6104d29f97966db066329ef5404');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `autori`
--
ALTER TABLE `autori`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `editori`
--
ALTER TABLE `editori`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `generi`
--
ALTER TABLE `generi`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `libri`
--
ALTER TABLE `libri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_autore` (`id_autore`),
  ADD KEY `id_editore` (`id_editore`),
  ADD KEY `id_genere` (`id_genere`);

--
-- Indici per le tabelle `prestiti`
--
ALTER TABLE `prestiti`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_utente` (`id_utente`),
  ADD KEY `id_libro` (`id_libro`);

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `autori`
--
ALTER TABLE `autori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT per la tabella `editori`
--
ALTER TABLE `editori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT per la tabella `generi`
--
ALTER TABLE `generi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT per la tabella `libri`
--
ALTER TABLE `libri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT per la tabella `prestiti`
--
ALTER TABLE `prestiti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT per la tabella `utenti`
--
ALTER TABLE `utenti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `libri`
--
ALTER TABLE `libri`
  ADD CONSTRAINT `libri_ibfk_1` FOREIGN KEY (`id_autore`) REFERENCES `autori` (`id`),
  ADD CONSTRAINT `libri_ibfk_2` FOREIGN KEY (`id_editore`) REFERENCES `editori` (`id`),
  ADD CONSTRAINT `libri_ibfk_3` FOREIGN KEY (`id_genere`) REFERENCES `generi` (`id`);

--
-- Limiti per la tabella `prestiti`
--
ALTER TABLE `prestiti`
  ADD CONSTRAINT `prestiti_ibfk_1` FOREIGN KEY (`id_utente`) REFERENCES `utenti` (`id`),
  ADD CONSTRAINT `prestiti_ibfk_2` FOREIGN KEY (`id_libro`) REFERENCES `libri` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
