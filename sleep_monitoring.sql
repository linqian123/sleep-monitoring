-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-12-24 07:16:39
-- 服务器版本： 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sleep_monitoring`
--

-- --------------------------------------------------------

--
-- 表的结构 `electronic-fence`
--

CREATE TABLE `electronic-fence` (
  `id` int(11) NOT NULL,
  `userid` varchar(32) NOT NULL,
  `center-lng` varchar(32) NOT NULL,
  `center-lat` varchar(32) NOT NULL,
  `radius` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `electronic-fence`
--

INSERT INTO `electronic-fence` (`id`, `userid`, `center-lng`, `center-lat`, `radius`) VALUES
(14, '', '', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `gpsdetail`
--

CREATE TABLE `gpsdetail` (
  `id` int(10) UNSIGNED NOT NULL,
  `userid` varchar(32) NOT NULL,
  `lng` varchar(32) CHARACTER SET utf8 NOT NULL,
  `lat` varchar(32) CHARACTER SET utf8 NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `gpsdetail`
--

INSERT INTO `gpsdetail` (`id`, `userid`, `lng`, `lat`, `datetime`) VALUES
(1, 'qianqian', '106.6147556746683', '29.54203993920891', '2017-12-24 13:51:28');

-- --------------------------------------------------------

--
-- 表的结构 `physical-data`
--

CREATE TABLE `physical-data` (
  `id` int(11) NOT NULL,
  `userid` varchar(32) NOT NULL,
  `blood_pressure_h` varchar(32) NOT NULL,
  `blood_pressure_l` varchar(32) NOT NULL,
  `pulse_rate` varchar(32) NOT NULL,
  `single_heart_rate` varchar(32) NOT NULL,
  `single_ventricular_beat` varchar(32) NOT NULL,
  `single_supraventricular_beat` varchar(32) NOT NULL,
  `multi_heart_rate` varchar(32) NOT NULL,
  `multi_ventricular_beat` varchar(32) NOT NULL,
  `multi_supraventricular_beat` varchar(32) NOT NULL,
  `blood_oxygen` varchar(32) NOT NULL,
  `blood_sugar` varchar(32) NOT NULL,
  `temperature` varchar(32) NOT NULL,
  `uric_acid` varchar(32) NOT NULL,
  `weight` varchar(32) NOT NULL,
  `vital_capacity` varchar(32) NOT NULL,
  `date` date NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `physical-data`
--

INSERT INTO `physical-data` (`id`, `userid`, `blood_pressure_h`, `blood_pressure_l`, `pulse_rate`, `single_heart_rate`, `single_ventricular_beat`, `single_supraventricular_beat`, `multi_heart_rate`, `multi_ventricular_beat`, `multi_supraventricular_beat`, `blood_oxygen`, `blood_sugar`, `temperature`, `uric_acid`, `weight`, `vital_capacity`, `date`, `datetime`) VALUES
(1, 'qianqian', '118', '77', '102', '74', '72', '67', '74', '67', '70', '93', '5.00', '36.45', '5.38', '63.50', '2080.00', '2017-11-01', '2017-11-01 14:57:14');

-- --------------------------------------------------------

--
-- 表的结构 `physical-status`
--

CREATE TABLE `physical-status` (
  `id` int(11) NOT NULL,
  `userid` varchar(32) NOT NULL,
  `breath` int(11) NOT NULL,
  `heart` int(11) NOT NULL,
  `turnover` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `date` date NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `physical-status`
--

INSERT INTO `physical-status` (`id`, `userid`, `breath`, `heart`, `turnover`, `status`, `date`, `datetime`) VALUES
(1, 'qianqian', 17, 70, 4, 0, '2017-12-18', '0000-00-00 00:00:00'),
(2, 'qianqian', 15, 67, 5, 0, '2017-12-19', '0000-00-00 00:00:00'),
(3, 'qianqian', 14, 63, 6, 0, '2017-12-20', '0000-00-00 00:00:00'),
(4, 'qianqian', 17, 68, 3, 0, '2017-12-21', '0000-00-00 00:00:00'),
(5, 'qianqian', 16, 71, 6, 0, '2017-12-22', '0000-00-00 00:00:00'),
(6, 'qianqian', 14, 67, 6, 0, '2017-12-23', '0000-00-00 00:00:00'),
(7, 'qianqian', 15, 69, 6, 0, '2017-12-24', '0000-00-00 00:00:00'),
(8, 'qianqian', 14, 70, 6, 2, '2017-12-24', '2017-12-24 14:39:57');

-- --------------------------------------------------------

--
-- 表的结构 `preference`
--

CREATE TABLE `preference` (
  `id` int(10) UNSIGNED NOT NULL,
  `userid` varchar(32) NOT NULL,
  `bmin` int(10) UNSIGNED NOT NULL,
  `bmax` int(10) UNSIGNED NOT NULL,
  `hmin` int(10) UNSIGNED NOT NULL,
  `hmax` int(10) UNSIGNED NOT NULL,
  `tmin` int(10) UNSIGNED NOT NULL,
  `tmax` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `preference`
--

INSERT INTO `preference` (`id`, `userid`, `bmin`, `bmax`, `hmin`, `hmax`, `tmin`, `tmax`) VALUES
(1, 'qianqian', 16, 20, 60, 100, 0, 26);

-- --------------------------------------------------------

--
-- 表的结构 `user-info`
--

CREATE TABLE `user-info` (
  `id` int(10) UNSIGNED NOT NULL,
  `userid` varchar(32) NOT NULL,
  `mattressid` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user-info`
--

INSERT INTO `user-info` (`id`, `userid`, `mattressid`, `password`) VALUES
(1, 'qianqian', '0001', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `electronic-fence`
--
ALTER TABLE `electronic-fence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gpsdetail`
--
ALTER TABLE `gpsdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `physical-data`
--
ALTER TABLE `physical-data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `physical-status`
--
ALTER TABLE `physical-status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `preference`
--
ALTER TABLE `preference`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user-info`
--
ALTER TABLE `user-info`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `electronic-fence`
--
ALTER TABLE `electronic-fence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- 使用表AUTO_INCREMENT `gpsdetail`
--
ALTER TABLE `gpsdetail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `physical-data`
--
ALTER TABLE `physical-data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
--
-- 使用表AUTO_INCREMENT `physical-status`
--
ALTER TABLE `physical-status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=282;
--
-- 使用表AUTO_INCREMENT `preference`
--
ALTER TABLE `preference`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `user-info`
--
ALTER TABLE `user-info`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
