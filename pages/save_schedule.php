<?php 
    require_once('db-connect.php');

    if($_SERVER['REQUEST_METHOD'] !='POST'){
        echo "<script> alert('Error: No data to save.'); location.replace('./') </script>";
        $conn->close();
        exit;
    }
 
    extract($_POST);
    $allday = isset($allday);
    $start_date = date('Y-m-d H:i',strtotime($start_datetime));
    $end_date = date('Y-m-d H:i',strtotime($end_datetime));
    if(empty($id)){
        $sql = "INSERT INTO `schedule_list` (`title`,`description`,`link`,`start_datetime`,`end_datetime`) VALUES ('$title','$description','$link','$start_date','$$end_date')";
    }else{
        $sql = "UPDATE `schedule_list` set `title` = '{$title}', `description` = '{$description}',`link` = '{$link}', `start_datetime` = '{$start_date}', `end_datetime` = '{$$end_date}' where `id` = '{$id}'";
    }

    $save = $conn->query($sql);

    if($save){
        echo "<script> alert('Schedule Successfully Saved.'); location.replace('./') </script>";
    }else{
        echo "<pre>";
        echo "An Error occured.<br>";
        echo "Error: ".$conn->error."<br>";
        echo "SQL: ".$sql."<br>";
        echo "</pre>";
    }
    
    $conn->close();
?>