<?php
$con = mysqli_connect("localhost", "root", "", "our_project");

// Check the connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$email_chef = mysqli_real_escape_string($con, $_GET["email_chef"]);
$id_chef = mysqli_real_escape_string($con, $_GET["id_chef"]);

echo $email_chef;
supprimer_chef($con, $email_chef , $id_chef);

function supprimer_chef($con, $email_chef , $id_chef)
{

  // Delete related rows from emploi_temps table
  $req_delete_emploi_temps = "DELETE FROM signalement_pannes WHERE id_chef  = '$id_chef
  '";
  $result_delete_emploi_temps = mysqli_query($con, $req_delete_emploi_temps);

  if (!$result_delete_emploi_temps) {
      die("Error in deleting related emploi_temps rows: " . mysqli_error($con));
  }



    $req = "DELETE FROM chefs_filiere WHERE email_chef = '$email_chef'";
    $result = mysqli_query($con, $req);
if($result){
  echo "delete succesfuly" ;
}

    if (!$result) {
        die("Error in supprimer_chef query: " . mysqli_error($con));
    }
}



// Close the connection
mysqli_close($con);
?>
