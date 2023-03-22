<?php
   
   class Vendedor {
    private $conexao;

    public function __construct($conexao) {
        $this->conexao = $conexao;
    }

    // Retorna todos os clientes
    public function listar() {
        $stmt = $this->conexao->prepare("SELECT * FROM vendedor");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC); //retorna e conta o número de linhas(registros) dentro da tabela
    }

    // Insere um novo vendedor
    public function inserir($cod_vendedor, $nome_vendedor, $salario, $cod_setor) {
        $stmt = $this->conexao->prepare("INSERT INTO vendedor ($cod_vendedor, $nome_vendedor, $salario, $cod_setor) VALUES (?, ?, ?, ?)");
        $stmt->bindValue(1, $cod_vendedor);
        $stmt->bindValue(2, $nome_vendedor);
        $stmt->bindValue(3, $cod_setor);
       
        return $stmt->execute();
    }
  
   }
    

 
?>