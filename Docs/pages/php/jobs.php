<?php
	$data=yaml_parse_file("../assets/data/jobs.yaml");
	echo "<h1>Expériences professionnelles</h1>";
	echo "<div class='job_wrapper'>";
	foreach($data AS $jobs){
		$imgsrc= $jobs["jobID"];
		echo "<div class='flip-card'><div class='flip-card-inner'><div class='flip-card-front'><img src='./../assets/images/logojob".$imgsrc.".png' id='styleimg".$imgsrc."' style='border:2px solid black;' alt='#'></div><div class='flip-card-back'>";
		echo "<p>".$jobs["poste"]."</p>\n";
		echo "<p>".$jobs["entreprise"]."</p>\n";
		echo "<p>".$jobs["dateStart"]."</p>\n";
		echo "<p>".$jobs["dateEnd"]."</p>\n";
		echo "<p>".$jobs["do_what"]."</p>\n";
		echo '</div></div></div>';
	}
	echo "</div>";
?>