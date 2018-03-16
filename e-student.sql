-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 16 Mar 2018, 15:44
-- Wersja serwera: 10.1.30-MariaDB
-- Wersja PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `e-student`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `academic`
--

CREATE TABLE `academic` (
  `ac_id` int(11) NOT NULL,
  `ac_name` int(11) NOT NULL,
  `ac_describe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `departements`
--

CREATE TABLE `departements` (
  `d_id` int(11) NOT NULL,
  `d_name` text NOT NULL,
  `d_street` text NOT NULL,
  `d_no_building` char(3) NOT NULL,
  `d_zip_code` text NOT NULL,
  `d_post_office` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `departements`
--

INSERT INTO `departements` (`d_id`, `d_name`, `d_street`, `d_no_building`, `d_zip_code`, `d_post_office`) VALUES
(1, 'Wydział Nauk Ekonomicznych i Informatyki', 'Gałczyńskiego', '28', '09400', 'Płock'),
(2, 'Wydział Nauk o Zdrowiu', 'Dąbrowskiego', '2', '09402', 'Płock'),
(3, 'Wydział Nauk Humanistycznych i Społecznych', 'Gałczyńskiego', '28', '09400', 'Płock');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `messages`
--

CREATE TABLE `messages` (
  `mess_id` int(11) NOT NULL,
  `mess_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `news`
--

CREATE TABLE `news` (
  `n_id` int(11) NOT NULL,
  `n_title` varchar(64) NOT NULL,
  `n_date` datetime NOT NULL,
  `n_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `news`
--

INSERT INTO `news` (`n_id`, `n_title`, `n_date`, `n_text`) VALUES
(12, 'sdfsadfasdfdsf', '2018-03-10 17:03:16', '<p>asdasdasdasdasdadasdsadasdada zeedytowanojeszcze raz</p><p>asdasdasdasd</p>'),
(13, 'asdasdadasda', '2018-03-16 14:03:41', '<ul><li><a href=\"http://google.pl\">google</a>as<strong>dadadadadasdadadasdasdasdasdasdas<em>dadasdsada</em></strong><em>asdadasdadadsadad</em>asdasdasdadadads</li><li>vsdfasdfsadf<a target=\"_blank\" href=\"http://google.pl\">google.pl</a></li></ul>');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `recruitment_conclusion`
--

CREATE TABLE `recruitment_conclusion` (
  `id_rc` int(11) NOT NULL,
  `rc_polish_degree` int(11) NOT NULL,
  `rc_math_degree` int(11) NOT NULL,
  `rc_english_degree` int(11) NOT NULL,
  `rc_st_additional` int(2) NOT NULL DEFAULT '0',
  `rc_average_degree` double NOT NULL,
  `rc_polish_score` int(3) NOT NULL,
  `rc_math_score` int(3) NOT NULL,
  `rc_english_score` int(3) NOT NULL,
  `rc_add_score` int(3) NOT NULL DEFAULT '0',
  `rc_behavior` int(11) NOT NULL,
  `st_id` int(11) NOT NULL,
  `sw_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `recruitment_conclusion`
--

INSERT INTO `recruitment_conclusion` (`id_rc`, `rc_polish_degree`, `rc_math_degree`, `rc_english_degree`, `rc_st_additional`, `rc_average_degree`, `rc_polish_score`, `rc_math_score`, `rc_english_score`, `rc_add_score`, `rc_behavior`, `st_id`, `sw_id`) VALUES
(5, 3, 3, 3, 3, 3.56, 30, 30, 30, 0, 6, 12, 5),
(6, 5, 5, 5, 5, 2.8, 30, 30, 30, 0, 3, 11, 4),
(7, 3, 6, 5, 5, 3.23, 45, 50, 40, 0, 2, 11, 14),
(8, 5, 3, 4, 5, 4.12, 78, 34, 79, 0, 5, 9, 11),
(9, 3, 5, 4, 5, 4.33, 30, 56, 78, 0, 6, 12, 4);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `speciality`
--

CREATE TABLE `speciality` (
  `sp_id` int(11) NOT NULL,
  `sp_name` varchar(128) NOT NULL,
  `sp_describe` text NOT NULL,
  `sw_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `speciality`
--

INSERT INTO `speciality` (`sp_id`, `sp_name`, `sp_describe`, `sw_id`) VALUES
(1, 'Grafika komputerowa i projektowanie gier', 'W ramach specjalności zostaną poruszone zagadnienia z grafiki komputerowej,\r\nprojektowania i programowania gier komputerowych.\r\nStudent pozna zagadnienia i uzyska praktyczną umiejętność używania narzędzi do grafiki\r\ndwu oraz trójwymiarowej.\r\nStudent uzyska wiedzę z zakresu podstaw oraz zaawansowanych technik programowania.\r\nNabyta wiedza umożliwi pracę na stanowiskach wszędzie tam, gdzie wymagana jest\r\nznajomość zagadnień graficznych oraz programistycznych.\r\nAbsolwent tej specjalności będzie przygotowany do pracy na takich stanowiskach, jak\r\ngrafik komputerowy (grafika 2D oraz 3D), programista grafiki wizualnej, programista.\r\nPosiadamy pięć pracowni komputerowych wyposażonych w nowoczesne\r\noprogramowanie. Zajęcia na kierunku Informatyka I prowadzone są głównie w pracowniach\r\nkształcenia praktycznego – laboratoriach komputerowych. Są to studia 3,5 letnie inżynierskie,\r\nprofil praktyczny. Gro wykładowców to praktycy. Proponujemy także warsztaty praktyczne\r\noraz zajęcia fakultatywne.', 4),
(2, 'Programowanie i bazy danych', 'Absolwenci tej specjalności będą przygotowani do projektowania, implementowania i\nwdrażania systemów informatycznych opartych na komercyjnych i niekomercyjnych\nsystemach bazodanowych zgodnie z wymaganiami dostarczonymi przez klienta (urzędy\nadministracji, firmy ubezpieczeniowe, banki, instytucje prywatne, itp.).\nStudent uzyska wiedzę z zakresu administracji systemami zarządzania bazami danych,\nzarówno komercyjnymi, np. ORACLE, MS SQL Server, jak i niekomercyjnymi takimi, jak\nPostgreSQL, MySQL.\nW ramach tej specjalności poruszone zostaną zaawansowane aspekty programowania w\nróżnych językach programowania. Studenci poznają języki Ada, C, C++, Java SE, Java EE,\nJ2ME, C#, .Net.\nPonadto student tej specjalności pozyska umiejętności pozwalające na podjęcie pracy w\ncharakterze programisty lub administratora systemów bazodanowych w różnych\nprzedsiębiorstwach, korporacjach oraz małych i średnich firmach.\nPosiadamy pięć pracowni komputerowych wyposażonych w nowoczesne\noprogramowanie. Zajęcia na kierunku Informatyka I prowadzone są głównie w pracowniach\nkształcenia praktycznego – laboratoriach komputerowych. Są to studia 3,5 letnie inżynierskie,\nprofil praktyczny. Gro wykładowców to praktycy. Proponujemy także warsztaty praktyczne\noraz zajęcia fakultatywne.', 4),
(3, 'Sieci komputerowe i sieciowe systemy operacyjne', 'Specjalność ta będzie ukierunkowana na oprogramowanie komunikacyjne, instalację i\r\ntworzenie sieci LAN i WAN, architektury logiczne sieci, administrowanie i zarządzanie\r\nsieciami.\r\nNa zajęciach tej specjalności będą poruszone także zagadnienia użytkowania i\r\nprojektowania systemów teleinformatycznych (sieci przewodowe i bezprzewodowe) oraz\r\nwsparcia technologii webowych.\r\nStudent uzyska praktyczną wiedzę z zakresu administracji systemami operacyjnymi,\r\nszczególnie systemami Unix, Linux i Windows Server.\r\nAbsolwent będzie mógł pracować z systemami operacyjnymi w różnych klasach i typach\r\nurządzeń sieciowych oraz będzie w stanie samodzielnie projektować, zarządzać oraz\r\nintegrować sieci komputerowe.\r\nPosiadamy pięć pracowni komputerowych wyposażonych w nowoczesne\r\noprogramowanie. Zajęcia na kierunku Informatyka I prowadzone są głównie w pracowniach\r\nkształcenia praktycznego – laboratoriach komputerowych. Są to studia 3,5 letnie inżynierskie,\r\nprofil praktyczny. Gro wykładowców to praktycy. Proponujemy także warsztaty praktyczne\r\noraz zajęcia fakultatywne. Proponujemy także pracownię praktyczną do stworzenia sieci.', 4);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `student`
--

CREATE TABLE `student` (
  `st_id` int(11) NOT NULL,
  `st_login` varchar(64) NOT NULL,
  `st_password` varchar(255) NOT NULL,
  `st_name` varchar(32) NOT NULL,
  `st_sec_name` varchar(32) DEFAULT NULL,
  `st_surname` varchar(32) DEFAULT NULL,
  `st_city` varchar(32) DEFAULT NULL,
  `st_street` varchar(32) DEFAULT NULL,
  `st_house_number` varchar(16) DEFAULT NULL,
  `st_zipcode` varchar(5) DEFAULT NULL,
  `st_pesel` varchar(11) DEFAULT NULL,
  `st_birth_date` date DEFAULT NULL,
  `st_photo` varchar(128) DEFAULT NULL,
  `st_indeks` int(11) DEFAULT NULL,
  `st_start_date` date DEFAULT NULL,
  `st_email` varchar(64) NOT NULL,
  `st_role` char(1) DEFAULT NULL,
  `st_bad_login_count` int(1) DEFAULT '0',
  `st_date_bad_login` datetime DEFAULT NULL,
  `study_way_sw_id` int(11) DEFAULT NULL,
  `academic_ac_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='All of app users.';

--
-- Zrzut danych tabeli `student`
--

INSERT INTO `student` (`st_id`, `st_login`, `st_password`, `st_name`, `st_sec_name`, `st_surname`, `st_city`, `st_street`, `st_house_number`, `st_zipcode`, `st_pesel`, `st_birth_date`, `st_photo`, `st_indeks`, `st_start_date`, `st_email`, `st_role`, `st_bad_login_count`, `st_date_bad_login`, `study_way_sw_id`, `academic_ac_id`) VALUES
(9, 'waldorm123', '$2y$10$R3dkxMlUT3UnZzlXhjDQSO9//wUYKMrGT7KeGQ6Hrefjvt1.EsVZu', 'Janek', NULL, 'Wisniewski', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'waldorm123@gmail.com', NULL, 0, NULL, NULL, NULL),
(11, 'test123', '$2y$10$kXcpmziEnBHxWafBzG9T.udXIEyce/smUXPEPMv8Lgr8Ehihx4KdO', 'test123', NULL, 'test123', NULL, NULL, NULL, NULL, NULL, NULL, 'upload/avatars/11/73f5f6ccaafbb0141b1aaa9b2b11de96.jpg', NULL, NULL, 'test123@gmail.com', NULL, 0, NULL, NULL, NULL),
(12, 'waldorm', '$2y$10$4STFe6V1ciE26Jqi55Es5ehs.mYg9Z.6h997.TwwSLgEkbzBdo5i6', 'Arkadiusz', NULL, 'Wiśniewski', 'Tłuchowo', '3 Maja', '4', '87605', '94200300000', '1994-03-20', 'upload/avatars/12/b73120908bfb22c79c75dc532d58f203.jpg', 15957, NULL, 'waldorm8@gmail.com', NULL, 0, NULL, NULL, NULL),
(13, 'testowe123', '$2y$10$t6zXtiQF79Op8C1//qdoy.c8Q8v7UYbgo.AE9aU2kQKje6HU9a7.G', 'testowe', NULL, 'testowe', 'Płock', 'jachowicza', '3', '87605', '12345678911', '2017-02-12', NULL, 15957, NULL, 'test@gmail.com', NULL, 2, '2018-03-16 15:03:52', NULL, NULL),
(14, 'administrator', '$2y$10$kAflxsjcQprKo0K9jmp4ietSamKV0o9NmS86VU4o3PhCGJXhsGxaS', 'admin', 'admin', 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ADMINISTRATOR', 'a', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `study_way`
--

CREATE TABLE `study_way` (
  `sw_id` int(11) NOT NULL,
  `sw_name` varchar(64) NOT NULL,
  `sw_type` varchar(32) DEFAULT NULL,
  `d_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='All of study directions.';

--
-- Zrzut danych tabeli `study_way`
--

INSERT INTO `study_way` (`sw_id`, `sw_name`, `sw_type`, `d_id`) VALUES
(4, 'Informatyka', 'Inżynier', 1),
(5, 'Matematyka', 'Licencjat', 1),
(10, 'Kosmetologia', 'Licencjat', 2),
(11, 'Pedagogika', 'Licencjat', 3),
(14, 'Filologia', 'Licencjat', 3);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `academic`
--
ALTER TABLE `academic`
  ADD PRIMARY KEY (`ac_id`);

--
-- Indeksy dla tabeli `departements`
--
ALTER TABLE `departements`
  ADD PRIMARY KEY (`d_id`);

--
-- Indeksy dla tabeli `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`mess_id`);

--
-- Indeksy dla tabeli `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`n_id`);

--
-- Indeksy dla tabeli `recruitment_conclusion`
--
ALTER TABLE `recruitment_conclusion`
  ADD PRIMARY KEY (`id_rc`),
  ADD KEY `FK_recruitment` (`st_id`),
  ADD KEY `FK_recruitment_way` (`sw_id`);

--
-- Indeksy dla tabeli `speciality`
--
ALTER TABLE `speciality`
  ADD PRIMARY KEY (`sp_id`),
  ADD KEY `FK_speciality` (`sw_id`);

--
-- Indeksy dla tabeli `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`st_id`),
  ADD KEY `student_academic` (`academic_ac_id`),
  ADD KEY `student_study_way` (`study_way_sw_id`);

--
-- Indeksy dla tabeli `study_way`
--
ALTER TABLE `study_way`
  ADD PRIMARY KEY (`sw_id`),
  ADD KEY `FK_study_way` (`d_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `academic`
--
ALTER TABLE `academic`
  MODIFY `ac_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `departements`
--
ALTER TABLE `departements`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `messages`
--
ALTER TABLE `messages`
  MODIFY `mess_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `news`
--
ALTER TABLE `news`
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT dla tabeli `recruitment_conclusion`
--
ALTER TABLE `recruitment_conclusion`
  MODIFY `id_rc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `speciality`
--
ALTER TABLE `speciality`
  MODIFY `sp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `student`
--
ALTER TABLE `student`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT dla tabeli `study_way`
--
ALTER TABLE `study_way`
  MODIFY `sw_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `recruitment_conclusion`
--
ALTER TABLE `recruitment_conclusion`
  ADD CONSTRAINT `FK_recruitment` FOREIGN KEY (`st_id`) REFERENCES `student` (`st_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_recruitment_way` FOREIGN KEY (`sw_id`) REFERENCES `study_way` (`sw_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `speciality`
--
ALTER TABLE `speciality`
  ADD CONSTRAINT `FK_speciality` FOREIGN KEY (`sw_id`) REFERENCES `study_way` (`sw_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_academic` FOREIGN KEY (`academic_ac_id`) REFERENCES `academic` (`ac_id`),
  ADD CONSTRAINT `student_study_way` FOREIGN KEY (`study_way_sw_id`) REFERENCES `study_way` (`sw_id`);

--
-- Ograniczenia dla tabeli `study_way`
--
ALTER TABLE `study_way`
  ADD CONSTRAINT `FK_study_way` FOREIGN KEY (`d_id`) REFERENCES `departements` (`d_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
