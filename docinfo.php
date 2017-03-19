<?php
include("connect.php");
session_start();
$counter = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Safe Searches</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/portfolio-item.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	<link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>
	<link rel="icon" type="image/png" href="img/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">



</head>

<body id="page-top" class="index">
<div id="skipnav"><a href="#maincontent">/a></div>

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
				</button>
				<h4>
				<a href="./doc.php">
				<i class="fa fa-arrow-left" style="font-size:2em" aria-hidden="true">Back</i>
                <a class="navbar-brand" href="./index.html"></a>
				</a>
				</h4>	
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact"></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
				<br><br><br><br><br><br>
				
			</div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <img class="img-responsive" src="./img/doc1.png" alt="">
            </div>

			<div class="col-md-4">
				<h3>Rosano Banagasn</h3>
                <h3>Specialty:</h3>
                <p>Psychology</p>
                <h3>Group Name:</h3>
                <p>Kern Faculty Psychiatry</p>
				<h3>Number:</h3>
				<p><a href="tel:6618688013">(661)-868-8013</p></a>
				<h3>Insurance Accepted:</h3> 
				<p>KFHC/Anthem Blue Cross</p> 
                <!--<ul>
                    <li>Lorem Ipsum</li>
                    <li>Dolor Sit Amet</li>
                    <li>Consectetur</li>
                    <li>Adipiscing Elit</li>
				</ul> 
				-->
            </div>



		</div>
		<!-- /.row -->
		<br><br><br><br>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3252.891854263206!2d-118.97210619959395!3d35.38313814232944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80ea6be22187e93b%3A0x7ecc6e8ee2c7cd59!2s1700+Mt+Vernon+Ave%2C+Bakersfield%2C+CA+93306!5e0!3m2!1sen!2sus!4v1489942377628" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>

	<!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>Bakersfield College</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                         	<li>
                                <a href="http://www.glcenterbak.org/" class="btn-social btn-outline"><span class="sr-only">Home</span><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/lgbtcenterbak" class="btn-social btn-outline"><span class="sr-only">Facebook</span><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/glcenterbak" class="btn-social btn-outline"><span class="sr-only">Twitter</span><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>About BCCSUBandUCD</h3>
                        <p> We're all students from BC, CSUB, and UCD hoping to build a website to help the LGBT organization with a potential issue people from the LGBT community faces.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; BCCSUBandUCD
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

</body>

</html>
