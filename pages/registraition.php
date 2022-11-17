<?php

if(isset($_POST['submit'])){

    include('config.php');

    $fname =$_POST['fname'];
    $lname =$_POST['lname'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $company = $_POST['company'];
    $p_number = $_POST['p_number'];
    $p_email = $_POST['p_email'];
    $gst = $_POST['gst'];
    $pan = $_POST['pan'];
    $city = $_POST['city'];
    $service = $_POST['service'];
    $password = $_POST['password'];
    $sql = "INSERT INTO `clients`(`name`, `lname`, `company_name`, `gmail`, `number`, `owner_mobile_number`, `owner_gmail`, `gst`, `pan`, `city`, `services`, `password`) VALUES ('{$fname}','{$lname}','{$company}','{$email}','{$number}','{$p_number}','{$p_email}','{$gst}','{$pan}','{$city}','{$service}','{$password}')";
    if($conn->query($sql)){
        $last_id = $conn->insert_id;
        $sql1 = "INSERT INTO `training`(`client_id`, `start_date`, `end_date`, `subcribe`, `action`) VALUES ('{$last_id}','-','-','-','Deactive')";
        if($conn->query($sql1)){
            $sql2 = "INSERT INTO `empaction`( `sub_id`, `action`,`plan`) VALUES ('{$last_id}','Deactive','-')";
            if($conn->query($sql2)){
            header("location: login.php");
            }
        }
    }
}
?>  