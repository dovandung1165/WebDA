<?php
ob_start();
if(!session_start()) session_start();
?>
<!DOCTYPE html>
<html>
<?php include "./children/head.php";
if (isset($_SESSION['user'])) {
    header('Location: /administrator.php');
}
if (isset($_SESSION['userG'])) {
    header('Location: /product.php');
}
require 'database.php';
if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT email, password FROM admin WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (password_verify($_POST['password'], $results['password'])) {
        $_SESSION['user'] = $results['email'];
        header("Location: /administrator.php");
    } else {
        $recordsU = $conn->prepare('SELECT user_id,email, password FROM user WHERE email = :email');
        $recordsU->bindParam(':email', $_POST['email']);
        $recordsU->execute();
        $resultsU = $recordsU->fetch(PDO::FETCH_ASSOC);
        if (password_verify($_POST['password'], $resultsU['password'])) {
            $_SESSION['userG'] = $resultsU["user_id"];
            $message = "Successfully Login User";
            // echo "<script type='text/javascript'>alert('$message');</script>";
            header("Location: /product.php");
        } else{
             $message = "Account or password is incorrect";
            // echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }
}?>

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
<?php ob_end_flush(); ?>