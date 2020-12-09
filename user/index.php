<?php

    session_start();
?>

<!DOCTYPE html>
<html lang="en">

	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <title>Lisa Tour& Travel</title>
	    <!-- Web Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
        <!-- Bootstrap Core CSS -->
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <!-- Flaticon CSS -->
	    <link href="fonts/flaticon/flaticon.css" rel="stylesheet">
	    <!-- font-awesome CSS -->
	    <link href="css/font-awesome.min.css" rel="stylesheet">
	    <!-- Offcanvas CSS -->
	    <link href="css/hippo-off-canvas.css" rel="stylesheet">
	    <!-- animate CSS -->
	    <link href="css/animate.css" rel="stylesheet">
	    <!-- language CSS -->
	    <link href="css/language-select.css" rel="stylesheet">
	    <!-- owl.carousel CSS -->
	    <link href="owl.carousel/assets/owl.carousel.css" rel="stylesheet">
		<!-- magnific-popup -->
    	<link href="css/magnific-popup.css" rel="stylesheet">
    	<!-- Main menu -->
    	<link href="css/menu.css" rel="stylesheet">
    	<!-- Template Common Styles -->
    	<link href="css/template.css" rel="stylesheet">
	    <!-- Custom CSS -->
	    <link href="css/style.css" rel="stylesheet">
	    <!-- Responsive CSS -->
	    <link href="css/responsive.css" rel="stylesheet">

	    <script src="js/vendor/modernizr-2.8.1.min.js"></script>
	    <!-- HTML5 Shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
		    <script src="js/vendor/html5shim.js"></script>
		    <script src="js/vendor/respond.min.js"></script>
	    <![endif]-->
	</head>


	
	<body id="page-top">
		<div id="st-container" class="st-container">
		    <div class="st-pusher">
	        	<div class="st-content">
				  	<header class="header">
				  		<nav class="top-bar">
				  			<div class="overlay-bg">
					  			<div class="container">
					  				<div class="row">
					  					
					  					<div class="col-sm-6 col-xs-12">
						  					<div class="call-to-action">
						  						
						  					</div><!-- /.call-to-action -->
					  					</div><!-- /.col-sm-6 -->

					  					<div class="col-sm-6 hidden-xs">
						  					<div class="topbar-right">
							  					<div class="lang-support pull-right">
													
												</div>

						  						<ul class="social-links list-inline pull-right">
						  							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						  							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						  							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						  							<li><a href="#"><i class="fa fa-tumblr"></i></a></li>

                                                 <button class="btn btn-primary"  onclick="konfirmasi()">Logout</button>
                                                      <p id="pesan"></p>
                                                        
                                                        <script>
                                                             function konfirmasi(){
                                                                 var tanya = confirm("Are you sure, Logout?");
                                                         
                                                                 if(tanya === true) {
                                                                     alert("Sucsess Logout, Thank you");window.location =("../index.php") ;
                                                                 }else{
                                                                    pesan = "";
                                                                 }
                                                         
                                                                 document.getElementById("pesan").innerHTML = pesan;
                                                              }
                                                        </script>
						  						</ul>
						  					</div><!-- /.social-links -->
					  					</div><!-- /.col-sm-6 -->
						  				
					  				</div><!-- /.row -->
					  			</div><!-- /.container -->
				  			</div><!-- /.overlay-bg -->
				  		</nav><!-- /.top-bar -->

				  		<div id="search">
						    <button type="button" class="close">×</button>
						    <form>
						        <input type="search" value="" placeholder="type keyword(s) here" />
						        <button type="submit" class="btn btn-primary">Search</button>
						    </form>
						</div>
						
						<nav class="navbar navbar-default" role="navigation">
							
							<div class="container mainnav">
								<div class="navbar-header">
									<h1 class="logo"><a class="navbar-brand" href="index.php"><img src="img/logolisa.jpg" alt=""></a></h1>

									<!-- offcanvas-trigger -->
			                        <button type="button" class="navbar-toggle collapsed pull-right" >
			                          <span class="sr-only">Toggle navigation</span>
			                          <i class="fa fa-bars"></i>
			                        </button>

								</div>

								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse navbar-collapse">

									

									<ul class="nav navbar-nav navbar-right">
										<!-- Home -->
                                        <li class="#"><a href="index.php">Home</a>
                                            <!-- submenu-wrapper -->
                             
                                            <!-- /submenu-wrapper -->
                                        </li>
                                        <!-- /Home -->

                                        <!-- Pages -->
                                        <li class="dropdown"><a href="#">Pages<span class="fa fa-angle-down"></span></a>
                                            <!-- submenu-wrapper -->
                                            <div class="submenu-wrapper">
                                                <div class="submenu-inner">
                                                    <ul class="dropdown-menu">
                                                    	<li><a href="about.php">About</a></li>
                                                        
                                                        <li><a href="our-people.php">Our people</a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- /submenu-wrapper -->
                                        </li>
                                        <!-- /Pages -->

                                        <!-- Services -->
                                        <li class="dropdown"><a href="#">Tour<span class="fa fa-angle-down"></span></a>
                                            <!-- submenu-wrapper -->
                                            <div class="submenu-wrapper">
                                                <div class="submenu-inner">
                                                    <ul class="dropdown-menu">
                                                    	<li><a href="wj.php">Jakarta</a></li>
                                                        
                                                        <li><a href="wb.php">Bogor</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- /submenu-wrapper -->
                                        </li>
                                        <!-- MEGA MENU -->
											<li class="dropdown"><a href="#">Typical Food<span class="fa fa-angle-down"></span></a>
                                            <!-- submenu-wrapper -->
                                            <div class="submenu-wrapper">
                                                <div class="submenu-inner">
                                                    <ul class="dropdown-menu">
                                                    		<li><a href="mkj.php"> Jakarta</a></li>
                                                        <li><a href="mkb.php"> Bogor</a></li>                     
                                                    </ul>
                                                </div>
                                            </div>

										<!-- Blog -->
										<li>
                                       	<li><a href="tourp.php">Tour Package</a></li>
                                            <!-- submenu-wrapper -->
                                           </li>
                                          <li>
												<li><a href="rental.php">Rental</a></li>
                                             	</li>
                                            <!-- submenu-wrapper -->
                                          

                                            <!-- /submenu-wrapper -->
                                        </li>
										<li><a href="contact.php">Contact</a></li>
									</ul>
								</div><!-- /.navbar-collapse -->
							</div><!-- /.container -->

							
						</nav>
					</header>
                    <div id="main-carousel" class="carousel slide hero-slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#main-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#main-carousel" data-slide-to="1"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="img/slider/travel-1.jpg" alt="Hero Slide">
                                <!--Slide Image-->

                                <div class="container">
                                    <div class="carousel-caption">
                                       
                                        <h1 class="animated lightSpeedIn">Lisa Tour& Travel</h1>

                                        <p class="lead animated lightSpeedIn">Sistem Informasi Dan Paket Wisata DKI Jakarta& Bogor(studi kasus agent lisa tour & travel ) Berbasis Web.</p>

                                        <a class="btn btn-primary animated lightSpeedIn" href="#">Look</a>
                                    </div>
                                    <!--.carousel-caption-->
                                </div>
                                <!--.container-->
                            </div>
                            <!--.item-->

                            <div class="item">
                                <img src="img/slider/travel-2.jpg" alt="Hero Slide">
                                <!--Slide Image-->

                                <div class="container">
                                    <div class="carousel-caption">

                                        <h1 class="animated bounceIn">Lisa Tour& Travel</h1>

                                        <p class="lead animated bounceIn">
                                        <p class="lead animated lightSpeedIn">Sistem Informasi Dan Paket Wisata DKI Jakarta& Bogor(studi kasus agent lisa tour & travel ) Berbasis Web.</p>
                                        <a class="btn btn-primary animated bounceIn" href="#">Look</a>
                                    </div>
                                    <!--.carousel-caption-->
                                </div>
                                <!--.container-->
                            </div>
                            <!--.item-->
                        </div>
                        <!--.carousel-inner-->

                        <!-- Controls -->
                        <a class="left carousel-control" href="#main-carousel" role="button" data-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#main-carousel" role="button" data-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <!-- #main-carousel-->


			        <!-- services start -->
			

			        <!-- footer-widget-section start -->
		
			        <!-- footer-widget-section end -->
			        <section class="footer-widget-section section-padding">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3 col-md-offset-1 col-sm-4">
                                    <div class="footer-widget">
                                        <h3>Address &amp; Contact</h3>

                                        <address>
                                           Jl. Teuku Cik Ditiro No.19, RT.9/RW.2, Gondangdia, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10350 , Lobby Utama<br>
                                         

                                        
                                          <span class="tel">(021) 2301777   </span>
                                        </address>


                                        <!-- Modal -->
                                        <div class="modal fade" id="cssMapModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                          <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Our Location</h4>
                                              </div>
                                              <div class="modal-body">

                                                <div id="googleMap"></div>
                                                
                                              </div>
                                            </div><!-- /.modal-content -->
                                          </div><!-- /.modal-dialog -->
                                        </div><!-- End Modal -->
                                    </div><!-- /.footer-widget -->
                                </div><!-- /.col-md-4 -->

                                <div class="col-md-3 col-sm-4">
                                    <div class="footer-widget">
                                        <h3>Pages</h3>

                                        <ul>
                                            <li><a href="about.php">About</a></li>
                                            <li><a href="our-people.php">Our people</a></li>
                                        </ul>
                                    </div><!-- /.footer-widget -->
                                </div><!-- /.col-md-4 -->

                                <div class="col-md-4 col-sm-4">
                                    <div class="footer-widget">
                                       <h3>Our Profile</h3>
                                        <p>Lisa Tour & Travel is a tourism website about trips, information about tourism and special foods that are focused in Indonesia. travel services, open trip services.</p>
   
                                    </div><!-- /.footer-widget -->
                                </div><!-- /.col-md-4 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section><!-- /.cta-section -->
                    <!-- footer-widget-section end -->
			        <!-- copyright-section start -->
			        <footer class="copyright-section">
			        	<div class="container text-center">
			        		<div class="footer-menu">
			        		
			        		</div>

			        		<div class="copyright-info">
			        			<span>Copyright © 2020 PT. Lisa Tour& Travel. Designed by Fahmy</a></span>
			        		</div>
			        	</div><!-- /.container -->
			        </footer>
			        <!-- copyright-section end -->
	    		</div> <!-- .st-content -->
		    </div> <!-- .st-pusher -->
			
			<!-- OFF CANVAS MENU -->
	    		<div class="offcanvas-menu offcanvas-effect">
	    		<div class="offcanvas-wrap">
			        <div class="off-canvas-header">
			        	<button type="button" class="close" aria-hidden="true" data-toggle="offcanvas" id="off-canvas-close-btn">&times;</button>
			        </div>
			        <ul id ="offcanvasMenu" class="list-unstyled visible-xs visible-sm">
			            <li><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
			            <li>
			            	<a href="#">Pages</a>
			            	<ul>
								<li><a href="about.php">About</a></li>
							    <li class="active"><a href="our-people.php">Our people</a></li> 
							</ul>

			            </li>
			            <li>
			            	<a href="#">Tour</a>
			            	<ul>
								<li><a href="wj.php">Jakarta</a></li>
								<li><a href="wb.php">Bogor</a></li>
							</ul>

			            </li>
			            <li>
			             <a href="#">Typical Food</a>
			            	<ul>
							<li><a href="mkj.php"> Jakarta</a></li>
                            <li><a href="mkb.php"> Bogor</a></li>
							</ul>
							</li>
			            <li><a href="tourp.php">Tour Package</a></li>

			            <li><a href="rental.php">Rental</a></li>
			            
			            <li><a href="contact.php">Contact</a></li>
                        <br>
                        <button class="btn btn-primary"  onclick="konfirmasi()">Logout</button>
                                                      <p id="pesan"></p>
                                                        
                                                        <script>
                                                             function konfirmasi(){
                                                                 var tanya = confirm("Are you sure, Logout?");
                                                         
                                                                 if(tanya === true) {
                                                                     alert("Sucsess Logout, Thank you");window.location =("../index.php") ;
                                                                 }else{
                                                                    pesan = "";
                                                                 }
                                                         
                                                                 document.getElementById("pesan").innerHTML = pesan;
                                                              }
                                                        </script>

                      
			        </ul>
			        <div class="offcanvas-widgets hidden-sm hidden-xs">
				        <div id="twitterWidget">
							<h2>Lisa Tour& Travel</h2>				    	
							<div class="twitter-widget"></div>
						</div>
						<div class="newsletter-widget">
							<h2>Stay in Touch</h2>
							<p>Enter your email address to receive news &amp; offers from us</p>

							<form class="newsletter-form">
								<div class="form-group">
									<label class="sr-only" for="InputEmail1">Email address</label>
									<input type="email" class="form-control" id="InputEmail2" placeholder="Your email address">
									<button type="submit" class="btn">Send &nbsp;<i class="fa fa-angle-right"></i></button>
								</div>
							</form>		
							       				
						</div><!-- newsletter-widget -->
					</div>

				</div>
	      	</div><!-- .offcanvas-menu -->
		</div><!-- /st-container -->


	
	    <!-- jQuery -->
	    <script src="js/jquery.js"></script>
	    <!-- Bootstrap Core JavaScript -->
	    <script src="js/bootstrap.min.js"></script>
	    <!-- owl.carousel -->
	    <script src="owl.carousel/owl.carousel.min.js"></script>
	    <!-- Magnific-popup -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Offcanvas Menu -->
		<script src="js/hippo-offcanvas.js"></script>
		<!-- inview -->
		<script src="js/jquery.inview.min.js"></script>
		<!-- stellar -->
		<script src="js/jquery.stellar.js"></script>
		<!-- countTo -->
		<script src="js/jquery.countTo.js"></script>
		<!-- classie -->
		<script src="js/classie.js"></script>
		<!-- selectFx -->
		<script src="js/selectFx.js"></script>
		<!-- sticky kit -->
		<script src="js/jquery.sticky-kit.min.js"></script>
	    <!-- GOGLE MAP -->
	    <script src="https://maps.googleapis.com/maps/api/js"></script>
	    <!--TWITTER FETCHER-->
	    <script src="js/twitterFetcher_min.js"></script>
	    <!-- Custom Script -->
	    <script src="js/scripts.js"></script>
	</body>
</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>

</html>

