<?php
include('config.php');
$id = $_GET['id'];
$query = "SELECT * FROM `video` WHERE id = $id";
$results = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($results);
$html = '<iframe width="100%" height="345" src="' .$row['video']. '" allowfullscreen>
         </iframe>
         <div><h4>Title : '.$row['title'].'</h4></div>
         <div><b>Notes : '.$row['Discribe'].'</b></div>';
echo $html;
?>



