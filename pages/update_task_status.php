<?php 
if(isset($_POST['submit'])){
$idi = $_POST['id'];
include("config.php");
$status = $_POST['status'];
$sql="UPDATE `assign_task` SET `fld_status`='{$status}' WHERE `id_acc` = $idi";
if($conn->query($sql)){
    header("location: comletedtask.php");
}
}
?>