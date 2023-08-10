<!DOCTYPE html>
<html>
<head>
    <title>Exemplo de Formulário de matemática</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css\styles.css">
</head>
<body>
    <div class="container">
        <h3>Escolha as medidas:</h3>
        <form method="post">
            <div class="form-group">
                <label for="larguraRet">Largura do retângulo:</label>
                <input type="number" class="form-control" id="larguraRet" name="larguraRet" required>
            </div>
            <div class="form-group">
                <label for="AlturaRet">Altura do retângulo:</label>
                <input type="number" class="form-control" id="AlturaRet" name="AlturaRet" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <?php
        include 'Retangulo.php';

        if ($_SERVER["REQUEST_METHOD"]=="POST"){
            $larguraRet = $_POST['larguraRet'];
            $AlturaRet = $_POST['AlturaRet'];

            $retangulo = new Retangulo($larguraRet, $AlturaRet);
            echo "Medidas do retângulo: ".$larguraRet." x ".$AlturaRet;
            echo $retangulo->calcular_area();
            echo $retangulo->calcular_perimetro();
        }
        ?>
        
    </div>
</body>
</html>