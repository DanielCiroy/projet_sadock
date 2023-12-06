
<?php
$servername = "localhost";
$serverlog = "root";
$serverpass = "";
try{

    $bdd= new PDO("mysql:host=$servername;dbname=initelematique_open_line",$serverlog,$serverpass);
    $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo'vous eetes bien connectes';
   
    


}catch(PDOException $e){
    echo'ERREUR DE CONNEXION'. $e->getMessage();
}

if(isset($_POST["inscrit"])){
   $nom=$_POST['nom'];
   $prenom=$_POST['prenom'];
   $email=$_POST['email'];
   $mdp=$_POST['mdp'];

   $inserEtudiant=$bdd->prepare("INSERT INTO etudiants VALUES (0, ? ,? ,? ,?)");
   $inserEtudiant->execute(array($nom,$prenom,$email,$mdp));
   echo'vous etes inscrit mr';

}
else{
    echo'erreur d\'inscription';
}









?>