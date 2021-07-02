<?php
session_start();

   include("../fs/fusioncharts/fusioncharts.php");
   $hostdb = "localhost";  // MySQl host
   $userdb = "root";  // MySQL username
   $passdb = "";  // MySQL password
   $namedb = "admin";  // MySQL database name 
   $dbhandle = new mysqli($hostdb, $userdb, $passdb, $namedb);

   
   if ($dbhandle->connect_error) {
    exit("There was an error with your connection: ".$dbhandle->connect_error);
   }
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>DASH BOARD </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <script src=" https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
         <script src=" https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>

    <!-- Custom Stylesheet -->
    <link href="css/style1.css" rel="stylesheet">

         <?php

?>
<style>
#load{
    width:100%;
    height:100%;
    position:fixed;
    z-index:9999;
    background:white url("ajax-loader.gif") no-repeat center center 
}
</style>
  </head>
  <div id="load"></div>
    <div id="contents">
  <body class="nav-md">
  
  <!-- session  -->
  <?php
  if ($_SESSION["name"]) 
                {
                  ?>
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>DASH BOARD</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/user1.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Sreekutty</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->
            
            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php">Dashboard</a></li>
                     
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Reports<span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
                  <li><a href="daysale.php">Day Sales</a></li>
										<li><a href="customer.php">Customer wise Report</a></li>
                    <li><a href="brandwise.php">Brand Wise</a></li>
										<li><a href="payment.php">Payment Option</a></li>
                    <li><a href="salesmargin.php">Sales Margine</a></li>
										<li><a href="staffwise.php">Staff Wise Report</a></li>
                    <li><a href="timeslice.php">Time Slice Report</a></li>
                    <li><a href="pdf.php">Customer Pdf</a></li>
									</ul>
								</li>
                  
                  <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="tables.php">Day Sales</a></li>
          
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="chartjs.php">Chart JS</a></li>
    
                    </ul>
                  </li>
                  
                </ul>
              </div>
              <div class="menu_section">
                
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                     
                      <li><a href="invoice.html">Invoice</a></li>
                      <li><a href="profile.html">Profile</a></li>
                    </ul>
                  </li>

                </ul>
                
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <!-- These are  -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings" href="">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen" href="">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock" href="">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="../logout.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/user1.png" alt="">Sreekutty
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="javascript:;"> Profile</a>
                      <a class="dropdown-item"  href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                  <a class="dropdown-item"  href="javascript:;">Help</a>
                    <a class="dropdown-item"  href="../logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>

                <li role="presentation" class="nav-item dropdown open">
                  <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">1</span>
                  </a>
                  <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/user1.png" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    
                    <li class="nav-item">
                      <div class="text-center">
                        <a class="dropdown-item">
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row" style="display: inline-block;" >
          <div class="tile_count">
          <div class="x_content">
<!-- Card -->
        <div class="col-lg-3 col-sm-6">
        <div class="card card purple gradient-3" >
                <div class="card-body ">
                    <h3 class="card-title text-black">Products Sold</h3>
                    <div class="d-inline-block">
                        <h2 class="text-black">4565</h2>
                        <p class="text-black mb-0">Jan - March 2019</p>
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6">
        <div class="card gradient-9">
                <div class="card-body">
                    <h3 class="card-title text-black">Annual</h3>
                    <div class="d-inline-block">
                        <h2 class="text-black">4565</h2>
                        <p class="text-black mb-0">Jan - March 2019</p>
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6">
        <div class="card gradient-1">
                <div class="card-body">
                    <h3 class="card-title text-black">Month End</h3>
                    <div class="d-inline-block">
                        <h2 class="text-black">4565</h2>
                        <p class="text-black mb-0">Jan - March 2019</p>
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6">
        <div class="card gradient-2">
                <div class="card-body">
                    <h3 class="card-title text-black">Customer Wise</h3>
                    <div class="d-inline-block">
                        <h2 class="text-black">4565</h2>
                        <p class="text-black mb-0">Jan - March 2019</p>
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-heart"></i></span>
                </div>
            </div>
        </div>
        </div>

<p><code></code>Day Sales </p>

<div class="table-responsive">
<?php


$strQuery = "select t.Day,DATE_FORMAT(t.Date,'%c-%d-%Y') as Date,sum(s.GrossAmt) as GrossAmt from transdate as t join salesmaster as s where t.Date=s.DOT  group by t.Date  ORDER BY t.Date LIMIT 5   ";
//DATE_FORMAT(salesmaster.DOT,'%c-%d-%Y') as DOT
$result = $dbhandle->query($strQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
?>
  <table class="table table-striped jambo_table ">
    <thead>
      <tr class="headings">
       
        <th class="column-title">Day</th>
        
        <th class="column-title">Date </th>
        <th class="column-title">GrossAmt</th>
      </tr>
   
    </thead>
<!-- <tbody>
<tr>
<th>1<th>
<th>07/12/2001</th>
<th>12324345</th>
</tr>
</tbody>
</table> -->
<?php
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
echo "<tr>";
echo "<td>". $row['Day'] ."</td> ";
echo "<td>" . $row['Date'] . "</td>";
echo "<td>" . $row['GrossAmt'] . "</td>";
}
} else {
echo "0 results";
}
?>
</div>
          </div>
        </div>
          <!-- /top tiles -->

          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Day Sale -<small>Bar Graph </small></h3>
                    <div class="container3">
   
   <?php
  

       $strQuery = "select t.Day,DATE_FORMAT(t.Date,'%c-%d-%Y') as Date,sum(s.GrossAmt) as GrossAmt from transdate as t join salesmaster as s where t.Date=s.DOT  group by t.Date  ";
       //DATE_FORMAT(salesmaster.DOT,'%c-%d-%Y') as DOT
       $result = $dbhandle->query($strQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
       
       if ($result) 
         {
           $arrData = array(
           "chart" => array(
           "caption"=> "Day Sale",   
           "xAxisname"=> "Day",
           "xAxisNameFontColor"=> "#00134d",
           "xAxisNameFontSize"=> "15",
           "xAxisNameFontBold"=> "1",
           "yAxisName"=> "GrossAmt",
           "yAxisNameFontColor"=> "#00134d",
           "yAxisNameFontSize"=> "15",
           "yAxisNameFontBold"=> "1",
           "theme"=> "fusion",
           "baseFontColor"=> "#000000",
           "plotfillpercent"=> "5",
        
           "animation"=>"1",
           "animationDuration"=>"3",
           "use3DLighting"=>"1",
           
           )
           );
   
           $categoryArray=array();
           $datavalues1=array();
           $datavalues2=array();
           $datavalues3=array();

           while($row = mysqli_fetch_array($result)) 
             {
               array_push($categoryArray, array(
               "label" => $row["Day"]
               )
               );
               array_push($datavalues1, array(
               "value" => $row["GrossAmt"],
               "color"=>"#006680",
               "anchorbgcolor"=> "#00ccff",
               )
               );
                              
             }
           $arrData["categories"]=array(array("category"=>$categoryArray));
           $arrData["dataset"] = array(array("seriesName"=> "Day","data"=>$datavalues1));
           //,array("seriesName"=> "Date","renderAs"=>"line", "data"=>$datavalues2)

           $jsonEncodedData = json_encode($arrData);
           $Chart = new FusionCharts("mscombi3d", "chart1" , 1200, 400, "chart-1", "json", $jsonEncodedData);
           $Chart->render();
           $dbhandle->close();
         }
   ?>
<div id="chart-1"></div>
  
</div>
                  </div>
                  
                  <div class="col-md-6">
                  
                    <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                      <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                      <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                      
                    </div>
                   
                  </div>
                </div>

                

          </div>
          <br />

          <div class="row">


            <div class="col-md-4 col-sm-4 ">
              
            </div>

          </div>


          
        <footer>
          <div class="pull-right">
            Sreekutty - Admin <a href="https://colorlib.com">Dashboard</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    <!-- session end  -->
    <?php echo $_SESSION["name"]; ?>. 
    <!-- Click here to <a href="../logout.php" tite="Logout"><h1>Logout.</h1> -->
<?php
}else 
header("./login.php")
?>

  </body>
  </div>
</div>
  <!-- script written for loding page -->
  <script>

document.onreadystatechange = function () {
  var state = document.readyState
  if (state == 'interactive') {
       document.getElementById('contents').style.visibility="hidden";
  } else if (state == 'complete') {
      setTimeout(function(){
         document.getElementById('interactive');
         document.getElementById('load').style.visibility="hidden";
         document.getElementById('contents').style.visibility="visible";
      },2000);
  }
}
</script>
</html>
