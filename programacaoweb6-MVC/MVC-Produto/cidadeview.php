<!DOCTYPE html>
<html>
<head>
    <title>Cidade</title>
</head>
<body>
    <table>
        <thead>
            <tr>
               <th>Código da Cidade</th>
               <th>Nome da Cidade</th>
               <th>UF</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cidade as $cidades) { ?>
                <tr>
                    <td><?= $cidades['cod_cidade'] ?></td>
                    <td><?= $cidades['nome_cidade'] ?></td>
                    <td><?= $cidades['uf'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>