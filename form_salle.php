<?php
$con = mysqli_connect("localhost", "root", "", "our_project");

// Check the connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


$nom_salle = mysqli_real_escape_string($con, $_POST["selected_salle"]);
$nom_departement = mysqli_real_escape_string($con, $_POST["selected_dep"]);


echo $nom_salle  .'<br / >';
echo $nom_departement .'<br / >' ;


ajouter_salle_au_dep($con, $nom_salle, $nom_departement);

// fonction pour ajouter salle a une departement
function ajouter_salle_au_dep($con, $nom_salle, $nom_departement) {
$req = "INSERT INTO salle_lies (nom_salle_lie, nom_departement) VALUES ('$nom_salle', '$nom_departement')";
$result = mysqli_query($con, $req);

if ($result) {
   


    echo "Salle added to department successfully. <br />";
    supprimer_salle_non_lie($nom_salle , $con) ;
      echo "Salle deleted from salles non lies  successfully.";
} 
else {
    echo "Error adding salle to department: " . mysqli_error($con);
}
}
// fonction pour supprimer une salle du tableau salles non lies
function supprimer_salle_non_lie($nom_salle , $con){
$req = "DELETE FROM salle_non_lies WHERE nom_salle_non_lie = '$nom_salle'";
$result = mysqli_query($con, $req);
}

// ajouter_salle($con);

?>
