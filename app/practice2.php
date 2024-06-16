<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $temperature = 30;
    if($temperature > 25){
        print("It's a hot day!");
    }
    ?>

    <?php
    $firstName = 'Niko';
    $lastName= 'Rautio';

    var_dump($firstName . ' ' . $lastName);
    ?>

    <?php
    $numbers = [10, 20, 30, 40, 50];

    for($i = 0; $i < count($numbers); $i++){
        var_dump($numbers[$i] / 2);
    }
    ?>

    <?php 
    
    function greet($a) {
        echo "Hello, $a" ;
    }

    greet('Niklavs');
    
    ?>

    <?php
    
    $strNumber = '123';

    var_dump((int)$strNumber);

    $person = array("name"=>"John", "age"=>"30", "city"=>"NEW YORK");
    var_dump($person);

    $num1 = 10;
    $num2 = 20;

    var_dump($num1 + 10 . " " . $num2 - 10);

    $sentence = 'Learning PHP is fun!';

    function practice($a){
        return strrev(strtoupper($a));
    }

    print_r(practice($sentence));

    $matrix = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];

    $countOne = 0;

    for($i = 0; $i < count($matrix); $i++){
        $countOne += $matrix[$i][$i];
    }

    print_r($countOne);

    $value = '123.45';

    $value2= floatval($value);
    print_r(' ' . $value2);

    $value3 = intval($value2);
    print_r(' ' . $value3);

    print_r(' ' . $value2 - $value3);
    
    ?>
</body>
</html>

