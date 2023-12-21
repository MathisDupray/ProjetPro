<?php
    $data = yaml_parse_file("../assets/data/accueil.yaml");
    foreach ($data as $ligne){
        echo "<section class='welcome'>";
        echo "<h1>".$ligne["titre"].$ligne["qui"]."</h1>";
        echo "<h2>".$ligne["accroche"]."</h2>";
        echo "<p>".$ligne["desc"]."</p>";
        echo "<img src='".$ligne["imgwelcome"]."' id='imgwelcome' alt='#'>";
        echo "</section>";
    }
?>