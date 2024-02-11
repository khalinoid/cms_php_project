<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>
<?php include "admin/includes/functions.php"; ?>

<?php

if (isset($_POST['save_user'])) {
    $username       = mysqli_real_escape_string($connection, trim($_POST['username']));
    $email          = mysqli_real_escape_string($connection, trim($_POST['email']));
    $password       = mysqli_real_escape_string($connection, trim($_POST['password']));
    $user_firstname       = mysqli_real_escape_string($connection, trim($_POST['first_name']));

    if (username_exists($username)) {
        echo "<h2 class='text-center text-danger'>User with this username already exists, try different username instead</h2>";
    } else {
        if (!empty($username) && !empty($email) && !empty($password)) {


            $password = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));



            $query = "INSERT INTO users (username, password, user_email, user_role) VALUES('$username', '$password', '$email', 'Subscriber')";
            $user_registration_query = mysqli_query($connection, $query);


            if (!$user_registration_query) {
                die("Query failed " . mysqli_error($connection));
            } else {
                echo "<h2 class='text-center text-success'>Your registration has been submitted</h2>";
            }
        } else {
            echo "<script>alert('Fields cannot be empty')</script>";
        }
    }
}


?>


<!-- Navigation -->

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
                <li>
                    <a href="admin">Admin</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Page Content -->
<div class="container">

    <section id="login">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3">
                    <div class="form-wrap">
                        <h1>Register</h1>
                        <form role="form" action="registration.php" method="post" id="login-form" autocomplete="off">
                            <div class="form-group">
                                <label for="username" class="sr-only">username</label>
                                <input type="text" name="username" id="username" class="form-control" placeholder="Enter Desired Username">
                            </div>
                            <div class="form-group">
                                <label for="email" class="sr-only">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="somebody@example.com">
                            </div>
                            <div class="form-group">
                                <label for="password" class="sr-only">Password</label>
                                <input type="password" name="password" id="key" class="form-control" placeholder="Password">
                            </div>

                            <input type="submit" name="save_user" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Register">
                        </form>

                    </div>
                </div> <!-- /.col-xs-12 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section>


    <hr>



    <?php include "includes/footer.php"; ?>