-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 23, 2020 at 12:10 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvcblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Hello World!', 'The Tech Fossil Is a Website design and Development company based in Delhi, India. We begin Our Journey in 2019. we have only one AIM in our mind is to provide all Website development Services to Our customer. he have a 7 years freelancing background and also our collaborations with start-ups we reach a professional level where we finally decided to start our own business venture and reach more People who we can provide our services and we love to work with other business minds and challenge our self with working at something new so we got more opportunities to learn and whether as a developers or as a business.<br />\r\n<br />\r\nThe Tech Fossil motivate to create an excellence solution for our customer. We believes that every project must create with great design and functionality so it eases to your needs. We love continuously learning from our work family(our clients) so we are capable to develop more advance and cutting-edge Project for you.', 1, '2020-01-23 12:08:43', '2020-01-23 12:08:43'),
(2, 'My Schedual App', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec volutpat nisi sit amet commodo tempus. Nunc in ligula et libero porttitor tincidunt ac non nunc. Praesent at lorem at urna elementum sagittis. Duis id tortor in ligula pharetra interdum. Nulla ut elit in neque venenatis commodo. Proin maximus hendrerit diam ac blandit. Ut quis volutpat nulla. Suspendisse orci quam, laoreet non dolor a, pretium iaculis ante. Praesent quis libero ante. Etiam eu rhoncus orci. Pellentesque ultrices interdum diam, sit amet tristique erat maximus eget. Ut hendrerit sem pharetra nisl finibus, ac tempor magna tempor. Nulla efficitur libero id velit dictum elementum. Sed vitae odio convallis, aliquet orci at, venenatis eros. Duis pretium leo vel enim cursus lacinia. \r\n\r\n<br/>\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Donec volutpat nisi sit amet commodo tempus. Nunc in ligula et libero porttitor tincidunt ac non nunc. Praesent at lorem at urna elementum sagittis. Duis id tortor in ligula pharetra interdum. Nulla ut elit in neque venenatis commodo. Proin maximus hendrerit diam ac blandit. Ut quis volutpat nulla. Suspendisse orci quam, laoreet non dolor a, pretium iaculis ante. Praesent quis libero ante. Etiam eu rhoncus orci. Pellentesque ultrices interdum diam, sit amet tristique erat maximus eget. Ut hendrerit sem pharetra nisl finibus, ac tempor magna tempor. Nulla efficitur libero id velit dictum elementum. Sed vitae odio convallis, aliquet orci at, venenatis eros. Duis pretium leo vel enim cursus lacinia. ', 1, '2020-01-23 11:08:35', '2020-01-23 10:58:01'),
(3, 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 2, '2020-01-23 10:58:51', '2020-01-23 10:58:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Manish Batra', 'manishbatra004', 'manishbatra004@gmail.com', '$2y$10$51vq1YKgWYwWRcFHOT7gPuwDM1hZAJbDQ7QqPvBpaL1OOKt4qe5.u', '2020-01-23 07:08:03', '2020-01-23 07:08:03'),
(2, 'Harsh Batra', 'harshbatra28', 'harshbatra28@gmail.com', '$2y$10$QIcM.kIup7MFsI4M44UGG.Ixs7sbChKrFc8ksMy0XiOP6xo.7vaY.', '2020-01-23 07:22:09', '2020-01-23 07:22:09');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
