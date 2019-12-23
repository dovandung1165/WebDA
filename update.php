<?php
$o = new PDO("mysql:host=localhost;dbname=id11045465_clothes", 'id11045465_root', 'Sunflower');
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
$size = isset($_POST["inputSize"]) ? $_POST["inputSize"] : "";
$color = isset($_POST["inputMau"]) ? $_POST["inputMau"] : "";
$flag = false;
$n = 0;
foreach ($data as $key => $value) {
    if ($value["masp"] == $masp) {
        $flag = true;
        $sql = "update sanpham set masp=?,tensp=?,mota=?,gia=?,hinh=?,mancc=?,maloai=? where masp=?";
        $sqlVariant = "update variant set size=?,color=?,masp=?";
        $stm = $o->prepare($sql);
        $arr = array($masp, $tensp, $mota, $gia, $hinh, $mancc, $maloai, $masp);
        $stmVariant = $o->prepare($sqlVariant);
        $arrVariant = array($size, $color, $masp);
        $stm->execute($arr);
        $stmVariant->execute($arrVariant);
        $n = $stm->rowCount();
    }
}
if ($flag == false) {
    echo "Code product not found!!!</br>";
} else echo "Updated $n product.</br>";
?>
<a href="administrator.php"> Back to administrator page </a>