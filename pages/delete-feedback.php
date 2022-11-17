<?php 
include "config.php";
$stu_id = $_GET['id'];
$sql2= "DELETE FROM `reviews` WHERE `ida` ='$stu_id'";

	if($conn->query($sql2)){
		header("location: feedback.php");
	}
?>