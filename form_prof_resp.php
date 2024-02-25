<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>




<?php
$con = mysqli_connect("localhost", "root", "", "our_project");

// Check the connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$nom_module = mysqli_real_escape_string($con, trim($_GET["nom_module"]));


echo $nom_module;


supprimer_resp_module($con, $nom_module);
function supprimer_resp_module($con, $nom_module)
{
    // Delete related rows from emploi_temps table
    $req_delete_emploi_temps = "DELETE FROM emploi_temps WHERE nom_module = '$nom_module'";
    $result_delete_emploi_temps = mysqli_query($con, $req_delete_emploi_temps);

    if (!$result_delete_emploi_temps) {
        die("Error in deleting related emploi_temps rows: " . mysqli_error($con));
    }

    // Delete the row from modules table
    $req_delete_module = "DELETE FROM modules WHERE nom_module = '$nom_module'";
    $result_delete_module = mysqli_query($con, $req_delete_module);

    if (!$result_delete_module) {
        die("Error in deleting module row: " . mysqli_error($con));
    } else {
        if (mysqli_affected_rows($con) > 0) {
            echo "Row deleted successfully!";
        } else {
            echo "No rows deleted. Check your WHERE clause.";
        }
    }
}


// Close the connection
mysqli_close($con);
?>


    
</body>
</html>