<?php

session_start();
$var_log = $_SESSION['logged'];
$em = explode('@', $_SESSION['email']);
$email = $em[0];
if (!$email) {
    $er[] = "You must login To Access Dashboard";
    $_SESSION['err'] = $er;
    header("location: index.php");
}

$directory = "./uploads";

if (!is_dir($directory)) {
    exit('Invalid diretory path');
}

$files = array();
foreach (scandir($directory) as $file) {
    if ($file !== '.' && $file !== '..') {
        $file = explode('.',$file);
        $file = $file[0];
        $files[] = $file;
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tasks</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
    <link rel="stylesheet" href="./styles/main.css">
    <link rel="stylesheet" href="./styles/task.css">
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
        <h1 class="h1-name"><?= "Welcome, ", $email ?></h1>
    </div>

    <div class="wrapper center-block">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

            <?php

            foreach ($files  as $key => $value) {
                echo "
                        <div class='panel panel-default'>
                        <div class='panel-heading active' role='tab' id='headingOne'>
                            <h4 class='panel-title'>
                                <a role='button' data-toggle='collapse' data-parent='#accordion' href='#$key' aria-expanded='true' aria-controls='collapseOne'>
                                    $value
                                </a>
                            </h4>
                        </div>
                        <div id='$key' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='heading1'>
                            <div class='panel-body'>
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                        
                        ";
            }

            ?>


        </div>
    </div>


    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
    <script src="./js/script.js"></script>
</body>

</html>