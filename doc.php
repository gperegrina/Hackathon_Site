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
				<a href="./index.html">
				<i class="fa fa-arrow-left" style="font-size:2em" aria-hidden="true">Home Page</i>
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

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
				<br><br><br><br><br><br>
				<h3>Psychologist  Directory</h3>
                <!--<h1 class="page-header">Page Heading
                    <small>Secondary Text</small>
					</h1>-->
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">

		<?php
			$proQuery = "SELECT PROFIRST, PROLAST, PROGENDER, PROSPECIALTY, PROLANGUAGE,
									PROAFFIRMED, PROLOCATION, PROCITY FROM hack_provider";
			$proparse = oci_parse($conn, $proQuery);
			oci_execute($proparse);
			$counter = 1; 
			while( $proData = oci_fetch_array($proparse, OCI_BOTH) ) {
		?>
			<div class="col-md-4 portfolio-item">
                <a href="docinfo.php">
					<img class="img-responsive" src="img/doc<?php echo $counter ?>.png" alt="">
                </a>
				<h3><?php 
						echo $proData['PROLAST'];
				?></h3>
				<h3><?php echo $proData['PROSPECIALTY']; ?></h3> 
				<h3><?php echo $proData['PROGENDER']; ?></h3>
				
				<//?php echo $proData['PROLANGUAGE']; ?>
				<//?php echo $proData['PROAFFIRMED']; ?>
				<//?php echo $proData['PROLOCATION']; 
							echo " ";
							echo $proData['PROCITY'];?>
				</h3>
                <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>--> 
			</div>
		<?php
			$counter++;
			}
		?>
        </div>
        <!-- /.row -->

        <hr>
        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                <!--
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                -->
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->




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

</body>

</html>
