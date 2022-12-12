@extends ('layout')
    <head>

        <title>Contact</title>

    </head>
    
    <body>
        
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
                                    <li><a href="/">Home</a></li>
                                    <li><a href="gallery">Gallery</a></li>								
                                    <li><a href="services">Services</a></li>
                                    <li><a href="team">Team</a></li>
                                    <li><a class="active" href="contact">Contact</a></li>
                                    <li>  @if (Route::has('login'))
                
                                        @auth
                                            <form action="{{ route('logout') }}" method="post">
                                                @csrf
                                                <button type="submit" class="btn">Logout</button>
                                            </form>
                                        @else
                                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                        @endif
                                        @endauth
                
                                        @endif
                                    </li>
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
                            <form action="/contact" method="POST">
                                @csrf
                                <input type="text" name="Name" placeholder="Name" required="" id="name">
                                <input type="email" name="Email" placeholder="Email" required="" id="email">
                                <input type="text" name="Telephone" placeholder="Telephone" required="" id="telephone">
                                <input type="text" name="Subject" placeholder="Subject" required="" id="subject">
                                <textarea name="Message" placeholder="Message" required="" id="message"></textarea>
                                <button type="submit" id="submit" class="btn1">Send</button>
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

    </body>
</html>