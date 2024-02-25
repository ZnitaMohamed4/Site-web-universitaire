<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/styleClubs.css">
   
  
</head>
<body>

  <!-- header -->

<?php
    include 'header.html' ; 


?> 


  <!-- ----- -->


  <div id="containerClubs">
    <div id="leftCl">
     <section class="Clubs">
         <h1>Les Clubs</h1>
         <p>Veuillez visiter le lien de chaque club  pour  obtenir davantage d'informations</p>
             <div class="row">
                 <div class="Clubs-col">
                     <a href="ENACTUS.php"><img src="image/logoENACTUS.jpg" alt=""></a>
                     <div class="layer">
                         <h3>ENACTUS</h3>
                     </div>
                 </div>
                 </div>
                 <div class="row">
                 <div class="Clubs-col">
                     <a href="beaugons.php"><img src="image/boug.jpeg" alt="H"></a>
                     <div class="layer">
                         <h3>BEAUGONS ENSEMBLE</h3>
                     </div>
                 </div>
                 </div>
                 <div class="row">
                 <div class="Clubs-col">
                     <a href="tgw.html"><img src="image/togetherWeCan.jpeg" alt="H"></a>
                     <div class="layer">
                         <h3>Together We Can</h3>
                     </div>
                 </div>
                 </div>
                 
           
     </section>
    </div>
    <!-- <iframe src="" frameborder="1" style="overflow: scroll;"> -->


    <!-- <div id="announcesCl">
        <div class="text-announce">

            <h2>Announces here</h2>
        </div>
        <br>
        <hr>

        <?php
        include("conn.php");

        $sql = "SELECT text_annonce, date_annonce FROM annonces_generales";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<p>" . $row["text_annonce"] . "</p>";
                echo "<p>" . $row["date_annonce"] . "</p>";
                echo "<br>";
                echo "<hr>";
            }
        } else {
            echo "Aucun résultat trouvé.";
        }

        // Fermer la connexion à la base de données
        $conn->close();
        ?>
    </div> -->

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




<!-- </iframe> -->



  
    </div>


    <!-- footer -->

  <?php 
    include 'footer.html' ; 
 
 ?>
  
</body>
</html>
