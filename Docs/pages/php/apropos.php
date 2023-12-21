<?php
    $data = yaml_parse_file("../assets/data/apropos.yaml");
    foreach ($data as $ligne){
        echo "<h1>".$ligne["titre"]."</h1>";
        echo "<p id='accroche'>".$ligne["accroche"]."</p>";
        echo "<div class='bg'>";
        echo "<p class='text'>".$ligne["text"]."</br>"."<a href='#'>"."Mon CV</a></br>";
        echo "".$ligne["text2"]."</p>";
        echo "<span id='about_textgit'><p class='text'>".$ligne["text3"]."</p>";
        echo "<a href='".$ligne["lien"]."'>";
        echo "<img src='".$ligne["lienimage"]."' id='gitlogo' alt='Github'></a></span>";
        echo "<img src='".$ligne["aboutmeimg"]."' alt='#' id='aboutmeimg'></div>";
    }
?>