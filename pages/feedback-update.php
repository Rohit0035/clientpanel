
   <?php
   session_start();
   if(!isset($_SESSION["user_id"])){
     header("location: login.php");
   } ?>
    
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
                    <h3>Add Feedback</h3>
                  </div>
                  <div class="col-6">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">                                       
                       <i data-feather="home"></i></a></li>
                      <li class="breadcrumb-item">Add Feedback</li>
                      <li class="breadcrumb-item active">Update Feedback</li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-12">
                  <div class="card">
                    <!-- <div class="card-header">
                      <h5>Sample Card</h5><span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                    </div> -->
                    <div class="card-body">
                        <?php
                            $stu_id = $_GET['id'];
                            include('config.php');
                            $sql= "SELECT * FROM `reviews` WHERE `ida` = '$stu_id'";
                            $results = mysqli_query($conn,$sql) or die("Query failed");
                            if(mysqli_num_rows($results)>0){
                                while($row = mysqli_fetch_assoc($results)){ 
                        ?>
                      <form class="theme-form" action="feed-update.php" method="post">
                      <input type="hidden" name="user_id" value="<?php echo $row['ida']; ?>">
                         <div class="row">
                             <!-- <div class="col-md-6">
                                  <div class="mb-3">
                                      <label class="col-form-label pt-0" for="exampleInputEmail1">Task Link</label>
                                      <input class="form-control" id="" type="text" aria-describedby="" placeholder="http://demo.com">
                                  </div>
                             </div> -->
                            
                             <div class="col-md-6">
                                  <div class="mb-3">
                                      <label class="col-form-label pt-0" for="exampleInputEmail1">Service</label>
                                      <select class="form-control" name="class">
                                      <option selected><?php echo $row['service']; ?></option>
                                          <option>Remote DME</option>
                                          <option>Process Maintenance</option>
                                          <option>Secure Support</option>
                                          <option>DME Training</option>
                                          <option>Web Development and Designing</option>
                                          <option>Digital Marketing</option>
                                          <option>Social Media Marketing</option>
                                          <option>Graphic Designing</option>
                                      </select>
                                  </div>
                             </div>
                             <div class="col-md-6">
                                  <div class="mb-3">
                                      <label class="col-form-label pt-0" for="exampleInputEmail1">Rating</label>
                                      <select class="form-control" name="q1">
                                           <option Selected><?php echo $row['review']; ?></option>
                                           <option>1</option>
                                           <option>2</option>
                                           <option>3</option>
                                           <option>4</option>
                                           <option>5</option>
                                           <option>6</option>
                                           <option>7</option>
                                           <option>8</option>
                                           <option>9</option>
                                           <option>10</option>
                                      </select>
                                  </div>
                             </div>
                             <div class="col-md-6">
                                  <div class="mb-3">
                                      <label class="col-form-label pt-0" for="exampleInputEmail1">Comments</label>
                                      <input class="form-control" id="" type="text" aria-describedby="" placeholder="<?php echo $row['feedback']; ?>" value="<?php echo $row['feedback']; ?>" name="note">
                                  </div>
                             </div>
                            
                                <div class="col-md-12">
                                    <button class="btn btn-primary" name="submit">Submit</button>
                                </div>
                         </div>
                       </form>
                       
                       <?php } } ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Container-fluid Ends-->
          </div>
  
          <!-- footer start-->
  
          <?php include('footer.php') ;?>