<?php
include('config.php'); 
$id = $_GET['id'];
$query = "SELECT * FROM `schedule_list` WHERE schedule_list.id = '$id'";
$results = mysqli_query($conn,$query); 
$row = mysqli_fetch_assoc($results);

$html = '<form action="meeting-note-update.php" method="post">
         <input type="hidden" name="id" value="'.$row['id'].'">
         <div><h4>title : '.$row['title'].'</h4></div>
         <div><b>Meeting Ajenda : '.$row['description'].'</b></div>
         <div><b>Add Note :- </b></div>
         <div><textarea class="form-control" placeholder="description..." discription name="note">
         </textarea></div>
         <input type="submit" class="btn btn-info" value="submit" name="submit">
         </form>';

echo $html;

?> 