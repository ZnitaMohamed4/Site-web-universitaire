<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header_espace.css">
    <title>Document</title>
    
<style>
      *{
        font-family: 'Jost', sans-serif;
      }
   
        
        .container{
            justify-content: space-between;
            display: flex;
            margin: 20px 20px ;
            height: 800px ;
            /* align-items: center; */
        }
        .partie_right{
            /* background-color: red ; */
            width: 70% ; 
            /* text-align: center; */
            /* justify-content: center; */
            margin-left: 50px ;
            /* align-items: center; */
        }
        .partie_left{
            width: 30% ;
        }

        .table_tete{
            margin-top: 10px ;
            width: 103% ;

            margin-left: -10px ;
            margin-right: -10px ;
        }
        .table_tete th {
            cursor: pointer;
            /* margin :50px ;  */
        }

        .partie_left .text_announce{
            background-color: aqua;
            height: 50px ;
            display: flex;
            justify-content: center;
            align-items: center;
            align-content: center;
            font-size: 20px;
        }
        .partie_left  hr{
            height: 10px;
            width: 100%;
            background-color: #231e1d;
        }


        /* 
        ###################################################################
                    signale de panne 
        ###################################################################
        */
        .containerPanne{
            margin-top: 50px;
            margin-bottom: 100px;
            display: flex;
            /* justify-content: center; */
            font-family: 'Jost', sans-serif;
        }
        
        #signalPanneSection{
            width: 350px;
            height: 430px;
            
            background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
            border-radius: 10px;
            box-shadow: 5px 20px 50px #6937c5;
            margin-bottom: 150px;
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
   .label_delege{
            color: #fff;
            font-size: 2em;
            justify-content: center;
            display: flex;
            margin: 60px;
            font-weight: bold;
            cursor: pointer;
            transition: .5s ease-in-out;
        }
  input {
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

        /* 

        partie inofrmation  personnelle 
        */
        
        #partie_info {
               max-width: 600px;
               margin: 10px;
               background-color: #fff;
               padding: 20px;
               border-radius: 8px;
               box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
           }
   
           h1 {
               color: #333;
           }
   
           p {
               line-height: 1.6;
               color: #666;
           }
   
           .profile-image {
               width: 150px;
               height: 150px;
               border-radius: 50%;
               margin: 0 auto 20px;
               overflow: hidden;
           }
   
           .profile-image img {
               width: 100%;
               height: 100%;
               object-fit: cover;
           }

           #partie_demande{
            background-color: #fff ;
            padding: 15px ;
            border-radius: 5px ;
            width: 400px ;
            height: 700px ;
            margin-top: -150px;
            display: flex;
           }

           #partie_demande form label {
            font-size: large ;
            font-family: 'Jost', sans-serif;
          
           }
           #partie_demande form input {
          
                width: 60%;
                height: 20px;
                background: #e0dede;
                justify-content: center;
                /* display: flex; */
                /* margin: 20px auto; */
                padding: 10px;
                border: none;
                outline: none;
                border-radius: 5px;
           }
           #partie_demande textarea {
            width: 65%;
                height: 50px;
                background: #e0dede;
                justify-content: center;
                /* display: flex; */
                margin: 10px 200px 10px 50px ;
                padding: 10px;
                border: none;
                outline: none;
                border-radius: 5px;


           }
           #partie_demande select {
                width: 60%;
                height: 20px;
                justify-content: center;
                margin-left: 40px;
                outline: none;
                border-radius: 5px;

           }
           #partie_demande .button {
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



    </style>
</head>
<body>
    <?php 
    $Nom_etudiant = isset($_GET['nom_etudiant']) ? $_GET['nom_etudiant'] : '';
    $CNE_EUTIDANT = isset($_GET['CNE']) ? $_GET['CNE'] : '';

?>

    <!-- 
    ############################################################################
--------------------- partie logic de page  -----------------------------------
    ############################################################################


 -->

<?php 
$conn   = mysqli_connect("localhost","root","","our_project") ; 
$requet = "select *  from etudiants where CNE='".$CNE_EUTIDANT."'";
$result_info = mysqli_query($conn , $requet);

while($row = mysqli_fetch_assoc($result_info)){
    $nom_etudiant = $row['nom_etudiant'];
    $prenom_etudiant = $row['prenom_etudiant'];
    $email_insti = $row['email_insti'];
    $CNE = $row['CNE'];
    $password= $row['password'];
    $nom_filiere = $row['nom_filiere'];
    $annee_naissance= $row['annee_naissance'];
    $annee_universitaire = $row['annee_universitaire'];
}

?>
</div>

<!-- 
    ############################################################################
--------------------- partie header etudiant -----------------------------------
    ############################################################################


 -->
 <section class="header-espace">
        <h3 style="padding :5px ;  ">bienvenue <?php echo  $Nom_etudiant ?>  </h3>
        <nav>
            <ul>
                <li><a href="home.php"> HOME </a></li>
                <li><a href="form_log_sign_eudiant.php">LOGOUT </a></li>
            </ul>
        </nav>

    </section>


    <table class="table_tete">
            <th id=inforamtion> Informations personnelles </th>
             <th id="emplois_temps" >consulation des emplois de temps</th>
             <th id="realiser_demande" >Réaliser des demandes </th>
             <th id="signale_panne" >Signaler les pannes</th>
         </tr>
     </table>
        <div class="container">
            <div class="partie_right">
                    <!-- 
              #########################################################################################################  
              -------------------------- div Informations des etudiant a partie base de donne --------------------------
              #########################################################################################################  
                
                -->
                            <div id="partie_info" style="display:none ; ">
                                
                                    <div class="profile-image">
                                        <img src="image/anonymous.png" alt="etudiants Image">
                                    </div>
                                    <h1>Etudiant. <?php echo $nom_etudiant ." ".$prenom_etudiant ?></h1>
                                    <p><strong>CNE :</strong> <?php echo $CNE  ?></p>
                                    <p><strong>Email institutionnel :</strong> <?php echo $email_insti ?></p>
                                    <p><strong>Filiere :</strong> <?php echo $nom_filiere  ?></p>
                                    <p><strong>Date de Naissance : </strong><?php echo $annee_naissance  ?></p>
                                    <p><strong> Mot de pass :</strong> <?php echo  $password  ?></p>
                                    <p><strong> Année universitaire :</strong> <?php echo  $annee_universitaire  ?></p>
                                 
                            </div>

                                  <!-- 
              #########################################################################################################  
              -------------------------- login delege    --------------------------
              #########################################################################################################  
                
                -->
                <!-- <div class="container_deleger">

                    <div id="log_delegue" class="log_delege" style="display:none">
                        
                    <form method="post" action="log_in.php">
                        <label class="label_delege">Login etudiant</label>
                        <input type="email" name="email_exist" placeholder="Email" required="">
                        <input type="password" name="pass_exist" placeholder="Password" required="">
                        <input type="submit" value="Valider" class="button">
                    </form>
                </div>
            </div> -->

                            <!-- 
              #########################################################################################################  
              ------------------------- emploit des temps   --------------------------
              #########################################################################################################  
                
                -->


                
                <div class="emploi_temps" id="partie_emplois" style="display:none ; ">


                    <?php 


                    $conn = mysqli_connect("localhost", "root", "", "our_project");
                    $sql = "SELECT * FROM `emploi_temps` WHERE  nom_filiere = '$nom_filiere' ";
                    $result = mysqli_query($conn, $sql);

                    $seances = array('9:00', '12:00', '2:00', '4:00');
                    $jours = array('lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi');

                    echo "<table border='1'>";
                    // echo "<tr><th>Jour</th><th>Matière</th>";

                    // Generate header for each time slot
                    echo "<tr> <th></th>";
                    foreach ($seances as $seance) {

                        echo "<th>$seance</th>";
                    }
                    echo "</tr>";

                    // Generate rows for each day
                    foreach ($jours as $jour) {
                        echo "<tr>";
                        echo "<td>$jour</td>";

                        // Loop through time slots for each day
                        foreach ($seances as $seance) {
                            // Fetch the corresponding schedule information from the database
                            $sql = "SELECT * FROM `emploi_temps` WHERE nom_filiere = '$nom_filiere' AND jour = '$jour' AND heure_debut = '$seance'";
                            $result = mysqli_query($conn, $sql);

                            // Check if there is a schedule for the current day and time slot
                            if ($donn = mysqli_fetch_assoc($result)) {
                                
                                $matiere = $donn['nom_module'];
                                $nom_salle = $donn['nom_salle_lie'] ; 
                                echo "<td>$matiere <br /> <span> $nom_salle <span/></td>";
                            } else {
                                // If no schedule exists, display an empty cell
                                echo "<td></td>";
                            }
                        }

                        echo "</tr>";
                    }

                    echo "</table>";




 ?>
</div>


            
                                  <!-- 
              #########################################################################################################  
              -------------------------- signale de panne     --------------------------
              #########################################################################################################  
                
                -->
                <div class="containerPanne">
                    <div  id="signalPanneSection"  >
                            
                                    <form method="post" action="delegue.php">
                                        <label class="label_delege" >Login délégué</label>
                                        <input type="email" name="email" placeholder="Email" required="">
                                        <input type="password" name="mot_pass" placeholder="Password" required="">
                                        <input type="submit" name="submit_delegue" value="Valider" class="button">
                                    </form>
                        </div>
                </div>
                     <!-- 
              #########################################################################################################  
              -------------------------- realiser des demandes      --------------------------
              #########################################################################################################  
                
                -->

                <div  id="partie_demande" style="display: none;">
                    
                    
                            <form action="etu.php" method="post">
                            
                                
                                      
                                        <label for="object">Object :</label>
                                        <input type="text" placeholder="taper une objectif de demande " id="object" name="object" rows="4" required>
                                        <label for="id_prof">id_prof:</label>
                                        <input id="id_prof" name="id_prof" rows="4" required>
                                        <label for="nom_filiere">nom_filiere:</label>
                                        <input id="nom_filiere" name="nom_filiere" rows="4" required>
                                        <label for="email_insti"> email institutionnel:</label>
                                        <input id="email_insti" name="email_insti" rows="4" required>
                                    
                                    
                                        <label for="demande_text">Demande_text :</label>
                                        <textarea type="text" id="demande_text" name="demande_text" required></textarea> <br />
                                        <label for="dest">Destinataire</label> <br />
                                    <select id=dest name=dest required>
                                        <option value="professeur">professeur</option>
                                        <option value="cheff">Responsable d'une filière</option>
                                
                                    </select>
                                        <input type="submit" class="button" name="demande" value="Envoyer la demande">
                            </form>
                </div>

                    
            </div>

            <!-- 
                ###################################################################
                ---------- partie announce   ------------------------------------- 
                ###################################################################
                
             -->
            <div class="partie_left">
                <div class="text_announce">
                    <h4>
                    Dernières Actualités
                    </h4>
                </div>
                <hr>
                
                <ul class="announce">
                                <?php
                                 
                               

                                    $requete = 'SELECT * FROM annonces_specifiques ORDER BY date_annonce DESC LIMIT 7';
                                    $stmt = $conn->query($requete);

                                  
                                    while ($donn = mysqli_fetch_assoc($stmt)) {
                                        ?>
                                        <li>
                                            <a href=""><?php echo $donn['annonce_text']; ?></a>
                                            <p><?php echo $donn['date_annonce']; ?></p>
                                        </li>
                                        <?php
                                    }
                                    ?>

                            </ul>
            </div>
        </div>

          <!-- 
                ###################################################################
                ---------- partie footer   ------------------------------------- 
                ###################################################################
                
             -->

             <?php 
             include 'footer.html' ; 
             ?>


 




        <?php 
    //     include 'delegue.php' ; 
    //  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_delegue'])){
    //     login_delegue(); 

    //  }

?>

</body>
</html>

<script>

    /**
     *  les variable des table pour click  et affichage de la page correspondante
     * 
     */

var inforamtion =document.getElementById("inforamtion") ;
var signale_panne =document.getElementById("signale_panne") ;
var realiser_demande = document.getElementById("realiser_demande") ;
var emplois_temps = document.getElementById("emplois_temps") ;


/**
 * les variable des parties
 * 
 */
var partie_demande = document.getElementById("partie_demande") ; 
var signalPanneSection  = document.getElementById("signalPanneSection") ; 
// var log_delegue = document.getElementById("log_delegue") ; 
var partie_info = document.getElementById("partie_info") ; 
var partie_emplois = document.getElementById("partie_emplois") ; 

inforamtion.addEventListener('click' ,() => {
    partie_info.style.display ="block" ;
    signalPanneSection.style.display = 'none' ;
   
    partie_demande.style.display = "none" ; 
    partie_emplois.style.display = "none" ; 

}) ; 

realiser_demande.addEventListener('click' ,() => {
    partie_info.style.display ="none" ;
    signalPanneSection.style.display = 'none' ;
  
    partie_demande.style.display = "block" ; 
    partie_emplois.style.display = "none" ; 


}) ; 

signale_panne.addEventListener('click' ,() => {
    partie_info.style.display ="none" ;
    signalPanneSection.style.display = 'block' ;
   
    partie_demande.style.display = 'none' ; 
    partie_emplois.style.display = 'none' ; 


}) ; 
emplois_temps.addEventListener('click' ,function() {
    partie_info.style.display ="none" ;
    signalPanneSection.style.display = 'none' ;
  
    partie_demande.style.display = 'none' ; 
    partie_emplois.style.display = 'inline-block' ; 
  


}) ; 





</script>