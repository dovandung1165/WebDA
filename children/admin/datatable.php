<?php
$o = new PDO("mysql:host=localhost;dbname=id11045465_clothes", 'id11045465_root', 'Sunflower');
$o->query("set names utf8");
$stm = $o->query("select * from sanpham");
$data = $stm->fetchAll();

$stmSelectVariant = $o->query("select * from variant");
$dataVariant = $stmSelectVariant->fetchAll();

$maV = isset($_REQUEST['v']) ? $_REQUEST['m'] : '';
$ma = isset($_REQUEST['m']) ? $_REQUEST['v'] : '';
$sqlDelVar = "delete from sanpham where masp = ?";
$stmDelVar = $o->prepare($sqlDelVar);


$sql = "delete from sanpham where masp = ?";
$stm = $o->prepare($sql);
$stmDelVar->execute(array($maV));
$stm->execute(array($ma));
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
                        <th>Code</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Supplier</th>
                        <th>Color</th>
                        <th>Size</th>
                        <th>Price</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                    <th>Code</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Supplier</th>
                        <th>Color</th>
                        <th>Size</th>
                        <th>Price</th>
                        <th>Delete</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    foreach ($data as $key => $value) { 
                        foreach($dataVariant as $keyV => $valueV){
                            if($value["masp"] == $valueV["masp"]){
                            ?>
                        <tr>
                            <th scope="row"><?php echo $value["masp"] ?></th>
                            <td><?php echo $value["tensp"] ?></td>
                            <td><?php echo $value["maloai"] ?></td>
                            <td><?php echo $value["mancc"] ?></td>
                            <td><?php echo $valueV["color"] ?></td>
                            <td><?php echo $valueV["size"] ?></td>
                            <td><?php echo number_format($value["gia"], 0, ".", ".") ?> VNĐ</td>
                            <td><a href="administrator.php?m=<?php echo $value["masp"]?> &v=<?php echo $valueV["variant_id"] ?>">Xóa</a></td>
                        </tr>
                    <?php }}}
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Nav pills -->
<ul class="nav nav-pills">
    <li class="nav-item">
        <a class="nav-link active" data-toggle="pill" href="#home">Thêm</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="pill" href="#menu2">Cập nhật</a>
    </li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    <div class="tab-pane container active" id="home">
        <!-- Thêm -->
        <form action="administrator.php" method="POST">
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
                    <label for="inputMota">Mô tả</label>
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
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputSize">Size</label>
                    <input name="inputSize" type="text" class="form-control" id="inputSize" placeholder="Size">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputMau">Màu</label>
                    <input name="inputMau" type="text" class="form-control" id="inputMau" placeholder="Màu">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Lưu</button>
        </form>
    </div>
    <div class="tab-pane container fade" id="menu2">
        <!-- Cập nhật -->
        <form action="update.php" method="POST">
            <h3>Cập nhật</h3>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="uMa">Mã</label>
                    <input name="uMa" type="text" class="form-control" id="inputMa" placeholder="Mã sản phẩm">
                </div>
                <div class="form-group col-md-6">
                    <label for="uTen">Tên sản phẩm</label>
                    <input name="uTen" type="text" class="form-control" id="inputTen" placeholder="Tên sản phẩm">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="uMota">Mô tả</label>
                    <textarea name="uMota" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="uGia">Giá</label>
                    <input name="uGia" type="text" class="form-control" id="inputGia" placeholder="Giá">
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleFormControlFile">Hình</label>
                    <input name="uHinh" type="text" class="form-control-file" id="fileHinh   ">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-8">
                    <label for="uMaloai">Mã loại</label>
                    <input name="uMaloai" type="text" class="form-control" id="inputMaloai" placeholder="Mã loại">
                </div>
                <div class="form-group col-md-4">
                    <label for="uMancc">Mã nhà cung cấp</label>
                    <input name="uMancc" type="text" class="form-control" id="inputMancc" placeholder="Mã nhà cung cấp">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputSize">Size</label>
                    <input name="inputSize" type="text" class="form-control" id="inputSize" placeholder="Size">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputMau">Màu</label>
                    <input name="inputMau" type="text" class="form-control" id="inputMau" placeholder="Màu">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
    </div>
</div>
<!-- Thêm -->
<?php
$masp = isset($_POST["inputMa"]) ? $_POST["inputMa"] : "";
$tensp = isset($_POST["inputTen"]) ? $_POST["inputTen"] : "";
$mota = isset($_POST["inputMota"]) ? $_POST["inputMota"] : "";
$gia = isset($_POST["inputGia"]) ? $_POST["inputGia"] : "";
$hinh = isset($_POST["inputHinh"]) ? $_POST["inputHinh"] : "";
$maloai = isset($_POST["inputMaloai"]) ? $_POST["inputMaloai"] : "";
$mancc = isset($_POST["inputMancc"]) ? $_POST["inputMancc"] : "";
$size = isset($_POST["inputSize"]) ? $_POST["inputSize"] : "";
$color = isset($_POST["inputMau"]) ? $_POST["inputMau"] : "";

// echo "masp:", $masp, "tensp:", $tensp, "mota:", $mota, "loai:", $maloai, "mancc:", $mancc,"color:",$color,"size:", $size;

$sqlInsertProduct = "insert into sanpham (masp,tensp,mota,hinh,mancc,maloai,gia) values (?,?,?,?,?,?,?)";
$sqlInsertVariant = "insert into variant (size,color,masp) values (?,?,?)";

$arr = array($masp, $tensp, $mota, $hinh, $mancc, $maloai, $gia);
$stm = $o->prepare($sqlInsertProduct);

$stmVariant = $o->prepare($sqlInsertVariant);
$arrVariant = array($size, $color, $masp);

$stm->execute($arr);
$stmVariant->execute($arrVariant);
$n = ($stm->rowCount() && $stmVariant->rowCount());
if ($n >= 1) {
    echo "Đã thêm $n sản phẩm.";
}
// End Thêm
