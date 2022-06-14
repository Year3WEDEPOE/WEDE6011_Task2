<?php
include 'DBConn.php';
$drop_query = 'DROP TABLE IF EXISTS `bookstore`.`tbluser`';

$create_query = 'CREATE TABLE IF NOT EXISTS `tbluser` (
    `StudNum` int NOT NULL,
    `StudName` varchar(50) NOT NULL,
    `SPassword` varchar(10) NOT NULL,
    `SConfirmPassword` varchar(10) NOT NULL,
    `Semail` varchar(50) NOT NULL,
    PRIMARY KEY (`StudNum`) ';

$field_separator = '\'\t\''; //character which seperates the fields in csv file it can other than \t
$line_separator = '\'\n\''; //character which seperates the records in csv file it can other than \n
if (file_exists("txtUser.txt")) {
    $file = "txtUser.txt";
    $current = file_get_contents($file);
} else {
    $myfile = fopen("log.txt", "w");
    header("Refresh:0");
}
$import_query = ' LOAD DATA LOCAL INFILE \''.$file.
'\' INTO TABLE `bookstore`.`tbluser` FIELDS TERMINATED BY '.$field_separator.
' LINES TERMINATED BY '.$line_separator;
    mysqli_query($DBConnect,$drop_query); // drop the table if it exists
    mysqli_query($DBConnect,$create_query); //create the table
    mysqli_query($DBConnect,$import_query); // import the csv file
    $rows_imported = mysqli_affected_rows($DBConnect); // returns how many rows are affected/inserted
    echo $rows_imported.' row(s)affected';
?>