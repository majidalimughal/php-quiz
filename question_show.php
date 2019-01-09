<?php
include("class/users.php");
$ques=new users;
$cat=$_POST['cat'];
$ques->question_show($cat);
$_SESSION['cat']=$_POST['cat'];

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
    <script type="text/javascript">
    	function timeout()
    	{
    		var minute=Math.floor(timeleft/60);
    		var second=timeleft%60;
    		if(timeleft<=0)
    		{
    			clearTimeout(tm);
    			document.getElementById("form1").submit();
    		}else 
    		{
    			if(minute<10)
    			{
    				minute="0"+minute;
    			}
    			if(second<10)
    			{
    				second="0"+second;
    			}
    			document.getElementById("time").innerHTML=minute+":"+second;
    		}
    		timeleft--;
    		var tm=setTimeout(function(){timeout()},1000);
    	}
    </script>
</head>

<body onload="timeout()">
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
<script type="text/javascript">
	var timeleft=60;
</script>
<h4 style="text-align: right;"><div id="time" class="container"></div></h4>
<div class="row">
	<div class="col-md-2" style="border-right: 5px solid #56C6C6;"></div>
	<div class="col-md-6">
    <div class="container">
    	<form action="answer.php" method="post" id="form1">
    	<?php foreach ($ques->ques as $question)
    	{ ?>
    	<table class="table table-borderless">
    		<thead>
    			<tr>
    				<th><?php echo $question['id'];?>.<?php echo $question['question']?></th>
    			</tr>
    		</thead>
    		<tbody>
    		<?php if(isset($question['option1'])){?>
    			<tr>
    				<td><input  type="radio" value="0" name="<?php echo $question['id'];?>"><?php echo $question['option1'];?></td>
    			</tr>
    		<?php } ?>
    		<?php if(isset($question['option1'])){?>
    			<tr>
    				<td><input type="radio" value="1" name="<?php echo $question['id'];?>"><?php echo $question['option2'];?></td>
    			</tr>
    		<?php } ?>
    		<?php if(isset($question['option1'])){?>
    			<tr>
    				<td><input type="radio" value="2" name="<?php echo $question['id'];?>"><?php echo $question['option3'];?></td>
    			</tr>
    		<?php } ?>
    		<?php if(isset($question['option1'])){?>
    			<tr>
    				<td><input type="radio" value="3" name="<?php echo $question['id'];?>"><?php echo $question['option4'];?></td>
    			</tr>
    		<?php } ?>
    		    <tr>
    		    	<td><input type="radio" checked="checked" value="no_attempt" style="display: none;" name="<?php echo $question['id'];?>"></td>
    		    </tr>
    		</tbody>
    	</table>
    <?php } ?>
    </div>
</div>
<div class="col-md-4"></div>
</div>
<button type="submit" value="Submit Quiz" class="btn buttons" style="display: block;margin: 0 auto; background-color: #56C6C6; color: white;">Submit Quiz</button>
</form>



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
