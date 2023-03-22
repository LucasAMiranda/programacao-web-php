<!DOCTYPE html>
<html>
<head>
    <title>Setor</title>
</head>
<body>
    <table>
        <thead>
            <tr>
               <th>Código do Setor</th>
               <th>Nome do Setor</th>
            </tr>
            $cod_setor, $nome_setor
        </thead>
        <tbody>
            <?php foreach ($setor as $setores) { ?>
                <tr>
                    <td><?= $setores['cod_setor'] ?></td>
                    <td><?= $setores['nome_setor'] ?></td>    
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>