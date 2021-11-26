<?php
 //Code for Admin dashboard
 session_start();
    include "database/dbconnect.php";
   
 ?>
 <?php
            //Code for Sign Up
            date_default_timezone_set('Asia/Manila');
            if(isset($_POST['announ'])){
             $from=$_SESSION['name'];
             $to=$_POST['dod'];
             $what=$_POST['dodoy'];
             $where=$_POST['daday'];
             $when=$_POST['dadiy'];
             $dp=date('d-m-Y');
             $tp=date('H:i:sa');

                 $quer =$link->query("INSERT INTO tbl_anno values('Null','$from', '$to', '$what','$where', '$when', '$dp', '$tp')");
                      if($quer){
                          echo "<html>
                        <head>
                        <script type='text/javascript'>
                        alert('Posted Successfuly!');
                        </script>
                        </head>
                        </html>";
                        
                    
                      }else{
                       echo "<html>
                        <head>
                        <script type='text/javascript'>
                        alert('Invalid Post');
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
  <title>RMS</title>

  <!-- Favicons -->
  <link href="img/rmslogo.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
  <?php
  include "teacher_content.php";
 ?>
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">

	
          <div class="message-p pn">
                  <div class="message-header">
                    <h5><b>CREATE ANNOUNCEMENT</b></h5>
                  </div>
                  <div class="row">
                    <div class="col-md-3 centered hidden-sm hidden-xs">
                     <center> <img src="img/1999310.png" class="img" width="130">
                    </div>
                    <div class="col-md-9">
                     <div class="col-md-10">
                     <select name= 'depart'  class="form-control" >
                          <option disabled selected >Recipient (By Department)</option>
                                    <?php
                                        
                                        $ra= mysqli_query($link, "SELECT dep_name From tbl_dep ");  // Use select query here 

                                        while($da = mysqli_fetch_array($ra))
                                        {
                                            echo "<option value='". $da['dep_name'] ."'>" .$da['dep_name'] ."</option>";  // displaying data in option menu
                                        }	
                                    ?>  
                                   
                    </select><br> 
                      <textarea class="form-control "  name="content" placeholder="Content" required></textarea>
                      <br>
                      <br>
                     
                    <center> <input class="btn btn-theme" type="submit" name="post" value="Post">
                      <button class="btn btn-theme04" type="button">Cancel</button>
                
                    </div>
               
                    </div>
                  </div>
                </div><br>
                     <br>

              <?php
	
                    $records = $link->query("SELECT * FROM tbl_anno ORDER BY anno_id DESC Limit 10");

                    while($data = mysqli_fetch_array($records))
                  {
                  ?>  
                 
                 
                                      
                
                <div class="message-p pn">
                  <div class="message-header">
                    <h5><b>ANNOUNCEMENT!</b></h5>
                  </div>
                  <div class="row">
                    <div class="col-md-3 centered hidden-sm hidden-xs">
                      <img src="img/announ2.jpg" class="img-circle" width="150">
                    </div>
                    <div class="col-md-9">
                      <p>
                        <name><?php echo $data['from']; ?></name> 
                         <?php echo $data['Date']; ?>
                      </p>
                      
                      <p  class="small"><?php echo $data['time']; ?></p><br>
                      <p class="message"><b> </b><?php echo $data['content']; ?></p>
                     
                    </div>
                  </div>
                </div><br>
                     <br>
                <!-- /Message Panel-->
               <?php
                  }
                  ?>
              <!-- /col-md-8  -->
         

          
            <!-- /row -->
          </div>
              <!-- /col-md-8  -->

          <!-- /col-lg-9 END SECTION MIDDLE -->
          <!-- **********************************************************************************************************************************************************
              RIGHT SIDEBAR CONTENT
              *********************************************************************************************************************************************************** -->
          <div class="col-lg-3 ds">
               <div class="message-p">
                  <div class="message-header">
               
            <!-- CALENDAR-->
            <div id="calendar" class="mb">
              <div class="panel green-panel no-margin">
                <div class="panel-body">
                  <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                    <div class="arrow"></div>
                    <h3 class="popover-title" style="disadding: none;"></h3>
                    <div id="date-popover-content" class="popover-content"></div>
                  </div>
                  <div id="my-calendar"></div>
                </div>
              </div>
            </div>
            <!-- / calendar -->
          </div>
          <!-- /col-lg-3 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="index.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
 
  <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script type="text/javascript" src="lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>
  <script type="text/javascript" src="lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/moment.min.js"></script>
  <script type="text/javascript" src="lib/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
  <script src="lib/advanced-form-components.js"></script>
 
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Welcome to Dashio!',
        // (string | mandatory) the text inside the notification
        text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. Developed by <a href="http://alvarez.is" target="_blank" style="color:#4ECDC4">Alvarez.is</a>.',
        // (string | optional) the image to display on the left
        image: 'img/ui-sam.jpg',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script>
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
</body>

</html>
