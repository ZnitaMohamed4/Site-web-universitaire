<!DOCTYPE html>
<html lang="utf-8"> 


<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icons" href="images/logo.png">
<title>University</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/deuxStyle.css">


</head>
<body>
    
<?php
    include "header.html" ; 
?>
    <!-- 
        ############################################################
            PARTIE MAIN TABLE PROGRAMME COORDINATEUR 
        #############################################################
     -->
     <div class="main-container" >

        <div class="partie-right" style="margin : 95px 0px 0px 20px ">
        
           
                    <table class="table_tete">
                        <thead>
                            <th id="obj">OBJECTIFS</th>
                            <th id="pro">PROGRAMME</th>
                            <th id="comp">COMPETENCES VISEES ET DEBOUCHES </th>
                            <th id="coor">COORDINATEUR</th>
                        </thead>
                       
                    </table>
                    <div id="descr" >
                        <p >La Licence Science et Technique
                             permet en Ingénierie de développement
                              d’applications informatiques aux étudiants :
                            </p>
                            <ul>
                                <li>d'avoir une culture de base scientifique.</li>
                                <li>d’acquérir une base solide dans les axes majeurs et fondamentaux de la discipline informatique : algorithmique, 
                                    programmation, bases de données, systèmes d’exploitations et réseaux.</li>
                                <li>de développer un savoir-faire technique en informatique : technologie objet, 
                                    informatique distribuée, architectures client-serveur 
                                    et n-tiers, applications hétérogènes...</li>
                                <li>d’améliorer leur niveau d’anglais</li>
                                <li>d’avoir une culture
                                     d’entreprise suffisante pour se faire une idée concrète
                                      sur le monde du travail.</li>
        
                            </ul>
                            </div>
                    
                    <table id="table_pro"   style="display:none ">  <!-- table programme --> 
                        <tr>
                            <td>Semestre 5</td>
                            <td><ul>
                                <li>Modélisations avancée et Méthodes de génie logiciel</li>
                                <li> Développement Web </li>
                                <li>Base de données Structurées et non Structurées</li>
                                <li>Programmation Orientée Objet en C++/Java</li>
                                <li>Systèmes et réseaux informatiques</li>
                                <li>Développement de soft skills</li>
                            </ul>
                        </td>
                        </tr>
                        <tr>
                            <td>Semestre 6</td>
                            <td>
                                <ul>
                                    <li>Innover, Entreprendre et s’initier à la Gestion d'une Entreprise avec un ERP</li>
                                    <li>  Initiation en développement mobile et Edge Computing</li>
                                    <li>Développement web avancé Back end (Python)</li>
                                    <li>PFE</li>
                                </ul>
                            </td>
                        </tr>
                    </table>
        
                    <ul id="list_COMPETENCES" style="display:none">
                        <li>Technicien supérieur en développement d’application en C++ et JAVA</li>
                        <li>Technicien supérieur en réseaux locaux : installation, configuration et administration des réseaux locaux</li>
                        <li>Technicien supérieur en SGBD R : installation, configuration et administration des SGBD</li>
                        <li>WebMaster et développeur de sites web dynamiques</li>
                        <li>Poursuivre des études supérieures en Informatique</li>
        
                    </ul>
        
                    <p id="des_coor" style="display:none; "> <span style="color: red ;">Coordinnateur : </span> Pr. KOUNAIDI Mohamed  <span>m.kounaidi@@uae.ac.ma</sapn> </p>
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





                     <!-- 
                        ###############################################
                                        partie les footer 
                        ################################################
                    -->
<?php 

    include "footer.html" ; 
?>

</body>
</html>



<script src="js/index.js"></script>