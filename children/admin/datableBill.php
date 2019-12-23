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
                        <th>Code Bill</th>
                        <th>User ID</th>
                        <th>Variant ID</th>
                        <th>Count</th>
                        <th>Price Product</th>
                        <th>Code Product</th>
                        <th>Images</th>
                        <th>Total Cost In Bill</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                    <th>Code Bill</th>
                        <th>User ID</th>
                        <th>Variant ID</th>
                        <th>Count</th>
                        <th>Price Product</th>
                        <th>Code Product</th>
                        <th>Images</th>
                        <th>Total Cost In Bill</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    $sqlSlHoadon = "select * from hoadon";
                    $stmHoadon = $o->query($sqlSlHoadon);
                    $dataHoadon = $stmHoadon->fetchAll();
                    foreach($dataHoadon as $key => $value){
                        $hoadonID = $value["hoadon_id"];
                        $sqlSlChitiet = "select * from chitiet_hoadon where hoadon_id = '$hoadonID'";
                        $stmChitiet = $o->query($sqlSlChitiet);
                        $dataChitiet = $stmChitiet->fetchAll();
                        foreach($dataChitiet as $keyC => $valueC){
                            $varID = $valueC["variant_id"];
                            $sqlSlVariant = "select * from variant where variant_id = $varID";
                            $stmVariant = $o->query($sqlSlVariant);
                            $dataVariant = $stmVariant->fetchAll();
                           foreach($dataVariant as $keyV => $valueV){
                               $maSp = $valueV["masp"];
                               $sqlSlProduct = "select * from sanpham where masp = '$maSp'";
                               $stmProduct = $o->query($sqlSlProduct);
                               $dataProduct = $stmProduct->fetch(PDO::FETCH_ASSOC);    
                               $priceProduct = $dataProduct["gia"] * $valueC["soluong"];
                            ?>
                            <tr>
                             <th scope="row"><?php echo $hoadonID ?></th>
                             <td><?php echo $value["user_id"] ?></td>
                             <td><?php echo $valueV["variant_id"] ?></td>
                             <td><?php echo $valueC["soluong"] ?></td>
                             <td><?php echo $priceProduct ?></td>
                             <td><?php echo $valueV["masp"] ?></td>
                             <td><img src="images/<?php echo $dataProduct["hinh"] ?>" class="img-responsive" alt="" style="heigh:1000px; width:60px;margin-left:20px;"></td>
                             <td><?php echo number_format($value["tongtien"], 0, ".",".") ?></td>
                         </tr>
                      <?php  }}
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>