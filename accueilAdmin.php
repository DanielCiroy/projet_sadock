
<?php
  session_start();
  if(!$_SESSION['mdpass']){
    header('location:admin.php');
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

        .message{

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
                <a href="gestion_des_eleves/index.php" class="action-btn">Etudiants</a>
                <div class="connect">
                    <a href="gestion_des_cours/index.php" class="action-btn-connect fs-md-1">cours</a>
                </div>
                <a href="index.php" class="deconnectAdmin">deconnexion</a>
            </div>
        </div>
    </header>
    <section class=" presents">
        <div class="texte">
        <?php
                //Ensuite on affiche le contenu de la variable session
                echo "<h2 class ='message'> Bonjour " .  $_SESSION['nom'] . "</h2>";   
         ?>

            <h2>Bienvenue sur l'espace d'administration ! <br/> Depuis cet espace, vous pouvez :Gérer les cours et les utilisateurs
            </h2>
        </div>
        <div class="maphoto">
            <img src="images/welcom.svg" alt="photo" srcset="" width="100%">
        </div>

    </section>

    <?php
    include_once('footer.php');
    ?>
    <script src="js/bootstrap.bundle.min.js"> </script>
    <script src="js/app.js"></script>
</body>

</html>