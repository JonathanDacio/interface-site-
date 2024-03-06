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
        <form autocomplete="off">

            <h4>Esqueceu a senha </h4>

            <div class="input-section">
                <label>Confirmar email <span class="required-color">*</span></label>
                <input type="email" placeholder="Informe seu email" id="email" name= "email" required />
                <span id="email-error" class="hide required-color error-message">Email inválido</span>
                <span id="empty-email" class="hide required-color error-message">Campo obrigatório</span>
            </div>

           
            <button id="submit-button">Confirmar email</button>
        </form>
        
       
    </div> 

        <button class="back" onclick="history.back()">
            <i class="iconoir-arrow-left" id="icon"></i>
        </button> 
    <script src="register.js"></script>
</body>

</html>