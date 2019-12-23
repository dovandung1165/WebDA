<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<?php include "./children/head.php" ?>
<!---//End-rate---->
</head>
<body>
	<!--header-->
	<div class="header">
		<?php include "./children/header.php" ?>
		<?php include "./children/container.php" ?>
	</div>
	<!--banner-->
	<?php include "./children/checkout/banner.php" ?>
	<!--login-->
	<?php include "./children/checkout/login_checkout.php" ?>

	<!--//login-->
	<div id="message"></div>
	</div>
	<!-- <script type='text/javascript'>
		document.querySelector("#message").innerHTML = "success";
	</script> -->
	<!--brand-->
	<?php include "./children/checkout/brand.php" ?>
	<!--//brand-->
	<!--//content-->
	<!--//footer-->
	<?php include "./children/footer.php" ?>
	<!--//footer-->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

	<script src="js/simpleCart.min.js"> </script>
	<!-- slide -->
	<script src="js/bootstrap.min.js"></script>

</body>

</html>