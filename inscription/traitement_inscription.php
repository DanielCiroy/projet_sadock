
<?php
//ouverture de session pour y stocker les information de l'user
session_start();

//connexion a la base des donnees
$servername = "localhost";
$serverlog = "root";
$serverpass = "";
try{

    $bdd= new PDO("mysql:host=$servername;dbname=initelematique_open_line",$serverlog,$serverpass);
    $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo'ERREUR DE CONNEXION'. $e->getMessage();
}


//les requetes sql...
if(isset($_POST['ok'])){
    
    //insertion des info entrees par l'user dans des variables
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];
    $mdp=$_POST['mdp'];

    //insertion de l'user dans la table etudiants
    $inseretd=$bdd->prepare("INSERT INTO etudiants VALUES (0,?,?,?,?)");
    $inseretd->execute(array($nom,$prenom,$email,$mdp));

    //recuperation des info des users pour les stocker dans des sessions
    $recupetudiant=$bdd->prepare("SELECT * FROM etudiants WHERE nom=? AND prenom=? AND email=? AND mdp=?");
    $recupetudiant->execute(array($nom,$prenom,$email,$mdp));

    

    // declaration des session et recuperation des info
    if($recupetudiant->rowCount()>0){
        $_SESSION['nom']=$nom;
        $_SESSION['prenom']=$prenom;
        $_SESSION['email']=$email;
        $_SESSION['mdp']=$mdp;
        $_SESSION['id']=$recupetudiant->fetch()['id'];

        header('location: ../accueilUser.php');
    }
   

   

}










?>