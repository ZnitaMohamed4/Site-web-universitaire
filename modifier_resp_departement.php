<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Head Responsible</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

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
            display: inline-block;
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
    </style>
</head>
<body>

<div class="container">
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

</body>
</html>
