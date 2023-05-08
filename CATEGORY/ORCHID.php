 <!doctype html>
 <html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>বৃক্ষ মায়া</title>
		<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="../css/menu.css">
		<link rel="stylesheet" href="../css/animation.css">
		<link rel="stylesheet" href="../css/slider.css">
			
		<!-- Bootstrap CSS -->	
		<link href="../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<script src="../js/SUSMITA.js"></script> 
	</head>
	
	<body>
	
	<div class="content">
		<div class="animated fadeIn">	
			<div class="row">
				<div class="container-fluid">
					<div class="topbar">
						<div class="LOGO"></div>
						<div class="SiteName">বৃক্ষ মায়া</div>
						<div class="SiteSubName">The Tree Shop</div>
						<?php include 'menu.php';?>
						<?php include '../database.php';?>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<?php
				
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
											`type` = 'ORCHID' 
										ORDER BY 
											`price` 
										ASC");

			$NUM_ROWS_ALL = mysqli_num_rows($LSSDTIK);
	?>

	<div class="container">
		<div class="animated fadeIn">	
			<div class="row">

				
				<div class="col-lg-12">Total Orchid Availability <?php print $NUM_ROWS_ALL; ?></div>
				<div align="right" class="col-lg-12">Showing Lowest Price First<br><br></div>
				
				
				<?php		
					while($TIK_ARRY=mysqli_fetch_row($LSSDTIK))
					{ 
						print "<div class=\"col-lg-3\">
								<div class=\"card\">
									<div class=\"card-header\">
										<div class=\"cardTitle\">$TIK_ARRY[2]</div>
									</div>
									
									<div class=\"card-body\">
										 <div class=\"col-lg-12\">
											<div class=\"bg-white rounded shadow-sm hover-zoomin\">
												<a href=\"#\" title=\"$TIK_ARRY[2]\">
													<img src=\"../images/products/$TIK_ARRY[6]\" alt=\"\" class=\"img-fluid card-img-top\">
												</a>
											</div>
											<div align=\"right\" class=\"text-success\"><strong>$TIK_ARRY[4]</strong> in Stock </div>
											<div align=\"left\" class=\"text-success\">BDT <strong>$TIK_ARRY[5]</strong> </div>
											<div align=\"right\">Rating $TIK_ARRY[3]/5 
												<span class=\"fa fa-star rated\"></span>
												<span class=\"fa fa-star rated\"></span>
												<span class=\"fa fa-star rated\"></span>
												<span class=\"fa fa-star rated\"></span>
												<span class=\"fa fa-star rated\"></span>
											</div>
											<div class=\"col-lg-12 bg-primary okBtn\">Details</div>
											<div class=\"col-lg-12 bg-secondary okBtn\">Rate Us</div>
											<div class=\"col-lg-12 bg-success okBtn\" data-serial=\"$TIK_ARRY[0]\" onclick=\"MODAL_TRANSFFER_BUY(this)\">Buy Now</div>
										 </div>
										  
									</div>
								</div>
							</div>";
					}
				?>

			</div>
			
			<div class="clearfix"></div>
		</div>
	</div>
	
	
	
	
	
	
	
	
	
	
	<div class="footer">
		<?php include '../footer.php';?>	
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<div class="modal fade" id="BUYPLANT" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Buy Plant</h4>
            </div>
            <div class="modal-body" >
              
				<iframe id="BUY_FRAME"></iframe>
			  
            </div>
        </div>
      
    </div>
	</div>
	
	
	
	
	
	
	
    <script src="../js/jquery.min.js"></script> 
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>	
	
	
	
	
	</body>
</html>