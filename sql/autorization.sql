-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Дек 18 2022 г., 22:59
-- Версия сервера: 5.7.24
-- Версия PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `autorization`
--

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `full_name` varchar(355) DEFAULT NULL,
  `login` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `full_name`, `login`, `email`, `password`) VALUES
(31, 'андрей', 'andre', 'andre@ya.ru', '$2y$10$aiDzNQljmXqcRPInRwR1luzFjZr653XoEuzIY9gs3W8IFO2.RoNqO'),
(32, 'test123', 'test123', 'test123@ya.ru', '$2y$10$Qkj5YWTIE1ZqDDck5ANOP.49VSFxwtRstv.OYgLyQ6WN5bd3V/qVa'),
(33, 'test12', 'test12', 'test12@YA.ru', '$2y$10$TD6y0JSSKjqYZDQSN7Ljs.Nk/C4nVNO3R9gioJTTNRHcFR1rvQqAK'),
(34, 'test12456', 'test12456', 'test12456@ya.ru', '6ebec181ab5999f3858bc1dec1e7c8e3'),
(35, 'ljhv', 'ljhv', 'ljhv@ya.ru', '202cb962ac59075b964b07152d234b70'),
(36, 'Апрелев Андрей Петрович', 'test', 'andrew@ya.ru', 'dd573120e473c889140e34e817895495');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
