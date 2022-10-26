CREATE DATABASE IF NOT EXISTS `marketpubilc` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `marketpublic`;

CREATE TABLE `marketinfodetail`(
    `marketid` int(10) NOT NULL AUTO_INCREMENT,
    `timemod` int(10) NOT NULL UNIQUE,
    `telone` int(8) NOT NULL UNIQUE,
    `teltwo` int(8) NOT NULL UNIQUE,
    `marketname` char(20) NOT NULL UNIQUE,
    PRIMARY KEY (`marketid`)
    );


CREATE TABLE `marketinfolocate` (
 `locatid` int(6) NOT NULL AUTO_INCREMENT,
 `coordlat` float NOT NULL UNIQUE,
 `coordlon` float NOT NULL UNIQUE,
 `addressname` char(20),
 PRIMARY KEY (`locatid`)
 
 );

CREATE TABLE `businesstime` (
 `busintid` int(10),
 `starttmtime` time(7),
 `endmtime` timestamp NULL);

CREATE TABLE `Region` (
 `regid` smallint(5) NOT NULL AUTO_INCREMENT,
 `regioneng` int(10) NOT NULL,
 PRIMARY KEY (`regid`));

CREATE TABLE `district` (
 `districtid` int(10) NOT NULL AUTO_INCREMENT,
 `districteng` int(10),
 PRIMARY KEY (`districtid`));

ALTER TABLE `marketinfodetail`
ADD FOREIGN KEY (`locatid`) REFERENCES `marketinfolocate`.`locatid`;

ALTER TABLE `marketinfolocate`
ADD FOREIGN KEY (`regid`) REFERENCES `Region`.`regid`;

ALTER TABLE `marketinfolocate`
ADD FOREIGN KEY (`districtid`) REFERENCES `District`.`districtid`;