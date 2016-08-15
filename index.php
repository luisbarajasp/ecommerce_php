<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lacandona</title>
    <link rel="stylesheet" href="styles/style.css" media="all" charset="utf-8">
    <!-- Bootstrap: Latest compiled and minified CSS -->
    <link rel="stylesheet" href="styles/bootstrap.min.css" media="all" charset="utf-8">
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <!-- Bootstrap: Latest compiled and minified JavaScript -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
</head>
<body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" style="color: #459864;" href="#">Lacandona</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop <span class="caret"></span></a>
                  <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                      <li><a href="#">All Products</a></li>
                      <li class="dropdown-submenu">
                        <a tabindex="-1" href="#">Categories</a>
                        <ul class="dropdown-menu">
                          <li><a tabindex="-1" href="#">Second level</a></li>
                          <li><a href="#">Second level</a></li>
                          <li><a href="#">Second level</a></li>
                        </ul>
                      </li>
                      <li class="dropdown-submenu">
                        <a tabindex="-1" href="#">Brands</a>
                        <ul class="dropdown-menu">
                          <li><a tabindex="-1" href="#">Second level</a></li>
                          <li><a href="#">Second level</a></li>
                          <li><a href="#">Second level</a></li>
                        </ul>
                      </li>
                    </ul>
              </li>
              <li><a href="#">My Account</a></li>
              <li><a href="#">Sign Up</a></li>
              <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
              <li><a href="#">Contact Us</a></li>
              <form class="navbar-form navbar-left" method="get" action="results.php" enctype="multipart/form-data">
                <div class="form-group">
                  <input type="text" name="user_query" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
              </form>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <div class="jumbotron">
      <h1 style="color: #fff;">Welcome to Lacandona!</h1>
      <p style="color: #fff;">A place where you can find and shop anything you are looking for!</p>
      <p style="text-align: center; margin-top: 35px;"><a class="btn-jumbotron" href="#" role="button">See products</a></p>
      <img src="http://2.bp.blogspot.com/-hXdOLK0xVSM/VUEuKjDwchI/AAAAAAAAABM/yqMi4daz-E0/s1600/selva%2Blacandona%2B5.png" alt="Jaguar" />
    </div>
    <div class="wrapper">
        <h1>Lacandona</h1>
    </div>
</body>
</html>
