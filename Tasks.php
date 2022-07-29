<?php

    session_start();
    $var_log = $_SESSION['logged'];
    $em = explode('@',$_SESSION['email']);
    $email = $em[0];
    if (!$email) {
        $er[] = "You must login To Access Dashboard";
        $_SESSION['err'] = $er; 
        header("location: index.php");
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
                <li><a href="dashboard.php" class="btn">Home</a></li>
                <li><a href="Tasks.php" class="btn">Tasks</a></li>
                <li><a href="about.php" class="btn">About</a></li>
                <li><a href="logout.php" class="btn"><?= $var_log ?></a></li>
            </ul>
        </nav>
    </header>
     <div>
     <h1 class="h1-name"><?= "Welcome, ",$email ?></h1>
     </div>
</body>
</html>