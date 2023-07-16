-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2023-07-16 22:24:30
-- サーバのバージョン： 10.4.28-MariaDB
-- PHP のバージョン: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `bookmark_favorite_book`
--

CREATE TABLE `bookmark_favorite_book` (
  `id` int(12) NOT NULL,
  `name` varchar(64) NOT NULL,
  `url` text NOT NULL,
  `date` date DEFAULT NULL,
  `impetus` varchar(64) NOT NULL,
  `selected` varchar(12) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `bookmark_favorite_book`
--

INSERT INTO `bookmark_favorite_book` (`id`, `name`, `url`, `date`, `impetus`, `selected`, `comment`, `indate`) VALUES
(1, 'ああああ', 'xxx', NULL, '', '', 'おもろー', '2023-07-16 21:58:41'),
(2, 'ああああ', 'xxx', NULL, '', '', 'おもろー', '2023-07-16 21:59:28'),
(3, 'おおお', 'vvv', NULL, '', '', 'おもれー', '2023-07-16 22:08:49'),
(4, 'aaa', 'vvv', '2023-07-16', 'rrr', '1', 'kkk', '2023-07-17 05:18:37'),
(5, 'aaa', 'vvv', '2023-07-16', 'rrr', '5', 'kkk', '2023-07-17 05:20:00'),
(6, '阪急電車 (幻冬舎文庫) ', 'https://www.amazon.co.jp/%E9%98%AA%E6%80%A5%E9%9B%BB%E8%BB%8A-%E5%B9%BB%E5%86%AC%E8%88%8E%E6%96%87%E5%BA%AB-%E6%9C%89%E5%B7%9D-%E6%B5%A9/dp/4344415132', '2023-07-01', '友人の勧め', '5', '隣に座った女性は、よく行く図書館で見かけるあの人だった…。片道わずか15分のローカル線で起きる小さな奇跡の数々。乗り合わせただけの乗客の人生が少しずつ交差し、やがて希望の物語が紡がれる。恋の始まり、別れの兆し、途中下車―人数分のドラマを乗せた電車はどこまでもは続かない線路を走っていく。ほっこり胸キュン。', '2023-07-17 05:22:38');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `bookmark_favorite_book`
--
ALTER TABLE `bookmark_favorite_book`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `bookmark_favorite_book`
--
ALTER TABLE `bookmark_favorite_book`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
