

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


--
-- Database Name: `oes_db`
--

-- --------------------------------------------------------





-- --------------------------------------------------------

--
-- Table structure for table `tbl_assessment_records`
--

CREATE TABLE IF NOT EXISTS `tbl_assessment_records` (
  `record_id` varchar(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `exam_name` varchar(255) NOT NULL,
  `exam_id` varchar(255) NOT NULL,
  `score` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `next_retake` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`record_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE IF NOT EXISTS `tbl_categories` (
  `category_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `date_registered` varchar(255) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_departments`
--

CREATE TABLE IF NOT EXISTS `tbl_departments` (
  `department_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date_registered` varchar(255) NOT NULL,
  PRIMARY KEY (`department_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_departments`
--

INSERT INTO `tbl_departments` (`department_id`, `name`, `date_registered`) VALUES
('DP-591697','BACHELOR OF COMPUTER APPLICATION','05-06-2020'),
('DP-024979', 'BACHELOR IN BUSINESS ADMINISTRATION', '05-06-2020'),
('DP-184629','HOTEL MANAGEMENT','05-06-2020'),
('DP-359021','CIVIL ENGINEERING','05-06-2020'),
('DP-374219','DEPT. OF ENG. SCIENCES AND HUMANITIES','05-06-2020'),
('DP-374416','MASTER IN COMPUTER APPLICATION','05-06-2020'),
('DP-379147','MASTER IN BUSINESS ADMINISTRATION','05-06-2020'),
('DP-566719','INFORMATION TECHNOLOGY','05-06-2020'),
('DP-577502','ELECTRICAL ENGINEERING','05-06-2020'),
('DP-684921','ELECTRONICS AND COMM. ENGINEERING','05-06-2020'),
('DP-851251','COMPUTER SCIENCE AND ENGINEERING','05-06-2020');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_examinations`
--

CREATE TABLE IF NOT EXISTS `tbl_examinations` (
  `exam_id` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `exam_name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `duration` int(255) NOT NULL,
  `passmark` int(255) NOT NULL,
  `re_exam` int(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`exam_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------


-- --------------------------------------------------------

--
-- Table structure for table `tbl_questions`
--

CREATE TABLE IF NOT EXISTS `tbl_questions` (
  `question_id` varchar(255) NOT NULL,
  `exam_id` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `question` longtext NOT NULL,
  `option1` varchar(255) NOT NULL DEFAULT '-',
  `option2` varchar(255) NOT NULL DEFAULT '-',
  `option3` varchar(255) NOT NULL DEFAULT '-',
  `option4` varchar(255) NOT NULL DEFAULT '-',
  `answer` varchar(255) NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subjects`
--

CREATE TABLE IF NOT EXISTS `tbl_subjects` (
  `subject_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `date_registered` varchar(255) NOT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `user_id` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `address` longtext NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL DEFAULT '-',
  `category` varchar(255) NOT NULL DEFAULT '-',
  `login` varchar(255) NOT NULL DEFAULT 'e10adc3949ba59abbe56e057f20f883e',
  `role` varchar(255) NOT NULL DEFAULT 'student',
  `acc_stat` varchar(255) NOT NULL DEFAULT '1',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--
-- Only ADMIN DATA
INSERT INTO `tbl_users` (`user_id`, `first_name`, `last_name`, `gender`, `dob`, `address`, `email`, `phone`, `department`, `category`, `login`, `role`, `acc_stat`) VALUES
('admin', 'ADMIN', '-', '-', '-', '-', '-', '-', '-', '-', 'dbfc95d5c71fda69e4e7dece33dbc3df', 'admin', '1');
