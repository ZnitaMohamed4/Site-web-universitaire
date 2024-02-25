<?php 
include("conn.php");
if(isset($_GET['id'])){
  $id_filiere = $_GET['id'];
}

$sql  = "DELETE FROM periodes_soutenance where nom_filiere = '$id_filiere'";
$res = mysqli_query($conn , $sql);

if ($res) {
  echo "<script>
          alert('Supression réussie !');
        </script>";
} else {
  echo "<script>
  alert('Erreur lors de la Supression !');
        </script>";
}


?>