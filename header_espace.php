<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header_espace.css">
    <title>Document</title>
</head>
<style>
        .header-espace {
            /* color: white; */
            margin: -10px ;
            padding: 10px ;
            background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);

            display: flex;
            justify-content: space-between;
            align-items: center;
         

        }
        .header-espace nav  {
            display:flex  ;
            padding-left: 50px;
            justify-content: space-between;
            align-items: center;
        }
        .header-espace nav ul   {
            display: flex;
            align-items: center;
            justify-content: space-between;
            list-style: none ;


        }
        .header-espace nav ul li {
            
            padding: 0px 20px  ;
            float: left ;

        }
        .header-espace nav ul li  a {
            text-decoration: none ;
            color: burlywood ;
        }
        .header-espace   h3{
            color: burlywood ;

        }



    </style>
<body>
<section class="header-espace">
        <h3>Monsieur <?php echo $NomProf ?>  </h3>
        <nav>
            <ul>
                <li><a href="home.php"> HOME </a></li>
                <li><a href="LoginProf.php">LOGOUT </a></li>
            </ul>
        </nav>

    </section>


   


    
</body>
</html>