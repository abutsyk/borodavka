-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 05 2018 г., 21:56
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
-- Структура таблицы `brand`
--

DROP TABLE IF EXISTS `brand`;
CREATE TABLE IF NOT EXISTS `brand` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `brand`
--

INSERT INTO `brand` (`id`, `image`) VALUES
(1, 'ajax.jpg'),
(2, 'arny.png'),
(3, 'atis.png'),
(4, 'commax.jpg'),
(5, 'dahua.gif'),
(6, 'eltis.jpg\r\n'),
(7, 'finmark.jpg\r\n'),
(8, 'fullenergy.png\r\n'),
(9, 'gardi.jpg\r\n'),
(10, 'geze.gif\r\n'),
(11, 'hikvision.jpg\r\n'),
(12, 'infinity.jpg\r\n'),
(13, 'ironlogic.jpg\r\n'),
(14, 'kocom.gif\r\n'),
(15, 'neolight.png\r\n'),
(16, 'odeskabel.jpg\r\n'),
(17, 'policecam.png\r\n'),
(18, 'satel.jpg\r\n'),
(19, 'seagate.jpg\r\n'),
(20, 'slinex.jpg\r\n'),
(21, 'tamron.jpg\r\n'),
(22, 'tantos.png\r\n'),
(23, 'tecsar.png\r\n'),
(24, 'twist.png\r\n'),
(25, 'visit.jpg\r\n'),
(26, 'western.jpg\r\n'),
(27, 'yli.png\r\n'),
(28, 'zben.jpg\r\n');

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
  `id` int(11) NOT NULL,
  `komplekt` text NOT NULL,
  `what` text NOT NULL,
  `price` text NOT NULL,
  `warranty` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `price_domofony`
--

INSERT INTO `price_domofony` (`id`, `komplekt`, `what`, `price`, `warranty`) VALUES
(1, 'Комплект', 'Из чего состоит', 'Цена, грн.', 'Гарантия, мес.'),
(2, 'Домофон (монитор 4″) с установкой', 'Видеодомофон с TFT монитором 4″, функция открывание замка с панели, антивандальная вызывная панель', '3900', '18'),
(3, 'Домофон (монитор 4″) с электромеханическим замком и установкой', 'Видеодомофон с TFT монитором 7″, электромеханический замок, антивандальная вызывная панель', '6200', '18'),
(4, 'Домофон (монитор 7″) с установкой', 'Видеодомофон с TFT монитором 7″, функция открывание замка с панели, антивандальная вызывная панель', '4700', '18'),
(5, 'Домофон (монитор 7″) с электромеханическим замком и установкой	', 'Видеодомофон с TFT монитором 7″ , электромеханический замок, антивандальная вызывная панель', '6750', '18');

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

-- --------------------------------------------------------

--
-- Структура таблицы `slider_domofony`
--

DROP TABLE IF EXISTS `slider_domofony`;
CREATE TABLE IF NOT EXISTS `slider_domofony` (
  `id` int(11) NOT NULL,
  `href` text NOT NULL,
  `description` text NOT NULL,
  `display` varchar(256) NOT NULL DEFAULT 'none',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `slider_domofony`
--

INSERT INTO `slider_domofony` (`id`, `href`, `description`, `display`) VALUES
(1, 'dom2.jpg', 'Рабочие моменты', ''),
(2, 'dom1.jpg', 'Hey here\'s a caption', ''),
(3, 'dom4.jpg', 'Установка видео наблюдения...Установка видео наблюдения...Установка видео наблюдения...Установка видео наблюдения...', ''),
(4, 'dom4.jpg', 'Whoa, another caption. What are the odds of that happening?', 'none');

-- --------------------------------------------------------

--
-- Структура таблицы `soft`
--

DROP TABLE IF EXISTS `soft`;
CREATE TABLE IF NOT EXISTS `soft` (
  `id` int(11) NOT NULL,
  `os` text NOT NULL,
  `link` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `soft`
--

INSERT INTO `soft` (`id`, `os`, `link`) VALUES
(1, 'Наименование', 'Ссылка'),
(2, 'Windows 10', '<a class=\"link\" href=\"https://www.microsoft.com/uk-ua/software-download/windows10\" target=\"_blank\">https://www.microsoft.com/uk-ua/software-download/windows10</a>'),
(3, 'Office 365', '<a class=\"link\" href=\"https://products.office.com/uk-ua/home\" target=\"_blank\">https://products.office.com/uk-ua/home</a>'),
(5, 'Office 365', '<a class=\"link\" href=\"https://products.office.com/uk-ua/home\" target=\"_blank\">https://products.office.com/uk-ua/home</a>'),
(4, 'Windows 10', '<a class=\"link\" href=\"https://www.microsoft.com/uk-ua/software-download/windows10\" target=\"_blank\">https://www.microsoft.com/uk-ua/software-download/windows10</a>');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
