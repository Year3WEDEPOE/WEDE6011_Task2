<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Connect to DB</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<?php
$DBName = "bookstore";
$DBConnect = mysqli_connect ("localhost","root","@Dvtech123!","bookstore");
if($DBConnect === FALSE)
            echo "<p> Connection Failed /<p>\n";
        
        else {
            echo "<p> Successfully create the " . "\"$DBName\" database . </p>\n";
        }
            
?>
</body>