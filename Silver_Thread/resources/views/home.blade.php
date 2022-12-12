@extends ('layout')
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Home</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
        <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
      
    </head>
    <body>
   
        <div class="banner">
            <div class="header" >
                <div class="container">
                    <div class="header-left">
                        <h1>
                            <img src="images/logo.png" alt="silverthread" style="float:left";>
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
                                    <li><a class="active" href="/">Home</a></li>
                                    <li><a href="gallery">Gallery</a></li>								
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

            <div class="banner-slider">
                <div class="container">
                    <div class="slider">
                        <div class="agileits-banner-info">
                            <h3>Spectacular is our Thing!</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
        <section class="section white">
            <div class="container our-services">
                <div class="text-center">
                    <hr>
                    <p>Planning your dream wedding or throwing a spectacular party has never been easier!</p></br>
                    <p>We, at Silver Thread Event Planning, approach every project with meticulous attention to detail and precision.  
                        Regardless of size and scope, we treat your event with a comprehensive plan, strategic goals, and defined milestones 
                        to ensure that your event is one of a kind and on budget.  At STEP you come first.  We learn about you / your organization, 
                        we focus on your vision and we plan events to support your goals.</p>
                    <p>Our team, who are inventive and creative understands the importance of a properly executed event plan and brings a fresh 
                        unique approach to help you create your vision comes to life!</p></br><hr>   
                </div>        
            </div>
            <div class="welcome">
                <div class="container">
                    <div class="welcome-grids">
                        <div class="col-md-6 welcome-left">
                            <div class="welcome-left-img">
                                
                            </div>
                        </div>
                        <div class="col-md-6 welcome-right">
                            <div class="welcome-right-info">
                                <h2>Some Words <span>About Us</span></h2>
                                <p>Silver Thread Event Planners are an inventive team that is passionate about creating unique, memorable and organize experiences 
                                    for a variety of clients.  Through our services we help our clients express their thoughts and dreams in the form of a most 
                                    spectacular and classy event. </span></p>
                            </div>
                            <div class="agileits-border">
                                <div class="agileinfo-purple"> </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
        </section> 
        <section class="section-white">
            <div class="container our-services">
                <div class="text-center" style="font-family: 'Quicksand', sans-serif;">
                    
                    <hr><h3><b>THE PROCESS</b></h3><hr></br>
                    <h4>STRATEGY</h4>
                    <p > most successful events begin with a good, solid strategy. Understanding the purpose of the event and your overall ambition 
                        will help us work together to create specific event goals and define measures of success. This bit of the process is extremely 
                        important because it is where we finalize the tools that will determine design decisions.</p>

                    <p>Together, you will work with your STEP team to discuss timeline, budget, current event trends, and event design goals. This phase 
                        is often rushed or completely skipped by many event companies, but we consider this a critical step to ensure your event reflects 
                        your vision/dream.  </p><hr></br>

                    <h4>DESIGN</h4>
                    <p>The design phase of our process will translate the event strategy into an experience that aligns with your event vision. Your assigned 
                        STEP team will present you with concepts to further your message while creatively engaging your guests.</p>

                    <p>Should we have an appearance from BnS? A decorated elephant? A traditional dance? Or importantly does it make sense to include these things? 
                        We assure that when you see your design proposal, you will see your vision aligned with our inventive ideas blended into one of a kind event 
                        whether it’s a conference for doctors or a gala for teenagers.</p>
                        
                    <p>We at Silver Thread Event Planning are big in risk management. Every event we produce will include a plan to ensure the safety and security 
                        of your guests as well as contingency plans for a variety of circumstances.  </p><hr></br>
                        
                    <h4>EXECUTION</h4>
                    <p>It all comes to this.  Immaculate onsite execution of the design.  Your STEP team will be in the venue in advance to ensure smooth setup in 
                        preparation for the start of the event enabling you to rest easy while we handle the details (you know you will be relieved to know that 
                        someone else is taking all the stress for you). You will be given an itinerary so you are aware what is happening when.</p>
                        
                    <p>Prior to the big-day we conduct meetings with the venue and its main points of contact to ensure not just the contractual compliance and service 
                        expectation but also the safety and security of the guests and things.  Any last minute changes or updates are also communicated during these 
                        discussions.  A final run-through will be done on Menu finalizing and food tastings, setup for presentations confirmed, décor and all things 
                        for guest arrivals discussed and put in place for the welcoming of the guests. </p>
                        
                    <p>All service providers and vendors contacted and contracts signed affirming we mean business and expect the highest service quality.</p>  
                    
                    <p>We constantly communicate with you throughout the event and will continue to maintain the trust you have instilled in us and execute your event 
                        beyond your expectations. </p><hr></br>

                    <h4>ASSESSMENT</h4>
                    <p>Last phase of the event after the big day (or days), the evaluation of the event execution. It will be tempting and easier for us to move on 
                        to the next project, yet at STEP we think that post event evaluation is an important part of the process.  </p>
                        
                    <p>Suring this session, the STEP team will discuss with you some important factors such as the response/change from attendees, budget, and lessons 
                        learned. Together, we will not discuss these points but also speak to the venue, event footprint, what went well and did not, and maybe 
                        suggestions for future events.  And last but not least we will celebrate the event success and thank you for choosing us as your trusted event 
                        partner.</p></br>    

                </div>
            </div>
        </section>



    </body>
</html>