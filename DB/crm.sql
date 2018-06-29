-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2018 at 02:34 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'admin', '4b3626865dc6d5cfe1c60b855e68634a');

-- --------------------------------------------------------

--
-- Table structure for table `client_invoices`
--

CREATE TABLE `client_invoices` (
  `id` int(11) NOT NULL,
  `client_email` varchar(255) NOT NULL,
  `invoice` varchar(255) NOT NULL,
  `posting_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` int(10) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `query` longtext NOT NULL,
  `posting_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `sender` varchar(30) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `attached_file` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `status_ad` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prequest`
--

CREATE TABLE `prequest` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contactno` varchar(11) NOT NULL,
  `company` varchar(255) NOT NULL,
  `wdd` varchar(255) NOT NULL,
  `cms` varchar(255) NOT NULL,
  `seo` varchar(255) NOT NULL,
  `smo` varchar(255) NOT NULL,
  `swd` varchar(255) NOT NULL,
  `dwd` varchar(255) NOT NULL,
  `fwd` varchar(255) NOT NULL,
  `dr` varchar(255) NOT NULL,
  `whs` varchar(255) NOT NULL,
  `wm` varchar(255) NOT NULL,
  `ed` varchar(255) NOT NULL,
  `wta` varchar(255) NOT NULL,
  `opi` varchar(255) NOT NULL,
  `ld` varchar(255) NOT NULL,
  `da` varchar(255) NOT NULL,
  `osc` varchar(255) NOT NULL,
  `nd` varchar(255) NOT NULL,
  `others` varchar(255) NOT NULL,
  `query` longtext NOT NULL,
  `posting_date` date NOT NULL,
  `remark` longtext NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prequest`
--

INSERT INTO `prequest` (`id`, `name`, `email`, `contactno`, `company`, `wdd`, `cms`, `seo`, `smo`, `swd`, `dwd`, `fwd`, `dr`, `whs`, `wm`, `ed`, `wta`, `opi`, `ld`, `da`, `osc`, `nd`, `others`, `query`, `posting_date`, `remark`, `status`) VALUES
(1, 'test', 'test2md5@gmail.com', '123123', 'nsbm', 'Website Design & Development', '', 'SEO (Search Engine Optimization)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'test', '2018-01-20', '', 0),
(2, 'test', 'test2md5@gmail.com', '123123', 'nsbm', 'Website Design & Development', '', 'SEO (Search Engine Optimization)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'test', '2018-01-20', '', 0),
(3, 'test', 'test2md5@gmail.com', '123123', 'nsbm', 'Website Design & Development', '', 'SEO (Search Engine Optimization)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'test', '2018-01-20', '', 0),
(4, 'demo', 'tps@gmail.com', '45456', 'ijts', 'Website Design & Development', '', '', '', '', '', '', '', 'Web Hosting Services', '', '', '', '', '', '', '', '', '', 'io', '2018-01-20', '', 0),
(5, 'demo', 'tps@gmail.com', '45456', 'ijts', 'Website Design & Development', '', '', '', '', '', '', '', 'Web Hosting Services', '', '', '', '', '', '', '', '', '', 'io', '2018-01-20', 'noted', 0),
(6, 'test2', 'testmd5@gmail.com', '1231233', 'dss', 'Website Design & Development', '', '', '', '', '', '', '', 'Web Hosting Services', '', '', '', '', '', '', '', '', '', 'dsadassasaasasas', '2018-01-20', '', 0),
(7, 'test2', 'testmd5@gmail.com', '1231233', 'dss', 'Website Design & Development', '', '', '', '', '', '', '', 'Web Hosting Services', '', '', '', '', '', '', '', '', '', 'dsadassasaasasas', '2018-01-20', '', 0),
(8, 'iii', 'niwanthiperera455@gmail.com', '123', 'dsadsad', 'Website Design & Development', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'dsasdasdasdadas', '2018-01-20', '', 0),
(9, 'dsa', 'niwanthiperera455@gmail.com', '123', 'dsadsad', 'Website Design & Development', '', 'SEO (Search Engine Optimization)', '', 'Static Website Design', '', '', '', '', '', '', '', '', '', '', '', '', '', 'sdasdsadsad', '2018-01-20', 'ok', 0),
(10, 'eer', 'niwanthiperera455@gmail.com', '123', 'dsadsad', 'Website Design & Development', '', '', 'SMO (Social Media Optimization)	', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'cccccccccccccc', '2018-01-20', '', 0),
(11, 'eer', 'niwanthiperera455@gmail.com', '123', 'dsadsad', 'Website Design & Development', '', '', '', 'Static Website Design', '', '', '', '', '', '', '', '', '', '', '', '', '', 'q', '2018-01-20', '', 0),
(12, 'pop', 'pop3@gmail.com', '1231231231', 'acme', 'Website Design & Development', '', 'SEO (Search Engine Optimization)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'qq', '2018-01-20', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `ticket_id` varchar(11) NOT NULL,
  `email_id` varchar(300) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `task_type` varchar(300) NOT NULL,
  `prioprity` varchar(300) NOT NULL,
  `ticket` longtext NOT NULL,
  `attachment` varchar(300) NOT NULL,
  `status` varchar(300) NOT NULL,
  `admin_remark` longtext NOT NULL,
  `posting_date` date NOT NULL,
  `admin_remark_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `ticket_id`, `email_id`, `subject`, `task_type`, `prioprity`, `ticket`, `attachment`, `status`, `admin_remark`, `posting_date`, `admin_remark_date`) VALUES
(1, '5', 'test2md5@gmail.com', 'web', 'billing', 'important', 'test', '', 'Open', '', '2018-01-20', 0),
(2, '6', 'test2md5@gmail.com', 'pop', 'billing', 'important', 'asdfgh', '', 'Open', '', '2018-01-20', 0),
(3, '7', 'test2md5@gmail.com', 'testing', 'ot1', 'important', 'important', '', 'Open', '', '2018-01-20', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alt_email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `address` varchar(500) NOT NULL,
  `status` int(11) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `resume_status` varchar(255) NOT NULL,
  `resume_remark` longtext NOT NULL,
  `r_posting_date` date NOT NULL,
  `posting_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `alt_email`, `password`, `mobile`, `gender`, `user_image`, `user_type`, `address`, `status`, `resume`, `resume_status`, `resume_remark`, `r_posting_date`, `posting_date`) VALUES
(2, 'test2md5', 'test2md5@gmail.com', 'o3p@gmail.com', '25d55ad283aa400af464c76d713c07ad', '111', 'm', '', '3', '', 0, '', '', '', '0000-00-00', '2018-01-15');

-- --------------------------------------------------------

--
-- Table structure for table `usercheck`
--

CREATE TABLE `usercheck` (
  `id` int(11) NOT NULL,
  `logindate` varchar(255) NOT NULL DEFAULT '',
  `logintime` varchar(255) NOT NULL DEFAULT '',
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL DEFAULT '',
  `ip` varbinary(16) NOT NULL,
  `mac` varbinary(16) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usercheck`
--

INSERT INTO `usercheck` (`id`, `logindate`, `logintime`, `user_id`, `username`, `email`, `ip`, `mac`, `city`, `country`) VALUES
(1, '2018/01/15', '10:02:40pm', 1, 'TestMD5', 'testmd5@gmail.com', 0x3a3a31, 0x34432d43432d36412d37462d31372d42, '', ''),
(2, '2018/01/15', '10:04:29pm', 1, 'TestMD5', 'testmd5@gmail.com', 0x3a3a31, 0x34432d43432d36412d37462d31372d42, '', ''),
(3, '2018/01/15', '10:09:26pm', 1, 'TestMD5', 'testmd5@gmail.com', 0x3a3a31, 0x34432d43432d36412d37462d31372d42, '', ''),
(4, '2018/01/15', '10:14:06pm', 2, 'test2md5', 'test2md5@gmail.com', 0x3a3a31, 0x34432d43432d36412d37462d31372d42, '', ''),
(5, '2018/01/15', '10:14:51pm', 2, 'test2md5', 'test2md5@gmail.com', 0x3a3a31, 0x34432d43432d36412d37462d31372d42, '', ''),
(6, '2018/01/15', '10:15:34pm', 2, 'test2md5', 'test2md5@gmail.com', 0x3a3a31, 0x34432d43432d36412d37462d31372d42, '', ''),
(7, '2018/01/19', '07:53:54pm', 2, 'test2md5', 'test2md5@gmail.com', 0x3a3a31, 0x34432d43432d36412d37462d31372d42, '', ''),
(8, '2018/01/19', '08:39:37pm', 2, 'test2md5', 'test2md5@gmail.com', 0x3a3a31, 0x34432d43432d36412d37462d31372d42, '', ''),
(9, '2018/01/19', '08:41:46pm', 2, 'test2md5', 'test2md5@gmail.com', 0x3a3a31, 0x34432d43432d36412d37462d31372d42, '', ''),
(10, '2018/01/19', '08:54:28pm', 2, 'test2md5', 'test2md5@gmail.com', 0x3a3a31, 0x34432d43432d36412d37462d31372d42, '', ''),
(11, '2018/01/19', '10:19:53pm', 2, 'test2md5', 'test2md5@gmail.com', 0x3a3a31, 0x34432d43432d36412d37462d31372d42, '', ''),
(12, '2018/01/19', '10:21:55pm', 2, 'test2md5', 'test2md5@gmail.com', 0x3a3a31, 0x34432d43432d36412d37462d31372d42, '', ''),
(13, '2018/01/19', '10:22:30pm', 2, 'test2md5', 'test2md5@gmail.com', 0x3a3a31, 0x34432d43432d36412d37462d31372d42, '', ''),
(14, '2018/01/19', '11:15:16pm', 2, 'test2md5', 'test2md5@gmail.com', 0x3a3a31, 0x34432d43432d36412d37462d31372d42, '', ''),
(15, '2018/01/19', '11:17:52pm', 2, 'test2md5', 'test2md5@gmail.com', 0x3a3a31, 0x34432d43432d36412d37462d31372d42, '', ''),
(16, '2018/01/20', '08:59:33am', 2, 'test2md5', 'test2md5@gmail.com', 0x3a3a31, 0x34432d43432d36412d37462d31372d42, '', ''),
(17, '2018/01/20', '01:10:51pm', 2, 'test2md5', 'test2md5@gmail.com', 0x3a3a31, 0x34432d43432d36412d37462d31372d42, '', ''),
(18, '2018/01/20', '01:24:23pm', 2, 'test2md5', 'test2md5@gmail.com', 0x3a3a31, 0x34432d43432d36412d37462d31372d42, '', ''),
(19, '2018/01/20', '02:57:41pm', 2, 'test2md5', 'test2md5@gmail.com', 0x3a3a31, 0x34432d43432d36412d37462d31372d42, '', ''),
(20, '2018/01/20', '08:15:18pm', 2, 'test2md5', 'test2md5@gmail.com', 0x3a3a31, 0x34432d43432d36412d37462d31372d42, '', ''),
(21, '2018/01/20', '10:14:36pm', 2, 'test2md5', 'test2md5@gmail.com', 0x3a3a31, 0x34432d43432d36412d37462d31372d42, '', ''),
(22, '2018/01/20', '10:15:56pm', 2, 'test2md5', 'test2md5@gmail.com', 0x3a3a31, 0x34432d43432d36412d37462d31372d42, '', ''),
(23, '2018/01/21', '01:20:38pm', 2, 'test2md5', 'TEST2MD5@GMAIL.COM', 0x3a3a31, 0x34432d43432d36412d37462d31372d42, '', ''),
(24, '2018/01/21', '02:38:21pm', 2, 'test2md5', 'test2md5@gmail.com', 0x3a3a31, 0x34432d43432d36412d37462d31372d42, '', ''),
(25, '2018/01/21', '05:16:03pm', 2, 'test2md5', 'test2md5@gmail.com', 0x3a3a31, 0x34432d43432d36412d37462d31372d42, '', ''),
(26, '2018/01/21', '06:41:20pm', 2, 'test2md5', 'test2md5@gmail.com', 0x3a3a31, 0x34432d43432d36412d37462d31372d42, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_query`
--

CREATE TABLE `user_query` (
  `id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `query` longtext NOT NULL,
  `reply` longtext NOT NULL,
  `status` int(11) NOT NULL,
  `posting_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_invoices`
--
ALTER TABLE `client_invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prequest`
--
ALTER TABLE `prequest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `alt_email` (`alt_email`);

--
-- Indexes for table `usercheck`
--
ALTER TABLE `usercheck`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_query`
--
ALTER TABLE `user_query`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `client_invoices`
--
ALTER TABLE `client_invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `prequest`
--
ALTER TABLE `prequest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `usercheck`
--
ALTER TABLE `usercheck`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `user_query`
--
ALTER TABLE `user_query`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
