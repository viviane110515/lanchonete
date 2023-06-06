<?php
    $con = mysqli_connect("localhost", "root", "");
    $bd = mysqli_select_db($con, "lanchonete");

    if(isset($_GET["btn"])){

        $email = $_GET["email"];
        $pergunta = $_GET["pergunta"];
        
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "Email inválido"."<br>";
        }
        
        $consultar = "SELECT * FROM usuario WHERE email = '$email' && pergunta = '$pergunta';";
        $consulta = mysqli_query($con, $consultar);
        $resultado = mysqli_num_rows($consulta);

        if($resultado == 0){
            echo   "<script>alert('Dados incorretos!')</script>";
        }
        
        if($resultado > 0){
        $novasenha = substr(md5(time()),0,6);
        $ns = md5(md5($novasenha));
             
        
            if(mail($email, "Sua nova senha", "Sua nova senha:".$novasenha)){
            $atualizar = "UPDATE usuario set senha = '$ns' WHERE email = '$email';";
            $atualiza = mysqli_query($con, $atualizar);
            }   

      
        }
    }

    

?>