<!DOCTYPE html>
<html>
<head>
    <title>Clientes</title>
</head>
<body>
    <table>
        <thead>
            <tr>
               <th>Nome</th>
               <th>Endereço</th>
               <th>Bairro</th>
               <th>CEP</th>
               <th>telefone</th>
               <th>CPF</th>
               <th>IE</th>
               <th>CODIGO DA CIDADE</th>
            </tr>

        </thead>
        <tbody>
            <?php foreach ($cliente as $clientes) { ?>
                <tr>
                    <td><?= $clientes['nome'] ?></td>
                    <td><?= $clientes['endereco'] ?></td>
                    <td><?= $clientes['bairro'] ?></td>
                    <td><?= $clientes['cep'] ?></td>
                    <td><?= $clientes['telefone'] ?></td>
                    <td><?= $clientes['cpf'] ?></td>
                    <td><?= $clientes['IE'] ?></td>
                    <td><?= $clientes['cod_cidade'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>