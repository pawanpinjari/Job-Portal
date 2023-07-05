
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

CREATE TABLE `applicants` (
  `a_id` int(4) NOT NULL auto_increment,
  `a_uid` varchar(30) NOT NULL,
  `a_jid` varchar(30) NOT NULL,
  PRIMARY KEY  (`a_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;


INSERT INTO `applicants` (`a_id`, `a_uid`, `a_jid`) VALUES 
(17, '11', '15'),
(18, '10', '18'),
(19, '10', '15'),
(20, '12', '19'),
(21, '12', '17'),
(22, '12', '20'),
(23, '10', '17');


CREATE TABLE `categories` (
  `cat_id` int(4) NOT NULL auto_increment,
  `cat_nm` varchar(30) NOT NULL,
  PRIMARY KEY  (`cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

 

INSERT INTO `categories` (`cat_id`, `cat_nm`) VALUES 
(10, 'Import-Export'),
(11, 'It-Software'),
(12, 'It-Hardware'),
(14, 'Banking'),
(20, 'Finance');


CREATE TABLE `contact` (
  `cont_id` int(4) NOT NULL auto_increment,
  `cont_fnm` varchar(30) NOT NULL,
  `cont_email` varchar(20) NOT NULL,
  `cont_query` varchar(300) NOT NULL,
  PRIMARY KEY  (`cont_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

 

INSERT INTO `contact` (`cont_id`, `cont_fnm`, `cont_email`, `cont_query`) VALUES 
(14, 'megha', 'megha@gmail.com', 'system problem in appling job'),
(15, 'darshana', 'darshana@yahoo.com', 'page loading late'),
(16, 'samir', 'samir@gmail.com', 'error in appling job'),
(17, 'parth', 'parth@yahoo.com', 'error in resume upload');



CREATE TABLE `employees` (
  `ee_id` int(4) NOT NULL auto_increment,
  `ee_fnm` varchar(30) NOT NULL,
  `ee_pwd` varchar(10) NOT NULL,
  `ee_gender` varchar(1) NOT NULL,
  `ee_email` varchar(30) NOT NULL,
  `ee_add` varchar(300) NOT NULL,
  `ee_mobileno` varchar(10) NOT NULL,
  `ee_current_location` varchar(20) NOT NULL,
  `ee_annualsalary` int(10) NOT NULL,
  `ee_current_industry` varchar(20) NOT NULL,
  `ee_qualification` varchar(10) NOT NULL,
  `ee_profile` varchar(300) NOT NULL,
  `ee_resume` longtext NOT NULL,
  PRIMARY KEY  (`ee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;


INSERT INTO `employees` (`ee_id`, `ee_fnm`, `ee_pwd`, `ee_gender`, `ee_email`, `ee_add`, `ee_mobileno`, `ee_current_location`, `ee_annualsalary`, `ee_current_industry`, `ee_qualification`, `ee_profile`, `ee_resume`) VALUES 
(9, 'pawan', 'pawan11', 'M', 'pawan@gmail.com', '"pawan",bhavnagar.', '7066651454', 'sambhajinagar', 40000, 'tata', 'mba', 'xyz', 'uploads/pawan.doc'),
(10, 'megha', 'megha11', 'f', 'megha_patel@gmail.com', '"megha",2nd floor ,rajkot',  '9934235456', 'rajkot', 45000, 'infosys', 'mba', 'xyz', 'uploads/megha.doc'),
(11, 'darshana', 'darshana', 'f', 'darshana_\\@yahoo.com', '"darshana",ahemadabad', '9423456789', 'mumbai', 35000, 'tcs', 'mtec', 'xyz', 'uploads/darshana.doc'),
(12, 'parth', 'parth1111', 'M', 'parth@gmail.com', '"parth",bhavnagar.', '9923555676', 'bhavnagar', 40000, 'tata', 'mba', 'xyz', 'uploads/parth.doc'),
(13, 'samir', '123123123', 'M', 'samir@gmail.com', '"samin",borivaly,mumbai.', '9987766554', 'mumbai', 40000, 'birla', 'mba', 'xyz', 'uploads/samin.doc');



CREATE TABLE `recruiters` (
  `r_id` int(4) NOT NULL auto_increment,
  `r_fnm` varchar(30) NOT NULL,
  `r_pwd` varchar(10) NOT NULL,
  `r_company` varchar(30) NOT NULL,
  `r_add` varchar(100) NOT NULL,
  `r_ph` varchar(10) NOT NULL,
  `r_email` varchar(30) NOT NULL,
  `r_company_profile` varchar(300) NOT NULL,
  PRIMARY KEY  (`r_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;



INSERT INTO `recruiters` (`r_id`, `r_fnm`, `r_pwd`, `r_company`, `r_add`, `r_ph`, `r_email`, `r_company_profile`) VALUES 
(12, 'admin', '1111111', 'Infosys', '"infosys",mumbai.', '0112345678', 'infosys_company@gmail.com', 'abc'),
(13, 'riddhi', '1234567', 'Infosys', 'infosys,mumbai.', '9925361132', 'riddhi@gmail.com', 'abc'),
(14, 'vishwa', '12345678', 'TCS', '"tcs",gandinagar.', '0792143576', 'vishwa_patel@gmail.com', 'abc'),
(15, 'rushika', '12121212', 'IBM', 'ibm,gandhinagar.', '0798765432', 'ibm_company@yahoo.com', 'abc'),
(16, 'sagar', '2222222', 'TCS', 'tcs,ahemadabad', '0792345677', 'sagar@gmail.com', 'dsfg'),
(17, 'gaurav', 'gaurav11', 'HCL', 'HCL,ahemadabad', '0792345677', 'gaurav@gmail.com', 'dsfg');



CREATE TABLE `jobs` (
  `j_id` int(4) NOT NULL auto_increment,
  `j_company` varchar(40) NOT NULL, 
  `j_category` varchar(40) NOT NULL,
  `j_owner_name` varchar(30) NOT NULL,
  `j_title` varchar(30) NOT NULL,
  `j_hours` float(3,1) NOT NULL,
  `j_salary` int(10) NOT NULL,
  `j_experience` int(3) NOT NULL,
  `j_discription` varchar(300) NOT NULL,
  `j_city` varchar(20) NOT NULL,
  `j_active` int(1) NOT NULL default '0',
  PRIMARY KEY  (`j_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;


INSERT INTO `jobs` (`j_id`, `j_company`, `j_category`, `j_owner_name`, `j_title`, `j_hours`, `j_salary`, `j_experience`, `j_discription`, `j_city`, `j_active`) VALUES 
(15, 'Infosys', 'It-Software', 'riddhi', 'Senior Developer', 10.0, 40000, 2, 'abc', 'pune', 1),
(17, 'Infosys', 'Banking', 'riddhi', 'Chartered Accountant', 8.0, 45000, 4, 'dff', 'ahmedabad', 1),
(18, 'TCS', 'It-Hardware', 'vishwa', 'Infrastructure Solutions', 10.0, 34000, 2, 'fdrf', 'pune', 1),
(19, 'TCS', 'Import-Export', 'vishwa', 'Import/emport Executive', 12.0, 25000, 3, 'sdsdf', 'rajkot', 1),
(20, 'IBM', 'Finance', 'rushika', 'Financial Data Analyst', 8.0, 34667, 3, 'wrert', 'pune', 1),
(21, 'IBM',  'Banking', 'rushika', 'Accountant', 10.0, 45000, 5, 'dsd', 'kolkota', 1),
(22, 'Infosys', 'Import-Export', 'riddhi', 'Assistant Manager', 12.0, 10000, 1, 'abv', 'porbunder', 1),
(23, 'HCL', 'Banking', 'gaurav', 'Accountant', 8.0, 35000, 2, 'dff', 'ahmedabad', 1);
