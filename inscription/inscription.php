<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="inscription.css">
    <title>formulaire</title>

</head>

<body>
    <section class="contact">
        <div class="container">
            <div class="contactform">
                <form action="traitement_inscription.php" methode="POST">
                    <h2>inscription</h2>
                    <div class="inputbox">
                        <input type="text" name="nom" required="required">
                        <span>nom</span>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="prenom" required="required">
                        <span>prenom</span>
                    </div>
                    <div class="inputbox">
                        <input type="email" name="email" required="required">
                        <span>email</span>
                    </div>
                    <div class="inputbox">
                        <input type="password" name="mdp" required="required">
                        <span>mot de pass</span>
                    </div>
                    <div class="inputbox">
                        <input type="submit" value="m'inscrire" name="inscrit">
                    </div>
                </form>
            </div>
        </div>
    </section>

</body>

</html>