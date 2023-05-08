 <!doctype html>
 <html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>বৃক্ষ মায়া</title>
		<link rel= "stylesheet" href="css/style.css">
		<link rel= "stylesheet" href="css/menu.css">
		<link rel="stylesheet" href="css/animation.css">
		<link rel="stylesheet" href="css/slider.css">
	</head>
	
	<body>
	<div align="center" class="container">
		
		<?php include 'animation.php'?>
		
		<div class="topbar">
			<div class="LOGO"></div>
			<div class="SiteName">বৃক্ষ মায়া</div>
			<div class="SiteSubName">The Tree Shop</div>
			<?php include 'menu.php';?>
		</div>
		
		<div class="middlecontent">
			<?php include 'slider.php';?>
			<?php include 'category.php';?>
			<?php include 'contacts.php';?>
			<?php include 'map.php';?>
		</div>
		
		<div class="footer">
			<?php include 'footer.php';?>	
		</div>
		

	</div>
	</body>
</html>