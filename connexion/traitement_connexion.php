
<?php
session_start();
 $servername="localhost";
 $serverlog="root";
 $serverpass="";
  try{
    // connexion a la base des donnee
     $bdd= new PDO("mysql:host=$servername;dbname=initelematique_open_line",$serverlog,$serverpass);
     $bdd->setAttribute (PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      echo'connexion a la bd reussi';


  }
  catch(PDOException $e){
     echo'ERREUR'.$e->getMessage();
  }

  if(isset($_POST['connexion'])){
    $email=$_POST['email'];
    $mdp=$_POST['mdp'];

    $recupUser= $bdd->prepare("SELECT FROM etudiants WHERE $email=? && $mdp=?");
    $recupUser->execute(array($email ,$mdp));
    if($recupUser->rowCount()>0){
      $_SESSION['email']=$email;
      $_SESSION['mdp']=$mdp;
      $_SESSION['id']= $recupUser->fetch()['id'];
      echo $_SESSION['id'];
      header('../accueilUser.php');


    }else{
      echo'votre mot de pass ou pseudo est incorrect';
    }




  }

 


  








?>