<?php
include("conn.php");

$id = $email = "";

if(isset($_GET['id'])){
  $id = $_GET['id'];
  $sql = "SELECT * FROM demandes WHERE id_demande ='$id'";
  $query = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($query);

  $id = $row['id_demande'];
  $sujet = $row['object'];
  $email = $row['email_insti'];
  $id_prof = $row['id_prof'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Sujet</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
        padding: 20px;
        background-color: #f4f4f4;
    }

    .container {
        max-width: 600px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
        display: block;
        margin-bottom: 8px;
    }

    input, textarea, select {
        width: 100%;
        padding: 8px;
        margin-bottom: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    button {
        background-color: #4caf50;
        color: #fff;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
</style>

</head>
<body>
<div class="container">
    <h2>Ajouter Sujet</h2>
    <form action="" method="post">
        <label for="titre">Titre :</label>
        <input type="text" id="titre" name="titre" required>

        <label for="resumee">Resumee :</label>
        <textarea id="resumee" name="resumee" rows="6" required></textarea>

        <label for="fill">Filiere :</label>
        <select id="fill" name="fill" required>
            <option value="IDAI">IDAI</option>
            <option value="AD">AD</option>
            
        </select>

        <button type="submit" name="btn">Envoyer</button>
    </form>
</div>


    </div>
</body>
</html>


<?php
include("conn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btn'])){
    // $titre = $_POST["titre"];
    // $resumee = $_POST["resumee"];
    $filiere = $_POST["fill"];
    $resumee = mysqli_real_escape_string($conn, $_POST['resumee']);
    $titre = mysqli_real_escape_string($conn, $_POST['titre']);

    $sql = "INSERT INTO soutenance_planning (Titre, Resumee, nom_filiere) VALUES ('$titre', '$resumee', '$filiere')";
    $res = mysqli_query($conn, $sql);

    if($res){
        echo "<h3 style='color:green'>Done</h3>";
    } else {
        echo "<h3 style='color:red'>Erreur</h3>";
    }
}
?>



