<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Albas Gas</title>
<link href="css/styles.css" rel="stylesheet" type="text/css">
</head>

<body class="sectionGas">

	<div class="wrapper">
		<?php require_once 'inc/banner.php'; ?>
		
		<?php require_once 'inc/nav-top.php'; ?>
		
		<div class="breadCrumbs">
			You are here > <a href="index.php">Home</a> > <a href="">Gas</a>
		</div>
		
		<div class="layout2">
			<div class="column1">
				<?php include 'inc/nav-side-gas.php'; ?>
			</div>
			<div class="column2">
				<?php include 'inc/gas.php'; ?>
			</div>
			<div class="column3">
				<object data="flash/gas.swf?t=<?php echo time(); ?>" type="application/x-shockwave-flash" width="180" height="180">
					<param name="MOVIE" value="flash/gas.swf?t=<?php echo time(); ?>">
					<img src="img/gas-01.jpg" width="180" height="310"  alt="" />
				</object>
			</div>
		</div>
		
		<?php include 'inc/features-bottom.php'; ?>
		
		<?php require_once 'inc/footer.php'; ?>
		
	</div>

</body>
</html>