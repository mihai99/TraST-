-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2020 at 05:54 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(17, 'Avertizarea sonoră se foloseşte:', 'ori de câte ori este necesar, pentru evitarea unui pericol imediat;', 'la trecerea pe lângă biciclişti;', 'în localităţi, la apropierea de o trecere pentru pietoni.', 'A', '', 1),
(18, 'Indicatorul din imagine semnifică:', ' „Alte pericole“', ' „Copii“', ' „Ambuteiaj“', 'C', '3704.jpeg', 2),
(19, 'Ce obligații aveți în situația dată?', 'să claxonați, pentru a avertiza pietonii', 'să acordați prioritate pietonilor', 'să circulați cu prudență, întrucât indicatorul presemnalizează o trecere pentru pietoni', 'C', '3641.jpeg', 1),
(20, 'Depăşirea vehiculelor pe drumurile publice este interzisă:', 'pe sectorul de drum unde s-a format o coloană de autovehicule în aşteptare, dacă prin aceasta se intră pe sensul opus de circulaţie;', 'în intersecţiile dirijate doar cu indicatoare rutiere;', 'atunci când cel depăşit este remorcat şi are puse în funcţiune luminile de avarie', 'A', '', 1),
(21, 'Sunteţi obligat să nu depăşiţi viteza de 50 km/h în afara localităţilor, în următoarele situaţii:\r\n', 'când partea carosabilă este acoperită cu mâzgă;', 'la coborârea drumurilor în pantă;', 'la întâlnirea indicatorului „Prioritate pentru circulaţia din sens invers“.', 'A', '', 1),
(22, 'Este permisă deţinerea, montarea sau folosirea la autovehicule a sistemelor care perturbă buna funcţionare a dispozitivelor de supraveghere a traficului?', 'da;', 'nu;', 'acest aspect nu este stabilit legal.', 'B', '', 2),
(23, 'În ce situaţii sunteţi obligat să acordaţi prioritate de trecere?', 'într-o intersecţie nedirijată, atunci când pătrundeţi pe un drum naţional, venind de pe un drum judeţean;', 'la întâlnirea indicatorului „Drum cu prioritate“;', 'la întâlnirea pietonilor aflaţi pe sensul de mers opus.', 'A', '', 3),
(24, 'Conducătorii de vehicule trebuie să respecte regulile de circulaţie, generale şi particulare, în următoarea ordine:', 'semnalele, indicaţiile şi dispoziţiile poliţistului rutier; semnalele speciale de avertizare, luminoase sau sonore, ale autovehiculelor cu regim de circulaţie prioritară; semnalizarea temporară;', 'semnalele, indicaţiile şi dispoziţiile poliţistului rutier; semnalizarea temporară; semnalele speciale de avertizare, luminoase sau sonore, ale autovehiculelor cu regim de circulaţie prioritară;', 'semnalele speciale de avertizare, luminoase sau sonore, ale autovehiculelor cu regim de circulaţie prioritară; semnalele, indicaţiile şi dispoziţiile poliţistului rutier; semnalizarea temporară.', 'A', '', 3),
(25, 'Pentru care dintre faptele de mai jos se aplică măsura reţinerii permisului de conducere?', 'pentru neoprirea la semnalul regulamentar al poliţistului;', 'pentru nerespectarea dispoziţiilor legale referitoare la depăşire;', 'pentru nerespectarea normelor privind folosirea luminilor pe timp de noapte.', 'AB', '', 3),
(26, 'Care dintre variantele de mai jos reprezintă calităţi ale unui ulei de motor?', 'culoarea;', 'vâscozitatea;', 'punctul de congelare.', 'BC', '', 3),
(27, 'Care este poziţia corectă a conducătorului auto în timpul conducerii?', 'să fie cât mai concentrat, să ţină volanul strâns şi privirea îndreptată numai înainte şi să stea cât mai aproape de parbriz;', 'să stea cât mai confortabil pe scaun, cu capul rezemat de tetieră şi cu ambele mâini pe volan, în zona orelor 10:00-14:00;', 'cea mai corectă poziţie în timpul conducerii auto este aceea care previne apariţia somnului.', 'B', '', 2),
(28, 'În care dintre următoarele cazuri, pe lângă amenda contravenţională, se reţine şi permisul de conducere?', 'neoprirea la semnalul persoanelor autorizate din zona de lucrări la drumul public;', 'nerespectarea semnalelor poliţiştilor la trecerea coloanelor oficiale;', 'neoprirea la semnalul agentului de cale ferată.', 'B', '', 2),
(29, 'În care dintre situaţii se dispune imobilizarea unui vehicul?', 'conducătorul acestuia nu are asupra sa permisul de conducere;', 'starea tehnică a vehiculului deteriorează drumul public sau afectează mediul;', 'conducătorul autovehiculului nu are asupra sa certificatul de înmatriculare.', 'B', '', 2),
(30, 'Poliţistul rutier are dreptul de a confisca:', 'centurile de siguranţă neomologate;', 'mijloacele proprii de detectare a dispozitivelor de măsurare a vitezei;', 'dispozitivele care perturbă funcţionarea mijloacelor tehnice de supraveghere a traficului.', 'C', '', 1),
(31, 'Hemoragia nazală se poate opri dacă accidentatul:', 'stă culcat cu capul pe spate;', 'stă în picioare şi îşi strânge ambele nări timp de aproximativ 5-10 minute;', 'ridică mâna dreaptă.', 'B', '', 1),
(32, 'Uzura pneurilor creşte foarte mult:', 'la demarări şi frânări intense, consecinţe ale unui stil agresiv de conducere;', 'atunci când se conduce preventiv-defensiv;', 'la circulaţia pe timp nefavorabil.', 'A', '', 1),
(33, 'Ce obligaţii aveţi la întâlnirea indicatorului?', 'să circulaţi cu atenţie mărită, pentru a evita pericolele asupra cărora sunteţi avertizat;', 'să circulaţi cu viteză redusă, deoarece urmează o intersecţie periculoasă;', 'să circulaţi cu lanţuri antiderapante, în condiţii meteo nefavorabile.', 'A', '1438114400.jpg', 1),
(34, 'Ce obligaţii aveţi la întâlnirea indicatorului?', 'opriţi autovehiculul, fără a depăşi indicatorul, vă asiguraţi, apoi traversaţi;', 'traversaţi calea ferată cu viteză redusă, după ce v-aţi asigurat că nu se apropie trenul;', 'nicio obligaţie; indicatorul nu vi se adresează.', 'A', '1438609127.jpg', 2),
(35, 'Indicatorul precizează:', 'pe banda din stânga, vehiculele vor circula cu cel mult viteza indicată;', 'pe banda din dreapta, se poate circula fără restricţie de viteză;', 'pe banda din stânga, pot circula cei care se deplasează cel puţin cu viteza menţionată.', 'C', '1438339391.jpg', 3),
(36, 'Aţi selectat corect banda de circulaţie pentru a vira la stânga în intersecţia care urmează?', 'da;', 'nu;', 'sunteţi obligat să circulaţi numai înainte.', 'A', '1438251805.jpg', 2),
(37, 'Care este traseul recomandat pentru a vira la stânga?', 'traseul 1;', 'traseul 2;', 'virajul la stânga este interzis.', 'B', '1438359903.jpg', 2),
(38, 'Din punct de vedere al conduitei preventive, cum trebuie să procedaţi în această situaţie?', 'reduceţi viteza, deoarece copilul s-ar putea întoarce pentru a lua mingea din drum;', 'menţineţi viteza, deoarece copiii au fost avertizaţi şi rămân în siguranţă pe trotuar;', 'măriţi viteza, deoarece copiii nu aleargă pe stradă.', 'A', '1438014072.jpg', 1),
(39, 'Care dintre cele trei vehicule va trece ultimul prin intersecţia din imagine?', 'autoturismul;', 'autocamionul;', 'motocicleta.', 'A', '1438350235.jpg', 3),
(40, 'Cum procedaţi la întâlnirea panoului şi a indicatorului?', 'opriţi, vă asiguraţi şi acordaţi prioritate tuturor vehiculelor;', 'acordaţi prioritate vehiculelor care circulă din stânga;', 'acordaţi prioritate numai vehiculelor de transport public de persoane.', 'A', '1438371027.jpg', 2),
(41, 'Dacă viraţi la stânga:', 'aţi selectat corect banda de circulaţie, dar opriţi, pentru că semaforul este pe culoarea roşie;', 'aţi selectat bine banda de circulaţie, deci vă continuaţi deplasarea;', 'puteţi vira numai la dreapta.', 'A', '1438095482.jpg', 1),
(42, 'Ce obligaţii aveți la întâlnirea indicatorului „Animale“?', 'să reduceţi viteza numai la semnalul celor care însoţesc animale;', 'circulaţi cu atenţie şi, dacă se impune, reduceţi viteza;', 'nu aveţi nicio obligaţie, deoarece indicatorul se adresează persoanelor care însoţesc animale.', 'B', '', 2),
(43, 'nu aveţi nicio obligaţie, deoarece indicatorul se adresează persoanelor care însoţesc animale.', 'nu aveţi nicio obligaţie, deoarece indicatorul se adresează persoanelor care însoţesc animale.', 'nu există prevedere legală în acest sens;', 'la mai puţin de 50 m de staţiile de autobuz şi tramvai.', 'A', '', 3),
(44, 'Puteţi trece cu autovehiculul peste o linie continuă dacă:', 'linia continuă este însoţită de una discontinuă, iar aceasta din urmă este mai apropiată de sensul dvs. de deplasare;', 'aceasta este aplicată pe drumuri cu mai mult de o bandă pe sensul de mers;', 'aceasta separă sensurile de circulaţie.', 'A', '', 2),
(45, 'Marcajul aplicat pe marginea din dreapta a părţii carosabile, format dintr-o linie în zig-zag, semnifică:', 'interzicerea staţionării;', 'interzicerea opririi;', 'alte pericole.', 'A', '', 3),
(46, 'alte pericole.', 'vă continuaţi deplasarea, deoarece semnalul verde vă permite acest lucru;', 'claxonaţi şi găsiţi o modalitate de a avansa printre celelalte vehicule;', 'opriţi şi aşteptaţi deblocarea, după care pătrundeţi în intersecţie pe semnalul verde al semaforului.', 'C', '', 1),
(47, 'Puteţi opri sau staţiona regulamentar, cu toate luminile stinse, pe un drum iluminat, dacă vehiculul pe care îl conduceţi este vizibil de la o distanţă de cel puţin:', '50 m;', '100 m;', '150 m', 'A', '', 2),
(48, 'În care dintre situaţiile de mai jos este interzisă depăşirea vehiculelor?', 'în zona de acţiune a indicatorului „Alte pericole“;', 'la mai puţin de 50 m de o intersecţie;', 'în curbe, unde vizibilitatea este redusă sub 50 m.', 'C', '', 3),
(49, 'Care este limita maximă de viteză în localităţi?', '60 km/h;', '50 km/h;', '40 km/h.', 'B', '', 2),
(50, 'Cu ce viteză se poate circula în apropierea unei intersecţii?', 'limita maximă de viteză va fi respectată doar în cazul intersecţiilor dirijate;', 'cu o viteză care să permită oprirea, pentru a acorda prioritate de trecere participanţilor la trafic care au acest drept;', 'limita maximă de viteză în localităţi va fi de 50 km/h, iar în afara localităţilor de 130 km/h.', 'B', '', 1),
(51, 'În care dintre situaţii este permisă depăşirea?', 'în intersecţia semnalizată cu indicatoare de prioritate;', 'în intersecţia dirijată prin semnale luminoase;', ' în intersecţia dirijată prin semnale ale poliţistului.', 'ABC', '', 3),
(52, 'Pentru care dintre situaţiile de mai jos se dispune reţinerea permisului de conducere?', 'pentru neacordarea priorităţii de trecere;', 'permisul de conducere este deteriorat;', 'permisul de conducere prezintă modificări, ştersături sau adăugiri.', 'ABC', '', 3),
(53, 'Ce condiţii tehnice trebuie să îndeplinească un autovehicul pentru a circula pe drumurile publice?', 'să nu depăşească masa totală maximă autorizată înscrisă în certificatul de înmatriculare;', 'să nu depăşească gabaritul înscris în certificatul de înmatriculare;', 'să fie înmatriculat şi să corespundă condiţiilor tehnice legale.', 'AC', '', 3),
(55, 'Care este principalul factor de risc pe care trebuie să-l aveţi în vedere la conducerea autovehiculului prin tunele rutiere?', 'viteza redusă de deplasare şi mersul în coloană;', 'dificultăţi în adaptarea vederii la intrarea şi la ieşirea din asemenea pasaje;', 'posibilitatea existenţei unor denivelări ale părţii carosabile.', 'B', '', 2),
(56, 'La semnalul nevăzătorilor care traversează strada sunteţi obligat:', 'să reduceţi viteza autovehiculului şi să circulaţi cu atenţie;', 'să opriţi autovehiculul;', 'să reduceţi viteza autovehiculului şi să claxonaţi.', 'B', '', 1),
(57, 'Ce vehicule pot fi depăşite, prin excepţie, pe un pod?', 'vehiculele cu tracţiune animală, motociclete fără ataş şi biciclete;', 'tractoarele şi alte autovehicule lente;', 'niciun vehicul.', 'A', '', 2),
(58, 'Sfârşitul zonei în care oprirea a fost interzisă este anunţată de:', 'ambele indicatoare;', 'indicatorul 1;', 'indicatorul 2, însoţit de panoul adiţional.', 'C', '1438014477.JPG', 2),
(59, 'Care dintre cele două indicatoare obligă la schimbarea direcţiei de mers spre dreapta, după depăşirea locului unde este instalat?', 'indicatorul 2;', 'indicatorul 1;', 'ambele indicatoare.', 'A', '1438263336.JPG', 3),
(60, 'Cum procedează conducătorul auto când iese cu autovehiculul dintr-o curte sau dintr-un garaj pe un drum public?', 'acordă prioritate pietonilor şi vehiculelor aflate în mers;', 'solicită să fie pilotat de o altă persoană;', 'foloseşte avertizorul sonor ziua şi pe cel luminos, noaptea.', 'A', '', 1),
(61, 'La semnalul dat de personalul autorizat din zona lucrărilor pe drumurile publice, prin rotirea vioaie a braţului, aveţi obligaţia:', 'să măriţi viteza de deplasare a autovehiculului;', 'să ocoliţi obstacolul creat în carosabil, circulând în sens giratoriu;', 'să ocoliţi obstacolul indicat de acesta.', 'A', '', 3),
(62, 'Utilizarea frânei de serviciu este semnalizată cu:', 'luminile de culoare portocalie;', 'luminile de avarie din faţă şi din spate;', 'luminile roşii din spate.', 'C', '', 1),
(63, 'Care sunt vitezele maxime admise pentru subcategoria de autovehicule B1?', '90 km/h pe autostrăzi, 80 km/h pe drumurile expres sau naţionale europene şi 70 km/h pe celelalte categorii de drumuri;', '110 km/h pe autostrăzi, 90 km/h pe drumurile expres sau naţionale europene şi 80 km/h pe celelalte categorii de drumuri;', '130 km/h pe autostrăzi şi 90 km/h pe celelalte categorii de drumuri.', 'A', '', 3),
(64, 'Când nu vă este permisă întoarcerea vehiculului?', 'când lăţimea drumului public este mai mică de 7 m;', 'la urcarea pantelor;', 'pe marcajul pietonal.', 'C', '', 3),
(65, 'Pentru care dintre faptele de mai jos se aplică măsura reţinerii permisului de conducere?', 'pentru nerespectarea semnalelor, indicaţiilor şi dispoziţiilor poliţistului rutier aflat în exercitarea atribuţiilor de serviciu;', 'pentru nerespectarea dispoziţiilor legale referitoare la oprire şi staţionare;', 'pentru încălcarea normelor legale referitoare la semnalizarea vehiculelor.', 'A', '', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
