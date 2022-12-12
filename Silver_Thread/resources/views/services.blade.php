@extends ('layout')
    <head>

        <title>Services</title>

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
                <h2 style="color: rgb(223, 222, 222);">Our Services</h2>
            </div>
        </div></br><hr>
        
        <section class="service-table">
            <table border="0" align="center" width="80%">
                <tr align="center" style="font-style: bold;">
                    <td><b>WEDDINGS</b></td>
                    <td><b>CORPORATE EVENTS</b></td>
                    <td><b>SOCIAL EVENTS</b></td>
                </tr>
                <tr align="center" >
                    <td><img src="images/Wedding.png" width="250px" height="250px"></td>
                    <td><img src="images/Corporate.png" width="250px" height="250px"></td>
                    <td><img src="images/Social.jpg" width="250px" height="250px"></td>
                </tr>
                <tr align="center">
                    <td><a href="weddings">Learn More</a></td>
                    <td><a href="corporate">Learn More</a></td>
                    <td><a href="social">Learn More</a></td>
                </tr>
            </table></br><hr>
        </section>


    </body>
</html>