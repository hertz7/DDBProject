<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>SPIT Railway Concession Form System</title>
        <!-- Bootstrap core CSS -->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="jumbotron-narrow.css" rel="stylesheet">
        <!-- Fontawesome core CSS -->
	    <link href="assets1/css/font-awesome.min.css" rel="stylesheet" />
	    <!--GOOGLE FONT -->
	    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	    <!--Slide Show Css -->
	    <link href="assets1/ItemSlider/css/main-style.css" rel="stylesheet" />
	    <!-- custom CSS here -->
	    <link href="assets1/css/style.css" rel="stylesheet" />
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
    <body>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><strong>Railway Concession</strong>Form System</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                <ul class="nav navbar-nav navbar-right">
                    <li><a href="register.php">Register</a></li>
                    

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">24x7 Support <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><strong>Call: </strong>+09-456-567-890</a></li>
                            <li><a href="#"><strong>Mail: </strong>www.spit.ac.in</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><strong>Address: </strong>
                                <div>
                                    Main Office,<br />
                                    Sardar Patel Institute of Technology,Andheri
                                </div>
                            </a></li>
                        </ul>
                    </li>
                </ul>
                
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
        <div class="container">
            <div class="header clearfix">
                <nav>
                    <ul class="nav nav-pills pull-right">
</ul>
                </nav>
                <h3 class="text-muted">SPIT Railway Concession Form System</h3>
            </div>
            <div class="jumbotron">
                <h1>Log In</h1>
                <form role="form" method="POST" action="login.php"> 
                    <div class="form-group"> 
                        <label class="control-label" for="UID">Roll No.(UID)</label>                         
                        <input type="text" class="form-control" name="rollno" required="required" placeholder="Enter UID"> 
                    </div>                     
                    <div class="form-group"> 
                        <label class="control-label" for="\Password">Password</label>                         
                        <input type="password" class="form-control" name="Password" required="required" placeholder="Password"> 
                    </div>                     
                    <button type="submit" class="btn btn-large btn-success">Submit</button>                     
                </form>
            </div>
            <footer class="footer">
                <p>&copy Sardar Patel Institute of Technology</p>
            </footer>
        </div>         
        <!-- /container -->
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>
