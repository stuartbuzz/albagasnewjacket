<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Albas Gas - Oil</title>
<link href="css/styles.css" rel="stylesheet" type="text/css">
</head>

<body class="sectionOil">

	<div class="wrapper">
		<?php require_once 'inc/banner.php'; ?>
		
		<?php require_once 'inc/nav-top.php'; ?>
		
		<div class="breadCrumbs">
			You are here > <a href="index.php">Home</a> > <a href="">Oil</a>
		</div>
		
		<div class="layout2">
			<div class="column1">
				<?php include 'inc/nav-side-oil.php'; ?>
			</div>
			<div class="column2">
				<?php include 'inc/oil.php'; ?>
			</div>
			<div class="column3">
            	<object data="flash/oil.swf?t=<?php echo time(); ?>" type="application/x-shockwave-flash" width="180" height="140">
					<param name="MOVIE" value="flash/oil.swf?t=<?php echo time(); ?>">
					<img src="img/oil-01.jpg" width="180" height="160"  alt="" />
				</object>
			</div>
		</div>
		
		<?php include 'inc/features-bottom.php'; ?>
		
		<?php require_once 'inc/footer.php'; ?>
		
	</div>

</body>
</html>