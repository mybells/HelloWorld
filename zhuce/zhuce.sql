-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-10-22 10:10:45
-- 服务器版本： 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zhuce`
--
CREATE DATABASE IF NOT EXISTS `zhuce` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `zhuce`;

-- --------------------------------------------------------

--
-- 表的结构 `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `username` varchar(100) CHARACTER SET utf8 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 NOT NULL,
  `mail` varchar(20) CHARACTER SET utf8 NOT NULL,
  `name` varchar(20) CHARACTER SET utf8 NOT NULL,
  `sex` varchar(2) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `register`
--

INSERT INTO `register` (`username`, `password`, `mail`, `name`, `sex`) VALUES
('88787', '222', '222', '222', '男'),
('222', '2222', '2222', '222', '男'),
('www', 'www', 'www ', 'www', '男'),
('张死', '123', '123', '123', '男'),
('张三', '123', '123', '张三', '男'),
('13669298763', '111', '111', '111', '男'),
('13669298763w', 'w', '111', '111', '男'),
('13669298763w7', '1', '111', '111', '男'),
('你好', '111', '去去去', '去去去', '女'),
('你3', '111', '去去去', '去去去', '女'),
('qqq', 'www', 'wwww', 'www', '男');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
