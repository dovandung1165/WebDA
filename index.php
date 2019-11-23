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
	<?php include "./children/banner.php" ?>
	<!--content-->
	<?php include "./children/content.php" ?>
	<!--//content-->
	<!--//footer-->
	<?php include "./children/footer.php" ?>
	<!--//footer-->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/simpleCart.min.js"> </script>
	<!-- slide -->
	<script src="js/bootstrap.min.js"></script>
	<!--light-box-files -->
	<script src="js/jquery.chocolat.js"></script>
	<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8">
	<!--light-box-files -->
	<script type="text/javascript" charset="utf-8">
		$(function() {
			$('a.picture').Chocolat();
		});
	</script>


</body>

</html>