<?php 
$localhost='localhost';
$username='root';
$password='';
$db_name='eshop';
$conn = new mysqli($localhost, $username, $password,$db_name) or die("Connect failed: %s\n". $conn -> error);
?>