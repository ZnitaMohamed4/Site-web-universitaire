<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>Document</title>
</head>
<body>
<style>
        /* Ajouter un style spécifique au formulaire */
        .formulaire-container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        /* Style pour le formulaire */
        .formulaire-container form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .formulaire-container label {
            margin-top: 10px;
            color: #555;
        }

        .formulaire-container textarea,
        .formulaire-container input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .formulaire-container input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        .formulaire-container input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Nouvelle règle pour réduire la taille du texte dans le formulaire */
         h1 {
            font-size: 1.5em;
            text-align:center;
        }
    </style>
</head>
<body>
  
<section class="header" style="display: flex; align-items: center; justify-content: space-between; min-height: 5vh;">
    <nav>
        <a href="index.html"><img src="images_u/logo y3m.png"></a>
    </nav>
    <p style="color: white; font-weight: bold;">Bienvenue dans l'espace étudiants</p>

    <nav>
        <div class="nav-links" id="navLinks">  
            <ul> 
                <li><a href="index.html">HOME</a></li>
                <li><a href="log_out.php">LOG OUT</a></li>
            </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
</section>
 <h1>Formulaire de Demande</h1>

<div class="formulaire-container">
    
    
    <form action="etu.php" method="post">
    
        
        <!-- Champ pour la objet -->
        <label for="object">Object :</label>
        <input id="object" name="object" rows="4" required>
        <label for="id_prof">id_prof:</label>
        <input id="id_prof" name="id_prof" rows="4" required>
        <label for="nom_filiere">nom_filiere:</label>
        <input id="nom_filiere" name="nom_filiere" rows="4" required>
        <label for="email_insti"> email institutionnel:</label>
        <input id="email_insti" name="email_insti" rows="4" required>
    
        <!-- Champ pour le demande_text -->
        <label for="demande_text">Demande_text :</label>
        <textarea type="text" id="demande_text" name="demande_text" required></textarea>
    
        <!-- Bouton de soumission du formulaire -->
        <input type="submit" value="Envoyer la demande">
    </form>
</div>

<?PHP 

?>



</html>