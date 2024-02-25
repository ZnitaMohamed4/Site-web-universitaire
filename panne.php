<?php Include("conn.php");
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $id_chef = $_POST['id_chef'];
    $id_delegue = $_POST['id_delegue'];
    $nom_salle_lie = $_POST['nom_salle_lie'];
    $description = $_POST['description'];

    // Préparer la requête SQL
    $sql = "INSERT INTO signalement_pannes (id_chef, id_delegue, nom_salle_lie, description, date_signalement)
            VALUES ('$id_chef', '$id_delegue', '$nom_salle_lie', '$description', curdate())";

    // Exécuter la requête
    if (mysqli_query($conn, $sql)) {
        echo '<script>alert("La reclamation  a été envoyée avec succès.");</script>';
    } else {
        echo "Erreur lors du signalement de la panne : " . mysqli_error($conn);
    }
}

// Fermer la connexion
mysqli_close($conn);
?>