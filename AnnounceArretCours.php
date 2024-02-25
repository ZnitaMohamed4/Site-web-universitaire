<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poster une Annonce</title>
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

        textarea, input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        textarea {
            resize: vertical;
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
        a{
          text-decoration: none;
        }
    </style>
</head>
<body>

<div class="announce-form">
    <h2>Poster une Annonce</h2>
    <hr>
    <form action="" method="post">
        <label for="message">Message :</label>
        <textarea id="message" name="message" rows="6" required></textarea>

        <label for="date">Date de l'Annonce :</label>
        <input type="date" id="date" name="date" required>

        <button type="submit" name="btn">Poster</button>
    </form>
</div>

</body>
</html>


<?php
include("conn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    $date = $_POST['date'];

    $sql = "INSERT INTO annonces_generales (text_annonce, date_annonce) VALUES ('$message', '$date')";
    
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<h3 style='color:green'>Annonce ajoutée avec succès !</h3>";
    } else {
        echo "<h3 style='color:red'>Erreur lors de l'ajout de l'annonce !</h3>";
    }
}

?>
