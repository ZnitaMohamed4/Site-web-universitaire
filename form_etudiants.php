<?php
$con = mysqli_connect("localhost", "root", "", "our_project");

// Check the connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$email_etud = mysqli_real_escape_string($con, $_GET["selected_salle"]);
$nom_module = mysqli_real_escape_string($con, $_GET["selected_dep"]);

echo $email_etud ;
echo $nom_module ;

ajouter_etudiants_au_module($con, $email_etud, $nom_module);




// fonction pour ajouter salle a une departement
function ajouter_etudiants_au_module($con, $email_etud, $nom_module) {
    $req = "INSERT INTO modules_etudiant (nom_module, email_insti) VALUES ( '$nom_module' , '$email_etud')";
    $result = mysqli_query($con, $req);

    if ($result) {
        echo "etudiant added to module successfully.";


    } else {
        echo "Error adding etudiant to module: " . mysqli_error($con);
    }
}



?>
