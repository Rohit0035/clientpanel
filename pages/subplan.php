<?php  
     function get_price($name, $service)
     {
        include('config.php');
        $query = $conn->query("SELECT price FROM `service` WHERE service_id='$name' AND plan_id='$service' AND status='Active'");
        if(mysqli_num_rows($query)>0){
            $row = mysqli_fetch_assoc($query);
            echo '<span class="st-bold">'.$row['price'].'</span>';
        }else{
            echo '<i class="fa fa-times"></i>';
        }
    }
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="web app">
    <meta name="author" content="">
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <title>Task Management</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/chartist.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/date-picker.css">
     <!-- Plugins css Ends-->

     <!-- datatabele css start-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/datatables.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/owlcarousel.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/rating.css">
    
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">

  </head>
<style>
   
    section.mt-50 {
        width: 100%;
        display: inline-block;
        padding: 50px 0px;
        height: 100%;
    }
    h2.title1 {
        font-size: 50px;
        padding: 80px 0px;
        color: #fff;
        font-weight: 600;
    }
    section.rtt {
        background-image: url('../assets/images/bg-plan.jpg');
        background-size: cover;
        text-align: center;
    }
    span.st-bold {
        font-weight: bold;
        font-size: 15px;
        color:#000;
    }
    a.bkbtn {
        background: #09bd3c;
        padding: 10px 20px;
        color: #fff;
        font-size: 16px;
        border-radius: 6px;
        font-weight: 600;
        display: inline-block;
        margin: 50px 0px;
    }
    th {
        background-color: #195d8d !important;
        color: #fff;
    }
    /* .table-responsive {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        width: 100%;
        display: inline-block;
    } */
    .box-table {
        box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);
    }
    span.font-weight-bold {
        font-size: 25px;
        color: #000;
        font-weight: 600;
    }

    span.amount {
        font-size: 25px;
        color: #f14c0e;
    }
    h2.title {
        font-size: 24px;
        font-weight: 600;
        margin-bottom: 15px;
    }
    .margins{
        margin-top: 16px;
        font-size:24px;
    }
    .outline-button{
        background-color: transparent !important;
        border-color: #249eaa !important;
        color: #249eaa;
    }
    .logo-bx {
        text-align: left;
        margin-top: 20px;
    }
    .outline-button:hover, .outline-button:active, .outline-button:visited, 
    .outline-button:focus{
        background-color: #249eaa !important;
        border-color: #249eaa !important;
        color: #fff;outline: 0 !important;
        box-shadow:none !important}
    .normal-button {
        background-color: #17a2b8!important;
        border-color: #17a2b8!important;
        color:#fff;
    }
    .normal-button:hover, .normal-button:active, .normal-button:visited, 
    .normal-button:focus{background-color: #17a2b8  !important;
        border-color: #17a2b8  !important;
        outline: 0 !important;box-shadow: none !important;color: #fff}
    .check i{
            margin-top: 10px;
            margin-bottom: 10px;
            width: 38px;height: 38px;
            border-radius: 50%;
            background-color: #b9f6ca82;
            line-height: 38px;font-size: 17px;
            color: #df1b07f7;font-weight: 300
            }

    /* mobile screen */
    @media only screen and (max-width: 600px) {
        .table-responsive {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        display: inline-block !important;
        }
    }
</style>

<body>
    <section class="rtt">
         <div class="container">
            <div class="row">
               <div class="logo-bx">
                <img class="img-fluid" src="../assets/images/logo/logo.png" alt="" width="200px">
               </div>
            </div>
           <h2 class="title1">Pricing Plan</h2>
         </div>
    </section>
    <section class="mt-50">
        <div class="container">
            <div class="heading-bg">
                <h2 class="title">Our Plan</h2>
            </div>
            <div class="col-md-12">
               <div class="box-table">
                            <?php
                                include "config.php";
                                $sql1="SELECT * FROM `service_plans`";
                                $results = mysqli_query($conn,$sql1) or die("Query failed");
                                if(mysqli_num_rows($results)>0){
                                $rows = mysqli_fetch_assoc($results) 
                            ?>
                    <table class="table bg-white table-bordered table-responsive">
                        <tbody>
                            <tr>
                                <th scope="column"><span class="font-weight-bold" style="color: #fff;">Service</span></th>
                                <td>
                                    <div class="d-flex flex-row justify-content-between align-items-baseline mt-0"> 
                                        <span class="font-weight-bold text-center"><?php echo $rows['plan']; ?></span>
                                        <div class="price d-flex flex-row align-items-center">
                                              <span class="margins"></span> <span class="amount"></span>
                                              <span class="margins"></span> </div>
                                        </div> 
                                    <button class="btn btn-outline-primary btn-block outline-button">Get started</button>
                                </td>
                            </tr>
                            <?php } ?>
                            <?php
                                include "config.php";
                                $sql2="SELECT * FROM `service` 
                                INNER JOIN `services` ON service.service_id = services.id 
                                INNER JOIN `service_plans` ON service.plan_id = service_plans.id";
                                $results = mysqli_query($conn,$sql2) or die("Query failed");
                                if(mysqli_num_rows($results)>0){
                                $rowse = mysqli_fetch_assoc($results) 
                            ?>
                            <tr>
                                <th scope="row"> <span class="d-block"><?php echo $rows['service_name']; ?></span> <span class="font-weight-light"></span> </th>
                                <td>
                                    <div class="text-center check"><?php get_price('1','1'); ?> </div>
                                </td>
                                <td>
                                    <div class="text-center check"> <?php get_price('1','2'); ?> </div>
                                </td>
                                <td>
                                    <div class="text-center check"><?php get_price('1','3'); ?> </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <?php } ?>
               </div>
            </div>
            <a href="sign-up.php" class="bkbtn">Back</a>
        </div>
    </section>

    

   <!-- latest jquery-->
   <script src="../assets/js/jquery-3.5.1.min.js"></script>
   <!-- Bootstrap js-->
   <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
   <!-- feather icon js-->
   <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
   <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
   <!-- scrollbar js-->
   <script src="../assets/js/scrollbar/simplebar.js"></script>
   <script src="../assets/js/scrollbar/custom.js"></script>
   <!-- Sidebar jquery-->
   <script src="../assets/js/config.js"></script>
   <!-- Plugins JS start-->
   <script src="../assets/js/sidebar-menu.js"></script>
   <script src="../assets/js/chart/chartist/chartist.js"></script>
   <script src="../assets/js/chart/chartist/chartist-plugin-tooltip.js"></script>
   <script src="../assets/js/chart/knob/knob.min.js"></script>
   <script src="../assets/js/chart/knob/knob-chart.js"></script>
   <script src="../assets/js/chart/apex-chart/apex-chart.js"></script>
   <script src="../assets/js/chart/apex-chart/stock-prices.js"></script>
   <script src="../assets/js/notify/bootstrap-notify.min.js"></script>
   <script src="../assets/js/dashboard/default.js"></script>
   <script src="../assets/js/notify/index.js"></script>
   <script src="../assets/js/datepicker/date-picker/datepicker.js"></script>
   <script src="../assets/js/datepicker/date-picker/datepicker.en.js"></script>
   <script src="../assets/js/datepicker/date-picker/datepicker.custom.js"></script>
   <script src="../assets/js/typeahead/handlebars.js"></script>
   <script src="../assets/js/typeahead/typeahead.bundle.js"></script>
   <script src="../assets/js/typeahead/typeahead.custom.js"></script>
   <script src="../assets/js/typeahead-search/handlebars.js"></script>
   <script src="../assets/js/typeahead-search/typeahead-custom.js"></script>
   <!-- Plugins JS Ends-->
   
   <!-- Theme js-->
   <script src="../assets/js/script.js"></script>
   <!-- <script src="../assets/js/theme-customizer/customizer.js"></script> -->

    <!------------- datatable js ----------------- -->
   <script src="../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
   <script src="../assets/js/product-list-custom.js"></script>

   
   <!-- login js-->
   <!-- Plugin used-->
 </body>
</html>