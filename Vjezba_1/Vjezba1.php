<!DOCTYPE html> 
<html lang="hr">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="DaVincijev kod">
        <meta name="keywords" content="DaVincijev kod, Dan Brown, knjiga">
        <meta name="author" content="Lovro Matijaković">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DaVincijev kod</title>

    <body>
        <?php
            $title = "DaVincijev kod";
            $link = "https://hr.wikipedia.org/wiki/DaVincijev_kod";
            echo "<h1>$title</h1>";
            echo "<p>$title je kriminalistički triler američkog pisca Dana Browna.</p>";
            echo "<a href = $link target = '_blank' >Više o knjizi</a>";
            // Komentar je ime domuneta tj. Vjezba1.php

            echo "<pre>";
            echo "Naslov: \t $title\n";
            echo "Autor: \t Dan Brown\n";
            echo "Žanr: \t kriminalistički triler\n";
            echo "</pre>";
        ?>
    </body>
</html>