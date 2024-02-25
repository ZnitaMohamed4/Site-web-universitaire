
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>head repsonsable</title>
    <link rel="stylesheet" href="style.css">
    <style>
    body {
        margin: 0;
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4;
    }

    .header {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 1rem;
    }

    nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    nav img {
        height: 60px; /* Adjust the height as needed */
    }

    .nav-links {
        display: flex;
        justify-content: space-around;
        width: 50%;
    }

    .nav-links ul {
        list-style: none;
        display: flex;
        justify-content: space-between;
    }

    .nav-links a {
        text-decoration: none;
        color: #fff;
        padding: 10px;
        display: block;
        transition: background 0.3s ease;
    }

    .nav-links a:hover {
        background-color: #555;
    }

    .fa-bars, .fa-close {
        font-size: 1.5rem;
        cursor: pointer;
    }

    @media screen and (max-width: 768px) {
        .nav-links {
            position: absolute;
            top: 10vh;
            left: 0;
            width: 100%;
            background-color: #333;
            flex-direction: column;
            display: none;
        }

        .nav-links.show {
            display: flex;
        }

        .nav-links ul {
            flex-direction: column;
            align-items: center;
        }

        .nav-links a {
            width: 100%;
            text-align: center;
        }

        .fa-bars {
            display: block;
        }

        .fa-close {
            display: none;
        }
    }

    </style>
</head>
<body>
    <section class="header" style="min-height:10vh; ">

        <nav>
          <a href="index.php"><img src="images/logo.png"></a>
            <div class="nav-links" id="navLinks">
                <ul>
                 <li><a id  = "salle" href = "ajouter_salle.php">Les Salles</a></li>
                     <li><a id = "Etudiants" href = "ajoute_etudiants.php">Les Etudiants</a></li>
                    <li><a id="dep"  href = "modifier_resp_departement.php">Les Departements</a></li>
                     <li><a id = "emploi" href = "emploi_temps.php">Les emplois de temps</a></li>
                     <li><a id = "prof" href = "profs_resp.php">Les Profeesurs Resopnsables</a></li>

                </ul>
            </div>
        </nav>
</body>
</html>
