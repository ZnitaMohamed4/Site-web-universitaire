<?php
include("conn.php");


if (isset($_GET['id'])) {
    $ID = $_GET['id'];

    
    $sql = "SELECT * FROM soutenance_planning WHERE ID ='$ID'";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        $row = mysqli_fetch_assoc($query);

        // recupuration des donnees pour afficher dans les inputs (cas modifications)
        $Titre = $row['Titre'];
        $Resumee = $row['Resumee'];
        $nom_filiere = $row['nom_filiere'];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
           // recupuration nouvelles infos apartir de l'inputs
          
           $Resumee = mysqli_real_escape_string($conn, $_POST['Resumee']);
           $Titre = mysqli_real_escape_string($conn, $_POST['Titre']);
           $nom_filiere = $_POST['nom_filiere'];
           

            // Met à jour les données dans la base de données
            $sql = "UPDATE soutenance_planning 
                    SET Titre = '$Titre', 
                    Resumee = '$Resumee', 
                    nom_filiere = '$nom_filiere'
                    WHERE ID = '$ID'";

           
            $res = mysqli_query($conn, $sql);

        //   verification
            if ($res) {
                echo "<h3 style='color:green'> Modification réussie !</h3>";
            } else {
                echo "<h3 style='color:red'> Erreur lors de la modification !</h3>";
            }
           
      
    } 
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Sujet</title>
    <link rel="stylesheet" href="style.css">
    <style>
     body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.announce-form {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    width: 100%;
}

h2 {
    text-align: center;
    color: #333;
}

hr {
    margin: 10px 0;
    border: 1px solid #ccc;
}

form {
    margin-top: 20px;
}

label {
    display: block;
    margin-bottom: 10px;
}

input, select {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical; /* Permet à l'utilisateur de redimensionner verticalement le textarea */
}

button {
    background-color: #4CAF50;
    color: #fff;
    border: none;
    padding: 10px 15px;
    cursor: pointer;
    border-radius: 4px;
    width: 100%;
}

button:hover {
    background-color: #45a049;
}

    </style>
</head>
<body>

<div class="announce-form">
    <h2>Modifier Sujet Num <?php echo $ID ?></h2>
    <hr>
    <br>
    <form action="" method="post">
        <label for="Titre">Titre :</label>
        <textarea id="Titre" name="Titre" rows="3" required><?php echo $Titre ?></textarea>

        <label for="Resumee">Resumee :</label>
        <textarea id="Resumee" name="Resumee" rows="8" required><?php echo $Resumee ?></textarea>

        <label for="nom_filiere">Filiere :</label>
        <select id="nom_filiere" name="nom_filiere" required>
            <option value="IDAI" <?php echo ($nom_filiere === 'IDAI') ? 'selected' : ''; ?>>IDAI</option>
            <option value="AD" <?php echo ($nom_filiere === 'AD') ? 'selected' : ''; ?>>AD</option>
        </select>

        <?php 
        
        ?>

        <button type="submit" name="btn">Modifier</button>
    </form>
</div>


</body>
</html>
