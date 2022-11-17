<!-- header start -->
<?php 
session_start();
include('header.php');
?>
<style>
body{
      background-color: #E0E0E0;
 }
.card-pricing.popular {
    z-index: 1;
    border: 1px solid #007bff;
}
.card-pricing .list-unstyled li {
    padding: .5rem 0;
    color: #6c757d;
    font-weight: 300;
}

.btn{
    border-radius: 1px;
    font-weight:300;
}
.hvr:hover{

    color: #fff;
    background-color: #007bff;
    border: 1px solid #007bff !important;
} 
</style>
 <!-- BEGIN .app-container -->

         <!-- END: .main-heading -->

         <!-- BEGIN .main-content -->
         <div class="main-content">
						
						<!-- Row start -->
                        
                        <div class="container mb-5 mt-5">
            <div class="pricing card-deck flex-column flex-md-row mb-3">
                    <?php
                        include('config.php'); 
                        $sql="SELECT * FROM `service` WHERE `status` = 'Active'"; 
                        $results = mysqli_query($conn,$sql) or die("Query failed"); 
                        if(mysqli_num_rows($results)>0){
                            while($row = mysqli_fetch_assoc($results)){ 
                    ?>
                <div class="card card-pricing text-center px-3 mb-4">
                    <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Starter</span>
                    <div class="bg-transparent card-header pt-4 border-0">
                    <form>
                        <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="<?php echo $row['price']; ?>"><?php echo $row['price']; ?>₹<span class="price">
                       </div>
                    <div class="card-body pt-0">
                        <ul class="list-unstyled mb-4">
                            <li><?php echo $row['note']; ?></li>
                            
                        </ul>
                        <input type="button" name="button" value="Pay Now" onclick="paynow(<?php echo $row['price']; ?>,<?php echo $row['service']; ?>)">
                    </form>
                        <!-- <button type="button" class="btn btn-outline-secondary mb-3 hvr" id="rzp-button1">Order Now</button> -->
                    </div>
                </div>
                <?php }}?>
            </div>
        </div>
						<!-- Row ends -->

					</div>
					<!-- END: .main-content -->
         <!-- END: .main-content -->

<!-- footer start -->

<?php include('footer.php') ;?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script>
	function paynow(amount,plan){
	    var options = {
            "key": "rzp_test_fR3E7Zuyxygeh0",
            "amount": amount*100, 
            "currency": "INR",
            "name": "<?php echo $_SESSION['name'] ?>",
            "description": "Test Transaction",
            "prefill": {
                "name": "<?php echo $_SESSION['name'] ?>", // pass customer name
                "email": "<?php echo $_SESSION['email'] ?>",// customer email
                "contact": "+91<?php echo $_SESSION['number'] ?>" //customer phone no.
            },
            "notes": {
                "address": "address" //customer address 
            },
            "theme": {
                "color": "#15b8f3" // screen color
            },
            "handler": function(response){
                $.ajax({
                    type:"POST",
                    url:"payment.php",
                    data:{pay_id:response.razorpay_payment_id,amount:amount,name:"<?php echo $_SESSION['user_id']; ?>",plan:plan},
                    success:function(result){
                         window.location.href="videolist.php";
                    }
                });
            }
        };
        var rzp1 = new Razorpay(options);
        rzp1.open();
    }
</script>
<!-- footer close -->

  
  
						
<!-- <button id="rzp-button1">Pay</button>+ -->

