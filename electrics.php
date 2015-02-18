<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Albas Gas - Electrics</title>
<link href="css/styles.css" rel="stylesheet" type="text/css">
</head>

<body class="sectionElectrics">

	<div class="wrapper">
		<?php require_once 'inc/banner.php'; ?>
		
		<?php require_once 'inc/nav-top.php'; ?>
		
		<div class="breadCrumbs">
			You are here > <a href="index.php">Home</a> > <a href="">Electrics</a>
		</div>
		
		<div class="layout2">
			<div class="column1">
				<?php include 'inc/nav-side-electrics.php'; ?>
			</div>
			<div class="column2">
				<?php include 'inc/electrics.php'; ?>
			</div>
			<div class="column3">
           	 	<object data="flash/electrics.swf?t=<?php echo time(); ?>" type="application/x-shockwave-flash" width="180" height="180">
					<param name="MOVIE" value="flash/electrics.swf?t=<?php echo time(); ?>">
					<img src="img/electrics-01.jpg" width="180" height="260"  alt="" />
				</object>
		  </div>
		</div>
		
		<?php include 'inc/features-bottom.php'; ?>
		
		<?php require_once 'inc/footer.php'; ?>
		
	</div>
</body>
</html>