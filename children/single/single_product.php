<?php
$masp = isset($_REQUEST['m']) ? $_REQUEST['m'] : " ";
$o = new PDO("mysql:host=localhost;dbname=id11045465_clothes", 'id11045465_root', 'Sunflower');
$o->query("set names utf8");
$sql = "select * from sanpham where masp = '$masp'";
$stm = $o->query($sql);
$data = $stm->fetch(PDO::FETCH_ASSOC);
?>

<div class="col-md-9">
    <div class="col-md-5 grid">
        <div class="flexslider">
            <ul class="slides">
                <li data-thumb="images/si.jpg">
                    <div class="thumb-image"> <img src="images/<?php echo $data['hinh'] ?>" data-imagezoom="true" class="img-responsive"> </div>
                </li>
                <li data-thumb="images/si1.jpg">
                    <div class="thumb-image"> <img src="images/si1.jpg" data-imagezoom="true" class="img-responsive"> </div>
                </li>
                <li data-thumb="images/si2.jpg">
                    <div class="thumb-image"> <img src="images/si2.jpg" data-imagezoom="true" class="img-responsive"> </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-md-7 single-top-in">
        <div class="span_2_of_a1 simpleCart_shelfItem">
            <h3><?php echo $data['tensp'] ?></h3>
            <p class="in-para"> <?php echo $data['masp'] ?></p>
            <div class="price_single">
                <span class="reducedfrom item_price"><?php echo number_format($data['gia'], 0, '.', '.') ?> VNĐ</span>
                <a href="#">click for offer</a>
                <div class="clearfix"></div>
            </div>
            <h4 class="quick">Quick Overview:</h4>
            <p class="quick_desc"><?php echo $data['mota'] ?></p>
            <div class="wish-list">
                <ul>
                    <li class="wish"><a href="#"><span class="glyphicon glyphicon-check" aria-hidden="true"></span>Add to Wishlist</a></li>
                    <li class="compare"><a href="#"><span class="glyphicon glyphicon-resize-horizontal" aria-hidden="true"></span>Add to Compare</a></li>
                </ul>
            </div>
            <div class="quantity">
                <div class="quantity-select">
                    <div class="entry value-minus">&nbsp;</div>
                    <div class="entry value"><span>1</span></div>
                    <div class="entry value-plus active">&nbsp;</div>
                </div>
            </div>
            <!--quantity-->
            <script>
                $('.value-plus').on('click', function() {
                    var divUpd = $(this).parent().find('.value'),
                        newVal = parseInt(divUpd.text(), 10) + 1;
                    divUpd.text(newVal);
                });

                $('.value-minus').on('click', function() {
                    var divUpd = $(this).parent().find('.value'),
                        newVal = parseInt(divUpd.text(), 10) - 1;
                    if (newVal >= 1) divUpd.text(newVal);
                });
            </script>
            <!--quantity-->

            <a href="cart.php?m=<?php echo $data["masp"] ?>" class="add-to item_add hvr-skew-backward">Add to cart</a>
            <div class="clearfix"> </div>
        </div>

    </div>
    <div class="clearfix"> </div>
    <!---->
    <div class="tab-head">
        <nav class="nav-sidebar">
            <ul class="nav tabs">
                <li class="active"><a href="#tab1" data-toggle="tab">Product Description</a></li>
                <li class=""><a href="#tab2" data-toggle="tab">Additional Information</a></li>
                <li class=""><a href="#tab3" data-toggle="tab">Reviews</a></li>
            </ul>
        </nav>
        <div class="tab-content one">
            <div class="tab-pane active text-style" id="tab1">
                <div class="facts">
                    <p> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined </p>
                    <ul>
                        <li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Research</li>
                        <li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Design and Development</li>
                        <li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Porting and Optimization</li>
                        <li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>System integration</li>
                        <li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Verification, Validation and Testing</li>
                        <li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Maintenance and Support</li>
                    </ul>
                </div>

            </div>
            <div class="tab-pane text-style" id="tab2">

                <div class="facts">
                    <p> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections </p>
                    <ul>
                        <li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Multimedia Systems</li>
                        <li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Digital media adapters</li>
                        <li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Set top boxes for HDTV and IPTV Player </li>
                    </ul>
                </div>

            </div>
            <div class="tab-pane text-style" id="tab3">

                <div class="facts">
                    <p> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined </p>
                    <ul>
                        <li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Research</li>
                        <li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Design and Development</li>
                        <li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Porting and Optimization</li>
                        <li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>System integration</li>
                        <li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Verification, Validation and Testing</li>
                        <li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Maintenance and Support</li>
                    </ul>
                </div>

            </div>

        </div>
        <div class="clearfix"></div>
    </div>
    <!---->
</div>
<div class="col-md-3 product-bottom product-at">
    <!--categories-->
    <?php include "./children/single/category.php" ?>
    <!--initiate accordion-->
    <script type="text/javascript">
        $(function() {
            var menu_ul = $('.menu-drop > li > ul'),
                menu_a = $('.menu-drop > li > a');
            menu_ul.hide();
            menu_a.click(function(e) {
                e.preventDefault();
                if (!$(this).hasClass('active')) {
                    menu_a.removeClass('active');
                    menu_ul.filter(':visible').slideUp('normal');
                    $(this).addClass('active').next().stop(true, true).slideDown('normal');
                } else {
                    $(this).removeClass('active');
                    $(this).next().stop(true, true).slideUp('normal');
                }
            });

        });
    </script>