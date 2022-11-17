
<!-- Page Header Ends-->
      
 <?php include('header.php') ;?>


 <style>
@media (max-width: 1470px){
.pricing-block>div {
    -webkit-box-flex: 50%;
    -ms-flex: 50%;
    flex: unset;
}
.pricing-block>div:nth-child(n+3) {
    margin-top: 0px;
}
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
                  <h3>Training Video Subscriptions</h3>
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Training Video Subscriptions</li>
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
                  <div class="card-header"> 
                    <!-- <h5>Become member</h5> -->
                  </div>
                
                  <div class="card-body row pricing-block">
                  <?php
                        include('config.php'); 
                        $sql="SELECT * FROM `service` WHERE `status` = 'Active'"; 
                        $results = mysqli_query($conn,$sql) or die("Query failed"); 
                        if(mysqli_num_rows($results)>0){
                            while($row = mysqli_fetch_assoc($results)){ 
                    ?>
                    <div class="col-md-4" style="margin-bottom:20px !important;">
                      <div class="pricingtable">
                        <div class="pricingtable-header">
                          <form>
                          <h3 class="title">Monthly</h3>
                        </div>

                        <div class="price-value"><span class="currency">₹</span><span class="amount" data-pricing-value="<?php echo $row['price']; ?>"><?php echo $row['price']; ?></span><span class="duration">/mo</span></div>
                        <ul class="pricing-content">
                          <li><?php echo $row['note']; ?></li>
                        </ul>
                        <input type="button" name="button" value="Pay Now" onclick="paynow('<?php echo $row['price']; ?>','<?php echo $row['service']; ?>')">
                    </form>
                      </div>
                    <!-- </div>
                    <div class="col-md-4">
                      <div class="pricingtable">
                        <div class="pricingtable-header">
                          <h3 class="title">Quarterly</h3>
                        </div>
                        <div class="price-value"><span class="currency">$</span><span class="amount">20</span><span class="duration">/mo</span></div>
                        <ul class="pricing-content">
                          <li>50GB Disk Space</li>
                          <li>Updated Video</li>
                          <li>New Video</li>
                          <li>15 Subdomains</li>
                        </ul>
                        <div class="pricingtable-signup"><a class="btn btn-primary btn-lg" href="#">Subscribe Now</a></div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="pricingtable">
                        <div class="pricingtable-header">
                          <h3 class="title">Yearly</h3>
                        </div>
                        <div class="price-value"><span class="currency">$</span><span class="amount">20</span><span class="duration">/mo</span></div>
                        <ul class="pricing-content">
                          <li>50GB Disk Space</li>
                          <li>Updated Video</li>
                          <li>New Video</li>
                          <li>15 Subdomains</li>
                        </ul>
                        <div class="pricingtable-signup"><a class="btn btn-primary btn-lg" href="#">Subscribe Now</a></div>
                      </div>
                    </div> -->
                  </div>
                  <?php }}?>
                </div>
              </div>
            </div>
          </div>
        </div>
                            </div>
       
        <!-- footer start-->
        <?php include('footer.php') ;?>