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
        session_start();
        $_SESSION['userName'] = 'kubus';
        $_SESSION['fullName'] = 'Kubus Puchatek';
        $_SESSION['email'] = 'kubus@stumilowylas.pl';
        $_SESSION['status'] = 'ADMIN';

        echo "Sesja:</br>";
        echo "id = ".session_id()."</br>";
        foreach($_SESSION as $key => $value){
            echo nl2br("$key = $value\n");
        }

        echo "</br>Ciasteczka:</br>";
        foreach($_COOKIE as $key => $value){
            echo nl2br("$key = $value\n");
        }

    ?>
    <a href="test2.php">Test2.php</a>
</body>
</html>

