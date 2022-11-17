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
                  <h3>Add Schedule Meeting</h3>
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">                                       
                     <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Schedule Meeting</li>
                    <li class="breadcrumb-item active">Add Schedule Meeting</li>
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
                    <form class="theme-form" action="add-shedul.php" method="post">
                      <input type="hidden" name="id" value="<?php echo $_SESSION["user_id"]; ?>">
                       <div class="row">
                           <!-- <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="col-form-label pt-0" for="exampleInputEmail1">Task Link</label>
                                    <input class="form-control" id="" type="text" aria-describedby="" placeholder="http://demo.com">
                                </div>
                           </div> -->
                           <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="col-form-label pt-0" for="">Title</label>
                                    <input class="form-control" id="" type="text" aria-describedby="" placeholder="title" name="title">
                                </div>
                           </div>
                           <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="col-form-label pt-0" for="exampleInputEmail1">Meeting Agenda</label>
                                    <input class="form-control" id="" type="text" aria-describedby="" placeholder="Enter Agenda" name="ajenda">
                                </div>
                           </div>
                           
                           <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="col-form-label pt-0" for="exampleInputEmail1">Meeting Date/Time</label>
                                    <input class="form-control" id="" type="datetime-local" aria-describedby="" name="start_date">
                                </div>
                           </div>
                           <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="col-form-label pt-0" for="exampleInputEmail1">end Time</label>
                                    <input class="form-control" id="" type="datetime-local" aria-describedby="" name="end_date">
                                </div>
                           </div>
                           <!-- <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="col-form-label pt-0" for="exampleInputEmail1">Document</label>
                                    <input class="form-control" id="" type="file" aria-describedby="" placeholder="" name="document">
                                </div>
                           </div>
                           
                               <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="exampleInputEmail1">Meeting Remark</label>
                                         <textarea class="form-control" placeholder="description..." discription>
                                        </textarea>
                                    </div>
                                </div> -->
                             <!-- <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="col-form-label pt-0" for="exampleInputEmail1">Status</label>
                                    <div class="m-t-15 m-checkbox-inline custom-radio-ml">
                                        <div class="form-check form-check-inline radio radio-primary">
                                            <input class="form-check-input" id="active" type="radio" name="radio1" value="option1">
                                            <label class="form-check-label mb-0" for="active">Active<span class="digits"></span></label>
                                        </div>
                                        <div class="form-check form-check-inline radio radio-primary">
                                            <input class="form-check-input" id="deactive" type="radio" name="radio1" value="option1">
                                            <label class="form-check-label mb-0" for="deactive">Deactive<span class="digits"></span></label>
                                        </div>
                                       
                                    </div>
                                </div>
                               </div> -->
                              
                                <!-- <div class="col-md-6">
                                   <div class="mb-3">
                                    <label class="col-form-label pt-0" for="exampleInputEmail1">Priority</label>
                                    <div class="m-t-15 m-checkbox-inline custom-radio-ml">
                                        <div class="form-check form-check-inline radio radio-primary">
                                            <input class="form-check-input" id="radioinline4" type="radio" name="radio1" value="option1">
                                            <label class="form-check-label mb-0" for="radioinline4">High<span class="digits"></span></label>
                                        </div>
                                        <div class="form-check form-check-inline radio radio-primary">
                                            <input class="form-check-input" id="radioinline5" type="radio" name="radio1" value="option1">
                                            <label class="form-check-label mb-0" for="radioinline5">Mid<span class="digits"></span></label>
                                        </div>
                                         <div class="form-check form-check-inline radio radio-primary">
                                            <input class="form-check-input" id="radioinline6" type="radio" name="radio1" value="option1">
                                            <label class="form-check-label mb-0" for="radioinline6">Low<span class="digits"></span></label>
                                        </div> 
                                    </div>
                                </div>
                              </div> -->
                              <div class="col-md-12">
                                  <button class="btn btn-primary" name="submit">Schedule Meeting</button>
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