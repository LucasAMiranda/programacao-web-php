<?php
   
   class Pedido {
    private $conexao;

    public function __construct($conexao) {
        $this->conexao = $conexao;
    }

    // Retorna todos os clientes
    public function listar() {
        $stmt = $this->conexao->prepare("SELECT * FROM pedido");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Insere um novo Pedido
    public function inserir($numero_pedido, $entrega, $cod_cliente, $cod_vendedor) {
        $stmt = $this->conexao->prepare("INSERT INTO pedido ($numero_pedido, $entrega, $cod_cliente, $cod_vendedor) VALUES (?, ?, ?, ?)");
        $stmt->bindValue(1, $numero_pedido);
        $stmt->bindValue(2, $entrega);
        $stmt->bindValue(3, $cod_cliente);
        $stmt->bindValue(3, $cod_vendedor);
        return $stmt->execute();
    }
  
   }
    

 
?>