-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 28 2020 г., 07:05
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `info`
--

CREATE TABLE `info` (
  `name` varchar(355) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(355) NOT NULL,
  `img` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `info`
--

INSERT INTO `info` (`name`, `description`, `price`, `img`) VALUES
('Кроссовки Nike Air Max\r\n', 'Люблю заниматься спортом', '12999', 'img/6.jpg'),
('Волейбольный мяч', 'Мне нравиться играть в волейбол', '1999', 'img/7.jpg'),
('Худи NASA', 'Мне нравиться мода', '3900 руб.', 'img/8.jpg'),
('Палатка', 'Мне нравиться ходить в походы', '11000 руб.', 'img/9.jpg'),
('Телефон', 'Я люблю сидеть в сот. сетях', '99990 руб.', 'img/10.jpg'),
('Монитор 144гц', 'Мне нравиться играть в игры', '18990 руб.', 'img/11.jpg'),
('Airpods', 'Люблю слушать музыку', '12999', 'img/12.jpg'),
('PS5', 'Консоль нового поколения', '39999', 'img/13.jpg'),
('Ручка', 'Мне нравиться писать', '999', 'img/14.jpg'),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('кукук', 'кукукку', 'кукуку', 'куку');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
