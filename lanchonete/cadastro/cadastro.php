<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="login.css"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="formbx">
        <div class="form signinform">
            <h3>Cadastre-se aqui!</h3></br>
    <form action="registrar.php" method="get">
        <input type="text" name="usuario" placeholder="Digite seu usuario" required><br>
        <input type="password" name="senha" placeholder="Digite sua senha" required><br>
        <input type="email" name="email" placeholder="Digite seu email" required><br>
        <input type="text" name="pergunta" placeholder="Qual o nome da sua comida favorita?" required><br>
        <h4>Essa pergunta é necessária para validarmos sua conta!</h4> </br>
        <input type="submit" value="enviar" name="btn"> <a href="../login/login.php">Já sou cadastrado</a>
    </form>
</body>
</html>