-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2020 at 01:23 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trast`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `text` varchar(200) DEFAULT NULL,
  `answer1` varchar(200) DEFAULT NULL,
  `answer2` varchar(200) DEFAULT NULL,
  `answer3` varchar(200) DEFAULT NULL,
  `answer` varchar(3) DEFAULT NULL,
  `imagePath` varchar(200) NOT NULL,
  `dificulty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `text`, `answer1`, `answer2`, `answer3`, `answer`, `imagePath`, `dificulty`) VALUES
(1, 'Când se aplică regulile conduitei preventive?', 'când conduceţi efectiv autovehiculul pe drumurile publice;', 'când autovehiculul este oprit pe partea carosabilă;', ' atât în timpul conducerii efective, cât şi atunci când autovehiculul este oprit.', 'C', '', 1),
(4, 'Conducătorului auto i se interzice:', 'să arunce din vehicul obiecte, substanţe sau alte bunuri;', ' să deschidă uşile, dacă vehiculul este oprit sau staţionat pe partea carosabilă;', ' să folosească instalaţia de sonorizare cu care este echipat autoturismul.', 'A', '', 1),
(5, 'Cum se pedepseşte conducerea pe drumurile publice a unui autovehicul din categoria C, de către o persoană al cărei permis este valabil pentru categoria B?', 'penal;', 'contravenţional;', 'amendă contravenţională şi reţinerea permisului de conducere.', 'A', '', 1),
(6, 'Conducătorul unui autoturism poate transporta obiecte al căror gabarit depăşeşte, împreună cu încărcătura, dimensiunile acestuia?', 'da, dacă extremitatea obiectelor este semnalizată cu un steag roşu;', 'nu;', 'da, dacă obiectele depăşesc lăţimea autovehiculului.', 'B', '', 1),
(7, 'Perna de aer (AIRBAG-ul) asigură:', 'amortizarea rapidă a trepidaţiilor datorate denivelărilor existente pe drumul public;', 'protecţia suplimentară a persoanelor în cazul unui impact puternic al autovehiculului;', 'posibilitatea conducerii relaxate, cu capul sprijinit de aceasta.', 'B', '', 1),
(8, 'Indicatorul vă obligă:', 'să circulaţi înainte sau la dreapta în prima intersecţie', 'să viraţi la stânga, deoarece accesul în celelalte direcţii este interzis;', 'să urmaţi traseul ocolitor, presemnalizat la dreapta.', 'A', '1438094006.jpg', 2),
(9, 'Acest indicator vă avertizează că urmează:', 'alte pericole;', 'un drum fără marcaje;', 'un drum cu marcaje.', 'A', '1438099994.jpg', 1),
(10, 'Conducătorul autoturismului din imagine va circula cu:', '80 km/h;', '90 km/h;', '100 km/h.', 'A', '1438114487.jpg', 2),
(11, 'Care dintre autovehicule staţionează greşit?', 'autocamionul;', 'utoutilitara;', 'ambele autovehicule.', 'C', '1438262992.jpg', 3),
(12, 'În situaţia dată, veţi circula:', 'fără lumini;', 'numai cu luminile de poziţie;', 'cu luminile de întâlnire.', 'C', '1438165341.jpg', 2),
(13, 'Puteţi depăşi în această situaţie, dacă vă aflaţi la volanul autoturismului?', 'nu, deoarece treceţi de axul drumului;', 'da, manevra este regulamentară;', 'nu, deoarece marcajul orizontal interzice manevra.', 'B', '1438251884.jpg', 1),
(14, 'La întâlnirea cărui indicator conducătorul auto nu are prioritate de trecere?', '„Prioritate pentru circulaţia din sens invers”;', '„Prioritate faţă de circulaţia din sens invers”;', '„Drum cu prioritate”.', 'A', '', 1),
(15, 'Ce vehicule au voie să pătrundă în intersecţie la culoarea roşie a semaforului?', 'niciun vehicul, cu excepţia celor destinate stingerii incendiilor, ale ambulanţei şi ale poliţiei, când se deplasează în acţiuni de intervenţie sau în misiuni care impun urgenţă;', 'autovehiculele care virează la stânga;', 'autovehiculele poliţiei şi cele care execută virajul la stânga.', 'A', '', 2),
(16, 'În cazul în care, într-o intersecţie, lângă semaforul în stare de funcţionare este instalat indicatorul „Oprire“, sunteți obligat să respectaţi:', 'semnificaţia indicatorului;', 'regula priorităţii de dreapta;', 'semnificaţia luminii semaforului.', 'C', '', 2),
(17, 'Avertizarea sonoră se foloseşte:', 'ori de câte ori este necesar, pentru evitarea unui pericol imediat;', 'la trecerea pe lângă biciclişti;', 'în localităţi, la apropierea de o trecere pentru pietoni.', 'A', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(70) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`, `phone`) VALUES
(8, 'BLAGA MIHAI', 'aa', '4124bc0a9335c27f086f', 'mihaiandrei_99@yahoo.com', '0733153579'),
(11, 'BLAGA MIHAI', 'aa', '4124bc0a9335c27f086f', 'mihaiandrei_99@yahoo.com', '0733153579'),
(12, 'BLAGA MIHAI', 'aaaa', '4124bc0a9335c27f086f', 'mihaiandrei_99@yahoo.comcc', '0733153579'),
(13, 'BLAGA MIHAI', 'aagvfc', '4124bc0a9335c27f086f', 'mihaiandrei_99@yahoo.comc', '0733153579'),
(14, 'BLAGA MIHAI', 'aagvfcdsa', '4124bc0a9335c27f086f', 'mihaiandrei_99@yahoo.comcdasd', '0733153579'),
(15, 'BLAGA MIHAI', 'aaa', '47bce5c74f589f4867db', 'mihaiandrei_99@yahoo.comdsa', '0733153579'),
(16, 'tt', 'tt', 'accc9105df5383111407', 'mihaiandrei_99@yahoo.comfsf', '0733153579'),
(17, 'qq', 'qq', '$2y$10$Id5m7UlwUQXho', 'mihaiandrei_99@yahoo.comdsad', '0733153579'),
(18, 'ee', 'ee', '$2y$10$yVC0bv/UYHfJ.F/E.AoEiOefU45IKtzYt9tdxUhRb2UExxSRSzuKG', 'mihaiandrei_99@yahoo.comsad', '0733153579');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
