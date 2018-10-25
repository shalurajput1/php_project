<?php
include "resources/template/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>HCE Faculty House</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Educational Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free web designs for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->
<!-- css files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&subset=latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Covered+By+Your+Grace" rel="stylesheet">
<!-- //online-fonts -->
</head>
<body>
<div class="main-w3layouts" id="home">
	<!--top-bar-->
	<div class="top-search-bar col-md-12">
		<div class="col-md-2">
		</div>
		<div class="col-md-2" style="text-align: right; margin-top:10px;">
			<img src="logo.png" height="100" width="100">
		</div>
		<div style="text-align: center; color: white;" class="col-lg-5">
			<!--<ul>
				<li><a href="#" data-toggle="modal" data-target="#myModal1"><i class="fa fa-envelope" aria-hidden="true"></i>NEWSLETTER</a></li>
				<li><a href="#" data-toggle="modal" data-target="#myModal3"><i class="fa fa-key" aria-hidden="true"></i>LOGIN</a></li>
				<li><a href="#" data-toggle="modal" data-target="#myModal4"><i class="fa fa-lock" aria-hidden="true"></i>REGISTER</a></li>
			</ul>
			-->
			<h2>Hindu School</h2>
			<h4>CBSE,DELHI</h4>
			<h5>Accredited 'A' grade by NAAC</h5>
		</div>
		<div class="col-md-3">
		</div>
	</div>
</div>
<!-- navigation -->
			<div>
				<nav class="navbar navbar-default">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							
						</div>
						<!-- navbar-header -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="index.php" class="hvr-underline-from-center">Home</a></li>
								<li><a href="index.php" class="hvr-underline-from-center">About Us</a></li>
								<li><a href="index.php" class="hvr-underline-from-center">Rules</a></li>
								<li><a href="index.php" class="hvr-underline-from-center active">Gallery</a></li>
								<li><a href="index.php" class="hvr-underline-from-center">Members</a></li>
								<li><a href="index.php" class="hvr-underline-from-center">Map</a></li>
								<li><a href="index.php" class="hvr-underline-from-center">Contact Us</a></li>
							</ul>
						</div>
						<div class="clearfix"> </div>	
				</nav>
			</div>
	<!-- //navigation -->




<!-- gallery -->
<div class="portfolio" id="gallery">
	<h3>Gallery</h3>
		
		<div class="portfolio-top wow fadeInDown animated" data-wow-delay=".5s">
		 <?php 
		 $photo = mysqli_query($con , "SELECT * FROM gallery ORDER BY id DESC"); 
		 $i = 0;
		 while($showimg = mysqli_fetch_assoc($photo)){
		 	$img_id = md5($showimg['id']);
		 	$i++;
		 ?>
			<div class="col-md-4 grid slideanim">
				<figure class="effect-jazz">
				<a href="#portfolioModal<?php echo $i; ?>"  data-toggle="modal">

					<img src="admin/gallery/images/<?php echo $img_id; ?>.jpg" alt="img25" class="img-responsive"/>
						<figcaption>
							<h4><?php echo $showimg['content']; ?></h4>
							<p> <?php echo $showimg['sub_content']; ?></p>
						</figcaption>
					</a>						
				</figure>
			</div>
			<?php } ?>
			
			<div class="clearfix"></div>
		 </div>
		
	</div>
<!-- Portfolio Modals -->
<?php
$photo1 = mysqli_query($con , "SELECT * FROM gallery ORDER BY id DESC"); 
$j = 0;
while ($showimg1 = mysqli_fetch_assoc($photo1)) {
	$j++;
	$img_id1 = md5($showimg1['id']);
?>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal<?php echo $j; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
		
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h3><?php echo $showimg1['content']; ?> </h3>
						
                        <img src="admin/gallery/images/<?php echo $img_id1; ?>.jpg" class="img-responsive" alt="">
                        <p><?php echo $showimg1['sub_content']; ?></p>
                    </div>
                </div>
           
        </div>
    </div>
</div>
<?php } ?>




<!-- footer -->
	<div class="footer" id="footer">
		<div class="container">
			<div class="col-md-4 agileinfo_footer_grid">
				<h4>About Us</h4>
				<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu 
					fugiat nulla pariatur. <span>Excepteur sint occaecat cupidatat non proident 
					sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>
			</div>
			<div class="col-md-4 agileinfo_footer_grid mid-w3l nav2">
				<h4>Options</h4>
				<ul>
					<li><a href="#home" class="scroll">Home</a></li>
					<li><a href="#about" class="scroll">About Us</a></li>
					<li><a href="#services" class="scroll">Rules</a></li>
					<li><a href="#gallery" class="scroll">Gallery</a></li>
					<li><a href="#team" class="scroll">Team</a></li>
					<li><a href="#events" class="scroll">Events</a></li>
					<li><a href="#testimonials" class="scroll">Testimonials</a></li>
				</ul>
			</div>
			<div class="col-md-4 agileinfo_footer_grid">
				<h4>Address</h4>
				<ul>
					<li><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Hindu School, Sonipat</li>
					<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">info@example.com</a></li>
					<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+911262-393016 (O) +919315315480 (M) )</li>
				</ul>
			</div>
			
			<div class="clearfix"> </div>
			<div class="w3agile_footer_copy">
				<p>All rights reserved | Developed By: <a target="_blank" href="">shalu</a></p>
			</div>
		</div>
	</div>
<!-- //footer -->

<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>


<script src="js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
		<!--light-box-files -->
		<script>
		$(function() {
			$('.gallery-grid a').Chocolat();
		});
		</script>
 <!-- required-js-files-->
		
							<link href="css/owl.carousel.css" rel="stylesheet">
							    <script src="js/owl.carousel.js"></script>
							        <script>
							    $(document).ready(function() {
							      $("#owl-demo").owlCarousel({
							        items : 1,
							        lazyLoad : true,
							        autoPlay : true,
							        navigation : false,
							        navigationText :  false,
							        pagination : true,
							      });
							    });
							    </script>
								 <!--//required-js-files-->

<script src="js/responsiveslides.min.js"></script>
		<script>
				$(function () {
					$("#slider").responsiveSlides({
						auto: true,
						pager:false,
						nav: true,
						speed: 1000,
						namespace: "callbacks",
						before: function () {
							$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
						}
					});
				});
			</script>
			

<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->

	<!-- bottom-top -->
	<!-- smooth scrolling -->
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
		<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- //smooth scrolling -->
	<!--// bottom-top -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

</body>
</html>
