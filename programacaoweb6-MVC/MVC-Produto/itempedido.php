<?php
   
   class ItemPedido {
    private $conexao;

    public function __construct($conexao) {
        $this->conexao = $conexao;
    }

    // Retorna todos os clientes
    public function listar() {
        $stmt = $this->conexao->prepare("SELECT * FROM item_pedido");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Insere um novo item
    public function inserir($Quantidade, $numero_pedido, $cod_produto) {
        $stmt = $this->conexao->prepare("INSERT INTO item_pedido ($Quantidade, $numero_pedido, $cod_produto) VALUES (?, ?, ?)");
        $stmt->bindValue(1, $Quantidade);
        $stmt->bindValue(2, $numero_pedido);
        $stmt->bindValue(2, $cod_produto);
       
        return $stmt->execute();
    }
  
   }
    

 
?>