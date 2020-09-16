-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2018 at 01:35 PM
-- Server version: 5.6.37
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_users`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Sports'),
(2, 'Entertainment'),
(3, 'Politics'),
(5, 'Business'),
(8, 'adfad');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `published_date` date NOT NULL,
  `author` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `published_date`, `author`, `image`, `category_id`) VALUES
(1, 'Oli appointed as 41st Prime Minister of the country', 'Kathmandu : President Bidya Devi Bhandari has appointed CPN (UML) Chairman KP Sharma Oli to the post of the Prime Minister. \r\n\r\n\r\nPresident Bhandari appointed Oli as the Prime Minister under the Article 76 (2) of the Constitution after the left alliance submitted a letter of claim for the appointment of CPN (UML) Chair KP Sharma Oli a new Prime Minister of Nepal to the President this morning. \r\n\r\n\r\nThe new government has been formed after the Election Commission submitted final results of election to the House of Representatives held on November 26 and December 7, 2017, to the President on Wednesday. \r\n\r\n\r\nThe newly appointed Prime Minister Oli would take his oath of office and secrecy at Sheetal Niwas at 4:00 pm today, said President''s Chief Personal Secretary, Bheshraj Adhikari. ', '2018-02-27', 'Anwar Ali', 'abcd.jpg', 3),
(2, 'Priyanka sizzle in red hot dress', 'Priyanka Karki. Karki made her acting debut in a comedy sitcom called Gharbeti Ba on Kantipur Television, a Nepali Version of the American Sitcom Three’s Company. She made debut in Nepali movie industry from the movie "Mero Best Friend''.\r\n\r\nThe movie was directed by Prasanna poudel. She is one of the actresses who gained much popularity in small duration of time. Her lifestyle and dress among others things have been news for media time and again. The actress has become talk of the town following her relationship with actor Ayushman Deshraj Shrestha. Shrestha is the son of famous banker Raveena Deshraj Shrestha. The couple is working together in the upcoming movie ''Kath Kathmandu''. Continues hit movies one after another have given a new height to the actress.', '2018-02-27', 'Anwar Ali', 'hhhh.png', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `description` text,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `username`, `password`, `gender`, `age`, `description`, `country`) VALUES
(1, 'Anwar Ali', 'admin', 'admin', 'Male', 30, 'Sample description goes here.', 'Nepal'),
(2, 'Suman Thapa', 'admin1', 'admin1', 'Female', 25, 'Sample description  goes here.', 'Nepal'),
(3, 'Shyam Thapa', 'admin2', 'admin2', 'Male', 21, 'Sample description', 'Nepal'),
(4, 'Jivan Shrestha', 'admin3', 'admin3', 'Male', 35, 'Sample Description', 'Nepal'),
(6, 'Shreya Thapa', 'admin4', 'admin4', 'female', 25, 'She is a girl', 'Nepal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
