<?php
session_start(); // Start session nya
if(isset($_SESSION['username'])){ // Jika session username ada berarti dia sudah login
  header('location: welcome.php'); // Redirect ke halaman welcome.php
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Login</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="libraries/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <!--- form login --->
        <div class="container">
            <div class="form-signin">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h2 class="form-signin-heading" style="margin-top: 0;">Selamat datang</h2>
                        <?php
                            // Cek apakah terdapat cookie dengan nama message
                            if(isset($_COOKIE["message"])){ // Jika ada
                                ?>
                                <div class="alert alert-danger">
                                <?php
                                // Tampilkan pesannya
                                echo $_COOKIE["message"];
                                ?>
                                </div>
                                <?php
                            }
                        ?>

                        <form method="post" action="login.php">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                            </div>

                            <button type="submit" class="btn btn-lg btn-success btn-block">
                            LOGIN</button>

                            <div class="text-center" style="margin-top: 10px;margin-bottom: 10px;">
                                atau login dengan
                            </div>

                            <div class="text-center">
                                <a href="google.php" class="btn btn-danger"><i class="fa fa-google"></i>  GOOGLE</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>