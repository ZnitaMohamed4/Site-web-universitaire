<?php
include("conn.php");


if (isset($_GET['id'])) {
    $idS = $_GET['id'];

    
    $sql = "SELECT * FROM emploi_temps WHERE id_seance ='$idS'";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        $row = mysqli_fetch_assoc($query);

        // recupuration des donnees pour afficher dans les inputs (cas modifications)
        $nomModule = $row['nom_module'];
        $nomFiliere = $row['nom_filiere'];
        $Date_s = $row['date_seance'];
        $hd = $row['heure_debut'];
        $hf = $row['heure_fin'];
        $type_s = $row['type_seance'];
        $salle = $row['nom_salle_lie'];

        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
           // recupuration nouvelles infos apartir de l'inputs
            $nomModule = $_POST['module'];
            $nomFiliere = $_POST['filiere'];
            $Date_s = $_POST['date_seance'];
            $hd = $_POST['heure_debut'];
            $hf = $_POST['heure_fin'];
            $type_s = $_POST['type_seance'];
            $salle = $_POST['salle'];

            // Met à jour les données dans la base de données
            $sql = "UPDATE emploi_temps 
                    SET nom_module = '$nomModule', 
                        nom_filiere = '$nomFiliere', 
                        date_seance = '$Date_s', 
                        heure_debut = '$hd', 
                        heure_fin = '$hf', 
                        type_seance = '$type_s', 
                        nom_salle_lie = '$salle' 
                    WHERE id_seance = '$idS'";

           
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
    <title>Modifier Seance</title>
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

        label {
            display: block;
            margin-bottom: 10px;
        }

        input, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 4px;
        }
    </style>
</head>
<body>

<div class="announce-form">
    <h2>Modifier Séance Num <?php echo $idS ?></h2>
    <hr>
    <br>
    <form action="" method="post">
        <label for="module">Module :</label>
        <input type="text" name="module" value="<?php echo $nomModule ?>" required>

        <label for="filiere">Filière :</label>
        <input type="text" name="filiere" value="<?php echo $nomFiliere ?>" required>

        <label for="date_seance">Date de la Séance :</label>
        <input type="date" name="date_seance" value="<?php echo $Date_s ?>" required>

        <label for="heure_debut">Heure de début :</label>
        <input type="time" name="heure_debut" value="<?php echo $hd ?>" required>

        <label for="heure_fin">Heure de fin :</label>
        <input type="time" name="heure_fin" value="<?php echo $hf ?>" required>

        <label for="type_seance">Type de Séance :</label>
        <input type="text" name="type_seance" value="<?php echo $type_s ?>" required>

        <label for="salle">Nom de la Salle :</label>
        <input type="text" name="salle" value="<?php echo $salle ?>" required>

        <button type="submit">Modifier</button>
    </form>
</div>

</body>
</html>
