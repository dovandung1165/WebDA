<?php
$o = new PDO("mysql:host=localhost;dbname=banhang", "root", "");
$o->query("set names utf8");
$masp = isset($_POST["uMa"]) ? $_POST["uMa"] : "";
$tensp = isset($_POST["uTen"]) ? $_POST["uTen"] : "";
$mota = isset($_POST["uMota"]) ? $_POST["uMota"] : "";
$gia = isset($_POST["uGia"]) ? $_POST["uGia"] : "";
if ($gia == "") echo "Phải nhập giá!!!!!!!!!!";
$hinh = isset($_POST["uHinh"]) ? $_POST["uHinh"] : "";
$maloai = isset($_POST["uMaloai"]) ? $_POST["uMaloai"] : "";
$mancc = isset($_POST["uMancc"]) ? $_POST["uMancc"] : "";
$sql = "update sanpham set masp=?,tensp=?,mota=?,gia=?,hinh=?,mancc=?,maloai=? where masp=?";
$stm = $o->prepare($sql);
$arr = array($masp, $tensp, $mota, $gia, $hinh, $mancc, $maloai, $masp);
$stm->execute($arr);
$n = $stm->rowCount();
echo "Đã cập nhật $n sản phẩm.";
