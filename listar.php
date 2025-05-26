<?php
require_once("conexao.php");

$sql = "SELECT * FROM produtos";
$resultado = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Produtos</title>
</head>
<body>
    <h1>Produtos Cadastrados</h1>
    <a href="index.php">Cadastrar novo produto</a><br><br>

    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Preço (R$)</th>
            <th>Quantidade</th>
        </tr>
        <?php while ($linha = mysqli_fetch_assoc($resultado)) { ?>
            <tr>
                <td><?php echo $linha['id']; ?></td>
                <td><?php echo htmlspecialchars($linha['nome']); ?></td>
                <td><?php echo number_format($linha['preco'], 2, ',', '.'); ?></td>
                <td><?php echo $linha['qtd']; ?></td>
            </tr>
        <?php } ?>
    </table>

    <?php mysqli_close($conexao); ?>
</body>
</html>
