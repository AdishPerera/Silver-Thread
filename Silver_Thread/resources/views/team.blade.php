@extends ('layout')
    <head>

        <title>Team</title>

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
                                    <li><a class="active" href="team">Team</a></li>
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
                <h2 style="color:rgb(223, 222, 222);">Our Team</h2>
            </div>
        </div>

        <div class="team_agile">
            <div class="container">
                <div class="agileits-heading">
                    <h3>Meet Our Team</h3>
                </div>
                <div class="team-grids">
                    <div class="col-md-3 team_bottom-grid">
                        <div class="btm-right">
                            <img src="images/chula.jpeg" alt=" ">
                                <div class="captn">
                                    <h4>Chula Delwala</br><small>Captain (Retd.), Special Forces, SL Army</small></h4></br>
                                    <div style="text-align: center;">
                                        <p>Chula is an Army Special Forces retiree who then excelled in Quantity Surveying in a Dubai based company for over 20 years.</p>
                                        <p>Nicknamed as the ‘Computer Man’ in the Army for his immaculate memory, he is good at remembering things. When you are over 
                                            responsible this is a side-effect.  But fear not, we use his brain power to good use at STEP.</p>	
                                        <p>Well-travelled and experienced things one on one, Chula knows how things are done around the world and help him to come up with 
                                            brilliant ideas for our events.</p>
                                        </div>   
                                </div>     
                        </div>
                    </div>
                    <div class="col-md-3 team_bottom-grid our_marg">
                        <div class="btm-right">
                            <img src="images/minoli.jpeg" alt=" ">
                                <div class="captn">
                                    <h4>Minoli Fernando</h4></br>
                                    <div style="text-align: center;">
                                        <p>Minoli is petit but fierce.  Her talent is attention to detail and eye for beauty.  Classy should be her middle name!  
                                            Minoli will try something over if necessary until she is happy that it is perfect.</p>
                                        <p>Her experience in working for an international shipping company for over 20 years taught her some skills, i.e.: 10:30 
                                            means 10:30 not 10:31 and trust us she will make sure it happens by the day/time it is promised.</p>    
                                    </div>	
                                </div>
                        </div>
                    </div>
                    <div class="col-md-3 team_bottom-grid">
                        <div class="btm-right">
                            <img src="images/indu.jpeg" alt=" ">
                                <div class="captn">
                                    <h4>Indu Delwala</h4></br>
                                    <div style="text-align: center;">
                                        <p>Indu is the PA (Perfection Agent in this case).  Being an executive secretary/PA to top management in several high profile 
                                            companies, over the years she has been trained to be proficient, time conscious, and precise.  He PR skills are commendable 
                                            too.</p>
                                        <p>Working for a 5 star hotel group she likes things done up to standard and with class.  Well-travelled and experienced things 
                                            first hand she crave for excellence and you will receive nothing less from her work.</p>    
                                    </div>	
                                </div>
                        </div>
                    </div>
                    <div class="col-md-3 team_bottom-grid">
                        <div class="btm-right">
                            <img src="images/shiyamalie.jpeg" alt=" ">
                                <div class="captn">
                                    <h4>Shyamalie Senevirathne</h4></br>
                                    <div style="text-align: center;">
                                        <p>Shyamalie is the observant one. Working for a reputed finance company for over 30 years and 15 of them as a branch manager, 
                                            she knows how to identify and assign responsibilities.  </p>
                                        <p>All our events happen under her scrutiny and that assures nothing is amiss in our events.  Her ability to visualize the final 
                                            product is incredibly helpful in event planning. </p>    
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

    </body>
</html>