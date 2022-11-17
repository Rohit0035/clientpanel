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
                  <h3>Total Task</h3>
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">                                      
                       <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Task</li>
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
                    <a href="addtaskform.php" class="btn btn-primary">Add Task</a>
                  </div>
                  <div class="card-body">
                    <?php 
                        $id=$_SESSION["user_id"];
                        include('config.php');
                        $sql= "SELECT * FROM task LEFT JOIN process ON task.current = process.id LEFT JOIN graph ON task.priority = graph.id WHERE task.client_id = $id";
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
              <!-- Individual column searching (text inputs) Ends-->
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
      
        <!-- footer start-->
        <?php include('footer.php') ;?>