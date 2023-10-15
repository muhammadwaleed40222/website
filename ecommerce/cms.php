<!DOCTYPE html>
<html lang="en">
<head>
     <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>The Legionnaire Online Shoppong Store</title>
        <style type="text/css">
            .p1{
                text-align: justify;
            }
        </style>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php
include 'header.php';
?>
<div class="container" id="content">
    <div class="row">
    <div class="col-lg">
        <img src="static/img/contact.png" style="float: right;">
        <h1>Content Mnagement System</h1>
        <p id="p1">This can be Acessable by the Admin Only.<br>If you are Admin <br>Please Login to Continue.</p>
    </div><br><br>
    <div class="col-lg">
      <div class="row">
                    <div class="col-lg-4 col-lg-offset-3 col-md-4">
                        <div class="panel panel-primary" >
                            <div class="panel-heading">
                                <h4>LOGIN</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-warning"><i>For Admin Login </i><p>
                                <form action="login_submit.php" method="POST">
                                    <div class="form-group">
										<input type="text" class="form-control"  placeholder="Name" autofocus="on" name="name" required = "true">
                                    </div>
									<div class="form-group">
										<input type="email" class="form-control"  placeholder="Email" autofocus="on" name="e-mail" required = "true">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" required = "true">
                                    </div>
                                    
                                    <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
                                    <?php if(isset($_GET['error'])) echo $_GET['error']; ?>
                                </form><br/>
                            </div>
                            <div class="panel-footer"><p>Don't have an account? <a href="signup.php">Register</a></p></div>
                        </div>
                    </div>
                </div>
   </div>
</div>
</div>
<?php
include 'footer.php';
?>
</body>
</html>