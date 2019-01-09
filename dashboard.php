<?php
include("class/users.php");
$cat=new users;
$category=$cat->cat_shows();

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

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block sidebar" style="border-right:3px solid #56C6C6">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Orders
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="shopping-cart"></span>
                  Products
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="users"></span>
                  Customers
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="bar-chart-2"></span>
                  Reports
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Integrations
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Saved reports</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Current month
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Last quarter
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Social engagement
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Year-end sale
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <div class="col-md-8">
            <h2>Dashboard</h2>
            <h4 class="text-center">Enter Questions</h4>
            <form action="add_quiz.php" method="post">
                <div class="form-group">
                    <label for="question">Question:</label>
                    <input type="text" required="required" name="qus" class="form-control" placeholder="Enter Question Statement">
                </div>
                <div class="form-group">
                    <label for="">Option1</label>
                    <input type="text"  required="required" name="op1" class="form-control" placeholder="Enter Option1" >
                </div>
                <div class="form-group">
                    <label for="">Option2</label>
                    <input type="text"  required="required" name="op2" class="form-control" placeholder="Enter Option2" >
                </div>
                <div class="form-group">
                    <label for="">Option3</label>
                    <input type="text"  required="required" name="op3" class="form-control" placeholder="Enter Option3">
                </div>
                <div class="form-group">
                    <label for="">Option4</label>
                    <input type="text"  required="required" name="op4" class="form-control" placeholder="Enter Option4">
                </div>
                <div class="form-group">
                    <label for="">Answer</label>
                    <input type="text"  required="required" name="ans" class="form-control" placeholder="Enter Answer">
                </div>

                <div class="form-group">
                    <label for="sel1">Select Subject</label>
                    <select class="form-control" name="cat">
                        <?php foreach($category as $c) { ?>
                        <option value="<?php echo $c['cat_id'];?>"><?php echo $c['cat_name'];?></option>
                        <?php } ?>
                    </select>
                </div>


                <button type="submit" class="btn" style="background-color: #56C6C6;color: white; display: block;margin: 0 auto;" data-toggle="modal" data-target="#myModal">Enter Question</button>
            </form>
            <br/>
            <br/>
            <br/>

            <div class="container-fluid">
              <h4 class="text-center">Delete from Table</h4>
              <form class="form" method="post" action="delete_quiz.php">
              <div class="form-group">
                    <label for="">Enter Question to Delete:</label>
                    <input type="text"  required="required" name="qus_id" class="form-control" placeholder="Enter Question">
                </div>
              <button type="submit" class="btn" style="background-color: #56C6C6;color: white; display: block;margin: 0 auto;" data-toggle="modal" data-target="#myModal1">Delete Question</button>
            </form>
            </div>

            <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <?php
        if(isset($_GET['msg']) && !empty($_GET['msg']))
        {
            echo "<p> Data Entered Sucessfully!</p>";
        }
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <?php
        if(isset($_GET['msg']) && !empty($_GET['msg']))
        {
            echo "<p> Data Deleted Sucessfully!</p>";
        }
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


        </div>
        <div class="col-md-2"></div>
    </div>
          

          
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

    <!-- Bootstrap core JavaScript
    ================================================== -->
   
  </body>
</html>