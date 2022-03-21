-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2022 at 03:57 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `facebook_pnc`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `content` varchar(250) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `content`, `user_id`, `post_id`) VALUES
(14, 'handsome b', 1, 74),
(15, 'hello', 1, 74),
(16, 'gg', 1, 74),
(20, 'handsome man', 1, 81);

-- --------------------------------------------------------

--
-- Stand-in structure for view `comment_post`
-- (See below for the actual view)
--
CREATE TABLE `comment_post` (
`comment_id` int(11)
,`post_id` int(11)
,`comment` varchar(250)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `data_users`
-- (See below for the actual view)
--
CREATE TABLE `data_users` (
`user_id` int(11)
,`logined` tinyint(1)
,`post_id` int(11)
,`first_name` varchar(100)
,`last_name` varchar(100)
,`file_img` char(150)
,`description` varchar(250)
,`current_time` timestamp
);

-- --------------------------------------------------------

--
-- Table structure for table `friendship`
--

CREATE TABLE `friendship` (
  `user_request_id` int(11) DEFAULT NULL,
  `user_accept_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `post_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`post_id`, `user_id`) VALUES
(NULL, 1),
(NULL, 1),
(NULL, 1),
(NULL, 1),
(NULL, 1),
(NULL, 1),
(NULL, 1),
(NULL, 1),
(NULL, 1),
(NULL, 1),
(NULL, 1),
(74, 1),
(74, 1),
(74, 2),
(74, 2),
(74, 2),
(74, 2),
(74, 2),
(74, 2),
(74, 2),
(74, 2),
(74, 2),
(74, 2),
(74, 2),
(74, 2),
(74, 2),
(74, 2),
(74, 2),
(74, 2),
(74, 2),
(74, 2),
(75, 2),
(75, 2),
(75, 2),
(75, 2),
(75, 2),
(75, 2),
(75, 2),
(75, 2),
(75, 2),
(75, 2),
(75, 2),
(75, 2),
(75, 2),
(75, 2),
(75, 2),
(75, 2),
(75, 2),
(75, 2),
(75, 2),
(75, 2),
(75, 2),
(75, 2),
(75, 2),
(75, 2),
(75, 2),
(75, 2),
(75, 2),
(75, 2),
(75, 2),
(75, 2),
(75, 2),
(75, 2),
(75, 2),
(74, 2),
(75, 2),
(75, 2),
(75, 2),
(75, 2),
(74, 2),
(74, 2),
(75, 2),
(75, 2),
(75, 2),
(75, 2),
(74, 2),
(74, 2),
(74, 2),
(74, 2),
(74, 2),
(74, 2),
(74, 2),
(74, 2),
(74, 2),
(74, 2),
(75, 2),
(75, 2),
(74, 2),
(74, 2),
(75, 2),
(75, 2),
(75, 2),
(74, 2),
(75, 2),
(75, 2),
(74, 2),
(74, 2),
(75, 2),
(75, 2),
(75, 2),
(74, 2),
(74, 2),
(74, 2),
(75, 2),
(75, 2),
(75, 2),
(75, 2),
(75, 2),
(75, 2),
(74, 2),
(74, 2),
(74, 2),
(74, 2),
(74, 2),
(74, 2),
(74, 2),
(74, 2),
(74, 2),
(75, 2),
(75, 2),
(75, 2),
(74, 2),
(74, 2),
(74, 2),
(74, 2),
(74, 2),
(74, 2),
(74, 2),
(74, 2),
(74, 2),
(74, 2),
(74, 2),
(74, 2),
(74, 2),
(74, 2),
(74, 2),
(74, 2),
(74, 2),
(75, 2),
(75, 2),
(75, 2),
(75, 2),
(75, 2),
(75, 2),
(75, 2),
(75, 2),
(75, 2),
(75, 2),
(75, 2),
(75, 2),
(75, 2),
(75, 2),
(81, 3),
(81, 3),
(81, 3),
(81, 3),
(81, 3),
(82, 4),
(82, 4),
(90, 1),
(90, 1),
(90, 1),
(90, 1),
(90, 1),
(90, 1),
(90, 1),
(90, 1),
(90, 1),
(90, 1),
(90, 1),
(90, 1),
(90, 1),
(90, 1),
(90, 1),
(90, 1),
(90, 1),
(90, 1),
(90, 1),
(90, 1),
(90, 1),
(90, 1),
(90, 1),
(90, 1),
(82, 4),
(82, 4),
(92, 4),
(92, 4),
(92, 4),
(92, 4),
(92, 4),
(92, 4),
(92, 4),
(82, 4),
(82, 4),
(82, 4),
(92, 4),
(93, 4),
(93, 4),
(93, 4),
(93, 4),
(93, 4),
(93, 4),
(93, 4),
(93, 4),
(93, 4),
(93, 4),
(92, 4),
(92, 4),
(92, 4),
(92, 4),
(92, 4);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `file_img` char(150) DEFAULT NULL,
  `post_date` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `user_id`, `file_img`, `post_date`) VALUES
(74, NULL, '', 2, 'IMG-62370ab08a24e3.20787137.png', '2022-03-20 11:06:24'),
(75, NULL, 'hi nop', 2, 'IMG-62371d51ebcbc7.94318692.jpg', '2020-03-22 00:25:53'),
(81, NULL, '', 3, 'IMG-6238149d3f93c8.86245307.jpg', '2021-03-21 18:01:01'),
(82, NULL, 'heh boy', 4, 'IMG-623821cb663c06.34666504.png', '2021-03-21 18:57:15'),
(90, NULL, '', 1, 'IMG-62387a4f886839.59184960.jpg', '2021-03-22 01:14:55'),
(92, NULL, '', 4, 'IMG-62388d21f022a6.62370831.jpg', '2021-03-22 02:35:13'),
(93, NULL, '', 4, 'IMG-62388da4e5d2a4.00358528.png', '2021-03-22 02:37:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `gender` char(5) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `user_password` varchar(200) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `image` char(150) DEFAULT NULL,
  `login` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `gender`, `email`, `user_password`, `birthday`, `image`, `login`) VALUES
(1, 'Tim', 'Bin', 'Male', 'tim.bin3819@gmail.com', 'tim@1234', '1999-02-08', 'shaut.png', 0),
(2, 'Sauth', 'Phouek', 'Male', 'sauth.phouek@gmail.com', 'sauth@12345', '1999-04-12', 'handsom.png', 0),
(3, 'Shaut', 'Phouek', 'M', 'sauth.phouek@gmail.com', '1234', '2022-03-20', NULL, 0),
(4, 'Shaut', 'Phouek', 'M', 'timsave98@gmail.com', '1', '2022-03-04', NULL, 1);

-- --------------------------------------------------------

--
-- Structure for view `comment_post`
--
DROP TABLE IF EXISTS `comment_post`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `comment_post`  AS SELECT `comments`.`id` AS `comment_id`, `comments`.`post_id` AS `post_id`, `comments`.`content` AS `comment` FROM ((`comments` join `posts` on(`posts`.`id` = `comments`.`post_id`)) join `users` on(`users`.`id` = `comments`.`user_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `data_users`
--
DROP TABLE IF EXISTS `data_users`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data_users`  AS SELECT `users`.`id` AS `user_id`, `users`.`login` AS `logined`, `posts`.`id` AS `post_id`, `users`.`first_name` AS `first_name`, `users`.`last_name` AS `last_name`, `posts`.`file_img` AS `file_img`, `posts`.`description` AS `description`, `posts`.`post_date` AS `current_time` FROM (`users` left join `posts` on(`posts`.`user_id` = `users`.`id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `friendship`
--
ALTER TABLE `friendship`
  ADD KEY `user_request_id` (`user_request_id`),
  ADD KEY `user_accept_id` (`user_accept_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `post_id` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `friendship`
--
ALTER TABLE `friendship`
  ADD CONSTRAINT `friendship_ibfk_1` FOREIGN KEY (`user_request_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `friendship_ibfk_2` FOREIGN KEY (`user_accept_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
