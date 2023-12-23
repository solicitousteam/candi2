-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 27, 2023 at 06:03 PM
-- Server version: 5.7.37
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `solicitous_candi`
--

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
(1, 'Raj', 'Mehta', 'rajmehta@gmail.com', '$2y$10$LfxPwy8uH0bsjAwh6yV81.gQFNs7s5YYXoQetWicc3z1a9Fgv6hEy', '123', '1234567890', 'elige.jpg', 'Google', 'Vima nagar', 'Pune', 'Maharashtra', 'India', 0, 'verified'),
(7, 'Vincent', 'Vega', 'vincentvega@gmail.com', '123', 'New York ', '9877524658', 'logo.png', 'Pulp Fiction Inc', '23rd and 5th Office Center', 'New York', 'New York', 'USA', 0, 'verified'),
(9, 'Rajesh', 'Kumar', 'adamstrange07@gmail.com', '$2y$10$rVrvzKkK.4jYUodoTI1Xeu6Px.oHTRwSJuIyUCzFrPN.nSQyCURpW', 'New York', '9744123545', 'elige.jpg', 'Tata Communications', '23rd and West Street', 'Long Beach', 'New York', 'USA', 625758, 'verified'),
(13, 'Nishant ', 'Gautam', 'adamstrange09@gmail.com', '$2y$10$o6.2xr3J40jpSEc.6jCSBOjcVYnWWejr2i82IlPaikOisPa4kMwti', 'Kansas City, Kansas', '9877564390', 'logo.jpg', 'Tata Communications', 'Tata Building, 3 West Street', 'Kansas City', 'Kansas', 'USA', 0, 'verified'),
(14, 'Himanshu', 'Ratnaparkhi', 'adamstrange05@gmail.com', '$2y$10$Bl30iDVoTiTfKpWbH4pFMu8K1WRKPHVPeZ56QoFJ6OxJl4L/kS5gK', 'New York', '9855409876', 'logo.jpg', 'Solicitus', 'Mahatma', 'Pune', 'Maharashtra', 'India', 0, 'verified'),
(15, 'Amaan', 'Bhaidani', 'amaanbhaidani2@gmail.com', '$2y$10$nTFNm9Oclsqiq3DzSivMmuPinWNZZjI6k5J2bxuQBm7nCMuTXQ7pq', 'Pune', '345231234545', 'logo.jpg', 'Solicitous', 'Kothrud', 'Pune', 'Maharashtra', 'India', 0, 'verified'),
(19, 'Radhika', 'Chalekar', 'rohinichalekar2002@gmail.com', '$2y$10$7QBbNE02ay40g.iJrj9b6uKbuUB4pd4.bQFWPPQKzyZr3UUUVEz/i', 'Boston, Massachusetts', '01234567890', 'logo.jpg', 'Google', 'Google Park', 'Pune', 'Massachusetts', 'USA', 260308, 'verified'),
(20, 'Atul', 'Jain', 'atuljain.atul@gmail.com', '$2y$10$/jmEgyuEoYS0bimVX9.DOe./XVBijWbyOeWw16cPDjQHwdj3QbkQK', 'India', '1234567890', 'remove.png', 'Solicitous', 'Kothrud', 'Pune', 'Maharashtra', 'India', 0, 'verified'),
(21, 'Rohini', 'Chalekar', 'rohinichalekar@gmail.com', '$2y$10$DSP0eZvuSgsk6hnSMwxpHu2crT6wK/wJlze7.c8P/029AfqoZ0X8e', 'pune', '1234567890', '4.jpg', 'Solicitous', '877', 'Pune', 'Maharashtra', 'India', 548728, 'notverified');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_interview`
--

CREATE TABLE `candidate_interview` (
  `interview_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `interview_text` longtext NOT NULL,
  `added_on` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate_interview`
--

INSERT INTO `candidate_interview` (`interview_id`, `user_id`, `interview_text`, `added_on`) VALUES
(7, 1, 'Hello', '08-03-2022 05:40:45 PM'),
(8, 1, 'You are my keyboard with hello hello hello', '08-03-2022 05:42:14 PM'),
(10, 1, '', '08-03-2022 05:48:13 PM'),
(11, 1, '', '08-03-2022 05:49:55 PM'),
(12, 1, '', '08-03-2022 05:49:57 PM'),
(13, 1, 'Hello Abhi wapas Wapas do it', '08-03-2022 05:51:11 PM'),
(14, 1, 'Joinjoinjoin meetingjoin meeting kya', '08-03-2022 05:53:23 PM'),
(15, 1, '', '08-03-2022 05:54:02 PM'),
(16, 1, '', '08-03-2022 05:54:07 PM'),
(17, 1, 'Hellohello hellohello hello', '08-03-2022 05:54:17 PM'),
(18, 1, '', '08-03-2022 05:56:52 PM'),
(19, 1, '', '08-03-2022 05:58:27 PM'),
(20, 1, 'Hello', '08-03-2022 06:48:56 PM'),
(21, 1, 'Join meeting hello hello hi Awaaz how are you are you able to hear me this is regarding the job interview we are talking about please let me know if you have any doubts so that I could help you with the same also so if you can let me know ok also if you can let me know about what do you feel about the new crisis between Ukraine and Russia war that will be great ok sorry bye', '08-03-2022 06:51:20 PM'),
(22, 1, 'Join meeting my call hello hi Avadh how are you I hope you are doing good please let me know thank you', '08-03-2022 06:51:52 PM'),
(23, 1, 'Hello hello hello', '08-03-2022 06:52:45 PM'),
(24, 1, 'Join meeting', '08-03-2022 06:54:18 PM'),
(25, 1, 'Let me know if you are able to hear me thank you', '08-03-2022 06:55:03 PM'),
(26, 1, 'Leading employees are investments and you expect every employee to generate a positive return on his or her salary', '08-03-2022 06:56:07 PM'),
(27, 1, 'Hello hello hello and you expect to generate a positive return on his or her salary', '08-03-2022 06:59:47 PM'),
(28, 1, 'Hello employees are investments and you expect every employee to generate a positive return on his or her salary have them on the', '08-03-2022 07:00:55 PM'),
(29, 1, 'Hello employer investment and employee to generate a positive return on his or her salary otherwise why do we have them on the payroll', '08-03-2022 07:01:25 PM'),
(30, 1, 'Hello is the job the candidate will feel important does that job matter', '08-03-2022 07:01:48 PM'),
(31, 1, 'Hello hello hi my name is xyz developed or looking forward to apply for this opportunity please let me know if you find any suitable for the same thank you', '09-03-2022 07:07:04 AM'),
(32, 1, 'Hello hello hello hello hello my name is Himanshu I am applying for this job my skill sets will be as follows please let me know if it is possible that 65 text to speech in background photo Tum Ko Dikhane ke liye Dikhane ke liye Kiya Hai', '09-03-2022 08:06:57 AM'),
(33, 1, 'Ok and the moment I will start talking it will start recording what ever and saying and does it will be very easy for them to judge my words thank you', '09-03-2022 08:07:47 AM'),
(34, 1, 'If you\'re absurd the absurdity interviewer abound, there\'s a lot you should already know: The candidate\'s resume and cover letter should tell you plenty, and LinkedIn and Twitter and Facebook and Google can tell you more.\r\n\r\nThe goal of an interview is to determine whether the candidate will be outstanding in the job, and that means evaluating the skills and attitude required for that job. Does she need to be an empathetic leader? Ask about that. Does she need to take your company public? Ask about that.\r\n\r\nIf you\'re the candidate, talk about why you took certain jobs. Explain why you left. Explain why you chose a certain school. Share why you decided to go to grad school. Discuss why you took a year off to backpack through Europe, and what you got out of the experience.\r\n\r\nWhen you answer this question, connect the dots on your resume so the interviewer understands not just what you\'ve done, but also why.', ''),
(35, 1, 'Hello', '09-03-2022 11:23:53 AM'),
(36, 1, 'Hello', '09-03-2022 11:24:12 AM'),
(37, 1, 'Hello', '09-03-2022 11:24:29 AM'),
(38, 1, 'Hello', '09-03-2022 11:55:15 AM'),
(39, 1, '', '09-03-2022 11:56:49 AM'),
(40, 1, 'Workaholic ambitious adventurous not sure but I am very', '09-03-2022 11:58:20 AM'),
(41, 1, 'Accomplished good', '09-03-2022 12:02:00 PM'),
(42, 1, 'Ambitious adequate active active not sure positive achievement', '09-03-2022 01:46:32 PM'),
(43, 1, 'Active ambitious active achievement positive accurate career help fight', '09-03-2022 01:47:30 PM'),
(44, 1, 'Active accurate ambitious working not sure adequate', '09-03-2022 01:48:14 PM'),
(45, 1, 'Nothing neither not adequate nobody positive fight', '09-03-2022 01:49:58 PM'),
(46, 1, 'Adequate positive achievement', '09-03-2022 01:52:38 PM'),
(47, 1, 'Accomplished accurate achieved work', '10-03-2022 05:51:16 AM'),
(48, 1, 'Python is a high-level interpret a general purpose programming language being a general purpose language it can be used to built it almost any type of application the right tools and libraries used', '10-03-2022 05:53:57 AM'),
(49, 1, 'Well I am currently and account executive at Smith where I handle are top performing client before that I worked at an agency where I was on three different major National Healthcare brands and while I really enjoyed the work that I did I did love the chance to begin much deeper with some specific Healthcare Company which is why I am so excited about this opportunity with Metro Healthcare I heard about an opening on the product team through a friend of a friend and since I am a big fan of your work and have been following you for a while I decided it would be a great role for me to apply for I saw on the most that you were also hiring for new positions on the West Coast the support your new operations day I did some reading about the new data centre your building that and that excites me as I know this means there will be opportunities to train new teammates I also learnt through a Wall Street Journal article that you are expanding in Mexico as well I speak Spanish fluently and would be equal to step up and helped me realise whenever necessary', '10-03-2022 05:57:23 AM'),
(50, 1, '', '10-03-2022 07:50:40 AM'),
(51, 1, '', '10-03-2022 07:59:25 AM'),
(52, 1, '', '10-03-2022 08:01:59 AM'),
(53, 1, '', '10-03-2022 08:03:19 AM'),
(54, 1, '', '10-03-2022 08:04:25 AM'),
(55, 1, 'Hello Hollywood this is good and ambitious person', '10-03-2022 08:04:56 AM'),
(56, 1, '', '10-03-2022 09:56:41 AM'),
(57, 1, 'Hello hello hello hello', '10-03-2022 10:00:14 AM'),
(58, 1, 'Events for tomorrow', '10-03-2022 01:18:53 PM'),
(59, 1, '', '10-03-2022 04:40:55 PM'),
(60, 1, '', '10-03-2022 04:41:10 PM'),
(61, 1, '', '10-03-2022 04:42:19 PM'),
(62, 1, '', '11-03-2022 05:04:11 AM'),
(63, 1, '', '11-03-2022 05:04:31 AM'),
(64, 1, '', '11-03-2022 05:05:06 AM'),
(65, 1, '', '11-03-2022 11:37:45 AM'),
(66, 1, '', '12-03-2022 10:05:36 AM'),
(67, 1, 'Hello name is Radhika', '12-03-2022 10:08:13 AM'),
(68, 1, '', '12-03-2022 10:08:45 AM'),
(69, 1, '', '12-03-2022 10:08:51 AM'),
(70, 1, 'Hello name is Radhika', '12-03-2022 10:09:01 AM');

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
(1, 'profilepic.jpg', 'candiresume.pdf', '9833126576', 'New York', '4', 'C2C', 'English, French', 'Yes', 'Java Developer', 'PHP Developer', 'H1', 'C2C', 'Yes', 'M.E', 'Java,Python,HTML', 'Yes', NULL),
(2, 'elige.jpg', 'candiresume.pdf', '3456743212', 'Mumbai, India', '5+ Years', 'C2C', 'English, Hindi, Marathi', 'Yes', 'Python Developer', 'PHP Developer', 'H1', 'C2C', 'Yes', 'PHD, M.E', 'Python,Advanced Java', 'Yes', 'A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence was created for the bliss of souls like mine.I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.'),
(3, 'elige.jpg', 'candiresume.pdf', '1232445543', 'Milwaukee, Wisconsin', '7+ Years', 'C2C', 'English', 'Yes', 'PHP Developer', 'Java Developer', 'Citizen', 'C2C', 'Yes', 'M.E', 'AngularJS,ReactJS', 'Yes', 'A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence was created for the bliss of souls like mine.I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.'),
(8, 'elige.jpg', 'candiresume.pdf', '1234567890', 'Pune, India', '2+ Years', 'C2C', 'English, Hindi, Marathi', 'Yes', 'Java Developer', 'PHP Developer', 'H1', 'C2C', 'Yes', 'MCA', 'Java,Php,HTML', 'Yes', NULL),
(10, 'elige.jpg', 'candiresume.pdf', '1234567890', 'Fargo, North Dakota', '5-6 Years', 'C2C', 'English', 'Yes', 'Django Developer', 'Python Developer', 'Citizen', 'C2C', 'Yes', 'M.E', 'Java,Python', 'Yes', NULL),
(11, 'elige.jpg', 'candiresume.pdf', '1234567890', 'Boston, Massachusetts', '1-2 Years', 'C2C', 'English', 'Yes', 'Java Developer', 'PHP Developer', 'Citizen', 'C2C', 'Yes', 'M.E', 'Java,Php,HTML', 'Yes', NULL),
(12, 'elige.jpg', 'candiresume.pdf', '614-524-5072', 'Birmingham', '8', 'C2C', 'English', 'Yes', 'Azure Data Engineer', 'Azure Data Engineer', 'H1', 'Full-time', 'Yes', 'MCS', 'Azure', 'Yes', NULL),
(13, 'elige.jpg', 'candiresume.pdf', '(614) 648 7616', 'Columbus', '9', 'C2C', 'English', 'Yes', 'Cloud Data Engineer', 'Cloud Data Engineer', 'Citizen', 'Full-time', 'Yes', 'B.E', 'Cloud', 'Yes', NULL),
(14, 'elige.jpg', 'candiresume.pdf', '6096780687', 'NewYork', '8', 'C2C', 'English', 'Yes', 'QA Test Engineer', 'QA Test Engineer', 'Citizen', 'Full-time', 'Yes', 'B.E', 'QA', 'Yes', NULL),
(15, 'elige.jpg', 'candiresume.pdf', '571-386-4498', 'LasVegas', '7', 'C2C', 'English', 'Yes', 'SQL Engineer', 'SQL Engineer', 'Citizen', 'C2C', 'Yes', 'BSc', 'SQL', 'Yes', NULL),
(16, 'elige.jpg', 'candiresume.pdf', '919-931-6665', 'HollySprings', '3', 'C2C', 'English, Hindi', 'Yes', 'Java Engineer', 'Java Engineer', 'H1', 'C2C', 'Yes', 'B.E', 'Java', 'Yes', NULL);

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
(16, 'Hirak', 'Patel', 'hirakpatel@gmail.com', '$2y$10$yDNm5j.ouo8tpciWmJUT/.ysmGMV7aCigRnoBW.guzYJ/o45JG.tW', 0, 'verified');

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
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `chat_id` int(10) NOT NULL,
  `user` varchar(20) NOT NULL,
  `added_on` varchar(30) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`chat_id`, `user`, `added_on`, `message`) VALUES
(43, 'user', '2022-03-06 11:37:04 AM', 'Hi'),
(44, 'bot', '2022-03-06 11:37:04 AM', 'Hello!'),
(45, 'user', '2022-03-06 11:37:51 AM', 'PHP'),
(46, 'bot', '2022-03-06 11:37:51 AM', 'Kindly fill the required fields\n1) Job-title \n2) Location\n3)Experience  \n4) Shift'),
(47, 'user', '2022-03-06 11:38:10 AM', 'Java developer'),
(48, 'bot', '2022-03-06 11:38:10 AM', 'Please provide (Experience, Location and Shift ) so can be processed further'),
(49, 'user', '2022-03-06 11:41:22 AM', ''),
(50, 'bot', '2022-03-06 11:41:22 AM', ''),
(51, 'user', '2022-03-06 11:41:41 AM', 'PHP'),
(52, 'bot', '2022-03-06 11:41:41 AM', 'Kindly fill the required information\n1) Experience\n2) Location\n3) Shift'),
(53, 'user', '2022-03-06 11:41:59 AM', 'PHP'),
(54, 'bot', '2022-03-06 11:41:59 AM', 'Please provide (Experience, Location and Shift ) so can be processed further'),
(55, 'user', '2022-03-06 11:42:16 AM', 'PHP'),
(56, 'bot', '2022-03-06 11:42:16 AM', 'Kindly fill the required information\n1) Experience\n2) Location\n3) Shift'),
(57, 'user', '2022-03-06 11:42:41 AM', 'PHP'),
(58, 'bot', '2022-03-06 11:42:41 AM', 'Kindly fill the required information\n1) Experience\n2) Location\n3) Shift'),
(59, 'user', '2022-03-06 11:43:14 AM', 'PHP'),
(60, 'bot', '2022-03-06 11:43:14 AM', 'Kindly fill the required information\n1) Experience\n2) Location\n3) Shift'),
(61, 'user', '2022-03-06 11:44:54 AM', 'PHP'),
(62, 'bot', '2022-03-06 11:44:54 AM', 'Array'),
(63, 'bot', '2022-03-06 11:44:54 AM', 'Kindly fill the required information\n1) Experience\n2) Location\n3) Shift'),
(64, 'user', '2022-03-06 11:45:07 AM', ''),
(65, 'bot', '2022-03-06 11:45:07 AM', ''),
(66, 'user', '2022-03-06 11:45:19 AM', 'PHP'),
(67, 'bot', '2022-03-06 11:45:19 AM', 'Array'),
(68, 'bot', '2022-03-06 11:45:19 AM', 'Kindly fill the required information\n1) Experience\n2) Location\n3) Shift'),
(69, 'user', '2022-03-06 11:52:01 AM', '5 year delhi full time'),
(70, 'bot', '2022-03-06 11:52:01 AM', 'Please mention the minimum Experience required'),
(71, 'user', '2022-03-06 11:52:09 AM', '5 year'),
(72, 'bot', '2022-03-06 11:52:09 AM', 'Hey , seems you forgot to mention the required Experience'),
(73, 'user', '2022-03-06 11:52:16 AM', '3 year'),
(74, 'bot', '2022-03-06 11:52:16 AM', 'Do you want to confirm this requirement [Yes/No]'),
(75, 'user', '2022-03-06 11:52:20 AM', 'yes'),
(76, 'bot', '2022-03-06 11:52:20 AM', 'Requirement submitted successfully......'),
(77, 'user', '2022-03-06 11:53:53 AM', 'Hi'),
(78, 'bot', '2022-03-06 11:53:53 AM', 'Hello!'),
(79, 'user', '2022-03-06 11:53:58 AM', 'java developer'),
(80, 'bot', '2022-03-06 11:53:58 AM', 'Kindly fill the required information\n1) Experience\n2) Location\n3) Shift'),
(81, 'user', '2022-03-06 11:54:05 AM', '3 year'),
(82, 'bot', '2022-03-06 11:54:05 AM', 'Kindly fill the required fields\n1) Location\n2)Shift'),
(83, 'user', '2022-03-06 11:54:06 AM', ''),
(84, 'bot', '2022-03-06 11:54:06 AM', 'Kindly fill the required fields\n1) Location\n2)Shift'),
(85, 'user', '2022-03-06 11:54:13 AM', 'mumbai'),
(86, 'bot', '2022-03-06 11:54:13 AM', 'Please mention the work Shift'),
(87, 'user', '2022-03-06 11:54:14 AM', 'mumbai'),
(88, 'bot', '2022-03-06 11:54:14 AM', 'Please mention the work Shift'),
(89, 'user', '2022-03-06 11:54:17 AM', 'full time'),
(90, 'bot', '2022-03-06 11:54:17 AM', 'Do you want to confirm this requirement [Yes/No]'),
(91, 'user', '2022-03-06 11:54:20 AM', 'yes'),
(92, 'bot', '2022-03-06 11:54:20 AM', 'Requirement submitted successfully......'),
(93, 'bot', '2022-03-06 11:54:20 AM', 'Please click on following link to get result for your search : list.php'),
(94, 'user', '2022-03-06 05:45:51 PM', 'Hi'),
(95, 'bot', '2022-03-06 05:45:51 PM', 'Good to see you again!'),
(96, 'user', '2022-03-06 05:45:58 PM', 'php developer'),
(97, 'bot', '2022-03-06 05:45:58 PM', 'Kindly fill the required fields\n1) Job-title \n2) Location\n3)Experience  \n4) Shift'),
(98, 'user', '2022-03-06 05:46:18 PM', 'java developer new york 4 full time'),
(99, 'bot', '2022-03-06 05:46:18 PM', 'Do you want to confirm this requirement [Yes/No]'),
(100, 'user', '2022-03-06 05:46:22 PM', 'yes'),
(101, 'bot', '2022-03-06 05:46:22 PM', 'Requirement submitted successfully......'),
(102, 'bot', '2022-03-06 05:46:22 PM', 'Please click on following link to get result for your search : list.php?'),
(103, 'user', '2022-03-06 05:47:08 PM', 'Hello'),
(104, 'bot', '2022-03-06 05:47:08 PM', 'Hello!'),
(105, 'user', '2022-03-06 05:47:18 PM', 'Java developer'),
(106, 'bot', '2022-03-06 05:47:18 PM', 'Please provide (Experience, Location and Shift ) so can be processed further'),
(107, 'user', '2022-03-06 05:47:19 PM', ''),
(108, 'bot', '2022-03-06 05:47:19 PM', 'Kindly fill the required information\n1) Experience\n2) Location\n3) Shift'),
(109, 'user', '2022-03-06 05:47:22 PM', 'php'),
(110, 'bot', '2022-03-06 05:47:22 PM', 'Please provide (Experience, Location and Shift ) so can be processed further'),
(111, 'user', '2022-03-06 05:47:28 PM', '8 year'),
(112, 'bot', '2022-03-06 05:47:28 PM', 'Please provide (Location , Shift) so can be processed further'),
(113, 'user', '2022-03-06 05:47:35 PM', 'new york'),
(114, 'bot', '2022-03-06 05:47:35 PM', 'Mention the Shift you are looking for the candidates'),
(115, 'user', '2022-03-06 05:47:36 PM', ''),
(116, 'bot', '2022-03-06 05:47:36 PM', 'Please mention the work Shift'),
(117, 'user', '2022-03-06 05:47:38 PM', 'full time'),
(118, 'bot', '2022-03-06 05:47:38 PM', 'Do you want to confirm this requirement [Yes/No]'),
(119, 'user', '2022-03-06 05:47:41 PM', 'yes'),
(120, 'bot', '2022-03-06 05:47:41 PM', 'Requirement submitted successfully......'),
(121, 'bot', '2022-03-06 05:47:41 PM', 'Please click on following link to get result for your search : list.php?'),
(122, 'user', '2022-03-06 05:49:42 PM', 'Hii'),
(123, 'bot', '2022-03-06 05:49:42 PM', 'Kindly fill the required information \n 1) Job Title \n 2) Skill \n 3) Experience \n 4) Location \n 5) Shift \n'),
(124, 'user', '2022-03-06 05:49:42 PM', 'Hii'),
(125, 'bot', '2022-03-06 05:49:42 PM', 'Kindly fill the required information \n 1) Job Title \n 2) Skill \n 3) Experience \n 4) Location \n 5) Shift \n'),
(126, 'user', '2022-03-06 05:49:48 PM', 'java developer'),
(127, 'bot', '2022-03-06 05:49:48 PM', 'Please provide (Experience, Location and Shift ) so can be processed further'),
(128, 'user', '2022-03-06 05:49:54 PM', '4 year'),
(129, 'bot', '2022-03-06 05:49:54 PM', 'Kindly fill the required fields\n1) Location\n2)Shift'),
(130, 'user', '2022-03-06 05:49:59 PM', 'new york'),
(131, 'bot', '2022-03-06 05:49:59 PM', 'Shift is missing'),
(132, 'user', '2022-03-06 05:50:04 PM', 'full time'),
(133, 'bot', '2022-03-06 05:50:04 PM', 'Do you want to confirm this requirement [Yes/No]'),
(134, 'user', '2022-03-06 05:50:08 PM', 'yes'),
(135, 'bot', '2022-03-06 05:50:08 PM', 'Requirement submitted successfully......'),
(136, 'bot', '2022-03-06 05:50:08 PM', 'Please click on following link to get result for your search : list.php?'),
(137, 'user', '2022-03-06 05:51:12 PM', 'Hi'),
(138, 'bot', '2022-03-06 05:51:12 PM', 'Good to see you again!'),
(139, 'user', '2022-03-06 05:51:18 PM', 'java '),
(140, 'bot', '2022-03-06 05:51:18 PM', 'Please provide (Experience , Location , Shift and Job-title) so can be processed further'),
(141, 'user', '2022-03-06 05:51:19 PM', 'java '),
(142, 'bot', '2022-03-06 05:51:19 PM', 'Please provide (Experience , Location , Shift and Job-title) so can be processed further'),
(143, 'user', '2022-03-06 05:51:24 PM', 'new york'),
(144, 'bot', '2022-03-06 05:51:24 PM', 'Please provide (Job title, Experience and Shift ) so can be processed further'),
(145, 'user', '2022-03-06 05:51:28 PM', 'full time'),
(146, 'bot', '2022-03-06 05:51:28 PM', 'Please provide (job-title ,Experience ) so can be processed further'),
(147, 'user', '2022-03-06 05:51:33 PM', '4 '),
(148, 'bot', '2022-03-06 05:51:33 PM', 'please fill the job-title field'),
(149, 'user', '2022-03-06 05:51:36 PM', 'java developer'),
(150, 'bot', '2022-03-06 05:51:36 PM', 'Do you want to confirm this requirement [Yes/No]'),
(151, 'user', '2022-03-06 05:51:38 PM', 'yes'),
(152, 'bot', '2022-03-06 05:51:38 PM', 'Requirement submitted successfully......'),
(153, 'bot', '2022-03-06 05:51:38 PM', 'Please click on following link to get result for your search : list.php?skills=java'),
(154, 'user', '2022-03-06 05:52:45 PM', 'Hi'),
(155, 'bot', '2022-03-06 05:52:45 PM', 'Hello!'),
(156, 'user', '2022-03-06 05:52:52 PM', 'java developer'),
(157, 'bot', '2022-03-06 05:52:52 PM', 'Kindly fill the required information\n1) Experience\n2) Location\n3) Shift'),
(158, 'user', '2022-03-06 05:52:55 PM', '4 year'),
(159, 'bot', '2022-03-06 05:52:55 PM', 'Kindly fill the required fields\n1) Location\n2)Shift'),
(160, 'user', '2022-03-06 05:52:58 PM', 'full-time'),
(161, 'bot', '2022-03-06 05:52:58 PM', 'Please provide (Location , Shift) so can be processed further'),
(162, 'user', '2022-03-06 05:53:06 PM', 'new york'),
(163, 'bot', '2022-03-06 05:53:06 PM', 'Mention the Shift you are looking for the candidates'),
(164, 'user', '2022-03-06 05:53:11 PM', 'full time'),
(165, 'bot', '2022-03-06 05:53:11 PM', 'Do you want to confirm this requirement [Yes/No]'),
(166, 'user', '2022-03-06 05:53:16 PM', 'yes'),
(167, 'bot', '2022-03-06 05:53:16 PM', 'Requirement submitted successfully......'),
(168, 'bot', '2022-03-06 05:53:16 PM', 'Please click on following link to get result for your search : list.php?skills=java&exp=4&location=york'),
(169, 'user', '2022-03-06 05:54:49 PM', 'Hi'),
(170, 'bot', '2022-03-06 05:54:49 PM', 'Hello!'),
(171, 'user', '2022-03-06 05:54:53 PM', 'new york'),
(172, 'bot', '2022-03-06 05:54:53 PM', 'Kindly fill the required fields\n1) Job-title\n2) Skill\n3) Experience\n4) Shift '),
(173, 'user', '2022-03-06 05:54:58 PM', 'java developer'),
(174, 'bot', '2022-03-06 05:54:58 PM', 'Please provide (Experience , Shift) so can be processed further'),
(175, 'user', '2022-03-06 05:55:03 PM', '4'),
(176, 'bot', '2022-03-06 05:55:03 PM', 'Mention the Shift you are looking for the candidates'),
(177, 'user', '2022-03-06 05:55:06 PM', 'full time'),
(178, 'bot', '2022-03-06 05:55:06 PM', 'Do you want to confirm this requirement [Yes/No]'),
(179, 'user', '2022-03-06 05:55:08 PM', 'yes'),
(180, 'bot', '2022-03-06 05:55:08 PM', 'Requirement submitted successfully......'),
(181, 'user', '2022-03-06 05:55:40 PM', 'yes'),
(182, 'bot', '2022-03-06 05:55:40 PM', 'Kindly fill the required information \n 1) Job Title \n 2) Skill \n 3) Experience \n 4) Location \n 5) Shift \n'),
(183, 'user', '2022-03-06 05:55:41 PM', ''),
(184, 'bot', '2022-03-06 05:55:41 PM', 'Kindly fill the required information \n 1) Job Title \n 2) Skill \n 3) Experience \n 4) Location \n 5) Shift \n'),
(185, 'user', '2022-03-06 05:55:47 PM', 'java developer'),
(186, 'bot', '2022-03-06 05:55:47 PM', 'Kindly fill the required information\n1) Experience\n2) Location\n3) Shift'),
(187, 'user', '2022-03-06 05:55:51 PM', ' 4'),
(188, 'bot', '2022-03-06 05:55:51 PM', 'Kindly fill the required fields\n1) Location\n2)Shift'),
(189, 'user', '2022-03-06 05:55:55 PM', 'new york'),
(190, 'bot', '2022-03-06 05:55:55 PM', 'Shift is missing'),
(191, 'user', '2022-03-06 05:55:58 PM', 'full time'),
(192, 'bot', '2022-03-06 05:55:58 PM', 'Do you want to confirm this requirement [Yes/No]'),
(193, 'user', '2022-03-06 05:55:59 PM', 'yes'),
(194, 'bot', '2022-03-06 05:55:59 PM', 'Requirement submitted successfully......'),
(195, 'bot', '2022-03-06 05:55:59 PM', 'Please click on following link to get result for your search : <a href=https://main.solicitous.cloud/Candi/chat/list.php?skills=java&exp=4&location=york>View Now</a>'),
(196, 'user', '2022-03-06 06:57:10 PM', 'Hi'),
(197, 'bot', '2022-03-06 06:57:10 PM', 'Hello!'),
(198, 'user', '2022-03-06 06:57:11 PM', 'Hi'),
(199, 'bot', '2022-03-06 06:57:11 PM', 'Hello!'),
(200, 'user', '2022-03-06 06:57:18 PM', 'Ok'),
(201, 'bot', '2022-03-06 06:57:18 PM', 'Kindly fill the required information \n 1) Job Title \n 2) Skill \n 3) Experience \n 4) Location \n 5) Shift \n'),
(202, 'user', '2022-03-13 03:24:32 PM', 'HI'),
(203, 'bot', '2022-03-13 03:24:32 PM', '');

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
(1, 1, 'In Progress', 'seen', '2022-01-24', '12:00 pm - 01:00 pm', '04:00 pm - 04:30 pm', '06:00 pm - 07:30 pm', '3 pm - 4 pm', '', '', '', '', '', '', '', '', ''),
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
(27, 16, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

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
(15, 0, 'CodeIgniter Developer', 'ciadmin@infosys.com', 'California', 'CodeIgnitor Developer with 0-2 years of experience', 'HTML, CSS, PHP', 'Full Time', 'Annually', 'Yes', '2022-01-17', '2022-01-31', '2', 'Active'),
(16, 19, 'Wordpress Developer', 'admin@gmail.com', 'Boston, Massachusetts', 'Wordpress Developer who can make professional websites ', 'HTML, CSS, PHP, MySQL', 'Full Time', 'Hourly', 'No', '2022-01-11', '2022-12-10', '3', 'Active'),
(17, 0, 'Angular Web Developer', 'angularadmin@gmail.com', 'New York City', 'Angular Web developer with 2-5 years of experience and can make dynamic web pages with fast pace', 'HTML, CSS, JavaScript, Angular, ', 'Full-time', 'Anually', 'No', '2022-01-17', '2022-12-31', '2', 'Active'),
(18, 0, 'Javascript Developer', 'jsadmin@gmail.com', 'Louisville, Kentucky', 'Writing javascript code to add functionality to static HTML pages', 'HTML, CSS, JavaScript, ', 'Part-time', 'Hourly', 'No', '2022-01-17', '2022-01-31', '3', 'Active'),
(19, 0, 'Ruby Developer', 'rubyadmin@gmail.com', 'Boston, Massachusetts', 'Ruby Developer', 'HTML, CSS, JavaScript, Ruby', 'Full Time', 'Annually', 'Yes', '2022-01-19', '2022-02-19', '5', 'Active'),
(20, 9, 'PHP Developer', 'admin@gmail.com', 'Pune', 'PHP dev', 'HTML, CSS, JavaScript, PHP, MySQL', 'Full Time', 'Annually', 'No', '2022-01-18', '2022-01-21', '5', 'Expired'),
(22, 9, 'Java Developers', 'javacandi@gmaill.com', 'New York', 'Skilled java developers with atleast 2 years of experience', 'Java', 'C2C', 'C2C', 'Yes', '2022-01-26', '2022-12-31', '5', 'Active'),
(23, 14, 'Azure Data Engineer', 'azure@gmail.com', 'Birmingham', 'Azure Data Engineer required', 'Azure', 'Full-time', 'C2C', 'No', '2022-1-26', '2022-12-31', '1', 'Active'),
(24, 14, 'Cloud Engineer', 'cloud@gmail.com', 'Columbus', 'Cloud  Engineer required', 'Cloud', 'Full-time', 'C2C', 'No', '2022-1-26', '2022-12-31', '1', 'Active'),
(25, 14, 'QA Testing Engineer', 'qatesting@gmail.com', 'NewYork', 'QA  Engineer required', 'QA', 'Full-time', 'C2C', 'No', '2022-1-26', '2022-12-31', '1', 'Active'),
(26, 14, 'SQL Engineer', 'sql@gmail.com', 'LasVegas', 'SQL  Engineer required', 'SQL', 'C2C', 'C2C', 'No', '2022-1-26', '2022-12-31', '1', 'Active'),
(27, 14, 'Java Engineer', 'java@gmail.com', 'HollySprings', 'Java  Engineer required', 'Java', 'C2C', 'C2C', 'No', '2022-1-26', '2022-12-31', '1', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `candidate_interview`
--
ALTER TABLE `candidate_interview`
  ADD PRIMARY KEY (`interview_id`);

--
-- Indexes for table `candidate_profile`
--
ALTER TABLE `candidate_profile`
  ADD PRIMARY KEY (`candidate_id`),
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
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chat_id`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `candidate_interview`
--
ALTER TABLE `candidate_interview`
  MODIFY `interview_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `candidate_profile`
--
ALTER TABLE `candidate_profile`
  MODIFY `candidate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `candidate_register`
--
ALTER TABLE `candidate_register`
  MODIFY `candidate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `chat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
