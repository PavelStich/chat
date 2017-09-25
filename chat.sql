-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 25 2017 г., 13:59
-- Версия сервера: 5.5.53-log
-- Версия PHP: 5.6.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `chat`
--

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `id` int(5) NOT NULL,
  `login` varchar(200) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `login`, `message`, `time`) VALUES
(9, '444', 'dfdfdf', '2017-09-24 13:49:47'),
(10, '444', 'sddgfg', '2017-09-24 13:50:42'),
(11, '111', 'fvdjjscrxakl', '2017-09-24 14:09:34'),
(12, '111', 'tbbhdnj', '2017-09-24 14:09:43'),
(13, '222', 'fghfjm', '2017-09-24 14:10:00'),
(14, '222', 'dvhdftjghl', '2017-09-24 14:10:02'),
(15, '333', 'fgbjfjg', '2017-09-24 14:10:11'),
(16, '333', 'ujuiululpup', '2017-09-24 14:10:17'),
(17, '222', 'gfhfghfgh', '2017-09-24 14:49:39'),
(18, '111', 'dghtkyjokl', '2017-09-24 15:07:20');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `login` varchar(200) NOT NULL,
  `password` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, '111', '1111111'),
(3, '222', '2222222'),
(4, '333', '3333333'),
(5, '444', '4444444');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
