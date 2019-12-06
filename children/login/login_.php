<div class="container">
    <div class="login">

        <form action="login.php" method="POST">
            <div class="col-md-6 login-do">
                <div class="login-mail">
                    <input name="email" type="text" placeholder="Enter your email">
                    <i class="glyphicon glyphicon-envelope"></i>
                </div>
                <div class="login-mail">
                    <input name="password" type="password" placeholder="Enter your Password">
                    <i class="glyphicon glyphicon-lock"></i>
                </div>
                <?php if (!empty($message)) : ?>
                    <p style="color:red"> <?= $message ?></p>
                <?php endif; ?>
                <label class="hvr-skew-backward">
                    <input type="submit" value="login">
                </label>
            </div>
            <div class="col-md-6 login-right">
                <h3>Completely Free Account</h3>

                <p>Pellentesque neque leo, dictum sit amet accumsan non, dignissim ac mauris. Mauris rhoncus, lectus tincidunt tempus aliquam, odio
                    libero tincidunt metus, sed euismod elit enim ut mi. Nulla porttitor et dolor sed condimentum. Praesent porttitor lorem dui, in pulvinar enim rhoncus vitae. Curabitur tincidunt, turpis ac lobortis hendrerit, ex elit vestibulum est, at faucibus erat ligula non neque.</p>
                <a href="register.php" class=" hvr-skew-backward">Register</a>

            </div>

            <div class="clearfix"> </div>
        </form>
    </div>

</div>