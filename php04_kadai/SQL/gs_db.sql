-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2023-07-30 20:52:40
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
(6, '阪急電車 (幻冬舎文庫) ', 'https://www.amazon.co.jp/%E9%98%AA%E6%80%A5%E9%9B%BB%E8%BB%8A-%E5%B9%BB%E5%86%AC%E8%88%8E%E6%96%87%E5%BA%AB-%E6%9C%89%E5%B7%9D-%E6%B5%A9/dp/4344415132', '2023-07-01', '友人の勧め', '5', '隣に座った女性は、よく行く図書館で見かけるあの人だった…。片道わずか15分のローカル線で起きる小さな奇跡の数々。乗り合わせただけの乗客の人生が少しずつ交差し、やがて希望の物語が紡がれる。恋の始まり、別れの兆し、途中下車―人数分のドラマを乗せた電車はどこまでもは続かない線路を走っていく。ほっこり胸キュン。', '2023-07-17 05:22:38'),
(7, '吾輩は猫である', 'https://www.aozora.gr.jp/cards/000148/files/789_14547.html', '2023-06-30', '気になって', '1', '長い', '2023-07-18 00:46:13'),
(8, 'aaa', 'xxx', '2023-06-29', '友人の勧め', '1', 'ppp', '2023-07-18 01:16:51');

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_an_table`
--

CREATE TABLE `gs_an_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(256) NOT NULL,
  `naiyou` text DEFAULT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_an_table`
--

INSERT INTO `gs_an_table` (`id`, `name`, `email`, `naiyou`, `indate`) VALUES
(1, 'どんぶラッコ', 'rakko@example.com', '内容テスト', '2023-07-11 20:08:46'),
(2, 'どんぶラッコ1', 'rakko@example.com', '内容テスト', '2023-07-11 20:08:46'),
(3, 'どんぶラッコ2', 'rakko@example.com', '内容テスト', '2023-07-11 20:08:46'),
(4, 'どんぶラッコ3', 'rakko@example.com', '内容テスト', '2023-07-11 20:08:47'),
(5, 'あああ', 'mail', 'fff', '2023-07-11 20:35:46'),
(6, 'どんぶラッコ', 'rakko@example.com', '内容テスト', '2023-07-16 15:29:15'),
(7, 'どんぶラッコ', 'rakko@example.com', NULL, '2023-07-16 15:33:42'),
(8, 'aaa', 't@email', 'jjj', '2023-07-16 21:02:43');

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_user_table2`
--

CREATE TABLE `gs_user_table2` (
  `id` int(12) NOT NULL,
  `name` varchar(64) NOT NULL,
  `lid` varchar(128) NOT NULL,
  `lpw` varchar(64) NOT NULL,
  `kanri_flg` int(1) NOT NULL,
  `life_flg` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_user_table2`
--

INSERT INTO `gs_user_table2` (`id`, `name`, `lid`, `lpw`, `kanri_flg`, `life_flg`) VALUES
(1, 'テスト１管理者', 'test1', '$2y$10$92ocpYS27OPyk4pnWnUtFO2g3278FZ9MFfbnhKDRzW3t2ndB10bta', 1, 0),
(2, 'テスト2一般', 'test2', '$2y$10$wWHPUylE4NKuj5osEEiFxOAWFXq8Gan.hEqaT7tHslXxnzghu0YlW', 0, 0),
(3, 'テスト３', 'test3', '$2y$10$89/3FDogAaTqHus.H18CDOWaHthM7ZJ5QZzou2Qr7/H9S831Q1jVG', 0, 0);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `bookmark_favorite_book`
--
ALTER TABLE `bookmark_favorite_book`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `gs_an_table`
--
ALTER TABLE `gs_an_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `gs_user_table2`
--
ALTER TABLE `gs_user_table2`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `bookmark_favorite_book`
--
ALTER TABLE `bookmark_favorite_book`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- テーブルの AUTO_INCREMENT `gs_an_table`
--
ALTER TABLE `gs_an_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- テーブルの AUTO_INCREMENT `gs_user_table2`
--
ALTER TABLE `gs_user_table2`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
