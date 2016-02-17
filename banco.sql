-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14-Fev-2016 às 00:00
-- Versão do servidor: 5.5.44
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `friend`
--

CREATE TABLE `friend` (
  `id_friend` int(11) NOT NULL,
  `id_inviter` int(11) NOT NULL,
  `id_invited` int(11) NOT NULL,
  `dt_create_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `int_status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `str_name_user` varchar(100) NOT NULL,
  `str_username_user` varchar(50) NOT NULL,
  `str_email_user` varchar(100) NOT NULL,
  `dt_bourn_user` timestamp NOT NULL DEFAULT DEFAULT '0000-00-00 00:00:00',
  `int_sex_user` int(1) NOT NULL,
  `dt_create_at_user` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `dt_last_login_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `friend`
--
ALTER TABLE `friend`
  ADD PRIMARY KEY (`id_friend`),
  ADD KEY `id_inviter` (`id_inviter`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `str_username_user` (`str_username_user`),
  ADD UNIQUE KEY `str_email_user` (`str_email_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `friend`
--
ALTER TABLE `friend`
  MODIFY `id_friend` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `friend`
--
ALTER TABLE `friend`
  ADD CONSTRAINT `friend_ibfk_1` FOREIGN KEY (`id_inviter`) REFERENCES `user` (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
