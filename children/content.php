<?php
$o = new PDO("mysql:host=localhost;dbname=id11045465_clothes", 'id11045465_root', 'Sunflower');
$o->query("set names utf8");
$stm1 = $o->query("select * from sanpham limit 0,4");
$data1 = $stm1->fetchAll();
$stm2 = $o->query("select * from sanpham limit 4,8");
$data2 = $stm2->fetchAll();
?>


<div class="content">
	<div class="container">
		<div class="content-top">
			<div class="col-md-6 col-md">
				<div class="col-1">
					<a href="single.html" class="b-link-stroke b-animate-go  thickbox">
						<img src="images/pi.jpg" class="img-responsive" alt="" />
						<div class="b-wrapper1 long-img">
							<p class="b-animate b-from-right    b-delay03 ">Lorem ipsum</p><label class="b-animate b-from-right    b-delay03 "></label>
							<h3 class="b-animate b-from-left    b-delay03 ">Trendy</h3>
						</div>
					</a>

					<!---<a href="single.html"><img src="images/pi.jpg" class="img-responsive" alt=""></a>-->
				</div>
				<div class="col-2">
					<span>Hot Deal</span>
					<h2><a href="single.html">Luxurious &amp; Trendy</a></h2>
					<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years</p>
					<a href="single.html" class="buy-now">Buy Now</a>
				</div>
			</div>
			<div class="col-md-6 col-md1">
				<div class="col-3">
					<a href="single.html"><img src="images/pi1.jpg" class="img-responsive" alt="">
						<div class="col-pic">
							<p>Lorem Ipsum</p>
							<label></label>
							<h5>For Men</h5>
						</div>
					</a>
				</div>
				<div class="col-3">
					<a href="single.html"><img src="images/pi2.jpg" class="img-responsive" alt="">
						<div class="col-pic">
							<p>Lorem Ipsum</p>
							<label></label>
							<h5>For Kids</h5>
						</div>
					</a>
				</div>
				<div class="col-3">
					<a href="single.html"><img src="images/pi3.jpg" class="img-responsive" alt="">
						<div class="col-pic">
							<p>Lorem Ipsum</p>
							<label></label>
							<h5>For Women</h5>
						</div>
					</a>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<!--products-->
		<div class="content-mid">
			<h3>Trending Items</h3>
			<label class="line"></label>
			<div class="mid-popular">
				<?php foreach ($data1 as $key => $value) { ?>
					<div class="col-md-3 item-grid">
						<div class=" mid-pop">
							<div class="pro-img">
								<img src="images/<?php echo $value["hinh"] ?>" class="img-responsive" alt="">
								<div class="zoom-icon ">
									<a class="picture" href="images/pc.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox"><i class="glyphicon glyphicon-search icon "></i></a>
									<a href="single.php?m=<?php echo $value["masp"] ?>"><i class="glyphicon glyphicon-menu-right icon"></i></a>
								</div>
							</div>
							<div class="mid-1">
								<div class="women">
									<div class="women-top">
										<h6><a href="single.php?m=<?php echo $value["masp"] ?>"><?php echo $value["tensp"] ?></a></h6>
									</div>
									<div class="img item_add">
										<a id="itemAdd" href="cart.php?m=<?php echo $value["masp"] ?>"><img src="images/ca.png" alt=""></a>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="mid-2">
									<p><em class="item_price"><?php echo number_format($value["gia"], 0, ".", ".") ?></em></p>
									<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>

									<div class="clearfix"></div>
								</div>

							</div>
						</div>
					</div>
				<?php	} ?>
				<div class="clearfix"></div>
			</div>
			<div class="mid-popular">
				<?php foreach ($data2 as $key => $value) { ?>
					<div class="col-md-3 item-grid">
						<div class=" mid-pop">
							<div class="pro-img">
								<img src="images/<?php echo $value["hinh"] ?>" class="img-responsive" alt="">
								<div class="zoom-icon ">
									<a class="picture" href="images/pc.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox"><i class="glyphicon glyphicon-search icon "></i></a>
									<a href="single.php"><i class="glyphicon glyphicon-menu-right icon"></i></a>
								</div>
							</div>
							<div class="mid-1">
								<div class="women">
									<div class="women-top">
										<h6><a href="single.html"><?php echo $value["tensp"] ?></a></h6>
									</div>
									<div class="img item_add">
										<a id="itemAdd" href="cart.php?m=<?php echo $value["masp"] ?>"><img src="images/ca.png" alt=""></a>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="mid-2">
									<p><em class="item_price"><?php echo number_format($value["gia"]) ?></em></p>
									<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>

									<div class="clearfix"></div>
								</div>

							</div>
						</div>
					</div>
				<?php	} ?>
				<div class="clearfix"></div>
			</div>
		</div>
		<!--//products-->
		<!--brand-->
		<div class="brand">
			<div class="col-md-3 brand-grid">
				<img src="images/ic.png" class="img-responsive" alt="">
			</div>
			<div class="col-md-3 brand-grid">
				<img src="images/ic1.png" class="img-responsive" alt="">
			</div>
			<div class="col-md-3 brand-grid">
				<img src="images/ic2.png" class="img-responsive" alt="">
			</div>
			<div class="col-md-3 brand-grid">
				<img src="images/ic3.png" class="img-responsive" alt="">
			</div>
			<div class="clearfix"></div>
		</div>
		<!--//brand-->
	</div>

</div>