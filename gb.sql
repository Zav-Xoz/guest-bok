-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 21 2021 г., 15:55
-- Версия сервера: 8.0.19
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `gb`
--

CREATE TABLE `gb` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gb`
--

INSERT INTO `gb` (`id`, `name`, `text`, `date`) VALUES
(1, 'Сергей', 'PHPHPHPH!', '2021-07-19 19:40:12'),
(2, 'Сергей', 'А это уже второе сообщение!!!', '2021-07-19 19:40:53'),
(3, 'Сергей ', 'Третье  , продолжай в том же духе!!!', '2021-07-19 19:41:27'),
(5, 'Оля', 'Lorem Ipsum dolor sit amet.', '2021-07-20 11:01:11'),
(11, 'd\'Artanian', 'имя с Апострофом.', '2021-07-20 15:19:50'),
(12, 'Карлсон', 'Куку Мой мальчик!', '2021-07-20 16:47:14'),
(13, 'САША', 'Это строка с Апострофом (\')', '2021-07-20 16:48:28'),
(14, 'Экранирование\'', 'Это строка с Апострофом (\')', '2021-07-20 17:20:56'),
(15, 'Тест Тест', 'ТЕСТТЕСТСТСТ', '2021-07-21 10:26:59'),
(16, 'QWEQWE', 'QWEQWE', '2021-07-21 12:53:37');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int UNSIGNED NOT NULL,
  `user_login` varchar(30) NOT NULL,
  `user_password` varchar(32) NOT NULL,
  `user_hash` varchar(32) NOT NULL DEFAULT '',
  `user_ip` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `user_login`, `user_password`, `user_hash`, `user_ip`) VALUES
(1, 'ZavXoz', '63ee451939ed580ef3c4b6f0109d1fd0', '7018a24be0bda86d099606ec27004e1e', 2130706433),
(4, 'QWEQWE', 'cd07ff3a06c6eb8eb504cd9b66928810', '9419b8db5bb2a267e7f0b52109c3628c', 2130706433);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `gb`
--
ALTER TABLE `gb`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `gb`
--
ALTER TABLE `gb`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
