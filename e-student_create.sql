-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 14 Gru 2017, 21:36
-- Wersja serwera: 10.1.21-MariaDB
-- Wersja PHP: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struktura tabeli dla tabeli `contract`
--

CREATE TABLE `contract` (
  `c_id` int(11) NOT NULL,
  `worker_w_id` int(11) NOT NULL,
  `position_p_id` int(11) NOT NULL,
  `c_from` date NOT NULL,
  `c_till` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `exam`
--

CREATE TABLE `exam` (
  `e_id` int(11) NOT NULL,
  `student_st_id` int(11) NOT NULL,
  `subject_s_id` int(11) NOT NULL,
  `e_condition` varchar(12) DEFAULT NULL,
  `mark` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `history_login`
--

CREATE TABLE `history_login` (
  `hl_id` int(11) NOT NULL,
  `hl_ip` varchar(12) NOT NULL,
  `hl_date` datetime NOT NULL,
  `hl_login` varchar(64) NOT NULL,
  `hl_condition` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `history_login`
--

INSERT INTO `history_login` (`hl_id`, `hl_ip`, `hl_date`, `hl_login`, `hl_condition`) VALUES
(8, '::1', '2017-11-23 22:11:31', 'waldorm', 'Logowanie przebiegło pomyślnie!'),
(9, '::1', '2017-11-23 22:11:11', 'asdasd', 'Podany login lub hasło są nieprawidłowe.'),
(10, '::1', '2017-11-23 23:11:59', 'waldorm', 'Logowanie przebiegło pomyślnie!'),
(11, '::1', '2017-11-23 23:11:23', 'waldorm', 'Logowanie przebiegło pomyślnie!'),
(12, '::1', '2017-11-23 23:11:56', 'waldorm', 'Logowanie przebiegło pomyślnie!'),
(13, '::1', '2017-11-23 23:11:31', 'aleks', 'Podany login lub hasło są nieprawidłowe.'),
(14, '::1', '2017-11-24 13:11:18', 'waldorm', 'Logowanie przebiegło pomyślnie!'),
(15, '::1', '2017-11-24 19:11:54', 'waldorm', 'Podany login lub hasło są nieprawidłowe.'),
(16, '::1', '2017-11-24 19:11:26', 'waldorm', 'Podany login lub hasło są nieprawidłowe.'),
(17, '::1', '2017-11-24 19:11:53', 'waldorm', 'Logowanie przebiegło pomyślnie!'),
(18, '::1', '2017-11-24 19:11:59', 'waldorm', 'Podany login lub hasło są nieprawidłowe.'),
(19, '::1', '2017-11-24 19:11:14', 'waldorm', 'Logowanie przebiegło pomyślnie!'),
(20, '::1', '2017-11-24 19:11:23', 'waldorm', 'Podany login lub hasło są nieprawidłowe.'),
(21, '::1', '2017-11-24 19:11:33', 'waldorm', 'Podany login lub hasło są nieprawidłowe.'),
(22, '::1', '2017-11-24 19:11:08', 'waldorm', 'Podany login lub hasło są nieprawidłowe.'),
(23, '::1', '2017-11-24 19:11:13', 'waldorm', 'Podany login lub hasło są nieprawidłowe.'),
(24, '::1', '2017-11-24 19:11:22', 'waldorm', 'Podany login lub hasło są nieprawidłowe.'),
(25, '::1', '2017-11-24 19:11:29', 'waldorm', 'Logowanie przebiegło pomyślnie!'),
(26, '::1', '2017-11-24 19:11:32', 'waldorm', 'Podany login lub hasło są nieprawidłowe.'),
(27, '::1', '2017-11-24 19:11:17', 'waldorm', 'Podany login lub hasło są nieprawidłowe.'),
(28, '::1', '2017-11-24 19:11:29', 'waldorm', 'Logowanie przebiegło pomyślnie!'),
(29, '::1', '2017-11-24 19:11:01', 'waldorm', 'Logowanie przebiegło pomyślnie!'),
(30, '::1', '2017-11-24 19:11:08', 'waldorm', 'Podany login lub hasło są nieprawidłowe.'),
(31, '::1', '2017-11-24 19:11:28', 'waldorm123', 'Podany login lub hasło są nieprawidłowe.'),
(32, '::1', '2017-11-24 19:11:49', 'waldorm', 'Logowanie przebiegło pomyślnie!'),
(33, '::1', '2017-11-24 19:11:25', 'waldorm123', 'Logowanie przebiegło pomyślnie!'),
(34, '::1', '2017-11-24 19:11:22', 'waldorm', 'Logowanie przebiegło pomyślnie!'),
(35, '::1', '2017-11-24 19:11:03', 'waldorm', 'Podany login lub hasło są nieprawidłowe.'),
(36, '::1', '2017-11-24 19:11:47', 'waldorm', 'Podany login lub hasło są nieprawidłowe.'),
(37, '::1', '2017-11-24 19:11:30', 'waldorm', 'Logowanie przebiegło pomyślnie!'),
(38, '::1', '2017-11-24 19:11:37', 'waldorm', 'Podany login lub hasło są nieprawidłowe.'),
(39, '::1', '2017-11-24 19:11:54', 'waldorm', 'Podany login lub hasło są nieprawidłowe.'),
(40, '::1', '2017-11-24 19:11:09', 'waldorm', 'Logowanie przebiegło pomyślnie!'),
(41, '::1', '2017-11-24 19:11:40', 'waldorm', 'Logowanie przebiegło pomyślnie!'),
(42, '::1', '2017-11-24 19:11:40', 'waldorm', 'Podany login lub hasło są nieprawidłowe.'),
(43, '::1', '2017-11-24 19:11:49', 'waldorm', 'Podany login lub hasło są nieprawidłowe.'),
(44, '::1', '2017-11-24 19:11:04', 'waldorm', 'Podany login lub hasło są nieprawidłowe.'),
(45, '::1', '2017-11-24 19:11:13', 'waldorm', 'Podany login lub hasło są nieprawidłowe.'),
(46, '::1', '2017-11-24 19:11:23', 'waldorm', 'Logowanie przebiegło pomyślnie!'),
(47, '::1', '2017-11-24 19:11:35', 'waldorm', 'Logowanie przebiegło pomyślnie!'),
(48, '::1', '2017-11-24 19:11:32', 'waldorm', 'Podany login lub hasło są nieprawidłowe.'),
(49, '::1', '2017-11-24 19:11:42', 'waldorm', 'Podany login lub hasło są nieprawidłowe.'),
(50, '::1', '2017-11-24 19:11:46', 'waldorm', 'Podany login lub hasło są nieprawidłowe.'),
(51, '::1', '2017-11-24 19:11:54', 'waldorm', 'Podany login lub hasło są nieprawidłowe.'),
(52, '::1', '2017-11-24 19:11:03', 'waldorm', 'Logowanie przebiegło pomyślnie!'),
(53, '::1', '2017-11-24 19:11:01', 'waldorm', 'Logowanie przebiegło pomyślnie!'),
(54, '::1', '2017-11-24 19:11:04', 'waldorm', 'Podany login lub hasło są nieprawidłowe.'),
(55, '::1', '2017-11-24 19:11:08', 'waldorm', 'Podany login lub hasło są nieprawidłowe.'),
(56, '::1', '2017-11-24 19:11:26', 'waldorm', 'Logowanie przebiegło pomyślnie!'),
(57, '::1', '2017-11-24 19:11:44', 'waldorm', 'Podany login lub hasło są nieprawidłowe.'),
(58, '::1', '2017-11-24 19:11:52', 'waldorm', 'Podany login lub hasło są nieprawidłowe.'),
(59, '::1', '2017-11-24 19:11:57', 'waldorm', 'Podany login lub hasło są nieprawidłowe.'),
(60, '::1', '2017-11-24 19:11:05', 'waldorm', 'Podany login lub hasło są nieprawidłowe.'),
(61, '::1', '2017-11-24 19:11:09', 'waldorm', 'Logowanie przebiegło pomyślnie!'),
(62, '::1', '2017-11-24 20:11:57', 'waldorm', 'Podany login lub hasło są nieprawidłowe.'),
(63, '::1', '2017-11-24 20:11:06', 'waldorm', 'Podany login lub hasło są nieprawidłowe.'),
(64, '::1', '2017-11-24 20:11:50', 'waldorm', 'Podany login lub hasło są nieprawidłowe.'),
(65, '::1', '2017-11-24 20:11:54', 'waldorm', 'Podany login lub hasło są nieprawidłowe.'),
(66, '::1', '2017-11-24 20:11:02', 'waldorm', 'Podany login lub hasło są nieprawidłowe.'),
(67, '::1', '2017-11-24 20:11:38', 'waldorm', 'Podany login lub hasło są nieprawidłowe.'),
(68, '::1', '2017-11-24 20:11:43', 'walorm', 'Podany login lub hasło są nieprawidłowe.'),
(69, '::1', '2017-11-24 20:11:48', 'waldorm', 'Podany login lub hasło są nieprawidłowe.'),
(70, '::1', '2017-11-24 20:11:56', 'waldorm', 'Podany login lub hasło są nieprawidłowe.'),
(71, '::1', '2017-11-24 20:11:02', 'waldorm', 'Logowanie przebiegło pomyślnie!'),
(72, '::1', '2017-11-24 20:11:16', 'waldorm', 'Podany login lub hasło są nieprawidłowe.'),
(73, '::1', '2017-11-24 22:11:23', 'waldorm', 'Podany login lub hasło są nieprawidłowe.'),
(74, '::1', '2017-11-24 22:11:29', 'waldorm', 'Podany login lub hasło są nieprawidłowe.'),
(75, '::1', '2017-11-24 22:11:35', 'waldorm', 'Podany login lub hasło są nieprawidłowe.'),
(76, '::1', '2017-11-24 22:11:17', 'waldorm', 'Podany login lub hasło są nieprawidłowe.'),
(77, '::1', '2017-11-24 22:11:23', 'waldorm', 'Podany login lub hasło są nieprawidłowe.'),
(78, '::1', '2017-11-24 22:11:29', 'waldorm', 'Podany login lub hasło są nieprawidłowe.'),
(79, '::1', '2017-11-24 22:11:47', 'waldorm', 'Logowanie przebiegło pomyślnie!'),
(80, '::1', '2017-11-24 22:11:59', 'waldorm', 'Podany login lub hasło są nieprawidłowe.'),
(81, '::1', '2017-11-24 22:11:15', 'waldorm', 'Podany login lub hasło są nieprawidłowe.'),
(82, '::1', '2017-11-24 22:11:59', 'waldorm', 'Podany login lub hasło są nieprawidłowe.'),
(83, '::1', '2017-11-24 22:11:08', 'waldorm', 'Logowanie przebiegło pomyślnie!'),
(84, '::1', '2017-11-25 10:11:03', 'waldorm', 'Podany login lub hasło są nieprawidłowe.'),
(85, '::1', '2017-11-25 10:11:10', 'waldorm', 'Podany login lub hasło są nieprawidłowe.'),
(86, '::1', '2017-11-25 10:11:15', 'waldorm', 'Podany login lub hasło są nieprawidłowe.'),
(87, '::1', '2017-11-25 10:11:06', 'waldorm', 'Logowanie przebiegło pomyślnie!'),
(88, '::1', '2017-11-25 15:11:18', 'waldorm', 'Logowanie przebiegło pomyślnie!'),
(89, '::1', '2017-11-25 16:11:37', 'waldorm', 'Logowanie przebiegło pomyślnie!'),
(90, '::1', '2017-11-25 20:11:47', 'waldorm', 'Logowanie przebiegło pomyślnie!'),
(91, '::1', '2017-11-25 21:11:33', 'waldorm', 'Logowanie przebiegło pomyślnie!'),
(92, '::1', '2017-11-25 22:11:56', 'waldorm', 'Logowanie przebiegło pomyślnie!'),
(93, '::1', '2017-11-25 22:11:02', 'waldorm', 'Podany login lub hasło są nieprawidłowe.'),
(94, '::1', '2017-11-25 22:11:06', 'waldorm', 'Logowanie przebiegło pomyślnie!'),
(95, '::1', '2017-11-26 00:11:22', 'waldorm123', 'Logowanie przebiegło pomyślnie!'),
(96, '::1', '2017-11-26 00:11:40', 'waldorm', 'Logowanie przebiegło pomyślnie!'),
(97, '::1', '2017-11-26 00:11:18', 'waldorm123', 'Logowanie przebiegło pomyślnie!'),
(98, '::1', '2017-11-26 00:11:03', 'waldorm', 'Logowanie przebiegło pomyślnie!'),
(99, '::1', '2017-11-26 11:11:15', 'waldorm', 'Logowanie przebiegło pomyślnie!'),
(100, '::1', '2017-11-26 13:11:39', 'waldorm', 'Logowanie przebiegło pomyślnie!'),
(101, '::1', '2017-11-26 19:11:12', 'waldorm', 'Logowanie przebiegło pomyślnie!'),
(102, '::1', '2017-11-26 23:11:12', 'waldorm', 'Logowanie przebiegło pomyślnie!');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `position`
--

CREATE TABLE `position` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(32) NOT NULL,
  `p_describe` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(11, 'test123', '$2y$10$kXcpmziEnBHxWafBzG9T.udXIEyce/smUXPEPMv8Lgr8Ehihx4KdO', 'test123', NULL, 'test123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'test123@gmail.com', NULL, 0, NULL, NULL, NULL),
(12, 'waldorm', '$2y$10$4STFe6V1ciE26Jqi55Es5ehs.mYg9Z.6h997.TwwSLgEkbzBdo5i6', 'Arkadiusz2', NULL, 'Wisniewski', 'Tłuchowo', '3-go Maja, 4', '4', '87605', '94200000000', '2017-11-07', NULL, 15957, NULL, 'waldorm8@gmail.com', NULL, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `study_way`
--

CREATE TABLE `study_way` (
  `sw_id` int(11) NOT NULL,
  `sw_name` varchar(64) NOT NULL,
  `sw_describe` varchar(256) NOT NULL,
  `speciality` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='All of study directions.';

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `subject`
--

CREATE TABLE `subject` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(64) NOT NULL,
  `s_describe` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `term`
--

CREATE TABLE `term` (
  `t_id` int(11) NOT NULL,
  `study_way_sw_id` int(11) NOT NULL,
  `subject_s_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `worker`
--

CREATE TABLE `worker` (
  `w_id` int(11) NOT NULL,
  `w_login` varchar(32) NOT NULL,
  `w_password` varchar(128) NOT NULL,
  `w_name` varchar(32) NOT NULL,
  `w_sec_name` varchar(32) DEFAULT NULL,
  `w_surname` varchar(32) NOT NULL,
  `w_email` varchar(64) NOT NULL,
  `w_birth_date` date NOT NULL,
  `w_pesel` varchar(11) NOT NULL,
  `w_photo` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `academic`
--
ALTER TABLE `academic`
  ADD PRIMARY KEY (`ac_id`);

--
-- Indexes for table `contract`
--
ALTER TABLE `contract`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `workerhasposition_position` (`position_p_id`),
  ADD KEY `workerhasposition_worker` (`worker_w_id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`e_id`),
  ADD KEY `exam_subject` (`subject_s_id`),
  ADD KEY `exam_user` (`student_st_id`);

--
-- Indexes for table `history_login`
--
ALTER TABLE `history_login`
  ADD PRIMARY KEY (`hl_id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`st_id`),
  ADD KEY `student_academic` (`academic_ac_id`),
  ADD KEY `student_study_way` (`study_way_sw_id`);

--
-- Indexes for table `study_way`
--
ALTER TABLE `study_way`
  ADD PRIMARY KEY (`sw_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `term`
--
ALTER TABLE `term`
  ADD PRIMARY KEY (`t_id`),
  ADD KEY `studywayhassubjects_study_way` (`study_way_sw_id`),
  ADD KEY `studywayhassubjects_subject` (`subject_s_id`);

--
-- Indexes for table `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`w_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `academic`
--
ALTER TABLE `academic`
  MODIFY `ac_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `contract`
--
ALTER TABLE `contract`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `exam`
--
ALTER TABLE `exam`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `history_login`
--
ALTER TABLE `history_login`
  MODIFY `hl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
--
-- AUTO_INCREMENT dla tabeli `position`
--
ALTER TABLE `position`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `student`
--
ALTER TABLE `student`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT dla tabeli `study_way`
--
ALTER TABLE `study_way`
  MODIFY `sw_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `subject`
--
ALTER TABLE `subject`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `term`
--
ALTER TABLE `term`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `worker`
--
ALTER TABLE `worker`
  MODIFY `w_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `contract`
--
ALTER TABLE `contract`
  ADD CONSTRAINT `workerhasposition_position` FOREIGN KEY (`position_p_id`) REFERENCES `position` (`p_id`),
  ADD CONSTRAINT `workerhasposition_worker` FOREIGN KEY (`worker_w_id`) REFERENCES `worker` (`w_id`);

--
-- Ograniczenia dla tabeli `exam`
--
ALTER TABLE `exam`
  ADD CONSTRAINT `exam_subject` FOREIGN KEY (`subject_s_id`) REFERENCES `subject` (`s_id`),
  ADD CONSTRAINT `exam_user` FOREIGN KEY (`student_st_id`) REFERENCES `student` (`st_id`);

--
-- Ograniczenia dla tabeli `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_academic` FOREIGN KEY (`academic_ac_id`) REFERENCES `academic` (`ac_id`),
  ADD CONSTRAINT `student_study_way` FOREIGN KEY (`study_way_sw_id`) REFERENCES `study_way` (`sw_id`);

--
-- Ograniczenia dla tabeli `term`
--
ALTER TABLE `term`
  ADD CONSTRAINT `studywayhassubjects_study_way` FOREIGN KEY (`study_way_sw_id`) REFERENCES `study_way` (`sw_id`),
  ADD CONSTRAINT `studywayhassubjects_subject` FOREIGN KEY (`subject_s_id`) REFERENCES `subject` (`s_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
