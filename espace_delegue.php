<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signaler une Panne</title>
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

<div class="form-container">
    <h2>Signaler une Panne</h2>
    <hr>
    <br>
    <form action="panne.php" method="post">
        <label for="id_chef">ID Chef Filière :</label>
        <input type="text" name="id_chef" required>

        <label for="id_delegue">ID Délégué :</label>
        <input type="text" name="id_delegue" required>

        <label for="nom_salle_lie">Nom de la Salle liée :</label>
        <input type="text" name="nom_salle_lie" required>

        <label for="description">Description de la Panne :</label>
        <textarea name="description" rows="4" required></textarea>

        <button type="submit">Signaler la Panne</button>
    </form>
</div>

</body>
</html>