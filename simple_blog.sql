-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2020 at 04:27 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simple_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(10) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Su Myat', 'sumyat@gmail.com', '30bLPLKIxDxoc', '2020-10-10 06:10:52', '2020-10-10 06:10:52'),
(2, 'nyanlynnhtut', 'nyanlynnhtut@gmail.com', '30bLPLKIxDxoc', '2020-10-10 06:10:14', '2020-10-10 06:10:14'),
(3, 'Hlote Hlote', 'hlote@gmail.com', '30bLPLKIxDxoc', '2020-10-10 13:10:20', '2020-10-10 13:10:20'),
(4, 'Toe Tet', 'toetet@gmail.com', '30bLPLKIxDxoc', '2020-10-13 17:10:23', '2020-10-13 17:10:23');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT '1',
  `subject` int(2) NOT NULL DEFAULT '1',
  `writer` varchar(225) NOT NULL,
  `content` text NOT NULL,
  `imglink` varchar(225) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `type`, `subject`, `writer`, `content`, `imglink`, `created_at`) VALUES
(1, ' Basic (Free)', 1, 1, 'Nyan Lynn Htut', 'Similar to Human Interface Languages, Computer Programming Languages are also made of several elements. We will take you through the basics of those elements and make you comfortable to use them in various programming languages. These basic elements include ? Programming Environment. Basic Syntax.					\r\n				', 'programmingbasic.jpg', '2020-07-23 18:07:20'),
(2, 'Python (Paid)', 2, 2, 'Swam Thu Marn', 'The core of extensible programming is defining functions. Python allows mandatory and optional arguments, keyword arguments, and even arbitrary argument lists. More about defining functions in Python', '1602603038_python.jpg', '2020-07-23 18:07:02'),
(3, 'C++ (Paid)', 2, 2, 'Jiraiya', 'Tutorials Examples References Compiler. C++ is a powerful general-purpose programming language. It can be used to develop operating systems, browsers, games, and so on. C++ supports different ways of programming like procedural, object-oriented, functional, and so on. This makes C++ powerful as well as flexible.			\r\n				', '1602603136_c++.jpg', '2020-07-23 19:07:15'),
(109, 'Java (Paid)', 2, 2, 'Lwin Htet Thu', 'Java is a popular programming language, created in 1995.\r\n\r\nIt is owned by Oracle, and more than 3 billion devices run Java.\r\n\r\nIt is used for:\r\n\r\nMobile applications (specially Android apps)\r\nDesktop applications\r\nWeb applications\r\nWeb servers and application servers\r\nGames\r\nDatabase connection\r\nAnd much, much more!			', '1602346252_java.png1602346252', '2020-10-10 18:10:52'),
(110, 'HTML (Free)', 1, 1, 'Nyan Lynn Htut', 'HTML was first created by Tim Berners-Lee, Robert Cailliau, and others starting in 1989. It stands for Hyper Text Markup Language.\r\n\r\nHypertext means that the document contains links that allow the reader to jump to other places in the document or to another document altogether. The latest version is known as HTML5.', '1602346627_html.jpg1602346627', '2020-10-10 18:10:07'),
(111, 'Window XP (Paid)', 2, 1, 'Nyan Lynn Htut', 'Windows XP is an operating system produced by Microsoft as part of the Windows NT family of operating systems. It was the successor to both Windows 2000 for professional users and Windows Me for home users. It was released to manufacturing on August 24, 2001, and broadly released for retail sale on October 25, 2001. ', '1602357215_windowsxp.jpg1602357215', '2020-10-10 21:10:35'),
(112, 'Css (Free)', 1, 1, 'Nyan Lynn Htut', 'Cascading Style Sheets is a style sheet language used for describing the presentation of a document written in a markup language such as HTML. CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript. 		\r\n				', '1602357528_css.jpg1602357528', '2020-10-10 21:10:48'),
(113, 'Machine Learning (Paid)', 2, 2, 'Toe Tet', 'Machine language is the only language a computer is capable of understanding. The exact machine language for a program or action can differ by operating system. The specific operating system dictates how a compiler writes a program or action into machine language.				\r\n				', '1602359453_machinelearning.png1602359453', '2020-10-10 21:10:53'),
(114, 'MS SQL (Free)', 1, 1, 'Nyan Lynn Htut', 'MS SQL Server is a relational database management system (RDBMS) developed by Microsoft. This product is built for the basic function of storing retrieving data as required by other applications. It can be run either on the same computer or on another across a network.', '1602603394_mssql.jpg1602603394', '2020-10-13 17:10:34'),
(115, 'MongoDB(Paid)', 2, 3, 'Swam Thu Marn', 'MongoDB is a cross-platform document-oriented database program. Classified as a NoSQL database program, MongoDB uses JSON-like documents with optional schemas. MongoDB is developed by MongoDB Inc. and licensed under the Server Side Public License.', '1602603818_mangodb.jpg', '2020-10-13 17:10:32'),
(116, 'CSS(Paid) ', 2, 1, 'Lwin Htet Thu', 'Cascading Style Sheets is a style sheet language used for describing the presentation of a document written in a markup language such as HTML. CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript.', '1602603999_css.jpg1602603999', '2020-10-13 17:10:39'),
(117, 'HTML5 (Paid)', 2, 1, 'toe tet', 'Hypertext Markup Language is the standard markup language for documents designed to be displayed in a web browser. It can be assisted by technologies such as Cascading Style Sheets and scripting languages such as JavaScript.', '1602604053_html.jpg1602604053', '2020-10-13 17:10:33'),
(118, 'Java Script (Free)', 1, 2, 'Nyan Lynn Htut', 'JavaScript, often abbreviated as JS, is a programming language that conforms to the ECMAScript specification. JavaScript is high-level, often just-in-time compiled, and multi-paradigm. It has curly-bracket syntax, dynamic typing, prototype-based object-orientation, and first-class functions.', '1602604311_java.png1602604311', '2020-10-13 17:10:51'),
(119, 'Ruby (Free)', 1, 2, 'Nyan Lynn Htut', 'Ruby is an interpreted, high-level, general-purpose programming language. It was designed and developed in the mid-1990s by Yukihiro \"Matz\" Matsumoto in Japan. Ruby is dynamically typed and uses garbage collection.', '1602604826_ruby.png1602604826', '2020-10-13 18:10:26'),
(120, 'Bootstrap (Free)', 1, 1, 'Lwin Htet Thu', 'Bootstrap is a free and open-source CSS framework directed at responsive, mobile-first front-end web development. It contains CSS- and JavaScript-based design templates for typography, forms, buttons, navigation, and other interface components.', '1602605336_boostrap.png1602605336', '2020-10-13 18:10:57'),
(121, 'jQuery (Free)', 1, 1, 'Toe Tet', 'jQuery is a JavaScript library designed to simplify HTML DOM tree traversal and manipulation, as well as event handling, CSS animation, and Ajax. It is free, open-source software using the permissive MIT License. As of May 2019, jQuery is used by 73% of the 10 million most popular websites.', '1602640949_jquery.png1602640949', '2020-10-14 04:10:29'),
(122, 'jQuery (Paid)', 2, 1, 'Nyan Lynn Htut', 'jQuery is a JavaScript library designed to simplify HTML DOM tree traversal and manipulation, as well as event handling, CSS animation, and Ajax. It is free, open-source software using the permissive MIT License. As of May 2019, jQuery is used by 73% of the 10 million most popular websites.', '1602640970_jquery.png1602640970', '2020-10-14 04:10:50'),
(123, 'Laravel (Paid)', 2, 2, 'Nyan Lynn Htut', 'Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the modelâ€“viewâ€“controller architectural pattern and based on Symfony', '1602641495_laravel.png1602641495', '2020-10-14 04:10:35'),
(124, 'MVC(Paid)', 2, 2, 'Lwin Htet Thu', 'MVC stands for Model, View, and Controller. MVC separates an application into three components - Model, View, and Controller. Model: Model represents the shape of the data. A class in C# is used to describe a model. Model objects store data retrieved from the database.', '1602641747_mvc.jpg1602641747', '2020-10-14 04:10:47'),
(125, 'MVC (Free)', 1, 2, 'Lwin Htet Thu', 'MVC stands for Model, View, and Controller. MVC separates an application into three components - Model, View, and Controller. Model: Model represents the shape of the data. A class in C# is used to describe a model. Model objects store data retrieved from the database.', '1602641773_mvc.jpg1602641773', '2020-10-14 04:10:13'),
(126, 'Drupal(Paid)', 2, 2, 'toe tet', 'Drupal is a free and open-source web content management framework written in PHP and distributed under the GNU General Public License. Drupal provides a back-end framework for at least 2.3% of all websites worldwide â€“ ranging from personal blogs to corporate, political, and government sites', '1602641889_drupal.jpg1602641889', '2020-10-14 04:10:09'),
(127, 'CSS-Intermediate(Free)', 1, 1, 'Lwin Htet Thu', 'Drupal is a free and open-source web content management framework written in PHP and distributed under the GNU General Public License. Drupal provides a back-end framework for at least 2.3% of all websites worldwide â€“ ranging from personal blogs to corporate, political, and government sites', '1602641995_css.jpg1602641995', '2020-10-14 04:10:55'),
(128, 'CSS-Advance(Free)', 1, 1, 'Nyan Lynn Htut', 'Drupal is a free and open-source web content management framework written in PHP and distributed under the GNU General Public License. Drupal provides a back-end framework for at least 2.3% of all websites worldwide â€“ ranging from personal blogs to corporate, political, and government sites', '1602642016_css.jpg1602642016', '2020-10-14 04:10:16'),
(129, 'MS SQL(Free)', 1, 3, 'Nyan Lynn Htut', 'Microsoft SQL Server is a relational database management system developed by Microsoft. As a database server, it is a software product with the primary function of storing and retrieving data as requested by other software applicationsâ€”which may run either on the same computer or on another computer across a network.', '1602642159_mssql.jpg1602642159', '2020-10-14 04:10:39'),
(130, 'Mango DB (Free)', 1, 3, 'Nyan Lynn Htut', 'Microsoft SQL Server is a relational database management system developed by Microsoft. As a database server, it is a software product with the primary function of storing and retrieving data as requested by other software applicationsâ€”which may run either on the same computer or on another computer across a network.', '1602642180_mangodb.jpg1602642180', '2020-10-14 04:10:00'),
(131, 'MS SQL-Intermediate (Free)', 1, 3, 'Nyan Lynn Htut', 'Microsoft SQL Server is a relational database management system developed by Microsoft. As a database server, it is a software product with the primary function of storing and retrieving data as requested by other software applicationsâ€”which may run either on the same computer or on another computer across a network.', '1602642213_mangodb.jpg1602642213', '2020-10-14 04:10:33'),
(132, 'Mango DB-Intermediate (Paid)', 1, 3, 'Swam Thu Marn', 'Microsoft SQL Server is a relational database management system developed by Microsoft. As a database server, it is a software product with the primary function of storing and retrieving data as requested by other software applicationsâ€”which may run either on the same computer or on another computer across a network.', '1602642244_mangodb.jpg1602642244', '2020-10-14 04:10:04'),
(133, 'Bootstrap-Intermeidate (Free)', 1, 1, 'Nyan Lynn Htut', 'Microsoft SQL Server is a relational database management system developed by Microsoft. As a database server, it is a software product with the primary function of storing and retrieving data as requested by other software applicationsâ€”which may run either on the same computer or on another computer across a network.', '1602642269_boostrap.png1602642269', '2020-10-14 04:10:29'),
(134, 'MVC-Intermediate(Paid)', 2, 2, 'Swam Thu Marn', 'Microsoft SQL Server is a relational database management system developed by Microsoft. As a database server, it is a software product with the primary function of storing and retrieving data as requested by other software applicationsâ€”which may run either on the same computer or on another computer across a network.', '1602642329_mvc.jpg1602642329', '2020-10-14 04:10:29'),
(135, 'Bootstrap-Pro(Free)', 1, 1, 'Swam Thu Marn', 'Microsoft SQL Server is a relational database management system developed by Microsoft. As a database server, it is a software product with the primary function of storing and retrieving data as requested by other software applicationsâ€”which may run either on the same computer or on another computer across a network.', '1602642415_boostrap.png1602642415', '2020-10-14 04:10:55'),
(136, 'Bootstrap-Nav (Free)', 1, 1, 'Jiraiya', 'Microsoft SQL Server is a relational database management system developed by Microsoft. As a database server, it is a software product with the primary function of storing and retrieving data as requested by other software applicationsâ€”which may run either on the same computer or on another computer across a network.', '1602642435_boostrap.png1602642435', '2020-10-14 04:10:15');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `name`) VALUES
(1, 'Frontend'),
(2, 'Backend'),
(3, 'Database'),
(4, 'IT Knowledge');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
