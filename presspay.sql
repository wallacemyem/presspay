-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.38-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table presspay.tbl_admin
DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `last_seen` datetime DEFAULT NULL,
  `ip_address` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `level` int(11) NOT NULL DEFAULT '0',
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dob` date DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table presspay.tbl_admin: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_admin` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_admin` ENABLE KEYS */;

-- Dumping structure for table presspay.tbl_cms
DROP TABLE IF EXISTS `tbl_cms`;
CREATE TABLE IF NOT EXISTS `tbl_cms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `sub_name` varchar(100) DEFAULT NULL,
  `value` text NOT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

-- Dumping data for table presspay.tbl_cms: ~9 rows (approximately)
/*!40000 ALTER TABLE `tbl_cms` DISABLE KEYS */;
INSERT INTO `tbl_cms` (`id`, `name`, `sub_name`, `value`, `icon`, `created_date`, `last_updated`) VALUES
	(34, 'why', 'Easy Access', 'We offer you student loan as against what is obtainable with other financial institutions and platforms', 'onboard.svg', '2021-06-12 23:32:05', '2021-06-12 23:32:05'),
	(35, 'why', 'Fee Co-Funding', 'We co-fund your tuition year after year till you graduate', 'credit.svg', '2021-06-12 23:32:05', '2021-06-12 23:32:05'),
	(36, 'why', 'Flexible Loans', 'Flexible student loan application and repayment process.', 'collateral.svg', '2021-06-12 23:32:05', '2021-06-12 23:32:05'),
	(37, 'why', 'Scholarships', 'Enjoy our scholarship pop-ups and education grants ', 'cc.svg', '2021-06-12 23:32:05', '2021-06-12 23:32:05'),
	(38, 'why', 'Moderate Interest', 'We offer you student loan at a moderate interest rate', 'flexible.svg', '2021-06-12 23:32:05', '2021-06-12 23:32:05'),
	(39, 'why', 'Make Money', 'Make money while looking for money; income opportunities from referrals', 'credit.svg', '2021-06-12 23:32:05', '2021-06-12 23:32:05'),
	(40, 'feed', 'Angela Philips', 'Easy and simple to use. Great job!', 'f1.png', '2021-06-12 23:32:05', '2021-06-12 23:32:05'),
	(41, 'feed', 'John Doe', 'This is a good innovation', 'f2.png', '2021-06-12 23:32:05', '2021-06-12 23:32:05'),
	(42, 'feed', 'Smart John', 'This will go a long way in helping several students complete their education', 'f3.png', '2021-06-12 23:32:05', '2021-06-12 23:32:05');
/*!40000 ALTER TABLE `tbl_cms` ENABLE KEYS */;

-- Dumping structure for table presspay.tbl_faqs
DROP TABLE IF EXISTS `tbl_faqs`;
CREATE TABLE IF NOT EXISTS `tbl_faqs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `descr` text NOT NULL,
  `type` enum('student','uni','model','phil') NOT NULL DEFAULT 'student',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table presspay.tbl_faqs: ~36 rows (approximately)
/*!40000 ALTER TABLE `tbl_faqs` DISABLE KEYS */;
INSERT INTO `tbl_faqs` (`id`, `title`, `descr`, `type`) VALUES
	(1, 'How do I apply for a loan or co-funding?', 'You can apply for a loan or co-funding by following the steps below \r\n\r\nSTEP 1: Download the PressPayNG app on your google play store or app store.\r\nSTEP 2: OPEN THE APP, REGISTER AND APPLY', 'student'),
	(2, 'Do I need to be admitted before I can apply for the loan at a particular university?', 'Yes, you do. for fresh students, you must have paid you acceptance fee to be eligible for the loan', 'student'),
	(3, 'What are the basic requirements for the co-founding', '1. Register on the platform with accurate information\r\n2. On-board with a Sponsor\r\n3.  On-board with 2 Academic Role Models (Lecturers)', 'student'),
	(4, 'Why should I summit my school record?', 'Your school record is part of our KYC requirements', 'student'),
	(5, 'Do I have to reapply for the loan every year?', 'Yes', 'student'),
	(6, 'How much am I entitled to and for how long?', 'You are entitled to up to 50% of your tuition fee', 'student'),
	(7, 'Can I apply for an amount higher than what am shown?', 'The amount you are shown is based on your school tuition fee', 'student'),
	(8, 'How does your savings work?', 'We have different savings plan and offer, register or log into the PressPayNG app if you are already an existing user to see which is suitable for you.', 'student'),
	(9, 'Do I need to provide collateral to request for co-funding or a loan?', 'No, you do not need to provide a collateral', 'student'),
	(10, 'Can I request and access PressPayNG services anywhere in Nigeria?', 'PressPayNG app is available and accessible everywhere in Nigeria.', 'student'),
	(11, 'I have shared all information required, when am I granted my request?', 'You can get credited in 48 hours and commence your savings to balance up the payment of your tuition', 'student'),
	(12, 'What happens when a student default?', 'PressPayNg has an arrangement with the school to deal with issues of default', 'student'),
	(13, 'How can I keep records of my savings and loans?', 'The PressPayNG app enables you to track your financial records, statements, receipts and deposit', 'student'),
	(14, 'Do I need to summit my bank details?', 'Yes, there is a need for your bank details as part of the onboarding process', 'student'),
	(15, 'How do I earn rewards?', 'You earn rewards by referral bonus', 'student'),
	(16, 'Why do parents or guardians have to provide their information if the child is 18 years old?', 'It\'s part of the application requirements and KYC ', 'student'),
	(17, 'Are there other extra or hidden charges to getting co-fund loan from PressPayNG?', 'Yes, just a moderate interest rate with admin charges', 'student'),
	(18, 'What is your policy towards renewing your contract with PressPayNg?', 'Zero outstanding debt or default ', 'student'),
	(19, 'What is your policy towards terminating your contract with PressPayNg?', 'Please check our terms and conditions', 'student'),
	(20, 'What are your options on how to repay a loan?', 'You can visit the PressPayNG website or log into the app to see the repayment plans.', 'student'),
	(21, 'How is the co-funding or loan sent?', 'The co-funding or loan is payed directly into the institution account on behalf of the student', 'student'),
	(22, 'What if I had an income reduction or lost my job after filling and summitting my Childs co-funding or loan request?', 'Please reach out to our customer care', 'student'),
	(23, 'What is the role of the institution?', 'To provide institutional support for co-funding the tuition of their students', 'uni'),
	(24, 'How can we get affiliated?', 'An institution can get affiliated by onboarding the app and also liaising with our customer care.', 'uni'),
	(25, 'How do we upload students records?', 'Student records can be uploaded through the PressPayNG app', 'uni'),
	(26, 'How will expressions of interest be assessed?', 'By engaging our customer care team', 'uni'),
	(27, 'Who is an academic role model? ', 'An academic role model is a person who a student looks up to academically to help attain academic goals and achievement', 'model'),
	(28, 'How many academic role models are required to facilitate tuition loan?', 'Two', 'model'),
	(29, 'What is required of me?', 'To confirm that you are aware of the student’s application for loan and would provided the needed support in facilitating the loan and its repayment', 'model'),
	(30, 'What document do I need to provide?', 'Personal information', 'model'),
	(31, 'Do I need to provide my financial statement?', 'No', 'model'),
	(32, 'Are my bank details required?', 'No', 'model'),
	(33, 'What are the associated risks of being an academic role model to an applicant?', 'The basic requirement to become an academic role model are:\r\n1. Must be an academic member of staff in the same institution of the applicant', 'model'),
	(34, 'How do I stop being an academic role model?', 'You can stop being an academic role model by informing the student and a change is effected on the student’s profile', 'model'),
	(35, 'Can I be an academic role model for more than one person?', 'YES, you can!', 'model'),
	(36, 'How do I sponsor students on your platform?', 'Ask the student to download and register on the app. A tuition savings/payment link can be generated by the applicant and sent to you to credit the app directly as against giving the student cash or crediting personal accounts. you can bank on PressPayNG to ensure that all donations to a student will be credited to the institution directly.\r\n  \r\nPressPayNG bridges the trust deficit between students and philanthropist/sponsor. no scam, no games, no diversion of fund. we fund the future', 'phil');
/*!40000 ALTER TABLE `tbl_faqs` ENABLE KEYS */;

-- Dumping structure for table presspay.tbl_gallery
DROP TABLE IF EXISTS `tbl_gallery`;
CREATE TABLE IF NOT EXISTS `tbl_gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `descr` text NOT NULL,
  `image` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table presspay.tbl_gallery: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_gallery` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_gallery` ENABLE KEYS */;

-- Dumping structure for table presspay.tbl_payments
DROP TABLE IF EXISTS `tbl_payments`;
CREATE TABLE IF NOT EXISTS `tbl_payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount_paid` float NOT NULL,
  `total_amount` float NOT NULL,
  `course_id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `reference_no` varchar(100) NOT NULL,
  `paid_by` varchar(100) NOT NULL,
  `note` text NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(100) NOT NULL,
  `uid` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `course_id` (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table presspay.tbl_payments: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_payments` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_payments` ENABLE KEYS */;

-- Dumping structure for table presspay.tbl_referal
DROP TABLE IF EXISTS `tbl_referal`;
CREATE TABLE IF NOT EXISTS `tbl_referal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rname` varchar(200) NOT NULL,
  `remail` varchar(100) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `femail` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table presspay.tbl_referal: ~5 rows (approximately)
/*!40000 ALTER TABLE `tbl_referal` DISABLE KEYS */;
INSERT INTO `tbl_referal` (`id`, `rname`, `remail`, `fname`, `femail`, `created_date`) VALUES
	(2, 'Timothy Afolabi', 'timothy.programmer@gmail.com', 'Timothy', 'test@test.com', '2021-06-29 11:37:30'),
	(3, 'Timothy Afolabi', 'timothy.programmer@gmail.com', 'Timothy', 'test@test.com', '2021-06-29 11:50:57'),
	(4, 'Timothy Afolabi', 'timothy.programmer@gmail.com', 'Timothy', 'tumim@hotmail.co.uk', '2021-07-07 10:20:48'),
	(5, 'Mary Shadrack', 'mary@gmail.com', 'Timothy Afolabi', 'timothy.programmer@gmail.com', '2021-07-07 10:25:33'),
	(6, '', 'mary@gmail.com', 'Timothy Afolabi', 'timothy@gmai.co', '2021-07-07 23:50:57');
/*!40000 ALTER TABLE `tbl_referal` ENABLE KEYS */;

-- Dumping structure for table presspay.tbl_reset
DROP TABLE IF EXISTS `tbl_reset`;
CREATE TABLE IF NOT EXISTS `tbl_reset` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `code` varchar(6) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table presspay.tbl_reset: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_reset` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_reset` ENABLE KEYS */;

-- Dumping structure for table presspay.tbl_resource
DROP TABLE IF EXISTS `tbl_resource`;
CREATE TABLE IF NOT EXISTS `tbl_resource` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table presspay.tbl_resource: ~1 rows (approximately)
/*!40000 ALTER TABLE `tbl_resource` DISABLE KEYS */;
INSERT INTO `tbl_resource` (`id`, `name`, `value`) VALUES
	(1, 'pkTest', 'pk_test_de6148ff9b35639c894b30c7369301d06ceff2b0');
/*!40000 ALTER TABLE `tbl_resource` ENABLE KEYS */;

-- Dumping structure for table presspay.tbl_sliders
DROP TABLE IF EXISTS `tbl_sliders`;
CREATE TABLE IF NOT EXISTS `tbl_sliders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `descr` text NOT NULL,
  `image` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table presspay.tbl_sliders: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_sliders` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_sliders` ENABLE KEYS */;

-- Dumping structure for table presspay.tbl_types_faqs
DROP TABLE IF EXISTS `tbl_types_faqs`;
CREATE TABLE IF NOT EXISTS `tbl_types_faqs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table presspay.tbl_types_faqs: ~4 rows (approximately)
/*!40000 ALTER TABLE `tbl_types_faqs` DISABLE KEYS */;
INSERT INTO `tbl_types_faqs` (`id`, `name`, `full_name`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'student', 'Students', '1', '2021-08-08 16:27:59', '2021-08-08 16:28:00'),
	(2, 'uni', 'Institutions', '1', '2021-08-08 16:28:12', '2021-08-08 16:28:13'),
	(3, 'model', 'Role Models', '1', '2021-08-08 16:28:33', '2021-08-08 16:28:34'),
	(4, 'phil', 'Philanthropist', '1', '2021-08-08 16:28:48', '2021-08-08 16:28:49');
/*!40000 ALTER TABLE `tbl_types_faqs` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
