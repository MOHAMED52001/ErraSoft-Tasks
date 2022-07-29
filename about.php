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
                <li><a href="Tasks.php" class="btn">Tasks</a></li>
                <li><a href="about.php" class="btn">About</a></li>
                <li><a href="index.php" class="btn">login</a></li>
            </ul>
        </nav>
    </header> 

    <section id="about">
        <div class="contain">
            <h1>About Me :</h1>
            <br>
            <ul>
                <li><h4>Name : Mohamed Atef</h4></li><br>
                <li><h4>Reason for creating this website ?</h4><ul>
                    <li>I Have Creted This Small Project To Practice My Code And To Keep Track Of My Tasks.</li>
                </ul><li>
                    
                </li></li>
            </ul>
            <p>You can use this website to keep track of your tasks too, you have to do some small changes in the code.</p>
        </div>
    </section>
</body>
</html>