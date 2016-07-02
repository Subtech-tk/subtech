<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
  <meta charset="utf-8">
	<title>Subtech</title>
	<meta name="description" content="">
	<meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="css/default.css">
 	 <link rel="stylesheet" href="css/layout.css">
   <link rel="stylesheet" href="css/media-queries.css">

   <!-- Script
   ================================================== -->
	<script src="js/modernizr.js"></script>

   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.png" >

</head>

<body>

	<div id="preloader">
      <div id="status">
         <img src="images/preloader.gif" height="64" width="64" alt="">
      </div>
   </div>

   <!-- Intro Section
   ================================================== -->
   <section id="intro">

   	<header class="row">

			<div id="logo" >
				<a href="#" >
          <img src="images/logo.png" alt="Zoon">
        </a>
			</div>

   	</header> <!-- Header End -->

   	<div  id="main" class="row">

	   	<div class="twelve columns">

	   		<h1>We are currently working on something awesome. Stay tuned!</h1>

	   		<p></p>

	   		<h5>Time Left Until Launching</h5>
        <?php

            $startTime = date_create('2016-07-10 18:00:00');
            $dstart = date_format($startTime,"Y-m-d H:i:s");  // converting startdate
            $cdate = date_format(date_create(date("Y-m-d H:i:s")),"Y-m-d H:i:s");    //current datetime
            $start_date = new DateTime($cdate);
            $duration = $start_date->diff(new DateTime($dstart));  // calculating the time left to start of the event

            ?>
            <div id="counter" class="cf">
              <span><?php echo $duration->d ?><em>days</em></span>
              <span><?php echo $duration->h ?><em>hours</em></span>
              <span><?php echo $duration->m ?><em>minutes</em></span>
              <span><?php echo $duration->s ?><em>seconds</em></span>
            </div>

	         <ul class="social">
	            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
	            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
	            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
	            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
	            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
	            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
	            <li><a href="#"><i class="fa fa-skype"></i></a></li>
            </ul>

         </div>

      </div> <!-- main end -->

   </section> <!-- end intro section -->

   <!-- footer
   ================================================== -->
   <footer>

      <div class="row">

         <div class="twelve columns">

            <ul class="copyright">
               <li>&copy; Copyright 2016 Subtech</li>

         </div>

      </div>

      <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#intro"><i class="icon-up-open"></i></a></div>

   </footer> <!-- Footer End-->

   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>

   <script src="js/waypoints.js"></script>
   <script src="js/jquery.placeholder.js"></script>
   <script src="js/backstretch.js"></script>
   <script src="js/init.js"></script>

</body>

</html>
