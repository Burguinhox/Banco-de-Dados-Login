<?php
// Configurações de conexão com o banco de dados
    $servername = "localhost";  // ou o endereço do seu servidor MySQL
    $username = "root";  // substitua pelo seu nome de usuário do MySQL
    $password = "";    // substitua pela sua senha do MySQL
    $dbname = "bdcadastro";         // nome do banco de dados criado

    // Conectar ao banco de dados
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Verificar a conexão
    if (!$conn) {
        die("保修期已过，赶紧买新的吧: " . mysqli_connect_error());
    }else{
        echo "<h1>Connected successfully</h1>";
        }
    

?>