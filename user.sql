-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-11-12 10:00:21
-- 伺服器版本： 10.4.24-MariaDB
-- PHP 版本： 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `user`
--

-- --------------------------------------------------------

--
-- 資料表結構 `employee_tabl`
--

CREATE TABLE `employee_tabl` (
  `id` int(10) NOT NULL,
  `name` varchar(32) NOT NULL DEFAULT '',
  `work_date` date DEFAULT NULL,
  `daily_typing_pages` int(10) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `employee_tabl`
--

INSERT INTO `employee_tabl` (`id`, `name`, `work_date`, `daily_typing_pages`) VALUES
(1, 'John', '2015-01-24', 150),
(2, 'Ram', '2015-07-27', 220),
(3, 'Jack', '2015-05-06', 170),
(4, 'Jack', '2015-01-24', 100),
(5, 'Jill', '2015-01-24', 220),
(6, 'Zara', '2015-01-26', 300),
(7, 'Zara', '2015-02-24', 350);

-- --------------------------------------------------------

--
-- 資料表結構 `tcount_tbl`
--

CREATE TABLE `tcount_tbl` (
  `tutorial_author` varchar(40) NOT NULL,
  `tutorial_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `tcount_tbl`
--

INSERT INTO `tcount_tbl` (`tutorial_author`, `tutorial_count`) VALUES
('Yiibai', 2),
('mahran', 20),
('Gill', 20);

-- --------------------------------------------------------

--
-- 資料表結構 `test`
--

CREATE TABLE `test` (
  `ID` int(11) NOT NULL,
  `ACCOUNT` varchar(10) NOT NULL,
  `PASSWORD` varchar(10) NOT NULL,
  `NAME` varchar(10) NOT NULL,
  `MAIL` varchar(100) NOT NULL,
  `DATETIME` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `test`
--

INSERT INTO `test` (`ID`, `ACCOUNT`, `PASSWORD`, `NAME`, `MAIL`, `DATETIME`) VALUES
(2, 'aaaa', 'bbbb', 'cccc', 'dddd', '2022-11-12 02:11:26'),
(3, '1111', '2222', '3333', '444', '2022-11-12 02:45:53'),
(9, 'pppp', 'iiiiii', 'llllll', 'oooo', '2022-11-12 03:36:05'),
(10, 'QQQQ', 'WWW', 'EEEE', 'RRR', '2022-11-12 03:37:04'),
(12, 'aaaa', 'bbbb', 'cccc', 'dddd', '2022-11-12 03:42:15'),
(13, '', '', '', '', '2022-11-12 03:43:10'),
(14, '', '', '', '', '2022-11-12 03:44:06'),
(15, '', '', '', '', '2022-11-12 03:44:07'),
(16, '', '', '', '', '2022-11-12 03:44:07'),
(17, '', '', '', '', '2022-11-12 03:44:07'),
(18, '', '', '', '', '2022-11-12 03:44:07'),
(19, '', '', '', '', '2022-11-12 03:44:08'),
(20, '', '', '', '', '2022-11-12 03:44:08');

-- --------------------------------------------------------

--
-- 資料表結構 `tutorials_tbl`
--

CREATE TABLE `tutorials_tbl` (
  `tutorial_id` int(11) NOT NULL,
  `tutorial_title` varchar(100) NOT NULL,
  `tutorial_author` varchar(40) NOT NULL,
  `submission_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `tutorials_tbl`
--

INSERT INTO `tutorials_tbl` (`tutorial_id`, `tutorial_title`, `tutorial_author`, `submission_date`) VALUES
(1, 'Learn MySQL', 'Yiibai', '2022-11-12'),
(2, 'JAVA Tutorial', 'Sanjay', '2022-09-06'),
(3, 'Learn PHP', 'John Poul', '2022-09-18');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `employee_tabl`
--
ALTER TABLE `employee_tabl`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`ID`);

--
-- 資料表索引 `tutorials_tbl`
--
ALTER TABLE `tutorials_tbl`
  ADD PRIMARY KEY (`tutorial_id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `employee_tabl`
--
ALTER TABLE `employee_tabl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `test`
--
ALTER TABLE `test`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `tutorials_tbl`
--
ALTER TABLE `tutorials_tbl`
  MODIFY `tutorial_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
