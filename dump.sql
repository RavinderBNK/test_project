-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Фев 25 2020 г., 10:03
-- Версия сервера: 10.4.8-MariaDB
-- Версия PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `school_board`
--

-- --------------------------------------------------------

--
-- Структура таблицы `board`
--

CREATE TABLE `board` (
  `id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `report_format` enum('JSON','XML') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `board`
--

INSERT INTO `board` (`id`, `name`, `report_format`) VALUES
(1, 'CSM', 'JSON'),
(2, 'CSMB', 'XML');

-- --------------------------------------------------------

--
-- Структура таблицы `grade`
--

CREATE TABLE `grade` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `grade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `grade`
--

INSERT INTO `grade` (`id`, `student_id`, `grade`) VALUES
(1, 1, 3),
(2, 1, 5),
(3, 2, 62),
(4, 2, 22),
(5, 3, 8),
(6, 3, 1),
(7, 4, 10),
(8, 4, 7);

-- --------------------------------------------------------

--
-- Структура таблицы `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `board_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `student`
--

INSERT INTO `student` (`id`, `name`, `board_id`) VALUES
(1, 'Lolita', 1),
(2, 'Sestra Lolity', 2),
(3, 'Brat Lolity', 2),
(4, 'Otec Lolity', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `board`
--
ALTER TABLE `board`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `board`
--
ALTER TABLE `board`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `grade`
--
ALTER TABLE `grade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
