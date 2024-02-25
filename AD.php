<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/deuxStyle.css">
    <title>Document</title>

    
</head>
<body>
  <?php 
  include "header.html" ; 
  ?>


<div class="main-container"  >

<div class="partie-right" style="margin : 95px 0px 0px 20px ">

   
            <table class="table_tete">
                <tr>
                    <th id="obj">OBJECTIFS</th>
                    <th id="pro">PROGRAMME</th>
                    <th id="comp">COMPETENCES VISEES ET DEBOUCHES </th>
                    <th id="coor">COORDINATEUR</th>
                </tr>
            </table>
                <p id="descr">La Licence Science et Techniques en analytique des données
                    permet aux étudiants de doter de compétences en matière d'outils informatiques, 
                    des techniques et des méthodes statistiques pour permettre d’organiser, de synthétiser et de traduire efficacement les données métier d’une organisation. L'étudiant doit être en mesure d'apporter
                    un appui analytique à la conduite d'exploration et à l'analyse complexe de données.
                    </p>
            
            <table id="table_pro"   style="display:none ">  <!-- table programme --> 
                <tr>
                    <td>Semestre 5</td>
                    <td><ul>
                        <li> Mathématiques pour la science des données</li>
                        <li>Structures des données avancées et théorie des graphes</li>
                        <li>Fondamentaux des bases de données</li>
                        <li>Algorithmique avancée et programmation</li>
                        <li>Développement WEB</li>
                        <li>Développement personnel et intelligence émotionnelle (Soft skills)</li>
                    </ul>
                </td>
                </tr>
                <tr>
                    <td>Semestre 6</td>
                    <td>
                        <ul>
                            <li>Analyse et fouille de données</li>
                            <li> Systèmes et réseaux</li>
                            <li> Ingénierie des données</li>
                            <li>PFE</li>
                        </ul>
                    </td>
                </tr>
            </table>

            <ul id="list_COMPETENCES" style="display:none">
                <li>Masters en sciences de données: fouille de données, business analytiques, blockchain,</li>
                <li>Masters orientés e-Technologies: e-Business, e-Administration et e-Logistique</li>
                <li>Formations d’Ingénieurs dans une école d’ingénieurs à l’issue de la deuxième ou de la troisième année de licence</li>
                <li>Data scientist</li>
                <li>Technicien supérieur en SGBD R : installation, configuration et administration des SGBD</li>
                <li>WebMaster et développeur de sites web dynamiques</li>
                <li>Intégration du monde du travail dans les entreprises et les bureaux d’études</li>
            </ul>

            <p id="des_coor" style="display:none; "> <span style="color: red ;">Coordinnateur : </span> Pr.BAIDA Ouafae  <span>wbaida@uae.ac.ma</sapn> </p>
</div>
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
            <!-- <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fweb.facebook.com%2Fpages&tabs=timeline&width=1%25&height=100%25&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="100%" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe> -->

            </div>
        </div>

<!-- ===================================== -->
<!-------- footer ---------->
<!-- ===================================== -->

<?php 
include "footer.html" ; 
?>




 </body>
</html>


<script src="js/index.js"></script>
