<?php 
include "config.php";
$stu_id = $_GET['id'];
$sql2= "DELETE FROM `assign_task` WHERE `id_acc` = '$stu_id'";
if($conn->query($sql2)){
    header("location: index.php");
    
 }
?>
	