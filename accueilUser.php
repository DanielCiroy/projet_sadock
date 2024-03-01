

<?php 
//On demare la session sur sur cette page 
session_start() ;
if(!$_SESSION['mdp'] && !$_SESSION['email'] ){
    header('location: connexion/index.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>

    <style>
        .action-btn-connect {
            margin-right: 300px;
            text-transform:uppercase;
            color:#daca70;
        }
        .action-btn{
            text-transform:uppercase;
            color: #daca70;
        }

        .deconnectAdmin {
            font-weight: bold;
            color: #fff;
            background-color: rgb(2, 2, 87);
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 20px;
            font-size: 0.8 rem;
            cursor: pointer;
            font-weight: bold;
            outline: none;
            color: #fff;
            transition: 0.3s all;
            border-bottom: 3px solid orangered
        }
        .deconnectAdmin:hover{
            color:#fff;
        }
        
     .message {
    font-size: 25px;
     }
    </style>
</head>

<body>
    <header>
        <div class="navbar">
            <div class="logo">
                <a href="index.php">Initelematique</a>
            </div>
            <div class="bouton  ">
               
                <div class="connect">
                    <a href="cours/cours.php" class="action-btn-connect fs-md-1">cours</a>
                </div>
                <a href="index.php" class="deconnectAdmin">deconnexion</a>
            </div>
        </div>
    </header>
    <section class=" presents">
        <div class="texte">
         <?php
                //Ensuite on affiche le contenu de la variable session
                echo "<p class ='message'> Bonjour " .  $_SESSION['nom'] . "</p>";   
         ?>
            
            <h2>Bienvenu(e) sur Initelematique Open line!! </br>  Des cours 100% en ligne et un modèle pédagogique unique qui seront les clés de votre
                réussite.
            </h2>
            <a href="cours/cours.php" class="action-btn2"> voir les cours</a>
        </div>
        <div class="maphoto">
            <img src="images/image1.png.svg" alt="photo" srcset="" width="100%">
        </div>

    </section>
    <section class="container-fluid bg-light ">
        <div class="container">
            <h2 class="text-center pt-5 pb-2">ce que vous propose Initelematique open line</h2>
            <p class="text-center pb-5">Avec Initelematique open line, découvrez une nouvelle façon
                d'apprendre : votre
                reussite c'est notre devoir</p>
            <div class="row g-5">
                <div class="col-12 col-md-4">
                    <div class="block-card">
                        <div class="image col-12 col-md-4">
                            <img src="images/image4.png.svg" alt="" srcset="">
                        </div>
                        <div class="boc-text">
                            <h2 class="spend text-center">Apprenez <br />
                                où que vous soyez</h2>
                            <p class="text-center">Accédez à vos cours 100% en ligne à la maison, en
                                ville, à la
                                montagne... Partout !</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="block-card">
                        <div class="image">
                            <img src="images/image6.svg" alt="" srcset="">
                        </div>
                        <div class="boc-text">
                            <h2 class="spend text-center">Des cours<br />
                                dynamiques</h2>
                            <p class="text-center">plongez dns des cours interactifs et engageants,
                                elaborés par des
                                experts.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="block-card">
                        <div class="image">
                            <img src="images/image3.png.svg" alt="" srcset="">
                        </div>
                        <div class="boc-text">
                            <h2 class="spend text-center">Enseignants<br />
                                Experts:</h2>
                            <p class="text-center">Bénéficiez de l'expertise de nos instructeurs
                                qualifiés lors de
                                lapprentissage</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    include_once('footer.php');
    ?>
    <script src="js/bootstrap.bundle.min.js"> </script>
    <script src="js/app.js"></script>
</body>

</html>