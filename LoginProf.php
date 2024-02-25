<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title> Login Form</title>
  <link rel="stylesheet" href="css/log.css">


  <style>
       	body {
			/* min-height: 80vh; */
			/* position:fixed ; */
			background-image: url('image/fstt.jpg'); 
            background-size: cover; 
            background-position: cover ; 
            background-repeat: no-repeat; 
		}
    </style>
	
  

</head>
<body>
	



<div class="conainer-main" >
	<div class="main" style="height: 375px;" >  	




			<div class="loginProf">
				<form method="post" action="">
					<label for="chk" aria-hidden="true" style="color: #fffefe; font-size :25px ">Login Professeur</label>
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

    $sql = "SELECT * FROM professeurs WHERE email_insti_prof = '$Email' AND password = '$Pass'";
    $res = mysqli_query($conn, $sql);

    if ($res) {
        // Utilisation de mysqli_num_rows pour vérifier si des résultats sont retournés
        if (mysqli_num_rows($res) > 0) {

          $row = mysqli_fetch_assoc($res);
          $NomProf = $row['nom_prof'];
          $id_prof = $row['id_prof'];

            
          header("Location: EspaceProf.php?id_prof=$id_prof&NomProf=$NomProf");
            exit();
        } else { ?>
        <script>
            alert("Identifiants incorrects ")
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