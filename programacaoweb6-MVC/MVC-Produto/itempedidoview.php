<!DOCTYPE html>
<html>
<head>
    <title>Pedido</title>
</head>
<body>
    <table>
        <thead>
            <tr>
               <th>Quantidade</th>
               <th>Número do Pedido</th>
               <th>Código do Produto</th>
              
            </tr>
            
        </thead>
        <tbody>
            <?php foreach ($item_pedido as $items_pedidos) { ?>
                <tr>
                    <td><?= $items_pedidos['Quantidade'] ?></td>
                    <td><?= $items_pedidos['num_pedido'] ?></td>
                    <td><?= $items_pedidos['cod_produto'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>