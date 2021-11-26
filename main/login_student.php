<?php
 	
  //start sesson
    session_start();
  include "database/dbconnect.php";
    
   /* if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
      if ($_SESSION["usertype"] == "1"){
        header("location: profile.php");
           exit;
        }else{
        header("location: http://localhost/repository/UserInterface/user.php");
        exit;
        }
    }*/
    //include database connection and login.php file for the function of the GUI
    
    
  
    //html code for the GUI
 
  
?>  
<?php
//Code for Login
if (isset($_POST['login'])){
  
	$email=$_POST['dodoy'];
	$pass=$_POST['daday'];
 
	$sql = "SELECT * FROM `tbl_student` WHERE (email1 = '$email' OR email2 = '$email' OR email3 = '$email') AND (pass = md5('$pass'))";
  $result = mysqli_query($link,$sql);
  $count = mysqli_num_rows($result);

	if($count == 0){
    
    echo "<html>
    <head>
    <script type='text/javascript'>
    alert('You have enter a wrong email or password!');
    </script>
    </head>
    </html>";
        session_unset();
			
		}else {
      if ($result == true){
        $dada="SELECT department FROM tbl_student WHERE email1 = '$email' OR email2 = '$email' OR email3 = '$email'";
        $results = $link-> query($dada);
  
        while ($row = $results-> fetch_assoc()){
          
             $_SESSION["loggedin"] = true;
             $_SESSION['department'] = $row['department'];
       
         $date = date('Y-m-d h:i:sa');
               $qu =$link->query("INSERT INTO tbl_userlog values('Null','$email',  md5('$pass'), '$date','Student')");
     
         echo "<html>
         <head>
         <script type='text/javascript'>
         alert('Welcome Student!');
         </script>
         </head>
         </html>";
         header('Location: index_student.php');
        }
      }
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
  <title>RMS - Login</title>

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
      
  <div id="login-page">
    <div class="container">
      <form class="form-login" method = "post">
       <div class="login-wrap">
          <h2><Center>LOGIN</h2><br>
          <input type="text/number" class="form-control" name ="dodoy" placeholder="Email" autofocus>
          <br>
          <input type="password" class="form-control" name ="daday" placeholder="Password">
          <label class="checkbox"> <Center>
            <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
            </span>
            </label>
          <br>
          <br>
          <input class="btn btn-theme btn-block" type="Submit" name="login" value="Login">
         
          <hr>
          <!-- <div class="login-social-link centered">
            <p>or you can sign in via your social network</p>
            <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
            <button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Twitter</button>
          </div> -->
          <div class="registration">
            Don't have an account yet?<br/>
            <a class="" href="studaccess.php">
              Create an account
              </a>
          </div>
        </div>
        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Forgot Password ?</h4>
              </div>
              <div class="modal-body">
                <p>Enter your e-mail address below to reset your password.</p>
                <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
              </div>
              <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                <button class="btn btn-theme" type="button">Submit</button>
              </div>
            </div>
          </div>
        </div>
      
        <!-- modal -->
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
</body>

</html>

