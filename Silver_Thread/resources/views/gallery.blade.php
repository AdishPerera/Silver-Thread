@extends ('layout')
    <head>

        <title>Gallery</title>
       
        </script> 
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
                                    <li><a class="active" href="gallery">Gallery</a></li>								
                                    <li><a href="services">Services</a></li>
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
                <h2 style="color: rgb(223, 222, 222);">Our Gallery</h2>
            </div>
        </div>
        <div class="gallery">
            <div class="container"> 
                <div id="jzBox" class="jzBox">
                    <div id="jzBoxNextBig"></div>
                    <div id="jzBoxPrevBig"></div>
                    <img src="#" id="jzBoxTargetImg" alt=""/>
                    <div id="jzBoxBottom">
                        <div id="jzBoxTitle"></div>
                        <div id="jzBoxMoreItems">
                            <div id="jzBoxCounter"></div>
                            <i class="arrow-left" id="jzBoxPrev"></i> 
                            <i class="arrow-right" id="jzBoxNext"></i> 
                        </div>
                        <i class="close" id="jzBoxClose"></i>
                    </div>
                </div>
                <div class="gallery-grids-row">
                    <div class="col-md-4 gallery-grid">
                        <div class="wpf-demo-4">  
                            <a href="images/5.jpg" class="jzBoxLink item-hover" title="Events Venue">  
                                <img src="images/5.jpg" alt=" " class="img-responsive" />
                                <div class="view-caption">
                                    <p>Full View</p>
                                </div> 
                            </a>    		
                        </div>
                    </div>
                    <div class="col-md-4 gallery-grid">
                        <div class="wpf-demo-4">  
                            <a href="images/6.jpg" class="jzBoxLink item-hover" title="Events Venue">  
                                <img src="images/6.jpg" alt=" " class="img-responsive" />
                                <div class="view-caption">
                                    <p>Full View</p>
                                </div> 
                            </a>    			
                        </div>
                    </div>
                    <div class="col-md-4 gallery-grid">
                        <div class="wpf-demo-4">  
                            <a href="images/13.jpg" class="jzBoxLink item-hover" title="Events Venue">  
                                <img src="images/13.jpg" alt=" " class="img-responsive" />
                                <div class="view-caption">
                                    <p>Full View</p>
                                </div> 
                            </a>    			
                        </div>
                    </div>
                    <div class="col-md-4 gallery-grid">
                        <div class="wpf-demo-4">  
                            <a href="images/32.jpg" class="jzBoxLink item-hover" title="Events Venue">  
                                <img src="images/32.jpg" alt=" " class="img-responsive" />
                                <div class="view-caption">
                                    <p>Full View</p>
                                </div> 
                            </a>    			
                        </div>
                    </div>
                    <div class="col-md-4 gallery-grid">
                        <div class="wpf-demo-4">  
                            <a href="images/21.jpg" class="jzBoxLink item-hover" title="Events Venue">  
                                <img src="images/21.jpg" alt=" " class="img-responsive" />
                                <div class="view-caption">
                                    <p>Full View</p>
                                </div> 
                            </a>    		
                        </div>
                    </div>
                    <div class="col-md-4 gallery-grid">
                        <div class="wpf-demo-4">  
                            <a href="images/25.jpg" class="jzBoxLink item-hover" title="Events Venue">  
                                <img src="images/25.jpg" alt=" " class="img-responsive" />
                                <div class="view-caption">
                                    <p>Full View</p>
                                </div> 
                            </a>    		
                        </div>
                    </div>
                    <div class="col-md-4 gallery-grid">
                        <div class="wpf-demo-4">  
                            <a href="images/12.jpg" class="jzBoxLink item-hover" title="Events Venue">  
                                <img src="images/12.jpg" alt=" " class="img-responsive" />
                                <div class="view-caption">
                                    <p>Full View</p>
                                </div> 
                            </a>    			
                        </div>
                    </div>
                    <div class="col-md-4 gallery-grid">
                        <div class="wpf-demo-4">  
                            <a href="images/24.jpg" class="jzBoxLink item-hover" title="Events Venue">  
                                <img src="images/24.jpg" alt=" " class="img-responsive" />
                                <div class="view-caption">
                                    <p>Full View</p>
                                </div> 
                            </a>    		
                        </div>
                    </div>  
                    <div class="col-md-4 gallery-grid">
                        <div class="wpf-demo-4">  
                            <a href="images/23.jpg" class="jzBoxLink item-hover" title="Events Venue">  
                                <img src="images/23.jpg" alt=" " class="img-responsive" />
                                <div class="view-caption">
                                    <p>Full View</p>
                                </div> 
                            </a>    		
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>

            </div>
        </div>

    </body>
</html>