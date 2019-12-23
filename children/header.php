    <?php
    $userG = isset($_SESSION['userG']) ? $_SESSION['userG'] : " ";
    ?>
    <div class="container">
        <div class="head">
            <div class=" logo">
                <a href="index.php"><img src="images/logo.png" alt=""></a>
            </div>
        </div>
    </div>
    <div class="header-top">
        <div class="container">
            <div class="col-sm-5 col-md-offset-2  header-login">
                <ul>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.php">Register</a></li>
                    <li><a href="checkout.php">Checkout</a></li>
                    <li><a href="administrator.php">Admin</a></li>
                    <li id="dx" style="display: none; color: white"><a href="logout.php">Đăng xuất</a></li>
                    <?php
                    if ($userG != " ") {
                    ?>
                        <script>
                            document.getElementById("dx").style.display = "block";
                        </script>
                    <?php  }
                    ?>
                </ul>
            </div>

            <div class="col-sm-5 header-social">
                <ul>
                    <li><a href="#"><i></i></a></li>
                    <li><a href="#"><i class="ic1"></i></a></li>
                    <li><a href="#"><i class="ic2"></i></a></li>
                    <li><a href="#"><i class="ic3"></i></a></li>
                    <li><a href="#"><i class="ic4"></i></a></li>
                </ul>

            </div>
            <div class="clearfix"> </div>
        </div>
    </div>