<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="inscription.css">
    <title>formulaire</title>

</head>
<body>
       <div class="navbar">
            <div class="logo">
              <a href="../index.php">Initelematique</a>
            </div>
        </div>
     
    
    <div class="header">
    <section>
    <a href="../index.php" class="Back_btn"><img src="../gestion_des_eleves/images/back.png" alt="">Retour</a>
        <h2>inscription</h2>
        <form action="traitement_inscription.php" method="POST">
            <label>nom</label>
            <input type="text" name="nom" required>
            <label>prenom</label>
            <input type="text" name="prenom" required>
            <label>email</label>
            <input type="text" name="email" required>
            <label>mot de pass</label>
            <input type="password" name="mdp" required>
            <input type="submit" value="m'inscrire" name="ok">
        </form>
    </section>
    </div>
   

      <?php
      include_once('../mini_footer.php');
        ?>

    
</body>

</html>