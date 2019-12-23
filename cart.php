<?php
$id = isset($_REQUEST['m']) ? $_REQUEST['m'] : '';
// if ($id == '') header('location:checkout.php');

$sl = isset($_REQUEST['sl']) ? $_REQUEST['sl'] : 1; //so luong
//ac: add/update/delete
$ac = isset($_REQUEST['ac']) ? $_REQUEST['ac'] : 'add';

if ($sl <= 0) $ac = 'delete';
if (!isset($_SESSION)) session_start();
//lay ra bien ngoai de de thao tac
$gh = isset($_SESSION['gh']) ? $_SESSION['gh'] : array();

if ($ac == 'add') //them vao mang $gh
{
    if (isset($gh[$id])) //da co
        $gh[$id] = $gh[$id] + $sl;
    else $gh[$id] = $sl;
}
if ($ac == 'delete') //xoa san pham khoi $gh
{
    // echo $ac;
    // echo $_REQUEST['m'];
    unset($gh[$id]);
}
if ($ac == 'deleteAll') //xoa het san pham khoi $gh
{
    foreach ($gh as $key => $value) {
        unset($gh[$key]);
    }
}
// if ($ac == 'update') //update $gh
// {
// // print_r($_GET); exit;
// if (isset($gh[$id])) $gh[$id] = $sl;
// }
//xong: cap nhat lai vao session
$_SESSION['gh'] = $gh;
// //chuyen den trang hien thi gio hang
header('location:checkout.php');
