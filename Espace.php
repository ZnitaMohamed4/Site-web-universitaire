<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/deuxStyle.css">
<!-- <link rel="stylesheet" href="style.css"> -->

<style>
    .espace  {
    width: 80%;
    padding-top: 100px;

    text-align: center;

}
.espace-row{
    margin-top: 5%;
    display: flex;
    justify-content: space-between; 
}
.espace-col{
    flex-basis: 31%;
    background: #d3c9c9;
    border-radius: 10px;
    margin-bottom: 5%;
    margin-left: 4%;
    padding: 20px 12px;
    box-sizing: border-box;
    transition: 1s;
  
}
.btn-espace{
    width: 250px ;
    height: 30px;
    
    /* background: #9e4fe9; */
    background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
    border: none ;
    border-radius:5px ;
    color: blue;
    transition: 1s;
    color :#d3c9c9 ; 
    margin-top: 50px ;


}
.btn-espace:hover{
    transform: scale(1.05);
    box-shadow:  0 0 20px 0px rgba(216, 12, 12, 1);
}
</style>
    <title>Espace </title>
</head>
<body>
    <!-- 
        ######################################################
                    header 
        ######################################################
     -->
     
      <?php include "header.html" ;  ?>

  



<!--    ###############################################################
                    partie  espace 
        ###############################################################           
 -->



 <section class="espace " style="margin: auto;" >
            <h1> Espaces  </h1>
            <p>ces espaces pour les etudiantes , professeur , chef departement , chef filiere </p>
            <div class="espace-row">
                <div class="espace-col">
                    <h3> <a href="form_log_sign_eudiant.php">Espaces Etudiantes </a> </h3>
                    <p>les espaces pour les étudiantes déjà inscrites à la FSTT</p>
                       <a href="form_log_sign_eudiant.php"> <input class="btn-espace" type="button" value="Login"> </a>
                </div>
                <div class="espace-col">
                    <h3> <a href="LoginProf.php">Espaces professeur </a></h3>
                    <p>les espace pour les proffesseur à la FSTT</p>
                    <a href="LoginProf.php"> <input class="btn-espace" type="button" value="Login"> </a>
                    
                </div>
                <div class="espace-col">
                    <h3><a href="LoginChefD.php" style="font-size:18px "> Espaces chef departement </a> </h3>
                    <p>les espace pour les chef de departement à la FSTT</p>
                    <a href="LoginChefD.php"> <input class="btn-espace" type="button" value="Login"> </a>
                    
                </div>
            </div>


          
            <div class="espace-row">
                <div class="espace-col">
                    <h3><a href="LoginChefFiliere.php"> Espaces chef filiere </a> </h3>
                    <p>les espace pour les chef de filiere à la FSTT</p>
                    <a href="LoginChefFiliere.php"> <input class="btn-espace" type="button" value="Login"> </a>

                </div>
                
                    <div class="espace-col">
                        <h3><a href="LoginChefPeda.php"> service pédagogique </a> </h3>
                        <p>les espace pour les responsabele de pédagogique à  la  FSTT</p>
                    <a href="LoginChefPeda.php"> <input class="btn-espace" type="button" value="Login"> </a>

                    </div>
               
            </div>
         
        </section>
      
  
 


     <!-- 
                        ###############################################
                                        partie les footer 
                        ################################################
                    -->

<?php 
    include "footer.html"
?>

  
</body>
</html>

    