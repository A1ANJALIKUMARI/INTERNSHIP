<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','test_db');

// get the post records
$UserName = $_POST['UserName'];
$Password = $_POST['Password'];

// database insert SQL code
$sql = "INSERT INTO `test` ( `UserName`, `Password`,'id') VALUES ( '$UserName', '$Passwowrd','0')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>