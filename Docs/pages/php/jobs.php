<?php
	$data=yaml_parse_file("../assets/yaml/jobs.yaml");
	foreach($data AS $jobs){
		$imgsrc= $jobs["jobID"];
		echo '<div class="flip-card"><div class="flip-card-inner"><div class="flip-card-front"><img src="./../assets/images/logojob'.$imgsrc.'.png" id="styleimg'.$imgsrc.'" style="border:2px solid black;"></div><div class="flip-card-back">';
		echo "<p>".$jobs["poste"]."</p>\n";
		echo "<p>".$jobs["entreprise"]."</p>\n";
		echo "<p>".$jobs["dateStart"]."</p>\n";
		echo "<p>".$jobs["dateEnd"]."</p>\n";
		echo "<p>".$jobs["do_what"]."</p>\n";
		echo '</div></div></div>';
	}
?>