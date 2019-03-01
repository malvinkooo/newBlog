-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 01 2019 г., 15:57
-- Версия сервера: 10.1.28-MariaDB
-- Версия PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `blog`
--
CREATE DATABASE IF NOT EXISTS `blog` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `blog`;

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--
-- Создание: Мар 01 2019 г., 14:32
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `main_image` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `date` date NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONSHIPS FOR TABLE `articles`:
--

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `main_image`, `text`, `date`, `category_id`) VALUES
(1, 'Статья 1', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem repellat ullam velit nulla magnam, obcaecati, deleniti ipsa quae doloribus nisi, dicta provident eius fugit rem sint ab ex qui possimus facilis maxime non debitis eum. Accusantium aliquid voluptate sunt sint fuga, quasi rerum ea ab quos laboriosam sequi ipsum laborum et reiciendis pariatur accusamus eveniet, vitae dolores soluta. Dolor illum temporibus iure facilis aliquam commodi itaque unde omnis doloremque architecto, voluptate nobis perferendis libero vitae, id esse incidunt cupiditate nisi at perspiciatis. Error illo vitae aperiam, atque iusto praesentium veniam laborum asperiores quis dolorem enim, in, aliquid aut temporibus tempora.', '2019-02-28', 2),
(2, 'Статься 2', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem repellat ullam velit nulla magnam, obcaecati, deleniti ipsa quae doloribus nisi, dicta provident eius fugit rem sint ab ex qui possimus facilis maxime non debitis eum. Accusantium aliquid voluptate sunt sint fuga, quasi rerum ea ab quos laboriosam sequi ipsum laborum et reiciendis pariatur accusamus eveniet, vitae dolores soluta. Dolor illum temporibus iure facilis aliquam commodi itaque unde omnis doloremque architecto, voluptate nobis perferendis libero vitae, id esse incidunt cupiditate nisi at perspiciatis. Error illo vitae aperiam, atque iusto praesentium veniam laborum asperiores quis dolorem enim, in, aliquid aut temporibus tempora.', '2019-03-01', 2),
(3, 'Статья 3', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem repellat ullam velit nulla magnam, obcaecati, deleniti ipsa quae doloribus nisi, dicta provident eius fugit rem sint ab ex qui possimus facilis maxime non debitis eum. Accusantium aliquid voluptate sunt sint fuga, quasi rerum ea ab quos laboriosam sequi ipsum laborum et reiciendis pariatur accusamus eveniet, vitae dolores soluta. Dolor illum temporibus iure facilis aliquam commodi itaque unde omnis doloremque architecto, voluptate nobis perferendis libero vitae, id esse incidunt cupiditate nisi at perspiciatis. Error illo vitae aperiam, atque iusto praesentium veniam laborum asperiores quis dolorem enim, in, aliquid aut temporibus tempora.', '2019-03-01', 3),
(4, 'Статья 5', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem repellat ullam velit nulla magnam, obcaecati, deleniti ipsa quae doloribus nisi, dicta provident eius fugit rem sint ab ex qui possimus facilis maxime non debitis eum. Accusantium aliquid voluptate sunt sint fuga, quasi rerum ea ab quos laboriosam sequi ipsum laborum et reiciendis pariatur accusamus eveniet, vitae dolores soluta. Dolor illum temporibus iure facilis aliquam commodi itaque unde omnis doloremque architecto, voluptate nobis perferendis libero vitae, id esse incidunt cupiditate nisi at perspiciatis. Error illo vitae aperiam, atque iusto praesentium veniam laborum asperiores quis dolorem enim, in, aliquid aut temporibus tempora.', '2019-02-28', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--
-- Создание: Фев 25 2019 г., 13:56
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONSHIPS FOR TABLE `categories`:
--

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `img`) VALUES
(2, 'Техника', ''),
(3, 'Биология', ''),
(5, 'ророр', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
