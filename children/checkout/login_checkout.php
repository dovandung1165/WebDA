<?php
ob_start();
$totalPrices = 0;
$gh = isset($_SESSION['gh']) ? $_SESSION['gh'] : array();

if (count($gh) == 0) return;
else {
    $o = new PDO("mysql:host=localhost;dbname=id11045465_clothes", 'id11045465_root', 'Sunflower');
    $o->query("set names utf8");
    $dataProduct = array();
    foreach ($gh as $key => $value) {
        $sql =  "select * from sanpham where masp = '$key'";
        $stm = $o->query($sql);
        $data = $stm->fetch(PDO::FETCH_ASSOC);
        array_push($dataProduct, $data);
    }
    $countCheckOut = 0;
}
?>
<script>
    $(document).ready(function(c) {
        $('.close1').on('click', function(c) {
            $('.cart-header').fadeOut('slow', function(c) {
                $('.cart-header').remove();
            });
        });
    });
</script>
<script>
    $(document).ready(function(c) {
        $('.close2').on('click', function(c) {
            $('.cart-header1').fadeOut('slow', function(c) {
                $('.cart-header1').remove();
            });
        });
    });
</script>
<script>
    $(document).ready(function(c) {
        $('.close3').on('click', function(c) {
            $('.cart-header2').fadeOut('slow', function(c) {
                $('.cart-header2').remove();
            });
        });
    });
</script>
<div class="check-out">
    <div class="container">

        <div class="bs-example4" data-example-id="simple-responsive-table">
            <div class="table-responsive">
                <table class="table-heading simpleCart_shelfItem">
                    <tr>
                        <th class="table-grid">Item</th>
                        <th>Code</th>
                        <th>Count</th>
                        <th>Price</th>
                    </tr>
                    <?php foreach ($dataProduct as $key => $value) {
                    ?>
                        <tr class="cart-header">
                            <td class="ring-in"><a href="single.php" class="at-in"><img src="images/<?php echo $value['hinh'] ?>" class="img-responsive" alt=""></a>
                                <div class="sed">
                                    <h5><a href="single.php?m=<?php echo $value['masp'] ?>"><?php echo $value['tensp'] ?></a></h5>
                                    <p><?php echo $value['mota'] ?> </p>

                                </div>
                                <div class="clearfix"> </div>
                            </td>
            </div>
            </td>
            <td><?php echo $value['masp'] ?></td>
            <td><?php
                                                                                                    foreach ($gh as $keygh => $valuegh) {
                                                                                                        if ($keygh == $value['masp']) {
                                                                                                            $totalPrices += ($value['gia'] * $valuegh);
                                                                                                            echo $valuegh;
                                                                                                            $gia = $value['gia'] * $valuegh;
                                                                                                            $countCheckOut += $valuegh;
                                                                                                        }
                                                                                                    } ?></td>
            <td class="item_price"><?php echo number_format($gia, 0, '.', '.') ?> VNĐ</td>
            <td><a class="delItem" href="cart.php?m=<?php echo $value['masp'] ?>&ac=delete"> Delete </a></td>
        </div>
        </tr>
    <?php } ?>
    </table>
    <div>Count: <?php echo $countCheckOut ?></div>
    <div>Total Prices: <?php
                                                                                                echo number_format($totalPrices, 0, ".", ".");
                        ?> VNĐ</span>
        <div>
        </div>
    </div>
    <div class="produced">
        <a href="donhang.php?gh=<?php echo print_r($gh) ?> &total= <?php echo $totalPrices ?>" class="hvr-skew-backward">Buy</a>
    </div>
    <div style="height:30px"></div>
    <div class="produced">
        <a href="product.php" class="hvr-skew-backward">Back to product page</a>
    </div>
    </div>
    <?php ob_end_flush(); ?>