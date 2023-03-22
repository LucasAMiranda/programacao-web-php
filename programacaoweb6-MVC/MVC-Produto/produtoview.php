<!DOCTYPE html>
<html>
<head>
    <title>Vendedor</title>
</head>
<body>
    <table>
        <thead>
            <tr>
               <th>Código do Produto</th>
               <th>Nome do vendedor</th>
               <th>Descrição</th>
               <th>Unidade</th>
               <th>Valor Unitário</th>
            </tr>
            
        </thead>
        <tbody>
            <?php foreach ($produto as $produtos) { ?>
                <tr>
                    <td><?= $produtos['cod_produto'] ?></td>
                    <td><?= $produtos['nome_vendedor'] ?></td>
                    <td><?= $produtos['descricao'] ?></td>
                    <td><?= $produtos['valor_un'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>