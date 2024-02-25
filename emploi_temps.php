<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emploi du temps</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1rem;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
        }

        nav img {
            height: 60px;
        }

        .nav-links {
            display: flex;
            justify-content: space-around;
            width: 50%;
        }

        .nav-links ul {
            list-style: none;
            display: flex;
            justify-content: space-between;
        }

        .nav-links a {
            text-decoration: none;
            color: #fff;
            padding: 10px;
            display: block;
            transition: background 0.3s ease;
        }

        .nav-links a:hover {
            background-color: #555;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        .actions {
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
    </style>
</head>
<body>

    <div class="header">
        <nav>
            <a href="index.php"><img src="images/logo.png" alt="Logo"></a>
            <div class="nav-links" id="navLinks">
                <ul>
                    <li><a href="ajouter_salle.php">Les Salles</a></li>
                    <li><a href="ajoute_etudiants.php">Les Etudiants</a></li>
                    <li><a href="modifier_resp_departement.php">Les Departements</a></li>
                    <li><a href="emploi_temps.php">Les emplois de temps</a></li>
                    <li><a href="profs_resp.php">Les Profeesurs Resopnsables</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container">
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

</body>
</html>
