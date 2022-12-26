--
--
-- Database: `kca`
--
--
CREATE DATABASE kca;
--
--
-- --------------------------------------------------------
--
--
-- Table structure for table `students_table`
--
--
CREATE TABLE `students_table` (
    `regNumber` VARCHAR(8) NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `school` TEXT(3) NOT NULL,
    `course` VARCHAR(50) NOT NULL,
    `unit1` VARCHAR(50) NULL,
    `unit2` VARCHAR(50) NULL,
    `unit3` VARCHAR(50) NULL,
    `unit4` VARCHAR(50) NULL,
    `unit5` VARCHAR(50) NULL,
    `unit6` VARCHAR(50) NULL,
    `unit7` VARCHAR(50) NULL,
    `unit8` VARCHAR(50) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
--
ALTER TABLE `students_table`
  ADD PRIMARY KEY (`regNumber`);
--
--
-- --------------------------------------------------------
--
--
-- Table structure for table `lecturers_table`
--
--
CREATE TABLE `lecturers_table` (
    `staffNumber` VARCHAR(10) NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `emails` VARCHAR(20) NOT NULL,
    `passwords` VARCHAR(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
--
ALTER TABLE `lecturers_table`
  ADD PRIMARY KEY (`staffNumber`);
--
--
-- --------------------------------------------------------
--
--
-- Table structure for table `admin_table`
--
--
CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `staff_id` VARCHAR(10) NOT NULL,
  `first_name` VARCHAR(50) NOT NULL,
  `last_name` VARCHAR(50) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `password` VARCHAR(50) NOT NULL,
  `gender` enum('male','female') CHARACTER SET utf8 NOT NULL,
  `mobile` VARCHAR(50) NOT NULL,
  `designation` VARCHAR(50) NOT NULL,
  `course` VARCHAR(250) NOT NULL,
  `type` VARCHAR(250) NOT NULL DEFAULT 'student',
  `status` enum('active','pending','deleted','') NOT NULL DEFAULT 'active',
  `authtoken` VARCHAR(250) NOT NULL,
  `unit1` VARCHAR(100) NOT NULL,
  `unit2` VARCHAR(100) NOT NULL,
  `unit3` VARCHAR(100) NOT NULL,
  `unit4` VARCHAR(100) NOT NULL,
  `unit5` VARCHAR(100) NOT NULL,
  `unit6` VARCHAR(100) NOT NULL,
  `unit7` VARCHAR(100) NOT NULL,
  `unit8` VARCHAR(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
--
INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `password`, `gender`, `mobile`, `designation`, `type`, `status`, `authtoken`) VALUES
(1, 'web', 'damn', 'admin@email.com', '202cb962ac59075b964b07152d234b70', 'male', '123456789', 'Web developer', 'SOT', 'administrator', 'active', ''),
(5, 'jhonn', 'smith', 'info@email.com', '202cb962ac59075b964b07152d234b70', 'male', '123456789', 'Web developer', 'SOB', 'lecturer', 'active', '73f66749989c7b09389894f1b27daa7387f9956fa51c87c1ba4fc4684b91acb5'),
(6, 'Jimmy', 'Anderson', 'jm@wd.com', '202cb962ac59075b964b07152d234b70', 'male', '11111111111', 'PHP developer', 'SOE', 'lecturer', 'pending', '73f66749989c7b09389894f1b27daa736156fbd08795da8955fb36cf730f2fb0'),
(7, 'Andy', 'Flower', 'andy@wd.com', '202cb962ac59075b964b07152d234b70', 'male', '11111111111', 'dfdsd', 'SOT', 'administrator', 'deleted', '73f66749989c7b09389894f1b27daa738d2775af2555b0d1ed582212a3991144');
--
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
--
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
--
-- --------------------------------------------------------
--
--
-- Table structure for table `courses`
--
--
CREATE TABLE `courses` (
    `courseId` VARCHAR(10) NOT NULL,
    `courseName` VARCHAR(100) NOT NULL,
    `numberOfUnits` INT(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`courseId`);
--
--
INSERT INTO `courses` (`courseId`, `courseName`, `numberOfUnits`) VALUES 
  ('cbit', 'Certificate in Business Information Technology', '10'),
  ('cit', 'Certificate in Information Technology', '10'),
  ('DIT', 'Diploma in Information Technology', '25'), 
  ('DBIT', 'Diploma in Business Information Technology', '25'), 
  ('BISF', 'Bachelor of Science in Information Security and Forensics', '63'), 
  ('BSD', 'Bachelor of Science in Software Development', '64'), 
  ('BGAT', 'Bachelor of Science in Gaming and Animation Technology', '56'), 
  ('BAC', 'Bachelor of Science in Applied Computing', '54'), 
  ('BBIT', 'Bachelor of Business Information Technology', '57'), 
  ('BIT', 'Bachelor of Science in Information Technology', '50'), 
  ('MISM', 'MSc Information Systems Management', '18'), 
  ('MDA', 'MSc Data Analytics', '18'),
  ('CBM', 'Certificate in Business Management', '10'),
  ('CPL', 'Certificate in Procurement and Logistics', '10'),
  ('CPM', 'Certificate in Project Management', '0'),
  ('DPM', 'Diploma in Project Management', '0'),
  ('DPL', 'Diploma in Procurement and Logistics', '25'),
  ('DBM', 'Diploma in Business Management', '25'),
  ('BSES', 'Bachelor of Science in Economics & Statistics', '52'),
  ('BCOM', 'Bachelor of Commerce', '48'),
  ('BPM', 'Bachelor of Public Management', '52'),
  ('BPL', 'Bachelor of Procurement and Logistics', '49'),
  ('BSAS', 'Bachelor of Science in Actuarial Science', '53'),
  ('BIBM', 'Bachelor of International Business Management', '51'),
  ('MBACM', 'Master of Business Administration Corporate Management', '18'),
  ('MSCOM', 'Master of Science in Commerce', '15'),
  ('MBA', 'Master of Business Administration', '13'),
  ('MSKMI', 'Master of Science in Knowledge Management and Innovation', '0'),
  ('MSDF', 'Master of Science in Development Finance', '14'),
  ('DPFP', 'Doctor of Philosophy in Finance Program', '13'),
  ('DPBM', 'Doctor of Philosophy In Business Management', '11'),
  ('CPA', 'Certificate in Performing Arts', '0'),
  ('CFT', 'Certificate in Film Technology', '12'),
  ('CCP', 'Certificate in Counselling Psychology', '0'),
  ('CECE', 'Certificate in Early Childhood Education', '0'),
  ('DPATF', 'Diploma in Performing Arts Theatre & Film', '0'),
  ('DJDM', 'Diploma in Journalism & Digital Media', '25'),
  ('DFT', 'Diploma in Film Technology', '25'),
  ('DECE', 'Diploma in Early Childhood Education', '0'),
  ('DCP', 'Diploma in Counselling Psychology', '0'),
  ('DE', 'Diploma in Education', '0'),
  ('BAPAF', 'Bachelor of Arts in Performing Arts & Film', '50'),
  ('BAJDM', 'Bachelor of Arts in Journalism & Digital Media', '48'),
  ('BAEBS', 'Bachelor of Arts in Economics & Business Studies', '53'),
  ('BACri', 'Bachelor of Arts in Criminology', '55'),
  ('BACP', 'Bachelor of Arts in Counselling Psychology', '40'),
  ('BAECE', 'Bachelor of Arts in Early Childhood Education', '52'),
  ('BE', 'Bachelor of Education', '0'),
  ('PGDE', 'Post Graduate Diploma in Education', '17'),
  ('MELM', 'Master of Education in Leadership and Management', '0'),
  ('MEACPS', 'Master of Education, Administration, Curriculum and Policy Studies', '0'),
  ('MACP', 'Master of Arts in Counselling Psychology', '18')
;
--
--
-- --------------------------------------------------------
--
--
-- Table structure for table `fundamentals_of_computing_cbit`
--
--
CREATE TABLE `fundamentals_of_computing_cbit` (
    `sn` INT(5) NOT NULL,
    `regNumber` VARCHAR(8) NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `attendance` TEXT(8) NULL,
    `remarks` VARCHAR(100) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
--
ALTER TABLE `fundamentals_of_computing_cbit`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE (`regNumber`);
--
--
ALTER TABLE `fundamentals_of_computing_cbit`
    MODIFY `sn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
--
-- --------------------------------------------------------
--
--
-- Table structure for table `custom_relations_cbit`
--
--
CREATE TABLE `custom_relations_cbit` (
    `sn` INT(5) NOT NULL,
    `regNumber` VARCHAR(8) NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `attendance` TEXT(8) NULL,
    `remarks` VARCHAR(100) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
--
ALTER TABLE `custom_relations_cbit`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE (`regNumber`);
--
--
ALTER TABLE `custom_relations_cbit`
    MODIFY `sn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
--
-- --------------------------------------------------------
--
--
-- Table structure for table `business_information_management_cbit`
--
--
CREATE TABLE `business_information_management_cbit` (
    `sn` INT(5) NOT NULL,
    `regNumber` VARCHAR(8) NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `attendance` TEXT(8) NULL,
    `remarks` VARCHAR(100) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
--
ALTER TABLE `business_information_management_cbit`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE (`regNumber`);
--
--
ALTER TABLE `business_information_management_cbit`
    MODIFY `sn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
--
-- --------------------------------------------------------
--
--
-- Table structure for table `internet_and_the_web_cbit`
--
--
CREATE TABLE `internet_and_the_web_cbit` (
    `sn` INT(5) NOT NULL,
    `regNumber` VARCHAR(8) NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `attendance` TEXT(8) NULL,
    `remarks` VARCHAR(100) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
--
ALTER TABLE `internet_and_the_web_cbit`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE (`regNumber`);
--
--
ALTER TABLE `internet_and_the_web_cbit`
    MODIFY `sn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
--
-- --------------------------------------------------------
--
--
-- Table structure for table `business_and_enterprise_management_cbit`
--
--
CREATE TABLE `business_and_enterprise_management_cbit` (
    `sn` INT(5) NOT NULL,
    `regNumber` VARCHAR(8) NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `attendance` TEXT(8) NULL,
    `remarks` VARCHAR(100) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
--
ALTER TABLE `business_and_enterprise_management_cbit`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE (`regNumber`);
--
--
ALTER TABLE `business_and_enterprise_management_cbit`
    MODIFY `sn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
--
-- --------------------------------------------------------
--
--
-- Table structure for table `communication_skills_cbit_2`
--
--
CREATE TABLE `communication_skills_cbit_2` (
    `sn` INT(5) NOT NULL,
    `regNumber` VARCHAR(8) NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `attendance` TEXT(8) NULL,
    `remarks` VARCHAR(100) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
--
ALTER TABLE `communication_skills_cbit_2`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE (`regNumber`);
--
--
ALTER TABLE `communication_skills_cbit_2`
    MODIFY `sn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
--
--------------------------------------------------
--
--
-- Table structure for table `business_math_cbit_2`
--
--
CREATE TABLE `business_math_cbit_2` (
    `sn` INT(5) NOT NULL,
    `regNumber` VARCHAR(8) NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `attendance` TEXT(8) NULL,
    `remarks` VARCHAR(100) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
--
ALTER TABLE `business_math_cbit_2`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE (`regNumber`);
--
--
ALTER TABLE `business_math_cbit_2`
    MODIFY `sn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
--
--------------------------------------------------
--
--
-- Table structure for table `fundamentals_of_accounting_cbit_2`
--
--
CREATE TABLE `fundamentals_of_accounting_cbit_2` (
    `sn` INT(5) NOT NULL,
    `regNumber` VARCHAR(8) NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `attendance` TEXT(8) NULL,
    `remarks` VARCHAR(100) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
--
ALTER TABLE `fundamentals_of_accounting_cbit_2`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE (`regNumber`);
--
--
ALTER TABLE `fundamentals_of_accounting_cbit_2`
    MODIFY `sn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
--
--------------------------------------------------
--
--
-- Table structure for table `computer_application_software_cbit_2`
--
--
CREATE TABLE `computer_application_software_cbit_2` (
    `sn` INT(5) NOT NULL,
    `regNumber` VARCHAR(8) NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `attendance` TEXT(8) NULL,
    `remarks` VARCHAR(100) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
--
ALTER TABLE `computer_application_software_cbit_2`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE (`regNumber`);
--
--
ALTER TABLE `computer_application_software_cbit_2`
    MODIFY `sn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
--
--------------------------------------------------
--
--
-- Table structure for table `computer_organization_and_architecture_cbit_2`
--
--
CREATE TABLE `computer_organization_and_architecture_cbit_2` (
    `sn` INT(5) NOT NULL,
    `regNumber` VARCHAR(8) NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `attendance` TEXT(8) NULL,
    `remarks` VARCHAR(100) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
--
ALTER TABLE `computer_organization_and_architecture_cbit_2`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE (`regNumber`);
--
--
ALTER TABLE `computer_organization_and_architecture_cbit_2`
    MODIFY `sn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
--
-- --------------------------------------------------------
--
--
-- Table structure for table `customer_relations_cit`
--
--
CREATE TABLE `customer_relations_cit` (
    `sn` INT(5) NOT NULL,
    `regNumber` VARCHAR(8) NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `attendance` TEXT(8) NULL,
    `remarks` VARCHAR(100) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
--
ALTER TABLE `customer_relations_cit`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE (`regNumber`);
--
--
ALTER TABLE `customer_relations_cit`
    MODIFY `sn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
--
--------------------------------------------------
--
--
-- Table structure for table `computer_and_society_cit`
--
--
CREATE TABLE `computer_and_society_cit` (
    `sn` INT(5) NOT NULL,
    `regNumber` VARCHAR(8) NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `attendance` TEXT(8) NULL,
    `remarks` VARCHAR(100) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
--
ALTER TABLE `computer_and_society_cit`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE (`regNumber`);
--
--
ALTER TABLE `computer_and_society_cit`
    MODIFY `sn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
--
--------------------------------------------------
--
--
-- Table structure for table `foundation_physics_cit`
--
--
CREATE TABLE `foundation_physics_cit` (
    `sn` INT(5) NOT NULL,
    `regNumber` VARCHAR(8) NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `attendance` TEXT(8) NULL,
    `remarks` VARCHAR(100) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
--
ALTER TABLE `foundation_physics_cit`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE (`regNumber`);
--
--
ALTER TABLE `foundation_physics_cit`
    MODIFY `sn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
--
--------------------------------------------------
--
--
-- Table structure for table `internet_and_the_web_cit`
--
--
CREATE TABLE `internet_and_the_web_cit` (
    `sn` INT(5) NOT NULL,
    `regNumber` VARCHAR(8) NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `attendance` TEXT(8) NULL,
    `remarks` VARCHAR(100) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
--
ALTER TABLE `internet_and_the_web_cit`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE (`regNumber`);
--
--
ALTER TABLE `internet_and_the_web_cit`
    MODIFY `sn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
--
--------------------------------------------------
--
--
-- Table structure for table `introduction_information_system_cit`
--
--
CREATE TABLE `introduction_information_system_cit` (
    `sn` INT(5) NOT NULL,
    `regNumber` VARCHAR(8) NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `attendance` TEXT(8) NULL,
    `remarks` VARCHAR(100) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
--
ALTER TABLE `introduction_information_system_cit`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE (`regNumber`);
--
--
ALTER TABLE `introduction_information_system_cit`
    MODIFY `sn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
--
--------------------------------------------------
--
--
--Table structure for table `computer_organization_and_architecture_cit_2`
--
--
CREATE TABLE `computer_organization_and_architecture_cit_2` (
    `sn` INT(5) NOT NULL,
    `regNumber` VARCHAR(8) NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `attendance` TEXT(8) NULL,
    `remarks` VARCHAR(100) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
--
ALTER TABLE `computer_organization_and_architecture_cit_2`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE (`regNumber`);
--
--
ALTER TABLE `computer_organization_and_architecture_cit_2`
    MODIFY `sn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
--
--------------------------------------------------
--
--
-- Table structure for table `communication_skills_cit_2`
--
--
CREATE TABLE `communication_skills_cit_2` (
    `sn` INT(5) NOT NULL,
    `regNumber` VARCHAR(8) NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `attendance` TEXT(8) NULL,
    `remarks` VARCHAR(100) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
--
ALTER TABLE `communication_skills_cit_2`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE (`regNumber`);
--
--
ALTER TABLE `communication_skills_cit_2`
    MODIFY `sn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
--
--------------------------------------------------
--
--
-- Table structure for table `math_for_science_cit_2`
--
--
CREATE TABLE `math_for_science_cit_2` (
    `sn` INT(5) NOT NULL,
    `regNumber` VARCHAR(8) NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `attendance` TEXT(8) NULL,
    `remarks` VARCHAR(100) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
--
ALTER TABLE `math_for_science_cit_2`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE (`regNumber`);
--
--
ALTER TABLE `math_for_science_cit_2`
    MODIFY `sn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
--
--------------------------------------------------
--
--
-- Table structure for table `computer_application_software_cit_2`
--
--
CREATE TABLE `computer_application_software_cit_2` (
    `sn` INT(5) NOT NULL,
    `regNumber` VARCHAR(8) NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `attendance` TEXT(8) NULL,
    `remarks` VARCHAR(100) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
--
ALTER TABLE `computer_application_software_cit_2`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE (`regNumber`);
--
--
ALTER TABLE `computer_application_software_cit_2`
    MODIFY `sn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
--
--------------------------------------------------
--
--
-- Table structure for table `operating_system_cit_2`
--
--
CREATE TABLE `operating_system_cit_2` (
    `sn` INT(5) NOT NULL,
    `regNumber` VARCHAR(8) NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `attendance` TEXT(8) NULL,
    `remarks` VARCHAR(100) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
--
ALTER TABLE `operating_system_cit_2`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE (`regNumber`);
--
--
ALTER TABLE `operating_system_cit_2`
    MODIFY `sn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
--
---------------------------------------------------
--
--
-- Table structure for table `communication_skills_dbit`
--
--
CREATE TABLE `communication_skills_dbit` (
    `sn` INT(5) NOT NULL,
    `regNumber` VARCHAR(8) NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `attendance` TEXT(8) NULL,
    `remarks` VARCHAR(100) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
--
ALTER TABLE `communication_skills_dbit`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE (`regNumber`);
--
--
ALTER TABLE `communication_skills_dbit`
    MODIFY `sn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
--
---------------------------------------------------
--
--
-- Table structure for table `business_math_dbit`
--
--
CREATE TABLE `business_math_dbit` (
    `sn` INT(5) NOT NULL,
    `regNumber` VARCHAR(8) NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `attendance` TEXT(8) NULL,
    `remarks` VARCHAR(100) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
--
ALTER TABLE `business_math_dbit`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE (`regNumber`);
--
--
ALTER TABLE `business_math_dbit`
    MODIFY `sn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
--
---------------------------------------------------
--
--
-- Table structure for table `fundamentals_of_accounting_dbit`
--
--
CREATE TABLE `fundamentals_of_accounting_dbit` (
    `sn` INT(5) NOT NULL,
    `regNumber` VARCHAR(8) NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `attendance` TEXT(8) NULL,
    `remarks` VARCHAR(100) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
--
ALTER TABLE `fundamentals_of_accounting_dbit`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE (`regNumber`);
--
--
ALTER TABLE `fundamentals_of_accounting_dbit`
    MODIFY `sn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
--
---------------------------------------------------
--
--
-- Table structure for table `computer_application_software_dbit`
--
--
CREATE TABLE `computer_application_software_dbit` (
    `sn` INT(5) NOT NULL,
    `regNumber` VARCHAR(8) NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `attendance` TEXT(8) NULL,
    `remarks` VARCHAR(100) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
--
ALTER TABLE `computer_application_software_dbit`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE (`regNumber`);
--
--
ALTER TABLE `computer_application_software_dbit`
    MODIFY `sn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
--
---------------------------------------------------
--
--
-- Table structure for table `computer_organization_and_architecture_dbit`
--
--
CREATE TABLE `computer_organization_and_architecture_dbit` (
    `sn` INT(5) NOT NULL,
    `regNumber` VARCHAR(8) NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `attendance` TEXT(8) NULL,
    `remarks` VARCHAR(100) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
--
ALTER TABLE `computer_organization_and_architecture_dbit`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE (`regNumber`);
--
--
ALTER TABLE `computer_organization_and_architecture_dbit`
    MODIFY `sn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
--
---------------------------------------------------
--
--
-- Table structure for table `health_awareness_dbit_2`
--
--
CREATE TABLE `health_awareness_dbit_2` (
    `sn` INT(5) NOT NULL,
    `regNumber` VARCHAR(8) NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `attendance` TEXT(8) NULL,
    `remarks` VARCHAR(100) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
--
ALTER TABLE `health_awareness_dbit_2`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE (`regNumber`);
--
--
ALTER TABLE `health_awareness_dbit_2`
    MODIFY `sn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
--
---------------------------------------------------
--
--
-- Table structure for table `information_literacy_dbit_2`
--
--
CREATE TABLE `information_literacy_dbit_2` (
    `sn` INT(5) NOT NULL,
    `regNumber` VARCHAR(8) NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `attendance` TEXT(8) NULL,
    `remarks` VARCHAR(100) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
--
ALTER TABLE `information_literacy_dbit_2`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE (`regNumber`);
--
--
ALTER TABLE `information_literacy_dbit_2`
    MODIFY `sn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
--
---------------------------------------------------
--
--
-- Table structure for table `database_management_system_dbit_2`
--
--
CREATE TABLE `database_management_system_dbit_2` (
    `sn` INT(5) NOT NULL,
    `regNumber` VARCHAR(8) NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `attendance` TEXT(8) NULL,
    `remarks` VARCHAR(100) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
--
ALTER TABLE `database_management_system_dbit_2`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE (`regNumber`);
--
--
ALTER TABLE `database_management_system_dbit_2`
    MODIFY `sn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
--
---------------------------------------------------
--
--
-- Table structure for table `principles_of_management_dbit_2`
--
--
CREATE TABLE `principles_of_management_dbit_2` (
    `sn` INT(5) NOT NULL,
    `regNumber` VARCHAR(8) NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `attendance` TEXT(8) NULL,
    `remarks` VARCHAR(100) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
--
ALTER TABLE `principles_of_management_dbit_2`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE (`regNumber`);
--
--
ALTER TABLE `principles_of_management_dbit_2`
    MODIFY `sn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
--
---------------------------------------------------
--
--
-- Table structure for table `system_analysis_and_design_dbit_2`
--
--
CREATE TABLE `system_analysis_and_design_dbit_2` (
    `sn` INT(5) NOT NULL,
    `regNumber` VARCHAR(8) NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `attendance` TEXT(8) NULL,
    `remarks` VARCHAR(100) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
--
ALTER TABLE `system_analysis_and_design_dbit_2`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE (`regNumber`);
--
--
ALTER TABLE `system_analysis_and_design_dbit_2`
    MODIFY `sn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
--
---------------------------------------------------
--
--
-- Table structure for table `business_management_dbit_3`
--
--
CREATE TABLE `business_management_dbit_3` (
    `sn` INT(5) NOT NULL,
    `regNumber` VARCHAR(8) NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `attendance` TEXT(8) NULL,
    `remarks` VARCHAR(100) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
--
ALTER TABLE `business_management_dbit_3`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE (`regNumber`);
--
--
ALTER TABLE `business_management_dbit_3`
    MODIFY `sn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
--
---------------------------------------------------
--
--
-- Table structure for table `computer_programming_concept_dbit_3`
--
--
CREATE TABLE `computer_programming_concept_dbit_3` (
    `sn` INT(5) NOT NULL,
    `regNumber` VARCHAR(8) NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `attendance` TEXT(8) NULL,
    `remarks` VARCHAR(100) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
--
ALTER TABLE `computer_programming_concept_dbit_3`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE (`regNumber`);
--
--
ALTER TABLE `computer_programming_concept_dbit_3`
    MODIFY `sn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
--
---------------------------------------------------
--
--
-- Table structure for table `internet_application_dbit_3`
--
--
CREATE TABLE `internet_application_dbit_3` (
    `sn` INT(5) NOT NULL,
    `regNumber` VARCHAR(8) NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `attendance` TEXT(8) NULL,
    `remarks` VARCHAR(100) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
--
ALTER TABLE `internet_application_dbit_3`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE (`regNumber`);
--
--
ALTER TABLE `internet_application_dbit_3`
    MODIFY `sn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
--
---------------------------------------------------
--
--
-- Table structure for table `entrepreneurship_skills_dbit_3`
--
--
CREATE TABLE `entrepreneurship_skills_dbit_3` (
    `sn` INT(5) NOT NULL,
    `regNumber` VARCHAR(8) NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `attendance` TEXT(8) NULL,
    `remarks` VARCHAR(100) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
--
ALTER TABLE `entrepreneurship_skills_dbit_3`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE (`regNumber`);
--
--
ALTER TABLE `entrepreneurship_skills_dbit_3`
    MODIFY `sn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
--
---------------------------------------------------
--
--
-- Table structure for table `computer_operating_system_dbit_3`
--
--
CREATE TABLE `computer_operating_system_dbit_3` (
    `sn` INT(5) NOT NULL,
    `regNumber` VARCHAR(8) NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `attendance` TEXT(8) NULL,
    `remarks` VARCHAR(100) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
--
ALTER TABLE `computer_operating_system_dbit_3`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE (`regNumber`);
--
--
ALTER TABLE `computer_operating_system_dbit_3`
    MODIFY `sn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
--
---------------------------------------------------
--
--
-- Table structure for table `application_programming_dbit_4`
--
--
CREATE TABLE `application_programming_dbit_4` (
    `sn` INT(5) NOT NULL,
    `regNumber` VARCHAR(8) NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `attendance` TEXT(8) NULL,
    `remarks` VARCHAR(100) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
--
ALTER TABLE `application_programming_dbit_4`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE (`regNumber`);
--
--
ALTER TABLE `application_programming_dbit_4`
    MODIFY `sn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
--
---------------------------------------------------
--
--
-- Table structure for table `business_application_software_dbit_4`
--
--
CREATE TABLE `business_application_software_dbit_4` (
    `sn` INT(5) NOT NULL,
    `regNumber` VARCHAR(8) NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `attendance` TEXT(8) NULL,
    `remarks` VARCHAR(100) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
--
ALTER TABLE `business_application_software_dbit_4`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE (`regNumber`);
--
--
ALTER TABLE `business_application_software_dbit_4`
    MODIFY `sn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
--
---------------------------------------------------
--
--
-- Table structure for table `object_oriented_sad_dbit_4`
--
--
CREATE TABLE `object_oriented_sad_dbit_4` (
    `sn` INT(5) NOT NULL,
    `regNumber` VARCHAR(8) NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `attendance` TEXT(8) NULL,
    `remarks` VARCHAR(100) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
--
ALTER TABLE `object_oriented_sad_dbit_4`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE (`regNumber`);
--
--
ALTER TABLE `object_oriented_sad_dbit_4`
    MODIFY `sn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
--
---------------------------------------------------
--
--
-- Table structure for table `data_structures_dbit_4`
--
--
CREATE TABLE `data_structures_dbit_4` (
    `sn` INT(5) NOT NULL,
    `regNumber` VARCHAR(8) NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `attendance` TEXT(8) NULL,
    `remarks` VARCHAR(100) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
--
ALTER TABLE `data_structures_dbit_4`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE (`regNumber`);
--
--
ALTER TABLE `data_structures_dbit_4`
    MODIFY `sn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
--
---------------------------------------------------
--
--
-- Table structure for table `principles_of_marketing_dbit_4`
--
--
CREATE TABLE `principles_of_marketing_dbit_4` (
    `sn` INT(5) NOT NULL,
    `regNumber` VARCHAR(8) NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `attendance` TEXT(8) NULL,
    `remarks` VARCHAR(100) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
--
ALTER TABLE `principles_of_marketing_dbit_4`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE (`regNumber`);
--
--
ALTER TABLE `principles_of_marketing_dbit_4`
    MODIFY `sn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
--
---------------------------------------------------
--
--
-- Table structure for table `general_economics_dbit_5`
--
--
CREATE TABLE `general_economics_dbit_5` (
    `sn` INT(5) NOT NULL,
    `regNumber` VARCHAR(8) NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `attendance` TEXT(8) NULL,
    `remarks` VARCHAR(100) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
--
ALTER TABLE `general_economics_dbit_5`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE (`regNumber`);
--
--
ALTER TABLE `general_economics_dbit_5`
    MODIFY `sn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
--
---------------------------------------------------
--
--
-- Table structure for table `business_information_strategy_dbit_5`
--
--
CREATE TABLE `business_information_strategy_dbit_5` (
    `sn` INT(5) NOT NULL,
    `regNumber` VARCHAR(8) NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `attendance` TEXT(8) NULL,
    `remarks` VARCHAR(100) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
--
ALTER TABLE `business_information_strategy_dbit_5`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE (`regNumber`);
--
--
ALTER TABLE `business_information_strategy_dbit_5`
    MODIFY `sn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
--
---------------------------------------------------
--
--
-- Table structure for table `cost_accounting_dbit_5`
--
--
CREATE TABLE `cost_accounting_dbit_5` (
    `sn` INT(5) NOT NULL,
    `regNumber` VARCHAR(8) NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `attendance` TEXT(8) NULL,
    `remarks` VARCHAR(100) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
--
ALTER TABLE `cost_accounting_dbit_5`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE (`regNumber`);
--
--
ALTER TABLE `cost_accounting_dbit_5`
    MODIFY `sn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
--
---------------------------------------------------
--
--
-- Table structure for table `project_dbit_5`
--
--
CREATE TABLE `project_dbit_5` (
    `sn` INT(5) NOT NULL,
    `regNumber` VARCHAR(8) NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `attendance` TEXT(8) NULL,
    `remarks` VARCHAR(100) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
--
ALTER TABLE `project_dbit_5`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE (`regNumber`);
--
--
ALTER TABLE `project_dbit_5`
    MODIFY `sn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
--
---------------------------------------------------
--
--
-- Table structure for table `human_resource_management_dbit_5`
--
--
CREATE TABLE `human_resource_management_dbit_5` (
    `sn` INT(5) NOT NULL,
    `regNumber` VARCHAR(8) NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `attendance` TEXT(8) NULL,
    `remarks` VARCHAR(100) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
--
ALTER TABLE `human_resource_management_dbit_5`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE (`regNumber`);
--
--
ALTER TABLE `human_resource_management_dbit_5`
    MODIFY `sn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
--
---------------------------------------------------
--
--
-- Backup DATABASE
--
--
/* BACKUP DATABASE kca
TO DISK = 'D:\backups\testDB.bak'
WITH DIFFERENTIAL; */
