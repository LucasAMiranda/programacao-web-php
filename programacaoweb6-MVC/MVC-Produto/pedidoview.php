<!DOCTYPE html>
<html>
<head>
    <title>Pedido</title>
</head>
<body>
    <table>
        <thead>
            <tr>
               <th>Número do Pedido</th>
               <th>Entrega</th>
               <th>Código do Cliente </th>
               <th>Código do Vendedor </th>
            </tr>
            
        </thead>
        <tbody>
            <?php foreach ($pedido as $pedidos) { ?>
                <tr>
                    <td><?= $pedidos['numero_pedido'] ?></td>
                    <td><?= $pedidos['entrega'] ?></td>
                    <td><?= $pedidos['cod_cliente'] ?></td>
                    <td><?= $pedidos['cod_vendedor'] ?></td> 
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>