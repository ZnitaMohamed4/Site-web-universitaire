<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>head repsonsable</title>
    <link rel="stylesheet" href="css/header_espace.css">
    <style>
   body {
            background-image: url('image/back.jpg'); /* Replace 'your-image-url.jpg' with the actual path to your image */
            background-size: cover; /* This property ensures that the background image covers the entire viewport */
            background-position: center center; /* Center the background image */
            background-repeat: no-repeat; /* Do not repeat the background image */

        }
        *{
    font-family: 'Poppins', sans-serif;

        }

    .header {
      
        width: 103%;
        background-color: #f2f2f2 ; 
        margin-bottom: 20px;
        margin-left: -10px ;
        margin-right: -10px ;
    }

    /* nav {
        /* display: flex;
        justify-content: space-between;
        align-items: center; */
    /* } */ 

    .nav-links {
        display: flex;
        justify-content: space-between;
        align-items: center;
        
        /* width: 50%; */
    }

    .nav-links ul {
        list-style: none;
        display: flex;
    
    }
    .nav-links li {
        padding: 0 50px ;
        width: 100% ;
    }

    .nav-links li {
      
       
        color: black ;
        font-size: large ;
        width: 120% ;
        padding: 10px;
       
        transition:  1.3s ;
    }

    .nav-links li:hover {
     
        transform: scale(1);

    }
    .nav-links a {
        text-decoration: none ;
    }

    .fa-bars, .fa-close {
        font-size: 1.5rem;
        cursor: pointer;
    }

    @media screen and (max-width: 768px) {
        .nav-links {
            position: absolute;
            top: 10vh;
            left: 0;
            width: 100%;
            background-color: #333;
            flex-direction: column;
            display: none;
        }

        .nav-links.show {
            display: flex;
        }

        .nav-links ul {
            flex-direction: column;
            align-items: center;
        }

        .nav-links a {
            width: 100%;
            text-align: center;
        }

        .fa-bars {
            display: block;
        }

        .fa-close {
            display: none;
        }
    }

    /* 
        #############################################
                style partie salles 
        #############################################3
    */

      

        #container_salle , #conatainer_etudiant{
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        select, input[type="submit"] {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        
    /* 
        #############################################
                style partie emploi de temps  
        #############################################3
    */

    #container_emploi {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        #container_emploi  table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        #container_emploi  table th,  #container_emploi  table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        #container_emploi  table  th {
            background-color: #333;
            color: #fff;
        }

        #container_emploi  .actions {
            display: flex;
            gap: 10px;
        }

        form {
            margin: 0;
        }

        .confirm-delete {
            color: red;
        }
        .btn-container {
          display: flex;
          gap: 10px;
      }

      .btn-container form {
          margin: 0;
      }

      .btn-container input[type="submit"] {
          background-color: #4CAF50;
          color: white;
          padding: 8px 12px;
          border: none;
          border-radius: 4px;
          cursor: pointer;
      }

      .btn-container input[type="submit"]:hover {
          background-color: #45a049;
      }

      .btn-delete {
          background-color: #f44336;
      }

      .btn-delete:hover {
          background-color: #d32f2f;
      }
    

       /* 
        #######################################################
                style partie modifier resp departement  
        #######################################################
    */
    #container_modifier {
            max-width: 800px;
            margin:  10px auto ; 
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        #container_modifier  h2 {
            text-align: center;
        }

        #container_modifier .table {
            border-collapse: collapse;
            width: 100%;
        }

        #container_modifier  .table th, #container_modifier .table td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        #container_modifier .table th {
            background-color: #f2f2f2;
        }

        #container_modifier .modification-form {
            display: inline-block;
        }

        #container_modifier  .modification-form input[type="submit"] {
            background-color: #4caf50;
            color: white;
            border: none;
            padding: 6px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            cursor: pointer;
        }

        #container_modifier  form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        #container_modifier  select, input[type="submit"] {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        #container_modifier input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        #container_modifier  input[type="submit"]:hover {
            background-color: #45a049;
        }

          /* 
        #############################################
                style partie etudiant en attante   
        #############################################3
    */

    .table_etudiant{
        width: 90%;
        border-collapse: collapse;
        
    }
    .table_etudiant thead{
        height: 50px ;
        background-color: #4e7272;
    }
    .table_etudiant tbody {
        margin-top: 50px ;

        text-align: center;
    }
    .table_etudiant tbody tr:nth-child(2n){
        background-color: #dfdfdf;
    }
    .row_action  {

        display: flex ;
    }
        .row_action tr td {
            margin-left: 50px ;
        }
    
    .row_action .button{
        margin-top: 10px ;
        margin-left: 10px ;
        background-color: #f44336;
    color: #fff;
    border: none;
    padding: 8px 12px;
    cursor: pointer;
    border-radius: 4px;
    }

    


    </style>

</head>
<body>
<!-- 
        **********************************
            header 
        *******************************

 -->
 <section class="header-espace">
        <h3>beinvenue  <?php //echo  $nom_chef ; ?>  </h3>
        <nav>
            <ul>
                <li><a href="home.php"> HOME </a></li>
                <li><a href="LoginChefPeda.php">LOGOUT </a></li>
            </ul>
        </nav>

    </section>






    <section class="header">
        <nav>
            <div class="nav-links" id="navLinks">
              
                <ul>
                    <li><a id="salle" href="#">Les Salles</a></li>
                    <li><a id="Etudiants" href="#">Les Etudiants</a></li>
                    <li><a id="dep" href="#">Les Departements</a></li>
                    <li><a id="emploi" href="#">Les emplois de temps</a></li>
                    <li><a id="en_attante" href="#">Etudiant en attante</a></li>
                    <li><a id="prof" href="profs_resp.php">Les Profeesurs Resopnsables</a></li>
                </ul>
            </div>
         
        </nav>
    </section>
    <!-- **
 * #########################################################3
 * ------------ LES PARTIE LES SALLES  ------------ 
 * #########################################################3
 * -->
 <div  id="container_salle" style="display: none;">
        <h2>AFFECTER UNE SALLE À UN DÉPARTEMENT</h2>

        <?php
        // Your existing PHP code here...
        ?>

        <form action="form_salle.php" method="post">
            <?php

            
            echo "AFFECTER UNE SALLE A UN DEPARTEMENT <br>" ;
            //include "functions_resp.php" ;
            $con = mysqli_connect("localhost", "root", "", "our_project");

            // Check the connection
            if (!$con) {
                die("Connection failed: " . mysqli_connect_error());
            }

            function ajouter_salle($con) {
                $req1 = "SELECT * FROM salle_non_lies";
                $req2 = "SELECT * FROM departements";

                $result1 = mysqli_query($con, $req1);
                $result2 = mysqli_query($con, $req2);

                if ($result1 && $result2) {
                    echo '<form action="form_salle.php" method="post">';  // Change method to POST

                    // First selection for salle_non_lies
                    echo '<select name="selected_salle">';
                    while ($row1 = mysqli_fetch_assoc($result1)) {
                        echo '<option value="' . $row1["nom_salle_non_lie"] . '">' . $row1["nom_salle_non_lie"] . '</option>';
                    }
                    echo '</select>';

                    // Second selection for departements
                    echo '<select name="selected_dep">';
                    while ($row2 = mysqli_fetch_assoc($result2)) {
                        echo '<option value="' . $row2["nom_departement"] . '">' . $row2["nom_departement"] . '</option>';
                    }
                    echo '</select>';

                    echo '<input type="submit" value="AJOUTER LA SALLE ">';
                    echo '</form>';

                    mysqli_free_result($result1);
                    mysqli_free_result($result2);
                }


            }

            ajouter_salle($con);
            mysqli_close($con);
            ?>


  
        </form>
    </div>


     <!-- **
 * #########################################################3
 * ------------ LES PARTIE LES Etudiants   ------------ 
 * #########################################################3
 * -->

 <div  id="conatainer_etudiant" style="display: none; ">
        <h2>AJOUTER UNE NOUVELLE CLASSE D'ÉTUDIANTS À UN MODULE</h2>

        <?php
        echo "AJOUTER UNE NOUVELLE CLASSE D'Etudiants a un module  <br>" ;
        //include "functions_resp.php" ;
        $con = mysqli_connect("localhost", "root", "", "our_project");

        // Check the connection
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }

        function ajouter_etudiants($con) {
            $req1 = "SELECT * FROM etudiants";
            $req2 = "SELECT * FROM modules";

            $result1 = mysqli_query($con, $req1);
            $result2 = mysqli_query($con, $req2);

            if ($result1 && $result2) {
                echo '<form action="form_etudiants.php" method="get">';

                // First selection for salle_non_lies
                echo '<select name="selected_salle">';
                while ($row1 = mysqli_fetch_assoc($result1)) {
                    echo '<option value="' . $row1["email_insti"] . '">' . $row1["email_insti"] . '</option>';
                }
                echo '</select>';

                // Second selection for departements
                echo '<select name="selected_dep">';
                while ($row2 = mysqli_fetch_assoc($result2)) {
                    echo '<option value="' . $row2["nom_module"] . '">' . $row2["nom_module"] . '</option>';
                }
                echo '</select>';

                echo '<input type="submit" value="Ajouter Etudiant" name = "ajouter_etd">';
                echo '</form>';

                mysqli_free_result($result1);
                mysqli_free_result($result2);
            }

}
        ajouter_etudiants($con) ;
        mysqli_close($con);
        ?>


    </div>


     <!-- **
 * #########################################################3
 * ------------ LES PARTIE des emploi des temps    ------------ 
 * #########################################################3
 * -->

 <div class="container" id="container_emploi" style="display:none; ">
        <h2>VOICI LES FILIERES DE LA FACULTE</h2>

        <?php
        // Your PHP code here...
        ?>

        <table>


            <?php
            echo "VOICI LES FILIERES DE LA FACULTE <br>" ;
            //include "functions_resp.php" ;
            $con = mysqli_connect("localhost", "root", "", "our_project");

            // Check the connection
            if (!$con) {
                die("Connection failed: " . mysqli_connect_error());
            }
            // afficher l'emploi de de temps d'une salle lie

            function afficher_emploi_temps($con) {
                $resultArray = array(); // Initialize an empty array to store results

                $req = "SELECT emploi_temps.*, nom_prof, prenom_prof
                        FROM emploi_temps
                        JOIN professeurs ON emploi_temps.id_prof = professeurs.id_prof
                        ";


                $result = mysqli_query($con, $req);

                if ($result) {
                    // Fetch each row from the result set
                    while ($row = mysqli_fetch_assoc($result)) {
                        // Store the data in the result array
                        $resultArray[] = array(
                            'nom_filiere' => $row["nom_filiere"],
                            'prenom_prof' => $row["prenom_prof"],
                            'nom_prof' => $row["nom_prof"],
                            'nom_module' => $row["nom_module"]  ,
                            'date_seance' => $row["date_seance"]  ,
                            'heure_debut' => $row["heure_debut"]  ,
                            'heure_fin' => $row["heure_fin"]  ,
                            'type_seance' => $row["type_seance"] ,
                            'nom_salle' => $row["nom_salle_lie"]

                        );
                    }

                    // Free the result set
                    mysqli_free_result($result);
                } else {
                    // Display an error message if the query fails
                    echo "Error: " . mysqli_error($con);
                }

                return $resultArray; // Return the array containing the results
            }
            // $con = mysqli_connect("localhost", "root", "", "our_project");

            // Check the connection
            if (!$con) {
                die("Connection failed: " . mysqli_connect_error());
            }
            // Example of how to use the function and display the results in a table
            $resultArray = afficher_emploi_temps($con);

            echo '<table border="1">
                    <tr>
                        <th>Nom du filiere</th>
                        <th>Nom du salle</th>
                        <th>Nom du professeur</th>
                        <th>Prénom du professeur</th>
                        <th>Jour</th>
                        <th>heure de debut</th>
                        <th>heure de fin </th>
                        <th> Nom module</th>
                        <th> Type de seance</th>
                        <th>Actions</th>
                    </tr>';

            foreach ($resultArray as $row) {
                echo '<tr>
                        <td>' . $row['nom_filiere'] . '</td>
                        <td>' . $row['nom_salle'] . '</td>
                        <td>' . $row['nom_prof'] . '</td>
                        <td>' . $row['prenom_prof'] . '</td>
                        <td>' . $row['date_seance'] . '</td>
                        <td>' . $row['heure_debut'] . '</td>
                        <td>' . $row['heure_fin'] . '</td>
                        <td>' . $row['nom_module'] . '</td>
                        <td>' . $row['type_seance'] . '</td>
                        <td class="btn-container">
                    <form action="emploi_temps.php" method="get">
                        <input type="hidden" name="nom_filiere" value="' . $row['nom_filiere'] . '">
                        <input type="hidden" name="heure_debut" value="' . $row['heure_debut'] . '">
                        <input type="hidden" name="heure_fin" value="' . $row['heure_fin'] . '">
                        <input type="hidden" name="date_seance" value="' . $row['date_seance'] . '">
                        <input type="submit" class="btn-delete" value="Supprimer" name="submit_button" onclick="return confirm(\'Are you sure you want to delete?\');">
                    </form>

                    <form action="update_emploi.php" method="get">
                        <input type="hidden" name="nom_filiere" value="' . $row['nom_filiere'] . '">
                        <input type="hidden" name="heure_debut" value="' . $row['heure_debut'] . '">
                        <input type="hidden" name="heure_fin" value="' . $row['heure_fin'] . '">
                        <input type="hidden" name="date_seance" value="' . $row['date_seance'] . '">
                        <input type="submit" value="Modifier" name="update_button">
                    </form>
                </td>
                      </tr>';
            }

            if (isset($_GET["submit_button"])) {
                // The "Supprimer" button has been clicked, call the function
                $nom_filiere = $_GET["nom_filiere"];
                $heure_fin = $_GET["heure_fin"];
                $heure_debut = $_GET["heure_debut"];

                $date_seance = $_GET["date_seance"];

              supprimer_emploi($con, $nom_filiere, $date_seance, $heure_debut );
            } elseif (isset($_GET["update_button"])) {
                // The "Modifier" button has been clicked, handle the update
                // You may redirect to the update page or handle the update logic here
                header("Location: update_emploi.php?nom_filiere=" . $_GET["nom_filiere"] . "&date_seance=" . $_GET["date_seance"] . "&heure_debut=" . $_GET["heure_debut"] ."&heure_fin=" . $_GET["heure_fin"]);
                exit();
            }



            echo '</table>';

            function supprimer_emploi($con, $nom_filiere, $date_seance, $heure_debut ) {
                $req = "DELETE FROM emploi_temps
                        WHERE emploi_temps.nom_filiere = '$nom_filiere'
                        AND emploi_temps.heure_debut = '$heure_debut'
                        AND emploi_temps.date_seance = '$date_seance'";

                mysqli_query($con, $req);
            }




            //supprimer_emploi($con, $nom_filiere, $creneaux, $jour);

            mysqli_close($con);
            ?>


        </table>
    </div>

      <!-- **
 * #########################################################3
 * ------------ LES PARTIE des modifier resp departement    ------------ 
 * #########################################################3
 * -->

 <div id="container_modifier"  style="display: none;">
    <h2>MODIFIER UN RESPONSABLE DE DÉPARTEMENT</h2>



    <table border="1" class="table" id="result-table">


        <?php 
          $resultArray = array();
        foreach ($resultArray as $row): ?>
            <tr>
                <td><?= $row['nom_departement']; ?></td>
                <td><?= $row['email_chef']; ?></td>
                <td><?= $row['nom_prof']; ?></td>
                <td><?= $row['prenom_prof']; ?></td>
                <td class="modification-form">
                    <form action="modifier_resp_departement.php" method="get">
                        <input type="hidden" name="email_chef" value="<?= $row['email_chef']; ?>">
                        <input type="submit" value="Supprimer" name="submit_button">
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h2>AJOUTER UN CHEF DE DÉPARTEMENT</h2>



    <form action="modifier_resp_departement.php" method="get">

      <?php


      $con = mysqli_connect("localhost", "root", "", "our_project");

      // Check the connection
      if (!$con) {
          die("Connection failed: " . mysqli_connect_error());
      }

      function modifier_responsable_dep($con) {
          $resultArray = array(); // Initialize an empty array to store results

          $req = "SELECT DISTINCT
                      chefs_departemet.email_chef ,
                      chefs_departemet.nom_departement ,
                      professeurs.nom_prof ,
                      professeurs.prenom_prof
                  FROM chefs_departemet, professeurs
                  WHERE chefs_departemet.id_chef = professeurs.id_prof";

          $result = mysqli_query($con, $req);

          if ($result) {
              // Fetch each row from the result set
              while ($row = mysqli_fetch_assoc($result)) {
                  // Store the data in the result array
                  $resultArray[] = array(
                      'nom_departement' => $row["nom_departement"],
                      'email_chef' => $row["email_chef"],
                      'nom_prof' => $row["nom_prof"],
                      'prenom_prof' => $row["prenom_prof"]
                  );
              }

              // Free the result set
              mysqli_free_result($result);
          } else {
              // Display an error message if the query fails
              echo "Error: " . mysqli_error($con);
          }

          return $resultArray; // Return the array containing the results
      }
      $con = mysqli_connect("localhost", "root", "", "our_project");

      // Check the connection
      if (!$con) {
          die("Connection failed: " . mysqli_connect_error());
      }
      // Example of how to use the function and display the results in a table
      $resultArray = modifier_responsable_dep($con);

      // Display the results in a table
      echo '
        <style>
          .table {
            border-collapse: collapse;
            width: 100%;
          }

          .table th, .table td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
          }

          .table th {
            background-color: #f2f2f2;
          }

          .modification-form {
            display: inline-block; /* Align the form button inline with the cell */
          }

          .modification-form input[type="submit"] {
            background-color: #4caf50;
            color: white;
            border: none;
            padding: 6px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            cursor: pointer;
          }
        </style>

        <table border="1" class="table" id="result-table">
          <tr>
            <th>Nom du département</th>
            <th>Email du chef</th>
            <th>Nom du professeur</th>
            <th>Prénom du professeur</th>
            <th>Mofication</th>
          </tr>';

      foreach ($resultArray as $row) {
        echo '<tr>
                <td>' . $row['nom_departement'] . '</td>
                <td>' . $row['email_chef'] . '</td>
                <td>' . $row['nom_prof'] . '</td>
                <td>' . $row['prenom_prof'] . '</td>
                <td class="modification-form">
                  <form action="modifier_resp_departement.php" method="get">
                    <input type="hidden" name="email_chef" value="' . $row['email_chef'] . '">
                    <input type="submit" value="Supprimer" name="submit_button">
                  </form>
                </td>
              </tr>';
      }

      echo '</table>';


      echo "AJOUTER UN Chef De deparetement  " ;
      function supprimer_chef($con, $email_chef)
      {
          $req = "DELETE FROM chefs_departemet WHERE email_chef = '$email_chef'";
          mysqli_query($con, $req);
      }
      function ajouter_chef_dep($con) {
        $req1 = "SELECT * FROM professeurs
                 LEFT JOIN chefs_departemet ON professeurs.id_prof = chefs_departemet.id_chef
                 WHERE chefs_departemet.id_chef IS NULL";

                 $req2 = "SELECT departements.nom_departement FROM
                  departements LEFT JOIN chefs_departemet ON
                  departements.nom_departement = chefs_departemet.nom_departement
                  WHERE chefs_departemet.nom_departement IS NULL;";


          $result1 = mysqli_query($con, $req1);
          $result2 = mysqli_query($con, $req2);

          if ($result1 && $result2) {

              echo '<form action="modifier_resp_departement.php" method="get">';

              // First selection for professors
              echo '<select name="selected_prof">';
              while ($row1 = mysqli_fetch_assoc($result1)) {
                  echo '<option value="' . $row1["email_insti_prof"] . '">' . $row1["email_insti_prof"] . '</option>';
              }
              echo '</select>';

              // Second selection for departments
              echo '<select name="selected_dep">';
              while ($row2 = mysqli_fetch_assoc($result2)) {
                  echo '<option value="' . $row2["nom_departement"] . '">' . $row2["nom_departement"] . '</option>';
              }
              echo '</select>';

              echo '<input type="submit" value="Ajouter Chef">';
              echo '</form>';

              mysqli_free_result($result1);
              mysqli_free_result($result2);

              // Check if the form is submitted
              if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["selected_prof"]) && isset($_GET["selected_dep"])) {
                  $email_prof = mysqli_real_escape_string($con, $_GET["selected_prof"]);
                  $nom_departement = mysqli_real_escape_string($con, $_GET["selected_dep"]);


      to_add_chef($con, $email_prof, $nom_departement) ;
                  // Add your logic to process the selected values here
              }
          }
      }

        function to_add_chef($con, $email, $departement) {
        //    $email = mysqli_real_escape_string($con, $email);
          //  $departement = mysqli_real_escape_string($con, $departement);

            // Select data from professeurs based on the provided email
            $selectQuery = "SELECT * FROM professeurs WHERE email_insti_prof = '$email'";
            $result = mysqli_query($con, $selectQuery);

            if ($result && $row = mysqli_fetch_assoc($result)) {
                // If a row is found, insert data into chefs_departemet
                $id_prof = $row['id_prof'];
                $insertQuery = "INSERT INTO chefs_departemet (id_chef, nom_departement, email_chef, password)
                                VALUES ($id_prof, '$departement', '$email', '{$row['password']}')";

                $insertResult = mysqli_query($con, $insertQuery);

                if ($insertResult) {
                    echo "Insertion into chefs_departemet successful.";
                } else {
                    echo "Error: " . mysqli_error($con);
                }
            } else {
                echo "No matching professor found with email: $email";
            }

            // Free the result set
            mysqli_free_result($result);

      }
      if (isset($_GET["submit_button"])) {
          // The form has been submitted, call the function
          supprimer_chef($con, $_GET["email_chef"]) ;

          modifier_responsable_dep($con) ;

      }
      //supprimer_chef($con, $_GET["email_chef"]) ;
      ajouter_chef_dep($con) ;
      //modifier_responsable_dep($con) ;
      mysqli_close($con);
      ?>

        <!-- <input type="submit" value="Ajouter Chef" name="ajouter_etd"> -->
    </form>
</div>
     <!-- **
 * #########################################################3
 * ------------ LES PARTIE DES ETUDIANTS D'ATTANTE  ------------ 
 * #########################################################3
 * -->
 <div class="etudiant_attent" id="etudiant_attent" style="display:none ; ">
<table class="table_etudiant">
    <thead>
        <tr>
            <th>CNE</th>
            <th>EMAIL </th>
            <th>NOM </th>
            <th>PRENOM</th>
            <th>NOM FILIERE </th>
            <th>action </th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $conn = mysqli_connect( "localhost","root","","our_project") ; 
        $requet_etudiant = 'SELECT * FROM `etudiants_en_attende`' ; 
        $result = mysqli_query($conn,$requet_etudiant) ; 
        while($donn= mysqli_fetch_assoc($result)){
            echo '<tr>';
            echo '<td>'. $donn['CNE']. '</td> ' ; 
            echo '<td>'. $donn['email_insti'] .'</td>' ; 
            echo '<td>'. $donn['nom_etudiant'].' </td>' ; 
            echo '<td>'. $donn['prenom_etudiant'].' </td>' ; 
            echo '<td>'. $donn['nom_filiere'] .'</td>'; 
            echo " <td class='row_action'>
            <form method='get' >
            <input type='hidden' name='cne' value='{$donn['CNE']}' >
            <input class='button' type='submit' name='accept' value='Accept'>
        </form>
        <form method='get' >
        <input type='hidden' name='cne' value='{$donn['CNE']}'>
        <input class='button' type='submit' name='refuse' value='Refuse'>
    </form>
        
        
        ";
        echo   '</td>' ;
            echo '</tr>';
        }
        ?>
    </tbody>
</table>
<?php 
        /**
         * **********************************************************************
         *          function  de refuser 
         * **********************************************************************
         */
        
function refuser(){

    $conn = mysqli_connect("localhost", "root", "", "our_project");
    
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["refuse"]) && isset($_GET["cne"])) {
        $cne = $_GET["cne"];

        // Remove student from 'etudiants_en_attente' table
        $query_delete = "DELETE FROM `etudiants_en_attende` WHERE CNE='$cne'";
        mysqli_query($conn, $query_delete);

        // Redirect to the page where the form is displayed
        // header("Location: your_page.php");
        if(   mysqli_query($conn, $query_delete)){
            ?>
            <script>
                alert("refuser correct de l'etudiant !") ; 
            </script>
            <?php
        }
        exit();
    }
}
}
/**
         * **********************************************************************
         *          function  de accepter  et envoyer les données vers la base
         * **********************************************************************
         */

         function accepter(){

            $conn = mysqli_connect("localhost", "root", "", "our_project");
            
            // Check if "REQUEST_METHOD" key is set in the $_SERVER array
            // if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "GET") {
            if (isset($_GET["accept"]) && isset($_GET["cne"])) {
                $cne = $_GET["cne"];
        
           
                $query_select = "SELECT * FROM `etudiants_en_attende` WHERE CNE='$cne'";
                $result_select = mysqli_query($conn, $query_select);
                
                if ($row = mysqli_fetch_assoc($result_select)) {
                    // Insert student into 'etudiants' table
                    $query_insert = "INSERT INTO `etudiants` (CNE, email_insti, nom_etudiant, prenom_etudiant, nom_filiere) 
                                    VALUES ('$row[CNE]', '$row[email_insti]', '$row[nom_etudiant]', '$row[prenom_etudiant]', '$row[nom_filiere]')";
                    $result_insert = mysqli_query($conn, $query_insert);
                    
                    // Remove student from 'etudiants_en_attente' table
                    $query_delete = "DELETE FROM `etudiants_en_attende` WHERE CNE='$cne'";
                    $result_delete = mysqli_query($conn, $query_delete);
        
                    if ($result_insert && $result_delete) {
                       ?>
                <script>
                    alert("accepter l'etudiant dans votre faculte !") ; 
                </script>
            <?php
                } else {
                    ?>
                    <script>
                        alert("il y a un erreur pour  accepter l'etudiant dans votre faculte !") ; 
                    </script>
                <?php
                    }
        
              
                    exit();
                }
            }
        
        }


/**------------  call function refuser  ----------------------------*/
if(isset($_GET["refuse"]) && isset($_GET["cne"]))
{
    refuser(); 
}
/**------------  call function accepter  ----------------------------*/
if (isset($_GET["accept"]) && isset($_GET["cne"])) {
    accepter();
}
?>

</div>


</body>
</html>

<script> 

/**
 * #########################################################3
 * ------------ parties DOM AFFICHIER LES PARTIE ------------ 
 * #########################################################3
 */


 var salle =document.getElementById("salle") ;
 var Etudiants =document.getElementById("Etudiants") ;
 var modifier_chef_dep =document.getElementById("dep") ;
 var profs_resp =document.getElementById("prof") ;
 var emploi =document.getElementById("emploi") ;
 var en_attante = document.getElementById("en_attante") ; 



 var container_salle =document.getElementById("container_salle") ;
 var conatainer_etudiant =document.getElementById("conatainer_etudiant") ;
 var container_emploi =document.getElementById("container_emploi") ;
 var container_modifier_chef =document.getElementById("container_modifier") ;
 var conatainer_etudiant_attent =document.getElementById("etudiant_attent") ;


salle.addEventListener('click', ()=> {
    container_salle.style.display='block' ; 
    conatainer_etudiant.style.display='none' ; 
    container_emploi.style.display='none' ; 
    container_modifier_chef.style.display='none' ; 
    conatainer_etudiant_attent.style.display='none' ; 



});
Etudiants.addEventListener('click', ()=> {
    container_salle.style.display='none' ; 
    conatainer_etudiant.style.display='block' ; 
    container_emploi.style.display='none' ; 
    container_modifier_chef.style.display='none' ; 
    conatainer_etudiant_attent.style.display='none' ; 




});

emploi.addEventListener('click', ()=> {
    container_salle.style.display='none' ; 
    conatainer_etudiant.style.display='none' ; 
    container_emploi.style.display='block' ;
    container_modifier_chef.style.display='none' ;
    conatainer_etudiant_attent.style.display='none' ; 




});
modifier_chef_dep.addEventListener('click', ()=> {
    container_salle.style.display='none' ; 
    conatainer_etudiant.style.display='none' ; 
    container_emploi.style.display='none' ;
    container_modifier_chef.style.display='block' ; 
    conatainer_etudiant_attent.style.display='none' ; 




});
en_attante.addEventListener('click', ()=> {
    container_salle.style.display='none' ; 
    conatainer_etudiant.style.display='none' ; 
    container_emploi.style.display='none' ;
    container_modifier_chef.style.display='none' ; 
    conatainer_etudiant_attent.style.display='block' ; 




});

</script>