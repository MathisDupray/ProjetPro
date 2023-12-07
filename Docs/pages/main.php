<?php require_once("../yaml/yaml.php"); ?>
<!doctype html>
<html lang="fr">
	<head>
		<title>Projet pro</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="./../assets/css/main.css">
	</head>
	<body>
		<header>
			<div id="navbar">
				<ul>
					<li><i class="headerlogo fa-brands fa-html5 fa-4x" style="color: #ffffff;"></i></li>
					<li><i class="headerlogo fa-brands fa-css3-alt fa-4x" style="color: #ffffff;"></i></li>
					<li><i class="headerlogo fa-brands fa-php fa-4x" style="color: #ffffff;"></i></li>
					<li><i class="headerlogo fa-solid fa-database fa-4x" style="color: #ffffff;"></i></li>
				</ul>
				<ul>
					<li><a href="#">Accueil</a></li>
					<li><a href="#About">A propos</a></li>
					<li><a href="#anchorskills">Compétences</a></li>
					<li><a href="#anchorexperience">Experience</a></li>
					<li><a href="#anchorform">Formation</a></li>
					<li><a href="#Contact">Contact</a></li>
				</ul>
			</div>
			<hr class="splitbar">
		</header>
		<div class="main">
			<div class="welcome">
				<h1>Welcome to my port-folio</h1>
				<h2>Trying to web dev</h2>
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci obcaecati reiciendis porro in modi natus error, perspiciatis et molestiae repudiandae possimus accusantium dolor unde hic provident laudantium voluptatibus. Rem, delectus!
				</p>
				<img src="./../assets/images/welcome.jpg" id="imgwelcome">
				<a href="#About"><i class="down fa-solid fa-arrow-down fa-4x" style="color: #ffffff;"></i></a>
			</div>
			<section class="about" id="About">
				<h1>About</h1>
				<p id="accroche">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi architecto, et doloremque sit cumque debitis temporibus non! Fugiat nobis eos, similique numquam odio obcaecati atque, optio libero maiores quod error?</p>
				<div class="bg">
					<p id="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur, animi nulla unde libero voluptatem suscipit nobis. Minus explicabo ipsam placeat vitae doloremque harum odit! Atque vero nesciunt nam eveniet impedit?</p>
					<img id="aboutmeimg" src="./../assets/images/aboutme.jpg">
				</div>
			</section>
			<section class="skills" id="anchorskills">
				<h1>Competences</h1>
				<div class="tables">
					<?php
						$data=my_yaml_parse_file("../assets/yaml/skills.yaml");
						//print_array($data);
						foreach($data AS $domaine){
							echo "<div class='domaine'><h2>".$domaine['domaine']."</h2>\n";
							foreach($domaine["competences"] AS $competence=> $niveau){
								echo "<p>".$competence;
								$star = "solid";
								for($i=1; $i < 6 ;$i++){
									echo ' <img src="../assets/images/star-'.$star.'.svg" class="star">';
									if($i >= $niveau){
										$star ="regular";
									}
								}
								echo "</p>\n";
							}
							echo "</div>";
						}
					?>
				</div>
			</section>
			<section class="experiences" id="anchorexperience">
				<h1>Job experiences</h1>
					<div class="job_wrapper" style="display:flex;">
					  	<?php
							$data=my_yaml_parse_file("../assets/yaml/jobs.yaml");
							// print_array($data);
							//print_array($data["job_desc"]);
							foreach($data AS $jobs){
								$imgsrc= $jobs["jobID"];
								echo '<div class="flip-card" style="padding:2vh;"><div class="flip-card-inner"><div class="flip-card-front"><img src="./../assets/images/logojob'.$imgsrc.'.png" id="styleimg'.$imgsrc.'" style="border:2px solid black;"></div><div class="flip-card-back">';
								echo "<p>".$jobs["poste"]."</p>\n";
								echo "<p>".$jobs["entreprise"]."</p>\n";
								echo "<p>".$jobs["dateStart"]."</p>\n";
								echo "<p>".$jobs["dateEnd"]."</p>\n";
								echo "<p>".$jobs["do_what"]."</p>\n";
								echo '</div></div></div>';
							}
						?>
					</div>
			</section>
			<section class="Formation" id="anchorform">
				<h1>Formation</h1>
					<?php
					$data=my_yaml_parse_file("../assets/yaml/formation.yaml");
					$compteur_div=0;
					$position=array("gauche", "droite");
					foreach($data AS $formation){
						$item_compteur_row = $compteur_div + 1;
						echo '<div class="formationitem'.$position[$compteur_div].'">';
						echo "<h3>".$formation["formation"]."</h3>\n";
						echo "<p>".$formation["date"]."</p>\n";
						echo "<p>".$formation["etab"]."</p>\n";
						echo "<p>".$formation["where"]."</p>\n";
						echo "<p>".$formation["mention"]."</p>\n";
						echo "</div>";
						$compteur_div=($compteur_div+1)%2;
					}
					?>
				
			</section>
			<section id="Contact">
				<h1>Contact</h1>
				<p>future php form</p>
				<p>Passer par un serveur SMTP 
					> utiliser l'adresse sts-sio relais SMTP
					google smtp serveur
					essayer les 2 ports 587 et 465
					fct mail de php, php.ini 
					integrer une librairie : captcha, PHPMailer
					Utiliser composer : gestionnaire de dépendendances

				</p>
				<?php
					include_once './../vendor/autoload.php';
					use PHPMailer\PHPMailer\PHPMailer;
					$mail = new PHPMailer();
				?>
			</section>
		<script src="https://kit.fontawesome.com/c9930ba331.js" crossorigin="anonymous"></script>
	</body>
</html>
