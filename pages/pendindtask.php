 <!-- Page Header Ends-->
 <?php
 session_start();
 if(!isset($_SESSION["user_id"])){
   header("location: login.php");
 } ?>    
 <?php include('header.php') ;?>

<!-- Page Body Start-->
<div class="page-body-wrapper">

  <!-- Page Sidebar Start-->

  <?php include('sidebar.php') ;?>

  <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-6">
                  <h3>Pending Task</h3>
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">                                       
                      <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Pending Task</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <!-- Individual column searching (text inputs) Starts-->
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header" style="padding:15px; text-align: right;">
                    <!-- <h5>Individual column searching (text inputs) </h5><span>The searching functionality provided by DataTables is useful for quickly search through the information in the table - however the search is global, and you may wish to present controls that search on specific columns.</span> -->
                    <!-- <a href="addtaskform.php" class="btn btn-primary">Create Task</a> -->
                  </div>
                  <div class="card-body">
                      <?php 
                             $id = $_SESSION["user_id"];
                            include('config.php');
                            $sql= "SELECT  assign_task.*,admin.id as id,admin.first_name as first_name,process.status,task.idd as task_id, task.link as task_title,task.name as task_name,task.notes as task_not,task.date as task_start_date,task.last_date as task_last_date,task.image as task_doc,task.client_id as client_id, employees.name as emp_name,employees.father_name as father_name,employees.gmail as emp_gmail,employees.number  as emp_number,graph.level as g_level
                            FROM `assign_task` 
                            LEFT JOIN `task` ON assign_task.task_id = task.idd
                            LEFT JOIN `graph` ON graph.id=task.priority
                            LEFT JOIN `employees` ON assign_task.user_id= employees.id
                            LEFT JOIN `process` ON process.id=assign_task.fld_status
                            LEFT JOIN `admin` ON assign_task.task_assaign_by=admin.id
                            WHERE assign_task.fld_status  = 3 AND task.client_id = $id";
                            $results = mysqli_query($conn,$sql) or die("Query failed");
                      ?>
                    <div class="table-responsive product-table">
                      <table class="display" id="basic-1">
                        <thead>
                          <tr>
                            <th>S. No.</th>
                            <th>Task Name</th>
                            <th>Task Date</th>
                            <th>Task End Date</th>
                            <!-- <th>Start Time</th> -->
                            <!-- <th>End Time</th> -->
                            <th>Document</th>
                            <th>Description</th>
                            <th>Priority</th>
                            <th>Status</th>
                            <!-- <th>Action</th> -->
                          </tr>
                        </thead>
                        <tbody>
                            <?php 	if(mysqli_num_rows($results)>0){
                                  $i=1;
                                 while($row = mysqli_fetch_assoc($results)){ 
                            ?>
                          <tr>
                          <td><?php echo $i; ?></td>
                            <td><?php echo $row['task_name']; ?></td>
                            <td><?php echo $row['task_start_date']; ?></td>
                            <td><?php echo $row['task_last_date']; ?></td>
                            <td><a href="<?php echo $row['task_doc']; ?>">Docs</a></td>
                            <td><?php echo $row['task_not']; ?></td>
                            <td>
                                <?php if($row["g_level"] == 'High'){ ?>
                                <span class="tag_h"><?php echo $row["g_level"]; ?></span>
                                <?php }elseif($row['g_level'] == 'Mid'){ ?>
                                <span class="tag_m"><?php echo $row["g_level"]; ?></span>
                                <?php  }else{ ?>
                                <span class="tag_l"><?php echo $row["g_level"]; ?></span>
                                <?php  } ?>
                            </td>
                            <td>
                                <?php if($row["status"] == 'Completed'){ ?>
                                  <span
                                    class="badge light badge-success"><?php echo $row["status"]; ?></span>
                                <?php }elseif($row['status'] == 'Process'){ ?>
                                  <span
                                    class="badge light badge-warning"><?php echo $row["status"]; ?></span>
                                <?php  }else{ ?>
                                  <span
                                    class="badge light badge-danger"><?php echo $row["status"]; ?></span>
                                <?php  } ?>
                            </td>
                            <!-- <td> <button class="btn btn-success btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Active</button></td> -->
                            <!-- <td>
                              <a class="btn btn-danger btn-xs" href="delete-task.php?id=<?php echo $row['id_acc'] ?>"><i class="fas fa-trash-alt"></i></a>
                              <a href="javascript:void(0)" class="btn btn-success btn-xs edit" data-id="<?php echo $row['id_acc'] ?>"><i class="fas fa-edit"></i></a>
                            </td> -->
                          </tr>
                          <?php $i++; } }else{
                            echo "<td colspan='10'>No record fond</td>";
                            }  ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Individual column searching (text inputs) Ends-->
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
      
        <button type="button" hidden class="btn btn-primary assain" data-toggle="modal" data-target="#assain_task_model">
  Launch demo modal
</button>
<div class="modal fade" id="assain_task_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <div class="modal-body">
		  
			<div id="model-data"></div>
		  
	  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
        $(document).ready(function(){
			$('.edit').click(function(){
				var id = $(this).data('id');
				$.ajax({    
					type: "GET",
					url: "task-edit.php", 
					data: {id:id},                  
					success: function(data){                    
						$("#model-data").html(data); 
						$(".assain").trigger('click');				
					}
				});
			});
		});
    </script>
        <!-- footer start-->
        <?php include('footer.php') ;?>