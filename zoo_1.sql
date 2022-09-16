-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Сен 16 2022 г., 21:05
-- Версия сервера: 10.4.21-MariaDB
-- Версия PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `zoo`
--

-- --------------------------------------------------------

--
-- Структура таблицы `booking`
--

CREATE TABLE `booking` (
  `ID_Booking` int(11) NOT NULL,
  `ID_Client` int(11) NOT NULL,
  `ID_Service` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `DateBooking` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `booking`
--

INSERT INTO `booking` (`ID_Booking`, `ID_Client`, `ID_Service`, `email`, `DateBooking`) VALUES
(1, 21, 2, 'a@a', '2022-09-13'),
(2, 21, 2, '1111@awd', '2022-09-01'),
(3, 24, 2, 'arar@aEdad', '2022-09-17');

-- --------------------------------------------------------

--
-- Структура таблицы `client`
--

CREATE TABLE `client` (
  `ID_Client` int(11) NOT NULL,
  `N_Client` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Password` varchar(500) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Age` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `client`
--

INSERT INTO `client` (`ID_Client`, `N_Client`, `Email`, `Phone`, `Password`, `Gender`, `Age`) VALUES
(20, 'Антон', 'aaaa@aaaa', '1111', '698d51a19d8a121ce581499d7b701668', 'famel', 12),
(21, 'Катя', 'a@a', '111', 'aaf2979785deb27864047e0ea40ef1b7', 'famel', 12),
(23, 'asdasd', 'asdsa@asdasd', '12222222', 'd745e3ffeb7d2022547fabb46511442a', 'famel', 11),
(24, 'ASDASDASDASDA', 'a@aa', '799987', '0f19aca3f6452521454ef3c02cab55ec', 'famel', 12);

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `ID_FeedBack` int(11) NOT NULL,
  `Message` varchar(500) NOT NULL,
  `Name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`ID_FeedBack`, `Message`, `Name`) VALUES
(1, 'asdasssasdasd', 'asdadsda'),
(2, 'zcszsc', 'czzcsc'),
(3, 'adsasd', 'adasd');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `ID_News` int(11) NOT NULL,
  `NameNews` varchar(100) NOT NULL,
  `DescriptionNews` varchar(500) NOT NULL,
  `ImageNews` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`ID_News`, `NameNews`, `DescriptionNews`, `ImageNews`) VALUES
(1, 'Владимир Гудожников с программой памяти М. Магомаева. Музыкальный вечер \"У фонтана\"', 'Приглашаем на субботний музыкальный вечер \"У фонтана\"! На сцене Владимир Гудожников с программой памяти М. Магомаева... ', '/img/index/news1.png'),
(3, '\"Прием у ветврача\". Экскурсия из цикла \"Другой зоопарк\"', '\"Прием у ветврача\". Авторская экскурсия из цикла \"Другой зоопарк\". 11 сентября 11.00 В их ведении 2000 самых разных животных от рыбки до слона. Они делают уколы жирафам и поят...', '/img/index/news2.png'),
(4, 'Дендрологические наблюдения в Восточной Пруссии', 'Летом 2022 года архивариус зоопарка Светлана Колбанева обнаружила в интернете уникальные документы — оцифрованный ежегодник Германского', '/img/index/news3.png');

-- --------------------------------------------------------

--
-- Структура таблицы `service`
--

CREATE TABLE `service` (
  `ID_Service` int(11) NOT NULL,
  `NameService` varchar(200) NOT NULL,
  `PriceService` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `service`
--

INSERT INTO `service` (`ID_Service`, `NameService`, `PriceService`) VALUES
(1, 'Взрослый', 700),
(2, 'Подростковый', 500),
(3, 'Детский', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`ID_Booking`),
  ADD KEY `ID_Service` (`ID_Service`),
  ADD KEY `ID_Client` (`ID_Client`);

--
-- Индексы таблицы `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`ID_Client`);

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`ID_FeedBack`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`ID_News`);

--
-- Индексы таблицы `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`ID_Service`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `booking`
--
ALTER TABLE `booking`
  MODIFY `ID_Booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `client`
--
ALTER TABLE `client`
  MODIFY `ID_Client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `ID_FeedBack` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `ID_News` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `service`
--
ALTER TABLE `service`
  MODIFY `ID_Service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`ID_Client`) REFERENCES `client` (`ID_Client`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`ID_Service`) REFERENCES `service` (`ID_Service`),
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`ID_Client`) REFERENCES `client` (`ID_Client`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
