-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2013 年 12 月 20 日 14:00
-- 服务器版本: 5.5.27
-- PHP 版本: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `memetao`
--

-- --------------------------------------------------------

--
-- 表的结构 `goods`
--

CREATE TABLE IF NOT EXISTS `goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` text CHARACTER SET gbk NOT NULL,
  `goods_name` text CHARACTER SET gbk NOT NULL,
  `goods_type` varchar(200) CHARACTER SET gbk NOT NULL,
  `goods_price` float NOT NULL,
  `goods_num` int(20) NOT NULL,
  `goods_judge` int(10) NOT NULL,
  `goods_flag` varchar(5) CHARACTER SET gbk NOT NULL,
  `goods_des` text CHARACTER SET gbk NOT NULL,
  `telephone` varchar(11) CHARACTER SET gbk NOT NULL,
  `goods_picture` text CHARACTER SET gbk NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- 转存表中的数据 `goods`
--

INSERT INTO `goods` (`id`, `user_name`, `goods_name`, `goods_type`, `goods_price`, `goods_num`, `goods_judge`, `goods_flag`, `goods_des`, `telephone`, `goods_picture`) VALUES
(3, '范琪', '鼠标', '电子', 100, 10, 9, '有', '范神专用鼠标', '18345099611', '鼠标.jpg'),
(11, '丁鹏伟', '手表', '电子', 100, 5, 4, '有', '劳力士大放送', '18345111101', '手表.jpg'),
(12, '王桢琦', '手机', '电子', 500, 1, 10, '有', '小米2 不要了 给你了', '18345099611', '手机.jpg'),
(13, '老师', '星月神话', '书籍', 0, 10, 9, '有', '谁要给谁了', '18345099611', '神话.jpg'),
(14, '范琪', '手机', '电子', 1000, 1, 8, '有', '三星智能', '12345678911', '手机.jpg'),
(16, '范琪', 'dota账号', '虚拟', 50, 2, 10, '有', '1800+的大号', '18345099611', 'dota.jpg'),
(21, '老师', '毛衣', '衣服', 100, 1, 9, '有', '厚毛衣', '123242444', '毛衣.jpg'),
(22, '丁鹏伟', '项链', '饰品', 12, 2, 5, '有', '黄金项链', '234567', '项链.jpg'),
(23, '王桢琦', '皮鞋', '鞋', 123, 4, 6, '有', '卖大皮鞋', '22455666', '皮鞋.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_message` text CHARACTER SET gbk NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `message`
--

INSERT INTO `message` (`id`, `user_message`) VALUES
(5, '亲，网站做的太好了呢！'),
(6, '亲，再接再厉哦！'),
(7, '请留言亲，功能太少了！'),
(8, '请留言这个网站太水了');

-- --------------------------------------------------------

--
-- 表的结构 `need`
--

CREATE TABLE IF NOT EXISTS `need` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` text CHARACTER SET gbk NOT NULL,
  `goods_name` text CHARACTER SET gbk NOT NULL,
  `goods_number` int(5) NOT NULL,
  `telephone` varchar(11) CHARACTER SET gbk NOT NULL,
  `need_des` text CHARACTER SET gbk NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `need`
--

INSERT INTO `need` (`id`, `user_name`, `goods_name`, `goods_number`, `telephone`, `need_des`) VALUES
(1, '范琪', '电源', 1, '18345099611', '索尼电源适配器'),
(4, '丁鹏伟', '耳机', 2, '234567676', '苹果耳机的要!'),
(5, '丁鹏伟', '桌子', 2, '2343556666', '学习桌的要'),
(6, '王桢琦', '学分', 60, '2343543555', '学分的要'),
(7, '老师', '水盆', 1, '2344', '水盆的要！');

-- --------------------------------------------------------

--
-- 表的结构 `personal_information`
--

CREATE TABLE IF NOT EXISTS `personal_information` (
  `user_name` text CHARACTER SET gbk NOT NULL,
  `name` text CHARACTER SET gbk NOT NULL,
  `student_num` varchar(15) CHARACTER SET gbk NOT NULL,
  `age` int(15) NOT NULL,
  `telephone` varchar(15) CHARACTER SET gbk NOT NULL,
  `email` varchar(15) CHARACTER SET gbk NOT NULL,
  `college` text CHARACTER SET gbk NOT NULL,
  `apartment` text CHARACTER SET gbk NOT NULL,
  `room` varchar(15) CHARACTER SET gbk NOT NULL,
  PRIMARY KEY (`age`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `personal_information`
--

INSERT INTO `personal_information` (`user_name`, `name`, `student_num`, `age`, `telephone`, `email`, `college`, `apartment`, `room`) VALUES
('范琪', '范琪', '1110310115', 20, '18345099611', '1430988405@qq.c', '计算机学院', '2公寓', '6004');

-- --------------------------------------------------------

--
-- 表的结构 `regist`
--

CREATE TABLE IF NOT EXISTS `regist` (
  `user_email` varchar(20) CHARACTER SET gbk NOT NULL,
  `user_name` text CHARACTER SET gbk NOT NULL,
  `user_password` varchar(15) CHARACTER SET gbk NOT NULL,
  `user_rank` int(2) NOT NULL,
  PRIMARY KEY (`user_email`),
  UNIQUE KEY `user_email` (`user_email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='存储用户的注册信息';

--
-- 转存表中的数据 `regist`
--

INSERT INTO `regist` (`user_email`, `user_name`, `user_password`, `user_rank`) VALUES
('123312', '丁鹏伟', '123456', 1),
('232222', '老师', '111', 1),
('2344444', '王桢琦', '123456', 1),
('45546', '哈工大', '123456', 1),
('fanqihit@163.com', '范琪', '123456', 1),
('memetao@163.com', '么么淘', 'memetao', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
