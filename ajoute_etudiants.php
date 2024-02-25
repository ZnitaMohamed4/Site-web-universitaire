<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une nouvelle classe d'étudiants à un module</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        select, input[type="submit"] {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>AJOUTER UNE NOUVELLE CLASSE D'ÉTUDIANTS À UN MODULE</h2>

        <?php
        echo "AJOUTER UNE NOUVELLE CLASSE D'Etudiants a un module  <br>" ;
        //include "functions_resp.php" ;
        $con = mysqli_connect("localhost", "root", "", "our_project");

        // Check the connection
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }

        function ajouter_etudiants($con) {
            $req1 = "SELECT * FROM etudiants";
            $req2 = "SELECT * FROM modules";

            $result1 = mysqli_query($con, $req1);
            $result2 = mysqli_query($con, $req2);

            if ($result1 && $result2) {
                echo '<form action="form_etudiants.php" method="get">';

                // First selection for salle_non_lies
                echo '<select name="selected_salle">';
                while ($row1 = mysqli_fetch_assoc($result1)) {
                    echo '<option value="' . $row1["email_insti"] . '">' . $row1["email_insti"] . '</option>';
                }
                echo '</select>';

                // Second selection for departements
                echo '<select name="selected_dep">';
                while ($row2 = mysqli_fetch_assoc($result2)) {
                    echo '<option value="' . $row2["nom_module"] . '">' . $row2["nom_module"] . '</option>';
                }
                echo '</select>';

                echo '<input type="submit" value="Ajouter Etudiant" name = "ajouter_etd">';
                echo '</form>';

                mysqli_free_result($result1);
                mysqli_free_result($result2);
            }

}
        ajouter_etudiants($con) ;
        mysqli_close($con);
        ?>


        <!-- <form action="form_etudiants.php" method="get">
            <?php
            // Your existing PHP code here...
            ?>
            <input type="submit" value="Ajouter Etudiant" name="ajouter_etd">
        </form> -->
    </div>

</body>
</html>
