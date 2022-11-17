<?php
include('config.php');
$id = $_GET['id'];
$query = "SELECT * FROM `schedule_list` JOIN `clients` ON schedule_list.link = clients.c_id WHERE schedule_list.id = '$id'";
$html = "";
$results = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($results)){
// print_r($row);
// die;
$html .= ' <div><b>title : '.$row['title'].'</b></div>
         <div><b>Meeting Ajenda : '.$row['description'].'</b></div>
         <div><b>Description: '.$row['description'].'</b></div>
         <div><b>Start Date & Time : '.$row['start_datetime'].'</b></div>
         <div><b>End Date & Time : '.$row['end_datetime'].'</b></div>
         <div><b>Notes : '.$row['notes'].'</b></div>';
}
         echo $html;
?>