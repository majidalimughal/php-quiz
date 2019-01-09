<?php
include("class/users.php");
$username=$_SESSION['username'];
$profile=new users;
$profile->users_profile($username);
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
<!--Main Content Start--> 

<div class="container">
  <h2>&nbsp;</h2>
  <ul class="nav nav-tabs">
    <li class=" nav-item nav-link"><a data-toggle="tab" href="#home" style="text-decoration: none;">Home</a></li>
    <li class=" nav-item nav-link"><a data-toggle="tab" href="#menu1" style="text-decoration: none;">Profile</a></li>
    <li class=" nav-item nav-link ml-auto"><a  href="index.php" style="text-decoration: none;">Logout</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
        <form class="form w-auto" action="question_show.php" method="post">
            <div class="row">
                <div class="col-md-4"></div>
            <div class="col-md-4">
            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Subject</label>
            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="cat">
                <option selected>Choose any Category</option>
                <?php
        $profile->cat_show();
        foreach($profile->cat as $category)
        {
        ?>
                <option value="<?php echo $category['cat_id'];?>"><?php echo $category['cat_name'];?></option>
        <?php } ?>        
            </select>
            <button type="submit" class="btn btn-primary my-1" style="display: block;margin: 0 auto;">Start Quiz</button>
        </div></div>
        </form>
    </div>
    <div id="menu1" class="tab-pane fade">
      <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($profile->data as $prof)
    {?>
    <tr>
      <th scope="row"><?php echo $prof['id']?></th>
      <td><?php echo $prof['name']?></td>
      <td><?php echo $prof['username']?></td>
      <td><?php echo $prof['email']?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
    </div>
  </div>
</div>


<!--Main Content End-->   



    <div class="container-fluid" style="background-color: #F8F9FA; display: block;">
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