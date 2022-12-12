@extends ('layout')
    <head>

        <title>Social Events</title>

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
                                    <li><a class="active" href="services">Services</a></li>
                                    <li><a href="team">Team</a></li>
                                    <li><a href="contact">Contact</a></li>
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
                <h2 style="color: rgb(223, 222, 222);">Social Events</h2>
            </div>
        </div>
        <section class="section white">
            <div class="container-about-us">
                <div style="text-align: center;">
                    <br>
                    <br>
                    <p>Aren’t we all just love a good social event, when the food are plenty and drinks are flowing, everyone is 
                        chatting, laughing and having a great time?  The only worry in deciding<br> to throw a party is that it might 
                        be too much to handle.  With all the planning - the décor, the food, the organizing, will you have any quality 
                        time with your guests? </p>

                    <p>Our professional party planning team will take that hassle away from you.  We will discover your needs and 
                        design a unique event to bring your vision to life so instead of dreading<br> what might be, you will get excited 
                        about what will be.  </p>
                    
                    <p>The food, decorations, lighting and entertainments will come in par to create the social event of the season, 
                        allowing you to enjoy the party that will be the talk of the town for weeks afterwards!</p></br>
                        <div class="imgs">
                            <img src="images/soci.jpg"  alt="images">
                            </div>
                    <ul><b>We specialize in:</b><br><br>
                        <li>Birthday party </li>
                        <li>Seasonal parties</li>
                        <li>Batch party</li>
                        <li>Graduation party</li>
                        <li>Musical evenings </li><br><br>
                    </ul>
                </div>
            </div>
        </section>


    </body>
</html>