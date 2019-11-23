<?php
$o = new PDO("mysql:host=localhost;dbname=banhang", 'root', '');
$o->query("set names utf8");
$stm = $o->query("select * from sanpham");
$data = $stm->fetchAll();
?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Mã SP</th>
            <th scope="col">Tên SP</th>
            <th scope="col">Loại</th>
            <th scope="col">Nhà cung cấp</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($data as $key => $value) { ?>
            <tr>
                <th scope="row"><?php echo $value["masp"] ?></th>
                <td><?php echo $value["tensp"] ?></td>
                <td><?php echo $value["maloai"] ?></td>
                <td><?php echo $value["mancc"] ?></td>
                <td><a href="delete.php?m=<?php echo $value["masp"] ?>">Xóa</a></td>
            </tr>
        <?php }
        ?>
    </tbody>
</table>
<form action="create.php" method="POST">
    <h3>Thêm sản phẩm</h3>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputMa">Mã</label>
            <input name="inputMa" type="text" class="form-control" id="inputMa" placeholder="Mã sản phẩm">
        </div>
        <div class="form-group col-md-6">
            <label for="inputTen">Tên sản phẩm</label>
            <input name="inputTen" type="text" class="form-control" id="inputTen" placeholder="Tên sản phẩm">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group">
            <label for="inputMota">Example textarea</label>
            <textarea name="inputMota" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputGia">Giá</label>
            <input name="inputGia" type="text" class="form-control" id="inputGia" placeholder="Giá">
        </div>
        <div class="form-group col-md-6">
            <label for="exampleFormControlFile1">Hình</label>
            <input name="inputHinh" type="text" class="form-control-file" id="fileHinh   ">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-8">
            <label for="inputMaloai">Mã loại</label>
            <input name="inputMaloai" type="text" class="form-control" id="inputMaloai" placeholder="Mã loại">
        </div>
        <div class="form-group col-md-4">
            <label for="inputMancc">Mã nhà cung cấp</label>
            <input name="inputMancc" type="text" class="form-control" id="inputMancc" placeholder="Mã nhà cung cấp">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Lưu</button>
</form>