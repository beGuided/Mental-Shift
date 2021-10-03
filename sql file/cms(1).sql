-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2021 at 03:20 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'bootstrap '),
(2, ' JavaScript '),
(6, ' furrow2'),
(7, '  life'),
(8, 'new ');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(3) NOT NULL,
  `comment_post_id` int(3) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_status` varchar(255) NOT NULL,
  `comment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `comment_post_id`, `comment_author`, `comment_email`, `comment_content`, `comment_status`, `comment_date`) VALUES
(2, 6, 'luke', 'exaple@example.com', 'Awesoe', 'Approved', '2020-09-04'),
(4, 1, 'diaz', 'exaple@example.com', 'this post is awesome', 'Approved', '2020-09-04'),
(5, 2, 'james', 'exaple@example.com', 'waiting for more', 'Approved', '2020-09-04'),
(6, 2, 'james', 'exaple@example.com', 'waiting for more', 'Approved', '2020-09-04'),
(7, 1, 'anonymous ', 'exaple@example.com', 'this wll work now', 'Approved', '2020-09-04'),
(8, 2, 'luke', 'exaple@example.com', 'nice', 'Approved', '2020-09-07'),
(11, 7, 'hannah', 'exaple@example.com', 'first reaction', 'unapproved', '2020-09-07'),
(12, 7, 'hannah', 'exaple@example.com', 'second reaction', 'unapproved', '2020-09-07');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_category_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` int(11) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`) VALUES
(1, 1, 'welcome to my first php site and progressing    ', 'mona', '2020-09-07', '1.jpg', '                                    trust me, you will love the interface\r\n\r\n                              ', 'Mona,php,programming', 0, 'published'),
(2, 2, 'the end of the new begining  ', 'mona', '2020-09-07', '', '                        the beginning start with an end, until u decide to start there is no beginning                     ', 'forge, furro,life', 2, 'published'),
(6, 2, 'the game        ', 'mona', '2020-09-08', 'image_2.jpg', '                                                                                                                                                                                    a new way                                                                                                                                                       ', 'deployed', 4, 'published                 '),
(7, 7, 'Awake  now', 'josh', '2020-09-08', 'image_2.jpg', '                                                           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.                                                                      ', 'living', 2, 'published      ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `randSalt` varchar(255) NOT NULL DEFAULT '$2y10$iusesomecrazystrings22'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_image`, `user_role`, `randSalt`) VALUES
(2, 'peterson', 'peter123', 'william', 'petersons', 'peterson@gmail.com', '', 'Admin', ''),
(3, 'sam', 'samuel123', 'samuel', 'adejoh', 'samuel@gmail.co', '', 'Admin', ''),
(5, 'Mona', 'Adejoh382@', 'Enemona', 'Adejoh', 'Adejoh382@gmail.com', '', 'Subscriber', ''),
(7, 'angel', 'angel', 'samuel', 'john', 'angel@example.com', '', 'Subscriber', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
