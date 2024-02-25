<?php
include("conn.php");

if (isset($_GET['id'])) {
    $id_filiere = $_GET['id'];

    $sql = "SELECT * FROM periodes_soutenance WHERE nom_filiere ='$id_filiere'";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        $row = mysqli_fetch_assoc($query);

        // recupuration des donnees pour afficher dans les inputs (cas modifications)
        $nomFiliere = $row['nom_filiere'];
        $periode = $row['periode'];
        $dateDebut = $row['date_debut'];
        $dateFin = $row['date_fin'];
        $description = $row['description'];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // recupuration nouvelles infos apartir de l'inputs
            $nomFiliere = $_POST['filiere'];
            $periode = $_POST['periode'];
            $dateDebut = $_POST['date_debut'];
            $dateFin = $_POST['date_fin'];
            $description = $_POST['description'];

            // Met à jour les données dans la base de données
            $sql = "UPDATE periodes_soutenance 
                    SET nom_filiere = '$nomFiliere', 
                        periode = '$periode', 
                        date_debut = '$dateDebut', 
                        date_fin = '$dateFin', 
                        description = '$description' 
                    WHERE nom_filiere = '$id_filiere'";

            $res = mysqli_query($conn, $sql);

            //   verification
            if ($res) {
                echo "<script>
                        alert('Modification réussie !');
                      </script>";
            } else {
                echo "<script>
                alert('Erreur lors de la modification !');
                      </script>";
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
    <title>Modifier Periode de la filiere <?php echo $id_filiere ?></title>
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

        .custom-alert {
            display: none;
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            z-index: 1000;
        }
    </style>

</head>
<body>

<div class="announce-form">
    <h2>Modifier Periode de la filiere <?php echo $id_filiere ?></h2>
    <hr>
    <br>
    <form action="" method="post">
        <label for="filiere">Filière :</label>
        <input type="text" name="filiere" value="<?php echo $nomFiliere ?>" required>

        <label for="periode">Période :</label>
        <input type="text" name="periode" value="<?php echo $periode ?>" required>

        <label for="date_debut">Date de début :</label>
        <input type="date" name="date_debut" value="<?php echo $dateDebut ?>" required>

        <label for="date_fin">Date de fin :</label>
        <input type="date" name="date_fin" value="<?php echo $dateFin ?>" required>

        <label for="description">Description :</label>
        <textarea name="description" rows="4" required><?php echo $description ?></textarea>

        <button type="submit">Modifier</button>
    </form>
</div>

</body>
</html>
