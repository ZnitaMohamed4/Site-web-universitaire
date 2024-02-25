<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Période de Soutenance</title>
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

        .form-container {
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

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input, select,textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
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

<div class="form-container">
    <h2>Ajouter Période de Soutenance</h2>
    <form action="" method="post">
        <label for="filiere">Filière :</label>
        <select id="filiere" name="filiere" required>
            <option value="IDAI">IDAI</option>
            <option value="AD">AD</option>
            <option value="MID">MID</option>
            <option value="DIP">DIP</option>
        </select>

        <label for="periode">Période :</label>
        <input type="text" id="periode" name="periode" required>

        <label for="date_debut">Date de début :</label>
        <input type="date" id="date_debut" name="date_debut" required>

        <label for="date_fin">Date de fin :</label>
        <input type="date" id="date_fin" name="date_fin" required>

        <label for="description">Description :</label>
        <textarea id="description" name="description" rows="4" required></textarea>

        <button type="submit" name="submit">Ajouter</button>
    </form>
</div>

<?php
include("conn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $filiere = $_POST['filiere'];
    $periode = $_POST['periode'];
    $date_debut = $_POST['date_debut'];
    $date_fin = $_POST['date_fin'];
    $description = $_POST['description'];

    $sql = "INSERT INTO periodes_soutenance (nom_filiere, periode, date_debut, date_fin, description) 
            VALUES ('$filiere', '$periode', '$date_debut', '$date_fin', '$description')";

    if (mysqli_query($conn, $sql)) {
     
     ?>
        <script>
            alert("Période ajoutée avec succès !") ; 
        </script>    
        
    <?php 
       
       
    } else {   ?>

<script>
            alert("periode n est pas ajoutee check par la technicien  !") ; 
        </script>  

    <?php 

    }
}

mysqli_close($conn);
?>

</body>

</html>
