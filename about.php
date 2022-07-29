<?php 

    session_start();
    if (!empty($_SESSION['ifLogged'])) {
        $logged = $_SESSION['ifLogged'];
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/main.css">
    <title>Tasks</title>
</head>
<body>
    <header>
        <nav id="nav-bar">
            <h1 class="logo">Erra<span>Soft</span></h1>
            <ul>
                <li><a href="<?= $logged ?? null ?>" class="btn">Home</a></li>
                <li><a href="about.php" class="btn">About</a></li>
                <li><a href="index.php" class="btn">login</a></li>
            </ul>
        </nav>
    </header> 
</body>
</html>