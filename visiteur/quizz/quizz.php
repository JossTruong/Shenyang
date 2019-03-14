<!DOCTYPE html>
<html>
<head>
	<title>Quizz</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
    <div id="navBarre">
    	<?php
		  include '../../navBarreFr.php';
		?>
    </div>


	<form method="POST" action="">

<?php
			$q1 = isset($_POST['q1']) && isset($_POST) ? $_POST['q1'] : "faux";
			$q2 = isset($_POST['q2']) && isset($_POST) ? $_POST['q2'] : "faux";
			$q3 = isset($_POST['q3']) && isset($_POST) ? $_POST['q3'] : "faux";
			$q4 = isset($_POST['q4']) && isset($_POST) ? $_POST['q4'] : "faux";
			$q5 = isset($_POST['q5']) && isset($_POST) ? $_POST['q5'] : "faux";
			$q6 = isset($_POST['q6']) && isset($_POST) ? $_POST['q6'] : "faux";
			$q7 = isset($_POST['q7']) && isset($_POST) ? $_POST['q7'] : "faux";
			$q8 = isset($_POST['q8']) && isset($_POST) ? $_POST['q8'] : "faux";

			if (isset($_POST['submit'])) {
				$score = 0;
				$repQ1 = "Houcheng";
				echo "<br/><h1>Les Réponses sont : </h1>";
				echo "<br/>Question 1 : Shenyang fut d'abord connu sous le nom de : Houcheng";

				if ($q1 == "Houcheng") {
					echo ' <img style="height:30px;" alt="" src="good.png"> ';
					$score++;
				}
				else {
					echo ' <img style="height:30px;" alt="" src="wrong.png"> ';
				}



				echo "<br/>Question 2 : Shenyang fut la capital de la Chine : vrai";

				if ($q2 == "vrai") {
					echo ' <img style="height:30px;" alt="" src="good.png"> ';
					$score++;
				}
				else {
					echo ' <img style="height:30px;" alt="" src="wrong.png"> ';
				}



				echo "<br/>Question 3 : Nurhachi est le père fondateur de : la dynastie Qing";

				if ($q3 == "qing") {
					echo ' <img style="height:30px;" alt="" src="good.png"> ';
					$score++;
				}
				else {
					echo ' <img style="height:30px;" alt="" src="wrong.png"> ';
				}



				echo "<br/>Question 4 : La construction du palais impérial commence en : 1625";

				if ($q4 == "1625") {
					echo ' <img style="height:30px;" alt="" src="good.png"> ';
					$score++;
				}
				else {
					echo ' <img style="height:30px;" alt="" src="wrong.png"> ';
				}



				echo "<br/>Question 5 : En 1900, la Russie s'empare de Shenyang en profitant de : la révolte des boxers";

				if ($q5 == "revolte") {
					echo ' <img style="height:30px;" alt="" src="good.png"> ';
					$score++;
				}
				else {
					echo ' <img style="height:30px;" alt="" src="wrong.png"> ';
				}



				echo "<br/>Question 6 : 1911, la révolution chinoise (xinhai) met fin à la dynastie Qing.<br/>Shenyang devient : le siège des seigneurs de guerre Mandchous";

				if ($q6 == "guerre") {
					echo ' <img style="height:30px;" alt="" src="good.png"> ';
					$score++;
				}
				else {
					echo ' <img style="height:30px;" alt="" src="wrong.png"> ';
				}



				echo "<br/>Question 7 : Shenyang est définitivement nommée Shenyang en : 1929";

				if ($q7 == "1929") {
					echo ' <img style="height:30px;" alt="" src="good.png"> ';
					$score++;
				}
				else {
					echo ' <img style="height:30px;" alt="" src="wrong.png"> ';
				}



				echo "<br/>Question 8 : La première place boursière de Chine voit le jour à : Shenyang";

				if ($q8 == "shenyang") {
					echo ' <img style="height:30px;" alt="" src="good.png"> ';
					$score++;
				}
				else {
					echo ' <img style="height:30px;" alt="" src="wrong.png"> ';
				}

				echo "<br/><br/><br/>Vous avez réalisez un score de  : ".$score." / 8";

				if ($score == 8) {
					echo "<h2>Parfait ! L'histoire de Shenyang n'a plus de secret pour vous.</h2>";
				}
				else if($score>5){
					echo "<h2>Super score ! Mais quelques détails vous ont échappé.</h2>";
				}
				else if($score>3){
					echo "<h2>Tout juste la moyenne. Vous avez eu de la chance, n'est ce pas ?</h2>";
				}
				else if($score>1){
					echo "<h2>Pas terrible.</h2>";
				}
				else{
					echo "<h2>Avez vous consulté la partie histoire ?</h2>";
				}

				echo "<br/>Venez redécouvrir notre page dédié à l'histoire de Shenyang : <br/>
				<a href='http://perso-etudiant.u-pem.fr/~jmayeux/histoire/histoire.php'>Histoire de Shenyang</a>";
			}

		?>
		<br/>
		<br/>
		<br/>

		<h1>Quizz Shenyang</h1>

		<br/><br/><h3>Q1. Shenyang fut d'abord connu sous le nom de : </h3>
		<input id="benjing" type="radio" name="q1" value="Benjing"> 
		<label for="benjing">Benjing</label> <br/>
		<input id="houcheng" type="radio" name="q1" value="Houcheng">
		<label for="houcheng">Houcheng</label><br/>
		<input id="jin" type="radio" name="q1" value="Jinzhou"> 
		<label for="jin">Jinzhou</label>


		<br/><br/><h3>Q2. Shenyang fut la capital de la Chine : </h3>
		<input id="vrai" type="radio" name="q2" value="vrai"> 
		<label for="vrai">Vrai</label><br/>
		<input id="faux" type="radio" name="q2" value="faux"> 
		<label for="faux">Faux</label>


		<br/><br/><h3>Q3. Nurhachi est le père fondateur de : </h3>
		<input id="ming" type="radio" name="q3" value="ming"> 		
		<label for="ming"> la dynastie Ming</label><br/>
		<input id="shang" type="radio" name="q3" value="shang">
		<label for="shang"> la dynastie Shang </label><br/>
		<input id="qing" type="radio" name="q3" value="qing">
		<label for="qing"> la dynastie Qing</label>


		<br/><br/><h3>Q4. La construction du palais impérial commence en : </h3>
		<input id="1625" type="radio" name="q4" value="1625"> 
		<label for="1625">1625</label> <br/>
		<input id="1725" type="radio" name="q4" value="1725"> 
		<label for="1725">1725</label> <br/>
		<input id="1825" type="radio" name="q4" value="1825"> 
		<label for="1825">1825</label>


		<br/><br/><h3>Q5. En 1900, la Russie s'empare de Shenyang en profitant de : </h3>
		<input id="greve" type="radio" name="q5" value="greve">
		<label for="grev"> la grève</label> <br/>
		<input id="revolte" type="radio" name="q5" value="revolte">
		<label for="revolte"> la révolte des boxers</label> <br/>
		<input id="potion" type="radio" name="q5" value="potion">
		<label for="potion"> la potion magique </label>


		<br/><br/><h3>Q6. 1911, la révolution chinoise (xinhai) met fin à la dynastie Qing.<br/>
		Shenyang devient : </h3>
		<input id="guerre" type="radio" name="q6" value="guerre">
		<label for="guerre"> le siège des seigneurs de guerre Mandchous</label><br/>
		<input id="abandonne" type="radio" name="q6" value="abandonne">
		<label for="abandonne"> un endroit abandonné </label><br/>
		<input id="democratie" type="radio" name="q6" value="democratie">
		<label for="democratie"> la capitale des nouilles au curry</label>


		<br/><br/><h3>Q7. Shenyang est définitivement nommée Shenyang en : </h3>
		<input id="1918" type="radio" name="q7" value="1918">
		<label for="1918"> 1918</label> <br/>
		<input id="1929" type="radio" name="q7" value="1929">
		<label for="1929"> 1929</label> <br/>
		<input id="2016" type="radio" name="q7" value="2016">
		<label for="2016"> 2016</label>


		<br/><br/><h3>Q8. La première place boursière de Chine voit le jour à : </h3>
		<input id="shenyang" type="radio" name="q8" value="shenyang">
		<label for="shenyang">Shenyang</label> <br/>
		<input id="pekin" type="radio" name="q8" value="pekin">
		<label for="pekin">Pékin</label>


		<br/>
		<br/>
		<br/>
		<input id="valider" type="submit" name="submit" value="Valider">

		<br/>
		<br/>

		

	</form>

</body>
    <footer>
        <p class="m-0 text-center text-white"> &copy; - Shenyang - 2018</p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>

</html>