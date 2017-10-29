-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 29, 2017 at 08:56 AM
-- Server version: 5.5.40-36.1-log
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thedia4h_cichat`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(10) NOT NULL,
  `from_id` int(10) NOT NULL,
  `to_id` int(10) NOT NULL,
  `sent_at` varchar(15) NOT NULL,
  `seen_at` varchar(15) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `from_id`, `to_id`, `sent_at`, `seen_at`, `message`) VALUES
(1, 1, 2, '', '1456176285', 'Hi Ritu'),
(2, 2, 1, '', '1456176285', 'Hi dheeraj'),
(3, 1, 2, '', '1456176285', 'Hi how are you'),
(4, 2, 1, '', '1456176285', 'M good, how are you'),
(5, 2, 1, '1453829597', '1456176285', ''),
(6, 2, 1, '1453829658', '1456176285', '<3'),
(7, 2, 1, '1453829666', '1456176285', 'what'),
(8, 1, 2, '1453831172', '1456176285', 'kaisi h tu'),
(9, 1, 2, '1453831187', '1456176285', 'did you get my message'),
(10, 2, 1, '1453831241', '1456176285', 'yes i am'),
(11, 2, 1, '1453831280', '1456176285', 'How much project is done?'),
(12, 1, 2, '1453832566', '1456176285', 'Its almost done yar... just login process left'),
(13, 2, 1, '1453835027', '1456176285', 'Login done?'),
(14, 3, 1, '1453835743', '1469461480', 'hi'),
(15, 1, 3, '1453836258', '1469461480', 'hi'),
(16, 3, 1, '1453836315', '1469461480', 'how are you'),
(17, 1, 3, '1453836419', '1469461480', 'yes did great'),
(18, 4, 1, '1453876627', '1456176274', 'ting tng'),
(19, 1, 4, '1453876634', '1456176274', 'hello'),
(20, 4, 1, '1453876644', '1456176274', ''),
(21, 1, 4, '1453876653', '1456176274', '..... working'),
(22, 4, 1, '1453876822', '1456176274', 'aa gaya'),
(23, 1, 4, '1453876831', '1456176274', 'yes'),
(24, 1, 3, '1456170857', '1469461480', 'hey'),
(25, 1, 5, '1456171295', '1469461408', 'kutte'),
(26, 5, 1, '1456171314', '1469461408', 'Hi'),
(27, 1, 5, '1456171324', '1469461408', ':D'),
(28, 1, 5, '1456171330', '1469461408', 'it worked'),
(29, 5, 1, '1456171334', '1469461408', '????????????????'),
(30, 5, 1, '1456171346', '1469461408', 'Emogies mhinjaaati'),
(31, 5, 1, '1456171358', '1469461408', 'Mst hai bhai'),
(32, 1, 5, '1456171364', '1469461408', 'abe kuch ni... ab ise main jsson and proper ajax se krunga'),
(33, 5, 1, '1456171372', '1469461408', 'Har baaar page refresh krwaa rha hai'),
(34, 1, 5, '1456171374', '1469461408', 'nai abhi nai'),
(35, 1, 5, '1456171388', '1469461408', 'han abe ek pakistani ladki ne request ki ti'),
(36, 1, 5, '1456171399', '1469461408', 'uske lie 1 rat me baith k banaya tha.. 3 hr me'),
(37, 5, 1, '1456171401', '1469461408', 'Kb'),
(38, 1, 5, '1456171413', '1469461408', '26 jan ko'),
(39, 5, 1, '1456171423', '1469461408', 'K'),
(40, 5, 1, '1456171427', '1469461408', 'Hhehhehehe'),
(41, 1, 5, '1456171446', '1469461408', ':D ise seriously sai b kr skte h'),
(42, 1, 5, '1456171462', '1469461408', 'emojis and all'),
(43, 5, 1, '1456171476', '1469461408', 'Hmmm'),
(44, 1, 5, '1456171516', '1469461408', 'maine ye colg time me kia hua tha..'),
(45, 1, 5, '1456171528', '1469461408', 'image send krne ka option b tha'),
(46, 1, 5, '1456171543', '1469461408', 'bt pakistan k lie inna dimag ni lagana chahta tha m bs'),
(47, 5, 1, '1456171546', '1469461408', 'K'),
(48, 1, 5, '1456171568', '1469461408', 'ek acha sa UI dekh lenge uspe implement kr denge ise'),
(49, 5, 1, '1456171609', '1469461408', 'K'),
(50, 1, 5, '1456171656', '1469461408', 'phn pe chutiya sa dikh rha'),
(51, 1, 6, '1456176356', '1469461468', 'lol'),
(52, 1, 6, '1456176358', '1469461468', 'agya tu'),
(53, 6, 1, '1456176368', '1469461468', 'heheh'),
(54, 1, 6, '1456176372', '1469461468', ':D'),
(55, 6, 1, '1456176378', '1469461468', 'kisme banaya ye?'),
(56, 1, 6, '1456176381', '1469461468', 'bada e basic sa h'),
(57, 1, 6, '1456176384', '1469461468', 'codeigniter me'),
(58, 1, 6, '1456176392', '1469461468', 'ek pakistani ladki mili college ki'),
(59, 6, 1, '1456176396', '1469461468', 'ye realtime kaiseh?'),
(60, 1, 6, '1456176399', '1469461468', 'kehti pls kal submit karana h '),
(61, 1, 6, '1456176423', '1469461468', 'ye chat jahan show ho ri h wo div refresh ho rha h..'),
(62, 1, 6, '1456176439', '1469461468', '3 4 sec me ek bar... :p'),
(63, 1, 6, '1456176474', '1469461468', 'setInterval(function(){$(\'#messages\').load(\'http://thedijje.com/messenger/message/ajax_message/6\'); 	var wtf    = $(\'#messages\');   var height = wtf[0].scrollHeight;   wtf.scrollTop(height); }, 2000);'),
(64, 6, 1, '1456176477', '1469461468', 'yaha.. i can see in network console'),
(65, 1, 6, '1456176501', '1469461468', 'haha'),
(66, 6, 1, '1456176502', '1469461468', 'C bana diya use :P'),
(67, 1, 6, '1456176505', '1469461468', 'smartboy'),
(68, 1, 6, '1456176517', '1469461468', 'lol'),
(69, 1, 6, '1456176528', '1469461468', '2hr me kya nodejs sikhta'),
(70, 6, 1, '1456176530', '1469461468', ':D'),
(71, 1, 6, '1456176541', '1469461468', 'ehsan kr dia pakistan pe ... '),
(72, 6, 1, '1456176578', '1469461468', 'aisi ladkiya hame nhi milti :D'),
(73, 1, 6, '1456176588', '1469461468', 'hahaha'),
(74, 1, 6, '1456176602', '1469461468', 'usne pata ni setup b kia ya nai'),
(75, 1, 6, '1456176609', '1469461468', 'keh ri mujhe smjh ni arha'),
(76, 6, 1, '1456176614', '1469461468', 'yar dhang ka product banate h '),
(77, 6, 1, '1456176631', '1469461468', 'with low costing'),
(78, 1, 6, '1456176668', '1469461468', 'design acha rakh.. cost acha rakh... make people think.. they are prevllged using this product'),
(79, 1, 6, '1456176675', '1469461468', 'design acha rakh.. cost acha rakh... make people think.. they are prevllged using this product'),
(80, 6, 1, '1456176705', '1469461468', 'hmm'),
(81, 6, 1, '1456176710', '1469461468', ' dekhte h'),
(82, 6, 1, '1456176712', '1469461468', ' dekhte h'),
(83, 6, 1, '1456176713', '1469461468', ' dekhte h'),
(84, 6, 1, '1456176713', '1469461468', ' dekhte h'),
(85, 6, 1, '1456176713', '1469461468', ' dekhte h'),
(86, 6, 1, '1456176713', '1469461468', ' dekhte h'),
(87, 6, 1, '1456176713', '1469461468', ' dekhte h'),
(88, 6, 1, '1456176714', '1469461468', ' dekhte h'),
(89, 6, 1, '1456176714', '1469461468', ' dekhte h'),
(90, 6, 1, '1456176714', '1469461468', ' dekhte h'),
(91, 6, 1, '1456176714', '1469461468', ' dekhte h'),
(92, 6, 1, '1456176714', '1469461468', ' dekhte h'),
(93, 6, 1, '1456176714', '1469461468', ' dekhte h'),
(94, 6, 1, '1456176715', '1469461468', ' dekhte h'),
(95, 6, 1, '1456176722', '1469461468', 'bug bug :D ;D '),
(96, 1, 6, '1456176726', '1469461468', 'itna mt dikha bhai'),
(97, 1, 6, '1456176731', '1469461468', 'testing ni kia h'),
(98, 1, 6, '1456176737', '1469461468', 'form me kai error h'),
(99, 1, 6, '1456176738', '1469461468', ':D'),
(100, 6, 1, '1456176745', '1469461468', ':P'),
(101, 1, 6, '1456176760', '1469461468', '>\'o\'<'),
(102, 6, 1, '1456176770', '1469461468', 'ab chalo good night '),
(103, 1, 6, '1456176772', '1469461468', 'bug to milega e'),
(104, 6, 1, '1456176777', '1469461468', 'kal bat karenge.. same time'),
(105, 1, 6, '1456176779', '1469461468', 'good night'),
(106, 1, 6, '1456176782', '1469461468', 'sweet dream'),
(107, 1, 6, '1456176788', '1469461468', 'discuss krte h kuch'),
(108, 1, 6, '1456176797', '1469461468', '3 4 chizen h mind me'),
(109, 6, 1, '1456176800', '1469461468', 'u too.'),
(110, 1, 6, '1456468306', '1469461468', 'Aur kutte'),
(111, 1, 5, '1469461402', '1469461408', 'is that working'),
(112, 1, 5, '1469461407', '1469461408', 'khj');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `last_active` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `last_active`) VALUES
(1, 'Dheeraj', 'thedijje.ic@gmail.com', '601f1889667efaebb33b8c12572835da3f027f78', ''),
(3, 'Robert', 'robert@gmail.com', '601f1889667efaebb33b8c12572835da3f027f78', ''),
(4, 'Shyam Jha', 's.shyam.sj@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', ''),
(5, 'UTKARSH JAIN', 'utkarshjain0078@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', ''),
(6, 'Manish Prajapati', 'manishprajapat41@gmail.com', '87320884d70282d2dbac31ae263af76b653c7059', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
