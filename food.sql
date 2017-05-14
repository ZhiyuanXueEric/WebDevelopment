-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2016 at 04:58 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fall2167`
--

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE IF NOT EXISTS `food` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `uname` varchar(15) DEFAULT NULL,
  `pword` varchar(256) DEFAULT NULL,
  `tele` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `name`, `uname`, `pword`, `tele`, `email`) VALUES
(1, 'Zhiyuan Xue', 'zxue6', '$2y$10$.Sq1WiaqjIT9TlABnTkEkOMlC4YfY7pmQjitkuGh2aO6PujqWqD1y', '6173886123', 'zhiyuan.xue@asu.edu'),
(2, 'Dennis Anderson', 'deande', '$2y$10$cE8H7VcFv0kadnYhesS6Pu3x.kaxrZOrytBzOxD4W0bHDYusn2Lmy', '7455168799', 'dla@dla34567.com'),
(3, 'peter johnson', 'peterjohnson', '$2y$10$SChtWbYwgMZJvh5hQb299e9XFCl8mhtoHIMvB92PVXpTA75cAu0TS', '4352679012', 'peter.jj@psu.edu'),
(4, 'cindy gamel', 'cindyg', '$2y$10$/iSbKiuD1Dw0.Gzck7rtKuiDR7CfVJ4gfhgFZWrWAAFI42p/HUNtC', '7778889029', 'cindy.gamel@yale.edu'),
(6, 'bill hong', 'billhonn', '$2y$10$LtfxQ8TXWMWX2mj3oKuzvOohlnvU6Pp3SfAvCGdvkN/T5m8cGvdBa', '7328833892', 'billhonnn@unc.edu');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
