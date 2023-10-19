<?php
require 'Produto.php'; // Inclua o arquivo da classe Produto

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];

    $produto = new Produto($nome, $preco);

    if (!isset($_SESSION['produto'])) {
        $_SESSION['produto'] = array();
    }

    $_SESSION['produto'][] = $produto;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Produtos</title>
</head>
<body>
    <h2>Lista de Produtos</h2>
    <ul>
        <?php
        if (isset($_SESSION['produto'])) {
            foreach ($_SESSION['produto'] as $produto) {
                echo "<li>{$produto->getNome()} - R$ {$produto->getPreco()}</li>";
            }
        }
        ?>
    </ul>
    <a href="Formulario1.php">Voltar para o Formulário</a>
</body>
</html>
