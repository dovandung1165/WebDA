<!DOCTYPE html>
<html>
<?php include "./children/head.php" ?>
<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: /login.php');
}
?>

<body>
    <!--header-->
    <div class="header">
        <?php include "./children/header.php" ?>
        <div style="height: 80px"></div>
    </div>
    <!--content-->
    <?php include "./children/admin/manager.php" ?>
    <!--//content-->
    <!--//footer-->
    <?php include "./children/footer.php" ?>
    <!--//footer-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/simpleCart.min.js"> </script>
    <!-- slide -->
    <script src="js/bootstrap.min.js"></script>
    <!--light-box-files -->
    <script src="js/jquery.chocolat.js"></script>
    <link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8">
    <!--light-box-files -->
    <script type="text/javascript" charset="utf-8">
        $(function() {
            $('a.picture').Chocolat();
        });
    </script>


</body>

</html>