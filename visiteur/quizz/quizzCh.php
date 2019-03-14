<!DOCTYPE html>
<html>
<head>
	<title>Quizz</title>
    <?php
        header("Content-Type: text/html; charset=gbk",true);
    ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
	<div id="navBarre">
		<?php
		  include '../../navBarreCh.php';
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
				echo "<br/><h1>The answers are : </h1>";
				echo "<br/>Question 1 : Shenyang was first known as: Houcheng";

				if ($q1 == "Houcheng") {
					echo ' <img style="height:30px;" alt="" src="good.png"> ';
					$score++;
				}
				else {
					echo ' <img style="height:30px;" alt="" src="wrong.png"> ';
				}



				echo "<br/>Question 2 : Shenyang was the capital of China: true";

				if ($q2 == "vrai") {
					echo ' <img style="height:30px;" alt="" src="good.png"> ';
					$score++;
				}
				else {
					echo ' <img style="height:30px;" alt="" src="wrong.png"> ';
				}



				echo "<br/>Question 3 : Nurhachi is the founding father of: Qing Dynasty";

				if ($q3 == "qing") {
					echo ' <img style="height:30px;" alt="" src="good.png"> ';
					$score++;
				}
				else {
					echo ' <img style="height:30px;" alt="" src="wrong.png"> ';
				}



				echo "<br/>Question 4 : The construction of the imperial palace begins in: 1625";

				if ($q4 == "1625") {
					echo ' <img style="height:30px;" alt="" src="good.png"> ';
					$score++;
				}
				else {
					echo ' <img style="height:30px;" alt="" src="wrong.png"> ';
				}



				echo "<br/>Question 5 : In 1900, Russia seizes Shenyang taking advantage of: the revolt of the boxers";

				if ($q5 == "revolte") {
					echo ' <img style="height:30px;" alt="" src="good.png"> ';
					$score++;
				}
				else {
					echo ' <img style="height:30px;" alt="" src="wrong.png"> ';
				}



				echo "<br/>Question 6 : 1911, the Chinese revolution (xinhai) puts an end to the Qing dynasty. <br/> Shenyang becomes: the seat of the Manchu warlords";

				if ($q6 == "guerre") {
					echo ' <img style="height:30px;" alt="" src="good.png"> ';
					$score++;
				}
				else {
					echo ' <img style="height:30px;" alt="" src="wrong.png"> ';
				}



				echo "<br/>Question 7 : Shenyang is definitely named Shenyang in: 1929";

				if ($q7 == "1929") {
					echo ' <img style="height:30px;" alt="" src="good.png"> ';
					$score++;
				}
				else {
					echo ' <img style="height:30px;" alt="" src="wrong.png"> ';
				}



				echo "<br/>Question 8 : The first stock market in China is born in: Shenyang";

				if ($q8 == "shenyang") {
					echo ' <img style="height:30px;" alt="" src="good.png"> ';
					$score++;
				}
				else {
					echo ' <img style="height:30px;" alt="" src="wrong.png"> ';
				}

				echo "<br/><br/>You have achieved a score of : ".$score." / 8";

				if($score == 8){
					echo "<h2>Perfect ! The history of Shenyang has no secrets for you.</h2>";
				}
				else if($score>5){
					echo "<h2>Nice score ! But some details escaped you.</h2>";
				}
				else if($score>3){
					echo "<h2>Just average. You were lucky, were not you ?</h2>";
				}
				else if($score>1){
					echo "<h2>Not terrible</h2>";
				}
				else{
					echo "<h2>Have you consulted the story section ?</h2>";
				}

				echo "<br/>Come rediscover our page dedicated to the history of Shenyang : <br/>
				<a href='http://perso-etudiant.u-pem.fr/~jmayeux/histoire/histoireEn.php'>History of Shenyang</a>";
			}

		?>

		<br/>
		<br/>
		<br/>

		<h1>Quizz Shenyang</h1>

		<br/><br/><h3>Q1. Shenyang was first know as : </h3>
		<input id="benjing" type="radio" name="q1" value="Benjing"> 
		<label for="benjing">Benjing</label> <br/>
		<input id="houcheng" type="radio" name="q1" value="Houcheng">
		<label for="houcheng">Houcheng</label><br/>
		<input id="jin" type="radio" name="q1" value="Jinzhou"> 
		<label for="jin">Jinzhou</label>


		<br/><br/><h3>Q2. Shenyang was the capital of China : </h3>
		<input id="vrai" type="radio" name="q2" value="vrai"> 
		<label for="vrai">True</label><br/>
		<input id="faux" type="radio" name="q2" value="faux"> 
		<label for="faux">False</label>


		<br/><br/><h3>Q3. Nurhachi is the founding father of : </h3>
		<input id="ming" type="radio" name="q3" value="ming"> 		
		<label for="ming"> the Ming Dynasty</label><br/>
		<input id="shang" type="radio" name="q3" value="shang">
		<label for="shang"> the Shang Dynasty</label><br/>
		<input id="qing" type="radio" name="q3" value="qing">
		<label for="qing"> the Qing Dynasty</label>


		<br/><br/><h3>Q4. The construction of the imperial palace begins in : </h3>
		<input id="1625" type="radio" name="q4" value="1625"> 
		<label for="1625">1625</label> <br/>
		<input id="1725" type="radio" name="q4" value="1725"> 
		<label for="1725">1725</label> <br/>
		<input id="1825" type="radio" name="q4" value="1825"> 
		<label for="1825">1825</label>


		<br/><br/><h3>Q5. In 1900, Russia seized Shenyang taking advantage of : </h3>
		<input id="greve" type="radio" name="q5" value="greve">
		<label for="grev"> the strike</label> <br/>
		<input id="revolte" type="radio" name="q5" value="revolte">
		<label for="revolte"> the revolt of the boxers</label> <br/>
		<input id="potion" type="radio" name="q5" value="potion">
		<label for="potion"> the magic potion </label>


		<br/><br/><h3>Q6. 1911, the Chinese revolution (xinhai) puts an end to the Qing dynasty.<br/>
		Shenyang becomes : </h3>
		<input id="guerre" type="radio" name="q6" value="guerre">
		<label for="guerre"> the headquarters of the Manchu warlords</label><br/>
		<input id="abandonne" type="radio" name="q6" value="abandonne">
		<label for="abandonne"> an abandoned place </label><br/>
		<input id="democratie" type="radio" name="q6" value="democratie">
		<label for="democratie">the capital of curry noodles</label>


		<br/><br/><h3>Q7. Shenyang is definitely named Shenyang in : </h3>
		<input id="1918" type="radio" name="q7" value="1918">
		<label for="1918"> 1918</label> <br/>
		<input id="1929" type="radio" name="q7" value="1929">
		<label for="1929"> 1929</label> <br/>
		<input id="2016" type="radio" name="q7" value="2016">
		<label for="2016"> 2016</label>


		<br/><br/><h3>Q8. The first stock market in China is born : </h3>
		<input id="shenyang" type="radio" name="q8" value="shenyang">
		<label for="shenyang">Shenyang</label> <br/>
		<input id="pekin" type="radio" name="q8" value="pekin">
		<label for="pekin">Pekin</label> 


		<br/>
		<br/>
		<br/>
		<input id="valider" type="submit" name="submit" value="Validate">

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