<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <form action="./practice.php" method="post">
    <?php 
    
    $name = (!empty($_POST["name"]) ? $_POST["name"] : "");
    $lastName = (!empty($_POST["lastName"]) ? $_POST["lastName"] : "");
    $count = (!empty($_POST["count"]) ? $_POST["count"] : "");
    $yes = (!empty($_POST["yes"]) ? $_POST["yes"] : "");
    $no = (!empty($_POST["no"]) ? $_POST["no"] : "");
    $float = (!empty($_POST["float"]) ? $_POST["float"] : "");
    $select = (!empty($_POST["select"]) ? $_POST["select"] : "");

    ?>
        <div>
            <label for="name">Vārds:</label>
            <input type="text" name="name" id="name">
            <label for="lastName">Uzvārds:</label>
            <input type="text" name="lastName" id="lastName">
        </div>
        <div>
            <label for="count">Bērni:</label>
            <input type="number" name="count" id="count" min="1" max="20">
            <label for="yes">Jā ir</label>
            <input type="radio" name="yes">
            <label for="no">Nē nav</label>
            <input type="radio" name="no">
        </div>
        <div>
            <label for="float">Cik float</label>
            <input type="number" name="float" step="0.1">
        </div>
        <div>
            <label for="select">Select</label>
            <select name="select" id="select">
                <option value="one">one</option>
                <option value="two">two</option>
                <option value="three">three</option>
                <option value="four">four</option>
            </select>
        </div>
        <div>
            <?php 
        
                echo "<p>name: " .$name. "</p>";
                var_dump($name);
                echo "<p>last name: " .$lastName. "</p>";
                var_dump($lastName);
                echo "<p>bērni: " .$count. "</p>";
                var_dump((int)$count);
                if(!empty($yes)) {
                    echo "<p>Jā: " .$yes. "</p>";
                } else {
                    echo "<p>Nē: " .$no. "</p>";
                }
                var_dump(settype($yes, 'boolean'));
        
            ?>
    </div>
        <input type="submit">
    </form>



    
    </div>
</body>
</html>