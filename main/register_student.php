<?php 
session_start();
include "database/dbconnect.php";
?>
<?php
            //Code for Sign Up
            if(isset($_POST['btnreg'])){
                  $email1= $_POST['email1'];
                  $email2= $_POST['email2'];
                  $email3= $_POST['email3'];
                  $pass= $_POST['password'];

                  $gname= $_POST['gname'];
                  $dep= $_SESSION['department'];
                  $yl= $_POST['yl'];
                  $fname1= $_POST['fname1'];
                  $cn1= $_POST['cn1'];
                  $fname2= $_POST['fname3'];
                  $cn2= $_POST['cn2'];
                  $fname3= $_POST['fname3'];
                  $cn3= $_POST['cn3'];
                  $cpass= $_POST['cpass'];
                 
              if($pass == $cpass){ 
                $result = $link->query("SELECT * FROM `tbl_student` WHERE email1 = '$email1' OR email2 = '$email2' OR email3 = '$email3'");

              if(mysqli_num_rows($result) == 0){
                
                 $quer =$link->query("INSERT INTO tbl_student values('Null','$gname', '$dep', '$yl','$fname1', '$cn1', '$email1', '$fname2','$cn2', '$email2','$fname3','$cn3', '$email3', md5('$pass'))");
                        if($quer){
                          echo "<html>
                        <head>
                        <script type='text/javascript'>
                        alert('successfuly registered!');
                        </script>
                        </head>
                        </html>";
                        header('Location: http://localhost/srms/main/login.php');
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
              <input type="text" class="form-control" name ="gname" placeholder="Group Name" required>
            </div>
            <div class="row">
              <div class="col-lg-8 col-md-6 col-sm-6">
                <div class="form-group">
                <input type="text" class="form-control" name ="dep" value="<?php echo $_SESSION['department'] ?>" Disabled>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="btn-group">
                  <select style="color:#919191;" type="button" name = "yl" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <option value="volvo">Year Level</option>
                    <option value="fiat">3rd Year</option>
                    <option value="audi">4th Year</option>
                  </select>
                </div>
              </div>              
            </div><br><br>
            <p>Proponent 1</P>
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="form-group">
                  <input type="text" class="form-control" name ="fname1" placeholder="Full Name" required>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="form-group">
                  <input type="text" class="form-control" name ="cn1" placeholder="Contact Number" required>
                </div>
              </div>
            </div>

              <div class="form-group">
                  <input type="text" class="form-control" name ="email1" placeholder="Email" required>
                </div>

            <p>Proponent 2</P>
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="form-group">
                  <input type="text" class="form-control" name ="fname2" placeholder="Full Name" required>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="form-group">
                  <input type="text" class="form-control" name ="cn2" placeholder="Contact Number" required>
                </div>
              </div>
            </div>
                <div class="form-group">
                  <input type="text" class="form-control" name ="email2" placeholder="Email" required>
                </div>
             <p>Proponent 3</P>
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="form-group">
                  <input type="text" class="form-control" name ="fname3" placeholder="Full Name" required>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="form-group">
                  <input type="text" class="form-control" name ="cn3" placeholder="Contact Number" required>
                </div>
              </div>
            </div>
            <div class="form-group">
                  <input type="text" class="form-control" name ="email3" placeholder="Email" required>
                </div>
            <br>

            <p>Account Details</P>
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="form-group">
                  <input type="password" class="form-control" name ="password" placeholder="Password" required>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="form-group">
                  <input type="password" class="form-control" name ="cpass" placeholder="Confirm Password" required>
                </div>
              </div>
            </div><br>
            <p style="color: #cf323f;">Note:<br>Your corresponding emails will be used for Account security while your group will use the same password. 
              So try to input a password where the 3 of you could remember.
            </P>
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
  <script src="lib/advanced-form-components.js"></script>
  
</body>

</html>
<