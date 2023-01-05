-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 04 2022 г., 23:14
-- Версия сервера: 5.7.33
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `wspkbtu`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comm`
--

CREATE TABLE `comm` (
  `id` int(10) NOT NULL,
  `post_id` int(10) NOT NULL,
  `user` varchar(50) NOT NULL,
  `userComment` text NOT NULL,
  `date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comm`
--

INSERT INTO `comm` (`id`, `post_id`, `user`, `userComment`, `date`) VALUES
(1, 2, 'FirstUser', 'Some Commments test 2', '02-05-2022'),
(2, 0, '', '', '02-05-2022'),
(3, 0, '', '', '02-05-2022'),
(4, 0, 'Example User', 'Example comment', '02-05-2022'),
(5, 0, 'фвыфв', 'фывфыв', '02-05-2022'),
(6, 0, 'Example User', 'Example comment', '02-05-2022');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `descritoion` text NOT NULL,
  `comments` varchar(50) NOT NULL,
  `date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `descritoion`, `comments`, `date`) VALUES
(1, 'First Title', 'Some new descrip', '1', '02-05-2022'),
(2, 'Second Title', 'Something desc from 2 post ', '', '03-05-2022');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comm`
--
ALTER TABLE `comm`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comm`
--
ALTER TABLE `comm`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
