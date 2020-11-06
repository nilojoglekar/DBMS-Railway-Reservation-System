
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE TABLE IF NOT EXISTS `passengers` (
  `p_id` int(30) NOT NULL AUTO_INCREMENT,
  `p_fname` varchar(30) DEFAULT NULL,
  `p_lname` varchar(30) DEFAULT NULL,
  `p_age` varchar(30) DEFAULT NULL,
  `p_contact` varchar(20) DEFAULT NULL,
  `p_gender` varchar(30) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `t_no` int(11) DEFAULT NULL,
  PRIMARY KEY (`p_id`),
  UNIQUE KEY `p_id` (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;


INSERT INTO `passengers` (`p_id`, `p_fname`, `p_lname`, `p_age`, `p_contact`, `p_gender`, `email`, `password`, `t_no`) VALUES
(101, 'Rahul', 'Sharma', '42', '9926519823', 'Male', 'rahul.sharma@gmail.com', 'abcdefa', 16201),
(102, 'Riya', 'Gupta', '22', '9254376189', 'Female', 'riya.gupta@gmail.com', '123abcd', NULL),
(103, 'Rohit', 'agrawal', '29', '976124512', 'Male', '123rohit@gmail.com', 'hello12', NULL),
(104, 'Prateek', 'Sharma', '35', '8449268172', 'Male', 'prateek123@gmail.com', 'aloha56', 12951),
(105, 'sumit', 'sharma', '20', '9999999999', 'Male', 'sharma@gmail.com', '123123123', 12951),
(106, 'dhruv', 'mehta', '20', '9191919191', 'Male', 'dhruv@gmail.com', '123123123', 16205);


CREATE TABLE IF NOT EXISTS `staff` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_fname` varchar(10) DEFAULT NULL,
  `s_lname` varchar(10) DEFAULT NULL,
  `s_department` varchar(20) NOT NULL,
  `s_salary` int(11) DEFAULT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `station` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `s_name` varchar(20) DEFAULT NULL,
  `s_no_of_platforms` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;



INSERT INTO `station` (`s_no`, `s_name`, `s_no_of_platforms`) VALUES
(1, 'borivali', '8'),
(2, 'Baroda', '6'),
(3, 'Surat', '4');

CREATE TABLE IF NOT EXISTS `tickets` (
  `PNR` decimal(10,0) NOT NULL,
  `t_status` varchar(20) NOT NULL DEFAULT 'Waiting',
  `t_fare` int(11) DEFAULT NULL,
  `p_id` int(20) NOT NULL,
  UNIQUE KEY `PNR` (`PNR`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `tickets` (`PNR`, `t_status`, `t_fare`, `p_id`) VALUES
(8056124359, 'Confirmed', 650, 5),
(8851599875, 'Waiting', 540, 1);



CREATE TABLE IF NOT EXISTS `trains` (
  `t_no` decimal(5,0) NOT NULL,
  `t_name` varchar(30) DEFAULT NULL,
  `t_source` varchar(30) DEFAULT NULL,
  `t_destination` varchar(30) DEFAULT NULL,
  `t_type` varchar(30) DEFAULT NULL,
  `t_status` varchar(20) DEFAULT 'On time',
  `no_of_seats` int(11) DEFAULT NULL,
  `t_duration` int(11) DEFAULT NULL,
  PRIMARY KEY (`t_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `trains` (`t_no`, `t_name`, `t_source`, `t_destination`, `t_type`, `t_status`, `no_of_seats`, `t_duration`) VALUES
(16101, 'Garibrath', 'Chennai', 'Mumbai', 'Express', 'On time', 550, 15),
(16102, 'Duronto', 'Mumbai central', 'Kolkata', 'AC superfast', 'On time', 800, 24),
(16103, 'Geetanjali', 'Bangalore', 'Chennai', 'express', 'On time', 500, 25),
(16104, 'Rajdhani', 'Mumbai Central', 'Delhi', 'Superfast', 'On time', 700, 15),
(16105, 'Mysoreexp', 'Pune', 'Kochi', 'Express', 'On time', 475, 21);

CREATE TABLE IF NOT EXISTS `payment` (
  `Owner` varchar(30) DEFAULT NULL,
  `CVV`  int(11) DEFAULT NULL,
  `cardno`  int(30) DEFAULT NULL,
  PRIMARY KEY (`Owner`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `login` (
  `l_id` varchar(30) DEFAULT NULL,
  `l_username`  varchar(30) DEFAULT NULL,
  `password`  varchar(30) NOT NULL,
  PRIMARY KEY (`l_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `Emergency` (
  `Phonenumber` int(20) DEFAULT NULL,
  `Address`  varchar(30) DEFAULT NULL,
  PRIMARY KEY (`Phonenumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `Display Board` (
  `Db_id` int(20) DEFAULT NULL,
  `t_status`  varchar(30) DEFAULT NULL,
  PRIMARY KEY (`Db_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `Route` (
  `Arr_time` int(20) DEFAULT NULL,
  `stop_no`  varchar(30) DEFAULT NULL,
  `Depart_time` int(20) DEFAULT NULL,
  PRIMARY KEY (`Stop_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');