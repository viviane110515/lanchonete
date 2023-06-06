<?php
    include_once("Autenticacao.class.php");
    
    $con = mysqli_connect("localhost", "root", "");
    $bd = mysqli_select_db($con, "lanchonete");

    if(isset($_GET["btn"])){
        $usuario = $_GET["usuario"];
        $senha = $_GET["senha"];
        $email = $_GET["email"];
        $pergunta = $_GET["pergunta"];
    }
    
    $consulta = "SELECT * from usuario where email = '$email' && pergunta = '$pergunta' ;";
    $consultar = mysqli_query($con, $consulta);

    $resultado = mysqli_num_rows($consultar);
    if($resultado > 0 ){
        echo "<script> alert('JÁ FOI CADASTRADO, VÁ PARA A TELA DE LOGIN')</script>";
        echo "<button><a href='../login/login.php'>Fazer login</a></button>";
    }else{
        $registro = "INSERT into usuario (id,email,usuario,senha,pergunta) VALUES(null,'$email','$usuario','$senha', '$pergunta');";
        $registrar = mysqli_query($con, $registro);
        echo "<script> alert('CADASTRO CONCLUIDO COM SUCESSO')</script>";
        echo "<button><a href='../cadastro/cadastro.php'>HOME</a></button>";
    }

?>