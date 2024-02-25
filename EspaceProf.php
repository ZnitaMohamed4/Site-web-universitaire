
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  

    <title>Espace</title>
  


    <style>
    
       


       body {
               background-image: url('image/back.jpg'); 
               background-size: cover; 
               background-position: cover ; 
               background-repeat: no-repeat; 
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
    </style>

</head>
<body>
<?php

// Recuperer le nom du professeur a partir de l'URL
$NomProf = isset($_GET['NomProf']) ? $_GET['NomProf'] : '';
$id_prof = isset($_GET['id_prof']) ? $_GET['id_prof'] : '';
?>

<!-- 
        ***************************************************************
                header les partie etudian professeur et les chef 
        ***************************************************************
 -->




<?php  
        include "header_espace.php" ; 
?>
<div class="contai-main" >
    <!-- part left -->
    <div class="partie-left">

        <table class="table_tete" border= "1" >
            <tr id="tete" style="margin-top: 50px;">
                <th id="sc">Gestion Seance</th>
                <th id="DM">Demandes</th>
               
                <th id="infos">Informations Personnelle</th>
            </tr>
        </table>

        <!-- gestion seance  -->
        <div id="seance" style="width: 100%;display:none">
            <?php
            include("conn.php");

            $sql = "SELECT * FROM emploi_temps where id_prof = '$id_prof'  ";
            $res = mysqli_query($conn, $sql);

            echo "<table border='1' id='table_seance' style='width:95%'>";
            echo "<tr><th>ID Seance</th><th>ID Prof</th><th>Filliere</th><th>Module</th><th>Date Seance</th><th>Heure Debut</th><th>Heure Fin</th><th>Type Seance</th><th>Salle</th><th colspan='3'>Action</th></tr>";
            while ($row = mysqli_fetch_assoc($res)) {
                echo "<tr>";
                // $id_prof = $row['id_prof'];
                // $email = $row['email_etu'];
                $idS   = $row['id_seance'];
                echo "<td>" . $row['id_seance'] . "</td>";
                echo "<td>" . $row['id_prof'] . "</td>";
                echo "<td>" . $row['nom_filiere'] . "</td>";
                echo "<td>" . $row['nom_module'] . "</td>";
                echo "<td>" . $row['date_seance'] . "</td>";
                echo "<td>" . $row['heure_debut'] . "</td>";
                echo "<td>" . $row['heure_fin'] . "</td>";
                echo "<td>" . $row['type_seance'] . "</td>";
                echo "<td>" . $row['nom_salle_lie'] . "</td>";
                echo "<td><button class='repondre'><a href='ModifierSeance.php?id=".$idS."'>Modifier</a></button></td>";
                echo "<td><button class='refuser'><a href='AnnulerSeance.php?id=".$idS."'>Annuler</a></button></td>";
                echo "<td><button class='announce'><a href='EcrireAnnounce.php?id=".$idS."'>Ecrire Announce</a></button></td>";

                echo "</tr>";
            }

            echo "</table>";
            ?>
        </div>

        <!-- ----------infos prof  -->

        <?php

        include("conn.php");
        $sql = "SELECT * FROM professeurs where id_prof = '$id_prof' ";
        $res = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_assoc($res)){
            $nomProf = $row['nom_prof'];
            $prenomProf = $row['prenom_prof'];
            $email = $row['email_insti_prof'];
            $id_prof = $row['id_prof'];
            $DateNaissance = $row['date_naissance'];
            $DateEmbauche = $row['date_embauche'];
            $Adresse = $row['adresse'];
            $tele  = $row['tele'];
            $nom_departement = $row['nom_departement'];
        }
        
    
        ?>

        <div id="infosProf" style="width: 100%">
        <section class="section2" style="width: 100%;">
        <div class="profile-image">
            <img src="image/anonymous.png" alt="Professor Image">
        </div>
        <h1>Prof. <?php echo $nomProf ." ".$prenomProf  ?></h1>
        <p><strong>ID :</strong> <?php echo $id_prof  ?></p>
        <p><strong>Department :</strong> Informatique</p>
        <p><strong>Email : </strong><?php echo $email  ?></p>
        <p><strong>Date de Naissance : </strong><?php echo $DateNaissance  ?></p>
        <p><strong>Tele :</strong> <?php echo $tele  ?></p>
        <p><strong>Adresse :</strong> <?php echo  $Adresse  ?></p>
        <p><strong>Aneee d'embauche :</strong> <?php echo  $DateEmbauche  ?></p>
        </section>
        </div>

       

        <!-- ---------- demandes -->

        <div id="table_dm" style="width: 100%;display:none">
            <?php
            include("conn.php");

            $sql = "SELECT * FROM demandes where id_prof = '$id_prof' and dest = 'professeur' ";
            $res = mysqli_query($conn, $sql);

            echo "<table border='1' id='table_demande' style='width:95%'>";
            echo "<tr><th>ID demande</th><th>ID Prof</th><th>Filliere</th><th>Objet</th><th>Text</th><th>email etudiant</th><th colspan='2'>Action</th></tr>";


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

       

    </div>
</div>



<script>
    let s = document.getElementById("sc");
    let Demande = document.getElementById("DM");

    let Informations_Personnele = document.getElementById("infos");

    // variables description de chaque partie
    let seance = document.getElementById("seance");
    let table_dm = document.getElementById("table_dm");
   
  
    let infosProf = document.getElementById("infosProf");

    Demande.addEventListener('click', () => {
    
        seance.style.display = "none";
        table_dm.style.display = "inline-block";
        infosProf.style.display = "none";
    });
    s.addEventListener('click', () => {
        
       
        seance.style.display = "inline-block";
        table_dm.style.display = "none";
        infosProf.style.display = "none";
    });

    Informations_Personnele.addEventListener('click', () => {
        infosProf.style.display = "inline-block";
      
        seance.style.display = "none";
        table_dm.style.display = "none";
        
    });
</script>




</body>
</html>


