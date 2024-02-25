<?php 
// Connexion à la base de données

// include("conn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['demande'])){
    $object = $_POST['object'];
$demande_text = $_POST['demande_text'];
$id_prof = $_POST['id_prof'];
$nom_filiere = $_POST['nom_filiere'];
$email_insti = $_POST['email_insti'];
$dest=$_POST['dest'];

    // Ajoutez des guillemets autour des valeurs non numériques
    $sql = "INSERT INTO demandes (object, demande_text, id_prof, nom_filiere, email_insti, dest) 
            VALUES ('$object', '$demande_text', '$id_prof', '$nom_filiere', '$email_insti', '$dest')";

    $conn = mysqli_connect("localhost","root","","our_project") ; 
    $res = mysqli_query($conn, $sql);

    if($res){
          // Afficher une alerte côté client en utilisant JavaScript
        echo '<script>alert("La demande a été envoyée avec succès.");</script>';
    } else {
        echo '<script>alert("Erreur .");</script>';
    }
}
?>
