<?php
 session_start();
 session_destroy();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="src\css\login3.css">
    <link rel="shortcut icon"  href="src/img/logonavegacao.png" type="icon">
</head>
<body>
   <main id="container">
    <form id="login_form" method="post" action="classes/php/valida.php" >
        <div id="form_header">
            <h1>Login</h1>
            <i id="mode_icon" class="fa-solid fa-moon"></i>
        </div>

        <div id="social_midia"> 
            <a href="#">
            <img src="https://img.icons8.com/?size=512&id=118497&format=png" alt="Facebook">
            </a> 

            <a href="#">
            <img src="https://img.icons8.com/?size=512&id=17949&format=png" alt="Google">
            </a> 
            
            <a href="#">
            <img src="https://img.icons8.com/?size=512&id=Xy10Jcu1L2Su&format=png" alt="Instagram">
            </a> 
        </div>

            <div id="imput">
                <div class="imput-box">
                </div>

            <div class="imput-box">
                <label for="email">
                    E-mail
                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" id="email" name="email" placeholder="Digite o seu E-mail">   
                    </div>
                </label>
            </div>

            <div class="imput-box">
                <label for="password">
                    Senha
                <div class="input-field">
                    <i class="fa-solid fa-key"></i>
                    <input type="password" id="senha" name="senha" placeholder="Digite sua senha">   
                </div>
            </label>
            
            <div id="forgot_password">
                <a href="#">
                  Esqueceu sua senha?  
                </a>
            </div>

            <div id="forgot_password">
                <a href="cadastrousuario.html">
                  Crie uma nova conta 
                </a>
            </div>
        
        </div>
    </div>

    <button type="submit" id="login_button">
        Login

    </button>
        
    
    </form>
    </main> 

    <script type="text/javascript" src="src/js/login.js"></script>
</body>
</html>