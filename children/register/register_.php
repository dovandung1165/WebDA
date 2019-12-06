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

<div class="container">
    <div class="login">
        <form action="register.php" method="POST">
            <div class="col-md-6 login-do">
                <div class="login-mail">
                    <input name="email" type="text" placeholder="Enter your email">
                    <i class="glyphicon glyphicon-envelope"></i>
                </div>
                <div class="login-mail">
                    <input name="password" type="password" placeholder="Enter your Password">
                    <i class="glyphicon glyphicon-lock"></i>
                </div>
                <div class="login-mail">
                    <input name="confirm_password" type="password" placeholder="Confirm Password">
                </div>
                <a class="news-letter " href="#">
                    <label class="checkbox1"><input type="checkbox" name="checkbox"><i> </i>Forget Password</label>
                </a>
                <?php if (!empty($message)) : ?>
                    <p style="color:red"> <?= $message ?></p>
                <?php endif; ?>
                <label class="hvr-skew-backward">
                    <input type="submit" value="Submit">
                </label>

            </div>
            <div class="col-md-6 login-right">
                <h3>Completely Free Account</h3>

                <p>Pellentesque neque leo, dictum sit amet accumsan non, dignissim ac mauris. Mauris rhoncus, lectus tincidunt tempus aliquam, odio
                    libero tincidunt metus, sed euismod elit enim ut mi. Nulla porttitor et dolor sed condimentum. Praesent porttitor lorem dui, in pulvinar enim rhoncus vitae. Curabitur tincidunt, turpis ac lobortis hendrerit, ex elit vestibulum est, at faucibus erat ligula non neque.</p>
                <a href="login.php" class="hvr-skew-backward">Login</a>

            </div>

            <div class="clearfix"> </div>
        </form>
    </div>

</div>