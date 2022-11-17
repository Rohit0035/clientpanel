<?php 
include "config.php";
$stu_id = $_GET['id'];
$sql2= "DELETE FROM `reply` WHERE `id_r` ='$stu_id'";

	if($conn->query($sql2)){
		header("location: replylist.php");
	}
?>