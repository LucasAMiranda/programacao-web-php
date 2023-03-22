<!DOCTYPE html>
<html>
<head>
    <title>Vendedor</title>
</head>
<body>
    <table>
        <thead>
            <tr>
               <th>Código do Vendedor</th>
               <th>Nome do vendedor</th>
               <th>Salário</th>
               <th>Código do Setor</th>
            </tr>
           
        </thead>
        <tbody>
            <?php foreach ($vendedor as $vendedores) { ?>
                <tr>
                    <td><?= $vendedores['cod_vendedor'] ?></td>
                    <td><?= $cidades['nome_vendedor'] ?></td>
                    <td><?= $cidades['salario'] ?></td>
                    <td><?= $cidades['cod_setor'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>