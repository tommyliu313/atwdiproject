-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-11-11 15:08:37
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
-- 資料庫： `market`
--

CREATE DATABASE IF NOT EXISTS `market`;
-- --------------------------------------------------------

--
-- 資料表結構 `region`
--

USE `market`;

CREATE TABLE IF NOT EXISTS  `district` (
  `DistrictId` int(4) NOT NULL,
  `DistrictName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `district`
--

INSERT INTO `district` (`DistrictId`, `DistrictName`) VALUES
(1, 'Eastern'),
(2, 'Wan Chai'),
(3, 'Central / Western'),
(4, 'Southern'),
(5, 'Islands'),
(6, 'Kwun Tong'),
(7, 'Kowloon City'),
(8, 'Wong Tai Sin'),
(9, 'Yau Tsim'),
(10, 'Mong Kok'),
(11, 'Sham Shui Po'),
(12, 'Kwai Tsing'),
(13, 'North'),
(14, 'Sai Kung'),
(15, 'Sha Tin'),
(16, 'Tai Po'),
(17, 'Tsuen Wan'),
(18, 'Tuen Mun'),
(19, 'Yuen Long');

-- --------------------------------------------------------

--
-- 資料表結構 `region`
--

CREATE TABLE IF NOT EXISTS `region` (
  `RegionId` int(4) NOT NULL,
  `RegionName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `region`
--

INSERT INTO `region` (`RegionId`, `RegionName`) VALUES
(1, 'Hong Kong & Islands'),
(2, 'Kowloon'),
(3, 'New Territories');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`DistrictId`);

--
-- 資料表索引 `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`RegionId`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `district`
--
ALTER TABLE `district`
  MODIFY `DistrictId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `region`
--
ALTER TABLE `region`
  MODIFY `RegionId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
