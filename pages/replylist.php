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
                 <h3>Message</h3>
               </div>
               <div class="col-6">
                 <ol class="breadcrumb">
                   <li class="breadcrumb-item"><a href="index.html">                                       
                    <i data-feather="home"></i></a></li>
                   <li class="breadcrumb-item">Dashboard</li>
                   <li class="breadcrumb-item active">Message</li>
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
                   <a href="reply.php" class="btn btn-primary">Add Message</a>
                 </div>
                 <div class="card-body">
                   <?php
                   $id = $_SESSION["user_id"];
                     include('config.php');
                     $sql= "SELECT * FROM `reply` WHERE `c_idi` = '$id'";
                     $results = mysqli_query($conn,$sql) or die("Query failed");
                   ?>
                   <div class="table-responsive product-table">
                     <table class="display" id="basic-1">
                       <thead>
                         <tr>
                           <th>S. No.</th>
                           <th>Service Name</th>
                           <th>Messages</th>
                         </tr>
                       </thead>
                       <tbody> 
                           <?php 	if(mysqli_num_rows($results)>0){
                                 $i=1;
                                while($row = mysqli_fetch_assoc($results)){ 
                           ?>
                         <tr>
                           <td><?php echo $i; ?></td>
                           <td><?php echo $row['service']; ?></td>
                           <td><?php echo $row['response']; ?></td>
                         </tr>
                         <?php $i++; } }else{
                           echo "<td colspan='4'>No record fond</td>";
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
       <?php include('footer.php') ;?>rep