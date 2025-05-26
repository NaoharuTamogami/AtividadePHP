<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (
        isset($_POST["nome"]) && $_POST["nome"] !== "" &&
        isset($_POST["preco"]) && $_POST["preco"] !== "" &&
        isset($_POST["quantidade"]) && $_POST["quantidade"] !== ""
    ) {
        require_once("conexao.php");

        $nome = $_POST["nome"];
        $preco = $_POST["preco"];
        $qtd = $_POST["quantidade"]; 

        $sql = "INSERT INTO produtos (nome, preco, qtd) VALUES (?, ?, ?)";

        $stmt = mysqli_prepare($conexao, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "sdi", $nome, $preco, $qtd); 
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            echo "Produto cadastrado com sucesso!<br><a href='index.php'>Voltar</a>";
        } else {
            echo "Erro ao preparar: " . mysqli_error($conexao);
        }

        mysqli_close($conexao);
    } else {
        echo "Todos os campos são obrigatórios.";
    }
}
?>
