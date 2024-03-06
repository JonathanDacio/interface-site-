<?php
if(isset($_POST['submit'])){
include_once('config.php');
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$sexo = $_POST['sexo'];
$data_nasc = $_POST['data_nasc'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$endereco = $_POST['endereco'];

$result= mysqli_query($conexao, "INSERT INTO usuarios (nome,email,telefone,sexo,data_nasc,cidade,estado,endereco) VALUES ('$nome','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco') ");
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulário</title>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}
.container {
    width: 50%;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}
h2 {
    text-align: center;
    color: #333;
}
form {
    margin-top: 20px;
}
label {
    display: block;
    margin-bottom: 8px;
    color: #666;
}
input[type="text"],
input[type="tel"],
input[type="date"], 
input[type="email"]{
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}
input[type="radio"] {
    margin-right: 5px;
}
select {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}
button {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
button:hover {
    background-color: #0056b3;
}
</style>
</head>
<body>
<div class="container">
    <h2>Formulário</h2>
    <form action="formulario.php
    " method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        
        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" name="telefone" required>

        <label for="email">Email:</label>
        <input type="email" id="cidade" name="email" required>

        <label for="data_nasc">Data de Nascimento:</label>
        <input type="date" id="data_nasc" name="data_nasc" required>

        <label>Sexo:</label>
        <label for="sexo_m">
            <input type="radio" id="sexo_m" name="sexo" value="Masculino" required> Masculino
        </label>
        <label for="sexo_f">
            <input type="radio" id="sexo_f" name="sexo" value="Feminino" required> Feminino
        </label>

        <label for="cidade">Cidade:</label>
        <input type="text" id="cidade" name="cidade" required>

        <label for="estado">Estado:</label>
        <select id="estado" name="estado" required>
            <option value="" selected disabled>Selecione...</option>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
        </select>
        <label for="endereco">Endereço:</label>
        <input type="text" id="endereco" name="endereco" required>
        <button type="submit">Enviar</button>
    </form>
</div>
</body>
</html>