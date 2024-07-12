<?php

    include_once('conecta.php');

        $name = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "INSERT INTO tbcadastro(nome, cpf, email, senha) VALUEs('$name', '$cpf','$email', '$senha')";

        if(mysqli_query($conn,$sql)){
            echo "Cadastrado com sucesso";
        }else{
            echo "Erro: ". $sql . "<br>". mysqli_error($conn);
        }
        mysqli_close($conn);

        #header("location:pesquisa.html");

    
?>
