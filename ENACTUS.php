<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ENACTUS FSTT</title>
    <style>
     body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
}
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-image: url('images/Enactus2.jpg'); /* Ajoutez le chemin de votre image */
    /* Ajuste la taille de l'image pour couvrir l'en-tête */
    background-position: right; 
    color: #f39c12; /* Texte en blanc pour un meilleur contraste avec l'image */
    text-align: center;
    
    padding: 20px;
    background-repeat: no-repeat;
}

.description, .impact, .quote {
    width: 80%;
    margin: auto;
    padding: 30px 0;
}
.quote{
    margin-bottom: 100px ;
}

h2 {
    color: #f39c12; /* Jaune */
}

ul {
    list-style: none;
    padding: 0;
}

ul li {
    margin-bottom: 10px;
}

blockquote {
    font-style: italic;
    border-left: 3px solid #f39c12; /* Jaune */
    padding-left: 15px;
    color: #000; /* Noir */
}

blockquote footer {
    margin-top: 10px;
    color: #333; /* Plus sombre que le noir pour le contraste */
}

footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px;
    position: fixed;
    bottom: 0;
    width: 100%;
}

/* Ajout de styles pour les liens */
a {
    color: #f39c12; /* Jaune */
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
    color: #000; /* Noir */
}

</style>
</head>
<body>
   

        <?php include "header.html" ?>
    
    
    <header>
        <h1 style="float: left;">ENACTUS FSTT : </h1>
    </header>

    <section class="description">
        <h2>Notre Mission</h2>
        <p>
            Enactus Morocco est une ONG qui a pour mission de révéler le potentiel entrepreneurial des jeunes en les accompagnant à la création d’impact durable et inclusif.
        </p>
        <p>
            Oeuvrant dans le domaine de l’entrepreneuriat social et le développement durable, Enactus développe des partenariats entre le monde des affaires, les acteurs institutionnels et ceux de l‘enseignement supérieur, afin de préparer les jeunes à contribuer substantiellement au développement de leur pays en tant que leaders entrepreneurs, éthiques et socialement responsables.
        </p>
    </section>

    <section class="impact">
        <h2>Notre Impact</h2>
        <ul>
            <li><strong>Jeunes mobilisés:</strong> 10,000</li>
            <li><strong>Établissements univers affiliés:</strong> 120</li>
            <li><strong>Professionnels mobilisés:</strong> +400</li>
            <li><strong>Projets développés (dont 200 à fort impact):</strong> 600</li>
            <li><strong>Entreprises créées:</strong> +300</li>
            <li><strong>Bénéficiaires impactés:</strong> +20,000</li>
        </ul>
    </section>

    <section class="quote" >
        <blockquote>
            « Nous créons des expériences permettant à chacun de re-découvrir ses aspirations et de développer ses compétences au sein de projets entrepreneuriaux, pour innover au service du plus grand nombre »
            <footer>- Majid Kaissar EL GHAIB, Enactus Morocco</footer>
        </blockquote>
    </section>

    <footer>
        <p>&copy; 2024 ENACTUS FSTT</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
