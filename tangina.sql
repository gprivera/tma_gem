drop database if exists `tma`;
create database `tma`;
use `tma`;

create table `folks`(
	`id` int unsigned not null auto_increment primary key,
	`surname` varchar(45),
  `middle_name` varchar(45),
  `given_name` varchar(45),
  `address` text,
	`city` varchar(45),
  `mobile_number` varchar(45),
  `email` varchar(45),
	`status` varchar(45),
  `occupation` varchar(45),
  `business_address` text,
  `office_number` varchar(45),
	`gender` varchar(45),
	`image` varchar(255),	
	`training` datetime,
	`created` datetime not null,
	`modified` datetime not null
);

create table `notifications` (
	`id` int unsigned not null auto_increment primary key,
	`folk_id` int,
	`notification` varchar(45),
	`description` text,
	`date` date,
	`created` datetime not null,
	`modified` datetime not null
);

create table `children`(
  `id` int unsigned not null auto_increment primary key,
  `surname` varchar(45),
  `middle_name` varchar(45),
  `given_name` varchar(45),
  `address` text,
  `birthdate` date,
  `religion` varchar(45),
	`folk_id` int,
	`is_enrolled` boolean,
	`is_graduate` boolean,
	`created` datetime not null,
	`modified` datetime not null
);

create table `students` (
	`id` int unsigned not null auto_increment primary key,
	`student_number` char(11),
	`image` varchar(255),
	`entry_date` date,
	`child_id` int,
	`created` datetime not null,
	`modified` datetime not null
);

create table `coops` (
	`id` int unsigned not null auto_increment primary key,
	`coop` varchar(45),
	`created` datetime not null,
	`modified` datetime not null
);

create table `coop_members`(
	`id` int unsigned not null auto_increment primary key,
	`coop_id` int,
	`folk_id` int,
	`date_joined` date,
	`created` datetime not null,
	`modified` datetime not null
);

create table `talents` (
	`id` int unsigned not null auto_increment primary key,
	`talents` varchar(45),
	`student_id` int,
	`created` datetime not null,
	`modified` datetime not null
);

create table `educational_backgrounds`(
	`id` int unsigned not null auto_increment primary key,
	`level_id` int,
	`awards` varchar(45),
	`school_year_id` int,
	`student_id` int,
	`school_id` int ,
	`created` datetime not null,
	`modified` datetime not null
);

create table `levels`(
	`id` int unsigned not null auto_increment primary key,
	`level` varchar(45),
	`created` datetime not null,
	`modified` datetime not null
);

create table `schools`(
	`id` int unsigned not null auto_increment primary key,
	`school_name` varchar(45),
	`created` datetime not null,
	`modified` datetime not null
);

create table `books`(
	`id` int unsigned not null auto_increment primary key,
	`title` varchar(45),
	`author` varchar(45),
	`level_id` int,
	`price` double,
	`category_id` int,
	`created` datetime not null,
	`modified` datetime not null
);

create table `categories`(
	`id` int unsigned not null auto_increment primary key,
	`category` varchar(45),
	`created` datetime not null,
	`modified` datetime not null
);

create table `sales`(
	`id` int unsigned not null auto_increment primary key,
	`book_id` int,
	`student_id` int,
	`date_purchased` int,
	`created` datetime not null,
	`modified` datetime not null
);

create table `questions`(
	`id` int unsigned not null auto_increment primary key,
	`question` text,
	`question_type_id` int,
	`created` datetime not null,
	`modified` datetime not null
);

create table `question_types`(
	`id` int unsigned not null auto_increment primary key,
	`type` varchar(45),
	`created` datetime not null,
	`modified` datetime not null
);

create table `answers`(
	`id` int unsigned not null auto_increment primary key,
	`folk_id` int,
	`question_id` int,
	`answer` text,
	`created` datetime not null,
	`modified` datetime not null
);

create table `requirement_categories`(
	`id` int unsigned not null auto_increment primary key,
	`category` varchar(45),
	`created` datetime not null,
	`modified` datetime not null
);

create table `requirements`(
	`id` int unsigned not null auto_increment primary key,
	`requirement_category_id` int,
  `requirement` varchar(45),
  `created` datetime not null,
  `modified` datetime not null
);


create table `student_prerequisites`(
	`id` int unsigned not null auto_increment primary key,
	`requirement_id` int,
	`is_accomplished` boolean,
	`student_id` int,
	`created` datetime not null,
	`modified` datetime not null
);

create table `folk_prerequisites`(
	`id` int unsigned not null auto_increment primary key,
	`requirement_id` int,
	`is_accomplished` boolean,
	`folk_id` int,
	`created` datetime not null,
	`modified` datetime not null
);

create table `users`(
	`id` int unsigned not null auto_increment primary key,
	`username` varchar(45),
	`password` varchar(45),
	`role_id` int,
	`created` datetime not null,
	`modified` datetime not null
);

create table `tasks`(
	`id` int unsigned not null auto_increment primary key,
	`creator_id` int,
	`task` varchar(45),
	`is_accomplished` boolean,
	`user_id` int,
	`due_date` date,
	`created` datetime not null,
	`modified` datetime not null
);

create table `events`(
	`id` int unsigned not null auto_increment primary key,
	`event_name` varchar(45),
	`event_description` text,
	`event_date` date,
	`created` datetime not null,
	`modified` datetime not null
);


create table `participants`(
	`id` int unsigned not null auto_increment primary key,
	`event_id` int,
	`folk_id` int,
	`created` datetime not null,
	`modified` datetime not null
);

create table `roles`(
	`id` int unsigned not null auto_increment primary key,
	`roles` varchar(45),
	`created` datetime not null,
	`modified` datetime not null
);

create table `school_years`(
	`id` int unsigned not null auto_increment primary key,
	`student_id` int,
	`level_id` int,
	`enrollment_date` date,
	`year_end` date,
	`created` datetime not null,
	`modified` datetime not null
);

create table `assessments`(
	`id` int unsigned not null auto_increment primary key,
	`first_quarter` varchar(45),
	`first_date` date,
	`second_quarter` varchar(45),
	`second_date` date,
	`third_quarter` varchar(45),
	`third_date` date,
	`fourth_quarter` varchar(45),
	`fourth_date` date,
	`school_year_id` int,
	`created` datetime not null,
	`modified` datetime not null
);























