<?php

    include_once('conecta.php');

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM tbcadastro WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Email encontrado, verificar senha
        $row = $result->fetch_assoc();
        $senha_hash = $row['senha'];

        if ($senha == $senha_hash) {
            // Senha correta
            echo "Login realizado com sucesso";
        } else {
            // Senha incorreta
            echo "Senha Incorreta!";
        }
    } else {
        // Email não encontrado
        echo "O email está incorreto!";
    }

    $stmt->close();
    $conn->close();
?>
