<?php 
session_start();
include "database/dbconnect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>RMS - Register</title>

  <!-- Favicons -->
  <link href="img/rmslogo.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-fileupload/bootstrap-fileupload.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-datepicker/css/datepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-daterangepicker/daterangepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-timepicker/compiled/timepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-datetimepicker/datertimepicker.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
</head>

<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      
  <div id="register-page">
    <div class="container">
      <form method ="post" class="form-register">
        <div class="register-wrap1">
          <h2><Center>REGISTRATION FORM</h2><br>
            <p>Basic Information</p>
            <div class="form-group">
              <input type="text" class="form-control" name ="fname" placeholder="Full Name" required>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="form-group">
                  <input type="text" class="form-control" name ="emai" placeholder="Email" >
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="form-group">
                  <input type="text" class="form-control" name ="cn" placeholder="Contact Number" required>
                </div>
              </div>
                
             </div> 
             <div class="form-group">
                  <input type="text" class="form-control" name ="address" placeholder="Address" required>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" name ="dep" value="<?php echo $_SESSION['department'] ?>" Disabled>
                </div><br>
              <p>Account Details</P>
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="form-group">
                  <input type="text" class="form-control" name ="uname" placeholder="Username" required>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="form-group">
                  <input type="password" class="form-control" name ="password" placeholder="Password" required>
                </div>
              </div>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name ="cpass" placeholder="Confirm Password" required>
            </div><br>
          <hr>
          <input class="btn btn-theme btn-block" type="Submit" name="btnreg" value="Register">
          
          <br>
          <!-- <div class="login-social-link centered">
            <p>or you can sign in via your social network</p>
            <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
            <button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Twitter</button>
          </div> -->
          
        </div>
      </form>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
   <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("img/login-bg.jpg", {
      speed: 100
    });
  </script>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script type="text/javascript" src="lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>
  <script type="text/javascript" src="lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/moment.min.js"></script>
  <script type="text/javascript" src="lib/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
  <script src="lib/advanced-form-components.js"></script>
</body>

</html>
<<?php
            //Code for Sign Up
            if(isset($_POST['btnreg'])){
                  $email= $_POST['emai'];
                  $password= $_POST['password'];
                  $cpass= $_POST['cpass'];
                   $fname= $_POST['fname'];
                  $cn= $_POST['cn'];
                  $address= $_POST['address'];
                  $dep= $_SESSION['department'];
                  $uname= $_POST['uname'];
                  
                 
              if($password == $cpass){ 
                $result = $link->query("SELECT * FROM `tbl_teacher` WHERE email= '$email'");

              if(mysqli_num_rows($result) == 0){
                
                 $quer =$link->query("INSERT INTO tbl_teacher values('Null','$fname', '$address', '$cn','$email', '$dep', '0', '$uname', md5('$password'))");
                        if($quer){
                          echo "<html>
                        <head>
                        <script type='text/javascript'>
                        alert('successfuly registered!');
                        </script>
                        </head>
                        </html>";
                        header('Location: teachlog.php');
                        } 
                    
                      }else{
                       echo "<html>
                        <head>
                        <script type='text/javascript'>
                        alert('email already exists');
                        </script>
                        </head>
                        </html>";
                       
                      
                          
                    }
                  }else{
                    echo "<html>
                        <head>
                        <script type='text/javascript'>
                        alert('password didnt match');
                        </script>
                        </head>
                        </html>";
                        
                  }
            }
              

          ?>
