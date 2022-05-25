-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: 172.16.1.103
-- 생성 시간: 22-05-25 17:17
-- 서버 버전: 10.4.18-MariaDB-log
-- PHP 버전: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `domeme`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `dmm_token`
--

CREATE TABLE IF NOT EXISTS `dmm_token` (
  `dmm_id` varchar(60) NOT NULL COMMENT 'dmm_id',
  `access_token` varchar(300) NOT NULL COMMENT 'access_token',
  `refresh_token` varchar(300) NOT NULL COMMENT 'refresh_token'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='domeme api token';

--
-- 테이블의 덤프 데이터 `dmm_token`
--

INSERT INTO `dmm_token` (`dmm_id`, `access_token`, `refresh_token`) VALUES
('testbuyercom', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ0ZXN0YnV5ZXJjb20iLCJpYXQiOjE2NTMzNzY4OTYsImlzcyI6Imh0dHBzOi8vZG9tZW1lZGIuZG9tZWdnb29rLmNvbS8iLCJqdGkiOiJhNWFjMjM2ZWE0ZGYxZDYwNDVhZDY2MzM3NTc0YWE3NyIsImV4cCI6MTY1MzM5MTI5Nn0.7LdIq2RBJSL0bQj4ZDLolSiNbQvCPHPIivfZBdvi-tI', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ0ZXN0YnV5ZXJjb20iLCJpYXQiOjE2NTMzNzY4OTYsImlzcyI6Imh0dHBzOi8vZG9tZW1lZGIuZG9tZWdnb29rLmNvbS8iLCJqdGkiOiJhNWFjMjM2ZWE0ZGYxZDYwNDVhZDY2MzM3NTc0YWE3NyIsImV4cCI6MTY1NTc5NjA5Nn0.ohiI_6dWClPIIFCCWvRTZIe2yWvQNfpoUbqmFsGvvCA');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `dmm_token`
--
ALTER TABLE `dmm_token`
  ADD KEY `dmm_id` (`dmm_id`),
  ADD KEY `access_token` (`access_token`),
  ADD KEY `refresh_token` (`refresh_token`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
