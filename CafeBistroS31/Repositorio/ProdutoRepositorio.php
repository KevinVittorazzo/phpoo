<?php
class ProdutoRepositorio
{
    private $conn; // Sua conexão com o banco de dados
    public function __construct($conn)
    {
        $this->conn = $conn;
    }
    public function cadastrar(Produto $produto)
    {
        $sql = "INSERT INTO produtos (tipo, 
    nome, descricao, imagem, preco) VALUES (?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssssd", $produto->getTipo(), $produto->getNome(), 
        $produto->getDescricao(), $produto->getImagem(), $produto->getPreco());
        $stmt->execute();
        $stmt->close();
    }
    





    public function listarCafes()
    {
        $sql = "SELECT * FROM produtos where tipo = 'Café' ORDER BY preco";
        $result = $this->conn->query($sql);

        $produtos = array();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $produto = new Produto(
                    $row['id'],
                    $row['tipo'],
                    $row['nome'],
                    $row['descricao'],
                    $row['imagem'],
                    $row['preco']
                );
                $produtos[] = $produto;
            }
        }

        return $produtos;
    }

    public function buscarTodos()
    {
        $sql = "SELECT * FROM produtos ORDER BY tipo, preco asc";
        $result = $this->conn->query($sql);

        $produtos = array();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $produto = new Produto(
                    $row['id'],
                    $row['tipo'],
                    $row['nome'],
                    $row['descricao'],
                    $row['imagem'],
                    $row['preco']
                );
                $produtos[] = $produto;
            }
        }

        return $produtos;
    }
    
}
