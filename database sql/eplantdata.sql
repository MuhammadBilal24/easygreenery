-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2023 at 01:51 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eplantdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs_table`
--

CREATE TABLE IF NOT EXISTS `blogs_table` (
`id` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `img` varchar(255) NOT NULL,
  `reviews` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs_table`
--

INSERT INTO `blogs_table` (`id`, `datetime`, `img`, `reviews`, `description`) VALUES
(2, '2022-10-14 00:00:00', 'nurserylive-g-neem-tree-azadirachta-indica-plant_600x6002.jpg', 'Neeem Trees is So benificial ', 'strong by giving her a feed with liquid fertilizer once per month in spring and summer.'),
(3, '2022-10-15 00:00:00', 'nurserylive-g-neem-tree-azadirachta-indica-plant_600x6003.jpg', 'Neeem Trees is So benificial ', 'Neeem Tree Perfect Age ');

-- --------------------------------------------------------

--
-- Table structure for table `city_table`
--

CREATE TABLE IF NOT EXISTS `city_table` (
`id` int(11) NOT NULL,
  `cityname` varchar(55) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city_table`
--

INSERT INTO `city_table` (`id`, `cityname`) VALUES
(1, 'Sukkur Sindh'),
(2, 'Hyderabad Sindh'),
(3, 'Karachi, Sindh Pakistan'),
(4, 'Saddar, Karachi '),
(5, 'Rahim yar Khan');

-- --------------------------------------------------------

--
-- Table structure for table `customer_comments`
--

CREATE TABLE IF NOT EXISTS `customer_comments` (
`id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `comment` text NOT NULL,
  `datetime` datetime DEFAULT CURRENT_TIMESTAMP,
  `reply` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_comments`
--

INSERT INTO `customer_comments` (`id`, `name`, `email`, `comment`, `datetime`, `reply`) VALUES
(3, 'Hussain Niyazi', 'Hussain@gmail.com', 'Your Plate form takes too time, So Be fast to delivery. ', NULL, 'Thank You for Comment Us, Working on your task.'),
(6, 'syed Mossa', 'moosa@gmail.com', 'you have to cover Punjab Province also.', '2022-10-29 04:05:12', 'Yes, our team is now working on Punjab Province also.'),
(7, 'Samad', 'samdshaikh161@gmail.com', 'hey, your website is slow. men', '2022-10-29 04:07:47', 'Thank You for Comment Us, Working on your task.'),
(8, 'Hussain Niyazi', 'raza@gmail.com', 'where is your office', '2022-10-29 08:36:21', 'Thanks for Comment Us, Working on your task.'),
(9, 'Muhammad Bilal', 'bilal@gmail.com', 'heelo ', '2023-03-01 10:25:25', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer_contacts`
--

CREATE TABLE IF NOT EXISTS `customer_contacts` (
`id` int(11) NOT NULL,
  `customer_name` varchar(55) NOT NULL,
  `customer_email` varchar(55) NOT NULL,
  `customer_message` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_contacts`
--

INSERT INTO `customer_contacts` (`id`, `customer_name`, `customer_email`, `customer_message`) VALUES
(1, 'Wajid', 'wajid@gmail.com', 'Try again, And make it simpiler'),
(2, 'bilal', 'bilal@gmail.com', 'Bhai try to best.'),
(3, 'Wajid', 'wajid@gmail.com', 'yes? need a guide about garden.'),
(4, 'Hussain Khan', 'hussain56@gmail.com', 'you have to update new products'),
(5, 'dr asma', 'asma322@ggmail.com', 'heeloow there'),
(6, 'Hassan', 'hassan@gmail.com', 'hellow'),
(7, 'Muhammad Sher', 'Sher@gmail.com', 'Kindly Check my Order.');

-- --------------------------------------------------------

--
-- Table structure for table `customize_table`
--

CREATE TABLE IF NOT EXISTS `customize_table` (
`id` int(11) NOT NULL,
  `web_name` varchar(55) NOT NULL,
  `address` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `link` varchar(55) NOT NULL,
  `number` varchar(55) NOT NULL,
  `about` varchar(1000) NOT NULL,
  `ph11` varchar(55) NOT NULL,
  `ph12` varchar(55) NOT NULL,
  `ph13` varchar(55) NOT NULL,
  `ph21` varchar(55) NOT NULL,
  `ph22` varchar(55) NOT NULL,
  `ph23` varchar(55) NOT NULL,
  `ph31` varchar(55) NOT NULL,
  `ph32` varchar(55) NOT NULL,
  `ph33` varchar(55) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customize_table`
--

INSERT INTO `customize_table` (`id`, `web_name`, `address`, `email`, `link`, `number`, `about`, `ph11`, `ph12`, `ph13`, `ph21`, `ph22`, `ph23`, `ph31`, `ph32`, `ph33`) VALUES
(1, 'Easy Green Pakistan ', 'Sukkur,Sindh,Pakistan', 'Freshplantpakistan@gmail.com', 'Freshplantpak.com', '021-2200989', 'Plants should be fun. Our mission is to make the nation greener and make gardening easy for everyone. We’re here to demystify plants. Each plant comes with easy to follow care instructions and our friendly plant doctors are on hand to help if anything goes wrong.', 'Easy Greeen Pakistan ', 'E-Commerce Store', 'The World Of Plants', 'Grow Plant For Better', 'Life', 'Cleaner, Greener, Together', 'We Love Helping You To', 'Safe The Pakistan', 'Plant A New Tree');

-- --------------------------------------------------------

--
-- Table structure for table `notepad_table`
--

CREATE TABLE IF NOT EXISTS `notepad_table` (
`id` int(11) NOT NULL,
  `notepaddata` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notepad_table`
--

INSERT INTO `notepad_table` (`id`, `notepaddata`) VALUES
(1, 'seeds page'),
(2, 'fertilizer page'),
(3, 'blog page : where posts all revies and commnets'),
(4, 'latests plants on frontend');

-- --------------------------------------------------------

--
-- Table structure for table `nursery_table`
--

CREATE TABLE IF NOT EXISTS `nursery_table` (
`id` int(11) NOT NULL,
  `nursery_name` varchar(55) NOT NULL,
  `address` varchar(55) NOT NULL,
  `city` varchar(55) NOT NULL,
  `contact` varchar(55) NOT NULL,
  `img` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nursery_table`
--

INSERT INTO `nursery_table` (`id`, `nursery_name`, `address`, `city`, `contact`, `img`) VALUES
(1, 'Hamdard Greenry', 'Near Labe Mehran, Bandar Road Sukkur', 'Hyderabad Sindh', '0311-8904531', '352498-national-nursery-portaljpg-gaon-connection-news.jpg'),
(2, 'Al-Ryaz Plants Nursery', 'Street 7 Opposite Eye Hospital, Saddar Karachi  ', 'Karachi, Sindh Pakistan', '021-7709922', 'c38dd23edf6554169bc5f3d867484bf2.jpg'),
(3, 'Sindh Plantation Service', 'Sector 5, Latifabad, Hyderabad', 'Hyderabad Sindh', '0300-8204531', 'gazebo-tallahassee-nurseries-plants.jpg'),
(4, 'Muslim Green Nursery   ', 'City Point Sukkur', 'Sukkur Sindh', '071-5622389', 'pooja-nursery-gurgaon.jpg'),
(5, 'Shershah Nursery', 'Waah Road Ryk', 'Rahim yar Khan', '03083258872', 'download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order_info`
--

CREATE TABLE IF NOT EXISTS `order_info` (
`id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `lname` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `phone` int(55) NOT NULL,
  `city` varchar(55) NOT NULL,
  `address` varchar(55) NOT NULL,
  `productid` varchar(55) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_info`
--

INSERT INTO `order_info` (`id`, `name`, `lname`, `email`, `phone`, `city`, `address`, `productid`) VALUES
(31, 'Muhammad Bilal', 'Shaikh', 'bilal@gmail.com', 2147483647, 'Sukkur', 'Near Labe Mehran, Bandar Road Sukkur', '12,2,4d'),
(32, 'Muhammad Bilal', '', 'admin@gmail.com', 6787676, 'Karachi', 'Near Labe Mehran, Bandar Road Sukkur', '');

-- --------------------------------------------------------

--
-- Table structure for table `plants`
--

CREATE TABLE IF NOT EXISTS `plants` (
`id` int(11) NOT NULL,
  `plant` varchar(55) NOT NULL,
  `type` int(11) NOT NULL,
  `nursery` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` varchar(55) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plants`
--

INSERT INTO `plants` (`id`, `plant`, `type`, `nursery`, `description`, `price`, `img`) VALUES
(5, 'TomatoSeeds', 2, 2, 'Tomato Approx.20 Seeds', '600', 'tomato-roma-vf-384-0-250123112049712.jpg'),
(6, 'CARROT ATILLIO ', 2, 4, 'CARROT ATILLIO F1', '6400', 'CARROT_F1_ATILLIO_VCA418.jpg'),
(7, 'engro urea', 3, 4, 'engro urea', '2323', 'Engro_Urea.png'),
(8, 'Neem Tree', 1, 1, 'Neem Tree Fresh', '533', 'nurserylive-g-neem-tree-azadirachta-indica-plant_600x60031.jpg'),
(9, 'kunda', 1, 2, 'Kunda Freshly', '234', 'nurserylive-g-kunda-downy-jasmine-plant_600x6001.jpg'),
(11, 'Ikola', 1, 1, 'freshed', '20000', 'chamaerops-humilis-a164e511.jpg'),
(12, 'Amrood Or Guvawa', 1, 2, 'It is one of the Best plant', '345', 'download1.jpg'),
(13, 'Jade Green', 1, 1, 'Jade plants are Household', '560', 'beautiful-jade-plant.jpg'),
(14, 'Fragrant', 1, 2, 'CATEGORIES: FRAGRANT, PLANTS', '500', 'Brugmansia-Cherub-Pink-Angel_s-Trumpet-1-700x700.jpg'),
(15, 'Aloe Vera', 1, 2, 'Aloe vera is a Beneficial', '340', 'Aloe-Vera.jpg'),
(16, 'Mango Seed', 2, 3, 'The splayed husk looks a bit ', '320', 'mango-seed-4.jpg'),
(17, 'Water Melon Seed', 2, 4, 'All you need watermelon seeds ', '200', 'images.jpg'),
(18, 'Pumpkin Seeds', 2, 5, 'Effective Seeds', '120', 'images_(1).jpg'),
(19, 'Organic Fertilizer', 3, 4, 'nuances of organic fertilizers', '150', 'Best-Organic-Fertilizers-1200x667.jpg'),
(20, 'Jaffers', 3, 2, 'Jaffer Agro Services (Private) ', '550', 'orgsize_2Fertilizer-550x510-revised_copy.png'),
(21, 'Organic Based', 3, 2, 'All organic-based fertilizers', '443', '09e8ce914e33431b8524d79db4a3ea18.jpg'),
(22, 'Grow Plant fertilizer', 3, 2, 'Add soil to increase nutrient levels.', '250', 'explaining-plant-food-and-fertilizers-1622012652-1622012824_n.jpg'),
(23, 'Psychotria elata', 1, 3, 'etc', '600', 'Brugmansia-Cherub-Pink-Angel_s-Trumpet-1-700x7001.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `planttype`
--

CREATE TABLE IF NOT EXISTS `planttype` (
`id` int(11) NOT NULL,
  `type` varchar(55) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `planttype`
--

INSERT INTO `planttype` (`id`, `type`) VALUES
(1, 'Plant'),
(2, 'Seed'),
(3, 'Fertilizer');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE IF NOT EXISTS `user_table` (
`id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `usertype` varchar(55) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`id`, `name`, `email`, `password`, `usertype`) VALUES
(1, 'Muhammad Bilal', 'bilal@gmail.com', '123', 'admin'),
(2, 'User1', 'n1user@gmail.com', '123', 'user'),
(3, 'bilal', 'shaikh@gmail.com', '123', ''),
(4, 'bilal Khan', 'shaikh@gmail.com', '1234', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs_table`
--
ALTER TABLE `blogs_table`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city_table`
--
ALTER TABLE `city_table`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_comments`
--
ALTER TABLE `customer_comments`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_contacts`
--
ALTER TABLE `customer_contacts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customize_table`
--
ALTER TABLE `customize_table`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notepad_table`
--
ALTER TABLE `notepad_table`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nursery_table`
--
ALTER TABLE `nursery_table`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_info`
--
ALTER TABLE `order_info`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plants`
--
ALTER TABLE `plants`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `planttype`
--
ALTER TABLE `planttype`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs_table`
--
ALTER TABLE `blogs_table`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `city_table`
--
ALTER TABLE `city_table`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `customer_comments`
--
ALTER TABLE `customer_comments`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `customer_contacts`
--
ALTER TABLE `customer_contacts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `customize_table`
--
ALTER TABLE `customize_table`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `notepad_table`
--
ALTER TABLE `notepad_table`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `nursery_table`
--
ALTER TABLE `nursery_table`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `order_info`
--
ALTER TABLE `order_info`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `plants`
--
ALTER TABLE `plants`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `planttype`
--
ALTER TABLE `planttype`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
