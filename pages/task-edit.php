<?php
include('config.php');
$id = $_GET['id'];
$query = "SELECT assign_task.*,process.status,task.idd as task_id, task.link as task_title,task.name as task_name,task.notes as task_not,task.open as task_open,task.date as task_start_date,task.last_date as task_last_date,task.image as task_doc,task.priority as task_priority, employees.name as emp_name 
FROM `assign_task`
 LEFT JOIN `task` ON assign_task.task_id = task.idd
 LEFT JOIN `employees` ON assign_task.user_id= employees.id 
 LEFT JOIN `process` ON process.id=assign_task.fld_status 
 WHERE assign_task.id_acc= '$id'";
$results = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($results);

$sql= "SELECT * FROM `process`";
$resultss = mysqli_query($conn,$sql);
$option = "";    
while($rows = mysqli_fetch_assoc($resultss)){
     if($rows['status'] == $row["status"]){
        $select = "selected";
     } else{
        $select = "";
    }
    $option .= '<option value="'.$rows['id'].'" '.$select.'> '. $rows['status'] .'</option>';
}  
$html = '<form action="update_task_status.php" method="post">
         <input type="hidden" name="id" value="'.$row['id_acc'].'">
         <div><h4>task name : '.$row['task_name'].'</h4></div>
         <div><b>Priority : '.$row['task_priority'].'</b></div>
         <div><b>status : </b>
            <select class="form-select" name="status">
                <option>Choose...</option>
                '.$option.'
            </select>
         </div>
         <div><p>Notes : '.$row['task_not'].'</p></div>
         <div><b>Document :<a href="'.$row['task_doc'].'">PDF</a></b></div>
         <div><b>due Date : '.$row['task_last_date'].'</b></div>
         <input type="submit" class="btn btn-info" value="Update" name="submit">
         </form>';
echo $html;
?>