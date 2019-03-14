<!DOCTYPE html>
	<html>
		<head>
			<title>Guest Book</title>
    <?php
        header("Content-Type: text/html; charset=gbk",true);
    ?>
			<meta name="viewport" content="width=device-width, user-scalable=no">  <!--Vu sur telephone -->
			<meta http-equiv="Content-Type" content="text/html">

			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
	    <link rel="stylesheet" type="text/css" href="style.css">
		</head>

		<body>
		    <div id="navBarre">
		      <?php
		        include '../../navBarreCh.php';
		      ?>
		    </div>

<!--*************************************** Mise en Forme ************************************-->

			<h1 align="center">Share your experiences</h1><br>
			<div>
			<div class="row">
			<img class="fond col-md-12 col-lg-6" src="livre.jpg" alt="">

			<div class="col-md-12 col-lg-6">
				<form method="post" action="livreor.php" role="form">
					<div>
						<label for="pseudo" class="col-sm-2 control-label">Pseudo :</label><br/>
						<input type="text" name="pseudo" id="pseudo" class="form-control" placeholder="Ecureuil" maxlength="50" required>
					</div>
					<div>
						<label for="email" class="col-sm-2 control-label">Email :</label></br>
						<input type="email" name="email" id="email" class="form-control" placeholder="ecureuil@gmail.com" maxlength="100" required>
					</div>
					<div>
						<label for="message" class="col-sm-2 control-label">Message :</label></br>
						<textarea name="message" rows="5" placeholder="Comment" maxlength="500" required></textarea></br>
					</div>
					<input class="bouton" type="submit" name="send" value="Send">
				</form>
		</div>
	</div>
<!--************************************ Fin mise en forme ***********************************-->
			<p class="page">
			<?php
				// Connexion avec PDO
				try {
					  $bdd = new PDO('mysql:host=sqletud.u-pem.fr;dbname=jtruon02_db;charset=utf8', 'jtruon02','5d5uypyoDw');
				}

				catch(Exception $e) {
					die("Connexion impossible à la dase de données !'.$e -> getMessage())'");
				}
//***********************************************************************************************

				// insert donnée
				if (isset($_POST['pseudo']) && isset($_POST['email']) &&isset($_POST['message'])) {

					$date = date('Y-m-d');
					$heure = date('H:i:s');

					$pseudo = htmlspecialchars($_POST['pseudo']);
					//Mesure de sécurité.
					$msg = htmlspecialchars($_POST['message']);
					//Idem
					$mail = htmlspecialchars($_POST['email']);
					//Idem
					$msg = nl2br($msg); // Remplace les entrée par des <br>

					$sql = $bdd->prepare("insert into LivreOr(pseudo, date, mail, message, heure) values (:pseudo, DATE(NOW()), :mail, :message, :heure)");
					$sql->execute(array('pseudo' => $pseudo,  'mail' => $mail, 'message' => $msg, 'heure' => $heure )); //mettre cette commande que pour les insert en SQL.
				}
				//Affiche les messages des utilisateurs.
				$retour = "select pseudo, message, date, heure from LivreOr Order by date DESC, heure DESC ";

				echo "<h1 style='text-align:center; margin-top:0px; margin-bottom:30px;'>Comment :</h1>";
				$stmt = $bdd->query($retour);
				while($row =$stmt->fetch()) {
				echo "<hr style='height:1px; background-color:rgba(255,255,255,0.1)'>";
					echo "<b><span style='color:#ea5c0d; font-size:20px; margin-left:20px;'>$row[pseudo]</b> 
					<b><i><span style='color:white'>$row[date]</i></b> at
					<b><i><span style='color:white'>$row[heure] :</i></b></br>
					<b style='font-size:18px; margin-left:20px;'>$row[message]</b></br>";
					echo "<hr style='height:1px; background-color:rgba(255,255,255,0.1)'>";
				}



			?>
		</body>

		<footer>
				<p class="m-0 text-center text-white">Copyright &copy; Shenyang - 2018</p>
		</footer>


		<script src="http://code.jquery.com/jquery-3.2.1.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>

	</html>
