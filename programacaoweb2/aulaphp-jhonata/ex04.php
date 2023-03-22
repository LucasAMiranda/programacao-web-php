<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

      //Ex: $arr = array(1,1,1,0,0,0,1);
      /*OBS: Dar como resposta Fatal Error, Não é possível,
        converter de binário para decimal usando um array,
        porque dar erro e tem que transformar a variável em 
        type string para poder usar a função base_convert.
      */

       $arr = ('1110001'); //base binária

       echo(base_convert($arr, 2, 10)); //convertendo decimal
    
    ?>
</body>
</html>