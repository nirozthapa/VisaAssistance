-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 17, 2020 at 10:23 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `Announcement`
--

CREATE TABLE `Announcement` (
  `id` int(11) NOT NULL,
  `AnouncementType` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Announcement`
--

INSERT INTO `Announcement` (`id`, `AnouncementType`) VALUES
(1, 'Hello, Please wait for our future announcement.');

-- --------------------------------------------------------

--
-- Table structure for table `answer_options`
--

CREATE TABLE `answer_options` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer_option` text NOT NULL,
  `answer_weight` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answer_options`
--

INSERT INTO `answer_options` (`id`, `question_id`, `answer_option`, `answer_weight`, `status`) VALUES
(1, 1, 'Skilled Independent 189 visa (permanent) - skilled workers who are not sponsored by an employer or family member or nominated by a state or territory government.- Your occupation must be on the 189 visa list', 0, 1),
(2, 1, 'Skilled Nominated 190 visa (permanent) - allows skilled workers who are nominated by an Australian state or territory government live and work in Australia as a permanent resident. Your occupation must be on the 190 visa list', 5, 1),
(3, 1, 'Skilled Work Regional 491 visa (Provisional) - requires sponsorship by a relative living in a regional area or a state or territory government. For further details see the 491 visa page', 15, 1),
(4, 2, '18-24', 25, 1),
(5, 2, '25-32', 30, 1),
(6, 2, '33-39', 25, 1),
(7, 2, '40-44', 15, 1),
(8, 3, 'Competent English:\r\nPassport from UK, USA, Ireland, Canada or NZ; or\r\nIELTS: 6+ in each component; or\r\nPTE Academic: 50+ in each component; or\r\nCambridge (CAE): 169+ in each component; or\r\nTOEFL iBT: 12 in Listening, 13 Reading, 21 Writing, 18 Speaking', 0, 1),
(9, 3, 'Proficient English:\r\nIELTS: 7+ in each component; or\r\nOET: B pass in each component; or\r\nPTE Academic: 65+ in each component; or\r\nCambridge (CAE): 185+ in each component; or\r\nTOEFL iBT: 24 in Listening, 24 Reading, 27 Writing, 23 Speaking', 10, 1),
(10, 3, 'Superior English:\r\nIELTS: 8+ in each component; or\r\nOET: A pass in each component; or\r\nPTE Academic: 79+ in each component; or\r\nCambridge (CAE): 200+ in each component; or\r\nTOEFL iBT: 28 in Listening, 29 Reading, 30 Writing, 26 Speaking', 20, 1),
(11, 4, 'Yes: Degree, diploma advanced diploma or trade qualification(s) taking at least 2 years of full-time study in Australia.', 5, 1),
(12, 4, 'No', 0, 1),
(13, 5, 'Recognised PhD (Doctorate) or Masters (Research)', 20, 1),
(14, 5, 'Recognised Bachelor degree or Masters', 15, 1),
(15, 5, 'Recognised Trade Qualification including\r\nDiploma or Trade Certificate completed at an Australian educational institution\r\nOther award or qualification recognised by the skills assessing authority', 10, 1),
(16, 5, 'No Recognised Qualifications', 0, 1),
(17, 6, '8 Years or more', 15, 1),
(18, 6, '5 Years or more', 10, 1),
(19, 6, '3 Years or more', 5, 1),
(20, 6, 'Less than 3 Years', 0, 1),
(21, 7, '8 Years or more', 20, 1),
(22, 7, '5 Years or more', 15, 1),
(23, 7, '3 Years or more', 10, 1),
(24, 7, '1 Year or more', 5, 1),
(25, 7, 'Less than a year', 0, 1),
(26, 8, 'My partner has a skills assessment in an occupation on the applicable list and has competent English.', 10, 1),
(27, 8, 'My partner has competent English ability (IELTS 6 or equivalent)', 5, 1),
(28, 8, 'My partner does not have a skills assessment and cannot get competent English', 0, 1),
(29, 8, 'I am single', 10, 1),
(30, 9, 'You have been accredited at the paraprofessional level or above, certified at the certified provisional level or above, or have a community language credential for interpreting or translating by the National Accreditation Authority for Translators and Interpreters', 5, 1),
(31, 9, 'No', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `descriptions` text NOT NULL,
  `eligible_min_points` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `shortDescription` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `descriptions`, `eligible_min_points`, `status`, `shortDescription`) VALUES
(1, 'Student', 'The aim of the Student Visa is to enable international students in Australia to pursue full time education and development. This visa requires a student to remain for the period of the respective course in Australia. Before submitting a visa application, the applicant must apply, or in certain cases have a \r\nletter of invitation, with an Australianeducational provider.  <br /><br />\r\n<h3><b>Student visa (500 subclass): </h3></b>\r\nStay: Temporary</br>\r\nCost: $650</br>\r\n\r\n<h3><b>TR after student visa: </h3></b>\r\nTEMPORARY: </h3></b>\r\nStay: Temporary</br>\r\nCost: $650</br>\r\nEligibilities as follows: <br />\r\n• Enroll as a full-time student with an Australian educational provider and <br />\r\nreceive written consent of enrollment (mostly online courses are not able to register)\r\n• Genuinely plan to undertake the appropriate study period in Australia <br />\r\n• have the requisite level of English language skills, unless exempted <br />\r\n• provide Overseas Student Health Cover (OSHC) for the duration of your stay in Australia.<br />\r\n• Have access to reliable funding to support your return flight costs, university fees and <br />\r\nliving costs in Australia, and also the expenses of any dependent included in your submission.\r\nThe total amount of funds needed by a student is calculated by the Department of Home \r\nAffairs (DOHA) and is defined by your chosen educator, your study course, and other individ\r\nual circumstances. <br />\r\nFor more info <br />\r\nplease contact us.<br />', 11, 1, 'Want to start with Student Visa?'),
(2, 'Partner Visa', '<h3> PARTNER VISA SUBCLASS 820 AND 801</h3>\r\nThe visa subclass in this page contains two visa subclasses for Partner or spouse to migrate in\r\nAustralia permanent (visa subclass 801) and temporary (visa subclass 820).Please check below details for better understanding of your eligibility to apply for specific visa for your partner:\r\n<h3><b>PARTNER VISA subclass 820 TEMPORARY: </h3></b>\r\nStay: Temporary</br>\r\nCost: $1500</br>\r\n(Applicant will pay temporary and permeant visa at the same time) </br>\r\nTime of process: 21 months for 75% applications\r\n28 months for 90% applications\r\n<h4><b>With this visa subclass 820 the Partner can: </h4></b>\r\n•	This visa is the first step to get a permanent partner visa subclass 801. </br>\r\n•	820 visa allows the de facto spouse or partner of an Australian permanent resident or</br>\r\n•	a citizen of Australia or New Zealand citizen lives in Australia on temporarily basis. </br>\r\n•	Can work, study and live in Australia when the immigration department is processing your visa subclass 801</br>\r\n•	Multiple travel from and to Australia you wanted Can attend English Language class which are provided by Adult Migration English program (an authorized course by the government of Australia) for free of cost. </br>\r\n\r\n<h4><b>Eligibility for visa 820: </h4></b>\r\n•	Applicant must be in Australia when apply for this visa, Family who belong to this\r\napplication (spouse) must be in Australia too. </br>\r\n•	Applicant must be in a genuine relationship with her/his spouse. </br>\r\n<h3><b>Useful links: </h3></b>\r\n<a href=\"https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/partner-onshore/temporary-820#Eligibility \">Visit here</a> or check below brief eligibility or “CONTACT US” </br>\r\n\r\n<h3> PARTNER VISA subclass 801 PERMANENT: </h3>\r\n\r\nStay: Permanent</br>\r\nCost: $1500</br>\r\n(Applicant paid when applied for visa subclass 820)</br>\r\nTime of process: 10 months for 75% applications</br>\r\n                19 months for 90% applications\r\n<h4>With this visa subclass 801 the Partner can:</h4>\r\n•	Can work, study and live in Australia permanently</br>\r\n•	Can sponsor family members who are eligible to migrate in Australia</br>\r\n•	Can apply for an Australian Citizenship when or if eligible</br>\r\n<h4>Eligibility for visa 801</h4>:\r\n•	You must hold visa subclass 820 (temporary partner visa)</br>\r\n•	Continue to be in de facto or marriage relationship with the sponsor in many cases.\r\n<h4>Useful links:</h4>\r\n<a href=\"https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/partner-onshore/permanent-801#Eligibility%3EVisithere%3C/a\">Visit here</a> or check below brief eligibility or “CONTACT US” </br>\r\n\r\n\r\n\r\n\r\n\r\n', 12, 1, 'Want to start with Partner Visa?'),
(3, 'Working Visa', '* do short-term work in Australia to help pay for your holidayc\r\n* study for up to 4 months<br />\r\n* travel to and from Australia as many times as you want<br />\r\n* do 3 months of specified work to become eligible for a second Working Holiday visa\r\n\r\n<h3> WORKING HOLIDAY VISA 417</h3></br>\r\nStay: 1 year</br>\r\nCost: $600</br>\r\nTime for processing: 39 days: 75% application</br>\r\n77 days: 90% application</br>\r\n\r\n<h4><b>With this visa the applicant can: </h4></b>\r\n•	Can work short-term within Australia which can help pay of applicant’s holiday</br>\r\n•	Can study up to four months</br>\r\n•	Can work three months of work options</br>\r\n•	(https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/work-holiday</br>\r\n•	417/specified work) to be eligible to apply for a Second Working Holiday visa. </br>\r\n•	Can travel from and to Australia multiple times when wanted to</br></br>\r\n<h4><b>Eligibility for visa: </h4></b>\r\n•	Having a passport from jurisdiction or an eligible country <a href=”\r\nhttps://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/work-holiday-417/first-\r\nworking-holiday-417#Eligibility)”>Visit here</a></br>\r\n•	Be the age of 18 to 30 years old- Canadian exception, and Irish and French citizens 18 to 35years old (inclusive) </br>\r\n•	Is not accompanied by children independent</br>\r\n•	Online application, not within Australia Is not had entered in Australia previously on Visa 462 or 417. Check the page of Second Working Holiday Visa page, if you been in Australia on visa subclass 417, </br>\r\n\r\n<h4><b>Useful links: <h4><b>\r\n<a href=”https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/work-holiday-417/first-working-holiday-417#Eligibility” >Visit here</a>\r\nclick on CONTACT US to apply for this visa.\r\n', 13, 1, 'Want to start with Working Visa?'),
(4, 'Family Visa', '<h3> FAMILY VISA INCLUDES: </h3>\r\n1) <b>SUBCLASS 101 AND 802 CHILD<b></br>\r\n2) <b>SUBCLASS 103 PARENT, CONTRIBUTORY PARENT 173, 143, AGED PARENT VISA 804, CONTRIBUTORY AGED PARENT VISA 884, 864<b></br></br></br>\r\n <h3><b><p>Child visa 101</p></b></h3></br>\r\nStay: permanently</br>\r\nCost: $2200</br></br>\r\n<h4><b>With this visa the child can:</b></h4>\r\n•  Migrate as a permanent resident into Australia</br>\r\n•  Medicare\" access and can Study</br>\r\n•  If eligible, apply for Australian citizenship</br>\r\n•  Sponsoring families moving to Australia</br>\r\n•  Australian works and study</br>\r\n•  Five years\' travel from and to Australia</br></br>\r\n<h4><b>Eligibility for visa 101: </b></h4>\r\n•  Be an Australian parent\'s (a person who holds Australian citizenship) dependent child,\r\nan entitled New Zealand citizen or an Australian permanent visa holder. </br>\r\n•  A fulltime student over 18 years of age and under 25 years of age who is financially\r\ndependent on a parent or more than 18 years of age and is unable to function due to a disability dependent on parent and single</br>\r\n•  be out and about Australia when the application is filed and when government make\r\na decision on the request. </br></br>\r\n\r\n\r\n\r\n<h3><b><p>CHILD VISA 802</p></b></h3></br>\r\nStay: permanently</br>\r\nCost: $2200</br></br>\r\nProcessing time: 75% of application: 15 months</br>\r\n90% of application: 17 months</br>\r\n<h4><b>With this visa, child can:</b></h4\r\n•  Migrate as a permanent resident into Australia</br>\r\n•  \"Medicare\" access and can Study</br>\r\n•  If eligible, apply for Australian citizenship</br>\r\n•  The child must be in Australia</br></br>\r\n<h4><b>The child must: </b></h4>\r\n•  Be an Australian parent\'s (a person who holds Australian citizenship) dependent child,\r\nan entitled New Zealand citizen or an Australian permanent visa holder. </br>\r\n•  A fulltime student over 18 years of age and under 25 years of age who is financially\r\ndependent on a parent or more than 18 years of age and is unable to function due to a disability dependent on parent and single</br>\r\n•  be out and about Australia when the application is filed and when government make\r\na decision on the request</br>\r\n•  You must apply for this visa on paper form</br>\r\n•  A qualified parent has to sponsor the child. </br></br>\r\n\r\n<h3><b><p>PARENT VISA SUBCLASS 103</p></b></h3></br>\r\nStay: permanently</br>\r\nCost: $2000</br>\r\nProcessing time: Not available for this visa currently</br></br>\r\n<h4><b>After getting this visa, you can: </h4>\r\nStay or move to Australia as a PR</br>\r\nCan sponsor family members who are eligible, to come to Australia</br>\r\nCan apply for Australian citizenship, if you are eligible</br>\r\n\r\nCheck your full eligibility here: <a href=\" https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/parent-103#Eligibility Visit here</a>OR look below for brief eligibility OR “Contact us” </br>\r\n\r\nsee all conditions here:<a href=\"https://immi.homeaffairs.gov.au/visas/already-have-a-visa/check-visa-details-and-conditions/see-your-visa-conditions?product=103 \">Visit here</a> or “CONTACT US” </br>\r\n\r\nsee all conditions here:<a href=\"https://immi.homeaffairs.gov.au/visas/already-have-a-visa/check-visa-details-and-conditions/see-your-visa-conditions?product=103 \">Visit here</a> or “CONTACT US” </br>\r\n\r\n<h4><b>Eligibility: </b></h4>\r\n\r\n•  be out and about Australia when we determine whether to qualify</br>\r\n•  Have a child who is a stable Australian citizen, a permanent Australian\r\nresident or an entitled New Zealand citizen</br>\r\n•  Comply with all applicable visa requirements, and follow Australian legislation</br>\r\n•  Do not have a Temporary Parent (Subclass 870) visa when applying for the visa</br></br>\r\n\r\n\r\n<h3><b><p>CONTRIBUTORY PARENT(TEMPORARY) VISA SUBCLASS 173</p></b></h3></br>\r\nStay: 2 years</br>\r\nCost: $$24,000</br>\r\nProcessing time: not available for this visa currently</br>\r\n<h4><b>After getting this visa you can:</b></h4>\r\n•  Live in Australia for 2 years</br>\r\n•  Study and work in Australia (as you will not get any support from the Government of Australia) </br>\r\n•  Can apply for a permanent contributory parent visa subclass 143</br>\r\nCheck your availability here <a href=\"https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/contributory-parent-143 \">Visit here</a> or “CONTACT US” </br>\r\nSee all conditions here <a href= “ https://immi.homeaffairs.gov.au/visas/already-have-a-visa/check-visa-details-and-conditions/see-your-visa-conditions?product=173 \">Visit here</a> or “CONTACT US” </br>\r\nCHECK FULL ELIGIBILITY HERE <a href=\" https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/contributory-parent-temporary-173#Eligibility \">Visit here</a>  OR LOOK BELOW FOR BRIEF KNOWLEDGE OR “CONTACT US” </br>\r\n<h4><b>Eligibility:</b></h4>\r\n•  Be sponsored by a child who is a stable Australian citizen, a permanent Australian\r\nresident or an entitled New Zealand citizen</br>\r\n•  Comply with all applicable visa requirements, and follow Australian legislation</br>\r\n•  Meet family balance test</br>\r\nNot having a visa sponsored parent (temporary-870 subclass) when you apply to this visa</br></br>\r\n\r\n\r\n<h3><b><p>CONTRIBUTORY AGED PARENT VISA 884 (TEMPORARY) </p></b></h3></br>\r\nStay: 2 years</br>\r\nCost: $15,000</br>\r\nProcessing time: not available for this visa currently</br>\r\n<h4><b>After getting this visa, you can:</b></h4>\r\nLive in Australia for 2 years</br>\r\nStudy and work in Australia (as you will not get any support from the Government of Australia) </br>\r\nCan apply for a permanent contributory aged parent visa subclass 864</br>\r\nCheck your eligibility for visa subclass 864 here<a href=\"  https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/contributory-aged-parent-864 \">Visit here</a> or “CONTACT US” </br>\r\nSee full conditions here <a href=\" https://immi.homeaffairs.gov.au/visas/already-have-a-visa/check-visa-details-and-conditions/see-your-visa-conditions?product=884 \">Visit here</a> or “CONTACT US” </br>\r\nCheck your full eligibility here <a href=\" https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/contributory-aged-parent-temporary-884#Eligibility \">Visit here</a> or check below brief eligibility or “CONTACT US” </br>\r\n\r\n<h4><b>Eligibility:</b></h4>\r\n•	Be in Australia once you apply for a visa and when we determine on your application, but not in immigration clearance</br>\r\n•	Be sponsored by a child who is a stable Australian citizen, a permanent Australian resident or an entitled New Zealand citizen. </br>\r\n•	Be aged enough to collect Australian age pension. </br>\r\n•	Do not have a sponsored Parent temporary (Subclass 870) visa when applying for the visa. </br>\r\n\r\n', 13, 1, 'Want to start with Family Visa?'),
(5, 'Skilled Visa', '\r\nTEMPORARY: </h3></b>\r\nStay: Temporary</br>\r\nCost: $3200</br>', 14, 1, 'Want to start with Skilled Visa?'),
(6, 'Special Announcement', 'Sorry, please wait for the announcement.\nwe don\'t have any announcement yet.', 1, 1, 'Check for special announcement');

-- --------------------------------------------------------

--
-- Table structure for table `CustomerQuery`
--

CREATE TABLE `CustomerQuery` (
  `CustomerName` varchar(255) DEFAULT NULL,
  `Email` varchar(255) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `Message` varchar(255) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `CustomerQuery`
--

INSERT INTO `CustomerQuery` (`CustomerName`, `Email`, `Subject`, `Message`, `id`) VALUES
('Niroj Thapa', 'nirozthapa556@gmail.com', 'dgdfgdfg', 'fsgdfgdfgdfgdfsdfgsd', 1),
('Niroj Thapa', 'nirozthapa556@gmail.com', 'dgdfgdfg', 'fsgdfgdfgdfgdfsdfgsd', 2),
('Niroj Thapa', 'nirozthapa556@gmail.com', 'asdsdgsdgsdgsd', 'asdfafasf', 3),
('Niroj Thapa', 'nirozthapa556@gmail.com', 'i don;t know', 'sdfgsdgsdg', 4),
('Niroj Thapa', 'nirozthapa556@gmail.com', 'i don;t know', 'npjpoihpiohpi', 5),
('Niroj Thapa', 'nirozthapa556@gmail.com', 'i don;t know', 'sgsdgsd', 6),
('Niroj Thapa', 'nirozthapa556@gmail.com', 'i don;t know', 'jglglgligliglglg', 7),
('Niroj Thapa', 'nirozthapa556@gmail.com', 'i don;t know', 'asdsadasdasdasd', 8),
('Niroj Thapa', 'nirozthapa556@gmail.com', 'i don;t know', 'asdsadasdasdasd', 9),
('Niroj Thapa', 'nirozthapa556@gmail.com', 'i don;t know', 'hfoiasfoashfoiashfopiashfoiashfi', 10),
('Niroj Thapa', 'nirozthapa556@gmail.com', 'i don;t know', 'hfoiasfoashfoiashfopiashfoiashfi', 11),
('Niroj Thapa', 'nirozthapa556@gmail.com', 'sadasfasfas', 'safasfasfasf', 12),
('Niroj Thapa', 'nirozthapa556@gmail.com', 'sadasfasfas', 'safasfasfasf', 13),
('Niroj Thapa', 'lucia.gordon@atmc.edu.au', 'assafasfasf', 'asfasfasfasfas', 14),
('Niroj Thapa', 'lucia.gordon@atmc.edu.au', 'assafasfasf', 'asfasfasfasfas', 15);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `status` int(11) NOT NULL,
  `html_form_option` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `category_id`, `question`, `status`, `html_form_option`) VALUES
(1, 5, 'Which of the following subclasses are you applying for?', 1, 'radio'),
(2, 5, 'Which age band do you fit into?', 2, 'radio'),
(3, 5, 'How would you rate your English language ability?', 3, 'radio'),
(4, 5, 'Have you studied in Australia for at least 2 years (92 weeks) which resulted in a degree, diploma, advanced diploma or trade qualification(s) relevant to your nominated occupation?', 4, 'radio'),
(5, 5, 'What is your highest Qualification?', 5, 'radio'),
(6, 5, 'In the last 10 years, how long have you worked (overseas) in your nominated occupation or closely related occupation:', 9, 'radio'),
(7, 5, 'In Australia, in the last 10 years, how long have you worked in your nominated occupation or closely related occupation:', 1, 'radio'),
(8, 5, 'Check any boxes which apply to your partner or spouse', 1, 'radio'),
(9, 5, 'Do any of the following apply to you?', 1, 'radio');

-- --------------------------------------------------------

--
-- Table structure for table `Suscribers`
--

CREATE TABLE `Suscribers` (
  `CustomerEmail` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Suscribers`
--

INSERT INTO `Suscribers` (`CustomerEmail`, `id`) VALUES
('nirozthapa556@gmail.com', 1),
('nirozthapa556@gmail.com', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Announcement`
--
ALTER TABLE `Announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `CustomerQuery`
--
ALTER TABLE `CustomerQuery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Suscribers`
--
ALTER TABLE `Suscribers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Announcement`
--
ALTER TABLE `Announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `CustomerQuery`
--
ALTER TABLE `CustomerQuery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `Suscribers`
--
ALTER TABLE `Suscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
