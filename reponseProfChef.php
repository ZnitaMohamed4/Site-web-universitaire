<!-- <label for="nom_filiere">Filiere :</label>
        <select id="nom_filiere" name="nom_filiere" required>
            <option value="IDAI" >IDAI</option>
            <option value="AD">AD</option>
        </select> -->

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
    <title>Répondre à l'Étudiant</title>
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

        input, select,textarea {
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
        <h2>Répondre à l'Étudiant</h2>
        <form action="" method="post">
           <label for="sujet">ID demande :</label>
            <input type="text" id="id_demande" name="demande" value="<?php if(isset($_GET['id'])){
        echo $id;
      } ?>" required>
            <label for="">ID Prof :</label>
            <input type="text" id="id_prof" name="prof" value="<?php if(isset($_GET['id'])){ echo $id_prof; } ?>" required>


            <label for="destinataire">Destinataire (Email de l'étudiant) :</label>
            <input type="email" id="destinataire" name="destinataire" value="<?php  if(isset($_GET['id'])){
        echo $email;
      } ?>" required>

            <label for="sujet">Sujet :</label>
            <input type="text" id="sujet" name="sujet" value="<?php  if(isset($_GET['id'])){
        echo $sujet;
      }   ?>" required>

            <label for="message">Reponse :</label>
            <textarea id="message" name="reponse" rows="8" required></textarea>

            <label for="">Auteur :</label>
        <select id="" name="auteur" required>
            <option value="professeur" >professeur</option>
            <option value="cheff">cheff</option>
        </select>

            <button type="submit" name="btn">Envoyer</button>
        </form>
    </div>
</body>
</html>


<?php
include("conn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btn'])){
    $id_prof = $_POST['prof'];
    $id_demande = $_POST['demande'];
    $email_insti = $_POST['destinataire'];
    // $sujet = $_POST['sujet'];
    $sujet = mysqli_real_escape_string($conn, $_POST['sujet']);
    $reponse = $_POST['reponse'];
    $Auteur = $_POST['auteur'];

    // Ajoutez des guillemets autour des valeurs non numériques
    // $sql = "INSERT INTO reponse_demande (id_prof, id_demande, email_insti, objet_demande,reponse_text) VALUES ('$id_prof', '$id_demande', '$email_insti', '$sujet' , '$reponse')";
       $sql = "INSERT INTO reponse_demande (id_prof, id_demande, email_insti, objet_demande, reponse_text,auteur) VALUES ('$id_prof', '$id_demande', '$email_insti', '$sujet', '$reponse','$Auteur')";
    $res = mysqli_query($conn, $sql);

    if($res){
        echo "<h3 style='color:green'>Done</h3>";
    } else {
        echo "<h3 style='color:red'>Erreur</h3>";
    }
}
?>



