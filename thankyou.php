<?php session_start(); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
 		<title>Tracuse | Thank You</title>

		<meta charset="utf-8" />
		<meta name="description" content="Thank you page and survey." />
		<meta name="robots" content="noindex,nofollow" />
		
		<link href='http://fonts.googleapis.com/css?family=Quattrocento+Sans:700,700italic' rel='stylesheet' type='text/css'>
		<!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" type="text/css" /> -->
		<link rel="stylesheet" href="main.css" type="text/css" />
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script type='text/javascript' src='srvgiz.js'></script>

		<!-- AddThis Scripting -->
		<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-53ed1b9b5a623d52"></script>

		<!-- Google Web Analytics -->
		<script>
			if (window.location.host != 'localhost') {
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			
			  ga('create', 'UA-54037140-1', 'auto');
			  ga('send', 'pageview');
			};
		</script>
				
    </head>
    
    <body>
    	
	    <!-- Form Submission -->
	    <?php 
	    	include 'main.php';
	    	postForm();
	    ?> 
		
		<!-- Header Section - Left: logo/name	Right: tagline -->
		<header>
			<div class="header-left">
				<!-- Logo -->
				<a href="http://www.tracuse.com" title="Tracuse">
					<img class="product-logo" src="images/Tracuse-Logo.png" alt="Tracuse Logo">
				</a>
			</div>
			<div class="header-right">
				<!-- Tagline -->
				<h3 class="product-tag">Connect Knowing with Doing</h3>
			</div>
		</header>
        
        <!-- Section One - image, introduction, call to action -->
        <section class="section-one">
        	
			<!-- Background Overlay -->
			<div class="bkgrd bkgrd-over"></div>
			<!-- Confirmation Message and Call to Survey -->
			<div class="conf-message" align="left">
				<h1 class="main-text text-conf">THANK YOU!!<br>
					We will be contacting you soon with more information about Tracuse.</h1>
				<br>
				<!-- <h2 class="main-text text-cts">Please continue with this short survey (10-15 minutes)<br>
					so we can learn about what you need to stay organized and focused.</h2> -->
			</div>
			<!-- Survey Container -->
			<!-- <div class="cts-container"> -->
				<!-- Survey - Survey Gizmo -->
				<!-- <iframe class="cts-frame" src="srvgiz.php" name="Tracuse Survey"></iframe> -->
			<!-- </div> -->
        </section>
        
        <!-- Footer - Sharing and Contact -->
        <footer>
        	<!-- Empty Left-Footer Container -->
        	<div class="footer-container left-footer">
        	</div>
        	
        	<!-- Sharing Toolbox Container -->
        	<div class="footer-container share-container">
        		<span class="share-lead">Share</span>
        		<!-- Go to www.addthis.com/dashboard to customize your tools -->
				<div class="share-toolbox addthis_sharing_toolbox" data-url="www.tracuse.com"></div>
        	</div>
        	
        	<div class="footer-container contact-container">
        		<p>Happening in Portland, OR</p>
        		<a class="contact-link" href="mailto: feedback@tracuse.com">Click Here to Contact Us</a>
        	</div>
        	
        </footer>
        
    </body>
 
</html>