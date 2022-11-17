<?php 
include "config.php";
$stu_id = $_GET['id'];
$sql2= "DELETE FROM `schedule_list` WHERE `id` = '$stu_id'";
if($conn->query($sql2)){
    ?>
    <script>window.location.href='meetingall.php'</script>
    <?php
    }
?>
	