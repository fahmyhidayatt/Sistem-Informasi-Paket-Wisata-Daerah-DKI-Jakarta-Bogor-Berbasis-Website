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
        <!-- Blog part -->
        <link href="css/YTPlayer.css" rel="stylesheet" media="screen">
        <link href="css/blog.css" rel="stylesheet" media="screen">

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

                                    

                                    <span class="search-button pull-right"><a href="#search"><i class="fa fa-search"></i></a></span>

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



                    <section class="page-title-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="page-header-wrap">
                                        <div class="page-header">
                                            <h1>Rental </h1>
                                        </div>
                                       <ol class="breadcrumb">
                                          
                                          <li class="active">Car / Motorcycle</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- blog-section -->
                    <section class="blog-section section-content">
                        <!-- container -->
                        <div class="container">
                            <!-- row -->
                            <div class="row">
                                <!-- posts-container -->
                                <div class="posts-container">
                                    <div class="col-md-8 col-sm-8">
                                        <article class="blog-post-wrapper">
                                            <div class="figure sticky-post">    


                                                   
                                             <article class="blog-post-wrapper">
                                            <div class="figure">    
                                                <div id="blog-post-carousel" class="carousel slide blog-carousel" data-ride="carousel">

                                                    <!-- Wrapper for slides -->
                                                    <div class="carousel-inner">
                                                        <div class="item active">
                                                            <div class="post-thumbnail">
                                                                <img class="img-responsive" src="img/mobil/apv.jpg" alt=""/>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="post-thumbnail">
                                                                <img class="img-responsive" src="img/mobil/avanza.jpg" alt=""/>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>

                                                    <!-- Controls -->
                                                    <a class="left carousel-control" href="#blog-post-carousel" data-slide="prev">
                                                        <i class="fa fa-angle-left"></i>
                                                    </a>

                                                    <a class="right carousel-control" href="#blog-post-carousel" data-slide="next">
                                                        <i class="fa fa-angle-right"></i>
                                                    </a>
                                                </div>
                                            </div><!-- /.figure -->

                                            <header class="entry-header clearfix">


                                                <h2> Car</h2>

                                            <div class="entry-content">
                                                <p> 1.  Suzuki Apv </p>
                                                <p> Rp.400,000/ 12 Hours, off lock </p>
                                                <p> 2. Toyota Avanza </p>
                                                <p> Rp.350,000/ 12 Hours, off lock </p> 
                                                <br>
                                                <p>Requirements: We will hold an ID or passport for the period of the vehicle loan. </p>


                                            </div><!-- .entry-content -->
                                            <footer class="entry-footer"> 
                                               
                                                <a href="bookml.php" class="btn btn-primary btn-sm readmore">Book Car</a>

                                            </footer>
                                        </article>


                                             <article class="blog-post-wrapper">
                                            <div class="figure">    
                                                <div id="blog-post-carousel" class="carousel slide blog-carousel" data-ride="carousel">

                                                    <!-- Wrapper for slides -->
                                                    <div class="carousel-inner">
                                                        <div class="item active">
                                                            <div class="post-thumbnail">
                                                                <img class="img-responsive" src="img/motor/pcx.jpg" alt=""/>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="post-thumbnail">
                                                                <img class="img-responsive" src="img/motor/nmx.jpg" alt=""/>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="post-thumbnail">
                                                                <img class="img-responsive" src="img/motor/scoopy.jpg" alt=""/>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Controls -->
                                                    <a class="left carousel-control" href="#blog-post-carousel" data-slide="prev">
                                                        <i class="fa fa-angle-left"></i>
                                                    </a>

                                                    <a class="right carousel-control" href="#blog-post-carousel" data-slide="next">
                                                        <i class="fa fa-angle-right"></i>
                                                    </a>
                                                </div>
                                            </div><!-- /.figure -->

                                            <header class="entry-header clearfix">


                                                <h2> Motorcycle </h2>

                                            <div class="entry-content">
                                                <p> 1. Honda Pcx  </p>
                                                <p> Rp.150,000,/ 12 Hours, off lock </p>
                                                <p> 2. Yamaha Nmx  </p>
                                                <p> Rp.150,000,/ 12 Hours, off lock </p>
                                                <p> 3. Honda Scoopy  </p>
                                                <p> Rp.100,000,/ 12 Hours, off lock </p>
                                                <br>
                                                <p>Requirements: We will hold an ID or passport for the period of the vehicle loan. </p>


                                            </div><!-- .entry-content -->
                                            <footer class="entry-footer"> 
                                               
                                                <a href="bookmr.php" class="btn btn-primary btn-sm readmore">Book Motorcycle</a>

                                            </footer>
                                        </article>

                                           <aside class="widget widget_twitter_feed">
                                                <h2 class="widget-title"><i class="#"></i>Lisa Tour& Travel</h2>
                                                <div id="sidebarTwitterWidget">
                                            
                                                    <div class="twitter-widget"></div>
                                                </div>
                                            </aside>

                                       
                                     </div><!-- /.col -->
                                </div> <!-- /posts-container -->
                            </div><!-- /row -->
                        </div><!-- /container -->
                    </section><!-- /blog-section -->

                     <!-- footer-widget-section start -->
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
                                

                            <div class="copyright-info">
                                <span>Copyright © 2020 PT. Lisa Tour& Travel. Designed by Fahmy </span>
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
                                <li class="active"><a href="our-people.html">Our people</a></li> 
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
                            <h2>Tweeter feed</h2>                       
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
        <!-- Flicker Photo -->
        <script src="js/flickerPhoto.min.js"></script>
        <script src="js/flickr-stream.js"></script>
        <!-- Blog part -->
        <script src="js/jquery.mb.YTPlayer.js"></script>
    </body>
</article>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
</div>

</html>

