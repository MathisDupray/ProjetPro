<?php
    $data=yaml_parse_file("../assets/yaml/skills.yaml");
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