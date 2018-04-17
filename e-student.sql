-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 17 Kwi 2018, 13:24
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
  `mess_text` text NOT NULL,
  `mess_title` varchar(64) NOT NULL,
  `mess_date` datetime NOT NULL,
  `mess_to_who` int(11) NOT NULL,
  `mess_from_who` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `messages`
--

INSERT INTO `messages` (`mess_id`, `mess_text`, `mess_title`, `mess_date`, `mess_to_who`, `mess_from_who`) VALUES
(1, 'fgfdhfdghfdghfdghdfghdfhfdhdfhdfh', 'fhdfhdfhfdhfh', '2018-04-02 10:28:18', 9, 9),
(3, 'sfasdfasfasdf', 'asdfsdfsafsafsadfsadf', '2018-04-03 00:00:00', 12, 12),
(5, 'do waldorm', 'do waldorm', '2018-04-03 00:00:00', 12, 9),
(9, 'sddasdasdasd', 'asdadasdasd', '2018-04-07 15:26:06', 12, 12),
(10, 'do wldorm123', 'do waldorm123', '2018-04-07 15:28:23', 9, 12),
(11, 'teststest', 'asdasdatest', '2018-04-09 09:21:39', 12, 11),
(14, 'wysyalnie za pomoca loginu', 'test wysylanie z apomoca loginu', '2018-04-09 10:36:07', 9, 12);

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
(13, 'asdasdadasda', '2018-04-17 09:04:36', '<ul><li><a href=\"http://google.pl\">google</a>as<strong>dadadadadasdadadasdasdasdasdasdas<em>dadasdsada</em></strong><em>asdadasdadadsadad</em>asdasdasdadadads</li><li>vsdfasdfsadf<a target=\"_blank\" href=\"http://google.pl\">google.plsdasd</a></li></ul>'),
(14, 'jhgjhgjhgj', '2018-04-17 09:04:50', '<p>jhgjhgjjg</p>');

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
  `rc_points` double NOT NULL,
  `rc_flag` char(16) NOT NULL DEFAULT 'o',
  `rc_date` date NOT NULL,
  `st_id` int(11) NOT NULL,
  `sw_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `recruitment_conclusion`
--

INSERT INTO `recruitment_conclusion` (`id_rc`, `rc_polish_degree`, `rc_math_degree`, `rc_english_degree`, `rc_st_additional`, `rc_average_degree`, `rc_polish_score`, `rc_math_score`, `rc_english_score`, `rc_add_score`, `rc_behavior`, `rc_points`, `rc_flag`, `rc_date`, `st_id`, `sw_id`) VALUES
(20, 3, 5, 4, 5, 4, 80, 89, 98, 67, 5, 39.81, 'p', '2018-03-17', 12, 4),
(21, 3, 5, 4, 5, 4, 45, 89, 98, 67, 5, 39.81, 'p', '2018-03-17', 12, 5),
(23, 5, 5, 5, 5, 3.56, 45, 65, 78, 34, 3, 30.54, 'o', '2018-03-17', 11, 10),
(24, 5, 5, 5, 5, 3.32, 100, 100, 100, 0, 6, 42, 'o', '2018-04-13', 12, 14);

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
(4, 'Matematyka bankowa i ubezpieczeniowa', 'Program specjalności obejmuje, oprócz podstawowych przedmiotów matematycznych, głównie przedmioty przygotowujące przyszłych absolwentów do pracy w firmach ubezpieczeniowych, bankach, instytucjach finansowych jak i do prowadzenia małych i większych firm. Liczne umowy z instytucjami gwarantują odbywanie praktyk zawodowych na wysokim poziomie. Ukończenie tej specjalności na studiach pierwszego i drugiego stopnia powinno ułatwić zdanie państwowego egzaminu na aktuariusza. Celem studiów jest także nabycie umiejętności praktycznego posługiwania się narzędziami informatycznymi w różnego rodzaju operacjach bankowych, ubezpieczeniowych, księgowych i bazodanowych oraz umiejętności programowania.', 5),
(5, 'Edukacja obronna z bezpieczeństwem wewnętrznym', 'Przygotowanie z zakresu pedagogiki i współczesnych zagadnień obronności i bezpieczeństwa wewnętrznego, nabycie umiejętności przewidywania i podejmowania decyzji w warunkach zagrożenia bezpieczeństwa, organizacji działań zbiorowych w sytuacjach wyjątkowych, zarządzania sytuacjami kryzysowymi oraz nabycie niezbędnej wiedzy z zakresu zagadnień społecznych i prawnych.\r\n\r\nPosiadane kwalifikacje oraz uprawnienia zawodowe: tytuł zawodowy licencjata, przygotowanie pedagogiczne do pracy w szkołach różnego typu w charakterze pedagoga szkolnego, przygotowanie do pracy  na stanowiskach specjalistycznych w strukturach administracji państwowej i samorządowej odpowiedzialnej za bezpieczeństwo wewnętrzne, w zespołach zarządzania kryzysowego, obronie cywilnej, w formacjach i służbach państwowych związanych z bezpieczeństwem, m.in.: Policji, Agencji Bezpieczeństwa Wewnętrznego, Straży Granicznej, Służbie Więziennej czy Straży Miejskiej oraz w   charakterze pracowników cywilnych, w firmach świadczących usługi z zakresu ochrony osób i mienia.', 11),
(6, 'Edukacja wczesnoszkolna z wychowaniem przedszkolnym', 'Absolwenci w/w specjalności  uzyskają  rozległą wiedzę teoretyczną i praktyczną, będą przygotowani do realizacji edukacyjnych, wychowawczych oraz opiekuńczych zadań współczesnej edukacji elementarnej realizowanej w przedszkolu i szkole podstawowej w zakresie nauczania zintegrowanego, czyli do pracy z dziećmi w wieku 3-9 lat.\r\n\r\nPosiadane kwalifikacje oraz uprawnienia zawodowe: tytuł zawodowy licencjata, kwalifikacje do pracy edukacyjnej, opiekuńczej i wychowawczej realizowanej w przedszkolu i szkole podstawowej w zakresie nauczania zintegrowanego (klasy I-III).  Ponadto absolwent posiada kompetencje w zakresie diagnozowania i stymulowania rozwoju dziecka, umiejętność efektownego komunikowania się ze środowiskiem dziecka, umiejętność samooceny i kierowania własnym rozwojem.', 11),
(7, 'Pedagogika opiekuńczo-wychowawcza z arteterapią', 'Przygotowanie do podejmowania działań o charakterze wychowawczym, profilaktycznym, wspierającym, kompensacyjnym,  terapeutycznym oraz animacyjnym w środowisku społecznym.\r\n\r\nPosiadane kwalifikacje oraz uprawnienia zawodowe: tytuł zawodowy licencjata, przygotowanie pedagogiczne do pracy w placówkach opiekuńczo – wychowawczych takich jak: dom dziecka, pogotowie opiekuńcze, świetlica środowiskowa, świetlica szkolna, świetlica terapeutyczna, ośrodek szkolno-wychowawczy, a także w ośrodkach rehabilitacyjnych, rewalidacyjnych, resocjalizacyjnych, socjalizacyjnych i geriatrycznych.', 11),
(8, 'Filologia angielska', 'Nadrzędnym celem kształcenia jest rozwinięcie kompetencji językowych studenta w zakresie języka angielskiego  do poziomu C1. Student uzyskuje podstawową wiedzę o języku, literaturze, kulturze i historii angielskiego obszaru językowego. Nabywa umiejętności filologiczne z zakresu analizy i interpretacji tekstu czytanego i słuchanego oraz tworzenia tekstu pisanego. Rozwija umiejętność twórczego korzystania z informacji oraz krytycznego i kreatywnego myślenia.\r\n\r\nProgram studiów przewiduje wyposażenie absolwenta w szereg kompetencji specjalistycznych, niezbędnych do wykonywania zawodów wykorzystujących znajomość języka angielskiego. Po pierwszym roku studenci mają możliwość wyboru pomiędzy programem glottodydaktycznym a translatorycznym. W zakresie programu glottodydaktycznego absolwenci są przygotowani do kompleksowej realizacji edukacyjnych, wychowawczych oraz opiekuńczych zadań współczesnej szkoły. Zdobywają wiedzę i umiejętności niezbędne do wykonywania zawodu nauczyciela języka angielskiego w przedszkolach i szkołach podstawowych. Kształcenie w zakresie programu translatorycznego daje absolwentowi przygotowanie do podjęcia pracy tłumacza w firmach i instytucjach, w których wymagana jest bardzo dobra znajomość języka angielskiego. Absolwenci nabywają wiedzę i umiejętności przekładu tekstów pisanych i ustnych na język angielski i z języka angielskiego, co pozwala im na podjęcie pracy w szeroko rozumianej przestrzeni publicznej, w sferach biznesu, mediów i turystyki. Program studiów, poszerzony o komponent kulturoznawczy, pozwala rozwijać umiejętności w zakresie tłumaczeń tekstów literackich, filmowych i innych tekstów z obszaru kultury.\r\n\r\n ', 14),
(9, 'Język angielski w turystyce i biznesie', 'Program studiów przewiduje osiągnięcie przez studentów wysokiej kompetencji językowej w zakresie języka angielskiego (poziom C1). Dzięki zintensyfikowaniu zajęć kursu praktycznej nauki języka angielskiego na pierwszym roku program studiów pozwala na uzupełnienie i rozwinięcie środków językowych odpowiednich dla kierunku filologicznego. Absolwent tej specjalności posiada wysokie kompetencje językowe z zakresu terminologii turystycznej i biznesowej. W ramach przedmiotów kierunkowych student zdobywa wiedzę z dziedzin językoznawstwa, literaturoznawstwa i kulturoznawstwa obszaru anglojęzycznego. Wiedza ta zapewni przygotowanie do pracy w organizacjach z sektora turystyki i biznesu, gdzie istotną rolę odgrywa dobra znajomość kultury i języka. Absolwent specjalności może podjąć pracę w charakterze tłumacza języka angielskiego w firmach lub instytucjach współpracujących z krajami angielskiego obszaru językowego, w tym także w instytucjach samorządu terytorialnego i instytucjach centralnych.\r\n\r\nPo pierwszym roku studenci mają możliwość wyboru pomiędzy programem nakierowanym na język angielski w turystyce lub na język angielski w biznesie. W zakresie programu „język angielski w turystyce” absolwenci zostaną przygotowani do realizacji zadań z obszaru turystyki, poznają m.in. współczesny rynek turystyczny, tajniki pracy przewodnika i sztukę pilotażu turystycznego. Specjalizacja „język angielski w biznesie” wyposaży natomiast studenta w wiedzę i umiejętności z obszaru przedmiotów związanych z przedsiębiorczością, problematyką języka specjalistycznego i organizacją pracy biurowej.', 14),
(10, 'Kosmetologia', 'Kształcenie na kierunku Kosmetologia będzie bazować na współczesnych  zdobyczach wiedzy i technologii w zakresie kosmetologii. Obejmować będzie  zagadnienia umożliwiające wykształcenie określonych umiejętności praktycznych związanych z upiększaniem, składem preparatów kosmetycznych i ich zastosowaniem oraz wpływem na poszczególne rodzaje skóry oraz profilaktyką mającą na celu opóźnienie zewnętrznych oznak starzenia się, jak i zachowania jak najdłużej sprawności życiowej, a także zagadnieniami leczniczymi dotyczącymi tych zmian skórnych, które szczególnie niekorzystnie wpływają na wygląd zewnętrzny.\r\n\r\nZnaczącą  liczbę godzin będą stanowić zajęcia praktyczne, w trakcie których student zdobędzie wiedzę i nabierze umiejętności zawodowych uczestnicząc w takich zajęciach jak np.: kosmetologia pielęgnacyjna, upiększająca, wizaż i stylizacja, charakteryzacja, makijaż sceniczny, fizjoterapia i masaż, SPA, Wellnes, odnowa biologiczna, modelowanie sylwetki oraz nowoczesne aktywności ruchowej, masaż limfatyczny. Studenci zapoznają się również z ważnymi dla zawodu przedmiotami kształcenia ogólnego i podstawowego jak na przykład: anatomia z histologią i patofizjologii, biochemia, biologia medyczna,  genetyka, biofizyka, mikrobiologia, immunologia, farmakologia, higiena, chemia kosmetyczna, podstawy receptury kosmetycznej, dermatologia, estetyka, psychologia, etyka zawodowa, technologia informacyjna, ochrona własności intelektualnej, język obcy, wychowanie fizyczne itd.\r\n\r\nIntegralną część procesu nauczania stanowić będą praktyki zawodowe, których odbycie będzie warunkiem zaliczenia studiów.\r\n\r\nW zakresie wszystkich przedmiotów studentów będą obowiązywać minima programowe ustalone w programie studiów. Zajęcia odbywać się będą w formie wykładów, seminariów i ćwiczeń, w tym ćwiczeń praktycznych w laboratoriach i pracowniach kształcenia kierunkowego pod nadzorem wykładowcy lub asystenta oraz praktyk zawodowych w wybranych gabinetach kosmetycznych, ośrodkach SPA, salonach odnowy biologicznej, gabinecie charakteryzacji teatru. Zajęcia praktyczne i praktyki zawodowe będą realizowane w grupach odpowiednio 8-16 osobowych i 8 osobowych, natomiast aktywne formy teoretyczne w grupach 20 osobowych, za wyjątkiem anatomii z histologią i fizjologii, w ramach których ćwiczenia będą prowadzone w grupach 10 osobowych ze względu na wykorzystywanie fantomów i symulatorów.\r\n\r\nWykłady i ćwiczenia będą się odbywać w bardzo dobrze przygotowanych salach wykładowych i pracowniach kierunkowych, dysponujących nowoczesnym wyposażeniem dydaktycznym i multimedialnym.\r\n\r\nW ramach ćwiczeń praktycznych uwaga będzie szczególnie zwracana na pracę studenta z klientem oraz kształtowanie właściwej postawy zawodowej. Wiedza studentów weryfikowana będzie przeprowadzanymi sprawdzianami: pisemnymi, ustnymi, praktycznymi i egzaminami.\r\n\r\nStudenci będą otrzymywać specjalne dzienniczki umiejętności praktycznych, w których odnotowywane będzie nabywanie i ugruntowywanie umiejętności zawodowych i osiągniętych efektów kształcenia zawodowego na poszczególnych etapach kształcenia. Zaliczenie poszczególnych przedmiotów odbywać się będzie na podstawie egzaminu lub zaliczenia z oceną. Nauczanie z przedmiotów kierunkowych kończyć się będzie egzaminem.', 10);

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
  `study_way_sw_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='All of app users.';

--
-- Zrzut danych tabeli `student`
--

INSERT INTO `student` (`st_id`, `st_login`, `st_password`, `st_name`, `st_sec_name`, `st_surname`, `st_city`, `st_street`, `st_house_number`, `st_zipcode`, `st_pesel`, `st_birth_date`, `st_photo`, `st_indeks`, `st_start_date`, `st_email`, `st_role`, `st_bad_login_count`, `st_date_bad_login`, `study_way_sw_id`) VALUES
(9, 'waldorm123', '$2y$10$R3dkxMlUT3UnZzlXhjDQSO9//wUYKMrGT7KeGQ6Hrefjvt1.EsVZu', 'Janek', NULL, 'Wisniewski', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'waldorm123@gmail.com', NULL, 0, NULL, NULL),
(11, 'test123', '$2y$10$kXcpmziEnBHxWafBzG9T.udXIEyce/smUXPEPMv8Lgr8Ehihx4KdO', 'test123', NULL, 'test123', NULL, NULL, NULL, NULL, NULL, NULL, 'upload/avatars/11/73f5f6ccaafbb0141b1aaa9b2b11de96.jpg', NULL, NULL, 'test123@gmail.com', NULL, 0, NULL, NULL),
(12, 'waldorm', '$2y$10$4STFe6V1ciE26Jqi55Es5ehs.mYg9Z.6h997.TwwSLgEkbzBdo5i6', 'Arkadiusz', NULL, 'Wiśniewski', 'Tłuchowo', '3 Maja', '4', '87605', '94200300000', '1994-03-20', 'upload/avatars/12/38d5fc3ba1141d9d9593ae874a8075ea.jpg', 15957, NULL, 'waldorm8@gmail.com', NULL, 0, NULL, NULL),
(13, 'testowe123', '$2y$10$t6zXtiQF79Op8C1//qdoy.c8Q8v7UYbgo.AE9aU2kQKje6HU9a7.G', 'testowe', NULL, 'testowe', 'Płock', 'jachowicza', '3', '87605', '12345678911', '2017-02-12', NULL, 15957, NULL, 'test@gmail.com', NULL, 3, '2018-04-09 09:20:21', NULL),
(14, 'administrator', '$2y$10$kAflxsjcQprKo0K9jmp4ietSamKV0o9NmS86VU4o3PhCGJXhsGxaS', 'admin', 'admin', 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ADMINISTRATOR', 'a', 0, NULL, NULL);

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
-- Indeksy dla tabeli `departements`
--
ALTER TABLE `departements`
  ADD PRIMARY KEY (`d_id`);

--
-- Indeksy dla tabeli `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`mess_id`),
  ADD KEY `messages` (`mess_to_who`),
  ADD KEY `fk_messages_from_who` (`mess_from_who`);

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
-- AUTO_INCREMENT dla tabeli `departements`
--
ALTER TABLE `departements`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `messages`
--
ALTER TABLE `messages`
  MODIFY `mess_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT dla tabeli `news`
--
ALTER TABLE `news`
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT dla tabeli `recruitment_conclusion`
--
ALTER TABLE `recruitment_conclusion`
  MODIFY `id_rc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT dla tabeli `speciality`
--
ALTER TABLE `speciality`
  MODIFY `sp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT dla tabeli `student`
--
ALTER TABLE `student`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT dla tabeli `study_way`
--
ALTER TABLE `study_way`
  MODIFY `sw_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `fk_messages_from_who` FOREIGN KEY (`mess_from_who`) REFERENCES `student` (`st_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `messages` FOREIGN KEY (`mess_to_who`) REFERENCES `student` (`st_id`);

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
