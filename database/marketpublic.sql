-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-09-26 06:07:01
-- 伺服器版本： 10.4.24-MariaDB
-- PHP 版本： 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `marketpublic`
--
CREATE DATABASE IF NOT EXISTS `marketpublic` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `marketpublic`;

-- --------------------------------------------------------

--
-- 資料表結構 `businesstime`
--

CREATE TABLE `businesstime` (
  `busintid` int(10) NOT NULL,
  `starttmtime` time NOT NULL,
  `endmtime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `district`
--

CREATE TABLE `district` (
  `districtid` varchar(20) NOT NULL,
  `districteng` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `marketinfodetail`
--

CREATE TABLE `marketinfodetail` (
  `marketid` int(10) NOT NULL,
  `timemod` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `telone` int(8) NOT NULL,
  `teltwo` int(8) NOT NULL,
  `marketname` char(20) NOT NULL,
  `locatid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `marketinfolocate`
--

CREATE TABLE `marketinfolocate` (
  `locatid` int(10) NOT NULL,
  `coordlat` float NOT NULL,
  `coordlon` float NOT NULL,
  `addressname` char(20) NOT NULL,
  `districtid` varchar(20) NOT NULL,
  `regid` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `region`
--

CREATE TABLE `region` (
  `regid` int(6) NOT NULL,
  `regioneng` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `businesstime`
--
ALTER TABLE `businesstime`
  ADD PRIMARY KEY (`busintid`);

--
-- 資料表索引 `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`districtid`);

--
-- 資料表索引 `marketinfodetail`
--
ALTER TABLE `marketinfodetail`
  ADD PRIMARY KEY (`marketid`),
  ADD KEY `locatid` (`locatid`);

--
-- 資料表索引 `marketinfolocate`
--
ALTER TABLE `marketinfolocate`
  ADD PRIMARY KEY (`locatid`),
  ADD KEY `districtid` (`districtid`),
  ADD KEY `regid` (`regid`);

--
-- 資料表索引 `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`regid`);

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `marketinfodetail`
--
ALTER TABLE `marketinfodetail`
  ADD CONSTRAINT `locatid` FOREIGN KEY (`locatid`) REFERENCES `marketinfolocate` (`locatid`);

--
-- 資料表的限制式 `marketinfolocate`
--
ALTER TABLE `marketinfolocate`
  ADD CONSTRAINT `districtid` FOREIGN KEY (`districtid`) REFERENCES `district` (`districtid`),
  ADD CONSTRAINT `regid` FOREIGN KEY (`regid`) REFERENCES `region` (`regid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
