<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="main_container">
		<div class="headline">
			<h1>Crypto Masters</h1>
			<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab corporis voluptatum sint dolore nam voluptatibus, voluptate dicta odit. Nemo similique perspiciatis neque qui quos corporis natus libero in eaque pariatur.</p>
		</div>
		<div class="form_container">
			<form method="get" action="index.php">
				<input type="number" name="montant" class="input1">
				<select name="crypto" class="input1">
					<option value="ETH">ETH</option>
					<option valure="BTC">BTC</option>
				</select>
				<div><button id="sub_butt" class="shadow__btn" type="submit">Convertir</button></div> 
			</form>
		</div>
	</div>
	

	<?php
        
        if(isset($_GET['montant']) && isset($_GET['crypto'])){
            $montant    = $_GET['montant'];
            $crypto     = $_GET['crypto'];
            $url ="https://cex.io/api/ticker/$crypto/EUR";
            $json = file_get_contents($url);
            $data = json_decode($json,true);
            $montantConverti = $montant  * $data['last'];
            echo ''.$montantConverti.''.$crypto.'';
        }

    ?>
</body>
</html>