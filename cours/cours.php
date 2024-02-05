

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste photos</title>
    <link rel="stylesheet" href="../gestion_des_cours/style.css">
</head>
<body>
    <section>
        <?php
            //inclure la page de connexion
            include_once "../gestion_des_cours/con_bdd.php";
            //afficher la liste des photos qui sont dans la base de donnée
            $req = mysqli_query($con , "SELECT * FROM cours");

            //verifier que la liste n'est pas vide
            if(mysqli_num_rows($req) < 1){
                ?>
                <p class="vide_message">Aucun cour Disponible.</p>
                <div class="retour">
                   <a href="../accueilUser.php" class="quiter"><i class="fa-sharp fa-solid fa-arrow-left">quitter</i></a>
                </div>
                <?php
            }

            //afficher la liste des photos
            while($row = mysqli_fetch_assoc($req)){
                ?>         
                    <div class="box">
                        <img  class="img_principal" src="../gestion_des_cours/cours_bdd/<?=$row['video']?>">
                        <div><?=$row['description']?></div>
                    </div>
                    <div class="retour">
                              <a href="../accueilUser.php" class="quiter"><i class="fa-sharp fa-solid fa-arrow-left">quitter</i></a>
                    </div>
                <?php
            }
        ?>

    </section>
</body>
</html>
