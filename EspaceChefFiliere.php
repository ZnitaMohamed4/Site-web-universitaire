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
/* 
.table-container {
    max-width: 800px;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
} */

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

        #list_COMPETENCES{
            width: 95% ;
        }

    </style>

<?php

// Recuperer le nom du professeur a partir de l'URL
$nom_chef = isset($_GET['nom_chef']) ? $_GET['nom_chef'] : '';
$id_chef = isset($_GET['id_chef']) ? $_GET['id_chef'] : '';
?>
<section class="header-espace">
        <h3>Monsieur Chef Departement <?php echo $nom_chef ?>  </h3>
        <nav>
            <ul>
                <li><a href="home.php"> HOME </a></li>
                <li><a href="LoginChefD.php">LOGOUT </a></li>
            </ul>
        </nav>

    </section>

<div class="contai-main">


        <table class="table_tete" border="1">
            <tr id="tete" style="margin-top: 50px;">
                <th id="sc">Planning Soutenance</th>
                <th id="comp">Consultation Pannes </th>
                <th id="DM">Demandes</th>
                <th id="AN"><a href="AnnounceArretCours.php" style="color:black">Poster Announce</a></th>
                <th id="infos">Informations Personnelle du Chef</th>
            </tr>
        </table>

        <!-- gestion planning soutenance  -->
        <div id="seance" style="width: 100%;display:none">
            <?php
            include("conn.php");

            $sql = "SELECT * FROM soutenance_planning";
            $res = mysqli_query($conn, $sql);

            echo "<table border='1' id='table_sout' style='width:95%'>";
            echo "<tr><th>ID</th><th>Titre</th><th>Resumee</th><th>Filiere</th><th colspan='3'>Action</th></tr>";
            while ($row = mysqli_fetch_assoc($res)) {
                echo "<tr>";
                $ID = $row['ID'];
                
                echo "<td>" . $row['ID'] . "</td>";
                echo "<td>" . $row['Titre'] . "</td>";
                echo "<td>" . $row['Resumee'] . "</td>";
                echo "<td>" . $row['nom_filiere'] . "</td>";
                // echo "<td><button class='Ajouter'><a href='ModifierSeance.php?id='>Ajouter</a></button></td>";
                echo "<td><button class='announce'><a href='ModifierSujet.php?id=".$ID."'>Modifier</a></button></td>";
                echo "<td><button class='refuser'><a href='SupprimerSuje.php?id=".$ID."'> Supprimer</a></button></td>";
                echo "<td><button class='repondre'><a href='AjouterSujet.php'>Ajouter</a></button></td>";


                echo "</tr>";
            }

            echo "</table>";
            ?>
        </div>

        <!-- ----------infos chef  -->

        <?php

        include("conn.php");
        $sql = "SELECT * FROM chefs_filiere where id_chef = '$id_chef' ";
        $res = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_assoc($res)){
            $nom_filiere = $row['nom_filiere'] ;             
            $nom_chef = $row['nom_chef'];
            $prenom_chef = $row['prenom_chef'];
            $email = $row['email_chef'];
            $id_chef = $row['id_chef'];
            $DateNaissance = $row['DateNaissance'];
            $DateEmbauche = $row['DateEmbauche'];
            $Adresse = $row['Adresse'];
            $Tele = $row['Tele'];

        }
        
    
        ?>

        <div id="infosChef" style="width: 100%;">
        <section class="section2" style="width: 100%;">
        <div class="profile-image">
            <img src="image/anonymous.png" alt="Professor Image">
        </div>
        <h1>Chef. <?php echo $nom_chef ." ".$prenom_chef  ?></h1>
        <p><strong>ID :</strong> <?php echo $id_chef  ?></p>
        <p><strong>nom filiere :</strong> <?php echo $nom_filiere ?>  </p>
        <p><strong>Email : </strong><?php echo $email  ?></p>
        <p><strong>Date de Naissance : </strong><?php echo $DateNaissance  ?></p>
        <p><strong>Tele :</strong> <?php echo $Tele  ?></p>
        <p><strong>Adresse :</strong> <?php echo  $Adresse  ?></p>
        <p><strong>Aneee d'embauche :</strong> <?php echo  $DateEmbauche  ?></p>
        </section>
        </div>

       

        <!-- ---------- demandes -->

        <div id="table_dm" style="width: 100%;display:none">
            <?php
            include("conn.php");

            $sql = "SELECT * FROM demandes where id_prof = '$id_chef' and dest = 'cheff' ";
            $res = mysqli_query($conn, $sql);

            echo "<table border='1' id='table_demande' style='width:95%'>";
            echo "<tr><th>ID demande</th><th>iD Chef</th><th>Filliere</th><th>Objet</th><th>Text</th><th>email etudiant</th><th colspan='2'>Action</th></tr>";


            while ($row = mysqli_fetch_assoc($res)) {
                echo "<tr>";
                // $id_prof = $row['id_prof'];
                $email = $row['email_insti'];
                $idD   = $row['id_demande'];
                echo "<td>" . $row['id_demande'] . "</td>";
                echo "<td>" . $row['id_prof'] . "</td>";
                echo "<td>" . $row['nom_filiere'] . "</td>";
                echo "<td>" . $row['object'] . "</td>";
                echo "<td>" . $row['demande_text'] . "</td>";
                echo "<td>" . $row['email_insti'] . "</td>";
                echo "<td><button class='repondre'><a href='reponseProfChef.php?id=".$idD."'>Repondre</a></button></td>";
                echo "<td><button class='refuser'><a href='SuppDemande.php?id=".$idD."  '>Refuser</a></button></td>";
                
                echo "</tr>";
            }

            echo "</table>";
            ?>
        </div>

        <!-- Consultation Pannes  -->
        <div class="container" id="list_COMPETENCES" style="display:none">

        <?php
    include("conn.php");

    $sql = "SELECT * FROM signalement_pannes where id_chef = '$id_chef' ";
    $res = mysqli_query($conn, $sql);

    echo "<table border='1' id='table_pannes' style='width:95%'>";
    echo "<tr><th>ID Signalement</th><th>ID Chef</th><th>ID Délégué</th><th> Salle </th><th>Description</th><th>Date Signalement</th></tr>";

    while ($row = mysqli_fetch_assoc($res)) {
        echo "<tr>";
        echo "<td>" . $row['id_signalement'] . "</td>";
        echo "<td>" . $row['id_chef'] . "</td>";
        echo "<td>" . $row['id_delegue'] . "</td>";
        echo "<td>" . $row['nom_salle_lie'] . "</td>";
        echo "<td>" . $row['description'] . "</td>";
        echo "<td>" . $row['date_signalement'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    ?>

    </div id="poster_ann">



       
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
    // let poster_ann = document.getElementById("poster_ann");

    Demande.addEventListener('click', () => {
        list_COMPETENCES.style.display = "none";
        seance.style.display = "none";
        table_dm.style.display = "inline-block";
        infosChef.style.display = "none";
        // poster_ann.style.display = "none";
    });
    s.addEventListener('click', () => {
        
        list_COMPETENCES.style.display = "none";
        seance.style.display = "inline-block";
        table_dm.style.display = "none";
        infosChef.style.display = "none";
        // poster_ann.style.display = "none";
    });
    comp.addEventListener('click', () => {
       
        list_COMPETENCES.style.display = "inline-block";
        seance.style.display = "none";
        table_dm.style.display = "none";
        infosChef.style.display = "none";
        // poster_ann.style.display = "none";
    });
    Informations_Personnele.addEventListener('click', () => {
        infosChef.style.display = "inline-block";
        list_COMPETENCES.style.display = "none";
        seance.style.display = "none";
        table_dm.style.display = "none";
        // poster_ann.style.display = "none";
        
    });
    Announce.addEventListener('click', () => {
        infosChef.style.display = "none";
        list_COMPETENCES.style.display = "none";
        seance.style.display = "none";
        table_dm.style.display = "none";
        // poster_ann.style.display = "inline-block";
        
    });
</script>

