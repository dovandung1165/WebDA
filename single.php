<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<?php include "./children/head.php" ?>

<body>
	<!--header-->
	<div class="header">
		<?php include "./children/header.php" ?>
		<?php include "./children/container.php" ?>
	</div>
	<!--banner-->
	<div class="banner-top">
		<div class="container">
			<h1>Single</h1>
			<em></em>
			<h2><a href="index.html">Home</a><label>/</label>Single</h2>
		</div>
	</div>
	<div class="single">

		<div class="container">
			<!--single product -->
			<?php include "./children/single/single_product.php" ?>
			<!----->
			<!--//menu-->
			<?php include "./children/single/menu.php" ?>
		</div>

		<!--brand-->
		<?php include "./children/checkout/brand.php" ?>
		<!--//brand-->
	</div>
	</div>
	<!--//content-->
	<!--//footer-->
	<?php include "./children/footer.php" ?>
	<!--//footer-->
	<script src="js/imagezoom.js"></script>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script defer src="js/jquery.flexslider.js"></script>
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

	<script>
		// Can also be used with $(document).ready()
		$(window).load(function() {
			$('.flexslider').flexslider({
				animation: "slide",
				controlNav: "thumbnails"
			});
		});
	</script>

	<script src="js/simpleCart.min.js"> </script>
	<!-- slide -->
	<script src="js/bootstrap.min.js"></script>


</body>

</html>