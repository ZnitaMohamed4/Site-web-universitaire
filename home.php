<!DOCTYPE html>
<html lang="fr">

</html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icons" href="images/logo.png">
<title>University</title>
<link rel="stylesheet" href="css/deuxStyle.css">
<link rel="stylesheet" href="css/style.css">

</head>
<body>
    <?php include "header.html"  ?>

        <section class="wellcom">

            <div class="div-wellcom">
                <h1> <strong>Bienvenue</strong> <br> à la Faculté des Sciences et Techniques de Tanger</h1>
            <p>relevant de l’Université Abdelmalek Essaâdi a 
                été créée en 1995. Elle fait partie des établissements
                 de l’enseignement supérieur à accès régulé et a pour missions
                  la formation initiale dans les domaines scientifiques et techniques, 
                  la formation continue ainsi que la recherche et le développement 
                  dans les domaines des sciences et techniques..</p>
                  <a href="presentation.php" class="btn-header">Visit Us to Know More</a>
                </div>
            </section>


           <hr class="ligne">
           <div class="main-container">

           <div class="partie-right" style="width: 70%;">

                   <!-- #########################################
                                partie Departement   
                        ##########################################
                    -->
                    <section class="depart">
                        <h1>Notre départements</h1>
                        <p></p>
                            <div class="depart-row">
                                <div class="depart-col">
                                    <img src="image/info.jpg">
                                    <div class="text-depart">
                                        <h3>Informatique</h3>
                                    </div>
                                </div>
                                <div class="depart-col">
                                    <img src="image/civil.jpg">
                                    <div class="text-depart">
                                        <h3>Civil</h3>
                                    </div>
                                </div>
                                <div class="depart-col">
                                    <img src="image/math.jpg">
                                    <div class="text-depart">
                                        <h3>Mathimatique</h3>
                                    </div>
                                </div>
                                
                            </div>
                    </section>  

                    <!-- #########################################
                                partie formation  
                        ##########################################
                    -->
        <section class="Formation">
                                    <h1>FORMATION INITIALE </h1>
                                    <p>La FST de Tanger offre des cursus de formation qui préparent aux diplômes suivants :</p>
                                    <div class="formation-row">
                                        <div class="formation-col">
                                            <h3><a href="deust.php">DEUST</a></h3>
                                            <p>Diplôme d’Etudes Universitaire en Sciences et Techniques (Bac +2)</p>
                                        </div>
                                        <div class="formation-col">
                                            <h3> <a href="licence.php">licences </a> </h3>
                                            <p> Diplôme de Licence en Sciences et Techniques (Bac +3)</p>

                                        </div>
                                        <div class="formation-col">
                                            <h3><a href="">MASTRE</a></h3>
                                            <p>Diplôme de Master en Sciences et Techniques (Bac +5)</p>
                                        </div>
                                    </div>
                               
                                    <div class="formation-row">
                                        <div class="formation-col">
                                            <h3><a href="">IN</a> </h3>
                                            <p> Diplôme d’Ingénieur d’État (Bac +5)</p>
                                        </div>
                                        <div class="formation-col">
                                            <h3><a href="">Doctorat</a> </h3>
                                            <p>Doctorat en Sciences et Techniques (Bac +8)
                                            </p>
                                        </div>
                                        <div class="formation-col">
                                            <h3><a href="">LP</a> </h3>
                                            <p>Diplôme de Licence Professionnel en  Techniques </p>
                                        </p>
                                        </div>


                                    
                                    </div>
                                
                                </section>

                  

                    <!-- 
                        ###############################################
                                        Nos infrastructures
                        ################################################
                    -->

                    <section class="infrast">
                        <h1>Nos infrastructures</h1>
                        <p>]</p>
                            <div class="infra-row">
                                <div class="infras-col">
                                    <img src="image/library.jpg">
                                    <h3>Bibliothèque de classe</h3>
                                    <p>un lieu qui abrite une collection organisée de livres et d'autres documents, accessible aux etudiants pour la consultation, la lecture et l'emprunt.
                                    </p>
                                    </div>

                                    <div class="infras-col">
                                    <img src="image/sport.jpg">
                                    <h3>grand terrain de jeu</h3>
                                    <p>LUn immense terrain s'ouvre devant nous, une toile vierge prête à accueillir des rêves et des ambitions</p>
                                </div>
                                <div class="infras-col">
                                    <img src="image/restau.jpg">
                                    <h3>restaurante</h3>
                                    <p>Dans l'université, le restaurant est l'endroit idéal pour une pause gourmande entre les cours..</p>
                                </div>
                            </div>
                    </section>
        </div>
           <!-- 
                        ###############################################
                                        partie les announce 
                        ################################################
                    -->

        <div class="partie-left">
            <div class="text-announce">
                <h4>
                   Dernières Actualités
               </h4>
           </div>
           
           <hr>
           <ul class="announce">
               <?php 
               $conn = mysqli_connect('localhost','root','','our_project') ; 
               $requet = 'select * FROM annonces_generales 
                               ORDER BY  date_annonce  DESC
                                               LIMIT 5 ';
                                               
                        $resul = mysqli_query($conn , $requet) ;  
                        while($donn = mysqli_fetch_assoc($resul))
                        { ?>
                          
                           <li><a href=""><?php echo $donn['text_annonce'] ;  ?></a> <p><?php echo $donn['date_annonce'] ;?></p></li>
                       
                       <?php
                       } ?>
                       
                                             
              
           </ul>
            <!-- <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fweb.facebook.com%2Fpages&tabs=timeline&width=100%25&height=100%25&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="100%" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe> -->
        </div>
  </div>
     <!-- 
                        ###############################################
                                        partie les footer 
                        ################################################
                    -->

    <?php include "footer.html"   ?>