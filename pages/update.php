<?php

if(isset($_POST['submit'])){

    include('config.php');
    $id = $_POST['id'];
    // move_uploaded_file($_FILES['filename']['tmp_name'], $_FILES['filename']['name']);
    // $image = mysqli_real_escape_string($conn, $_FILES['filename']['name']);
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
    $sql = "UPDATE `clients` SET `name`='$fname',`lname`='$lname',`company_name`='$company',`gmail`='$email',`number`='$number',`owner_mobile_number`='$p_number',`owner_gmail`='$p_email',`gst`='$gst',`pan`='$pan',`city`='$city',`services`='$service',`password`='$password' WHERE `c_id` = '$id'";
    if($conn->query($sql)){
            header("location: user-profile.php");
    }
}
?>  

// https://nifty50algo.in/employees/logins.php