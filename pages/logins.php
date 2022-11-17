<?php
  session_start(); 
  include('config.php');
  if(isset($_POST['submit'])){  
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $sql = "SELECT c.*,s.action,s.method,s.plan
            FROM clients c 
            join subscribe s on s.sub_id=c.c_id
            WHERE c.gmail = '$email' AND c.password = '$password'
            AND s.action = 'Active'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0)
    {
      $row = mysqli_fetch_assoc($result);
      $_SESSION["user_id"] = $row["c_id"];   
      $_SESSION["fname"] = $row["name"];
      $_SESSION["lname"] = $row["lname"];
      $_SESSION["email"] = $row["gmail"];
      header("location: index.php");
    }else{
      echo '<div class="alert alert-danger" ><p style="color:red; text-align:center;">Username & password are not matched.</p></div>';
    }
  }
?>