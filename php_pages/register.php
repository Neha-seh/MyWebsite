<?php

include "db_config.php";

$fname = $_POST["first_name"];
$lname = $_POST["last_name"];
$cEmail = $_POST[ "email"];
$cPass = $_POST["paasword"];
$checkPass = $_POST["re_enter_pass"];
// $select_type = $POST ["customer"];

$con = mysqli_connect("localhost","myuser","mypass","mydb");// connetion parameter

$sql = "insert into cust_registration values('".$fname."','".$lname."' ,'".$cEmail."' ,'".$cPass."', '".$checkPass."', 'customer')";

$conn->query($sql);

if(!$sql){
echo mysql_error();
}
else
{
header("Location:Customerinfo.php");
}