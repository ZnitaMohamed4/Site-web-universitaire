<?php
echo "VOICI LES FILIERES DE LA FACULTE <br>" ;
//include "functions_resp.php" ;
$con = mysqli_connect("localhost", "root", "", "our_project");

// Check the connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


// Assuming you have the necessary database connection

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["nom_mod"], $_GET["nom_filiere"], $_GET["nom_prof"], $_GET["prenom_prof"], $_GET["email_prof"])) {
    $nom_mod = $_GET["nom_mod"];
    $nom_filiere = $_GET["nom_filiere"];
    $nom_prof = $_GET["nom_prof"];
    $prenom_prof = $_GET["prenom_prof"];
    $email_prof = $_GET["email_prof"];

    // Fetch the existing data for the specified record
    $result = mysqli_query($con, "SELECT DISTINCT
                  modules.nom_module,
                  modules.nom_filiere,
                  professeurs.nom_prof,
                  professeurs.prenom_prof,
                  professeurs.email_insti_prof
              FROM modules, professeurs
              WHERE modules.id_prof = professeurs.id_prof
              AND nom_module = '$nom_mod'
              AND nom_filiere = '$nom_filiere'
              AND nom_prof = '$nom_prof'
              AND prenom_prof = '$prenom_prof'
              AND email_insti_prof = '$email_prof'");

    if (!$result) {
        die('Error: ' . mysqli_error($con));
    }

    $row = mysqli_fetch_assoc($result);

    if ($row) {
        // Display the update form with pre-filled values
        echo '<form action="update_resp_filiere.php" method="post">
                <input type="hidden" name="original_nom_mod" value="' . $nom_mod . '">
                <input type="hidden" name="original_nom_filiere" value="' . $nom_filiere . '">
                <input type="hidden" name="original_nom_prof" value="' . $nom_prof . '">
                <input type="hidden" name="original_prenom_prof" value="' . $prenom_prof . '">
                <input type="hidden" name="original_email_prof" value="' . $email_prof . '">

                <label for="nom_mod">Nom du module:</label>
                <input type="text" name="nom_mod" value="' . $row['nom_module'] . '"><br>

                <label for="nom_filiere">Nom du filiere:</label>
                <input type="text" name="nom_filiere" value="' . $row['nom_filiere'] . '"><br>

                <label for="nom_prof">Nom du professeur:</label>
                <input type="text" name="nom_prof" value="' . $row['nom_prof'] . '"><br>

                <label for="prenom_prof">Prénom du professeur:</label>
                <input type="text" name="prenom_prof" value="' . $row['prenom_prof'] . '"><br>

                <label for="email_prof">Email du professeur:</label>
                <input type="text" name="email_prof" value="' . $row['email_prof'] . '"><br>

                <input type="submit" value="Update" name="update_button">
            </form>';
    } else {
        echo "Record not found.";
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update_button"])) {
    // Retrieve the updated values from the form
    $original_nom_mod = isset($_POST["original_nom_mod"]) ? $_POST["original_nom_mod"] : "";
    $original_nom_filiere = isset($_POST["original_nom_filiere"]) ? $_POST["original_nom_filiere"] : "";
    $original_nom_prof = isset($_POST["original_nom_prof"]) ? $_POST["original_nom_prof"] : "";
    $original_prenom_prof = isset($_POST["original_prenom_prof"]) ? $_POST["original_prenom_prof"] : "";
    $original_email_prof = isset($_POST["original_email_prof"]) ? $_POST["original_email_prof"] : "";

    $new_nom_mod = mysqli_real_escape_string($con, $_POST["nom_mod"]);
    $new_nom_filiere = mysqli_real_escape_string($con, $_POST["nom_filiere"]);
    $new_nom_prof = mysqli_real_escape_string($con, $_POST["nom_prof"]);
    $new_prenom_prof = mysqli_real_escape_string($con, $_POST["prenom_prof"]);
    $new_email_prof = mysqli_real_escape_string($con, $_POST["email_prof"]);

    // Perform the database update
    $update_query = "UPDATE chefs_filiere SET

        nom_filiere = '$new_nom_filiere',
        email_prof = '$new_email_prof'
        WHERE

        AND nom_filiere = '$original_nom_filiere'

        AND email_prof = '$original_email_prof'";

    $update_result = mysqli_query($con, $update_query);

    if ($update_result) {
        echo "Record updated successfully.";
    } else {
        echo "Error updating record: " . mysqli_error($con);
    }
} else {
    echo "Invalid request.";
}




?>
