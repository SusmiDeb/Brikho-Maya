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
		
				<!-- Bootstrap CSS -->	
		<link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
	</head>
	
	<body>
	
	<div class="content">
		<div class="animated fadeIn">	
			<div class="row">
				<div class="container-fluid">
					<?php include 'animation.php'?>
					<div class="topbar">
						<div class="LOGO"></div>
						<div class="SiteName">বৃক্ষ মায়া</div>
						<div class="SiteSubName">The Tree Shop</div>
						<?php include 'menu.php';?>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	
	<div align="center" class="container">
		



	<?php
	include 'database.php';
	$OK = "";
				if(isset($_POST['SAVECONTACT']))
				{
					$isINSERT = mysqli_query($conn,"INSERT INTO 
														`tree_shop`.`customer_query` 
															(
																`id`, 
																`customer_name`, 
																`customer_phone`, 
																`customer_email`, 
																`query_type`, 
																`message`, 
																`date_time`
															) 
														VALUES 
															(
																NULL, 
																'".$_POST['name']."', 
																'".$_POST['phone']."', 
																'".$_POST['email']."', 
																'".$_POST['qtype']."', 
																'".$_POST['message']."', 
																CURRENT_TIMESTAMP
															)");

					if($isINSERT)
					{
						$OK =  "<br><br>Thanks a lot for Choosing us. You'll be communicated by our Business Manager soon.";
					}
					else
					{
						$OK =  "Opps !!! Something went Wrong !!";
					}
					
				}
	
	?>
		
		<div class="middlecontent">
			<div><h1>We'r waiting to Hear from You</h1></div>
			
			
			<div align="left">
			<div class="container">
			  <div class="row">
				<div align="left"><h2>Give Your Query</h2></div>
				<form action="" method="post">
				  <div class="form-group">
					<label for="name">Your Name</label>
					<input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="Your Full Name">
				  </div>
				  <div class="form-group">
					<label for="phone">Your Phone Number</label>
					<input type="text" class="form-control form-control-lg" id="phone" name="phone" placeholder="Primary Contact Number">
				  </div>
				  <div class="form-group">
					<label for="email">Email address</label>
					<input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="name@example.com">
				  </div>
				  <div class="form-group">
					<label for="qtype">Query Type</label>
					<select class="form-control form-control-lg" id="qtype" name="qtype">
					  <option>Price Query</option>
					  <option>Lot Purchase</option>
					  <option>Tree Care Knowledge</option>
					  <option>Pesticides</option>
					  <option>Fertilizer</option>
					  <option>Others</option>
					</select>
				  </div>

				  <div class="form-group">
					<label for="message">Your Message</label>
					<textarea class="form-control form-control-lg" id="message" name="message" rows="3"></textarea>
				  </div>
				  
				  <button type="submit" id="SAVECONTACT" name="SAVECONTACT" class="btn btn-primary">Submit</button>
				  
				  <div align="center"><h5><?php print $OK; ?></h5></div>
				  
				</form>
			  </div>
			</div>
			</div>
			
			
			<?php include 'contacts.php';?>
			<?php include 'map.php';?>
			
			
			
			
			<br><br><br><br><br><br>
		</div>
		
		<div class="footer">
			<?php include 'footer.php';?>	
		</div>
		

	</div>
	</body>
</html>