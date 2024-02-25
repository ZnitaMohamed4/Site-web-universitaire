<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affecter une salle à un département</title>
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
        <h2>AFFECTER UNE SALLE À UN DÉPARTEMENT</h2>

        <?php
        // Your existing PHP code here...
        ?>

        <form action="form_salle.php" method="post">
            <?php

            
            echo "AFFECTER UNE SALLE A UN DEPARTEMENT <br>" ;
            //include "functions_resp.php" ;
            $con = mysqli_connect("localhost", "root", "", "our_project");

            // Check the connection
            if (!$con) {
                die("Connection failed: " . mysqli_connect_error());
            }

            function ajouter_salle($con) {
                $req1 = "SELECT * FROM salle_non_lies";
                $req2 = "SELECT * FROM departements";

                $result1 = mysqli_query($con, $req1);
                $result2 = mysqli_query($con, $req2);

                if ($result1 && $result2) {
                    echo '<form action="form_salle.php" method="post">';  // Change method to POST

                    // First selection for salle_non_lies
                    echo '<select name="selected_salle">';
                    while ($row1 = mysqli_fetch_assoc($result1)) {
                        echo '<option value="' . $row1["nom_salle_non_lie"] . '">' . $row1["nom_salle_non_lie"] . '</option>';
                    }
                    echo '</select>';

                    // Second selection for departements
                    echo '<select name="selected_dep">';
                    while ($row2 = mysqli_fetch_assoc($result2)) {
                        echo '<option value="' . $row2["nom_departement"] . '">' . $row2["nom_departement"] . '</option>';
                    }
                    echo '</select>';

                    echo '<input type="submit" value="AJOUTER LA SALLE ">';
                    echo '</form>';

                    mysqli_free_result($result1);
                    mysqli_free_result($result2);
                }


            }

            ajouter_salle($con);
            mysqli_close($con);
            ?>


  
        </form>
    </div>

</body>
</html>
