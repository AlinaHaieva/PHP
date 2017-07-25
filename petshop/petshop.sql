-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `db_petshop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `petshop`
--

CREATE TABLE `petshop` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` int(200) NOT NULL,
  `color` text NOT NULL,
  `fluffiness` int(10) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `petshop`
--

INSERT INTO `petshop` (`id`, `name`, `price`, `color`, `fluffiness`, `type`) VALUES
(1, 'FirstCat', 100, 'white', 8, 'cat'),
(2, 'SecondCat', 150, 'red', 2, 'cat'),
(3, 'ThirdCat', 15, 'black', 7, 'cat'),
(4, 'FirstDog', 80, 'white', 4, 'dog'),
(5, 'SecondDog', 70, 'black', 10, 'dog'),
(6, 'ThirdDog', 130, 'white', 6, 'dog'),
(7, 'Hamster', 100, 'black', 6, 'hamster'),
(8, 'Hamster', 20, 'white', 2, 'hamster'),
(9, 'Hamster', 35, 'gray', 10, 'hamster');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `petshop`
--
ALTER TABLE `petshop`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
