<?php
$gh = isset($_SESSION['gh']) ? $_SESSION['gh'] : array();
echo print_r($gh);

// $arrMasp = array();
// foreach ($gh as $key => $value) {
//     array_push($arrMasp, $key);
// }
// echo print_r($arrMasp);

if (count($gh) == 0) echo "Giỏ hàng rỗng";
else {
    $o = new PDO("mysql:host=localhost;dbname=clothes", 'root', '');
    $o->query("set names utf8");
    $sql = "select * from sanpham where masp = :masp";
    foreach ($gh as $key => $value) {
        $stm = $o->prepare($sql);
        $stm->bindParam(':masp', $key);
        $data = $stm->execute();
        if ($data) echo "supppppp";
        echo $key;
    }
    echo "data", print_r($data);
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
                        <th>Prices</th>
                        <th>Subtotal</th>
                    </tr>
                    <?php foreach ($gh as $key => $value) {
                        ?>
                        <tr class="cart-header">
                            <td class="ring-in"><a href="single.php" class="at-in"><img src="images/ch.jpg" class="img-responsive" alt=""></a>
                                <div class="sed">
                                    <h5><a href="single.html">Sed ut perspiciatis unde</a></h5>
                                    <p>(At vero eos et accusamus et iusto odio dignissimos ducimus ) </p>

                                </div>
                                <div class="clearfix"> </div>
                                <div class="close1"> </div>
                            </td>
                            <td>$100.00</td>
                            <td>FREE SHIPPING</td>
                            <td class="item_price">$100.00</td>
                            <td class="add-check"><a class="item_add hvr-skew-backward" href="#">Add To Cart</a></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
        <div class="produced">
            <a href="single.html" class="hvr-skew-backward">Produced To Buy</a>
        </div>
    </div>
</div>