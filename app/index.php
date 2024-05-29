<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $c = $_POST['c'];
    $d = $_POST['d'];
    $e = $_POST['e'];

    ?>
    <form action="./index.php" method="post">
        <input type="text" name="c" value="<?php echo $c ?>">   
        <input type="text" name="d" value="<?php echo $d ?>">   
        <input type="text" name="e" value="<?php echo $e ?>">   
        <input type="submit" value="Aprekins2">
    </form>
    <h1>Summa: <?php echo $c + $d + $e; ?></h1>

    <?php 
    
    $a = $_POST['a'];
    $b = $_POST['b'];
    $q = $_POST['q'];
    $operand = $_POST['operand']

    ?>

    <form action="./index.php" method="post">
        <input type="radio" name="operand" value="summa">
        <p>Summa</p>
        <input type="radio" name="operand" value="starpiba">
        <p>Starpiba</p>
        <input type="radio" name="operand" value="reizinasana">
        <p>Reizinasana</p>
        <input type="radio" name="operand" value="dalisana">
        <p>Dalisana</p>
        <input type="text" name="a" value="<?php echo $a ?>">   
        <input type="text" name="b" value="<?php echo $b ?>">   
        <input type="text" name="q" value="<?php echo $q ?>">   
        <input type="submit" value="Aprekins">
        </form>
    <h1>Iznakums: <?php 
        if ($operand == 'summa') {
            echo $a + $b + $q;
        } elseif ($operand == 'starpiba') {
            echo $a - $b - $q;
        } elseif ($operand == 'reizinasana') {
            echo $a * $b * $q;
        } elseif ($operand == 'dalisana') {
            echo $a / $b / $q;
        } else {
            echo "Error";
        }
    ?></h1>
   

    
</body>
</html>