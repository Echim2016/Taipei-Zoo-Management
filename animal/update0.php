<?php
	
	$tid = $_GET["update_id"];

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>	Animal Homepage</title>
	<meta name="description" content="Kite Coming Soon HTML Template by Jewel Theme" >
	<meta name="author" content="Jewel Theme">

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

	<!-- Bootstrap  -->
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet">

	<!-- icon fonts font Awesome -->
	<link href="../assets/css/font-awesome.min.css" rel="stylesheet">

	<!-- Custom Styles -->
	<link href="../assets/css/style.css" rel="stylesheet">

	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<![endif]-->

</head>
<body>


	<!-- Main Menu -->
	<div id="main-menu" class="navbar navbar-default navbar-fixed-top" role="navigation">

		<div class="navbar-header">
			<!-- responsive navigation -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<i class="fa fa-bars"></i>
			</button> <!-- /.navbar-toggle -->

		</div> <!-- /.navbar-header -->

	</div><!-- /#main-menu -->
	<!-- Main Menu End -->



	 <!-- update -->
    </section>
    <!-- Contact Section End -->

        <section id="update" class="section-style" data-background-image="../images/background/about-us.jpg">
      <div class="pattern height-resize">
        <div class="container">
          <h3 class="section-name">
            <span>
              Update
            </span>
          </h3><!-- /.section-name -->
          <h2 class="section-title">
            Here it is! 
          </h2><!-- /.Section-title  -->
          <p class="section-description">
            Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
          </p><!-- /.section-description -->

            <div>
              <form class="news-letter" action="update.php?tid=<? echo $tid; ?>" method="post">
                  <p class="alert-success"></p>
                  <p class="alert-warning"></p>

                  <div class="subscribe-hide">

                    <!-- <input class="form-control" type="email" id="update_id" name="update_id" placeholder="Please enter the animal's id: "  required> -->
                    <input class="form-control" type="email" id="update_name" name="update_name" placeholder="Enter the animal's name"  required>
                    <input class="form-control" type="email" id="update_order" name="update_order" placeholder="Enter the animal's orders!"  required>

                    <button class="btn1"><i class="fa fa-chevron-circle-right"></i></button>

                    <span id="subscribe-loading" class="btn"> <i class="fa fa-refresh fa-spin"></i> </span>

                    <div class="subscribe-error"></div>

                    </div><!-- /.subscribe-hide -->
                    <div class="subscribe-message"></div>
             </form><!-- /.news-letter -->
            
            </div><!-- /.contact-box-hide -->

          <div class="next-section">
            <a href="animal.php"><span></span></a>
          </div><!-- /.next-section -->

        </div><!-- /.container -->
      </div><!-- /.pattern -->

    </section><!-- /#contact -->
    <!-- Contact Section End -->


		<!-- Footer Section -->
		<footer id="footer-section">
			<p class="copyright">
				&copy; <a href="http://jeweltheme.com/html/kite/">IM107</a> 2016-2017, All Rights Reserved. Designed by & Developed by <a href="http://jeweltheme.com">Jewel Theme</a>
			</p>
		</footer>
		<!-- Footer Section End -->


		<!-- jQuery Library -->
		<script type="text/javascript" src="../assets/js/jquery-2.1.0.min.js"></script>
		<!-- Modernizr js -->
		<script type="text/javascript" src="../assets/js/modernizr-2.8.0.min.js"></script>
		<!-- Plugins -->
		<script type="text/javascript" src="../assets/js/plugins.js"></script>
		<!-- Custom JavaScript Functions -->
		<script type="text/javascript" src="../assets/js/functions.js"></script>
		<!-- Custom JavaScript Functions -->
		<script type="text/javascript" src="../assets/js/jquery.ajaxchimp.min.js"></script>

	</body>
	</html>
