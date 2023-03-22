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
        $soma = 0;

        $arr = array(1,2,3,4,5,6,7,8,9,10);

        $soma = $arr[1] + $arr[3] + $arr[5] + $arr[7] + $arr[9];

        echo "A soma é = ", $soma;
     ?>
</body>
</html>