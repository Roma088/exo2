<?php
    $isLogged = true;
    $title = "Silence On Lit à l'E2C";
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

    if($isLogged) {
        $navButtons[]= [
            "label" => "Mon compte",
            "path"  => "../controller/accountController.php"
        ];
    }
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



    <main>
        <article>
        <p>L'intérêt de mettre en place "Silence, on lit !" dans les <a href="https://reseau-e2c.fr/" target="_blank">Écoles de la 2e Chances</a>

        L’introduction du projet "Silence, on lit !" dans les Écoles de la 2e Chance (E2C) revêt une grande importance tant pour le développement personnel des jeunes que pour leur insertion professionnelle future. Ce programme, centré sur la lecture silencieuse, vise à répondre aux besoins spécifiques d'un public souvent en difficulté scolaire, tout en offrant un moment d'évasion, de réflexion et de partage. Son intégration dans l'E2C constitue un levier essentiel pour aider ces jeunes à surmonter les obstacles rencontrés dans leur parcours éducatif et professionnel.</p> 

        <hr>
            <ul>
                <li>  <strong>Améliorer les compétences en langue écrite et orale</strong> <br>

                L’un des objectifs majeurs du projet "Silence, on lit !" est de renforcer la maîtrise de la langue. Beaucoup de jeunes accueillis dans les E2C n'ont pas acquis une maîtrise solide de la lecture et de l'écriture, ce qui représente un frein majeur dans leur parcours. En offrant un espace dédié à la lecture, l'E2C permet de travailler de manière progressive et ciblée la compréhension écrite, la fluidité de lecture et l’enrichissement du vocabulaire. Par la suite, des échanges sur les livres lus permettent d’améliorer également l’expression orale, ce qui constitue un atout essentiel pour leur avenir professionnel, où la communication claire et efficace est primordiale.</li>
                <br>
                <li> <strong>Renforcer la concentration et la discipline personnelle</strong> <br>

                La lecture silencieuse demande de la concentration, de l’autodiscipline et de la patience. Dans un environnement parfois bruyant et distrayant, ces moments de calme sont essentiels pour aider les jeunes à développer ces qualités. À travers la régularité des séances de lecture, les jeunes apprennent à se concentrer sur une tâche et à respecter un cadre structuré. Ce type de discipline, qui s’acquiert petit à petit, est directement transférable à d’autres domaines de leur vie, notamment dans un contexte professionnel où l’attention et la rigueur sont souvent requises.</li>
                    <br>
                <li> <strong>Stimuler l’imaginaire et la curiosité intellectuelle</strong> <br>

                La lecture, au-delà de ses bienfaits cognitifs, permet aussi de nourrir l’imaginaire et d’éveiller la curiosité. Pour beaucoup de jeunes, la lecture est une porte d’accès à d’autres réalités, à des histoires fascinantes et à des idées nouvelles. Cela leur permet de s’évader et d’ouvrir leur esprit à des univers différents. Ce développement personnel par la lecture peut également engendrer un intérêt pour d’autres formes de savoir et encourager les jeunes à poursuivre une formation ou à s’engager dans des projets professionnels qu’ils n’auraient peut-être pas envisagés auparavant.</li>
            </ul>
        </article>
        <div id="image">
            <h2>ok</h2>
        </div>
        
        <article>
        <p>L'intérêt de mettre en place "Silence, on lit !" dans les <a href="https://reseau-e2c.fr/" target="_blank">Écoles de la 2e Chances</a>

        L’introduction du projet "Silence, on lit !" dans les Écoles de la 2e Chance (E2C) revêt une grande importance tant pour le développement personnel des jeunes que pour leur insertion professionnelle future. Ce programme, centré sur la lecture silencieuse, vise à répondre aux besoins spécifiques d'un public souvent en difficulté scolaire, tout en offrant un moment d'évasion, de réflexion et de partage. Son intégration dans l'E2C constitue un levier essentiel pour aider ces jeunes à surmonter les obstacles rencontrés dans leur parcours éducatif et professionnel.</p> 

        <hr>
            <ul>
                <li>  <strong>Améliorer les compétences en langue écrite et orale</strong> <br>

                L’un des objectifs majeurs du projet "Silence, on lit !" est de renforcer la maîtrise de la langue. Beaucoup de jeunes accueillis dans les E2C n'ont pas acquis une maîtrise solide de la lecture et de l'écriture, ce qui représente un frein majeur dans leur parcours. En offrant un espace dédié à la lecture, l'E2C permet de travailler de manière progressive et ciblée la compréhension écrite, la fluidité de lecture et l’enrichissement du vocabulaire. Par la suite, des échanges sur les livres lus permettent d’améliorer également l’expression orale, ce qui constitue un atout essentiel pour leur avenir professionnel, où la communication claire et efficace est primordiale.</li>
                <br>
                <li> <strong>Renforcer la concentration et la discipline personnelle</strong> <br>

                La lecture silencieuse demande de la concentration, de l’autodiscipline et de la patience. Dans un environnement parfois bruyant et distrayant, ces moments de calme sont essentiels pour aider les jeunes à développer ces qualités. À travers la régularité des séances de lecture, les jeunes apprennent à se concentrer sur une tâche et à respecter un cadre structuré. Ce type de discipline, qui s’acquiert petit à petit, est directement transférable à d’autres domaines de leur vie, notamment dans un contexte professionnel où l’attention et la rigueur sont souvent requises.</li>
                    <br>
                <li> <strong>Stimuler l’imaginaire et la curiosité intellectuelle</strong> <br>

                La lecture, au-delà de ses bienfaits cognitifs, permet aussi de nourrir l’imaginaire et d’éveiller la curiosité. Pour beaucoup de jeunes, la lecture est une porte d’accès à d’autres réalités, à des histoires fascinantes et à des idées nouvelles. Cela leur permet de s’évader et d’ouvrir leur esprit à des univers différents. Ce développement personnel par la lecture peut également engendrer un intérêt pour d’autres formes de savoir et encourager les jeunes à poursuivre une formation ou à s’engager dans des projets professionnels qu’ils n’auraient peut-être pas envisagés auparavant.</li>
            </ul>
        </article>
    </main>

    </body>
    <div id="trigger"></div>

</html>