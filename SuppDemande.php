<?php 
include("conn.php");
if(isset($_GET['id'])){
  $idD = $_GET['id'];
}

$sql  = "DELETE FROM demandes where id_demande = '$idD'";
$res = mysqli_query($conn , $sql);

if($res){
  echo "<h1 style='color:green; text-align:center; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);'> Done! </h1>";
} else{
  echo "<h1 style='color:red'> Erreur </h1>";
}





?>