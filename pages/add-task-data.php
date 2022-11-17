<?php

    if(isset($_POST['submit'])){
    include('config.php');
    $dates = date("Y-m-d");
    
    move_uploaded_file($_FILES['filename']['tmp_name'], $_FILES['filename']['name']);
     $idii = mysqli_real_escape_string($conn,$_POST['idii']);
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $date = mysqli_real_escape_string($conn,$_POST['date']);
    $ldate = mysqli_real_escape_string($conn,$_POST['ldate']);
    // $class = mysqli_real_escape_string($conn,$_POST['class']);
    $priority = mysqli_real_escape_string($conn,$_POST['priority']);
    $note = mysqli_real_escape_string($conn,$_POST['note']);
    $image = mysqli_real_escape_string($conn, $_FILES['filename']['name']);
    
    
    $sql1 = "INSERT INTO `task`(`name`, `open`, `date`, `last_date`, `image`, `priority`, `notes`,`client_id`) VALUES ('$name','$dates','$date','$ldate','$image','$priority','$note','$idii')";
    if($conn->query($sql1)){
        ?>
        <script>window.location.href='alltask.php'</script>
        <?php
        }} 
?>