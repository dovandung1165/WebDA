<?php
$o = new PDO("mysql:host=localhost;dbname=banhang", 'root', '');
$o->query("set names utf8");
$stm = $o->query("select * from sanpham");
$masp = isset($_POST["inputMa"]) ? $_POST["inputMa"] : "";
$tensp = isset($_POST["inputTen"]) ? $_POST["inputTen"] : "";
$mota = isset($_POST["inputMota"]) ? $_POST["inputMota"] : "";
$gia = isset($_POST["inputGia"]) ? $_POST["inputGia"] : "";
$hinh = isset($_POST["inputHinh"]) ? $_POST["inputHinh"] : "";
$maloai = isset($_POST["inputMaloai"]) ? $_POST["inputMaloai"] : "";
$mancc = isset($_POST["inputMancc"]) ? $_POST["inputMancc"] : "";
$sql = "insert into sanpham (masp,tensp,mota,gia,hinh,mancc,maloai) values (?,?,?,?,?,?,?)";
$stm = $o->prepare($sql);
$stm->execute(array($masp, $tensp, $mota, $gia, $hinh, $maloai, $mancc));
$n = $stm->rowCount();
echo "Đã thêm $n sản phẩm.";
echo "$masp,$tensp,$mota,$gia,$hinh,$maloai,$mancc";
