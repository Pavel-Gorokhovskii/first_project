-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 13 2020 г., 21:16
-- Версия сервера: 8.0.12
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gorokhovskiipd`
--
CREATE DATABASE IF NOT EXISTS `gorokhovskiipd` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `gorokhovskiipd`;

-- --------------------------------------------------------

--
-- Структура таблицы `payroll`
--

CREATE TABLE `payroll` (
  `Number` int(11) NOT NULL,
  `Name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Salary` float NOT NULL,
  `Department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `payroll`
--

INSERT INTO `payroll` (`Number`, `Name`, `Salary`, `Department`) VALUES
(1, 'Иванов', 1000, 'Отдел образования'),
(2, 'Петров', 500, 'Средняя школа № 25'),
(3, 'Сидоров', 486, 'Средняя школа № 25'),
(4, 'Васечкин', 2500, 'Artezio Software'),
(5, 'Пупкин', 125, 'Хозяйственный отдел'),
(6, 'Игнатьева', 750, 'Отдел образования'),
(7, 'Гусакова', 1500, 'Налоговая инспекций'),
(8, 'Плещенко', 356, 'Отделение гнойной хирургии'),
(9, 'Зеленская', 487, 'Отделение гнойной хирургии'),
(10, 'Заика', 10000, 'Облисполком');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
