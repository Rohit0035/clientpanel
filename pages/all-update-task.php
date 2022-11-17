<?php

    if(isset($_POST['submit'])){
    include('config.php');
    move_uploaded_file($_FILES['filename']['tmp_name'], $_FILES['filename']['name']);
     $id = mysqli_real_escape_string($conn,$_POST['user_id']);
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $date = mysqli_real_escape_string($conn,$_POST['date']);
    $ldate = mysqli_real_escape_string($conn,$_POST['ldate']);
    $class = mysqli_real_escape_string($conn,$_POST['class']);
    $priority = mysqli_real_escape_string($conn,$_POST['priority']);
    $note = mysqli_real_escape_string($conn,$_POST['note']);
    $image = mysqli_real_escape_string($conn, $_FILES['filename']['name']);
    
    
    $sql1 = "UPDATE `task` SET `name`='{$name}',`date`='{$date}',`last_date`='{$ldate}',`image`='{$image}',`priority`='{$priority}',`notes`='{$note}',`current`='{$class}' WHERE `idd` = '{$id}'";
    if($conn->query($sql1)){
        ?>
        <script>window.location.href='index.php'</script>
        <?php
        }} 
?>