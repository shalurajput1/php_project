<?php 
include "resources/template/config.php";

if(isset($_POST['submitmsg']))
{
	$msg = $_POST['msg'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	mysqli_query($con , "INSERT INTO messages (msg, name, email) VALUES ('".$msg."','".$name."','".$email."')");
}

?>
<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
<div class="main-w3layouts" id="hiddenhead">
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
			<h2>Hindu School,Sonepat</h2>
			<h4>CBSE, Delhi</h4>
			
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
								<li><a href="index.html" class="hvr-underline-from-center active">Home</a></li>
								<li><a href="#about" class="hvr-underline-from-center scroll">About Us</a></li>
								<li><a href="#services" class="hvr-underline-from-center scroll">Rules</a></li>
								<li><a href="#gallery" class="hvr-underline-from-center scroll">Gallery</a></li>
								<li><a href="#team" class="hvr-underline-from-center scroll">Members</a></li>
								<li><a href="#map" class="hvr-underline-from-center scroll">Map</a></li>
								<li><a href="#contact" class="hvr-underline-from-center scroll">Contact Us</a></li>
							</ul>
						</div>
						<div class="clearfix"> </div>	
				</nav>
			</div>
	<!-- //navigation -->

	
	<!--//top-bar-->
	

	<div class="header">
		<!-- Slider -->
			<div class="slider">
				<div class="callbacks_container">
					<ul class="rslides" id="slider">
						<li>
						
							<div class="slider-info">
								<p>wisdom begins with wonder.</p>
								<h3><a href="index.html"><span>Edu</span> cational</a></h3>
								<h6>wisdom begins with wonder.</h6>
							</div>
						</li>
						<li>
						
							<div class="slider-info">
								<p>Education is a vaccine for violence.</p>
								<h3><a href="index.html"><span>Edu</span> cational</a></h3>
								<h6>wisdom begins with wonder.</h6>
							</div>
						</li>
						<li>
						
							<div class="slider-info">
								<p>wisdom begins with wonder.</p>
								<h3><a href="index.html"><span>Edu</span> cational</a></h3>
								<h6>wisdom begins with wonder.</h6>
							</div>
						</li>
						<li>
						
							<div class="slider-info">
								<p>Learning never exhausts the mind.</p>
								<h3><a href="index.html"><span>Edu</span> cational</a></h3>
								<h6>wisdom begins with wonder.</h6>
							</div>
						</li>
							
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		<!-- //Slider -->
	</div>
</div>
<!--main-content-->

<!--about-->
<div id="about" class="about">
	<div class="container">
			<h1>About <span>us</span></h1>
			<h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod ut enim ad tempor incididunt ut labore et dolore magna aliqua.</h2>
			<div class="specialty-grids-top">
				
				<div class="clearfix"> </div>
			</div>
			<!-- Modal1 -->
			<?php 
			$queryrule = mysqli_query($con , "SELECT * FROM rules");
			while($showrule = mysqli_fetch_assoc($queryrule)){
				$queryhead1 = mysqli_query($con , "SELECT * FROM rulehead WHERE id='".$showrule['heading_id']."'");
				$showhead1 = mysqli_fetch_assoc($queryhead1);
			?>
			<div class="modal fade" id="myModal<?php echo $showrule['heading_id']; ?>" tabindex="-1" role="dialog" >
				<div class="modal-dialog" role="document">
				<!-- Modal content-->
					<div class="modal-content abt-w3l">
							<div class="modal-header">
								<button type="button" class="close clo1" data-dismiss="modal">&times;</button>
									<h4><?php echo $showhead1['title']; ?></h4>
									<?php
										echo htmlspecialchars_decode($showrule['content']);
									?>
							</div>
						</div>
					</div>
				 </div>
				 <?php } ?>
				<!-- //Modal1 -->
				<div class="clearfix"></div>
			</div>
	</div>
	
	<div class="clearfix"></div>
<!--//about-->

<!-- services -->
<div class="services" id="services">
			<h3>Faculty House Rules</h3>
		<?php
		$showhead = mysqli_query($con, "SELECT * FROM rulehead");
		while($show = mysqli_fetch_assoc($showhead)){
		?>
		<div class="col-md-2 services-gd text-center" data-wow-delay=".5s">
			<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
				<a href="#" class="hi-icon" data-toggle="modal" data-target="#myModal<?php echo $show['id']; ?>"><img src="images/uni.png" alt=" " /></a>
			</div>
			<h4><?php echo $show['title']; ?></h4>	
		</div>
		<?php } ?>
		<!--
		<div class="col-md-2 services-gd text-center" data-wow-delay=".5s">
			<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
				<a href="#" class="hi-icon"><img src="images/edu.png" alt=" " /></a>
			</div>
			<h4>Boarding and lodging facility</h4>
			<p>Lorem Ipsum</p>
		</div>
		<div class="col-md-2 services-gd text-center" data-wow-delay=".5s">
			<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
				<a href="#" class="hi-icon"><img src="images/uni.png" alt=" " /></a>
			</div>
			<h4>Lodging charges</h4>
			<p>Lorem Ipsum</p>
		</div>
		<div class="col-md-2 services-gd text-center" data-wow-delay=".5s">
			<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
				<a href="#" class="hi-icon"><img src="images/hourglass.png" alt=" " /></a>
			</div>
			<h4>Boarding charges</h4>
			<p>Lorem Ipsum</p>
		</div>
		<div class="col-md-2 services-gd text-center" data-wow-delay=".5s">
			<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
				<a href="#" class="hi-icon"><img src="images/book2.png" alt=" " /></a>
			</div>
			<h4>Lounge &amp; Dining hall</h4>
			<p>Lorem Ipsum</p>
		</div> -->
		<div class="clearfix"> </div>
</div>
<!-- //services -->

<!-- gallery -->
<div class="portfolio" id="gallery">
	<h3>Gallery</h3>
		
		<div class="portfolio-top wow fadeInDown animated" data-wow-delay=".5s">
		 <?php 
		 $photo = mysqli_query($con , "SELECT * FROM gallery ORDER BY id DESC LIMIT 3"); 
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
			<a href="gallery.php" style="float: right;"><button class="btn btn-success" style="float: right;">See more...</button></a>
			<div class="clearfix"></div>
		 </div>
		
	</div>
<!-- Portfolio Modals -->
<?php
$photo1 = mysqli_query($con , "SELECT * FROM gallery ORDER BY id DESC LIMIT 3"); 
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
<!--<div class="portfolio-modal modal fade slideanim" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
         
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h3>Educational</h3>
                      
                        <img src="images/g2.jpg" class="img-responsive" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
           
        </div>
    </div>
    </div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
           
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h3>Educational</h3>
                     
                        <img src="images/g3.jpg" class="img-responsive" alt="">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
       
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
			
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h3>Educational</h3>
                       
                        <img src="images/g4.jpg" class="img-responsive" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">

                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h3>Educational</h3>
                       
                        <img src="images/g5.jpg" class="img-responsive" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
           
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
           
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h3>Educational</h3>
                       
                        <img src="images/g6.jpg" class="img-responsive" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
        
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
            
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h3>Educational</h3>
                     
                        <img src="images/g7.jpg" class="img-responsive" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
         
        </div>
    </div>
</div>-->
<!-- /Portfolio Modals -->
<!-- //gallery -->

<!-- team -->
<div class="team" id="team">
	<div class="container">
		<h3 class="title">Club <span>Members</span></h3>
		<div class="team_gds">
		<?php
		$team = mysqli_query($con , "SELECT * FROM team");
		while($show = mysqli_fetch_assoc($team)){
			$id = md5($show['id']);
		?>
			<div class="col-md-3 team_gd1 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
				<div class="team_pos">
					<div class="team_back"></div>
					<img class="img-responsive" src="admin/members/images/<?php echo $id; ?>.jpg"  alt=" ">
					<div class="team_info">
						<a href="#"  class="face_one"><i class=" so1 fa fa-facebook fc1" aria-hidden="true"></i></a>
						<a href="#"  class="face_one"><i class=" so2 fa fa-twitter fc2" aria-hidden="true"></i></a>
						<a href="#"  class="face_one"><i class=" so3 fa fa-google fc3" aria-hidden="true"></i></a>
					</div>
				</div>
				<h4><?php echo $show['name']; ?></h4>
				<p><?php echo $show['designation']; ?></p>
			</div>
		<?php } ?> 
			
			<div class="clearfix"></div>		
		</div>
	</div>
</div>
<!-- //team -->



<!--contact-->
	<div class="map" id="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3493.7159251984426!2d76.61596888507604!3d28.877066449749424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d84e6e04c3975%3A0x7e46a4c68b7e475f!2sMDU+Faculty+Club!5e0!3m2!1sen!2sin!4v1509897521935" style="border:0" allowfullscreen></iframe>
	</div>
	<div class="contact-agile" id="contact">
		<h3>Contact <span>Us</span></h3>
			<div class="container">
						
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="wow fadeInLeft animated" data-wow-delay=".5s">
					<div class="contact-grids1 agileinfo">
						<div class="contact-me ">
							<h4>Message</h4>
							<textarea name="msg" placeholder="" required=""> </textarea>
						</div>
						<div class="col-md-5 contact-form1">
							<h4>Name</h4>
							<input type="text" name="name" placeholder="" required="">
						</div>
						<div class="col-md-5 contact-form1">
							<h4>Email</h4>
							<input type="email" name="email" placeholder="" required="">
						</div>
						<div class="col-md-2 contact-form">
							<input type="submit" name="submitmsg" value="Submit">
						</div>
						<div class="clearfix"> </div>
					
					</div>
				</form>
						
			</div>
	</div>
<!--//contact-->

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
					<li><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Hindu School, Sonepat</li>
					<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">hce.snp@vidyasonepat.com , hce.snp@hcesonepatt.org</a></li>
					<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+0130-2212756 (O) +919034090663 (M) )</li>
				</ul>
			</div>
			
			<div class="clearfix"> </div>
			<div class="w3agile_footer_copy">
				<p>All rights reserved | Developed By: <a target="_blank" href=""> Shalu</a></p>
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