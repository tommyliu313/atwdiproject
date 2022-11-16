-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-11-16 05:23:23
-- 伺服器版本： 10.4.25-MariaDB
-- PHP 版本： 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `testing`
--
CREATE DATABASE IF NOT EXISTS `testing`;
-- --------------------------------------------------------

--
-- 資料表結構 `market`
--

USE `testing`;

CREATE TABLE IF NOT EXISTS  `market` (
  `marketId` int(4) NOT NULL,
  `marketname` varchar(256) NOT NULL,
  `regionname` varchar(256) NOT NULL,
  `districtname` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `coordinate` varchar(256) NOT NULL,
  `contact1` varchar(20) NOT NULL,
  `contact2` varchar(20) NOT NULL,
  `tenancycomd` varchar(256) NOT NULL,
  `openinghour` varchar(256) NOT NULL,
  `nosstall` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `market`
--
ALTER TABLE `market`
  ADD PRIMARY KEY (`marketId`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `market`
--
ALTER TABLE `market`
  MODIFY `marketId` int(4) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
