-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 27 2018 г., 13:42
-- Версия сервера: 5.7.19
-- Версия PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `setup`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `url` text NOT NULL,
  `text` longtext NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`, `url`, `text`, `image`) VALUES
(1, 'Видеонаблюдение', 'video', 'Мы полностью производим монтаж и установку систем видеонаблюдения по стандартам. 				Настраиваем удаленный просмотр с мобильных устройств через интернет. 				Мы консультируем, составляем сметы и выполняем замеры объектов бесплатно. 				Мы поставляем готовые решения в сфере безопасности от проектирования до монтажа камер видеонаблюдения, 				охранных систем и контроля доступа для дома, офиса, производства.', '1.jpg'),
(2, 'Домофрны/IP Домофоны', 'domofony', 'Домофоны давно плотно вошли в нашу жизнь. 		Установка домофона производится практически повсеместно: в многоквартирных домах, коттеджах, предприятиях, и т.д. 		Своевременное обслуживание домофона является залогом стабильности и долговечности работы домофона. 		Но тем менее иногда всё же возникают ситуации, в которых необходим срочный ремонт домофона.', '2.jpg'),
(3, 'Охранная сигнализация/GSM', 'comp', '', '3.jpg'),
(4, 'Контроль доступа/ СКуД', 'konrtol', '', '1.jpg'),
(5, 'Структурированые Кабельные Системы', 'kabel', '', '4.jpg'),
(6, 'Настройка Удаленного доступа к DVR/NVR', 'dostup', '', '5.jpg'),
(7, 'Ремонт компьютеров /ноутбуков/ Замена Windows', 'remont', '', '1.jpg'),
(8, 'Подбор оборудования', 'podbor', '', '3.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `price_domofony`
--

DROP TABLE IF EXISTS `price_domofony`;
CREATE TABLE IF NOT EXISTS `price_domofony` (
  `komlekt` text NOT NULL,
  `what` text NOT NULL,
  `price` text NOT NULL,
  `warranty` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `price_domofony`
--

INSERT INTO `price_domofony` (`komlekt`, `what`, `price`, `warranty`) VALUES
('Комплект', 'Из чего состоит', 'Цена, грн.', 'Гарантия, мес.');

-- --------------------------------------------------------

--
-- Структура таблицы `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `slider`
--

INSERT INTO `slider` (`id`, `name`) VALUES
(1, 'photo11.jpg'),
(2, 'photo21.jpg'),
(3, 'photo31.jpg'),
(4, 'photo41.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
