<?php
    require_once 'conexao.php';
    require_once 'cliente.php';
    require_once 'pedido.php';
    require_once 'itempedido.php';
    require_once 'cidade.php';
    require_once 'vendedor.php';
    require_once 'produto.php';
    require_once 'setor.php';

    class ProdutoController {
        private $cliente;
        private $pedido;
        private $item_pedido;
        private $cidade;
        private $vendedor;
        private $produto;
        private $setor;

        public function __construct($conexao) {
            $this->cliente = new Cliente($conexao);
            $this->pedido = new Pedido($conexao);
            $this->item_pedido = new ItemPedido($conexao);
            $this->cidade = new Cidade($conexao);
            $this->vendedor = new Vendedor($conexao);
            $this->produto = new Produto($conexao);
            $this->setor = new Setor($conexao);
        }

        // Lista todos os Produtos
        public function listar() {
            $clientes = $this->cliente->listar();
            $pedidos = $this->pedido->listar();
            $itens = $this->item_pedido->listar();
            $cidades = $this->cidade->listar();
            $vendedores = $this->vendedor->listar();
            $produtos =  $this->produto->listar();
            $setores =  $this->setor->listar();
            include 'clienteview.php';
            include 'pedidoview.php';
            include 'itempedidoview.php';
            include 'cidadeview.php';
            include 'vendedorview.php';
            include 'produtoview.php';
            include 'setorview.php';

        }

    }
?>