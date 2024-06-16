<?php 

    session_start();

    $parole = 'parole';

    if($parole === $_POST['password']){
        $_SESSION['name'] = $_POST['name'];
        file_put_contents('storage.file.txt', date('d.m.Y H:i:s') . "{$_SESSION['name']}  :   $parole  :  \n" , FILE_APPEND | LOCK_EX);
    }

    if(isset($_POST['logout'])) {
        session_unset();
    }

    // if(isset($_POST['storage']) && $_POST['nameTwo'] === 'cookie'){
        // file_put_contents('storage.file.txt', time());
    // }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hey, <?= $_SESSION['name'] ?? 'unknown' ?></h1>
    <form action="./session.php" method="post">
        <input type="text" name="name">
        <input type="password" name="password">
        <input type="submit" value="log in">
    </form>
    <form action="./session.php" method="post">
        <input type="hidden" name="logout" id="true">
        <input type="submit" value="logout">
    </form>
    <form action="./session.php" method="post">
        <input type="text" name="nameTwo" id="cookie">
        <input type="text" name="nameThree">
        <input type="submit" name="storage">
    </form>
</body>
</html>