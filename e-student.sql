-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 27 Lut 2018, 20:26
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
(12, 'sdfsadfasdfdsf', '2018-02-26 22:02:46', '<p>asdasdasdasdasdadasdsadasdada zeedytowanojeszcze raz</p><p>&nbsp;</p>');

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
(3, 'Sieci komputerowe i sieciowe systemy operacyjne', 'Specjalność ta będzie ukierunkowana na oprogramowanie komunikacyjne, instalację i\r\ntworzenie sieci LAN i WAN, architektury logiczne sieci, administrowanie i zarządzanie\r\nsieciami.\r\nNa zajęciach tej specjalności będą poruszone także zagadnienia użytkowania i\r\nprojektowania systemów teleinformatycznych (sieci przewodowe i bezprzewodowe) oraz\r\nwsparcia technologii webowych.\r\nStudent uzyska praktyczną wiedzę z zakresu administracji systemami operacyjnymi,\r\nszczególnie systemami Unix, Linux i Windows Server.\r\nAbsolwent będzie mógł pracować z systemami operacyjnymi w różnych klasach i typach\r\nurządzeń sieciowych oraz będzie w stanie samodzielnie projektować, zarządzać oraz\r\nintegrować sieci komputerowe.\r\nPosiadamy pięć pracowni komputerowych wyposażonych w nowoczesne\r\noprogramowanie. Zajęcia na kierunku Informatyka I prowadzone są głównie w pracowniach\r\nkształcenia praktycznego – laboratoriach komputerowych. Są to studia 3,5 letnie inżynierskie,\r\nprofil praktyczny. Gro wykładowców to praktycy. Proponujemy także warsztaty praktyczne\r\noraz zajęcia fakultatywne. Proponujemy także pracownię praktyczną do stworzenia sieci.', 4),
(4, 'Administracja i finanse', 'Największą satysfakcję przynosi praca, która daje nam poczucie sensu, praca, która jest\r\nzgodna z naszymi predyspozycjami, a wykonywanie takiej pracy sprawia nam przyjemność.\r\nOferta programowa specjalności administracja i finanse została przygotowana przez\r\nwysoko wyspecjalizowaną kadrę praktyczną oraz naukowo – dydaktyczną z zakresu\r\nadministracji, prawa i finansów.\r\nW toku studiów będą oferowane liczne bezpłatne warsztaty, które będą dodatkowym\r\natutem na rynku pracy naszych absolwentów. Część zajęć będzie odbywać się w pracowniach\r\nkomputerowych, aby przybliżyć praktykę naszym studentom.', 1),
(5, 'Rachunkowość i finanse', 'Absolwenci studiów I stopnia na kierunku Finanse z elementami matematyki,\r\nspecjalność Rachunkowość i finanse posiadają bogatą, profesjonalną wiedzę przekazywaną\r\nzarówno przez praktyków, jak i pracowników naukowo – dydaktycznych z zakresu finansów i\r\nrachunkowości finansowej oraz funkcjonowania instytucji finansowych, w tym banków,\r\nubezpieczeń gospodarczych i społecznych, prawa, a także instytucji publicznych. Posiadają\r\numiejętność analizy podstawowych zjawisk mikro- i makroekonomicznych oraz kondycji\r\nfinansowej gospodarstw domowych, przedsiębiorstw i innych organizacji. Rozumieją\r\nprzyczyny i skutki występowania zjawisk finansowych i gospodarczych w skali mikro i\r\nmakro. Potrafią wyszukiwać informacje z zakresu rachunkowości, posługują się sprawnie\r\naktami prawnymi. Znają język obcy oraz umieją posługiwać się językiem specjalistycznym z\r\nzakresu rachunkowości i finansów. Są przygotowani do podjęcia studiów II stopnia na\r\nkierunku Ekonomia bądź Finanse.\r\nOferta programowa specjalności rachunkowość i finanse została przygotowana przez\r\nwysoko wyspecjalizowaną kadrę praktyczną oraz naukowo – dydaktyczną z zakresu\r\nrachunkowości i finansów. M. in. rachunkowość, rachunek kosztów i sprawozdawczość\r\nfinansowa, analiza finansowa prowadzona jest w laboratorium komputerowym m.in. w\r\nprogramie Symfonia, Ramzes, Płatnik, Excel i innych programach komercyjnych, tak żeby\r\nstudent mógł zetknąć się z praktycznym wykorzystaniem rachunkowość. Oferujemy szereg\r\nwarsztatów w toku studiów, które są atutem na rynku pracy. Wiele symulacji gospodarczych\r\nprzeniesionych jest z praktyki do sal dydaktycznych w celu jak najlepszego przygotowania\r\nkandydata na rynek pracy.', 1),
(6, 'Logistyka w działalności gospodarczej', 'Absolwenci posiadają wiedzę z zakresu systemów logistycznych oraz ich\r\nfunkcjonowania w przemyśle i handlu, a także w ochronie środowiska. Są przygotowani do\r\nrozwiązywania problemów dotyczących projektowania systemów i procesów logistycznych\r\nzaopatrzenia, a także produkcji i dystrybucji. Mogą kierować przedsiębiorstwem\r\nlogistycznym lub też zarządzać specjalistycznymi funkcjami logistycznymi. Znają podstawy\r\nnauk ekonomicznych, makro i mikroekonomii, finansów, rachunku kosztów oraz podstawy\r\norganizacji i zarządzania, w tym zarządzania operacyjnego i strategicznego. Posiadają\r\nrównież kwalifikacje i kompetencje menedżerskie.\r\nAbsolwenci powinni znaleźć pracę na stanowiskach kierowniczych w organizacjach, w\r\nktórych wymagana jest wiedza logistyczna, ekonomiczna, informatyczna oraz organizacyjna.\r\nMogą pracować w przedsiębiorstwach produkcyjnych, transportowych i spedycyjnotransportowych,\r\nkomunalnych, a także centrach logistycznych oraz przedsiębiorstwach\r\nzajmujących się projektowaniem i doradztwem w zakresie logistyki', 2),
(7, 'Finanse i rachunkowość przedsiębiorstw', 'Absolwent tej specjalności będzie profesjonalnie przygotowany do podjęcia i\r\nukończenia uzupełniających studiów magisterskich. Zdobyta wiedza będzie pozwalała\r\nabsolwentowi na podjęcie studiów podyplomowych i uzyskania nowych kwalifikacji\r\nzawodowych.\r\nUzyskane kwalifikacje pozwolą na zatrudnienie absolwenta w różnych podmiotach\r\ngospodarczych, tj. bankach, przedsiębiorstwach produkcyjnych, handlowych, biurach\r\nrachunkowo - podatkowych oraz urzędach skarbowej administracji państwowej. Absolwent\r\nuzyska także kwalifikacje do prowadzenia własnej działalności gospodarczej.\r\nAbsolwent będzie posiadał wiedzę teoretyczną i praktyczna, stanowiącą podstawę nie\r\ntylko do zrozumienia prawidłowości gospodarki rynkowej, lecz przede wszystkim do\r\npraktycznego rozwiązywania problemów oraz podejmowania decyzji.\r\nPlan studiów w/w specjalności został opracowany przy wykorzystaniu dorobku\r\ndydaktycznego europejskich i amerykańskich wyższych szkół ekonomicznych, a także\r\nnajbardziej prestiżowej polskiej szkoły wyższej - Szkoły Głównej Handlowej, z której\r\npochodzą profesorowie - wykładowcy w Wydziale Nauk Ekonomicznych i Informatyki.\r\nJest on systematycznie doskonalony, co ma umożliwić naszym absolwentom zdobycie\r\nnajbardziej nowoczesnej wiedzy ekonomicznej i prawniczej. Składa się na nią przede\r\nwszystkim wiedza o istocie gospodarki rynkowej a ponadto umiejętność zarządzania\r\npodmiotem gospodarczym lub instytucją oraz zdolność do rozwiązywania zagadnień\r\nprawnych. Absolwent zostaje przygotowany do podjęcia uzupełniających studiów magisterskich\r\nwe wszystkich polskich uczelniach ekonomicznych.\r\nMiejscami zatrudnienia po uzyskaniu licencjatu mogą być: firmy produkcyjne,\r\nhandlowe i usługowe, banki, biura rachunkowo-podatkowe, urzędy skarbowe. Absolwent\r\nuzyska także kwalifikacje do prowadzenia własnej mikrofirmy. ', 2),
(8, 'Finanse publiczne i administracja', 'Proces kształcenia studenta na specjalności finanse publiczne i administracja dąży do\r\nukształtowania specjalisty w konkretnej dziedzinie, który zdobędzie umiejętności\r\nswobodnego i efektywnego komunikowania się; nawiązywania kontaktów interpersonalnych;\r\nktóry może pochwalić się dobrą znajomością języków obcych oraz umiejętnościami\r\norganizacyjno-kierowniczymi.\r\nCel kształcenia:\r\nWyposażenie studentów w praktyczną wiedzę z zakresu:\r\n funkcjonowania samorządu w UE, w szczególności z najważniejszymi determinantami\r\nmającymi istotny wpływ na proces kształtowania się samorządu terytorialnego w Polsce i\r\nw innych krajach UE,\r\n zarządzania rozwojem lokalnym, marketingu terytorialnego, zarządzania projektami\r\nlokalnymi oraz zasadami funkcjonowania instytucji międzynarodowych wspierających\r\nrozwój lokalny, działającymi w krajach Unii Europejskiej,\r\n kształtowania wizerunku gminy lub powiatu na zewnątrz oraz dla potrzeb mieszkańców,\r\n aplikowania o zewnętrzne środki, przede wszystkim w ramach funduszy strukturalnych\r\nmające na celu rozwój regionalny i lokalny.\r\n zasad funkcjonowania administracji publicznej, mechanizmów rządzących podmiotami\r\ngospodarczymi i ich wzajemnych relacji,\r\n profesjonalnego administrowania lokalnymi instytucjami samorządowymi i kreowania\r\nlokalnego rozwoju gospodarczego.\r\nStudia na tej specjalności:\r\n nauczą umiejętności prowadzenia rozmów handlowych i sztuki negocjacji,\r\n wyrobią otwartość na zmiany, przekonanie o konieczności stałego uzupełniania wiedzy, \r\n umożliwią opanowanie przynajmniej jednego języka obcego, zdobycia umiejętności\r\nswobodnego korzystania z technik i programów komputerowych, poznania nowoczesnych\r\nmetod zarządzania oraz organizacji pracy,\r\n pozwolą absolwentowi na wykonywanie czynności operacyjnych na stanowisku pracy w\r\nkontekście całokształtu działalności i zarządzania instytucjami budżetowymi lub\r\nadministracją gospodarczą.', 2),
(9, 'Finanse i rachunkowość przedsiębiorstw', 'Plan studiów został opracowany z uwzględnieniem kształcenia praktycznego, a więc\r\nszereg przedmiotów jest prowadzonych w pracowniach komputerowych. W ramach\r\nkształcenia studenci uzyskują pogłębioną wiedzę i umiejętności dotyczące m.in. finansów\r\nprzedsiębiorstwa, systemu rachunków kosztów, analizy i rewizji sprawozdań finansowych,\r\nkonsolidacji sprawozdań finansowych oraz rachunkowości finansowej, rachunkowości\r\nzarządczej i rachunkowości podatkowej.\r\nAbsolwent będzie posiadał pogłębioną wiedzę teoretyczną i praktyczna, stanowiącą\r\npodstawę nie tylko do zrozumienia prawidłowości gospodarki rynkowej, lecz przede\r\nwszystkim do praktycznego rozwiązywania problemów oraz podejmowania decyzji.\r\nAbsolwent będzie przygotowany do podjęcia pracy w różnych podmiotach\r\ngospodarczych, tj. bankach, przedsiębiorstwach produkcyjnych, handlowych, biurach\r\nrachunkowo - podatkowych oraz urzędach skarbowej administracji państwowej. Absolwent\r\nuzyska także pogłębione kwalifikacje do prowadzenia własnej działalności gospodarczej. ', 3),
(10, 'Finanse publiczne i administracja', 'Proces kształcenia studenta na specjalności finanse publiczne i administracja jest\r\nformułowany, aby ukształtować specjalistę w konkretnej dziedzinie, który zdobędzie\r\npogłębione umiejętności swobodnego i efektywnego komunikowania się; nawiązywania\r\nkontaktów interpersonalnych; który może pochwalić się wysoką znajomością języków obcych\r\noraz umiejętnościami organizacyjno-kierowniczymi.\r\nCel kształcenia:\r\nWyposażenie studentów w praktyczną i pogłębioną wiedzę z zakresu:\r\nFunkcjonowania samorządu w UE, w szczególności z najważniejszymi determinantami\r\nmającymi istotny wpływ na proces kształtowania się samorządu terytorialnego w Polsce i\r\nw innych krajach UE,\r\nZarządzania rozwojem lokalnym, marketingu terytorialnego, zarządzania projektami\r\nlokalnymi oraz zasadami funkcjonowania instytucji międzynarodowych wspierających\r\nrozwój lokalny, działającymi w krajach Unii Europejskiej,\r\nKształtowania wizerunku gminy lub powiatu na zewnątrz oraz dla potrzeb mieszkańców,\r\nAplikowania o zewnętrzne środki, przede wszystkim w ramach funduszy strukturalnych\r\nmające na celu rozwój regionalny i lokalny.\r\nZasad funkcjonowania administracji publicznej, mechanizmów rządzących podmiotami\r\ngospodarczymi i ich wzajemnych relacji,\r\nProfesjonalnego administrowania lokalnymi instytucjami samorządowymi i kreowania\r\nlokalnego rozwoju gospodarczego.\r\nStudia na tej specjalności:\r\nPozwalają zdobyć pogłębione umiejętności prowadzenia rozmów handlowych i sztuki\r\nnegocjacji,\r\nWyrobią otwartość na zmiany, przekonanie o konieczności stałego uzupełniania wiedzy, \r\nUmożliwią opanowanie przynajmniej jednego języka obcego, zdobycia umiejętności\r\nswobodnego korzystania z technik i programów komputerowych, poznania nowoczesnych\r\nmetod zarządzania oraz organizacji pracy,\r\nPozwolą absolwentowi na wykonywanie czynności operacyjnych na stanowisku pracy w\r\nkontekście całokształtu działalności i zarządzania instytucjami budżetowymi lub\r\nadministracją gospodarczą', 3);

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
(12, 'waldorm', '$2y$10$4STFe6V1ciE26Jqi55Es5ehs.mYg9Z.6h997.TwwSLgEkbzBdo5i6', 'Arkadiusz', NULL, 'Wiśniewski', 'Tłuchowo', '3 Maja', '4', '87605', '94200300000', '1994-03-20', 'upload/avatars/12/3a606d1934e4dcd01f7559421f18e027.jpg', 15957, NULL, 'waldorm8@gmail.com', NULL, 0, NULL, NULL, NULL),
(13, 'testowe123', '$2y$10$t6zXtiQF79Op8C1//qdoy.c8Q8v7UYbgo.AE9aU2kQKje6HU9a7.G', 'testowe', NULL, 'testowe', 'Płock', 'jachowicza', '3', '87605', '12345678911', '2017-02-12', NULL, 15957, NULL, 'test@gmail.com', NULL, 0, NULL, NULL, NULL),
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
(1, 'Finanse z elementami matematyki', 'Licencjat', 1),
(2, 'Ekonomia', 'Licencjat', 1),
(3, 'Ekonomia', 'Magister', 1),
(4, 'Informatyka', 'Inżynier', 1),
(5, 'Matematyka', 'Licencjat', 1),
(6, 'Rachunkowość budżetowa', 'Podyplomowe', 1),
(7, 'Pielęgniarstwo', 'Licencjat', 2),
(8, 'Pielęgniarstwo', 'Magister', 2),
(9, 'Położnictwo', 'Licencjat', 2),
(10, 'Kosmetologia', 'Licencjat', 2),
(11, 'Pedagogika', 'Licencjat', 3),
(12, 'Praca socjalna', 'Licencjat', 3),
(13, 'Bezpieczeństwo wewnętrzen', 'Licencjat', 3),
(14, 'Filologia', 'Licencjat', 3);

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

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `academic`
--
ALTER TABLE `academic`
  ADD PRIMARY KEY (`ac_id`);

--
-- Indexes for table `departements`
--
ALTER TABLE `departements`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`e_id`),
  ADD KEY `exam_subject` (`subject_s_id`),
  ADD KEY `exam_user` (`student_st_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `speciality`
--
ALTER TABLE `speciality`
  ADD PRIMARY KEY (`sp_id`),
  ADD KEY `FK_speciality` (`sw_id`);

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
  ADD PRIMARY KEY (`sw_id`),
  ADD KEY `FK_study_way` (`d_id`);

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
-- AUTO_INCREMENT dla tabeli `exam`
--
ALTER TABLE `exam`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `news`
--
ALTER TABLE `news`
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT dla tabeli `speciality`
--
ALTER TABLE `speciality`
  MODIFY `sp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
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
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `exam`
--
ALTER TABLE `exam`
  ADD CONSTRAINT `exam_subject` FOREIGN KEY (`subject_s_id`) REFERENCES `subject` (`s_id`),
  ADD CONSTRAINT `exam_user` FOREIGN KEY (`student_st_id`) REFERENCES `student` (`st_id`);

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

--
-- Ograniczenia dla tabeli `term`
--
ALTER TABLE `term`
  ADD CONSTRAINT `studywayhassubjects_study_way` FOREIGN KEY (`study_way_sw_id`) REFERENCES `study_way` (`sw_id`),
  ADD CONSTRAINT `studywayhassubjects_subject` FOREIGN KEY (`subject_s_id`) REFERENCES `subject` (`s_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
