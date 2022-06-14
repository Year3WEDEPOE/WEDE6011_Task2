<?php

session_start();

if(isset($_SESSION['StudNum']))
{
	unset($_SESSION['StudName']);

}

header("Location: login.php");
die;