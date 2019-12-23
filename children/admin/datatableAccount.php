<?php
$o = new PDO("mysql:host=localhost;dbname=id11045465_clothes", 'id11045465_root', 'Sunflower');
$o->query("set names utf8");
?>

<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Data Table</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>Email</th>
                        <th>Password</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                    <th>User ID</th>
                        <th>Email</th>
                        <th>Password</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                        $sqlSelectUser = "select * from user";
                        $stmUser = $o->query($sqlSelectUser);
                        $dataUser = $stmUser->fetchAll();
                        foreach($dataUser as $keyU => $valueU){
                            ?>
                            <tr>
                             <th scope="row"><?php echo $valueU["user_id"] ?></th>
                             <td><?php echo $valueU["email"] ?></td>
                             <td><?php echo $valueU["password"] ?></td>
                         </tr>
                      <?php  
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Nav pills -->
<ul class="nav nav-pills">
    <li class="nav-item">
        <a class="nav-link active" data-toggle="pill" href="#home">Reset User</a>
    </li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    <div class="tab-pane container active" id="home">
        <!-- Thêm -->
        <form action="account.php" method="POST">
            <h3>Reset User</h3>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputID">ID</label>
                    <input name="inputID" type="text" class="form-control" id="inputID" placeholder="User ID">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail">Email</label>
                    <input name="inputEmail" type="text" class="form-control" id="inputEmail" placeholder="Tên sản phẩm">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="exampleFormControlFile1">New Password</label>
                    <input name="inputNewPassword" type="text" class="form-control-file" id="inputNewPassword" placeholder="New Password">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Lưu</button>
        </form>
    </div>
</div>

<?php
    $userID = isset($_POST["inputID"]) ? $_POST["inputID"] : " ";
    $userMail = isset($_POST["inputEmail"]) ? $_POST["inputEmail"] : " ";
    $newPassword = isset($_POST["inputNewPassword"]) ? password_hash($_POST["inputNewPassword"],PASSWORD_BCRYPT) : " ";
    
    echo $userID, $userMail, $newPassword;
    $sqlUpdateUser = "update user set email=?,password=? where user_id = ?";
    $arrUser = array($userMail,$newPassword,$userID);
    $stmUpdateUser = $o->prepare($sqlUpdateUser);
    $stmUpdateUser->execute($arrUser);
    $n = $stmUpdateUser->rowCount();
    if(  $stmUpdateUser->execute($arrUser)){
        echo "Updated $n User.</br>";
    }
?>