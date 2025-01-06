<?php
    $title = "Faites votre choix";
    $subtitle = "Lire c'est bien";

    $navButtons = [
        [
            "label" => "Accueil", 
            "path" => "../controller/homeController.php"
        ],
        [
            "label" => "Bibliothèque", 
            "path" => "../controller/libraryController.php"
        ],
        [
            "label" => "Espace détente", 
            "path" => "../controller/gameController.php"
        ],
        [
            "label" => "Qui sommes-nous ?", 
            "path" => "../controller/usController.php"
        ]
    ];
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <script type="module" src="../JS/nav.js"></script>
    <title>Livre</title>
</head>
<body>
    
<?php
    require_once("../module/_header.php");
    require_once("../module/_nav.php")
    ?>


<div id="trigger"></div>



    </body>
</html>