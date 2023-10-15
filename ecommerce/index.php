<?php

//establish the connection to database, and start the session
require("common.php");

// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email'])) {
  header('location: products.php');
}

?>

<!--Specifies document type is html-->
<!DOCTYPE html>
<!--Specifies the language as English-->
<html lang="en">
    <head>
        <!--instructs browser on how to control the page's dimensions and scaling-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Title of index page-->
        <title>Legionnaire Online Shopping Store</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body style="padding-top: 50px;">
        <!-- Header -->
        <?php
        include 'header.php';
        ?>
        <!--Header end-->
        <div id="content">
            <!--Main banner image-->
            <div id = "banner_image">
                <div class="container"> 
                    <center>
                        <div id="banner_content">
                            <h1>Legionnaire sell it all</h1>
                            <p>Get 20% off on premium brands </p>
                            <br/>
                            <a  href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div>
            <!--Main banner image end-->

            <!--Item categories listing-->
        
			<div class="container">
			<div class="row">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-2">
                        <a href="products.php#cameras" >
                            <div class="thumbnail">
                                <img src="static/img/1.jpg" alt="">
                                <div class="caption">
                                    <h3>Furniture</h3>
                                    <p>Buy Your Comfort</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-2">
                        <a href="products.php#appliances" >
                            <div class="thumbnail">
                                <img src="static/img/10.jpg" alt="">
                                <div class="caption">
                                    <h3>Home Appliances</h3>
                                    <p>All you need is Technology. Buy your ease.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-2">
                        <a href="products.php#cars" >
                            <div class="thumbnail">
                                <img src="static/img/c1.jpg" alt="">
                                <div class="caption">
                                    <h3>Cars</h3>
                                    <p>Right place to Buy Best Cars in the world</p>
                                </div>
                            </div>
                        </a>
                    </div>
					 <div class="col-sm-2">
                        <a href="products.php#clothes" >
                            <div class="thumbnail">
                                <img src="static/img/24.jpg" alt="">
                                <div class="caption">
                                    <h3>Clothes</h3>
                                    <p>Increase your confidence.<br> get it all</p>
                                </div>
                            </div>
                        </a>
                    </div>
					 <div class="col-sm-2">
                        <a href="products.php#shoes" >
                            <div class="thumbnail">
                                <img src="static/img/11.jpg" alt="">
                                <div class="caption">
                                    <h3>Shoes</h3>
                                    <p>Find yourself best shoes in the world</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
		</div>	
            
            <!--Item categories listing end-->
        
		</div>
        
        <!--Footer-->
        <?php
        include 'footer.php';
        ?>
        <!--Footer end-->
   
    </body> 
</html>