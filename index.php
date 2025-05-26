<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Produtos</title>
</head>
<body>
    <h1>Cadastrar Produto</h1>
    <form action="salvar.php" method="post">
        Nome: <input type="text" name="nome" required><br><br>
        Preço: <input type="number" step="0.01" name="preco" required><br><br>
        Quantidade: <input type="number" name="quantidade" required><br><br>
        <input type="submit" value="Salvar">
    </form>
    <br>
    <a href="listar.php">Ver produtos cadastrados</a>
</body>
</html>
