<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Bougeons Ensemble</title>
    <style>
      body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    color: white;
}

header {
    background-color: red;
    text-align: center;
    padding: 20px;
}

.about, .vision, .cells {
    width: 80%;
    margin: auto;
    padding: 30px 0;
}

h2 {
    color: red;
}

footer {
    background-color: black;
    color: white;
    text-align: center;
    padding: 10px;
    position: fixed;
    bottom: 0;
    width: 100%;
}

/* Ajout de styles pour les liens */
a {
    color: red;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
    color: black;
}

/* Style pour les listes à puces */
ul {
    list-style: none;
    padding: 0;
}

ul li {
    margin-bottom: 10px;
}

    </style>
</head>
<body>
    <?php include "header.html" ?>

    <header>
        <h1>Bougeons Ensemble</h1>
    </header>

    <section class="about">
        <h2>A PROPOS DE BOUGEONS ENSEMBLE</h2>
        <p>
            Nous sommes un club à but non lucratif.
            Bougeons Ensemble est un club humanitaire universitaire, fondé le 12/10/2018 par des jeunes étudiants de la Faculté des Sciences et Techniques de Tanger, qui ont eu l'idée de créer un nouveau concept. Ce club humanitaire et charitable rassemble des personnes qui agissent pour un intérêt collectif, attentif aux besoins de la société. Son objectif est de soutenir l'idée de faire du bénévolat en tant que mode de vie, ceci à travers des actions et des activités associatives dont le but est la distribution d'un bénéfice aux personnes souffrant de difficultés.
        </p>
    </section>

    <section class="vision">
        <h2>NOTRE VISION</h2>
        <p>
            Notre objectif est de perturber l'espace de conception.
            Le club compte à contribuer de manière significative au bien-être des membres les plus vulnérables de notre société. Nous avons choisi des domaines clés sur lesquels nous nous concentrons pour atteindre cet objectif, comme tout d'abord forer des puits, nourrir les pauvres et mener des activités culturelles qui nous aideront à récupérer des fonds. Nous répartissons également nos contributions dans le domaine de la santé, en organisant des journées de don du sang pour sensibiliser les personnes de son importance. Nous sommes déterminés à faire une différence par le biais de notre travail caritatif et nous voulons être le catalyseur dont le monde a besoin pour s'améliorer.
        </p>
    </section>

    <section class="cells">
        <h2>NOS CELLULES</h2>
        <p>
            Bougeons ensemble est un club composé de 4 cellules.
            <ul>
                <li><strong>Cellule Media:</strong> responsable de la création de contenu qui informe les gens sur le travail que le club réalise et sensibilise aux enjeux sociaux importants.</li>
                <li><strong>Cellule Design:</strong> responsable de développer des solutions créatives aux problèmes, comme la conception de logos ou la création de supports visuels pour les projets du club.</li>
                <li><strong>Cellule Communication:</strong> responsable de la coordination de toutes les communications du club, y compris la gestion des relations avec les médias.</li>
                <li><strong>Cellule Finance:</strong> chargée de collecter des fonds pour soutenir les activités du club et de gérer ses finances de manière responsable.</li>
            </ul>
        </p>
    </section>

    <footer>
        <p>Site web : <a href="https://bougeonsensemble.social" style="color: red;">bougeonsensemble.social</a></p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
