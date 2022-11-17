<!-- Page Header Ends-->
      
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
                           include('config.php');
                           include('config.php');
                            $sql= "SELECT * FROM `video`";
                            $results = mysqli_query($conn,$sql) or die("Query failed");
                     ?>
                   <div class="table-responsive product-table">
                     <table class="display" id="basic-1">
                       <thead>
                         <tr>
                            <th>S.No.</th>   
                            <th>name</th>
                            <th>Discription</th>
                            <th>Action</th>
                         </tr>
                       </thead>
                       <tbody>
                           <?php 	if(mysqli_num_rows($results)>0){
                                 $i=1;
                                while($row = mysqli_fetch_assoc($results)){ 
                           ?>
                         <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row['title']; ?></td> 
                            <td><?php echo $row["Discribe"]; ?></td>  
                            <td>
                                <a href="javascript:void(0)"
                                    class="btn btn-success shadow btn-xs sharp view"
                                    data-id="<?php echo $row['id']; ?>">view</a>
                            </td> 
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
       <button type="button" hidden class="btn btn-primary assain" data-toggle="modal" data-target="#assain_task_model">
     Launch demo modal
</button>
<div class="modal fade" id="assain_task_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="Task" id="exampleModalLabel">Task</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <div class="modal-body">
		  <form action="update_meeting.php" method="post">
			<div id="model-task"></div>
		  </form>
	  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
</div>

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
				url: "video_view.php",
				data: {
					id: id
				},
				success: function(data) {
					$("#model-task").html(data);
					$(".assain").trigger('click');
				}
			});
		});
	});
</script>
       <!-- footer start-->
       <?php include('footer.php') ;?>