
<?php
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









?>