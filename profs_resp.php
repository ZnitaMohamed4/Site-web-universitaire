<style>
    .back{
        margin: 0px ;
        background-color: #4CAF50;
        color: #fff;
        border: none;
        padding: 8px 12px;
        cursor: pointer;
        border-radius: 4px;

    }
    .container_profs_resp{
        display: inline;
        justify-content: center;
        align-items: center;
    }
    .container_profs_resp h1 {
        margin-top: 50px ;
        text-align: center;
    }
  
   
    .container_profs_resp table th{
        width: 200px ;
        text-align: center;
        background-color:  #f2f2f2; ;
    }
    .container_profs_resp .button {
       
        /* margin: 5px 5px ; */
        background-color: #4CAF50;
        color: #fff;
        border: none;
        padding: 8px 12px;
        cursor: pointer;
        border-radius: 4px;
    }
    .container_profs_resp form {
        margin-left:500px  ;

    }
    .container_profs_resp select {
       
        background-color:  #f2f2f2; ;
 
      
        height: 30px ;
        border: none ;
        border-radius: 5px ;
        text-align: center;
       

    }

</style>

<a href="PageResp.php"><input type="button" class="back" value="back"></a>
<div class="container_profs_resp">
<?php
echo " <h1> Les professeurs responsables DE Filieres</h1> " ;
$con = mysqli_connect("localhost", "root", "", "our_project");

// Check the connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

function modifier_chef_filiere($con) {
    $resultArray = array(); // Initialize an empty array to store results

    $req = "SELECT DISTINCT
                chefs_filiere.email_chef ,
                chefs_filiere.nom_filiere ,
                chefs_filiere.id_chef ,
                professeurs.nom_prof ,
                professeurs.prenom_prof

            FROM chefs_filiere, professeurs
            WHERE chefs_filiere.id_chef = professeurs.id_prof";

    $result = mysqli_query($con, $req);

    if ($result) {
        // Fetch each row from the result set
        while ($row = mysqli_fetch_assoc($result)) {
            // Store the data in the result array
            $resultArray[] = array(
                'nom_filiere' => $row["nom_filiere"],
                'email_chef' => $row["email_chef"],
                'nom_prof' => $row["nom_prof"],
                'prenom_prof' => $row["prenom_prof"] ,
                'id_chef' => $row["id_chef"] 

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
$resultArray = modifier_chef_filiere($con);

// Display the results in a table
echo '<table border="1">
        <tr>
            <th>Nom du filiere</th>
            <th>Email du chef</th>
            <th>Nom du professeur</th>
            <th>Prénom du professeur</th>
            <th>ID CHEF</th>
             <th>Mofication</th>
        </tr>';

foreach ($resultArray as $row) {
    echo '<tr>
            <td>' . $row['nom_filiere'] . '</td>
            <td>' . $row['email_chef'] . '</td>
            <td>' . $row['nom_prof'] . '</td>
            <td>' . $row['prenom_prof'] . '</td>
            <td>' . $row['id_chef'] . '</td>
            <td>
            <form action="form_chef_filiere.php" method="get">
        <input type="hidden" name="email_chef" value="' . $row['email_chef'] . '">
        <input type="hidden" name="id_chef" value="' . $row['id_chef'] . '">
        <input class="button" type="submit" value="Supprimer" name="submit_button_first">
    </form>
             </td>
          </tr>';


}

echo '</table>';


/*
function supprimer_chef($con, $email_chef)
{
    $req = "DELETE FROM chefs_filiere WHERE email_chef = '$email_chef'";
    mysqli_query($con, $req);
}
*/

function ajouter_chef_filiere($con) {

  $req1 = "SELECT * FROM professeurs
           LEFT JOIN chefs_filiere ON professeurs.id_prof = chefs_filiere.id_chef
           WHERE chefs_filiere.id_chef IS NULL";

           $req2 = "SELECT filieres.nom_filiere FROM
          filieres LEFT JOIN chefs_filiere ON
            filieres.nom_filiere = chefs_filiere.nom_filiere
            WHERE chefs_filiere.nom_filiere IS NULL;";


    $result1 = mysqli_query($con, $req1);
    $result2 = mysqli_query($con, $req2);

    if ($result1 && $result2) {
      // Debug statement 1


      echo '<form action="profs_resp.php" method="get">';

      // First selection for professors
      echo '<select name="selected_prof">';
      while ($row1 = mysqli_fetch_assoc($result1)) {
          echo '<option value="' . $row1["email_insti_prof"] . '">' . $row1["email_insti_prof"] . '</option>';
         

      }
      echo '</select>';

      // Second selection for departments
      echo '<select name="selected_dep">';
      while ($row2 = mysqli_fetch_assoc($result2)) {
          echo '<option value="' . $row2["nom_filiere"] . '">' . $row2["nom_filiere"] . '</option>';
      }
      echo '</select>';

      echo '<input class="button" type="submit" value="Ajouter Chef">';
      echo '</form>';

      mysqli_free_result($result1);
      mysqli_free_result($result2);


      // Check if the form is submitted
      if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["selected_prof"]) && isset($_GET["selected_dep"])) {
          // Debug statement 3


          $email_prof = mysqli_real_escape_string($con, $_GET["selected_prof"]);
          $nom_departement = mysqli_real_escape_string($con, $_GET["selected_dep"]);

          echo $email_prof;
          echo $nom_departement;

          to_add_chef($con, $email_prof, $nom_departement);

          // Debug statement 4


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
          $insertQuery = "INSERT INTO chefs_filiere (id_chef, nom_filiere, email_chef, password)
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

//-----------------------------------------------------
//-------------------------------------------------------
//--------------------------------------------
//-------------------------------------------------
// PROFEUUSEUR RESPONSABLE DE MODULE
echo "  <h1> les professeures Responsables de modules </h1>" ;


function modifier_resp_module($con) {
    $resultArray2 = array(); // Initialize an empty array to store results

    $req = "SELECT DISTINCT
                modules.nom_module ,
                modules.nom_filiere ,
                professeurs.nom_prof ,
                professeurs.prenom_prof ,
                professeurs.email_insti_prof
            FROM modules, professeurs
            WHERE modules.id_prof = professeurs.id_prof";

    $result = mysqli_query($con, $req);

    if ($result) {
        // Fetch each row from the result set
        while ($row = mysqli_fetch_assoc($result)) {
            // Store the data in the result array
            $resultArray2[] = array(
                'nom_module' => $row["nom_module"],
                'nom_filiere' => $row["nom_filiere"],
                'nom_prof' => $row["nom_prof"],
                'prenom_prof' => $row["prenom_prof"] ,
                  'email_prof' => $row["email_insti_prof"]
            );
        }

        // Free the result set
        mysqli_free_result($result);
    } else {
        // Display an error message if the query fails
        echo "Error: " . mysqli_error($con);
    }

    return $resultArray2; // Return the array containing the results
}
$con = mysqli_connect("localhost", "root", "", "our_project");

// Check the connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
// Example of how to use the function and display the results in a table
$resultArray2 = modifier_resp_module($con);

// Display the results in a table
echo '<table border="1">
        <tr>
            <th>Nom du module</th>
            <th>Nom du Filiere</th>
            <th>Nom du professeur</th>
            <th>Prénom du professeur</th>
            <th>Email  du professeur</th>
            <th>Mofication</th>
        </tr>';

foreach ($resultArray2 as $row) {
    echo '<tr>
            <td>' . $row['nom_module'] . '</td>
            <td>' . $row['nom_filiere'] . '</td>
            <td>' . $row['nom_prof'] . '</td>
            <td>' . $row['prenom_prof'] . '</td>
            <td>' . $row['email_prof'] . '</td>
            <td>

            <form action="form_prof_resp.php" method="get">
        <input type="hidden" name="nom_module" value="' . $row['nom_module'] . '">
        <input class="button" type="submit" value="Supprimer" name="submit_button_second">
    </form>
             </td>
          </tr>';
}

echo '</table>';

echo '</table>';


echo "<h1> AJOUTER UN Chef De Filiere </h1>" ;
/*
function supprimer_resp_module($con, $nom_module)
{
    $req = "DELETE FROM modules WHERE nom_module = '$nom_module'";
    mysqli_query($con, $req);
}
*/
//------------------------------------------
//--------------------------------------------
//------------------------------

function ajouter_resp_module($con) {

  $req1 = "SELECT email_insti_prof FROM professeurs";

  $req2 = "SELECT nom_filiere FROM filieres";

  $result1 = mysqli_query($con, $req1);
  $result2 = mysqli_query($con, $req2);

  if ($result1 && $result2) {
    // Debug statement 1
    echo '<form action="profs_resp.php" method="get">';

    // First selection for professors
    echo '<select name="selected_prof">';
    while ($row1 = mysqli_fetch_assoc($result1)) {
      echo '<option value="' . $row1["email_insti_prof"] . '">' . $row1["email_insti_prof"] . '</option>';
    }
    echo '</select>';

    // Reset the result set pointer for the second query
    mysqli_data_seek($result1, 0);

    // Second selection for departments
    echo '<select name="selected_dep">';
    while ($row2 = mysqli_fetch_assoc($result2)) {
      echo '<option value="' . $row2["nom_filiere"] . '">' . $row2["nom_filiere"] . '</option>';
    }
    echo '</select>';

    echo '<input class="button" type="submit" value="Ajouter Chef">';
    echo '</form>';

    mysqli_free_result($result1);
    mysqli_free_result($result2);

    // Debug statement 2

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["selected_prof"]) && isset($_GET["selected_dep"])) {
      // Debug statement 3
      echo "Form submitted.<br>";

      $email_prof = mysqli_real_escape_string($con, $_GET["selected_prof"]);
      $nom_departement = mysqli_real_escape_string($con, $_GET["selected_dep"]);

      echo $email_prof;
      echo $nom_departement;

      to_add_resp($con, $email_prof, $nom_departement);

      // Debug statement 4
      echo "to_add_chef function called.<br>";

      // Add your logic to process the selected values here
    }
  } else {
    // Debug statement 5
    echo "One or both queries failed.<br>";
  }
}


  function to_add_resp($con, $email, $departement) {
  //    $email = mysqli_real_escape_string($con, $email);
    //  $departement = mysqli_real_escape_string($con, $departement);

      // Select data from professeurs based on the provided email
      $selectQuery = "SELECT * FROM professeurs WHERE email_insti_prof = '$email'";
      $result = mysqli_query($con, $selectQuery);

      if ($result && $row = mysqli_fetch_assoc($result)) {
          // If a row is found, insert data into chefs_departemet
          $id_prof = $row['id_prof'];
          $insertQuery = "INSERT INTO chefs_filiere (id_chef, nom_filiere, email_chef, password)
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
















ajouter_resp_module($con)  ;

modifier_resp_module($con) ;
//supprimer_resp_module($con,$_GET["nom_mod"] ) ;
//supprimer_chef($con, $_GET["email_chef"]) ;
ajouter_chef_filiere($con) ;
 modifier_chef_filiere($con) ;


mysqli_close($con);


?>
</div>