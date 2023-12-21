<?php
    $data = yaml_parse_file("../assets/data/accueil.yaml");
    foreach ($data as $ligne){
        echo "<section class='welcome'>";
        echo "<h1>".$ligne["titre"].$ligne["qui"]."</h1>";
        echo "<h2>".$ligne["accroche"]."</h2>";
        echo "<p>".$ligne["desc"]."</p>";
        echo "<img src='".$ligne["imgwelcome"]."' id='imgwelcome' alt='#'>";
        echo "<a href='#About'><i class='downarrow fa-solid fa-arrow-down fa-4x' style='color: #ffffff;'></i></a>";
        echo "</section>";
    }
?>