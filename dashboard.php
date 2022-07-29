<?php

    session_start();
    $var_log = $_SESSION['logged'];


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
                <li><a href="<?php echo $_SERVER['PHP_SELF'] ?>" class="btn">Home</a></li>
                <li><a href="about.php" class="btn">About</a></li>
                <li><a href="logout.php" class="btn"><?= $var_log ?></a></li>
            </ul>
        </nav>
    </header> 
    
    </section>
</body>
</html>