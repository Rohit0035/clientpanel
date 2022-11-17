<?php 
include "config.php";
$stu_id = $_GET['id'];
$sql2= "DELETE FROM `task` WHERE `idd` = '$stu_id'";
if($conn->query($sql2)){
    header("location: index.php");
    
 }
?>
	