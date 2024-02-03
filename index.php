<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
   
    <header>
        <div class="navbar">
            <div class="logo">
                <a href="#">Initelematique</a>
            </div>
            <div class="bouton">
                <a href="inscription/inscription.php" class="action-btn">inscription</a>
               <div class="connect">
                 <a href="connexion/index.php" class="action-btn-connect fs-md-1">connexion</a>
                 <a href="admin.php" class="action-btn-connect2"><i class="fa-solid fa-user"></i> Admin</a>
               </div> 
            </div>
        </div>
    </header>
    <section class="presents">
        <div class="texte">
            <h2>Des cours 100% en ligne et un modèle pédagogique unique qui seront les clés de votre réussite.</h2>
            <a href="#" class="action-btn2">connectez vous pour voir les cours</a>
        </div>
        <div class="maphoto">
            <img src="images/img_bg.jpg.png" alt="photo" srcset="" width="100%">
        </div>
        
    </section>
    <section class="container-fluid bg-light ">
        <div class="container">
            <h2 class="text-center pt-5 pb-2">ce que vous propose Initelematique open line</h2>
            <p class="text-center pb-5">Avec Initelematique open line, découvrez une nouvelle façon d'apprendre : votre reussite c'est notre devoir</p>
            <div class="row g-5">
                <div class="col-12 col-md-4">
                    <div class="block-card">
                        <div class="image col-12 col-md-4">
                            <img src="images/img_bg.jpg.png" alt="" srcset="">
                        </div>
                        <div class="boc-text">
                            <h2 class="spend text-center">Apprenez <br />
                                où que vous soyez</h2>
                            <p class="text-center">Accédez à vos cours 100% en ligne à la maison, en ville, à la montagne... Partout !</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="block-card">
                        <div class="image">
                            <img src="images/img_bg.jpg.png" alt="" srcset="">
                        </div>
                        <div class="boc-text">
                            <h2 class="spend text-center">Des cours<br />
                                dynamiques</h2>
                            <p class="text-center">plongez dns des cours interactifs et engageants, elaborés par des experts.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="block-card">
                        <div class="image">
                            <img src="images/img_bg.jpg.png" alt="" srcset="">
                        </div>
                        <div class="boc-text">
                            <h2 class="spend text-center">Enseignants<br />
                                Experts:</h2>
                            <p class="text-center">Bénéficiez de l'expertise de nos instructeurs qualifiés lors de lapprentissage</p>
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