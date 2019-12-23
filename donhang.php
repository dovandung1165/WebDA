<?php
session_start();
$totalPrices = 0;
if (!isset($_SESSION['userG'])) {
    header('Location: /login.php');
} else {
    $gh = isset($_SESSION['gh']) ? $_SESSION['gh'] : array();
    $totalPrices = isset($_REQUEST['total']) ? $_REQUEST['total'] : 0;
    $userID = isset($_SESSION['userG']) ? $_SESSION['userG'] : " ";
    echo print_r($gh);
    echo "User ID:", $userID;
    echo $totalPrices;
    if (count($gh) == 0) return;
    else {
        $o = new PDO("mysql:host=localhost;dbname=id11045465_clothes", 'id11045465_root', 'Sunflower');
        $o->query("set names utf8");
        $sqlInsertHoadon = "INSERT INTO hoadon(tongtien,user_id) VALUES(:tongtien,:user_id)";
        $stmHoadon = $o->prepare($sqlInsertHoadon);
        $stmHoadon->bindParam(':tongtien', $totalPrices);
        $stmHoadon->bindParam(':user_id', $userID);
        $stmHoadon->execute();

        $sqlSelectHoadon = "select * from hoadon order by hoadon_id desc limit 1";


        foreach ($gh as $key => $value) {
            $stmSelectHoadon = $o->query($sqlSelectHoadon);
            $dataHoadon = $stmSelectHoadon->fetch(PDO::FETCH_ASSOC);
            echo print_r($dataHoadon);

            $sqlVariantId = "select variant_id from variant where masp = '$key'";
            $stmVariantId = $o->query($sqlVariantId);
            $dataVariantId = $stmVariantId->fetch(PDO::FETCH_ASSOC);
            // echo print_r($dataVariantId);


            $sqlInsertChitietHoadon = "INSERT INTO chitiet_hoadon(soluong,variant_id,hoadon_id) VALUES(?,?,?)";
            $arrChitiet = array($value, $dataVariantId['variant_id'], $dataHoadon['hoadon_id']);
            $stmChitietHoadon = $o->prepare($sqlInsertChitietHoadon);
            $stmChitietHoadon->execute(
                $arrChitiet
            );
        }

        foreach ($gh as $key => $value) {
            unset($gh[$key]);
        }
        $_SESSION['gh'] = $gh;
        header("Location: checkout.php");
    }
}
