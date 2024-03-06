<?php
if(isset($_POST['submit'])){
include_once('config.php');
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$conf_senha = $_POST['conf_senha'];


$result= mysqli_query($conexao, "INSERT INTO usuario(nome,email,senha,conf_senha) VALUES ('$nome','$email','$senha','$conf_senha') ");
}
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Registrar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!--preSets--> <link rel="stylesheet" href="../cores.css">
    <!--Fonts--> <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <!--Icons--> <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/iconoir-icons/iconoir@main/css/iconoir.css"/>

    <link rel="stylesheet" href="trabalho.css"/>
</head>

<body>
    <div class="container">
        <form action="trabalho.php" method="POST" autocomplete="off">

            <h4>Crie sua conta</h4>

            <div class="input-section">
                <label>Nome <span class="required-color">*</span></label>
                <input type="text" placeholder="Informe seu nome" id="name-input" name="nome" required />
                <span id="name-error" class="hide required-color error-message">Nome inválido</span>
                <span id="empty-name" class="hide required-color error-message">Campo obrigatório</span>
            </div>

            <div class="input-section">
                <label>Email <span class="required-color">*</span></label>
                <input type="email" placeholder="Informe seu email" id="email" name= "email" required />
                <span id="email-error" class="hide required-color error-message">Email inválido</span>
                <span id="empty-email" class="hide required-color error-message">Campo obrigatório</span>
            </div>

            <div class="input-section">
                <label>Senha <span class="required-color">*</span></label>
                <input type="password" placeholder="Informe uma senha" id="password" name= "senha" required />
                <span id="password-error" class="hide required-color error-message">As senhas devem ter letras, símbolos especiais, números e comprimento >= 8</span>
                <span id="empty-password" class="hide required-color error-message">Campo obrigatório</span>
            </div>

            <div class="input-section">
                <label>Confirme a senha <span class="required-color">*</span></label>
                <input type="password" id="verify-password" placeholder="Confirme sua senha" name= "conf_senha"  required />
                <span id="verify-password-error" class="hide required-color error-message">A senha deve ser igual a anterior</span>
                <span id="empty-verify-password" class="hide required-color error-message">Campo obrigatório</span>
            </div>

            <button id="submit" name="submit">Registrar</button>
        </form>
        
        <div class="footer">
            <p>Já possui uma conta? </p>
            <a class="link" href="../Trabalho/login.php">Login</a>
        </div>
    </div> 

        <button class="back" onclick="history.back()">
            <i class="iconoir-arrow-left" id="icon"></i>
        </button> 
    <script src="register.js"></script>
</body>

</html>