<!-- Page Header Ends-->
<?php
 session_start();
 if(!isset($_SESSION["name"])){
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
                   <li class="breadcrumb-item active">Employees</li>
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
                  
                 </div>
                 <div class="card-body">
                   <?php 
                       include('config.php');
                       $sql= "SELECT * FROM `employees`";
                       $results = mysqli_query($conn,$sql) or die("Query failed");
                     ?>
                   <div class="table-responsive product-table">
                     <table class="display" id="basic-1">
                       <thead>
                         <tr>
                           <th>S. No.</th>
                           <th>Name</th>
                           <th>Gmail</th>
                           <th>Number</th>
                           <!-- <th>Start Time</th> -->
                           <!-- <th>End Time</th> -->
                           <th>Option</th>
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
                           <td><?php echo $row['gmail']; ?></td>
                           <td><?php echo $row['number']; ?></td>
                          
                           <!-- <td> <button class="btn btn-success btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Active</button></td> -->
                           <td>
                              <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                <input type="hidden" name="task_id" value="<?php echo $_GET['id'] ?>">
                                <input type="hidden" name="assaign_by" value="<?php echo $_SESSION["user_id"] ?>">
                                <input type="text" name="stutas" value="3">,kjnjkb
                                <input type="checkbox" name="user_id" value="<?php echo $row["id"] ?>">
                                <button class="btn btn-primary" name="submit">send</button>
                            </form>
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
                   <?php 
                      $id_i =$_GET['id'];
                      if(isset($_POST['submit'])){
                        include('config.php');
                        if(function_exists('date_default_timezone_set')) {
                            date_default_timezone_set("Asia/Kolkata");
                        }
                        // then use the date functions, not the other way around
                        $open = date("d/m/Y");
                        $status = mysqli_real_escape_string($conn,$_POST['status']);
                        $task_id = mysqli_real_escape_string($conn,$_POST['task_id']);
                        $assaign_by = mysqli_real_escape_string($conn,$_POST['assaign_by']);
                        $user_id = mysqli_real_escape_string($conn,$_POST['user_id']);
                        $sql2 ="INSERT INTO `assign_task`(`user_id`, `task_id`, `task_assaign_by`, `fld_status`, `assing_date`) VALUES ('$user_id','$task_id','$assaign_by','$status','$open')";
                        if($conn->query($sql2)){
                          ?>
                          <script>window.location.href='alltask.php'</script>
                          <?php
                        }} ?>
       <!-- footer start-->
       <?php include('footer.php') ;?>