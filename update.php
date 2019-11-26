<?php
$o = new PDO("mysql:host=localhost;dbname=banhang", "root", "");
$o->query("set names utf8");
$sql2 = "select masp from sanpham";
$fetch = $o->query($sql2);
$data = $fetch->fetchAll();
$masp = isset($_POST["uMa"]) ? $_POST["uMa"] : "";
$tensp = isset($_POST["uTen"]) ? $_POST["uTen"] : "";
$mota = isset($_POST["uMota"]) ? $_POST["uMota"] : "";
$gia = isset($_POST["uGia"]) ? $_POST["uGia"] : "";
if ($gia == "") echo "Phải nhập giá!!!!!!!!!!";
$hinh = isset($_POST["uHinh"]) ? $_POST["uHinh"] : "";
$maloai = isset($_POST["uMaloai"]) ? $_POST["uMaloai"] : "";
$mancc = isset($_POST["uMancc"]) ? $_POST["uMancc"] : "";
$flag = false;
$n = 0;
foreach ($data as $key => $value) {
    if ($value["masp"] == $masp) {
        $flag = true;
        $sql = "update sanpham set masp=?,tensp=?,mota=?,gia=?,hinh=?,mancc=?,maloai=? where masp=?";
        $stm = $o->prepare($sql);
        $arr = array($masp, $tensp, $mota, $gia, $hinh, $mancc, $maloai, $masp);
        $stm->execute($arr);
        $n = $stm->rowCount();
    }
}
if ($flag == false) {
    echo "Mã sản phẩm không tồn tại!!!</br>";
} else echo "Đã cập nhật $n sản phẩm.</br>";
?>
<a href="admin.php"> Quay lại trang admin </a>