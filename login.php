<?php
session_start();
include("connection.php");
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hash_password = hash('sha256', $password);
    $get_user_data = "SELECT username, password FROM user WHERE username = '$username'";
    $result = $con->query($get_user_data);
    $row = $result->fetch_array();

    if ($row['password'] == $hash_password) {
        $_SESSION['username'] = $username;
        //echo $_SESSION['username'];
        header("location:tamu.php", true, 301);
        die();
    }

    if ($result->num_rows == 0) {
        echo '<div class="container alert alert-danger text-center mb-4" role="alert">
    <h5 class="mt-3">Username Tidak Terdaftar</h5>
    </div>';
    } else {
        if ($row['password'] != $hash_password) {
            echo '<div class="container alert alert-danger text-center mb-4" role="alert">
    <h5 class="mt-3">Username dan Password Tidak Cocok</h5>
    </div>';
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        html,
        body {
            padding: 0px;
            margin: 0px;
            height: 100%;

        }

        #main {
            height: 100%;
        }

        * {
            font-family: Lucida Console, Monaco, monospace
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <h3 class="text-center">Login</h3>
                <form method="POST" action="login.php" class="pt-2">
                    <div class="form-group">
                        <label for="InputUserName">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="InputPassword">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" name="login" class="btn btn-primary mx-auto">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
