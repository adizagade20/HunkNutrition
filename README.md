# WDL_Mini_Project
 
mysql> describe amino;
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
+-----------+-------------+------+-----+---------+-------+
| Field     | Type        | Null | Key | Default | Extra |
+-----------+-------------+------+-----+---------+-------+
| firstname | varchar(30) | NO   |     | NULL    |       |
| lastname  | varchar(30) | YES  |     | NULL    |       |
| username  | varchar(30) | NO   | PRI | NULL    |       |
| password  | varchar(30) | NO   |     | NULL    |       |
+-----------+-------------+------+-----+---------+-------+
4 rows in set (0.00 sec)

mysql>
