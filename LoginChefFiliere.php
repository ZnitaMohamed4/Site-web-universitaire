<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <link rel="stylesheet" href="css/log.css">
	<!-- <link rel="stylesheet" href="style.css"> -->

  <style>
     body {
	
			background-image: url('image/fstt.jpg'); 
            background-size: cover; 
            background-position: cover ; 
            background-repeat: no-repeat; 
			position: fixed;
			

		}
		.conainer-main{
	
			margin-left: 150%  ;
			margin-right: -150% ;
      margin-top:150px 
		}
    </style>
	
  

</head>
<body>
	



<div class="conainer-main">
	<div class="main" style="height: 375px;">  	


			
			<div class="login-chef-filiere">
				<form method="post" action="">
					<label for="chk" style="color: #fffefe; font-size :20px; text-align: center ; ">Login Chef Filiere</label>
					<input type="email" name="email_exist" placeholder="Email" required="">
					<input type="password" name="pass_exist" placeholder="Password" required="">
					<input type="submit" value="Valider" class="button">
          <input type="hidden" name="id_prof" value="<?php echo $id_prof; ?>">
				</form>
			</div>
		</div>
	</div>

  <?php

include("conn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $Email = $_POST['email_exist'];
    $Pass = $_POST['pass_exist'];

    $sql = "SELECT * FROM chefs_filiere WHERE email_chef = '$Email' AND password = '$Pass'";
    $res = mysqli_query($conn, $sql);

    if ($res) {
        // Utilisation de mysqli_num_rows pour vérifier si des résultats sont retournés
        if (mysqli_num_rows($res) > 0) {

          $row = mysqli_fetch_assoc($res);
          $nom_chef = $row['nom_chef'];
          $id_chef = $row['id_chef'];

            
          header("Location: EspaceChefFiliere.php?id_chef=$id_chef&nom_chef=$nom_chef");
            exit();
        } else {
            ?>
            <script>
                alert("Identifiants incorrects") ; 
            </script>

            <?php 
          
        }
    } else {
        echo "Erreur de requête : " . mysqli_error($conn);
    }
}

?>

	

</body>
</html>
