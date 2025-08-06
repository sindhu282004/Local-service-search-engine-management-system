<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html>
<head>
    
	<title>Local Service Search Engine|| Person Detail</title>
	
   
        
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script></head>
	<body>
		
	<div class="theme-wrap clearfix">
		<!--================================responsive log and menu==========================================-->
		<div class="wsmenucontent overlapblackbg"></div>
		<div class="wsmenuexpandermain slideRight">
			<a id="navToggle" class="animated-arrow slideLeft"><span></span></a>
			<a href="#" class="smallogo"><img src="images/logo.png" width="120" alt="" /></a>
		</div>
	<?php include_once('includes/header.php');?>
		
		<!--================================PAGE TITLE==========================================-->
		<div class="page-title-wrap bgorange-1 padding-top-30 padding-bottom-30"><!-- section title -->
			<center><h1 class="white">Single Person Detail</h1></center>
		</div><!-- section title end -->
		
		<!--================================listing SECTION==========================================-->
		
		<section class="aside-layout-section padding-top-70 padding-bottom-40">
			<div class="container"><!-- section container -->
				<div class="row">
					<?php
$vid=$_GET['viewid'];
$sql="SELECT * from  tblServicetype where ID=:vid";
$query = $dbh -> prepare($sql);
$query->bindParam(':vid',$vid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?><!-- row -->
					<div class="col-md-9 col-sm-8 col-xs-12 main-wrap"><!-- content area column -->
						<div class="listing-single padding-bottom-40">
							<div class="single-listing-wrap">
								
								<div class="listing-contact-detail-wrap">
									<div class="listing-contact-section-title">
										<h3>Contact</h3>
									</div>
									<div class="listing-contact-section-table">


<div class="listing-contact-table-field">
											<ul>
												<FONT COLOR="black"<li class="info" style="font-weight:bold">Category</li></FONT>
												<li class="details"><?php  echo $row->Category ;?> </li>
											</ul>
										</div>

										<div class="listing-contact-table-field">
											<ul>
											<FONT COLOR="black"<li class="info" style="font-weight:bold">Name</li></FONT>
												<li class="details"><?php  echo $row->Name;?> </li>
											</ul>
										</div>
										<div class="listing-contact-table-field">
											<ul>
											<FONT COLOR="black"<li class="info" style="font-weight:bold">Mobile Number</li></FONT>
												<li class="details"><?php  echo $row->MobileNumber;?></li>
											</ul>
										</div>
										<div class="listing-contact-table-field">
											<ul>
											<FONT COLOR="black"<li class="info" style="font-weight:bold">Address</li></FONT>
												<li class="details"><?php  echo $row->Address;?></li>
											</ul>
										</div>
										
									</div>
								</div>
							
							
							</div>
						</div>

					</div><!-- content area end -->
					<div class="col-md-3 col-sm-4 col-xs-12" style="padding-top: 30px"><!-- sidebar column -->
						<div class="sidebar sidebar-wrap">
							
							
							<div class="sidebar-widget shadow-1">
								<div class="sidebar-widget-title">
									<h5><span class="bgblue-1"></span>Profile Pics</h5>
								</div>
								<div class="sidebar-widget-content advertise  clearfix">
									<div class="sidebar-image-ads">
										<img src="admin/images/<?php echo $row->Picture;?>" height="195" width="300" alt="listing item"/>
									</div>
								</div>
							</div>
							
						</div>
					

					<?php $cnt=$cnt+1;}} else{?>	
<h4 style="color:red;">No Result Found</h4>
<?php } ?>
				</div>

			</div><!-- section container end -->
		</section>
		
	

	</div>

	<!--================================JQuery===========================================-->
        
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<script src="js/jquery.js"></script><!-- jquery 1.11.2 -->
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
	
	<!--================================BOOTSTRAP===========================================-->
        
	<script src="bootstrap/js/bootstrap.min.js"></script>	
	
	<!--================================NAVIGATION===========================================-->
	
	<script type="text/javascript" src="js/menu.js"></script>
	
	<!--================================SLIDER REVOLUTION===========================================-->
		
	<script type="text/javascript" src="assets/revolution_slider/js/revolution-slider-tool.js"></script>
	<script type="text/javascript" src="assets/revolution_slider/js/revolution-slider.js"></script>
	
	<!--================================MAP===========================================-->
		
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBueyERw9S41n4lblw5fVPAc9UqpAiMgvM&amp;sensor=false"></script>
	<script type="text/javascript" src="js/map-2.js"></script>
	<!-- map with geo locations -->
	
	<script type="text/javascript" src="js/jquery.mapit.js"></script>
	<script src="js/initializers.js"></script>
	
	<!--================================OWL CARESOUL=============================================-->
		
	<script src="js/owl.carousel.js"></script>
    <script src="js/triger.js" type="text/javascript"></script>
		
	<!--================================FunFacts Counter===========================================-->
		
	<script src="js/jquery.countTo.js"></script>
	
	<!--================================jquery cycle2=============================================-->
	
	<script src="js/jquery.cycle2.min.js" type="text/javascript"></script>	
	
	<!--================================waypoint===========================================-->
		
	<script type="text/javascript" src="js/jquery.waypoints.min.js"></script><!-- Countdown JS FILE -->
	
	<!--================================RATINGS===========================================-->	
	
	<script src="js/jquery.raty-fa.js"></script>
	<script src="js/rate.js"></script>
	
	<!--================================ video===========================================-->
	<script src="assets/html5lightbox/html5lightbox.js"></script>
	
	<!--================================custom script===========================================-->
		
	<script type="text/javascript" src="js/custom.js"></script>
    
</body>
</html>
