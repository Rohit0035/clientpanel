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
     .login-card .login-main {
          width: 80%;
     }
     .login-card {
    display: -ms-flexbox;
    display: unset;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    margin: 0 auto;
    background: url(../images/login/login_bg.jpg);
    background-position: center;
    padding: 30px 12px;
    }
    .mid-bx {
    padding: 65px 30px;
    }
  </style>
  <body>
    <!-- login page start-->
    <div class="container-fluid p-0">
      <div class="row m-0">
        <div class="col-md-12 p-0">    
          <div class="login-card">
            <div style="margin-top: 100px;">
              <div class="login-main"> 
                <div class="row">
                    <div class="col-md-6">
                       <div class="left-content">
                          <img class="img-fluid" src="../assets/images/login/logolg.png" alt="" width="350px">
                          <div class="mid-bx">
                              <h5 style="text-align:left; font-weight:bold;color:#000;">Hi there!</h5>
                              <br>
                              <h3>Welcome to the <strong style="color:##fd6708">DASHA DIGITAL</strong> Family!</h3>
                          </div>
                        </div>
                        <br>
                    </div>
                    
                    <div class="col-md-6">
                        <form class="theme-form" action="logins.php" method="post">
                          <h4>Sign in to account</h4>
                          <p>Enter your email & password to login</p>
                          <div class="form-group">
                            <label class="col-form-label">Email Address</label>
                            <input class="form-control" type="email" required="" placeholder="Test@gmail.com" name="email">
                          </div>
                          <div class="form-group">
                            <label class="col-form-label">Password</label>
                            <div class="form-input position-relative">
                              <input class="form-control" type="password" name="password" required="" placeholder="*********" name="password">
                              <div class="show-hide"><span class="show">                         </span></div>
                            </div>
                          </div>
                          <div class="form-group mb-0">
                            <div class="checkbox p-0">
                              <input id="checkbox1" type="checkbox">
                              <label class="text-muted" for="checkbox1">Remember password</label>
                            </div><a class="link" href="forgetpassword.php">Forgot password?</a>
                            <div class="text-end mt-3">
                              <button class="btn btn-primary btn-block w-100" type="submit" name="submit">Sign in</button>
                            </div>
                          </div>
                          <!-- <h6 class="text-muted mt-4 or">Or Sign in with</h6>
                          <div class="social mt-4">
                            <div class="btn-showcase"><a class="btn btn-light" href="https://www.linkedin.com/login" target="_blank"><i class="txt-linkedin" data-feather="linkedin"></i> LinkedIn </a><a class="btn btn-light" href="https://twitter.com/login?lang=en" target="_blank"><i class="txt-twitter" data-feather="twitter"></i>twitter</a><a class="btn btn-light" href="https://www.facebook.com/" target="_blank"><i class="txt-fb" data-feather="facebook"></i>facebook</a></div>
                          </div> -->
                          <p class="mt-4 mb-0 text-center">Don't have account?<a class="ms-2" href="sign-up.php">Create Account</a></p>
                        </form>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- latest jquery-->
      <script src="../assets/js/jquery-3.5.1.min.js"></script>
      <!-- Bootstrap js-->
      <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
      <!-- feather icon js-->
      <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
      <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
      <!-- scrollbar js-->
      <!-- Sidebar jquery-->
      <script src="../assets/js/config.js"></script>
      <!-- Plugins JS start-->
      <!-- Plugins JS Ends-->
      <!-- Theme js-->
      <script src="../assets/js/script.js"></script>
      <!-- login js-->
      <!-- Plugin used-->
    </div>
  </body>
</html>