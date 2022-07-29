<?php

    session_start();
    if (!empty($_SESSION['err'])) {
        $err = $_SESSION['err'];
    }

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
    <?php 
         if (!empty($err)) {
            foreach($err as $value){
                echo "<p style='color:red'>${value}</p>";
         }
        }
    ?>
    <section id="login-form">
    <form action="login.php" method="post">
       <div class="container">
       <div>
            <label for="Email">Email: </label>
            <input type="text" name="email" id="Email">
        </div>
        <div>
            <label for="Password">Password: </label>
            <input type="password" name="pass" id="Password">
        </div>
        <input type="submit" name="submit" class="btn">
       </div>
    </form>
    </section>
</body>
</html>