<?php
$o = new PDO("mysql:host=localhost;dbname=id11045465_clothes", 'id11045465_root', 'Sunflower');
$o->query("set names utf8");
$stm = $o->query("select * from sanpham");
$data = $stm->fetchAll();
?>

<div class="product">
	<div class="container">
		<div class="col-md-9">
			<div class="mid-popular">
				<?php foreach ($data as $key => $value) { ?>
					<div class="col-md-4 item-grid1">
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
										<h6>
										<?php
											$mancc = $value["mancc"];
											$sqlSelectNCC = "select * from nhacc where mancc = '$mancc'";
											$stmSelectNCC = $o->query($sqlSelectNCC);
											$dataNCC = $stmSelectNCC->fetch(PDO::FETCH_ASSOC);
											echo $dataNCC["tenncc"];
										?>
										</h6>
									</div>
									<div class="img item_add">
										<a id="itemAdd" href="cart.php?m=<?php echo $value["masp"] ?>"><img src="images/ca.png" alt=""></a>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="mid-2">
									<p><em class="item_price"><?php echo number_format($value["gia"], 0, ".", ".") ?> VNĐ</em></p>
									<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>

									<div class="clearfix"></div>
								</div>

							</div>
						</div>
					</div>
				<?php } ?>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<!--products-->

	<!--//products-->
	<!--brand-->
	<div class="container">
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
	</div>
	<!--//brand-->


</div>