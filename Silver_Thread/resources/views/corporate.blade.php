@extends ('layout')
    <head>

        <title>Corporate Events</title>

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
                <h2 style="color: rgb(223, 222, 222);">Corporate Events</h2>
            </div>
        </div>
        <section class="section white">
            <div class="container-about-us">
                <div class="text-center">
                    <br><br>
                    <P>We at Silver Thread Event Planning specialize in creating experiences from small intimate gatherings to large
                        scale, corporate retreats, and conferences <br>including events of all types, sizes, and budgets that generate 
                        buzz, engagement and results.  Our professional event planners provide <br>creative design, inventive solutions,
                        flawless execution and personalized service.</P>

                    <P>We at Silver Thread Event Planning specialize in creating experiences from small intimate gatherings to large 
                        scale, corporate retreats, and conferences <br>including events of all types, sizes, and budgets that generate 
                        buzz, engagement and results.  Our professional event planners provide creative design,<br> inventive solutions, 
                        flawless execution and personalized service.</P>
                        
                    <P>From themed events to complete customized seasonal corporate parties, our team work with you to bring your event 
                        to life.  We organize and plan everything<br> from day one of planning to the day of execution, allowing you to 
                        celebrate with your guests while we keep you on track and on budget.</P></br>
                        <div class="imgs">
                            <img src="images/cop.jpg"  alt="images">
                            </div>

                    <ul><b>We plan them all:</b><br><br>
                        <li>Business meetings / Conferences </li>
                        <li>Corporate get-togethers</li>
                        <li>Employee / Holiday parties</li>
                        <li>Corporate retreats </li>
                        <li>Product launches / Branding Silver</li>
                        <li>Motivational experiences </li>
                        <li>Social networking events</li>
                        <li>Fundraisers and Gala</li>
                    </ul></br>
                </div>
            </div>
        </section>


    </body>
</html>