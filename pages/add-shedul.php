<?php

    if(isset($_POST['submit'])){
    include('config.php');
     $idi = mysqli_real_escape_string($conn,$_POST['id']);
     $title = mysqli_real_escape_string($conn,$_POST['title']);
    $ajenda = mysqli_real_escape_string($conn,$_POST['ajenda']);
    $start_dates = mysqli_real_escape_string($conn,$_POST['start_date']);
    $end_dates = mysqli_real_escape_string($conn,$_POST['end_date']);
    
    $start_date = date('Y-m-d H:i',strtotime($start_dates));
    $end_date = date('Y-m-d H:i',strtotime($end_dates));
    
    $sql1 = "INSERT INTO `schedule_list`(`title`, `description`, `link`, `start_datetime`, `end_datetime`) VALUES ('$title','$ajenda','$idi','$start_date','$end_date')";
    if($conn->query($sql1)){
        ?>
        <script>window.location.href='schedulemeeting.php'</script>
        <?php
        }} 
?>