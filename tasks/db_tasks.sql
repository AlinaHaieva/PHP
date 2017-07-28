-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июл 28 2017 г., 01:57
-- Версия сервера: 10.1.24-MariaDB
-- Версия PHP: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `db_tasks`
--

-- --------------------------------------------------------

--
-- Структура таблицы `it_candidates`
--

CREATE TABLE `it_candidates` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `wanted_salary` int(11) NOT NULL,
  `cv` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `it_candidates`
--

INSERT INTO `it_candidates` (`id`, `name`, `wanted_salary`, `cv`) VALUES
(1, 'Ann', 1500, 'dev'),
(2, 'Brittani', 1200, 'dev'),
(3, 'Celine', 1500, 'pm'),
(4, 'Dana', 1200, 'pm'),
(5, 'Elizabeth', 1500, 'qc'),
(6, 'Flora', 1200, 'qc');

-- --------------------------------------------------------

--
-- Структура таблицы `it_teams`
--

CREATE TABLE `it_teams` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `project` text NOT NULL,
  `needs-id` int(11) NOT NULL,
  `members-id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `it_teams`
--

INSERT INTO `it_teams` (`id`, `name`, `project`, `needs-id`, `members-id`) VALUES
(1, 'FirstTeam', 'FirstProject', 1, 1),
(2, 'SecondTeam', 'SecondProject', 2, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `it_teams_members`
--

CREATE TABLE `it_teams_members` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `position` text NOT NULL,
  `salary` int(11) NOT NULL,
  `team` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `it_teams_members`
--

INSERT INTO `it_teams_members` (`id`, `name`, `position`, `salary`, `team`) VALUES
(1, 'Gwen', 'dev', 1500, 'FirstTeam'),
(2, 'Hailey', 'pm', 1300, 'FirstTeam'),
(3, 'Ingrid', 'dev', 1500, 'SecondTeam'),
(4, 'Jaclyn', 'pm', 1300, 'SecondTeam');

-- --------------------------------------------------------

--
-- Структура таблицы `it_teams_needs`
--

CREATE TABLE `it_teams_needs` (
  `id` int(11) NOT NULL,
  `dev_need` int(11) NOT NULL,
  `pm_need` int(11) NOT NULL,
  `qc_need` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `it_teams_needs`
--

INSERT INTO `it_teams_needs` (`id`, `dev_need`, `pm_need`, `qc_need`) VALUES
(1, 3, 1, 1),
(2, 2, 1, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `pet_shop`
--

CREATE TABLE `pet_shop` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` int(11) NOT NULL,
  `color` text NOT NULL,
  `fluffiness` int(11) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `pet_shop`
--

INSERT INTO `pet_shop` (`id`, `name`, `price`, `color`, `fluffiness`, `type`) VALUES
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
-- Индексы таблицы `it_candidates`
--
ALTER TABLE `it_candidates`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `it_teams`
--
ALTER TABLE `it_teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `needs-id` (`needs-id`),
  ADD KEY `members-id` (`members-id`);

--
-- Индексы таблицы `it_teams_members`
--
ALTER TABLE `it_teams_members`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `it_teams_needs`
--
ALTER TABLE `it_teams_needs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pet_shop`
--
ALTER TABLE `pet_shop`
  ADD PRIMARY KEY (`id`);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `it_teams`
--
ALTER TABLE `it_teams`
  ADD CONSTRAINT `it_teams_ibfk_1` FOREIGN KEY (`needs-id`) REFERENCES `it_teams_needs` (`id`),
  ADD CONSTRAINT `it_teams_ibfk_2` FOREIGN KEY (`members-id`) REFERENCES `it_teams_members` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
