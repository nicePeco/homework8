<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
        border: 1px solid black; 
        }
        table th {
        border: 1px solid black; 
        }
        table td {
        border: 1px solid black; 
        }
    </style>
</head>
<body>
    <div>
        <form action="./hwork11.php" method="post">
            <label for="partyName">Saraksta nosaukums</label>
            <input type="text" name="partyName">
            <label for="count">Kandidātu skaits</label>
            <input type="number" name="count" min="1" max="100">
            <input type="submit">
        </form>
        <?php 
        
        $name = !empty($_POST["partyName"]) ? $_POST["partyName"] : "";
        $number = !empty($_POST["count"]) ? $_POST["count"] : "";
        if(!empty($name) && is_numeric($number) && $number > 0){ ?>
            <div>
                <h1>Partija <?= $name ?></h1>
            </div>
            <div>
                <form action="./hwork11.php" method="post">
                    <?php 
                    
                    for($i = 0; $i < $number; $i++){ ?>
                    <div>
                        <label for="firstName">Vārds:</label>
                        <input type="text" name="person[<?= $i ?>][firstName]" >
                        <label for="lastName">Uzvārds:</label>
                        <input type="text" name="person[<?= $i ?>][lastName]">
                        <label for="par">par</label>
                        <input type="radio" name="person[<?= $i ?>][balss]" value="par">
                        <label for="pret">pret</label>
                        <input type="radio" name="person[<?= $i ?>][balss]" value="pret">
                        <label for="atturos">atturos</label>
                        <input type="radio" name="person[<?= $i ?>][balss]" value="atturos">
                    </div>
                    </div>

                    <?php } ?>
                    <input type="submit" name="submit2" id="submit2">
                </form>
                <pre> <?php var_dump($_POST) ?></pre>
            </div>    
        <?php } ?>
        
        <?php $person = (!empty($_POST["person"]) ? $_POST["person"] : "");
        
        if (!empty($person)) {
            function compareLastName($a, $b) {
                return strcmp($a["lastName"], $b["lastName"]);
            }

            usort($person, 'compareLastName');
        }
        
        ?>
        <div>
            <table>
                <?php 
                
                foreach($person as $result){?>
                    <tr>
                        <td><?= ($result["firstName"]) ?></td>
                        <td><?= ($result["lastName"]) ?></td>
                        <td><?= ($result["balss"]) ?></td>
                    </tr>
                <?php } ?>
                
                
            </table>
        </div>
    </div>
</body>
</html>