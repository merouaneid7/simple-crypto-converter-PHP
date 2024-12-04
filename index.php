<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Crypto Masters</title>
	<link rel="stylesheet" href="style.css">
	<link rel="icon" href="img\cryptocurrency.png">
</head>
<body>
	<div class="main_container">
		<div class="headline">
			<div class="headline_div">
				<img src="img\cryptocurrency.png" alt="crypto_img" id="headline_img">
				<h1>Crypto Masters</h1>
			</div>
			<p>This is a very simple Crypto (ETH and BTC) to EURO converter.</p>
		</div>
		<div class="form_container">
			<form method="get" action="index.php">
				<input type="number" name="montant" class="input1" placeholder="How Much Crypto ?">
				<select name="crypto" class="input1">
					<option value="ETH">ETH</option>
					<option valure="BTC">BTC</option>
				</select>
				<div>
					<button id="sub_butt" class="shadow__btn" type="submit">Convertir</button>
					
				</div> 
			</form>
			
		</div>
		<div class="output_div">
			<h3>
				
				<?php 
				if(isset($_GET['montant']) && isset($_GET['crypto'])){
					$montant    = $_GET['montant'];
					$crypto     = $_GET['crypto'];
					$url ="https://cex.io/api/ticker/$crypto/EUR";
					$json = file_get_contents($url);
					$data = json_decode($json,true);
					$montantConverti = $montant  * $data['last'];
					echo "{$montant} {$crypto} equals to {$montantConverti} Euro";
				}
				else{
					echo "You will see the result here";
				}

				?>
			</h1>
		</div>
	</div>
	


</body>
</html>
