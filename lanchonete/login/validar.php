<?php
    $con = mysqli_connect("localhost", "root", "");
    $bd = mysqli_select_db($con, "lanchonete");

    if(isset($_GET["btn"])){
        $usuario = $_GET["usuario"];
        $senha = $_GET["senha"]; 
    }
    $consultar = "SELECT * FROM usuario WHERE usuario = '$usuario' && senha = $senha;";
    $consulta = mysqli_query($con, $consultar);
    $resultado = mysqli_num_rows($consulta);

        if($resultado == 0){
            echo "<script> alert('Ops... Você não possui cadastro na K'Sushi.')</script>";
            echo "<button><a href='../cadastro/cadastro.php'>Cadastre-se aqui</a></button>";
        }else{
            echo "<button><a href='../view/index.html'>Fazer login</a></button>";
        }
?>