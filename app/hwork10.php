<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <?php
     $pozicija = [
        ['o', 'x', 'o'],
        ['o', 'o', 'o'],
        ['x', 'x', 'x'],
    ];

    ?>

    <table>

        <?php for($i=0; $i<3; $i++) { ?>
        <tr>
            <?php for($j=0; $j<3; $j++){  ?>
                <td><?= $pozicija[$i][$j];?></td>
            <?php } ?>
        </tr> 
        <?php } ?>
    </table>

    <!--1 uzd-->
    <?php 
    $numbers = [1, 2, 3, 4, 5];
    $sum = 0;

    for($i = 0; $i <= 5; $i++) {
        $sum = $sum + $numbers[$i];
    }

    print_r("uzdevums 1- " . $sum);

    ?>

    <!--2 uzd-->
    <?php
    $numbers = [4, 43, 35, 53, 60, 3, 30];
    $max = 0;

    foreach($numbers as $number) {
        if($max < $number) {
            $max = $number;
        }
    }
    
    print_r("<br> uzdevums 2- " . $max);

    ?>

    <!--3 uzd-->
    <?php 
    $numbers = [1, 2, 3, 4, 5];
    $result = 0;
    $count = 0;

    foreach($numbers as $num) {
        $result += $num;
        $count++;
    }

    print_r("<br> uzdevums 3- " . $result / $count);

    ?>

    <!--4 uzd-->
    <?php
    
    $numbers = [4, 43, 35, 53, 60, 3, 30];
    $min = $numbers[0];

    foreach($numbers as $num) {
        if($num < $min){
            $min = $num;
        }
    }

    print_r("<br>uzdevums 4- " . $min)

    ?>

     <!--5 uzd-->
     <?php 
     
     $numbers = [4, 43, 35, 53, 60, 3, 30];
     $para = 0;
     $nepara = 0;

     foreach($numbers as $num){
        if($num % 2 == 0){
            $para++;
        } else {
            $nepara++;
        }
     }

     print_r("<br>uzdevums 5- " . $para . ":para, " . $nepara . ":nepara")
     
     ?>

     <!--6 uzd-->
     <?php 
     
     $numbers = [1, 2, 3, 4, 5];
     $length = 0;
     $reverse = 0;

     foreach($numbers as $num){
        $length++;
     }

     for($i = 0; $i < $length / 2; $i++){
        $temp = $numbers[$i];
        $numbers[$i] = $numbers[$length - $i - 1];
        $numbers[$length - $i - 1] = $temp; 
     }

     print_r($numbers);
     
     ?>

      <!--7 uzd-->
      <?php
      
      $numbers = [1, 2, 3, 3, 4, 5, 5, 5, 5, 6, 7];
      $length = 0;

      foreach($numbers as $num){
        $length++;
      }
      
      ?>

</body>
</html>