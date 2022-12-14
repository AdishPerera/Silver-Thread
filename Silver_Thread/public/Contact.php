<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Contact</title>
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
        <link href="css/font-awesome.css" rel="stylesheet"> 
        <link href='//fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
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
    </head>
    
    <body>
        <h6 ><a href="Sign In.html" style="color: rgb(255, 255, 255);">Sign In</a></h6>
        <div class="banner">
            <div class="header">
                <div class="container">
                    <div class="header-left">
                        <h1>
							<img src="images/logo.png" alt="CSGO Howl" style="float:left";>
                        </h1>
                    </div>    
                    <div class="top-nav">
                        <nav class="navbar navbar-default">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                            </div>
                
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li><a href="Home.html">Home</a></li>
                                    <li><a href="Gallery.html">Gallery</a></li>								
                                    <li><a href="Services.html">Services</a></li>
                                    <li><a href="Team.html">Team</a></li>
                                    <li><a class="active" href="Contact.html">Contact</a></li>
                                </ul>	
                                <div class="clearfix"> </div>
                            </div>	
                        </nav>		
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="agileinfo-top-heading">
                <h2 style="color: rgb(223, 222, 222);">Get In Touch</h2>
            </div>
        </div>
        <div class="clearfix"> </div>
        <div class="contact">
            <div class="container">
                <div class="agile-contact-form">
                    <div class="col-md-6 contact-form-left">
                        <div class="contact-form-top">
                            <h3>Get in touch</h3>
                            <p>Our team at STEP is ready to assisst you in any way. Please contact us if you require any details or if you wish to request an event</p>
                        </div>
                        <div class="agileits-contact-address">
                            <ul>
                                <li><i class="fa fa-phone" aria-hidden="true"></i> <span>+94 76 321 2233</span></li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i> <span>+94 77 880 8223</span></li>
                                <li><i class="fa fa-phone fa-envelope" aria-hidden="true"></i> <span>stepsl2021@gmail.com</a></span></li>
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i> <span>61/B1, Hanthana Housing Scheme, Kandy</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 contact-form-right">
                        <div class="contact-form-top">
                            <h3>Send us an email</h3>
                        </div>
                        <div class="agileinfo-contact-form-grid">
                            <form action="contact_process.php" method="post">
                                <input type="text" name="Name" placeholder="Name" required="">
                                <input type="email" name="Email" placeholder="Email" required="">
                                <input type="text" name="Telephone" placeholder="Telephone" required="">
                                <input type="text" name="Subject" placeholder="Subject" required="">
                                <textarea name="Message" placeholder="Message" required=""></textarea>
                                <input type="submit" name="submit" value="Submit">
                            </form>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                
                <div class="agile-map">
                    <h3>Find us here</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.6904751663324!2d80.6318915147227!3d7.276017394748227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae366201f185d6b%3A0x3af7b4ba3324df55!2sHantana%20Housing%20Scheme%20Rd!5e0!3m2!1sen!2slk!4v1606914564355!5m2!1sen!2slk" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <!--//footer-->
        <footer class="footer">
            <div class="container">
                <div class="row module-wrapper">

                    <div class="col-md-6 col-sm-6">
                        <div class="widget">
                            <div class="widget-title">
                                <h4>Contact Details <small>Global</small></h4>
                            </div>
                            <ul class="site-links">
                                <li><i class="fa fa-link"></i> www.silverthread.com</li>
                                <li><i class="fa fa-envelope"></i> stepsl2021@gmail.com</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="widget">
                            <div class="widget-title">
                                <h4>Corporate Office</h4>
                            </div>
                            <ul class="site-links">
                                <li><i class="fa fa-home"></i> 61/B1, Hanthana Housing Scheme, Kandy, Sri Lanka.</li>
                                <li><i class="fa fa-phone"></i> +94 76 321 2233</li>
                                <li><i class="fa fa-mobile"></i> +94 77 880 8223 &nbsp; <img src="images/whatsapp-viber.png" height="25" ></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-12 col-sm-12">
                        <div class="widget">
                            <div class="widget-title">
                               <h4><small>Follow Us On</small> <a href="#" target="_blank"><img src="images/fb.png" height="30" ></a><a href="" target="_blank"><img src="images/instagram.png" ></a></h4>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <section class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <p>?? 2020 Silver Thread (PVT) Limited. Site by NIBM DSE 19.2 Batch</p>
                        </div>
                        <div class="col-md-6 text-right">
                            <ul class="list-inline">
                                <li><a href="Contact.html">Contact Us</a></li>
                                <li><a href="Team.html">About Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>       
        </footer>
        <!--//footer-->
        <script src="js/SmoothScroll.min.js"></script>
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {
     
                    $().UItoTop({ easingType: 'easeOutQuart' });
                                        
                    });
            </script>
    </body>
</html>