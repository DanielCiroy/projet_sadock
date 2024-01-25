<?php
if(isset($_POST['ok'])){
    if(!empty($_POST['nom'])&& !empty($_POST['mdpass'])){
       $nom_par_defaut='admin';
       $mdpass_par_defaut='admin1234';

       $nom_saisi=$_POST['nom'];
       $mdpass_saisi=$_POST['mdpass'];

       if($nom_par_defaut==$nom_saisi && $mdpass_par_defaut==$mdpass_saisi){
        echo'correct';
       }
       else{
        echo'mot de pass ou nom incorrect';
       }
    }
    else{
        echo'nom ou mot de pass incorrect';
    }
}
echo'erreur';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inscription/inscription.css">
    <title>Document</title>
</head>
<body>
    <?php
       include_once('header_no_btn.php');
    ?>
    <div class="header">
    <section>
        <h1>connexion</h1>
        <form action="" method="POST">
            <label>nom</label>
            <input type="text" name="nom">
            <label>mot de pass</label>
            <input type="password" name="mdpass">
            <input type="submit" value="connexion" name="ok">
        </form>
    </section>
    </div>
      <?php
      include_once('mini_footer.php');
      ?>

    
</body>

</html>