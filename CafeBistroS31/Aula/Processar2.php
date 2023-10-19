<?php
require 'Produto.php'; // Inclua o arquivo da classe Produto

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $categoria = $_POST['categoria'];
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];

    $produto = new Produto($nome, $preco);

    if (!isset($_SESSION['produtos'])) {
        $_SESSION['produtos'] = array();
    }

    if (!isset($_SESSION['produtos'][$categoria])) {
        $_SESSION['produtos'][$categoria] = array();
    }

    $_SESSION['produtos'][$categoria][] = $produto;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Produtos</title>
</head>
<body>
    <h2>Lista de Produtos</h2>
    <?php
    if (isset($_SESSION['produtos'])) {
        foreach ($_SESSION['produtos'] as $categoria => $produtos) {
            echo "<h3>categoria = $categoria</h3>";
            echo "<ul>";
            foreach ($produtos as $produto) {
                echo "<li>{$produto->getNome()} - R$ {$produto->getPreco()}</li>";
            }
            echo "</ul>";
        }
//        session_destroy();
    }
    ?>
    <a href="Formulario2.php">Voltar para o Formulário</a>
</body>
</html>
