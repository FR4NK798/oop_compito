-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Mag 16, 2024 alle 01:29
-- Versione del server: 10.4.28-MariaDB
-- Versione PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oop_compito`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `cards`
--

CREATE TABLE `cards` (
  `id` int(5) UNSIGNED NOT NULL,
  `nome` varchar(20) NOT NULL,
  `descrizione` varchar(5000) NOT NULL,
  `prezzo` int(15) NOT NULL,
  `immagine` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `cards`
--

INSERT INTO `cards` (`id`, `nome`, `descrizione`, `prezzo`, `immagine`) VALUES
(1, 'iphonewaoooo', 'L\'iPhone 3G è uno smartphone prodotto da Apple ed è la seconda generazione di iPhone. È il successore dell\'iPhone 2G e il predecessore dell\'iPhone 3GS. È stato presentato il 9 giugno 2008 presso la conferenza del WWDC 2008 a San Francisco', 100, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjPbXoB8fh8S79XElNoKRjiRour6kJueYWZHMONIXw-w&s'),
(3, 'Galaxy fold', 'L\'intelligenza Artificiale è qui! A partire dal 28 Marzo 2024 anche su Galaxy S23|S23FE|Z Flip 5|Z Fold 5| Tab S9. Scopri di più', 1500, 'https://assets.mmsrg.com/isr/166325/c1/-/ASSET_MMS_138796091?x=536&y=402&format=jpg&quality=80&sp=yes&strip=yes&trim&ex=536&ey=402&align=center&resizesource&unsharp=1.5x1+0.7+0.02&cox=0&coy=0&cdx=536&cdy=402'),
(4, 'nokia n8', 'È il primo smartphone Nokia ad utilizzare il sistema operativo open source Symbian^3 prodotto della Symbian OS che poi è stato aggiornato a Symbian Anna sempre della Symbian OS e poi a Symbian Belle. Ha un display multi-touch capacitivo da 3,5\" con risoluzione 640 × 360. È dotato di fotocamera con sensore da 12 megapixel, 1/1.83″, flash allo xenon e ottica Carl Zeiss. Registra filmati con risoluzione 720p con flusso audio stereo grazie ai due microfoni incorporati nel dispositivo.', 200, 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c5/Nokia_N8.png/250px-Nokia_N8.png'),
(5, 'sisi come no', 'È il primo smartphone Nokia ad utilizzare il sistema operativo open source Symbian^3 prodotto della Symbian OS che poi è stato aggiornato a Symbian Anna sempre della Symbian OS e poi a Symbian Belle. Ha un display multi-touch capacitivo da 3,5', 200, 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c5/Nokia_N8.png/250px-Nokia_N8.png');

-- --------------------------------------------------------

--
-- Struttura della tabella `user_consentiti`
--

CREATE TABLE `user_consentiti` (
  `id` int(5) UNSIGNED NOT NULL,
  `nomeUtente` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `user_consentiti`
--

INSERT INTO `user_consentiti` (`id`, `nomeUtente`, `password`) VALUES
(1, 'utente1', 'utente1'),
(2, 'utente2', 'utente2'),
(3, 'utente3', 'utente3');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `user_consentiti`
--
ALTER TABLE `user_consentiti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT per la tabella `user_consentiti`
--
ALTER TABLE `user_consentiti`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
