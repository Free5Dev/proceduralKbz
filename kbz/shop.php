<?php 
	//connexion à la bdd
	require_once("connexion.inc.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<!-- <link rel="icon" type="image/png" href="favicon.png" /> -->
		<link rel="stylesheet" type="text/css" href="kbzTv.css">
		<link href="https://fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
		<!-- <link rel="stylesheet" type="text/css" href="kbzTv.css"/> -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php include('entete.inc.php'); ?>
		<?php include('menu.inc.php'); ?>
		<section id="kbzTv">
			<div class="container kbzTvContainer">
				<h1><span class="text-danger">K.B.Z</span> <img src="images/shopping-cart.png"> La joie de commander les produits <span class="text-danger">K.B.Z</span> ...Krah Krah  <img src="images/laughing.png" alt=""> <img src="images/laughing.png" alt=""> <img src="images/laughing.png" alt=""></h1>
				<div class="kbzShop" style=" line-height: 500px; background-color: #fff;">
					<div class="row" style="padding: 5px; display: flex;justify-content: center; align-items: center;">
						<div class="col-md-3 col-sm-12 itemShop" style="border:1px solid rgb(51,51,51); height: 400px; margin: 5px; display: flex;align-items: flex-end;">
							<button class="btn btn-info btn-block btn-outline-warning" style="margin-bottom: 5px;:">Commander</button>
						</div>
						<div class="col-md-3 col-sm-12 itemShop" style="border:1px solid rgb(51,51,51); height: 400px;  margin: 5px; display: flex;align-items: flex-end;">
							<button class="btn btn-info btn-block btn-outline-warning" style="margin-bottom: 5px;:">Commander</button>
						</div>
						<div class="col-md-3 col-sm-12 itemShop" style="border:1px solid rgb(51,51,51); height: 400px;  margin: 5px; display: flex;align-items: flex-end;">
							<button class="btn btn-info btn-block btn-outline-warning" style="margin-bottom: 5px;:">Commander</button>
						</div>
					</div>
				</div>


				
			</div>
		</section>
	</body>
</html>