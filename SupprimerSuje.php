<?php 
include("conn.php");
if(isset($_GET['id'])){
  $ID = $_GET['id'];
}

$sql  = "DELETE FROM soutenance_planning where ID = '$ID'";
$res = mysqli_query($conn , $sql);

if($res){
  echo "<h1 style='color:green'> Done ! </h1>";
} else{
  echo "<h1 style='color:red'> Erreur </h1>";
}


?>