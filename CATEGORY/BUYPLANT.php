<?php
include '../database.php';

$PRODUCT = $_GET['pid'];
			mysqli_query($conn,"SET CHARACTER SET utf8");
			mysqli_query($conn,"SET SESSION collation_connection =utf8_general_ci");
			$LSSDTIK = mysqli_query($conn,"SELECT 
											`id`, 
											`type`, 
											`plant_name`, 
											`rating`, 
											`availability`, 
											`price`, 
											`image_url` 
										FROM 
											`all_plants` 
										WHERE 
											`id` = $PRODUCT LIMIT 1");
											
											
$TIK_ARRY=mysqli_fetch_row($LSSDTIK);




?>


 <!doctype html>
 <html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../css/style.css">

			
		<!-- Bootstrap CSS -->	
		<link href="../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
		<script type="text/javascript">
		 function PriceChanger(QUANTITY)
		 {
			 UNIT 		= parseInt(document.getElementById("uprice").value);
			 DELIVERY 	= parseInt(document.getElementById("dprice").value);
			 QUANTITY	= parseInt(QUANTITY);
			 
			 
			 
			 document.getElementById("tprice").value = DELIVERY + (UNIT * QUANTITY);
		 }
		</script>
	</head>
	
	<body>
	

	


	<div class="container">
		<div class="row">
			<?php
				print "<div class=\"col-lg-12\">
						<div class=\"bg-white rounded shadow-sm hover-zoomin\">
							<a href=\"#\" title=\"$TIK_ARRY[2]\">
								<img src=\"../images/products/$TIK_ARRY[6]\" alt=\"\" class=\"img-fluid card-img-top\">
							</a>
						</div>
						<div align=\"right\" class=\"text-success\"><strong>$TIK_ARRY[4]</strong> in Stock </div>
						<div align=\"left\" class=\"text-success\">BDT <strong>$TIK_ARRY[5]</strong> </div>
						<div align=\"right\">Rating $TIK_ARRY[3]/5 </div>
					</div>";
				print "<div class=\"col-lg-12\"><strong>$TIK_ARRY[2]</strong></div>";	
				
				$DELIVERY 	= 60;
				$Total		= $DELIVERY + $TIK_ARRY[5];
			?>
		</div>
				
			<?php
				if(isset($_POST['SAVEPURCHASE']))
				{
					$isINSERT = mysqli_query($conn,"INSERT INTO 
														`tree_shop`.`all_sales_purchase` 
																	(
																		`id`, 
																		`plant_id`, 
																		`plant_name`, 
																		`unit_price`, 
																		`quantity`, 
																		`delivery_charge`, 
																		`total_cost`, 
																		`customer_phone`, 
																		`customer_email`, 
																		`customer_address`, 
																		`entrydate`
																	) 
																VALUES 
																	(
																		NULL, 
																		'".$_POST['id']."', 
																		'".$_POST['name']."', 
																		'".$_POST['uprice']."', 
																		'".$_POST['quantity']."', 
																		'".$_POST['dprice']."', 
																		'".$_POST['tprice']."', 
																		'".$_POST['phone']."', 
																		'".$_POST['email']."', 
																		'".$_POST['addressmessage']."', 
																		CURRENT_TIMESTAMP
																	)");
					if($isINSERT)
					{
						print "<br><br>Thanks a lot for Choosing us. Product will be reached to Your Doorstep soon.";
					}
					else
					{
						print "Opps !!! Something went Wrong !!";
					}
					
				}
				else
				{
			?>					
			
			

		
			  <div class="row">
				<div align="right"><h3>Purchase Details</h3></div>
				<form action="" method="post">
				  <div class="form-group">
					<label for="name">Product Name</label>
					<input type="hidden" id="id" name="id" value="<?php print $TIK_ARRY[0];?>">
					<input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="Product Name" value="<?php print $TIK_ARRY[2];?>">
				  </div>
				  
				  <div class="form-group">
					<label for="uprice">Unit Price</label>
					<input type="text" id="uprice" class="form-control form-control-lg" name="uprice" value="<?php print $TIK_ARRY[5];?>" readonly>
				  </div>
				  
				  <div class="form-group">
					<label for="qtype">Purchase Quantity</label>
					<select class="form-control form-control-lg" id="quantity" name="quantity" onchange="PriceChanger(this.value)">
						<?php
							for($i = 1; $i<= $TIK_ARRY[4]; $i++)
							{
								print "<option>$i</option>";
							}
						?>
					</select>
				  </div>

				  <div class="form-group">
					<label for="tprice">Delivery Charge</label>
					<input type="text" id="dprice" class="form-control form-control-lg" name="dprice" value="<?php print $DELIVERY; ?>" readonly>
				  </div>
				  
				  <div class="form-group">
					<label for="tprice">Total Price</label>
					<input type="text" id="tprice" class="form-control form-control-lg" name="tprice" value="<?php print $Total; ?>" readonly>
				  </div>
				  
				  <div class="form-group">
					<label for="phone">Your Phone Number</label>
					<input type="text" class="form-control form-control-lg" id="phone" name="phone" placeholder="Primary Contact Number" required>
				  </div>
				  
				  <div class="form-group">
					<label for="email">Email address</label>
					<input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="name@example.com" required>
				  </div>
				  


				  <div class="form-group">
					<label for="message">Delivery Address</label>
					<textarea class="form-control form-control-lg" id="addressmessage" name="addressmessage" rows="3"></textarea>
				  </div>
				  
				  <button type="submit" id="SAVEPURCHASE" name="SAVEPURCHASE" class="btn btn-primary">Submit</button>
				</form>
			  </div>
			  <?php
			  }
			  ?>
	</div>
	
	
	
	
	
	
	
	
	</body>
</html>