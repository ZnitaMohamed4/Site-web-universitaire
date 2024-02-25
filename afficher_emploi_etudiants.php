<?php


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
          AND emploi_temps.nom_filiere = 'IDAI'
            ";


    $result = mysqli_query($con, $req);

    if ($result) {
        // Fetch each row from the result set
        while ($row = mysqli_fetch_assoc($result)) {
            // Store the data in the result array
            $resultArray[] = array(

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
$con = mysqli_connect("localhost", "root", "", "our_project");

// Check the connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
// Example of how to use the function and display the results in a table
$resultArray = afficher_emploi_temps($con);

echo '<table border="1">
        <tr>

            <th>Nom du salle</th>
            <th>Nom du professeur</th>
            <th>Prénom du professeur</th>
            <th>Jour</th>
            <th>heure de debut</th>
            <th>heure de fin </th>
            <th> Nom module</th>
            <th> Type de seance</th>

        </tr>';

foreach ($resultArray as $row) {
    echo '<tr>

            <td>' . $row['nom_salle'] . '</td>
            <td>' . $row['nom_prof'] . '</td>
            <td>' . $row['prenom_prof'] . '</td>
            <td>' . $row['date_seance'] . '</td>
            <td>' . $row['heure_debut'] . '</td>
            <td>' . $row['heure_fin'] . '</td>
            <td>' . $row['nom_module'] . '</td>
            <td>' . $row['type_seance'] . '</td>

          </tr>';
}


echo '</table>';


mysqli_close($con);
?>
