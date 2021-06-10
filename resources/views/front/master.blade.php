<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta charset="UTF-8">
	<title>Business || Responsive HTML 5 Template</title> 
	
	<!-- mobile responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="fonts/flaticon.css" />
	<!--favicon-->
	<link rel="shortcut icon" href="images/favicon/favicon.ico">
	
</head>

<body>
	<div class="boxed_wrapper">
		<div class="crypto-top-strip crypto-bgcolor">
            <div class="container">
                <div class="row">
                    <aside class="col-md-6">
                        <ul class="crypto-userinfo">
                            <li><i class="fa fa-envelope-o"></i> info@yourdomain.com</li>
                            <li><i class="fa fa-phone"></i> +(333) 052 39876</li>
                        </ul>
                    </aside>
                    <aside class="col-md-6">
                        <ul class="crypto-user-section">
                            <li>
                                <div class="crypto-language">
                                    <ul>
                                        <li> <a href="#"><i class="fa fa-globe"></i> English</a>
                                            <ul class="crypto-language-menu">
                                                <li><a href="#">English</a></li>
                                                <li><a href="#">Arabic</a></li>
                                                <li><a href="#">Farsi</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li> <a href="#" data-toggle="modal" data-target="#loginModal"><i class="fa fa-user"></i> Login</a></li>
                            <li> <a href="#" data-toggle="modal" data-target="#signupModal"><i class="fa fa-sign-in"></i> Sign Up</a></li>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>

		<!-- Menu -->
		<div class="mainmenu-area stricky">
		    <div class="container">
		    	<div class="row">
		    		<div class="col-md-5">
						<!-- <div class="main-logo">
							<a href="index"><img src="images/logo/logo.png" alt=""></a>
						</div> -->
						<div class="main-logo">
							<a href="index"><img src="images/logo/isp-logo.png" style="width: 25rem;" alt=""></a>
						</div>
					</div>
					<div class="col-md-5 menu-column">
						<nav class="main-menu">
				            <div class="navbar-header">     
				                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				                    <span class="icon-bar"></span>
				                    <span class="icon-bar"></span>
				                    <span class="icon-bar"></span>
				                    <span class="icon-bar"></span>
				                </button>
				            </div>
				            <div class="navbar-collapse collapse clearfix">
				                <ul class="navigation clearfix">

				                    <li class="current"><a href="index">home</a></li>                 
				                    
				                    <li class="dropdown "><a href="about">about</a>
										<ul>
											<li><a href="about">about</a></li>
											<li><a href="team">Team</a></li>
											<li><a href="error">Error</a></li>
										</ul>
				                    </li>

				                    <li class="dropdown"><a href="#">service</a>
				                        <ul>
											<li><a href="service">Services</a></li>
											<li><a href="service-single">Service Single</a></li>
										</ul>
				                    </li>
				                    <li class="dropdown"><a href="#">Blog</a>
										<ul>
											
											<li><a href="blog-grid">Blog Grid</a></li>
											<li><a href="blog-with-sidebar">Blog With Sidebar</a></li>
											<li><a href="blog-details">Blog Details</a></li>
											
										 </ul>
									</li>

				                    <li><a href="contact">Contact</a></li>
				                </ul>

				                <ul class="mobile-menu clearfix">

				                    <li><a href="index">home</a></li>                 
				                    
				                    <li class="current"><a href="about">about</a></li>

				                    <li class="dropdown"><a href="#">service</a>
				                        <ul>
											<li><a href="service">Services</a></li>
											<li><a href="service-single">Service Single</a></li>
										</ul>
				                    </li>

				                    <li class="dropdown"><a href="#">pages</a>
										<ul>
											<li><a href="shop">shop</a></li>
											<li><a href="team">Team</a></li>
											<li><a href="error">Error</a></li>
										 </ul>
				                    </li>

				                    <li class="dropdown"><a href="#">Blog</a>
										<ul>
											
											<li><a href="blog-grid">Blog Grid</a></li>
											<li><a href="blog-with-sidebar">Blog With Sidebar</a></li>
											<li><a href="blog-details">Blog Details</a></li>
											
										 </ul>
									</li>

				                    <li><a href="contact">Contact</a></li>

				                </ul>
				            </div>
				        </nav>
					</div>
					<div class="col-md-2">
						<div class="right-area">
						   <div class="link_btn float_right">
							   <a href="#" class="thm-btn">GET A Quote?</a>
						   </div>
						</div>	
					</div>
		    	</div>
		        
		    </div>
		</div>
		@yield('content')
		<footer class="footer footer-classic">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="footer-text">
							<a href="#">
								<img src="images/footer/logo1.png" alt="logo">
							</a>
							<p>
								Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam quis nostrud exercitation.
							</p>
							<div class="social-icons">
								<a href="#" class="btn btn-social btn-social-o twitter">
									<i class="fa fa-twitter"></i>
								</a>
								<a href="#" class="btn btn-social btn-social-o linkedin">
									<i class="fa fa-linkedin"></i>
								</a>
								<a href="#" class="btn btn-social btn-social-o facebook">
									<i class="fa fa-facebook-f"></i>
								</a>
								<a href="#" class="btn btn-social btn-social-o skype">
									<i class="fa fa-skype"></i>
								</a>
								<a href="#" class="btn btn-social btn-social-o pinterest">
									<i class="fa fa-pinterest-p"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-xl-2 col-md-2">
						<div class="links">
							<h3>Links</h3>
							<ul class="">
								<li><a href="index">Home</a></li>
								<li><a href="about">About Us</a></li>
								<li><a href="service">Services</a></li>
								<li><a href="shop">Our Shop</a></li>
								<li><a href="blog-grid">Latest Blog</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-3">
						<div class="location">
							<h3>Location</h3>
							<ul>
								<li>Excepteur sint occaecat cupidat non proident sunt.</li>
								<li><i class="fa fa-home"></i> 1201 Park Street, Fifth Avenue,</li>
								<li><i class="fa fa-phone"></i> <a href="">[88] 657 524 332</a></li>
								<li><i class="fa fa-fax"></i> <a href="">[837] 6340 23092 23</a></li>
								<li><i class="fa fa-envelope"></i> <a href="mailto"> info@example.com </a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4">
						<div class="sidebar-wrapper">
							<div class="single-sidebar">
		                        <div class="wedgit-title">
		                            <h3>Popular Post</h3>
		                        </div>
		                        <ul class="popular-post">
		                            <li>
		                                <div class="img-holder">
		                                    <img src="images/blog/sidebar/popular-post-1.png" alt="Awesome Image">
		                                    <div class="overlay-style-one">
		                                        <div class="box">
		                                            <div class="content">
		                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
		                                            </div>
		                                        </div>
		                                    </div>
		                                </div>
		                                <div class="title-holder">
		                                    <a href="#"><h5 class="post-title">11 Things You Need to Know About Bitcoin – Bare Facts</h5></a>
		                                    <h6 class="post-date">December 14, 2017</h6>
		                                </div>
		                            </li>
		                            <li>
		                                <div class="img-holder">
		                                    <img src="images/blog/sidebar/popular-post-2.png" alt="Awesome Image">
		                                    <div class="overlay-style-one">
		                                        <div class="box">
		                                            <div class="content">
		                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
		                                            </div>
		                                        </div>
		                                    </div>
		                                </div>
		                                <div class="title-holder">
		                                    <a href="#"><h5 class="post-title">What Comes After the Crypto Concurrency Bubble?</h5></a>
		                                    <h6 class="post-date">December 13, 2017</h6>
		                                </div>
		                            </li>
		                        </ul>
		                    </div>
						</div>
					</div>
				</div>
				<!-- COPY RIGHT -->
				<div class="copyright">
					<hr>
					<div class="row justify-content-center">
						<div class="col-sm-12">
							<div class="copyRight_text text-center">
								<p> © 2018 <a href="#">Business TEMPLATE.</a>  All Copyright Reserved.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
 


	<!-- Scroll Top Button -->
	<button class="scroll-top tran3s color2_bg">
		<span class="fa fa-angle-up"></span>
	</button>
	<!-- pre loader  -->
	<div class="preloader"></div>

		<!-- jQuery js -->
		<script src="js/jquery.js"></script>
		<!-- bootstrap js -->
		<script src="js/bootstrap.min.js"></script>
		<!-- jQuery ui js -->
		<script src="js/jquery-ui.js"></script>
		<!-- owl carousel js -->
		<script src="js/owl.carousel.min.js"></script>
		
		<!-- mixit up -->
		<script src="js/wow.js"></script>
		<script src="js/jquery.mixitup.min.js"></script>
		<script src="js/jquery.fitvids.js"></script>
		<script src="js/bootstrap-select.min.js"></script>

		<!-- revolution slider js -->
		<script src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
		<script src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
		<script src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
		<script src="assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
		<script src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
		<script src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
		<script src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
		<script src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
		<script src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
		<script src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
		<script src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>

		<!-- fancy box -->
		<script src="js/jquery.fancybox.pack.js"></script>
		<script src="js/jquery.polyglot.language.switcher.js"></script>
		<script src="js/nouislider.js"></script>
		<script src="js/jquery.bootstrap-touchspin.js"></script>
		<script src="js/SmoothScroll.js"></script>
		<script src="js/jquery.appear.js"></script>
		<script src="js/jquery.flexslider.js"></script>
		<script src="js/custom.js"></script>

	</div>
	
</body>

</html>



