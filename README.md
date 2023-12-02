# HOSPITAL MANAGEMENT SYSTEM

### ****Creating the Database Table****

Create a table named *hms* inside your MySQL database using the following code.

```sql
CREATE TABLE `hms` (
  `doctor_id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `specialization` varchar(255) NOT NULL,
  `license_no` int(255) NOT NULL,
  PRIMARY KEY (`doctor_id`)
);


### ****Copy files to htdocs folder****

Download the above files. Create a folder named *hms* inside *htdocs* folder in *xampp* directory. Finally, copy the *hms* folder inside *htdocs* folder. Now, visit [localhost/hms](http://localhost/hms) in your browser and you should see the application.

<h1> Edited BY HRS </h1>

