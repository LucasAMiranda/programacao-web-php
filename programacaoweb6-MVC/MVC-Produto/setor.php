<?php
   
   class Setor {
    private $conexao;

    public function __construct($conexao) {
        $this->conexao = $conexao;
    }

    // Retorna todos os clientes
    public function listar() {
        $stmt = $this->conexao->prepare("SELECT * FROM setor");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC); //retorna e conta o número de linhas(registros) dentro da tabela
    }

    // Insere um novo setor
    public function inserir($cod_setor, $nome_setor) {
        $stmt = $this->conexao->prepare("INSERT INTO produto ($cod_setor, $nome_setor) VALUES (?, ?,)");
        $stmt->bindValue(1, $cod_setor);
        $stmt->bindValue(2, $nome_setor);
     
       
        return $stmt->execute();
    }
  
   }