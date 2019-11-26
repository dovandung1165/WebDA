<!DOCTYPE html>
<html>
<?php include "./children/head.php" ?>
<?php

session_start();

if (isset($_SESSION['user'])) {
    header('Location: /admin.php');
}
require 'database.php';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT email, password FROM users WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (password_verify($_POST['password'], $results['password'])) {
        $_SESSION['user'] = $results['email'];
        header("Location: /admin.php");
    } else {
        $message = 'Sorry, those credentials do not match';
    }
}

?>

<body>
    <!--header-->
    <div class="header">
        <?php include "./children/header.php" ?>

        <?php include "./children/container.php" ?>
    </div>
    <!--//content-->
<?php include "./children/login/login_.php" ?>
    <!-- brand -->
<?php include "./children/checkout/brand.php" ?>
<!--//brand-->
<!--//footer-->
<?php include "./children/footer.php" ?>
<!--//footer-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<script src="js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>