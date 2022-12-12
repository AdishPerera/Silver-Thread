@extends ('layout')
    <head>

        <title>Weddings</title>

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
                                    <li><a href="Gallery">Gallery</a></li>								
                                    <li><a class="active" href="Services">Services</a></li>
                                    <li><a href="Team">Team</a></li>
                                    <li><a href="Contact">Contact</a></li>
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
                <h2 style="color: rgb(223, 222, 222);">Weddings</h2>
            </div>
        </div>
        <section class="section white">
            <div class="container-about-us">
                <div class="text-center">
                    <br>
                    <br>
                    
                    <p>It’s your wedding!  Your dream of a lifetime.  Our passion is to help you transform your 
                        story into an extraordinary celebration that is gorgeous,<br> fun and well-planned that you, 
                        your family and guests will remember a lifetime.</p>

                    <p>That is a lot to expect of one day but for us at, Silver Thread, you and your dream always 
                        come first.   Our team who are innovative,<br> creative  and passionate about weddings walk hand-in-hand 
                        with you through the entire wedding planning process up to the execution;   from sourcing<br> the perfect 
                        setting for your luxury and memorable wedding weather it’s traditional or modern, from small and 
                        intimate or it’s the mega event of the year,<br> and from colour schemes to floor plans, in bringing your 
                        vision to life.  </p>

                    <p>Designing is the imagination, creativity and inspiration that makes your wedding unique and representative 
                        of your style. <br> We take pride in elevating your expectation into one of a kind experience,  ‘its own piece
                         of art’, to create lasting memories.  </p>
                         
                    <p>You will have your lead planner and a team of wedding planners up to date with the details of your special 
                        day, readily available to you on call. We with our partners and <br>vendors who are reputed,  reliable and are 
                        pioneers in the industry are ready to immaculately execute the most artful and customized experience for you.</p></br>
                        <div class="imgs">
                        <img src="images/ss8.jpg"  alt="images">
                        <br><br>
                        </div>
                        
                    <ul><b>We help you with:</b><br><br>
                        <li>Arrival Gifts</li>
                        <li>Bridal Salon Selection</li>
                        <li>Bridesmaid Dress Selection</li>
                        <li>Budget Planning</li>
                        <li>Catering Consultation / Wedding Cake</li>
                        <li>Thread Selection & Management</li>
                        <li>Décor Selection / Floral</li>
                        <li>Engagement Parties</li>
                        <li>Lighting & Sound</li>
                        <li>Entertainment</li>
                        <li>Hotel Room Blocks</li>
                        <li>Invitations</li>
                        <li>Photography / Videography</li>
                        <li>Rentals / Tenting</li>
                        <li>Stationery </li>
                    </ul>    
                </div></br>
            </div>
        </section>


    </body>
</html>