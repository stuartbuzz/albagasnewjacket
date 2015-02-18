<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Albas Gas - Renewables</title>
<link href="css/styles.css" rel="stylesheet" type="text/css">
</head>

<body class="sectionRenewables">

	<div class="wrapper">
		<?php require_once 'inc/banner.php'; ?>
		
		<?php require_once 'inc/nav-top.php'; ?>
		
		<div class="breadCrumbs">
			You are here > <a href="index.php">Home</a> > <a href="">Renewables</a>
		</div>
		
		<div class="layout2">
			<div class="column1">
				<?php include 'inc/nav-side-renewables.php'; ?>
			</div>
			<div class="column2">
				<?php include 'inc/renewables.php'; ?>
			</div>
			<div class="column3">
            	<object data="flash/renewables.swf?t=<?php echo time(); ?>" type="application/x-shockwave-flash" width="180" height="180">
					<param name="MOVIE" value="flash/renewables.swf?t=<?php echo time(); ?>">
					<img src="img/renewables-01.jpg" width="180"  height="166" alt="" />
				</object>
				
			</div>
		</div>
		
		<?php include 'inc/features-bottom.php'; ?>
		
		<?php require_once 'inc/footer.php'; ?>
		
	</div>

</body>
</html>