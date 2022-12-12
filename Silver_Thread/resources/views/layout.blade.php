<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
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

@extends ('partial.footer')

<script src="js/jzBox.js"></script>
<script src="js/SmoothScroll.min.js"></script>
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {
     
                    $().UItoTop({ easingType: 'easeOutQuart' });
                                        
                    });
            </script>