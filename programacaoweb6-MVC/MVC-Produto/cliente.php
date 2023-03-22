<?php
   
   class Cliente {
    private $conexao;

    public function __construct($conexao) {
        $this->conexao = $conexao;
    }

    // Retorna todos os clientes
    public function listar() {
        $stmt = $this->conexao->prepare("SELECT * FROM cliente");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Insere um novo cliente
    public function inserir($nome, $endereco, $bairro, $cep, $telefone, $cpf, $IE, $codigo_cid) {
        $stmt = $this->conexao->prepare("INSERT INTO cliente ($nome, $endereco, $bairro, $cep, $telefone, $cpf, $IE, $codigo_cid) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bindValue(1, $nome);
        $stmt->bindValue(2, $endereco);
        $stmt->bindValue(3, $bairro);
        $stmt->bindValue(3, $cep);
        $stmt->bindValue(3, $telefone);
        $stmt->bindValue(3, $cpf);
        $stmt->bindValue(3, $IE);
        $stmt->bindValue(3, $codigo_cid);
        return $stmt->execute();
    }
  
   }
    

 
?>