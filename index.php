<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    $connect = mysqli_connect(('localhost'), ('root'), ('database')
or die("Erro de Conexão"));
?>
<body>
    <form action="POST" action="./php scripts/connect.php">
        <div>
            <input type="text" name="urlname">
            <br>
            <input type="url" name="url">
            <br>
            <input type="submit" name="send">

        </div>
    </form>
</body>
</html>