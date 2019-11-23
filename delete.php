<?php
$o = new PDO("mysql:host=localhost;dbname=banhang", 'root', '');
$o->query("set names utf8");

$ma = isset($_GET['m']) ? $_GET['m'] : '';
$sql = "delete from sanpham where masp = ?";
$stm = $o->prepare($sql);
$stm->execute(array($ma));
$n = $stm->rowCount();
echo "Đã xóa $n sản phẩm.";
