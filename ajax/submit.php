<?php
include "../connection.php";
$name = $_POST['name'];
$fName= $_POST['fName'];
$sex = $_POST['sex'];
$age = $_POST['age'];
$address = $_POST['address'];
$state = $_POST['state'];
$district = $_POST['district'];
$number = $_POST['number'];
echo $name;
$sql = "INSERT INTO submissions (name,sex,age,address,state,district,number,fName,id) VALUES ('".$name."','".$sex."','".$age."','".$address."','".$state."','".$district."','".$number."','".$fName."',NULL)";
mysql_query($sql);

?>