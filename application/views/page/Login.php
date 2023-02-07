<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css') ?>">
    <title>Login</title>
</head>
<body>

    <div class="container">
    <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
        <form action="<?php echo base_url('welcome/login'); ?>" method="post" class="login-email" >
        <?php phpinfo();?>
        <div class="input-group">
                <input type="mail" placeholder="Email"  name="mail" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password"  name="mdp" required>
            </div>
            <div class="input-group">
            <p><input type="submit" value="Valider"></p>
            </div>
        </form>
        
        <p class="login-register-text">
                J'ai pas encore de compte? 
        </p>
        <form action="<?php echo base_url('welcome/inscription'); ?>" method="get" class="login-email" >
            <div class="input-group">
            <input type="submit" value="inscrire">
            </div>
            </form>
        <?php
            if(isset($_GET['erreur']))
            {
                $erreur = $_GET['erreur'];
                if($erreur==1)
                {
                    echo "<p style='color:red'>email ou mot de passe incorrect</p>";
                }
                else  echo "<p style='color:green'>vous etes inscrit</p>";
            }
        ?>
    </div>
</body>
</html>