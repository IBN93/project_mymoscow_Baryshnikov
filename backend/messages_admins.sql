-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 07 2018 г., 12:17
-- Версия сервера: 10.1.36-MariaDB
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
-- База данных: `messages&admins`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `last_visit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admins`
--

INSERT INTO `admins` (`id`, `login`, `password`, `last_visit`) VALUES
(1, 'admin@admin.com', '123', '07 ноября 2018 11:23 (Europe/Berlin)'),
(2, 'moder@admin.com', 'moderator', '07 ноября 2018 11:28 (Europe/Berlin)');

-- --------------------------------------------------------

--
-- Структура таблицы `is_read`
--

CREATE TABLE `is_read` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` set('yes','no') NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `is_read`
--

INSERT INTO `is_read` (`id`, `login`, `message`, `status`) VALUES
(1, 'admin@admin.com', 'Здравствуйте! Интересуют места для 4-х человек на экскурсию по Мастер и Маргарите...\r\n', 'yes'),
(2, 'admin@admin.com', 'Пожалуйста, забронируйте на двух человек тур \"Сталинские высотки\" 7 сентября ', 'yes'),
(3, 'admin@admin.com', 'Пожалуйста, забронируйте на одного человека (моё имя) тур \"Мастер и Маргарита\" 8-го числа и 9-го на \"Легенды МосМетро\".', 'yes'),
(4, 'admin@admin.com', 'Здравствуйте! Хотелось бы забронировать квест по Москве-сити на 3-х 5 сентября.', 'yes'),
(5, 'moder@admin.com', 'Здравствуйте! Интересуют места для 4-х человек на экскурсию по Мастер и Маргарите...\r\n', 'yes'),
(6, 'moder@admin.com', 'Пожалуйста, забронируйте на двух человек тур \"Сталинские высотки\" 7 сентября ', 'yes'),
(7, 'moder@admin.com', 'Пожалуйста, забронируйте на одного человека (моё имя) тур \"Мастер и Маргарита\" 8-го числа и 9-го на \"Легенды МосМетро\".', 'yes'),
(8, 'moder@admin.com', 'Здравствуйте! Хотелось бы забронировать квест по Москве-сити на 3-х 5 сентября.', 'yes'),
(9, 'moder@admin.com', 'Здравствуйте! Сделайте, пожалуйста, бронь для двоих на 3 сентября. Экскурсия \"Москва-сити\".', 'yes');

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `message_id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`message_id`, `email`, `full_name`, `message`, `date_created`) VALUES
(1, 'sergivanov88@gmail.com', 'Иванов Сергей Д.', 'Здравствуйте! Интересуют места для 4-х человек на экскурсию по Мастер и Маргарите...\r\n', '2018-10-09'),
(2, 'alexx90@gmail.com', 'Фельдман Александр Евгеньевич', 'Пожалуйста, забронируйте на двух человек тур \"Сталинские высотки\" 7 сентября ', '2018-10-12'),
(3, 'juliaegorovaa_@gmail.com', 'Егорова Ю.А.', 'Пожалуйста, забронируйте на одного человека (моё имя) тур \"Мастер и Маргарита\" 8-го числа и 9-го на \"Легенды МосМетро\".', '2018-10-17'),
(4, 'konst1976@gmail.com', 'Иванов Дмитрий Константинович', 'Здравствуйте! Хотелось бы забронировать квест по Москве-сити на 3-х 5 сентября.', '2018-11-07'),
(6, 'sevastmail@list.ru', 'Севастьянов Н.И.', 'Здравствуйте! Сделайте, пожалуйста, бронь для двоих на 3 сентября. Экскурсия \"Москва-сити\".', '2018-11-07'),
(7, 'evgenPert@rambler.ru', 'Петров Евгений Олегович', 'Здравствуйте! А есть ли места на 3-х человек на экскурсию \"Мастер и Маргарита\" 9 сентября? Если да, то забронируйте за нами.', '2018-11-07');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `is_read`
--
ALTER TABLE `is_read`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `is_read`
--
ALTER TABLE `is_read`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
