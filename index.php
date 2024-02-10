<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Home - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-home.css" rel="stylesheet">

    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Start CMS</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                    <li class='active'>
                        <a href="registration.php">Registration</a>
                    </li>
                    <?php
                    if (isset($_SESSION['user_role']) && $_SESSION['user_role'] == 'admin') { ?>
                        <li>
                            <a href="admin">Admin</a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">


                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
                <h2>
                    <a href="#">Post title</a>
                </h2>
                <p class="lead">
                    by <a href="">User</a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> date</p>
                <hr>
                <a href="#">
                    <img class="img-responsive" src="images/html.png" alt="">
                </a>
                <hr>
                <p>Post content</p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>
            </div>

            <!-- Blog Sidebar Widgets Column -->

            <div class="col-md-4">

                <!-- Login Form -->
                <div class="well">
                    <?php
                    if (isset($_SESSION['user_role'])) { ?>
                        <h4>Logged in as <?php echo $_SESSION['username'] ?></h4>
                        <a href="includes/logout.php" class='btn btn-warning'>Logout</a>
                    <?php } else { ?>

                        <h4>Login</h4>
                        <form action="includes/login.php" method="post">
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" placeholder="Username">
                            </div>
                            <div class="input-group">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="submit" name="login">Login</button>
                                </span>
                            </div>
                            <!-- /.input-group -->
                        </form>
                    <?php } ?>

                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>

        <ul class="pager">
            <li><a class='active_link' href='#'>1</a></li>
            <li><a href='#'>2</a></li>
        </ul>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>