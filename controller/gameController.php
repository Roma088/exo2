<?php
    $title = "Des Jeux";
    $subtitle = "Pour se muscler l'Esprit";
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
    <script type="module" src="../JS/test.js"></script>
    <script type="module" src="../JS/nav.js"></script>
    <title>Livre</title>
</head>
<body>
    
<?php
    require_once("../module/_header.php");
    require_once("../module/_nav.php")
    ?>

    <main>
        <p id="result"></p>

        <div>
            <label for="number1">Premier nombre</label>
            <input type="number" name="number1" id="number1">
        </div>

        <div>
            <label for="number2">Deuxième nombre</label>
            <input type="number" name="number2" id="number2">
        </div>

        <div>
            <input type="submit" value="Calculer" id="calculate">
        </div>
    </main>

    <div id="trigger"></div>

    </body>
</html>