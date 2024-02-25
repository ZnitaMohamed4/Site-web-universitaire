<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/header_espace.css">
  <title>ESPACE CHEF FILIERE</title>
</head>
<body>
  <style>
        /* notre table demande - espace prof */


    body {
            background-image: url('image/back.jpg'); /* Replace 'your-image-url.jpg' with the actual path to your image */
            background-size: cover; /* This property ensures that the background image covers the entire viewport */
            background-position: center center; /* Center the background image */
            background-repeat: no-repeat; /* Do not repeat the background image */
        }

.table-container {
    max-width: 800px;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

table {
    /* margin-top: 100px; */
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
    margin-left: auto;
    margin-right: auto;
}

th, td {
    border: 1px solid #ddd;
    padding: 12px;
    text-align: center;
}

th {
    background-color: #f2f2f2;
    cursor: pointer;
    
}
a{
    text-decoration: none;
    color: white;
    font-weight: bold;
}

/* Ajoutez ces styles pour rendre le tableau réactif sur les petits écrans */

@media (max-width: 600px) {
    th, td {
        display: block;
        width: 100%;
        box-sizing: border-box;
    }

    th {
        text-align: center;
    }
}

.repondre {
    background-color: #4CAF50;
    color: #fff;
    border: none;
    padding: 8px 12px;
    cursor: pointer;
    border-radius: 4px;
}

.refuser {
    background-color: #f44336;
    color: #fff;
    border: none;
    padding: 8px 12px;
    cursor: pointer;
    border-radius: 4px;
}
.announce{
    background-color: grey;
    color: #fff;
    border: none;
    padding: 8px 12px;
    cursor: pointer;
    border-radius: 4px;
}
     .section2 {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        p {
            line-height: 1.6;
            color: #666;
        }

        .profile-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin: 0 auto 20px;
            overflow: hidden;
        }

        .profile-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

    </style>

<?php

// Recuperer le nom du chef de departement a partir de l'URL
$nom_chef = isset($_GET['nom_chef']) ? $_GET['nom_chef'] : '';
$id_chef = isset($_GET['id_chef']) ? $_GET['id_chef'] : '';
?>
<!-- 
        **********************************
            header 
        *******************************

 -->
<section class="header-espace">
        <h3>Monsieur <?php echo  $nom_chef ; ?>  </h3>
        <nav>
            <ul>
                <li><a href="home.php"> HOME </a></li>
                <li><a href="LoginProf.php">LOGOUT </a></li>
            </ul>
        </nav>

    </section>
 

 

<div class="contai-main">
    <!-- part left -->
    <div class="partie-left">

        <table class="table_tete" border="1">
            <tr id="tete" style="margin-top: 50px;">
                <th id="sc">Periode Soutenance</th>
                <th id="comp">Gestion Emplpoi Temps</th>
                <th id="DM">Salles</th>
                <th id="AN"><a href="AnnouncePeriode.php" style="color:black">Poster Announce</a></th>
                <th id="infos">Informations Personnelle du Chef</th>
            </tr>
        </table>

        <!-- gestion Periode soutenance  -->
        <div class="container" id="seance" style="display:none;width:95%">

        <?php
include("conn.php"); // Assurez-vous d'inclure votre fichier de connexion à la base de données

// Exécutez la requête SQL
$sql = "SELECT * FROM periodes_soutenance";
$result = mysqli_query($conn, $sql);

// Vérifiez s'il y a des résultats
if (mysqli_num_rows($result) > 0) {
    // Affichez les résultats dans un tableau HTML
    echo "<table border='1'>
            <tr>
                <th>Filière</th>
                <th>Période</th>
                <th>Date de début</th>
                <th>Date de fin</th>
                <th>Description</th>
                <th colspan='2'>Action</th>

            </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        $id_filiere = $row['nom_filiere'];
        echo "<td>" . $row['nom_filiere'] . "</td>";
        echo "<td>" . $row['periode'] . "</td>";
        echo "<td>" . $row['date_debut'] . "</td>";
        echo "<td>" . $row['date_fin'] . "</td>";
        echo "<td>" . $row['description'] . "</td>";
        echo "<td><button class='announce'><a href='ModifierPeriode.php?id=".$id_filiere."'>Modifier</a></button></td>";
        echo "<td><button class='refuser'><a href='SupprimerPeriode.php?id=".$id_filiere."'>Supprimer</a></button></td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Aucun résultat trouvé.";
}

// Fermez la connexion à la base de données
mysqli_close($conn);
?>




        
        </div>

        <!-- ----------infos chef  -->

        <?php

        include("conn.php");
        $sql = "SELECT * FROM chefs_departemet where id_chef = '$id_chef' ";
        $res = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_assoc($res)){
            $nom_chef = $row['nom_chef'];
            $prenom_chef = $row['prenom_chef'];
            $email = $row['email_chef'];
            $id_chef = $row['id_chef'];
            $DateNaissance = $row['DateNaissance'];
            $DateEmbauche = $row['DateEmbauche'];
            $Adresse = $row['Adresse'];
            $Tele = $row['Tele'];
            $nom_departement = $row['nom_departement'];

        }
        
    
        ?>

        <div id="infosChef" style="width: 100%;">
        <section class="section2" style="width: 100%;">
        <div class="profile-image">
            <img src="image/anonymous.png" alt="Professor Image">
        </div>
        <h1>Chef. <?php echo $nom_chef ." ".$prenom_chef  ?></h1>
        <p><strong>ID :</strong> <?php echo $id_chef  ?></p>
        <p><strong>Department:</strong> <?php echo $nom_departement  ?></p>
        <p><strong>Email : </strong><?php echo $email  ?></p>
        <p><strong>Date de Naissance : </strong><?php echo $DateNaissance  ?></p>
        <p><strong>Tele :</strong> <?php echo $Tele  ?></p>
        <p><strong>Adresse :</strong> <?php echo  $Adresse  ?></p>
        <p><strong>Aneee d'embauche :</strong> <?php echo  $DateEmbauche  ?></p>
        </section>
        </div>

       

        <!-- ---------- Salles -->

        <div id="table_dm" style="width: 100%;display:none">
        <?php
include("conn.php"); // Assurez-vous d'inclure votre fichier de connexion à la base de données

// Exécutez la requête SQL
echo "<h1 style='text-align: center; margin-bottom: 10px;'>Salles Liées au $nom_departement</h1>";
echo "<hr>";

$sql = "SELECT *
        FROM salle_lies
        WHERE nom_departement = '$nom_departement'";
$result = mysqli_query($conn, $sql);

// Vérifiez s'il y a des résultats
if (mysqli_num_rows($result) > 0) {
    // Affichez les résultats dans un tableau HTML avec un style
    echo "<table style='width: 100%; border-collapse: collapse; margin-bottom: 20px;'>
            <tr style='background-color: #f2f2f2;'>
                <th style='padding: 10px; border: 1px solid #ddd'>Nom de la Salle</th>
                <th style='padding: 10px; border: 1px solid #ddd'>Département</th>
            </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td style='padding: 10px; border: 1px solid #ddd;'>" . $row['nom_salle_lie'] . "</td>";
        echo "<td style='padding: 10px; border: 1px solid #ddd;'>" . $row['nom_departement'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "<p style='text-align: center; font-style: italic;'>Aucun résultat trouvé.</p>";
}

// Fermez la connexion à la base de données
mysqli_close($conn);
?>

        </div>

        <!-- Gestion emploi temps  -->
        <div class="container" id="list_COMPETENCES" style="display:none;width:95%">

        <?php
            include("conn.php");

            $sql = "SELECT * FROM emploi_temps where     nom_departement = '$nom_departement'";
            $res = mysqli_query($conn, $sql);

            echo "<table border='1' id='table_seance' style='width:95%'>";
            echo "<tr><th>Salle</th><th>Filliere</th><th>Date Seance</th><th>Heure Debut</th><th>Heure Fin</th><th>Type Seance</th><th colspan='2'>Action</th></tr>";
            while ($row = mysqli_fetch_assoc($res)) {
                echo "<tr>";
                // $id_prof = $row['id_prof'];
                // $email = $row['email_etu'];
                // $idS   = $row['id_seance'];
                $salle = $row['nom_salle_lie'];

                // echo "<td>" . $row['id_seance'] . "</td>";
               
                echo "<td>" . $row['nom_salle_lie'] . "</td>";
                echo "<td>" . $row['nom_filiere'] . "</td>";
                // echo "<td>" . $row['nom_module'] . "</td>";
                echo "<td>" . $row['date_seance'] . "</td>";
                echo "<td>" . $row['heure_debut'] . "</td>";
                echo "<td>" . $row['heure_fin'] . "</td>";
                echo "<td>" . $row['type_seance'] . "</td>";
               
                echo "<td><button class='repondre'><a href='ModifierSalle.php?idSalle=".$salle."'>Modifier</a></button></td>";
                echo "<td><button class='refuser'><a href='AnnulerSeance.php?id='>Supprimer</a></button></td>";

                echo "</tr>";
            }

            echo "</table>";
            ?>

        <?php
    // include("conn.php");

    // $sql = "SELECT * FROM signalement_pannes where id_chef = '$id_chef' ";
    // $res = mysqli_query($conn, $sql);

    // echo "<table border='1' id='table_pannes' style='width:95%'>";
    // echo "<tr><th>ID Signalement</th><th>ID Chef</th><th>ID Délégué</th><th> Salle </th><th>Description</th><th>Date Signalement</th></tr>";

    // while ($row = mysqli_fetch_assoc($res)) {
    //     echo "<tr>";
    //     echo "<td>" . $row['id_signalement'] . "</td>";
    //     echo "<td>" . $row['id_chef'] . "</td>";
    //     echo "<td>" . $row['id_delegue'] . "</td>";
    //     echo "<td>" . $row['nom_salle_lie'] . "</td>";
    //     echo "<td>" . $row['description'] . "</td>";
    //     echo "<td>" . $row['date_signalement'] . "</td>";
    //     echo "</tr>";
    // }

    // echo "</table>";
    ?>

    </div id="poster_ann">



       
    </div>
</div>

</body>
</html>



<script>
    let s = document.getElementById("sc");
    let Demande = document.getElementById("DM");
    let comp = document.getElementById("comp");
    let Informations_Personnele = document.getElementById("infos");
    let Announce = document.getElementById("AN");

    // variables description de chaque partie
    let seance = document.getElementById("seance");
    let table_dm = document.getElementById("table_dm");
    let list_COMPETENCES = document.getElementById("list_COMPETENCES");
    let des_coor = document.getElementById("des_coor");
    let infosChef = document.getElementById("infosChef");
    let poster_ann = document.getElementById("poster_ann");

    Demande.addEventListener('click', () => {
        list_COMPETENCES.style.display = "none";
        seance.style.display = "none";
        table_dm.style.display = "inline-block";
        infosChef.style.display = "none";
        poster_ann.style.display = "none";
    });
    s.addEventListener('click', () => {
        
        list_COMPETENCES.style.display = "none";
        seance.style.display = "inline-block";
        table_dm.style.display = "none";
        infosChef.style.display = "none";
        poster_ann.style.display = "none";
    });
    comp.addEventListener('click', () => {
       
        list_COMPETENCES.style.display = "inline-block";
        seance.style.display = "none";
        table_dm.style.display = "none";
        infosChef.style.display = "none";
        poster_ann.style.display = "none";
    });
    Informations_Personnele.addEventListener('click', () => {
        infosChef.style.display = "inline-block";
        list_COMPETENCES.style.display = "none";
        seance.style.display = "none";
        table_dm.style.display = "none";
        poster_ann.style.display = "none";
        
    });
    Announce.addEventListener('click', () => {
        infosChef.style.display = "none";
        list_COMPETENCES.style.display = "none";
        seance.style.display = "none";
        table_dm.style.display = "none";
        poster_ann.style.display = "inline-block";
        
    });
</script>