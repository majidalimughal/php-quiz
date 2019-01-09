<?php
include("class/users.php");
$ans=new users;
$arra=$ans->answer($_POST);
$total=$arra['right']+$arra['wrong']+$arra['no_answer'];
$per=100*($arra['right']/$total);
$grade="F";
if($per>=80)
{
	$grade="A+";
}else if($per>=70)
{
	$grade="A";
}else if($per>=60)
{
	$grade="B";
}else if($per>=50)
{
	$grade="C";
}else if($per<50)
{
	$grade="F";
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz System</title>
    <link rel="icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <div>
        <nav class="navbar navbar-light sticky-top navbar-expand-md navigation-clean-button bg-light">
            <div class="container"><a class="navbar-brand" href="index.php"><img class="img-responsive" src="assets/img/brand.svg" width="30px" height="30px"> Quiz System</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse"
                    id="navcol-1">
                    
                    <ul class=" navbar-nav ml-auto"><span class="navbar-text actions"> <a href="index.php" class="login">Log In</a><a class="btn btn-light action-button" role="button" href="signup.php">Sign Up</a></span></div>
            </div>
        </nav>
    </div>

    <br/>

    <div class="container-fluid">
    	<div class="row">
    		<div class="col-md-3"></div>
    		<div class="col-md-6">
    			<div class="jumbotron" style="background-color: #F8F9FA; font-weight: bold;">
    				<h3 class="text-center">Result</h3>
    				<br/>
    				<h5 class="text-center">Right Attempted:<?php echo $arra['right']?></h5>
    				<h5 class="text-center">Wrong Attempted:<?php echo $arra['wrong']?></h5>
    				<h5 class="text-center">Not   Attempted:<?php echo $arra['no_answer']?></h5>
    				<h5 class="text-center"><?php echo $per?>%</h5>
    				<h5 class="text-center">Grade: <?php echo $grade?></h5>
    				<br/>
    				<a href="home.php" style="text-decoration: none;"><button class="btn" style="color:white;background-color: #56C6C6;display: block; margin: 0 auto;">Back to Home</button></a>
    			</div>
    		</div>
    		<div class="col-md-3"></div>
    </div>




    	<div style="background-color: #F8F9FA">
        <hr>
        <div class="text-center center-block">
            <a href="https://www.facebook.com"><i id="social-fb" class="fa fa-facebook fa-2x fa-fw social"></i></a>
            <a href="https://twitter.com"><i id="social-tw" class="fa fa-twitter fa-2x fa-fw social"></i></a>
            <a href="https://plus.google.com"><i id="social-gp" class="fa fa-google-plus fa-fw fa-2x social"></i></a>
            <a href="mailto:hehehehe@gmail.com"><i id="social-em" class="fa fa-envelope fa-fw fa-2x social"></i></a>
        </div>
        </hr>
        <div class="footer-copyright text-center py-3">© 2018 Copyright</div>
    </div>
    
</body>

</html>
