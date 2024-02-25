<?php

include "functions_resp.php" ;
$con = mysqli_connect("localhost", "root", "", "our_project");

// Check the connection

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["nom_filiere"], $_GET["date_seance"], $_GET["heure_debut"], $_GET["heure_fin"])) {
    $nom_filiere = $_GET["nom_filiere"];
    $heure_fin = $_GET["heure_fin"];
    $heure_debut = $_GET["heure_debut"];
    $date_seance = $_GET["date_seance"];

    // Fetch the existing data for the specified record
    $result = mysqli_query($con, "SELECT nom_filiere, heure_fin, heure_debut, date_seance FROM emploi_temps
        WHERE nom_filiere = '$nom_filiere'
        AND heure_debut = '$heure_debut'
        AND date_seance = '$date_seance'");

    if (!$result) {
        die('Error: ' . mysqli_error($con));
    }

    $row = mysqli_fetch_assoc($result);

    if ($row) {
        // Display the update form with pre-filled values
        echo '<form action="update_emploi.php" method="post">
                <input type="hidden" name="original_nom_filiere" value="' . $nom_filiere . '">
                <input type="hidden" name="original_jour" value="' . $date_seance . '">
                <input type="hidden" name="heure_fin" value="' . $heure_fin . '">
                <input type="hidden" name="heure_debut" value="' . $heure_debut . '">

                <label for="nom_filiere">Nom du filiere:</label>
                <input type="text" name="nom_filiere" value="' . $row['nom_filiere'] . '"><br>

                <label for="date_seance">Date de la seance :</label>
                <input type="text" name="date_seance" value="' . $row['date_seance'] . '"><br>

                <label for="heure_fin">Heure de la fin :</label>
                <input type="text" name="heure_fin" value="' . $row['heure_fin'] . '"><br>

                <label for="heure_debut">Heure de la debut :</label>
                <input type="text" name="heure_debut" value="' . $row['heure_debut'] . '"><br>

                <!-- Add other input fields as needed -->

                <input type="submit" value="Update" name="update_button">
            </form>';
    } else {
        echo "Record not found.";
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update_button"])) {
    // Retrieve the updated values from the form
    $original_nom_filiere = isset($_POST["original_nom_filiere"]) ? $_POST["original_nom_filiere"] : "";
    $original_jour = isset($_POST["original_jour"]) ? $_POST["original_jour"] : "";
    $original_debut_seance = isset($_POST["heure_debut"]) ? $_POST["heure_debut"] : "";
    $original_fin_seance = isset($_POST["heure_fin"]) ? $_POST["heure_fin"] : "";

    $new_nom_filiere = mysqli_real_escape_string($con, $_POST["nom_filiere"]);
    $new_date = mysqli_real_escape_string($con, $_POST["date_seance"]);
    $new_debut = mysqli_real_escape_string($con, $_POST["heure_debut"]);
    $new_fin = mysqli_real_escape_string($con, $_POST["heure_fin"]);

    // Perform the database update
    $update_query = "UPDATE emploi_temps SET nom_filiere = '$new_nom_filiere', date_seance = '$new_date',
        heure_fin = '$new_fin', heure_debut = '$new_debut'
        WHERE nom_filiere = '$original_nom_filiere'
        AND date_seance = '$original_jour'
        AND heure_debut = '$original_debut_seance'
        AND heure_fin = '$original_fin_seance'";

    $update_result = mysqli_query($con, $update_query);

    if ($update_result) {
        echo "Record updated successfully.";
    } else {
        echo "Error updating record: " . mysqli_error($con);
    }
} else {
    echo "Invalid request.";
}





mysqli_close($con);
?>
