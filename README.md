# WDL_Mini_Project
 
mysql> describe amino;

{ 
	CREATE TABLE `amino` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`pname` varchar(255) NOT NULL,
	`originalprice` int(10) DEFAULT NULL,
	`soldprice` int(10) NOT NULL,
	`imgsrc` varchar(255) NOT NULL,
	`category` varchar(255) NOT NULL,
	`image1` varchar(255) DEFAULT NULL,
	`image2` varchar(255) DEFAULT NULL,
	`image3` varchar(255) DEFAULT NULL,
	`desc` mediumtext,
	`productinfo` mediumtext,
	PRIMARY KEY (`id`)
	)
}
+---------------+--------------+------+-----+---------+----------------+
| Field         | Type         | Null | Key | Default | Extra          |
+---------------+--------------+------+-----+---------+----------------+
| id            | int(10)      | NO   | PRI | NULL    | auto_increment |
| pname         | varchar(255) | NO   |     | NULL    |                |
| originalprice | int(10)      | YES  |     | NULL    |                |
| soldprice     | int(10)      | NO   |     | NULL    |                |
| imgsrc        | varchar(255) | NO   |     | NULL    |                |
| category      | varchar(255) | NO   |     | NULL    |                |
| image1        | varchar(255) | YES  |     | NULL    |                |
| image2        | varchar(255) | YES  |     | NULL    |                |
| image3        | varchar(255) | YES  |     | NULL    |                |
| desc          | mediumtext   | YES  |     | NULL    |                |
| productinfo   | mediumtext   | YES  |     | NULL    |                |
+---------------+--------------+------+-----+---------+----------------+
11 rows in set (0.05 sec)

mysql> describe gainers;
{
	CREATE TABLE `gainers` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`pname` varchar(255) NOT NULL,
	`originalprice` int(10) DEFAULT NULL,
	`soldprice` int(10) NOT NULL,
	`imgsrc` varchar(255) NOT NULL,
	`category` varchar(255) NOT NULL,
	`image1` varchar(255) DEFAULT NULL,
	`image2` varchar(255) DEFAULT NULL,
	`image3` varchar(255) DEFAULT NULL,
	`desc` mediumtext,
	`productinfo` mediumtext,
	PRIMARY KEY (`id`)
	)
}
+---------------+--------------+------+-----+---------+----------------+
| Field         | Type         | Null | Key | Default | Extra          |
+---------------+--------------+------+-----+---------+----------------+
| id            | int(10)      | NO   | PRI | NULL    | auto_increment |
| pname         | varchar(255) | NO   |     | NULL    |                |
| originalprice | int(10)      | YES  |     | NULL    |                |
| soldprice     | int(10)      | NO   |     | NULL    |                |
| imgsrc        | varchar(255) | NO   |     | NULL    |                |
| category      | varchar(255) | NO   |     | NULL    |                |
| image1        | varchar(255) | YES  |     | NULL    |                |
| image2        | varchar(255) | YES  |     | NULL    |                |
| image3        | varchar(255) | YES  |     | NULL    |                |
| desc          | mediumtext   | YES  |     | NULL    |                |
| productinfo   | mediumtext   | YES  |     | NULL    |                |
+---------------+--------------+------+-----+---------+----------------+
11 rows in set (0.00 sec)

mysql> describe proteins;
{
	CREATE TABLE `proteins` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`pname` varchar(255) NOT NULL,
	`originalprice` int(10) DEFAULT NULL,
	`soldprice` int(10) NOT NULL,
	`imgsrc` varchar(255) NOT NULL,
	`category` varchar(255) NOT NULL,
	`image1` varchar(255) DEFAULT NULL,
	`image2` varchar(255) DEFAULT NULL,
	`image3` varchar(255) DEFAULT NULL,
	`desc` mediumtext,
	`productinfo` mediumtext,
	PRIMARY KEY (`id`)
	)
}
+---------------+--------------+------+-----+---------+----------------+
| Field         | Type         | Null | Key | Default | Extra          |
+---------------+--------------+------+-----+---------+----------------+
| id            | int(10)      | NO   | PRI | NULL    | auto_increment |
| pname         | varchar(255) | NO   |     | NULL    |                |
| originalprice | int(10)      | YES  |     | NULL    |                |
| soldprice     | int(10)      | NO   |     | NULL    |                |
| imgsrc        | varchar(255) | NO   |     | NULL    |                |
| category      | varchar(255) | NO   |     | NULL    |                |
| image1        | varchar(255) | YES  |     | NULL    |                |
| image2        | varchar(255) | YES  |     | NULL    |                |
| image3        | varchar(255) | YES  |     | NULL    |                |
| desc          | mediumtext   | YES  |     | NULL    |                |
| productinfo   | mediumtext   | YES  |     | NULL    |                |
+---------------+--------------+------+-----+---------+----------------+
11 rows in set (0.00 sec)

mysql> describe vitamins;
{
	CREATE TABLE `vitamins` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`pname` varchar(255) NOT NULL,
	`originalprice` int(10) DEFAULT NULL,
	`soldprice` int(10) NOT NULL,
	`imgsrc` varchar(255) NOT NULL,
	`category` varchar(255) NOT NULL,
	`image1` varchar(255) DEFAULT NULL,
	`image2` varchar(255) DEFAULT NULL,
	`image3` varchar(255) DEFAULT NULL,
	`desc` mediumtext,
	`productinfo` mediumtext,
	PRIMARY KEY (`id`)
	)
}
+---------------+--------------+------+-----+---------+----------------+
| Field         | Type         | Null | Key | Default | Extra          |
+---------------+--------------+------+-----+---------+----------------+
| id            | int(10)      | NO   | PRI | NULL    | auto_increment |
| pname         | varchar(255) | NO   |     | NULL    |                |
| originalprice | int(10)      | YES  |     | NULL    |                |
| soldprice     | int(10)      | NO   |     | NULL    |                |
| imgsrc        | varchar(255) | NO   |     | NULL    |                |
| category      | varchar(255) | NO   |     | NULL    |                |
| image1        | varchar(255) | YES  |     | NULL    |                |
| image2        | varchar(255) | YES  |     | NULL    |                |
| image3        | varchar(255) | YES  |     | NULL    |                |
| desc          | mediumtext   | YES  |     | NULL    |                |
| productinfo   | mediumtext   | YES  |     | NULL    |                |
+---------------+--------------+------+-----+---------+----------------+
11 rows in set (0.00 sec)

mysql> describe cart;
{
	CREATE TABLE `cart` (
	`sessionid` varchar(255) NOT NULL,
	`productid` int(10) NOT NULL,
	`username` varchar(255) DEFAULT NULL,
	`category` varchar(255) NOT NULL
	)
}
+-----------+--------------+------+-----+---------+-------+
| Field     | Type         | Null | Key | Default | Extra |
+-----------+--------------+------+-----+---------+-------+
| sessionid | varchar(255) | NO   |     | NULL    |       |
| productid | int(10)      | NO   |     | NULL    |       |
| username  | varchar(255) | YES  |     | NULL    |       |
| category  | varchar(255) | NO   |     | NULL    |       |
+-----------+--------------+------+-----+---------+-------+
4 rows in set (0.00 sec)

mysql> describe credentials;
{
	CREATE TABLE `credentials` (
	`firstname` varchar(30) NOT NULL,
	`lastname` varchar(30) DEFAULT NULL,
	`username` varchar(30) NOT NULL,
	`password` varchar(30) NOT NULL,
	PRIMARY KEY (`username`),
	UNIQUE KEY `UID_UNIQUE` (`username`)
	)
}
+-----------+-------------+------+-----+---------+-------+
| Field     | Type        | Null | Key | Default | Extra |
+-----------+-------------+------+-----+---------+-------+
| firstname | varchar(30) | NO   |     | NULL    |       |
| lastname  | varchar(30) | YES  |     | NULL    |       |
| username  | varchar(30) | NO   | PRI | NULL    |       |
| password  | varchar(30) | NO   |     | NULL    |       |
+-----------+-------------+------+-----+---------+-------+
4 rows in set (0.00 sec)