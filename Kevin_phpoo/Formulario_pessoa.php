<!DOCTYPE html>
<html>
<head>
    <title>Exemplo de Formulário do Cadastro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css\styles.css">
</head>
<body>
    <div class="container">
        <h3>Preencha os Dados</h3>
        <form method="post">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="DataNascimento">Data de Nascimento:</label>
                <input type="date" class="form-control" id="DataNascimento" name="DataNascimento" required>
            </div>
            <div class="form-group">
                <label for="profissao">Profissão:</label>
                <input type="text" class="form-control" id="profissao" name="profissao" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <?php
        include 'Pessoa.php';

        if ($_SERVER["REQUEST_METHOD"]=="POST"){
            $nome = $_POST['nome'];
            $DataNascimento = $_POST['DataNascimento'];
            $profissao = $_POST['profissao'];

            $pessoa = new Pessoa($nome, $DataNascimento,  $profissao);
            echo "Confirme seus dados: ".$pessoa->apresentar();
        }
        ?>
        
    </div>
</body>
</html>