<?php

    if(isset($_POST['submit'])){
    include('config.php');
     $id = mysqli_real_escape_string($conn,$_POST['id']);
    $note = mysqli_real_escape_string($conn,$_POST['note']);
   
    $sql1 = "UPDATE `schedule_list` SET `notes`='$note' WHERE `id` = '{$id}'";
    if($conn->query($sql1)){
        ?>
        <script>window.location.href='donemeeting.php'</script>
        <?php
        }} 
?>