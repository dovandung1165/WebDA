<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

</head>
<?php

require 'database.php';

$message = '';
if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO admin (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
        $message = 'Successfully created new user';
    } else {
        $message = 'Sorry there must have been an issue creating your account';
    }
}
?>

<body class="bg-dark">

    <div class="container">
        <div class="card card-register mx-auto mt-5">
            <div class="card-header">Register an Account</div>
            <div class="card-body">
                <form method="POST" action="registerAdmin.php">
                    <div class="form-group">
                        <div class="form-group">
                            <label> Email: </label>
                            <div class="form-label-group">
                                <input name="email" type="text" placeholder="Enter your email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label> Password: </label>
                                    <div class="form-label-group">
                                        <input name="password" type="password" placeholder="Enter your Password">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label> Confirm password: </label>
                                    <div class="form-label-group">
                                        <input name="confirm_password" type="password" placeholder="Confirm Password">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (!empty($message)) : ?>
                            <p style="color:red"> <?= $message ?></p>
                        <?php endif; ?>
                        <label class="hvr-skew-backward">
                            <input class="btn btn-primary btn-block" type="submit" value="Submit">
                        </label>
                </form>
                <div class="text-center">
                    <a class="d-block small mt-3" href="login.php">Login Page</a>
                    <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>