
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
                    <h3>Add Messages</h3>
                  </div>
                  <div class="col-6">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">                                       
                       <i data-feather="home"></i></a></li>
                      <li class="breadcrumb-item">Add Messages</li>
                      <li class="breadcrumb-item active">Add Messages</li>
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
                      <form class="theme-form" action="reply-save.php" method="post">
                         <input type="hidden" name="user_id" value="<?php echo $_SESSION["user_id"]; ?>">
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
                                      <option selected>Service</option>
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
                             <!-- <div class="col-md-6">
                                  <div class="mb-3">
                                      <label class="col-form-label pt-0" for="exampleInputEmail1">Rating</label>
                                           <input class="form-control" type="text" name="q1" id="">
                                  </div>
                             </div> --><br><hr>
                             <div class="col-md-6">
                                  <div class="mb-3">
                                      <label class="col-form-label pt-0" for="exampleInputEmail1">Message</label>
                                        <textarea class="form-control" name="note" id="" rows="3" placeholder="Good.."></textarea>
                                    </div>
                             </div>
                            
                                <div class="col-md-12">
                                    <button class="btn btn-primary" name="submit">Submit</button>
                                </div>
                         </div>
                       </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Container-fluid Ends-->
          </div>
  
          <!-- footer start-->
  
          <?php include('footer.php') ;?>