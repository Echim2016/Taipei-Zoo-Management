<?php

  $order_name = $_REQUEST['order'];

  $link = mysql_connect("localhost","root","");
  mysql_select_db("taipeizoo");
  mysql_query("set names utf8");
  
  $data = mysql_query("select * from order_to_class where A_Order ='$order_name' ");

  $class_name = mysql_fetch_row($data);


  $data2 = my_sql_query("select * from class_to_phylum where A_Class ='$class_name[1]' ");

  if (!$link) {
    die('error'.mysql_error());
  }

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title> Your Searching Result!</title>
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

    <section id="contact" class="section-style" data-background-image="../images/background/contact.jpg">
      <div class="pattern height-resize">
        <div class="container">
          <h3 class="section-name">
            <span>
              Your result
            </span>
          </h3><!-- /.section-name -->
          <h2 class="section-title">
            Here it is! 
          </h2><!-- /.Section-title  -->
          <p class="section-description">
            Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
          </p><!-- /.section-description -->

            <div>
            <table width="100%" style="border:2px #FFFFFF solid; padding:5px; font-family:monospace;" rules="all" cellpadding='5'>
            <tr>
            <td align="center">Animal Phylum</td>
            <td align="center">Animal Class</td>
            <td align="center">Animal Order</td>
            </tr>

            <?php
              if (!$data){
                echo'error';
              }
              else{
              for($i=1;$i<=mysql_num_rows($data);$i++){
                $class=mysql_fetch_row($data);
                $phylum=mysql_fetch_row($data2);
            ?>

            <tr>
              <td align="center"><?php echo $phylum[0]?></td>
              <td align="center"><?php echo $class[0]?></td>
              <td align="center"><?php echo $order_name?></td>
            </tr>
            <?php
              }
            }
            ?>
            </table>
            </div><!-- /.contact-box-hide -->

          <div class="next-section">
            <a href="list.php"><span></span></a>
          </div><!-- /.next-section -->

        </div><!-- /.container -->
      </div><!-- /.pattern -->

    </section><!-- /#contact -->
    <!-- Contact Section End -->

    <footer id="footer-section">
      <p class="copyright">
        &copy; <a href="">IM107</a> 2016-2017, All Rights Reserved. Designed by & Developed by <a href="">DB team8</a>
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
