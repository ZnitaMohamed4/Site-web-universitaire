<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/deuxStyle.css">
    <title>Deust</title>
</head>
<body>
 <?php 
 include 'header.html' ; 
 ?>

    <div class="main-container">

        <div class="partie-right" >

                <!-- 
                    #############################################
                        FORMATION DEUST      padding-left: 190px;
                    #############################################

                 -->
                 <h1 style="text-align: center; margin-top: 100px  ; margin-bottom : 80px ; ">FORMATION DEUST  </h1>
                 <section class="Formation">
      
        <div class="deust" style="margin-top: -60px;">
         
             <div class="deust-col">
                <h3><a href="mip.php">MIP</a></h3>
                <p>MATHÉMATIQUES-INFORMATIQUE-PHYSIQUE-CHIMIE</p>
                <hr class="ligne_deust" >
            </div>
      
            <div class="deust-col">
                <h3> <a href="licences.php">MIPC </a> </h3>
                <p>MATHÉMATIQUES-INFORMATIQUE-PHYSIQUE-CHIMIE</p>
                <hr class="ligne_deust" >
                
            </div>
            <div class="deust-col">
                <h3><a href="">GEGM</a></h3>
                <p>GÉNIE ELECTRIQUE – GÉNIE MÉCANIQUE</p>
                <hr class="ligne_deust" >

            </div>
        
   
        
            <div class="deust-col">
               
                <h3><a href="">BCG</a> </h3>
                <p> BIOLOGIE-CHIMIE-GEOLOGIE</p>
                <hr class="ligne_deust" >

            </div>
          
        </div>
        
         </section>
       </div>
       <!-- 
        ####################################################
                partie page facebook et announce 
        ###################################################
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
                        
                                              
               
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fweb.facebook.com%2Fpages&tabs=timeline&width=100%25&height=100%25&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="100%" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
        </div>
    </div>

    <section class="footer">
        <div class="footer-top">
    
            
                <div class="lien">
                    <h13>Liens Utiles :</h3>
                    <ul>
                        <li><a href="">Site de l'Universite</a></li>
                        <li><a href="">Enseignement Superieur </a></li>
                        <li><a href="">Portail des unversites marocaines</a></li>
                        <li> <a href="">Le Conseil Superieur de lEnsegnemnt</a> </li>
                        <li><a href="">CNRST</a></li>
                        <li><a href="">Portail National du Maroc </a></li>
                    </ul>
                </div>
                <div class="maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12954.441742184514!2d-5.913271824904841!3d35.73579819108736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0b87d71f995045%3A0xc35a87c33b565280!2sFaculty%20of%20Sciences%20and%20Technologies%20Tangier!5e0!3m2!1sen!2sin!4v1704508761746!5m2!1sen!2sin" width="720" height="445" frameborder="0" style="border:0" allowfullscreen></iframe>
    
                </div>
                    <div class="contact">
                        <h3>Contactez Nous</h3>
                        <ul>
                            
                            <li>
                                <img src="image/call.png" alt="phone">
                                + 212 (0) 5 39 39 39 54 / 55</li>
                            <li>
                                <img src="image/mail.png" alt="email">
                                administration.fstt@uae.ac.ma</li>
                        </ul>
                        <div class="social">
                            <ul>
                                <li> <img src="image/inst.png" alt="inst"></li>
                                <li> <img src="image/link.png" alt="link"></li>
                                <li> <img src="image/face.png" alt="face"></li>
                            </ul>
                        </div>
    
    
                    </div>
        </div>
        <div class="footer-bottom" >
            <p>Faculté des Sciences et Techniques de Tanger - Université Abdelmalek Essaâdi</p>
        </div>
    </section>



    
    
</body>
</html>