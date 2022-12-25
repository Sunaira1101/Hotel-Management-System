-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2022 at 06:19 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `ID` int(11) NOT NULL,
  `admin_name` varchar(200) DEFAULT NULL,
  `admin_pass` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`ID`, `admin_name`, `admin_pass`) VALUES
(1, 'sunaira', 20),
(2, 'farasha', 21);

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `C_ID` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `gmap` varchar(200) NOT NULL,
  `phone1` varchar(100) NOT NULL,
  `phone2` varchar(100) NOT NULL,
  `phone3` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fb` varchar(200) NOT NULL,
  `insta` varchar(200) NOT NULL,
  `tw` varchar(200) NOT NULL,
  `iframe` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`C_ID`, `address`, `gmap`, `phone1`, `phone2`, `phone3`, `email`, `fb`, `insta`, `tw`, `iframe`) VALUES
(1, 'Minto Road, GPO Box 504, Dhaka, 1000, Bangladesh', 'https://goo.gl/maps/8JLprGomE6RtwouV7', '  215677981546', '  818577982566', '  418577983566', ' fhsunaira@gmail.com', 'https://www.facebook.com/The.Westin.Dhaka/', 'https://www.instagram.com/westindhaka/', 'https://twitter.com/thewestindhaka?lang=en', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.7114344606284!2d90.4147175!3d23.793288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7a72f17bb83:0x57188ff62fd95026!2sThe Westin Dhaka!5e0!3m2!1sen!2sbd!4v1670571184390!5m2!1sen!2sbd');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `facilities_ID` int(11) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`facilities_ID`, `icon`, `name`, `description`) VALUES
(6, 'IMG_63153.jpg', 'Wifi', 'We provide free WiFi to make your stay more comfortable. No need to go through all the trouble to access roaming data and enjoy as long as you are here!'),
(9, 'IMG_17624.jpg', 'Spa', 'It offers luxurious spa facilities, signature spa treatments (massages, facials and body treatments) specific to that spa only.'),
(12, 'IMG_55499.png', 'Gym', 'Equipment such as yoga mats, hand weights and resistance bands are small but convenient additions to a guest’s stay. Have a good gym session!'),
(13, 'IMG_42911.png', 'Free Parking', 'The parking fee overnight and utilizing our shuttle to/from the airport is free which is much more cost effective than anything close to the airport.'),
(16, 'IMG_58018.png', 'Convenience Store', 'We have a 24 hour convenience store in our lobby, which allows you to buy stuffs from the hotel. '),
(17, 'IMG_96117.png', 'Restaurant', 'We provide you with the most delicious dishes from all over the world. Our breakfast buffet is well known for its variety, with food from different cultures.'),
(18, 'IMG_29670.png', 'Bar', 'Our bar keeps a variety of all kinds of alcoholic and non-alcoholic beverages, and you are sure to find something suitable to your taste.'),
(19, 'IMG_82507.png', 'Swimming Pool', 'While your stay with us, you are free to use our Swimming Pool to relax and cool yourself down.'),
(20, 'IMG_78545.png', 'Laundry', 'We also provide laundry services to make your stay more easier. No need to pack extra clothes, instead just use our washer and dryer and enjoy as long as you are here!');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `feature_ID` int(11) NOT NULL,
  `name` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`feature_ID`, `name`) VALUES
(1, 'television'),
(2, 'bedding'),
(4, 'computer'),
(5, 'balcony');

-- --------------------------------------------------------

--
-- Table structure for table `rating_review`
--

CREATE TABLE `rating_review` (
  `R_ID` int(11) NOT NULL,
  `date_made` date DEFAULT NULL,
  `review` varchar(225) DEFAULT NULL,
  `ratings` decimal(2,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `R_ID` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `area` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `adult` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `description` varchar(350) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `removed` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`R_ID`, `name`, `area`, `price`, `quantity`, `adult`, `children`, `description`, `status`, `removed`) VALUES
(1, 'Suite Room', 12, 12, 12, 12, 4, 'Wow', 1, 1),
(2, 'Suite Room', 16, 24000, 4, 4, 2, 'Luxurious Room', 1, 1),
(3, 'Suite Room', 12, 21, 12, 12, 21, 'Wow Good', 1, 1),
(4, 'Deluxe Room', 18, 16000, 10, 4, 2, 'Magnificent', 1, 1),
(5, 'Twin Room', 32, 10000, 12, 2, 1, 'Cute Room', 1, 1),
(6, 'Double Room', 250, 16000, 10, 3, 2, 'Luxurious Room', 1, 0),
(7, 'Deluxe Room', 300, 19000, 10, 4, 2, 'Magnificent atmosphere', 1, 0),
(8, 'Suite Room', 350, 24000, 6, 4, 4, 'Best vacation room', 1, 0),
(9, 'Single Room', 180, 10000, 30, 1, 1, 'This room is located on the top floor of the hotel and has hot / cold air conditioned, a furnished balcony with sun loungers with swimming pool or mountain views and free WI FI.', 1, 0),
(10, 'Super Deluxe Room', 350, 22000, 10, 3, 3, 'Super Deluxe rooms offer you a grand staying experience with grandiose design and premium amenities. These rooms are equipped with air-conditioning, television, wardrobe, In-room safe, mini-bar, tea-coffee maker and round the clock room service, and laundry service.', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `room_facilities`
--

CREATE TABLE `room_facilities` (
  `sr_no` int(11) NOT NULL,
  `room_ID` int(11) NOT NULL,
  `fac_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room_facilities`
--

INSERT INTO `room_facilities` (`sr_no`, `room_ID`, `fac_ID`) VALUES
(37, 6, 6),
(38, 7, 9),
(39, 8, 6),
(40, 8, 9),
(41, 9, 6),
(42, 10, 6),
(43, 10, 9);

-- --------------------------------------------------------

--
-- Table structure for table `room_features`
--

CREATE TABLE `room_features` (
  `sr_no` int(11) NOT NULL,
  `room_ID` int(11) NOT NULL,
  `features_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room_features`
--

INSERT INTO `room_features` (`sr_no`, `room_ID`, `features_ID`) VALUES
(51, 6, 2),
(52, 6, 4),
(53, 6, 5),
(54, 7, 1),
(55, 7, 2),
(56, 7, 5),
(57, 8, 1),
(58, 8, 2),
(59, 8, 4),
(60, 8, 5),
(61, 9, 1),
(62, 9, 2),
(63, 10, 1),
(64, 10, 2),
(65, 10, 4),
(66, 10, 5);

-- --------------------------------------------------------

--
-- Table structure for table `room_images`
--

CREATE TABLE `room_images` (
  `sr_no` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `thumb` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room_images`
--

INSERT INTO `room_images` (`sr_no`, `room_id`, `image`, `thumb`) VALUES
(3, 6, 'IMG_62421.jpg', 1),
(4, 6, 'IMG_25456.jpg', 0),
(5, 6, 'IMG_43114.jpg', 0),
(6, 7, 'IMG_80622.jpg', 1),
(7, 7, 'IMG_31927.jpg', 0),
(9, 8, 'IMG_53559.jpg', 1),
(10, 8, 'IMG_45874.jpg', 0),
(11, 9, 'IMG_37033.jpg', 0),
(12, 9, 'IMG_98485.jpg', 0),
(13, 9, 'IMG_93880.jpg', 1),
(14, 10, 'IMG_80582.jpg', 1),
(15, 10, 'IMG_84222.jpg', 0),
(16, 10, 'IMG_93393.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `S_ID` int(11) NOT NULL,
  `site_title` varchar(100) NOT NULL,
  `site_about` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`S_ID`, `site_title`, `site_about`) VALUES
(1, 'HOTEL PARADISE', 'Located in the prestigious downtown business district, Hotel Paradise is the foremost name of luxury. The hotel is beautifully designed boasted with Millennium modern outlook with a touch of local culture. Featuring 226 luxury rooms and suites, and restaurants offering exquisite cuisines.');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_ID` int(11) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_ID`, `image`) VALUES
(4, 'IMG_93862.jpg'),
(5, 'IMG_85671.jpg'),
(6, 'IMG_56742.jpg'),
(7, 'IMG_71617.jpg'),
(8, 'IMG_76055.jpg'),
(9, 'IMG_80378.jpg'),
(10, 'IMG_83642.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `team_details`
--

CREATE TABLE `team_details` (
  `T_ID` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `picture` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team_details`
--

INSERT INTO `team_details` (`T_ID`, `name`, `picture`) VALUES
(4, 'Fahrin Sunaira', 'IMG_71937.jpg'),
(8, 'Farasha Yussouf', 'IMG_17153.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phonenum` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(300) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `name`, `email`, `phonenum`, `dob`, `address`, `password`, `status`, `datetime`) VALUES
(1, 'Fahrin Sunaira', 'fahrin.sunaira@northsouth.edu', '01306816331', '2002-01-11', 'House Road Block', '$2y$10$9KobYYMBp6XJkQ6hkROZVeOHmtWPWmZBpicGGt5kwKF/yOwfEKSIC', 1, '2022-12-19 02:02:39'),
(2, 'Farasha Yussouf', 'farashasy@gmail.com', '01306713552', '2001-03-08', 'House Bashundhara', '$2y$10$u74iULAmIbagNbAkquuF3.6b/LZnfpPAYHhv/twEeKhQB5TPdwM/m', 1, '2022-12-19 02:08:40'),
(3, 'Taha', 'taha@gmail.com', '01307645442', '2022-12-02', 'House Dhaka', '$2y$10$lFaH8nrDeW9Xsa2dCkArV.LLgjMas9HnO6h7xmObWqW3YPEL/.Nl.', 1, '2022-12-19 02:35:30'),
(5, 'Sunaira', 'fhsunaira@gmail.com', '011111111111111', '2002-01-12', 'House Road', '$2y$10$orFrGa8OzAosCoDYdAH8s.MjhFaksNvCNe3SZjPijPeGsZHA//CHO', 1, '2022-12-25 00:26:18');

-- --------------------------------------------------------

--
-- Table structure for table `user_reach`
--

CREATE TABLE `user_reach` (
  `reach_ID` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `seen` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_reach`
--

INSERT INTO `user_reach` (`reach_ID`, `name`, `email`, `phone`, `message`, `date`, `seen`) VALUES
(5, 'sunaira', 'fhsunaira@gmail.com', '0129323393', 'They were extremely accommodating and allowed us to check in early at like 10am. We got to hotel super early and I didn’t wanna wait. So this was a big plus. The service was exceptional as well. Would definitely send a friend there.', '2022-12-10', 0),
(6, 'farasha', 'farashasy@gmail.com', '0131394429', 'The rooms were clean, very comfortable, and the staff was amazing. They went over and beyond to help make our stay enjoyable. I highly recommend this hotel for anyone visiting downtown.', '2022-12-10', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`C_ID`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`facilities_ID`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`feature_ID`);

--
-- Indexes for table `rating_review`
--
ALTER TABLE `rating_review`
  ADD PRIMARY KEY (`R_ID`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`R_ID`);

--
-- Indexes for table `room_facilities`
--
ALTER TABLE `room_facilities`
  ADD PRIMARY KEY (`sr_no`),
  ADD KEY `room id` (`room_ID`),
  ADD KEY `facilities id` (`fac_ID`);

--
-- Indexes for table `room_features`
--
ALTER TABLE `room_features`
  ADD PRIMARY KEY (`sr_no`),
  ADD KEY `roomid` (`room_ID`),
  ADD KEY `features id` (`features_ID`);

--
-- Indexes for table `room_images`
--
ALTER TABLE `room_images`
  ADD PRIMARY KEY (`sr_no`),
  ADD KEY `room_images_ibfk_1` (`room_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`S_ID`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_ID`);

--
-- Indexes for table `team_details`
--
ALTER TABLE `team_details`
  ADD PRIMARY KEY (`T_ID`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_reach`
--
ALTER TABLE `user_reach`
  ADD PRIMARY KEY (`reach_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `C_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `facilities_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `feature_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `R_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `room_facilities`
--
ALTER TABLE `room_facilities`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `room_features`
--
ALTER TABLE `room_features`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `room_images`
--
ALTER TABLE `room_images`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `S_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `team_details`
--
ALTER TABLE `team_details`
  MODIFY `T_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_reach`
--
ALTER TABLE `user_reach`
  MODIFY `reach_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `room_facilities`
--
ALTER TABLE `room_facilities`
  ADD CONSTRAINT `facilities id` FOREIGN KEY (`fac_ID`) REFERENCES `facilities` (`facilities_ID`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `room id` FOREIGN KEY (`room_ID`) REFERENCES `rooms` (`R_ID`) ON UPDATE NO ACTION;

--
-- Constraints for table `room_features`
--
ALTER TABLE `room_features`
  ADD CONSTRAINT `features id` FOREIGN KEY (`features_ID`) REFERENCES `features` (`feature_ID`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `roomid` FOREIGN KEY (`room_ID`) REFERENCES `rooms` (`R_ID`) ON UPDATE NO ACTION;

--
-- Constraints for table `room_images`
--
ALTER TABLE `room_images`
  ADD CONSTRAINT `room_images_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`R_ID`) ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
