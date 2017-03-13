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
        <title>SPIT Admission Form Process</title>
        <!-- Bootstrap core CSS -->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="jumbotron-narrow.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
    <body>
        <div class="container">
            <div class="header clearfix">
                <nav>
                    <ul class="nav nav-pills pull-right">
</ul>
                </nav>
                <h3 class="text-muted">SPIT Admission Form Processing</h3>
            </div>
            <div class="jumbotron">
                <h2><?php 
                if(isset($_SESSION["Error"]))
                {
                    $message=$_SESSION["Error"];
                    echo "$message";
                }
                else
                {
                    echo "No session message";
                }
                
                ?>
                </h2>                    
                <a href="<?php 
                    if(isset($_SESSION["Revert"]))
                    {
                        $message=$_SESSION["Revert"];
                        echo "$message";
                    }
                    else
                    {
                        echo "Unsuccessful.php";
                    }
                    ?>
                "><button type="Button" class="btn btn-large btn-success">Go Back</button></a>                     
            </div>
            <footer class="footer">
                <p>	&copy Sardar Patel Institute of Technology</p>
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
