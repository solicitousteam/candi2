-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2022 at 03:50 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `candiwebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_user`
--

CREATE TABLE `add_user` (
  `id` int(100) NOT NULL,
  `name` varchar(120) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `cpass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_user`
--

INSERT INTO `add_user` (`id`, `name`, `email`, `pass`, `cpass`) VALUES
(1, 'aaa', 'aaa@example.com', '123', '123'),
(4, 'Rohini Balasaheb chalekar', 'admin@gmail.com', '123456', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_fname` varchar(100) NOT NULL,
  `admin_lname` varchar(100) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_location` varchar(100) NOT NULL,
  `admin_phoneno` varchar(15) NOT NULL,
  `admin_logo` text NOT NULL,
  `admin_company_name` varchar(100) NOT NULL,
  `admin_address` varchar(100) NOT NULL,
  `admin_city` varchar(50) NOT NULL,
  `admin_state` varchar(50) NOT NULL,
  `admin_country` varchar(50) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_fname`, `admin_lname`, `admin_email`, `admin_password`, `admin_location`, `admin_phoneno`, `admin_logo`, `admin_company_name`, `admin_address`, `admin_city`, `admin_state`, `admin_country`, `code`, `status`) VALUES
(1, 'Raj', 'Mehta', 'rajmehta@gmail.com', 'Pune', '123', '1234567890', 'elige.jpg', 'Google', 'Vima nagar', 'Pune', 'Maharashtra', 'India', 0, 'verified'),
(7, 'Vincent', 'Vega', 'vincentvega@gmail.com', '123', 'New York ', '9877524658', 'logo.png', 'Pulp Fiction Inc', '23rd and 5th Office Center', 'New York', 'New York', 'USA', 0, 'verified'),
(9, 'Rajesh', 'Kumar', 'adamstrange07@gmail.com', '$2y$10$rVrvzKkK.4jYUodoTI1Xeu6Px.oHTRwSJuIyUCzFrPN.nSQyCURpW', 'New York', '9744123545', 'elige.jpg', 'Tata Communications', '23rd and West Street', 'Long Beach', 'New York', 'USA', 0, 'verified'),
(13, 'Nishant ', 'Gautam', 'adamstrange09@gmail.com', '$2y$10$o6.2xr3J40jpSEc.6jCSBOjcVYnWWejr2i82IlPaikOisPa4kMwti', 'Kansas City, Kansas', '9877564390', 'logo.jpg', 'Tata Communications', 'Tata Building, 3 West Street', 'Kansas City', 'Kansas', 'USA', 0, 'verified'),
(14, 'Himanshu', 'Ratnaparkhi', 'adamstrange05@gmail.com', '$2y$10$Bl30iDVoTiTfKpWbH4pFMu8K1WRKPHVPeZ56QoFJ6OxJl4L/kS5gK', 'New York', '9855409876', 'logo.jpg', 'Solicitus', 'Mahatma', 'Pune', 'Maharashtra', 'India', 0, 'verified'),
(15, 'Amaan', 'Bhaidani', 'amaanbhaidani2@gmail.com', '$2y$10$nTFNm9Oclsqiq3DzSivMmuPinWNZZjI6k5J2bxuQBm7nCMuTXQ7pq', 'Pune', '345231234545', 'logo.jpg', 'Solicitous', 'Kothrud', 'Pune', 'Maharashtra', 'India', 0, 'verified'),
(19, 'Radhika', 'Chalekar', 'rohinichalekar2002@gmail.com', '$2y$10$7QBbNE02ay40g.iJrj9b6uKbuUB4pd4.bQFWPPQKzyZr3UUUVEz/i', 'Boston, Massachusetts', '01234567890', 'logo.jpg', 'Google', 'Google Park', 'Pune', 'Massachusetts', 'USA', 0, 'verified'),
(20, 'Atul', 'Jain', 'atuljain.atul@gmail.com', '$2y$10$/jmEgyuEoYS0bimVX9.DOe./XVBijWbyOeWw16cPDjQHwdj3QbkQK', 'India', '1234567890', 'remove.png', 'Solicitous', 'Kothrud', 'Pune', 'Maharashtra', 'India', 0, 'verified'),
(21, 'Kavita', 'Jagtap', 'social.solicitousbusiness@gmail.com', '$2y$10$ZDWxdt8KYa37ONF1vojOReC9suOeOCY2/zrjfdPPcTAJZ9ECz5w9K', 'Pune', '1234567890', '4.jpg', 'Solicitous', '877, N.D.A road', 'Pune', 'Maharashtra', 'India', 562955, 'notverified'),
(22, 'shubham', 'nivangune', 'yicek98909@vapaka.com', '$2y$10$LfxPwy8uH0bsjAwh6yV81.gQFNs7s5YYXoQetWicc3z1a9Fgv6hEy', 'Pune', '1234567890', '3.jpg', 'Solicitous', '877, N.D.A road', 'Pune', 'Maharashtra', 'India', 0, 'verified');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_profile`
--

CREATE TABLE `candidate_profile` (
  `candidate_id` int(11) NOT NULL,
  `candidate_image` text NOT NULL,
  `candidate_resume` text NOT NULL,
  `candidate_phoneno` varchar(15) NOT NULL,
  `candidate_location` varchar(100) NOT NULL,
  `candidate_workexp` varchar(100) NOT NULL,
  `candidate_salary` varchar(10) NOT NULL,
  `candidate_language` varchar(100) NOT NULL,
  `candidate_security` varchar(100) NOT NULL,
  `candidate_jobtitle` varchar(100) NOT NULL,
  `candidate_position_title` varchar(100) NOT NULL,
  `candidate_workauth` varchar(100) NOT NULL,
  `candidate_employ_title` varchar(100) NOT NULL,
  `candidate_travel_status` varchar(100) NOT NULL,
  `candidate_education` varchar(100) NOT NULL,
  `candidate_skills` varchar(100) NOT NULL,
  `candidate_relo` varchar(100) NOT NULL,
  `candidate_aboutme` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidate_profile`
--

INSERT INTO `candidate_profile` (`candidate_id`, `candidate_image`, `candidate_resume`, `candidate_phoneno`, `candidate_location`, `candidate_workexp`, `candidate_salary`, `candidate_language`, `candidate_security`, `candidate_jobtitle`, `candidate_position_title`, `candidate_workauth`, `candidate_employ_title`, `candidate_travel_status`, `candidate_education`, `candidate_skills`, `candidate_relo`, `candidate_aboutme`) VALUES
(2, 'elige.jpg', 'candiresume.pdf', '3456743212', 'Mumbai, India', '5+ Years', 'C2C', 'English, Hindi, Marathi', 'Yes', 'Python Developer', 'PHP Developer', 'H1', 'C2C', 'Yes', 'PHD, M.E', 'Python,Advanced Java', 'Yes', 'A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence was created for the bliss of souls like mine.I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.'),
(3, 'elige.jpg', 'candiresume.pdf', '1232445543', 'Milwaukee, Wisconsin', '7+ Years', 'C2C', 'English', 'Yes', 'PHP Developer', 'Java Developer', 'Citizen', 'C2C', 'Yes', 'M.E', 'AngularJS,ReactJS', 'Yes', 'A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence was created for the bliss of souls like mine.I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.'),
(8, 'elige.jpg', 'candiresume.pdf', '1234567890', 'Pune, India', '2+ Years', 'C2C', 'English, Hindi, Marathi', 'Yes', 'Java Developer', 'PHP Developer', 'H1', 'C2C', 'Yes', 'MCA', 'Java,Php,HTML', 'Yes', NULL),
(10, 'elige.jpg', 'candiresume.pdf', '1234567890', 'Fargo, North Dakota', '5-6 Years', 'C2C', 'English', 'Yes', 'Django Developer', 'Python Developer', 'Citizen', 'C2C', 'Yes', 'M.E', 'Java,Python', 'Yes', NULL),
(11, 'elige.jpg', 'candiresume.pdf', '1234567890', 'Boston, Massachusetts', '1-2 Years', 'C2C', 'English', 'Yes', 'Java Developer', 'PHP Developer', 'Citizen', 'C2C', 'Yes', 'M.E', 'Java,Php,HTML', 'Yes', NULL),
(1, 'profilepic.jpg', 'candiresume.pdf', '9833126576', 'New York', '4', 'C2C', 'English, French', 'Yes', 'Java Developer', 'PHP Developer', 'H1', 'C2C', 'Yes', 'M.E', 'Java,Python,HTML', 'Yes', NULL),
(12, 'elige.jpg', 'candiresume.pdf', '614-524-5072', 'Birmingham', '8', 'C2C', 'English', 'Yes', 'Azure Data Engineer', 'Azure Data Engineer', 'H1', 'Full-time', 'Yes', 'MCS', 'Azure', 'Yes', NULL),
(13, 'elige.jpg', 'candiresume.pdf', '(614) 648 7616', 'Columbus', '9', 'C2C', 'English', 'Yes', 'Cloud Data Engineer', 'Cloud Data Engineer', 'Citizen', 'Full-time', 'Yes', 'B.E', 'Cloud', 'Yes', NULL),
(14, 'elige.jpg', 'candiresume.pdf', '6096780687', 'NewYork', '8', 'C2C', 'English', 'Yes', 'QA Test Engineer', 'QA Test Engineer', 'Citizen', 'Full-time', 'Yes', 'B.E', 'QA', 'Yes', NULL),
(15, 'elige.jpg', 'candiresume.pdf', '571-386-4498', 'LasVegas', '7', 'C2C', 'English', 'Yes', 'SQL Engineer', 'SQL Engineer', 'Citizen', 'C2C', 'Yes', 'BSc', 'SQL', 'Yes', NULL),
(16, 'elige.jpg', 'candiresume.pdf', '919-931-6665', 'HollySprings', '3', 'C2C', 'English, Hindi', 'Yes', 'Java Engineer', 'Java Engineer', 'H1', 'C2C', 'Yes', 'B.E', 'Java', 'Yes', NULL),
(17, '', '2.jpg', '9130132213', 'Pune', '5', '1099', 'English ', 'Yes', 'Php developer', 'Php developer', 'H1', 'C2C', 'Yes', 'B.Cs', 'Php,Python', 'Yes', NULL),
(18, '4.jpg', 'check.png', '9130132213', 'U.S.A', '3', '1099', 'English ', 'Yes', 'python developer ', 'python developer', 'H1', '1099', 'Yes', 'B.Cs', 'Python', 'Yes', NULL),
(19, '', '', '8523647859', 'Pune', '3', '1099', 'English ', 'Yes', 'Php developer', 'Php developer', 'H1', 'C2C', 'Yes', 'B.E.', 'Php,HTML', 'Yes', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `candidate_register`
--

CREATE TABLE `candidate_register` (
  `candidate_id` int(11) NOT NULL,
  `candidate_fname` varchar(100) NOT NULL,
  `candidate_lname` varchar(100) NOT NULL,
  `candidate_email` varchar(100) NOT NULL,
  `candidate_password` varchar(100) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidate_register`
--

INSERT INTO `candidate_register` (`candidate_id`, `candidate_fname`, `candidate_lname`, `candidate_email`, `candidate_password`, `code`, `status`) VALUES
(1, 'Tony ', 'Stark', 'adamstrange07@gmail.com', '$2y$10$uX8zb.rw3HH06L.3xVWUgefU/yWGJ50iqeiYZTiFud9hiFHu47sXG', 0, 'verified'),
(2, 'Raj ', 'Mehta', 'rajmehta@gmail.com', '$2y$10$yDNm5j.ouo8tpciWmJUT/.ysmGMV7aCigRnoBW.guzYJ/o45JG.tW', 0, 'verified'),
(3, 'Jay', 'Bauman', 'jaybauman@gmail.com', '$2y$10$yDNm5j.ouo8tpciWmJUT/.ysmGMV7aCigRnoBW.guzYJ/o45JG.tW', 0, 'verified'),
(4, 'Rich', 'Evans', 'richevans@gmail.com', '$2y$10$yDNm5j.ouo8tpciWmJUT/.ysmGMV7aCigRnoBW.guzYJ/o45JG.tW', 0, 'verified'),
(10, 'Andrew', 'Garfield', 'adamstrange05@gmail.com', '$2y$10$WScI8vUaYLm8DUjyR62AHuw3nWuq5BtYc65H79aw4ZBn0cI6fdF2y', 0, 'verified'),
(11, 'Adam', 'Strange09', 'adamstrange09@gmail.com', '$2y$10$f7IT/5VpM2Zr4T1e2cKsDOR5zN4eV.u6l.ktYc8WPsKRi38FgNt4S', 0, 'verified'),
(12, 'Abhinav', 'Bauman', 'abhinavbauman@gmail.com', '$2y$10$yDNm5j.ouo8tpciWmJUT/.ysmGMV7aCigRnoBW.guzYJ/o45JG.tW', 0, 'verified'),
(13, 'Vamsidhar', 'Nimma', 'vamsidharnimma@gmail.com', '$2y$10$yDNm5j.ouo8tpciWmJUT/.ysmGMV7aCigRnoBW.guzYJ/o45JG.tW', 0, 'verified'),
(14, 'Manasa', 'Pham', 'manasapham@gmail.com', '$2y$10$yDNm5j.ouo8tpciWmJUT/.ysmGMV7aCigRnoBW.guzYJ/o45JG.tW', 0, 'verified'),
(15, 'Geletaw', 'Adank', 'geletawadank@gmail.com', '$2y$10$yDNm5j.ouo8tpciWmJUT/.ysmGMV7aCigRnoBW.guzYJ/o45JG.tW', 0, 'verified'),
(16, 'Hirak', 'Patel', 'hirakpatel@gmail.com', '$2y$10$yDNm5j.ouo8tpciWmJUT/.ysmGMV7aCigRnoBW.guzYJ/o45JG.tW', 0, 'verified'),
(17, 'Radhika', 'Chalekar', 'rohinichalekar@gmail.com', '$2y$10$BYHOExvjNnW.OY.TAKrT..YKsnkRhbbnYhuHDgcGJj3FlhIkDuHZe', 0, 'verified'),
(18, 'radha', 'abc', 'chalekarrohini21@gmail.com', '$2y$10$GMV3Ot5w0GnIgfaqEmka8uZyjXiwzRplgEEoOfJmeVwlHK65Ag4ze', 0, 'verified'),
(19, 'Ankita', 'Chavhan', 'ankitachavhan1999@gmail.com', '$2y$10$pBDcgatQjPgzq27bfkB7juZAZevwZC4mHpO.t2oEd2d.7bhwgEcXO', 0, 'verified'),
(20, 'xyz', 'xyz', 'radhika12@gmail.com', '$2y$10$7MhiFJHXXGjvi.Iw34rUHOmpYQy4BUO0rmik4Zcs0x.FvNzefj5xe', 554078, 'notverified'),
(21, 'xyz', 'xyz', 'yicek98909@vapaka.com', '$2y$10$m46DrExKXqvJsW2CWI/ER./6.Pd.tj6P9ZXYbGT2/nB8eZ0art8kG', 0, 'verified');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_social_network`
--

CREATE TABLE `candidate_social_network` (
  `candidate_id` int(11) NOT NULL,
  `candidate_facebook` varchar(100) NOT NULL,
  `candidate_twitter` varchar(100) NOT NULL,
  `candidate_linkedin` varchar(100) NOT NULL,
  `candidate_googleplus` varchar(100) NOT NULL,
  `candidate_skype` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidate_social_network`
--

INSERT INTO `candidate_social_network` (`candidate_id`, `candidate_facebook`, `candidate_twitter`, `candidate_linkedin`, `candidate_googleplus`, `candidate_skype`) VALUES
(1, 'facebook.com/TonyStark', 'twitter.com/TonyStark', 'linkedin.com/TonyStark', 'googleplus.com/TonyStark', 'skype.com/tonystark'),
(2, 'facebook.com/RajMehta', 'twitter.com/RajMehta', 'linkedin.com/RajMehta', 'googleplus.com/RajMehta', 'skype.com/rajmehta'),
(3, 'facebook.com/JayBauman', 'twitter.com/JayBauman', 'linkedin.com/JayBauman', 'googleplus.com/JayBauman', 'skype.com/jaybauman'),
(4, 'www.facebook.com/richevans2', 'www.twitter.com/richevans', 'www.linkedin.com/richevans', 'www.skype.com/richevans', 'skype.com/richevans'),
(7, 'www.facebook.com/adamstrange', 'www.linkedin.com/adamstrange', 'www.twitter.com/adamstrange', 'www.googleplus.com/adamstrange', 'skype.com/adamstrange'),
(8, 'www.facebook.com/adamstrange', 'www.linkedin.com/adamstrange', 'www.twitter.com/adamstrange', 'www.googleplus.com/adamstrange', 'skype.com/adamstrange'),
(11, 'www.facebook.com/adamstrange09', 'www.linkedin.com/adamstrange09', 'www.twitter.com/adamstrange09', 'www.googleplus.com/adamstrange09', 'skype.com/adamstrange09');

-- --------------------------------------------------------

--
-- Table structure for table `job_applications`
--

CREATE TABLE `job_applications` (
  `job_id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `application_status` varchar(50) NOT NULL,
  `view_status` varchar(50) NOT NULL,
  `interview_date` varchar(100) NOT NULL,
  `interview_time` varchar(100) NOT NULL,
  `interview_time2` varchar(100) NOT NULL,
  `interview_time3` varchar(100) NOT NULL,
  `interview_slot` varchar(100) NOT NULL,
  `reschedule_date` varchar(100) NOT NULL,
  `reschedule_time` varchar(100) NOT NULL,
  `reschedule_status` varchar(100) NOT NULL,
  `job_offer` varchar(100) NOT NULL,
  `job_type` varchar(100) NOT NULL,
  `job_offer_date` varchar(100) NOT NULL,
  `counter_job_offer` varchar(100) NOT NULL,
  `job_offer_status` varchar(100) NOT NULL,
  `job_offer_final_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_applications`
--

INSERT INTO `job_applications` (`job_id`, `candidate_id`, `application_status`, `view_status`, `interview_date`, `interview_time`, `interview_time2`, `interview_time3`, `interview_slot`, `reschedule_date`, `reschedule_time`, `reschedule_status`, `job_offer`, `job_type`, `job_offer_date`, `counter_job_offer`, `job_offer_status`, `job_offer_final_date`) VALUES
(1, 3, 'Rejected', 'seen', '', '', '0', '0', ' ', ' ', ' ', ' ', '', '', '', '', '', ''),
(5, 1, 'Accepted', 'unseen', '', '', '0', '0', '', '', '', '', '', '', '', '', '', ''),
(7, 3, 'In Progress', 'unseen', '', '', '0', '0', '', '', '', '', '', '', '', '', '', ''),
(8, 2, 'Accepted', 'seen', '', '', '0', '0', '', '', '', '', '', '', '', '', '', ''),
(1, 1, 'Rejected', 'seen', '2022-01-24', '12:00 pm - 01:00 pm', '04:00 pm - 04:30 pm', '06:00 pm - 07:30 pm', '3 pm - 4 pm', '', '', '', '', '', '', '', 'Rejected', '2022-01-26'),
(15, 1, 'Accepted', 'seen', '2022-01-20', '02:30 pm', '0', '0', '2 pm - 3 pm', '2022-01-21', '02:30 pm', 'Accepted', '', '', '', '', '', ''),
(10, 10, 'In Progress', '', '', '', '0', '0', '', '', '', '', '', '', '', '', '', ''),
(12, 10, 'Accepted', 'seen', '2022-01-14', '05:00 pm', '0', '0', '5 pm - 6 pm', '2022-01-14', '05:00 pm', 'Accepted', '', '', '', '', '', ''),
(20, 1, 'Accepted', 'seen', '2022-01-21', '11:00 am', '0', '0', '11 am - 12 pm', '2022-01-21', '01:00 am', '', '', '', '', '650,000', '', ''),
(20, 10, 'In Progress', 'seen', '2022-01-21', '01:00 pm', '0', '0', '1 pm - 2 pm', '', '', '', '', '', '', '', 'Accepted', '2022-01-26'),
(1, 10, 'Accepted', 'seen', '2022-01-19', '1:20 pm', '0', '0', '1 pm - 2 pm', '', '', '', '625,000', 'annually', '2022-01-26', '650,000', 'Accepted', '2022-01-26'),
(23, 12, '', 'seen', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(24, 13, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(25, 14, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(26, 15, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(27, 16, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(27, 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(28, 3, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(28, 1, '', 'seen', '2022-03-07', '10:45 am - 11:45 am', '11:45 am - 12:45 pm', '12:45 am - 01:45 am', '', '', '', '', '', '', '', '', '', ''),
(28, 17, '', 'seen', '2022-03-07', '11:24 am - 12:24 pm', '12:25 pm - 01:25 pm', '01:25 pm - 02:25 pm', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `job_details`
--

CREATE TABLE `job_details` (
  `job_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `job_mail` varchar(100) NOT NULL,
  `job_location` varchar(100) NOT NULL,
  `job_description` varchar(100) NOT NULL,
  `job_skill` varchar(100) NOT NULL,
  `job_contract_type` varchar(100) NOT NULL,
  `job_pay_range` varchar(100) NOT NULL,
  `job_travel_requirement` varchar(100) NOT NULL,
  `job_post_date` varchar(50) NOT NULL,
  `job_expire_date` varchar(50) NOT NULL,
  `job_opening` varchar(50) NOT NULL,
  `job_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_details`
--

INSERT INTO `job_details` (`job_id`, `admin_id`, `job_title`, `job_mail`, `job_location`, `job_description`, `job_skill`, `job_contract_type`, `job_pay_range`, `job_travel_requirement`, `job_post_date`, `job_expire_date`, `job_opening`, `job_status`) VALUES
(1, 9, 'Angular Web Developer', 'angularadmin@gmail.com', 'Sacramento, CA', 'Angular Web developer with 2-5 years of experience and can make dynamic web pages with fast pace', 'HTML, CSS, Angular', 'Full-time', 'Anually', 'Yes', '2021-12-29', '2022-12-31', '5', 'Active'),
(2, 10, 'SQL Developer', 'admin@gmail.com', 'North Dakota', 'SQL Developer with 1-2 years of experience', 'MySQL', 'Full-time', 'Anually', 'No', '2021-12-29', '2021-12-31', '5', 'Expired'),
(3, 13, 'Dot Net Developer', 'admin@gmail.com', 'New York', 'Front end developer well versed in ASP.NET', 'ASP', 'Contract', 'Hourly', 'No', '2021-12-29', '2021-12-31', '5', 'Expired'),
(5, 15, 'PHP developer', 'admin@gmail.com', 'Toronto, Canada', 'Working on admin panel, making connection with database on backend with PHP', 'PHP', 'Full-time', 'Hourly', 'Yes', '2021-12-29', '2021-12-31', '5', 'Expired'),
(6, 9, 'Javascript Developer', 'admin@gmail.com', 'New York', 'Writing javascript code to add functionality to static HTML pages', 'JavaScript', 'Part-time', 'Annually', 'Yes', '2021-12-29', '2021-12-31', '5', 'Expired'),
(7, 10, 'Frontend Web Developer', 'employer@ibm.com', 'California', 'Working on UI development for websites with AngularJS and NodeJS', 'Angular', 'Full-time', 'Annually', 'Yes', '2021-12-29', '2021-12-31', '5', 'Expired'),
(8, 13, 'AI/ML Developer', 'MLdev@gmail.com', 'Milwaukee, Wisconsin', 'Working on ML models related to Brain tumor testing', 'Python', 'Full-time', 'Hourly', 'Yes', '2021-12-29', '2021-12-31', '5', 'Expired'),
(10, 15, 'Django Developer', 'admin@gmail.com', 'New York', 'Django ', 'JavaScript', 'Part-time', 'Hourly', 'No', '2021-12-29', '2021-12-31', '1', 'Expired'),
(12, 9, 'Django Developer', 'admin@gmail.com', 'Fargo, North Dakota', 'Django Developer with 5 years of experience', 'Angular', 'Full Time', 'Annually', 'Yes', '2021-12-29', '2022-01-12', '6', 'Expired'),
(13, 10, 'Senior MySQL Developer', 'sqldev@gmail.com', 'Kansas City, Kansas', 'mysql developer with 10+ years of experience working on backend ', 'HTML', 'Full Time', 'Annually', 'Yes', '2021-12-30', '2022-01-31', '1', 'Active'),
(14, 13, 'Frontend AngularJS Developer', 'ajs@gmail.com', 'Columbus, Ohio', 'Fresher Angular developer with a hunger to learn, unpaid opportunity', 'Angular', 'Full Time', 'Hourly', 'Yes', '2021-12-29', '2022-01-03', '1', 'Expired'),
(15, 0, 'CodeIgniter Developer', 'ciadmin@infosys.com', 'California', 'CodeIgnitor Developer with 0-2 years of experience', 'HTML, CSS, PHP', 'Full Time', 'Annually', 'Yes', '2022-01-17', '2022-01-31', '2', 'Expired'),
(16, 19, 'Wordpress Developer', 'admin@gmail.com', 'Boston, Massachusetts', 'Wordpress Developer who can make professional websites ', 'HTML, CSS, PHP, MySQL', 'Full Time', 'Hourly', 'No', '2022-01-11', '2022-12-10', '3', 'Active'),
(17, 0, 'Angular Web Developer', 'angularadmin@gmail.com', 'New York City', 'Angular Web developer with 2-5 years of experience and can make dynamic web pages with fast pace', 'HTML, CSS, JavaScript, Angular, ', 'Full-time', 'Anually', 'No', '2022-01-17', '2022-12-31', '2', 'Active'),
(18, 0, 'Javascript Developer', 'jsadmin@gmail.com', 'Louisville, Kentucky', 'Writing javascript code to add functionality to static HTML pages', 'HTML, CSS, JavaScript, ', 'Part-time', 'Hourly', 'No', '2022-01-17', '2022-01-31', '3', 'Expired'),
(19, 0, 'Ruby Developer', 'rubyadmin@gmail.com', 'Boston, Massachusetts', 'Ruby Developer', 'HTML, CSS, JavaScript, Ruby', 'Full Time', 'Annually', 'Yes', '2022-01-19', '2022-02-19', '5', 'Expired'),
(20, 9, 'PHP Developer', 'admin@gmail.com', 'Pune', 'PHP dev', 'HTML, CSS, JavaScript, PHP, MySQL', 'Full Time', 'Annually', 'No', '2022-01-18', '2022-01-21', '5', 'Expired'),
(22, 9, 'Java Developers', 'javacandi@gmaill.com', 'New York', 'Skilled java developers with atleast 2 years of experience', 'Java', 'C2C', 'C2C', 'Yes', '2022-01-26', '2022-12-31', '5', 'Active'),
(23, 14, 'Azure Data Engineer', 'azure@gmail.com', 'Birmingham', 'Azure Data Engineer required', 'Azure', 'Full-time', 'C2C', 'No', '2022-1-26', '2022-12-31', '1', 'Active'),
(24, 14, 'Cloud Engineer', 'cloud@gmail.com', 'Columbus', 'Cloud  Engineer required', 'Cloud', 'Full-time', 'C2C', 'No', '2022-1-26', '2022-12-31', '1', 'Active'),
(25, 14, 'QA Testing Engineer', 'qatesting@gmail.com', 'NewYork', 'QA  Engineer required', 'QA', 'Full-time', 'C2C', 'No', '2022-1-26', '2022-12-31', '1', 'Active'),
(26, 14, 'SQL Engineer', 'sql@gmail.com', 'LasVegas', 'SQL  Engineer required', 'SQL', 'C2C', 'C2C', 'No', '2022-1-26', '2022-12-31', '1', 'Active'),
(27, 14, 'Java Engineer', 'java@gmail.com', 'HollySprings', 'Java  Engineer required', 'Java', 'C2C', 'C2C', 'No', '2022-1-26', '2022-12-31', '1', 'Active'),
(28, 9, 'PHP Developer', 'admin@gmail.com', 'Pune', 'php', 'HTML, CSS, PHP', 'Full Time', 'C2C', 'Yes', '2022-03-07', '2022-03-31', '4', 'Active'),
(29, 9, 'php developer', 'adamstrange07@gmail.com', 'U.S.A', 'php', 'HTML, CSS, JavaScript, PHP', 'Full Time', 'C2C', 'Yes', '2022-03-08', '2022-03-16', '7', 'Active'),
(30, 9, 'java ', 'radhika@gmail.com', 'pune', '123', 'CSS, JavaScript', 'Full Time', 'C2C', 'Yes', '2022-03-09', '2022-03-11', '3', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_user`
--
ALTER TABLE `add_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `candidate_profile`
--
ALTER TABLE `candidate_profile`
  ADD KEY `candidate_id` (`candidate_id`);

--
-- Indexes for table `candidate_register`
--
ALTER TABLE `candidate_register`
  ADD PRIMARY KEY (`candidate_id`);

--
-- Indexes for table `candidate_social_network`
--
ALTER TABLE `candidate_social_network`
  ADD KEY `candidate_id` (`candidate_id`);

--
-- Indexes for table `job_applications`
--
ALTER TABLE `job_applications`
  ADD KEY `candidate_id` (`candidate_id`),
  ADD KEY `job_id` (`job_id`);

--
-- Indexes for table `job_details`
--
ALTER TABLE `job_details`
  ADD PRIMARY KEY (`job_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_user`
--
ALTER TABLE `add_user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `candidate_register`
--
ALTER TABLE `candidate_register`
  MODIFY `candidate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
