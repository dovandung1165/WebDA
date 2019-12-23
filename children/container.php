<div class="container">

    <div class="head-top">

        <div class="col-sm-8 col-md-offset-2 h_menu4">
            <nav class="navbar nav_bottom" role="navigation">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header nav_2">
                    <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                    <ul class="nav navbar-nav nav_1">
                        <li><a class="color" href="index.php">Home</a></li>
                        <li><a class="color" href="product.php">Product</a></li>
                        <li><a class="color4" href="404.php">About</a></li>
                        <li><a class="color5" href="typo.php">Short Codes</a></li>
                        <li><a class="color6" href="contact.php">Contact</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->

            </nav>
        </div>
        <div class="col-sm-2 search-right">
            <ul class="heart">
                <li>
                    <a href="wishlist.php">
                        <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                    </a></li>
                <li><a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i></a></li>
            </ul>
            <div class="cart box_1">
                <a href="checkout.php">
                    <h3>
                        <img src="images/cart.png" alt="" />
                    </h3>
                </a>
                <p><a href="cart.php?ac=deleteAll" class="simpleCart_empty">Empty Cart</a></p>
            </div>
            <div class="clearfix"> </div>

            <!----->

            <!---pop-up-box---->
            <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
            <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
            <!---//pop-up-box---->
            <div id="small-dialog" class="mfp-hide">
                <div class="search-top">
                    <div class="login-search">
                        <input type="submit" value="">
                        <input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}">
                    </div>
                    <p>Shopin</p>
                </div>
            </div>
            <script>
                $(document).ready(function() {
                    $('.popup-with-zoom-anim').magnificPopup({
                        type: 'inline',
                        fixedContentPos: false,
                        fixedBgPos: true,
                        overflowY: 'auto',
                        closeBtnInside: true,
                        preloader: false,
                        midClick: true,
                        removalDelay: 300,
                        mainClass: 'my-mfp-zoom-in'
                    });

                });
            </script>
            <!----->
        </div>
        <div class="clearfix"></div>
    </div>
</div>