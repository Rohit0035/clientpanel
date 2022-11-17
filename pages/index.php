<?php
 session_start();
 if(!isset($_SESSION["user_id"])){
   header("location: login.php");
 } ?>
  
   
   <!-- Page Header Ends-->
      
   <?php include('header.php') ;?>

 <style>
  .bg-primary.b-r-4.card-body.st-b1 {
    background: #2196f3 !important;
   }
   .bg-secondary.b-r-4.card-body.st-b2 {
    background: #4caf50 !important;
   }
   .bg-secondary .media.static-top-widget .align-self-center {
    background-color: unset !important;
   }
   .bg-primary.b-r-4.card-body.st-b3 {
    background: #f44336 !important;
   }
   .bg-primary .media.static-top-widget .align-self-center {
    background-color: unset !important;
   }
  .counter-box.bg-white.p-20.mb-20 {
    margin-bottom: 50px;
   }
   .bg-primary.b-r-4.card-body.st-b4 {
    background: #ff9800 !important;
   }
   .addtask-btn {
    text-align: center;
    padding: 20px;
    border: dashed 2px;
    border-color: #008ee3;
   }
   .card-header.st-1 {
    padding: 20px;
   } 
   .card .card-body {
    padding: 25px;
   }
  </style>  

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
                  <h3>Dashboard</h3>
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">
                      <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Home</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          
              <div class="container-fluid">
                 <div class="counter-box bg-white p-20 mb-20">
                      <div class="row">
                         <h5>Task Management</h5>
                         <hr>
                            <div class="col-sm-6 col-xl-3 col-lg-6">
                              <div class="card o-hidden">
                                <a href="alltasklist.php">
                                  <div class="bg-primary b-r-4 card-body st-b1">
                                    <div class="media static-top-widget">
                                      <div class="align-self-center text-center"><i data-feather="check-square"> </i></div>
                                      <div class="media-body"><span class="m-0">Total</span>
                                        <h4 class="mb-0 counter">6659</h4><i class="icon-bg" data-feather="database"></i>
                                      </div>
                                    </div>
                                  </div>
                                </a>
                              </div>
                            </div>
                            <div class="col-sm-6 col-xl-3 col-lg-6">
                              <div class="card o-hidden">
                               <a href="comletedtask.php">
                                <div class="bg-secondary b-r-4 card-body  st-b2">
                                  <div class="media static-top-widget">
                                    <div class="align-self-center text-center"><i data-feather="check-square"> </i></div>
                                    <div class="media-body"><span class="m-0">Completed </span>
                                      <h4 class="mb-0 counter">9856</h4><i class="icon-bg" data-feather="shopping-bag"></i>
                                    </div>
                                  </div>
                                </div>
                               </a>
                              </div>
                            </div>
                            <div class="col-sm-6 col-xl-3 col-lg-6">
                              <div class="card o-hidden">
                                <a href="pendingtask.php">
                                    <div class="bg-primary b-r-4 card-body  st-b3">
                                      <div class="media static-top-widget">
                                        <div class="align-self-center text-center"><i data-feather="check-square"> </i></div>
                                        <div class="media-body"><span class="m-0">Pending</span>
                                          <h4 class="mb-0 counter">893</h4><i class="icon-bg" data-feather="message-circle"></i>
                                        </div>
                                      </div>
                                    </div>
                                 </a>
                              </div>
                            </div>
                            <div class="col-sm-6 col-xl-3 col-lg-6">
                              <div class="card o-hidden">
                                 <a href="inprocesstask.php">
                                    <div class="bg-primary b-r-4 card-body  st-b4">
                                      <div class="media static-top-widget">
                                        <div class="align-self-center text-center"><i data-feather="check-square"> </i></div>
                                        <div class="media-body"><span class="m-0">InProcess </span>
                                          <h4 class="mb-0 counter">45631</h4><i class="icon-bg" data-feather="user-plus"></i>
                                        </div>
                                      </div>
                                    </div>
                                  </a>
                              </div>
                            </div>
                      </div>
                </div>
                <!-- meeting management -->
                  <div class="counter-box bg-white p-20 mb-20">
                      <div class="row">
                         <h5>Meeting Management</h5>
                         <hr>
                            <div class="col-sm-6 col-xl-4 col-lg-4">
                              <div class="card o-hidden">
                               <a href="schedulemeeting.php">
                                <div class="bg-primary b-r-4 card-body">
                                  <div class="media static-top-widget">
                                    <div class="align-self-center text-center"><i data-feather="users"></i></div>
                                    <div class="media-body"><span class="m-0">Total Meeting</span>
                                      <h4 class="mb-0 counter">6659</h4><i class="icon-bg" data-feather="database"></i>
                                    </div>
                                  </div>
                                </div>
                                 </a>
                              </div>
                            </div>
                            <div class="col-sm-6 col-xl-4 col-lg-4">
                              <div class="card o-hidden">
                               <a href="donemeeting.php">
                                <div class="bg-secondary b-r-4 card-body  st-b2">
                                  <div class="media static-top-widget">
                                    <div class="align-self-center text-center"><i data-feather="users"></i></div>
                                    <div class="media-body"><span class="m-0">Done Meeting</span>
                                      <h4 class="mb-0 counter">6659</h4><i class="icon-bg" data-feather="shopping-bag"></i>
                                    </div>
                                  </div>
                                </div>
                                 </a>
                              </div>
                            </div>
                            <div class="col-sm-6 col-xl-4 col-lg-4">
                              <div class="card o-hidden">
                              <a href="pendingmeeting.php">
                                <div class="bg-secondary b-r-4 card-body">
                                  <div class="media static-top-widget">
                                    <div class="align-self-center text-center"><i data-feather="users"></i></div>
                                    <div class="media-body"><span class="m-0">Pending Meeting</span>
                                      <h4 class="mb-0 counter">9856</h4><i class="icon-bg" data-feather="shopping-bag"></i>
                                    </div>
                                  </div>
                                </div>
                               </a>
                              </div>
                            </div>
                            
                      </div>
                </div>

                <!-- today task table -->

                <div class="counter-box  mb-20">
                    <div class="row">
                        <div class="col-sm-12">
                          <div class="card">
                            <div class="card-header" style="padding:15px; text-align: left;">
                              <h5>Today Task</h5>
                             
                            </div>
                            <div class="card-body">
                                <?php 
                                  $id=$_SESSION["user_id"];
                                  $dates = date("Y-m-d");
                                  include('config.php');
                                  $sql= "SELECT * FROM task 
                                  LEFT JOIN process ON task.current = process.id 
                                  LEFT JOIN graph ON task.priority = graph.id 
                                  WHERE task.client_id = '$id' AND task.open = '$dates'";
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
                                  </tr>
                                  </thead>
                                  <tbody>
                                      <?php 	if(mysqli_num_rows($results)>0){
                                          $i=1;
                                        while($row = mysqli_fetch_assoc($results)){ 
                                      ?>
                                      <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['date']; ?></td>
                                        <td><?php echo $row['last_date']; ?></td>
                                        <td><a href="<?php echo $row['image']; ?>">Docs</a></td>
                                        <td><?php echo $row['notes']; ?></td>
                                        <td>
                                          <?php if($row["level"] == 'High'){ ?>
                                          <span class="tag_h"><?php echo $row["level"]; ?></span>
                                          <?php }elseif($row['level'] == 'Mid'){ ?>
                                          <span class="tag_m"><?php echo $row["level"]; ?></span>
                                          <?php  }else{ ?>
                                          <span class="tag_l"><?php echo $row["level"]; ?></span>
                                          <?php  } ?>
                                        </td>
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
                    </div>
                </div>

                <!-- today task table close -->
                
                 <!-- today Meeting table -->

                 <div class="counter-box mb-20">
                    <div class="row">
                        <div class="col-sm-12">
                          <div class="card">
                            <div class="card-header" style="padding:15px; text-align: left;">
                              <h5>Today Meeting</h5>
                            </div>
                               <div class="card-body">
                               <?php
                                $dates = date("Y-m-d");
                                include('config.php');
                                $sql= "SELECT * FROM `schedule_list` JOIN `clients` ON schedule_list.link = clients.c_id WHERE schedule_list.pos = '3' AND schedule_list.request = 'Accept' AND schedule_list.start_datetime between '$dates 12:00' AND '$dates 23:30'";
                                $results = mysqli_query($conn,$sql) or die("Query failed");	
                                ?>
                               <table id="example" class="table table-striped" style="width:100%">
                               <thead>
                                    <tr>
                                    <th>S.No</th>
                                    <th>Client Name</th>
                                    <th>Company Name</th>
                                    <th>title</th>
                                    <th>Start Date/Time</th>
                                    <th>End Date/Time</th> 
                                    <!-- <th>Ajenda</th> -->
                                    <!-- <th>Remark</th> -->
                                    <!-- <th>Status</th> -->
                                    <th>Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                              <?php 	if(mysqli_num_rows($results)>0){
                                      $i=1;
                                    while($row = mysqli_fetch_assoc($results)){ ?>
                                  <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $row["name"]; ?></td>
                                    <td><?php echo $row["company_name"]; ?></td>
                                    <td><?php echo $row["title"]; ?></td>
                                    <td><?php echo date('Y-m-d H:i', strtotime($row["start_datetime"])); ?></td>
                                    <td><?php echo date('Y-m-d H:i', strtotime($row["end_datetime"])); ?></td>
                                    <td>
                                    <div class="d-flex">
                                    <a href="javascript:void(0)"
                                            class="btn btn-success shadow btn-xs sharp view"
                                            data-id="<?php echo $row['id'] ?>"><i
                                                class="fa fa-eye"></i></a>
                                      <!-- <a href="javascript:void(0)"
                                        class="btn btn-primary shadow btn-xs sharp me-1 edit" 
                                        data-id="<?php echo $row['id'] ?>"><i
                                          class="fas fa-pencil-alt"></i></a> -->
                                      <!-- <a href="delete-meeting.php?id=<?php echo $row["id"]; ?>" 
                                        class="btn btn-danger shadow btn-xs sharp"><i
                                          class="fa fa-trash"></i></a> -->
                                    </div>
                                    </td>
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
                </div>

                <!-- today meeting table close -->

                 <div class="Dropzone-box">
                      <div class="row">
                          <!-- add task  -->
                          <div class="col-xl-6">
                            <div class="row">
                              <div class="col-12">
                                <div class="card">
                                  <div class="card-header st-1">
                                    <h4 class="card-title">Add Task</h4>
                                  </div>
                                  <div class="card-body">
                                    <div class="addtask-btn">
                                        <a href="addtaskform.php">
                                      <img src="../assets/images/bg-a.png" alt=""  width="150px"/>
                                      <h4 style="font-weight: bold;">Add New Task</h4>
                                        </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>    
                          <!-- reqest meeting -->
                                    <div class="col-xl-6">
                                      <div class="row">
                                        <div class="col-12">
                                          <div class="card">
                                            <div class="card-header st-1">
                                              <h4 class="card-title">Request Meeting</h4>
                                            </div>
                                            <div class="card-body">
                                              <div class="addtask-btn">
                                                  <a href="addschedulemeet.php">
                                                <img src="../assets/images/met-bg.png" alt=""  width="200px"/>
                                                <h4 style="font-weight: bold;">New Request Meeting</h4>
                                                  </a>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                   </div>
                                                    
                         <!-- Add Feedback -->
                            <div class="col-xl-12">
                              <div class="row">
                                <div class="col-12">
                                  <div class="card">
                                    <div class="card-header st-1">
                                      <h4 class="card-title">Feedback</h4>
                                    </div>
                                    <div class="card-body">
                                      <a href="feedbackadd.php">
                                      <div class="addtask-btn">
                                        <img src="../assets/images/feed-bg.png" alt=""  width="200px"/>
                                        <h4 style="font-weight: bold;">Add Feedback</h4>
                                      </div>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                      </div>
                </div>

              <!-- Container-fluid Ends-->
              </div>
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
</div>
<!--**********************************
            Content body end
        ***********************************-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
	$(document).ready(function() {
		$('.view').click(function() {
			var id = $(this).data('id');
			$.ajax({
				type: "GET",
				url: "meeting_to.php",
				data: {
					id: id
				},
        success: function(data) {
					$("#model-data").html(data);
					$(".assain").trigger('click');
				}
			});
		});
	});
  </script>
         <!-- footer start-->
         <?php include('footer.php') ;?>

         <script>
            $(document).ready(function () {
    $('#example').DataTable();
});
         </script>