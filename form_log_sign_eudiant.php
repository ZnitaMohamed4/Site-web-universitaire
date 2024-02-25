<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <link rel="stylesheet" href="css/log.css">

  <style>
           body {
	
          background-image: url('image/fstt.jpg'); 
          background-size: cover; 
          background-position: cover ; 
          background-repeat: no-repeat; 
          position: fixed;
    
  
  }
  .conainer-main{
    margin: 30px 500px  ;
  }
  </style>

</head>
<body>
	

 
<?php  ?>

    <!-- 
            ##################################################################################
                        log in and sign up dans la meme fichier 
            ##################################################################################

     -->

 


<div class="conainer-main" >

	<div class="main" >  	
		<input type="checkbox" id="chk" aria-hidden="true">
    <!-- 
            ##################################################################################
                        partie sign up 
            ##################################################################################

     -->

			<div class="signup" >
				<form method="post" action="">
					<label for="chk" id="label_signup" aria-hidden="true" style="color: white">Sign up </label>
					<input type="text" name="nom" placeholder="Entere name" required>
					<input type="text" name="prenom" placeholder="Entrer prenom" required>
					<input type="text" name="filiere" placeholder="Entrer filiere" required>
					<input type="text" name="CNE" placeholder="CNE" required>
					<input type="email" name="email" placeholder="Email" required>
					<input type="password" name="pass" placeholder="Password" required>
	

					<input type="submit" class="button" value="Valider" >
				</form>
			</div>
			<div class="login">

              <!-- 
            ##################################################################################
                        partie  log in 
            ##################################################################################

     -->
				<form method="post" action="">
					<label for="chk" aria-hidden="true" >Login etudiant</label>
					<input type="email" name="email_exist" placeholder="Email" required="">
					<input type="password" name="pass_exist" placeholder="Password" required="">
					<input type="submit" value="Valider" class="button">
				</form>
			</div>
		</div>
	</div>
    <!-- 
    ----------------------------------------------------------------------------------
                partie log in php 
    ----------------------------------------------------------------------------------

     -->

    
  <?php  
  function login_etudiant(){
    $conn= mysqli_connect("localhost","root","","our_project") ; 

  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $Email = $_POST['email_exist'];
    $Pass = $_POST['pass_exist'];

    $sql = "SELECT * FROM etudiants WHERE email_insti = '$Email' AND password = '$Pass' ";
    $res = mysqli_query($conn, $sql);

    if ($res) {
        // Utilisation de mysqli_num_rows pour vérifier si des résultats sont retournés
        if (mysqli_num_rows($res) > 0) {

          $row = mysqli_fetch_assoc($res);
          $nom_etudiant = $row['nom_etudiant'];
          $CNE = $row['CNE'];

            
          header("Location: espace_etudiant.php?CNE=$CNE&nom_etudiant=$nom_etudiant");
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




  }

  function sign_up(){
    $conn= mysqli_connect("localhost","root","","our_project") ; 
 
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $Nom = $_POST['nom'] ; 
        $Prenom = $_POST['prenom'] ;
        $email = $_POST['email'] ; 
        $pass = $_POST['pass'] ;
        $CNE = $_POST['CNE'] ;
        $filiere = $_POST['filiere'] ;

        $requet = "INSERT INTO `etudiants_en_attende` (`email_insti`, `CNE`, `nom_etudiant`, `prenom_etudiant`, `password`, `nom_filiere`) VALUES (?,?,?,?,?,?)";
        $stmt = $conn->prepare($requet);
        $stmt->execute(array($email, $CNE, $Nom, $Prenom, $pass, $filiere));

        if($stmt){
            ?>
            <script>
                alert("Veuillez attendre jusqu'a la validation de votre enregistrement !") ; 
            </script>
            <?php
        }
        else{
            ?>
            <script>
                alert("Erreur d'enregistrement !") ; 
            </script>
            <?php
        }


    }

  }

  if(isset($_POST['email_exist']) &&isset( $_POST['pass_exist'])){

      login_etudiant() ; 
    }
    else{
        sign_up(); 
    }


?>
	
     
  
  




  
</body>
</html>
