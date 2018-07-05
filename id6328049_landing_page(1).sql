-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Июл 05 2018 г., 09:48
-- Версия сервера: 10.1.31-MariaDB
-- Версия PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `id6328049_landing_page`
--

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `buyer_name` varchar(255) NOT NULL,
  `buyer_email` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `buyer_name`, `buyer_email`, `comment`, `date`, `status`) VALUES
(13, 'sdafasd', 'sdfgsdf@mail.ru', 'adfasdfasdfasdf', '2018-06-28 12:00:58', 1),
(14, 'mvc-magee', 'megamen99@mail.ru', 'Fdfdfdfdfdf', '2018-06-28 12:19:36', 1),
(15, 'sdfsd', 'nsads@mail.ru', 'sdfgsdfgdsfgs', '2018-06-28 16:10:42', 1),
(16, 'news', 'a@mail.aa', 'adsasdasda', '2018-06-29 10:50:38', 1),
(22, 'Кактусы', 'megamen99@mail.ru', 'fdsfsdfsdfsdfsdfsdfs', '2018-06-29 11:13:20', 1),
(23, 'Кактусы', 'a@mail.aa', 'sdfasdfasdfsd', '2018-06-29 12:41:09', 1),
(24, 'Товар 4', 'a@mail.aa', 'dasdfasdfasdfasd', '2018-06-29 12:42:58', 1),
(25, 'Test', 'test@mail.com', 'Test Test', '2018-07-02 07:04:28', 1),
(26, 'Кактусы', 'megamen99@mail.ru', 'укпукпу', '2018-07-03 14:14:35', 1),
(27, 'Кактусы', 'megamen99@mail.ru', 'sdfsdfs', '2018-07-03 14:38:27', 1),
(28, 'mvc-magee', 'megamen99@mail.ru', 'dfvdfvdfvdfvdfv', '2018-07-04 14:41:15', 1),
(29, 'Товар 4', 'a@mail.aa', 'dfdvdfvdfvdfvdfvdvfdvfdvf', '2018-07-04 14:41:44', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `porducts`
--

CREATE TABLE `porducts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `articul` varchar(255) NOT NULL,
  `char1` varchar(255) NOT NULL,
  `char2` varchar(255) NOT NULL,
  `char3` varchar(255) NOT NULL,
  `char4` varchar(255) NOT NULL,
  `char5` varchar(255) NOT NULL,
  `char6` varchar(255) NOT NULL,
  `char7` varchar(255) NOT NULL,
  `char8` varchar(255) NOT NULL,
  `char9` varchar(255) NOT NULL,
  `char10` varchar(255) NOT NULL,
  `char11` varchar(255) NOT NULL,
  `char12` varchar(255) NOT NULL,
  `char13` varchar(255) NOT NULL,
  `char14` varchar(255) NOT NULL,
  `char15` varchar(255) NOT NULL,
  `char16` varchar(255) NOT NULL,
  `char17` varchar(255) NOT NULL,
  `char18` varchar(255) NOT NULL,
  `char19` varchar(255) NOT NULL,
  `char20` varchar(255) NOT NULL,
  `char21` varchar(255) NOT NULL,
  `char22` varchar(255) NOT NULL,
  `char23` varchar(255) NOT NULL,
  `char24` varchar(255) NOT NULL,
  `char25` varchar(255) NOT NULL,
  `char26` varchar(255) NOT NULL,
  `char27` varchar(255) NOT NULL,
  `char28` varchar(255) NOT NULL,
  `char29` varchar(255) NOT NULL,
  `char30` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `porducts`
--

INSERT INTO `porducts` (`id`, `name`, `articul`, `char1`, `char2`, `char3`, `char4`, `char5`, `char6`, `char7`, `char8`, `char9`, `char10`, `char11`, `char12`, `char13`, `char14`, `char15`, `char16`, `char17`, `char18`, `char19`, `char20`, `char21`, `char22`, `char23`, `char24`, `char25`, `char26`, `char27`, `char28`, `char29`, `char30`, `status`) VALUES
(1, 'GES-NX25', 'FG3432', '3,6 (1,00~4,10) кВт', '3,7 (1,10~5,20) кВт', '1,12 (0,30~1,60) кВт', '1,02 (0,50~1,60) кВт', '6,1/4,0', '3,21/3,63', 'A++/A+', 'A/A', '1/230/50', 'Внутренний блок', '550 м3/час', '37/32/28/20 дБ(А)', '842/211,5/281 мм', '909/279/355 мм', '9,7/12 кг', '1/230/50', '1700 м3/час', '50/51 дБ(А)', 'Mitsubishi', '780/245/540 мм', '920/351/620 мм', '26/29 кг', 'R410A', '6,35 мм', '9,52 мм', '20/10 м', '0,78 кг', '20 г/м', '7 м', '10 — 43 ˚С   -15 — 24 ˚С', 1),
(14, 'GES-NX35', 'HR3546', '2,6 (1,00~3,50) кВт', '2,8 (1,00~4,40) кВт', '0,81 (0,30~1,40) кВт', '0,75 (0,30~1,50) кВт', '6,2/4,0', '3,21/3,71', 'A++/A+', 'A/A', '1/230/50', 'Внутренний блок', '500 м3/час', '36/30/26/20 дБ(А)', '842/211,5/281 мм', '909/279/355 мм', '9,7/12 кг', '1/230/50', '1600 м3/час', '49/50 дБ(А)', 'Hitachi', '780/245/540 мм', '920/351/620 мм', '25,5/28,5 кг', 'R410A', '6,35 мм', '9,52 мм', '20/10 м', '0,78 кг', '20 г/м', '7 м', '10 — 43 ˚С   -15 — 24 ˚С', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `status`) VALUES
(1, 'superuser', 'superuser', 1),
(2, 'admin', 'admin', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `porducts`
--
ALTER TABLE `porducts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT для таблицы `porducts`
--
ALTER TABLE `porducts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
