<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../asset/css/style.css">
    <title>Inscription</title>
</head>
<body>
    <div class="container">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Inscription</p>

            <form action="traitement.php" method="get" class="login-email">

                <div class="input-group">
                <input type="mail" placeholder="Email" name="mail" required>
                </div>

                <div class="input-group">
                <input type="password" placeholder="Mot de passe"  name="mdp" required>
                </div>

                <div class="input-group">
                <input type="password" placeholder="Retapez le mot de passe "  name="mdp2" required>
                </div>

                <div class="input-group">
                    <input type="text" placeholder="Numero" name="num" required>
                    </div>

                <div class="input-group">
                    <input type="text" placeholder="Nom" name="name" required>
                    </div>

                <div class="input-group">
                    <p><input type="submit" value="Valider"></p>
                    </div>
                    <?php
                    if(isset($_GET['erreur']))
                    {
                        $erreur = $_GET['erreur'];
                        if($erreur==1)
                        {
                            echo "<p style='color:red'>Mot de passe different</p>";
                        }
                        else if($erreur == 3)
                        {
                            echo "<p style='color:red'>Email ou telephone deja utiliser</p>";
                        }
                        else
                        {
                            echo "<p style='color:red'>mot de passe trop court (min 8)</p>";
                        }
                    }
                    ?>

            </form> 
            <form action="<?php echo base_url('welcome/login'); ?>" method="get" class="login-email" >
            <div class="input-group">
            <input type="submit" value="Se connecter">
            </div>
            </form>
        <?php
    </div>
</body>
</html>
