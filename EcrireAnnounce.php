<?php 
include("conn.php");

if(isset($_GET['id'])){
  $idS = $_GET['id'];


$sql =" SELECT * FROM emploi_temps where id_seance = '$idS'";
$res = mysqli_query($conn , $sql);

while($row = mysqli_fetch_assoc($res)){
  $id_prof = $row['id_prof'];
  $Module = $row['nom_module'];
  $nomFil = $row['nom_filiere'];
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Créer une annonce</title>

    <style>
 body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

.container {
    background-color: #fff;
    width: 50%;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 8px;
}

input,
textarea {
    margin-bottom: 16px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
   
}
textarea{
  height: 40px;
}

button {
    padding: 10px;
    background-color: green;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

/* button:hover {
    background-color: greenyellow;
} */

    </style>
</head>
<body>
    <div class="container">
      <h2>Ecrire Announce </h2>
      <hr>
      <br>
        <form action="" method="POST">
            <label for="professor">ID Professeur :</label>
            <input type="text" id="professor" value="<?php echo $id_prof ?>" name="prof" required>

            <label for="filiere">Filiere :</label>
            <input type="text" id="fill" name="fill" value="<?php echo $nomFil ?>" required>


            <label for="date">Date de l'annonce :</label>
            <input type="date" id="date" name="date"  required>

            <label for="announce">Annonce :</label>
            <textarea id="announce" name="announce" required></textarea>

            <!-- Ajoutez d'autres champs au besoin -->

            <button type="submit" name="btn">Ajouter l'annonce</button>
        </form>
    </div>
</body>
</html>


<?php
include("conn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btn'])){
    $id_prof = $_POST['prof'];
    $date_announce = $_POST['date'];
    $announce = $_POST['announce'];
    $fill = $_POST['fill'];

    // Ajoutez des guillemets autour des valeurs non numériques
    $sql = "INSERT INTO annonces_specifiques (id_prof, nom_filiere, date_annonce, annonce_text) VALUES ('$id_prof', '$fill', '$date_announce', '$announce')";

    $res = mysqli_query($conn, $sql);

    if($res){
        echo "<h3 style='color:green'>Done</h3>";
    } else {
        echo "<h3 style='color:red'>Erreur</h3>";
    }
}
?>
