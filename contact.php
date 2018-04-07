<?php ?>
<!doctype html>
<!--[if gt IE 8]><!-->	<html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<?php include('metatags.php');?>
</head>
<body>
	<!--PreLoader Start-->
	<div id="bt-preloader"><div class="bt-preloadericon"></div></div>
	<!--PreLoader End-->
	<!--Wrapper Start-->
	<div id="bt-wrapper" class="bt-wrapper bt-haslayout">
		<!--Header Start-->
		<nav id="bt-nav" class="bt-nav">
			<?php include('header.php');?>
		</nav>
		<header id="bt-header" class="bt-header bt-headerinnerpage bt-headerinnerpagev1 bt-haslayout">
			<strong class="bt-logo"><a href="#"><img src="images/logo.png" alt="image description"></a></strong>
			<div class="bt-navigationarea">
				<ul>
					<li class="bt-active bt-hasdropdown">
								<span>01.</span>
								<a href="index.php">home</a>
							</li>
							<li class="bt-hasdropdown">
								<span>02.</span>
								<a href="javascript:void(0);">gallery</a>
								<ul class="bt-submenu">
									<li><a href="automobile.php">Automobile Album</a></li>
									<li><a href="corporate.php">Corporate Album</a></li>
									<li><a href="fashion.php">Fashion Album</a></li>
									<li><a href="kids.php">Kids Album</a></li>
									<li><a href="nature.php">Nature Album</a></li>
									<li><a href="portrait.php">Portrait Album</a></li>
									<li><a href="prewedding.php">Pre Wedding Album</a></li>
									<li><a href="travel.php">Travel Album</a></li>
									<li><a href="uniform.php">Uniform Diaries</a></li>
									<li><a href="wedding.php">Wedding Album</a></li>
									
								</ul>
							</li>
							<li class="bt-hasdropdown">
								<span>03.</span>
								<a href="about.php">about us</a>
							</li>
							<li class="bt-hasdropdown">
								<span>04.</span>
								<a href="#">packages</a>
							</li>
							<li class="bt-hasdropdown">
								<span>05.</span>
								<a href="contact.php">contact us</a>
							</li>
							<li><a class="bt-btntogglemenu" href="javascript:void(0);"><img src="images/icons/icon-01.png" alt="image description"></a></li>
						</ul>
			</div>
		</header>
		<!--Header End-->
		<!--Inner Page Banner Start-->
		<div class="bt-innerpagebanner bt-innerpagebannerv2 bt-fullheight">
			<figure class="bt-fullheight" data-vide-bg="poster: images/bg/bgcontactv2" data-vide-options="position: 0% 50%">
				<figcaption>
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="bt-innerbannercontent">
									<div class="bt-borderheading">
										<h1>Feel free to get in touch with us to set up<span>a time for a casual meeting</span></h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</figcaption>
				<a id="bt-btnscrollto" class="bt-btnscrollto bt-btnscroll" href="#bt-main">scroll</a>
			</figure>
		</div>
		<!--Inner Page Banner End-->
		<!--Main Start-->
		<main id="bt-main" class="bt-main bt-haslayout">
			<div class="container">
				<div class="row">
					<div id="bt-content" class="bt-content">
						<div class="bt-contactus bt-contactusvtwo">
							<ul class="bt-contactinfo">
								<li>
									<i><img src="images/icons/icon-08.png" alt="image description"></i>
									<span>(+91) 9661 250 533</span>
									<span></span>
								</li>
								<li>
									<i><img src="images/icons/icon-09.png" alt="image description"></i>
									<address>Sarojni Nagar<span>Delhi, India</span></address>
								</li>
								<li>
									<i><img src="images/icons/icon-10.png" alt="image description"></i>
									<span><a href="mailto:info@klik.in.net">info@klik.in.net</a></span>
									<span><a href="mailto:klikproductionsss@gmail.com">klikproductionsss@gmail.com</a></span>
								</li>
							</ul>
							
							
							<div class="bt-getintouch">
								<h2>Get in Touch</h2>
								<form class="bt-formtheme bt-formcontactus" id="contact_form" action="" method="post" autocomplete="true">
									<fieldset>
										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
												<div class="form-group">
													<input type="text" name="name" class="form-control" placeholder="Name (Required)" required>
												</div>
											</div>
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
												<div class="form-group">
													<input type="email" name="email" class="form-control" placeholder="Email Address (Required)" required>
												</div>
											</div>
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
												<div class="form-group">
													<input type="text" name="phonenumber" class="form-control" placeholder="Phone Number">
												</div>
											</div>
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
												<div class="form-group">
													<input type="text" name="subject" class="form-control" placeholder="Subject (Required)" required>
												</div>
											</div>
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
												<div class="form-group">
													<textarea name="message" class="form-control" placeholder="Message (Required)" required></textarea>
												</div>
											</div>
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
												<button class="bt-btn bt-btnblack" type="submit" name="submit" id="submit-btn"><span>Send mail</span></button>
											</div>
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
												<div id="message" class="alert alert-error" style="color:#e03215;"></div>
											</div>
										</div>
									</fieldset>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!--Main End-->
		<!--Footer Start-->
		<footer id="bt-footer" class="bt-footer bt-haslayout">
			<?php include('footer.php');?>
		</footer>
		<!--Footer End-->
	</div>
	<!--Wrapper End-->
	<script src="js/vendor/jquery-library.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/jquery.cubeportfolio.min.js"></script>
	<script src="js/tinycolor-0.9.16.min.js"></script>
	<script src="js/jquery.scrollTo.min.js"></script>
	<script src="js/jquery.pogoslider.js"></script>
	<script src="js/touchswipe.min.js"></script>
	<script src="js/jgallery.min.js"></script>
	<script src="js/jquery.vide.js"></script>
	<script src="js/prettyPhoto.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/parallax.js"></script>
	<script src="js/countTo.js"></script>
	<script src="js/appear.js"></script>
	<script src="js/gmap3.js"></script>
	<script src="js/themefunction.js"></script>
</body>
<script type="text/javascript">
 $(document).ready(function(){
	 $("#message").hide();
 $('#submit-btn').click(function(){
	var url = $(this).attr('action');
	var data = $('#contact_form').serialize();
	var check=$.ajax({
	type:"post",
	url:"contactsub.php",
	data:data,
	contentType:"application/x-www-form-urlencoded",
	success: function(responseData, textStatus , jqXHR){
			$('#message').html(responseData);
			$("#message").show();
	},
	error:function(textStatus, errorThrown){console.log(errorThrown);}
 });
 return false;
 });
 });//end of document ready
 </script>
</html>