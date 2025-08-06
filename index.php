<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Online Banquet Booking System|| Home Page
</title>

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
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
	<!-- banner -->

			<?php include_once('includes/header.php');?>
			
		
				<div class="logo pull-left"><a href="index.php" title="Responsive Slide Menus"></a><h3 style="color: #696969"><img src="images/logo.jpg" width="150" height="100">OUR SERVICE FOR YELLOWCITY</h3></div>
				<div class="w3layouts-banner">
				<div>
				<section id="search-form">
			<div class="container">
				<div class="search-form">
					<form class="clearfix" name="search" action="serviceman-search.php" method="post">
						
						<div class="select-field-wrap pull-left">
		
							<input class="input-field" type="text" placeholder="Location" name="location" style="height:30px;" required="required">	
							</select>
						</div>
						<div class="select-field-wrap pull-left">
							<select class="search-form-select" name="categories" >
								<option class="options" value="all-categories">All categories</option>
								<?php 

$sql2 = "SELECT * from   tblservice ";
$query2 = $dbh -> prepare($sql2);
$query2->execute();
$result2=$query2->fetchAll(PDO::FETCH_OBJ);

foreach($result2 as $row)
{          
    ?>  
<option value="<?php echo htmlentities($row->Servicename);?>"><?php echo htmlentities($row->Servicename);?></option>
 <?php } ?> 
							</select>
						</div>
						<div class="submit-field-wrap ">
							<input class="search-form-submit bgblue-4 white" name="search" type="submit"/>
						</div>
					</form>
				</div>
			</div>
		</section>
</div>
				<div class="container">
				    <div><center><img src="images/index.png"  alt="item slide"  width="700" height="350"></center></div>
				</div>
			</div>
			<div class="w3ls-banner-info-bottom">
				<div class="container">
					<div class="banner-address">
						<?php
$sql="SELECT * from tblpage where PageType='contactus'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
						
						<?php $cnt=$cnt+1;}} ?></div>
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- banner-bottom -->
	
	<!-- //banner-bottom -->

	

	</script>
	<!-- //jarallax -->
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="js/modernizr.custom.js"></script>

</body>	
</html>