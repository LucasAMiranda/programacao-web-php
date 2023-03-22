<?php
   
   class Cidade {
    private $conexao;

    public function __construct($conexao) {
        $this->conexao = $conexao;
    }

    // Retorna todos os clientes
    public function listar() {
        $stmt = $this->conexao->prepare("SELECT * FROM cidade");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC); //retorna e conta o número de linhas(registros) dentro da tabela
    }

    // Insere um nova cidade
    public function inserir($cod_cidade, $nome_cidade, $uf) {
        $stmt = $this->conexao->prepare("INSERT INTO cidade ($cod_cidade, $nome_cidade, $uf) VALUES (?, ?, ?)");
        $stmt->bindValue(1, $cod_cidade);
        $stmt->bindValue(2, $nome_cidade);
        $stmt->bindValue(3, $uf);
       
        return $stmt->execute();
    }
  
   }
    

 
?>