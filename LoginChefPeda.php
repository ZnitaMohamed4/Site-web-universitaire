<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <link rel="stylesheet" href="log.css">
	<link rel="stylesheet" href="style.css">

  <style>
       /* 
############################################################################
		style pour les page etudiants  log in sign up 
############################################################################
*/




/* .conainer-main{
	margin-left: 150%  ;
	margin-right: -150% ;
	margin-top:40%; 
	display: flex;
	justify-content: center;
	
	font-family: 'Jost', sans-serif;
	background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
	

}  */

.login{
	width: 350px;
    height: 400px;
    background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
    border-radius: 10px;
    box-shadow: 5px 20px 50px #6937c5;
    margin: 350px 430px ;
}



 input{
	width: 60%;
	height: 20px;
	background: #e0dede;
	justify-content: center;
	display: flex;
	margin: 20px auto;
	padding: 10px;
	border: none;
	outline: none;
	border-radius: 5px;
}
.button{
	width: 60%;
	height: 40px;
	margin: 10px auto;
	justify-content: center;
	display: block;
	color: #fff;
	background: #573b8a;
	font-size: 1em;
	font-weight: bold;
	margin-top: 20px;
	outline: none;
	border: none;
	border-radius: 5px;
	transition: .2s ease-in;
	cursor: pointer;
}
.button:hover{
	background: #6d44b8;
}

.login label{

	color: aqua;
	padding-top: 20px ;
	text-align: center;
    font-size: 10px;
	font-size: 2em;
	font-weight: bold;

	
}
body {
			 position:fixed ;
			 background-image: url('image/fstt.jpg'); 
            background-size: cover; 
            background-position: cover ; 
            background-repeat: no-repeat; 
			position: fixed; 
			

		}
		

    </style>
	
  

</head>
<body>
	


 <!-- login and sign up  -->
 	
	

			




			<div class="login">
				<form method="post" action="">
					<label for="chk" aria-hidden="true" >Login Responsable Pedagogique</label>
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

    $sql = "SELECT * FROM  responsable_pedagogique WHERE email_resp = '$Email' AND password = '$Pass'";
    $res = mysqli_query($conn, $sql);

    if ($res) {
        // Utilisation de mysqli_num_rows pour vérifier si des résultats sont retournés
        if (mysqli_num_rows($res) > 0) {

          $row = mysqli_fetch_assoc($res);
          $nomRes = $row['nom_res'];
          $id_resp = $row['id_resp'];

            
          header("Location: PageResp.php");
            exit();
        } else  {
			?>
			<script>
				alert("Identifiants incorrects") ; 
			</script>
			<?php
        }
    } 
	
}

?>

	

</body>
</html>
