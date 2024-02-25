<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>MIP</title>
<style>
    .partie-right{
        margin : 95px 0px 0px 20px ; 
    }
    .announce{
    list-style-type: none ;
}

.announce li a {
    color : #3F3F4D  ; 
}
</style>
  
</head>
<body>
  
<?PHP 
include "header.html" ; 
?>


  <!-- 
        ############################################################
            PARTIE MAIN TABLE PROGRAMME COORDINATEUR 
        #############################################################
     -->

<div class="main-container"  >

<div class="partie-right" >

   
            <table class="table_tete">
                <tr>
                    <th id="obj">OBJECTIFS</th>
                    <th id="pro">PROGRAMME</th>
                    <th id="comp">COMPETENCES VISEES ET DEBOUCHES </th>
                    <th id="coor">COORDINATEUR</th>
                </tr>
            </table>
            <div id="descr" >
                <p >L’objectif du tronc commun MIP est de donner à l’étudiant une base solide dans les matières scientifiques (physique, chimie et mathématiques etc…) qui vont lui permettre de continuer ses études dans les semestres S5 et S6 des cycles licences qui émanent de ce parcours tout en gardant la possibilité de se réorienter vers d’autres troncs communs comme MIPC et GE/GM. <br />
                Également, ce tronc commun permet à l’étudiant de postuler à des concours d’accès aux cycles ingénieurs dispensés dans notre établissement et aussi à des concours nationaux ou internationaux des écoles d’ingénieurs.

                    </p>
        
                    </div>
            
            <table id="table_pro"   style="display:none ">  <!-- table programme --> 
                <tr>
                    <td>Semestre 1 </td>
                    <td>
                        <ul>
                        <li>Circuits électriques et électroniques</li>
                        <li> Electricité</li>
                        <li>Analyse 1 : Fonction d’une variable réelle</li>
                        <li>Algèbre 1 : Polynômes et espaces vectoriels</li>
                        <li>Algorithmique et Programmation 1</li>
                        <li>Langues et Communication -LC1</li>
                        
                    </ul>
                </td>
                </tr>
                <tr>
                    <td>Semestre 2</td>
                    <td>
                        <ul>
                         <li> Thermodynamique</li>
                         <li>Mécanique du point et Optique géométrique</li>
                         <li>Analyse 2 : Calcul intégral et équations différentielles</li>
                         <li>Algèbre 2 : Réduction des endomorphismes et formes
                                        quadratiques</li>
                         <li> Structure de la matière</li>
                         <li>Langues et Communication –LC2</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>Semestre 3</td>
                    <td>
                        <ul>
                         <li> Mécanique des Solides</li>
                         <li>Analyse 3 : Fonctions de plusieurs variables et calcul des intégrales multiples</li>
                         <li> Statistique descriptive/probabilités</li>
                         <li>Algorithmique et Programmation 2</li>
                         <li>Réactivité chimique</li>
                         <li> Langues et Communication –LC3</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>Semestre 4</td>
                    <td>
                        <ul>
                         <li>Électromagnétisme</li>
                         <li>Mécanique quantique et Relativité</li>
                         <li>Analyse 4: Séries de fonctions et calcul des résidus</li>
                         <li>Structure de données en C</li>
                         <li>Chimie organique 1</li>
                         <li>Chimie minérale 1</li>
                        </ul>
                    </td>
                </tr>

            </table>

            <ul id="list_COMPETENCES" style="display:none">
             <!-- vide  -->

            </ul>

            <p id="des_coor" style="display:none; "> <span style="color: red ;">Coordinnateur pédagogique : </span> Pr. Jbilou Mohammed   <span> mjbilou@uae.ac.ma</sapn> </p>
</div>
    <div class="partie-left" >
        <h4 class="text-announce">
        Dernières Actualités
        </h4>
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
</div>
</div>

<!-- ===================================== 
        -------- footer -------
      =====================================   -->


<?php 
include "footer.html" ; 
?>  

 </body>
</html>



<script src="js/index.js"></script>
   