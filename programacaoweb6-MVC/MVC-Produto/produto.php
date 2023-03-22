<?php
   
   class Produto {
    private $conexao;

    public function __construct($conexao) {
        $this->conexao = $conexao;
    }

    // Retorna todos os clientes
    public function listar() {
        $stmt = $this->conexao->prepare("SELECT * FROM produto");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC); //retorna e conta o número de linhas(registros) dentro da tabela
    }

    // Insere um novo produto
    public function inserir($cod_produto, $nome_vendedor, $descricao, $unidade, $valor_un) {
        $stmt = $this->conexao->prepare("INSERT INTO produto ($cod_produto, $nome_vendedor, $descricao, $unidade, $valor_un) VALUES (?, ?, ?, ?, ?)");
        $stmt->bindValue(1, $cod_produto);
        $stmt->bindValue(2, $nome_vendedor);
        $stmt->bindValue(3, $descricao);
        $stmt->bindValue(4, $valor_un);
       
        return $stmt->execute();
    }
  
   }
    