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

$directory = "./Tasks";

if (!is_dir($directory)) {
    exit('Invalid diretory path');
}

$files = [];
foreach (scandir($directory) as $file) {
    if ($file !== '.' && $file !== '..') {
        $files[] = $file;
    }
}

$file_data = [];
foreach ($files as $value) {
    $content = [];
    $handle = fopen("./Tasks/${value}", "r");
    if ($handle) {
        while (($line = fgets($handle)) !== false) {
            $content[] = $line;
        }
        fclose($handle);
    }
    $file_data[$value]['content'] = $content;
}

$arr = [
    [
        "name" => "Algo",
        "git" => "https://github.com/MOHAMED52001/ErraSoft-Tasks/blob/master/Tasks/Algo.txt",
        "dis" => "this a list for the most common algorithms in 21 cen"
    ],
    [
        "name" => "Count_Every_Word",
        "git" => "https://github.com/MOHAMED52001/ErraSoft-Tasks/blob/master/Tasks/CountEveryWord.php",
        "dis" => "count a given word how many times it reapeted in the string"
    ],
    [
        "name" => "Richest_Customer_Wealth",
        "git" => "https://github.com/MOHAMED52001/ErraSoft-Tasks/blob/master/Tasks/Richest_Customer_Wealth.php",
        "dis" => "find the maximum sum in a row"
    ],
    [
        "name" => "ReverseEachWord_inString",
        "git" => "",
        "dis" => "reverse each word in a string in its place"
    ],
    [
        "name" => "MaxElement_inArray",
        "git" => "",
        "dis" => "find the maximum element in array"
    ]

    ];







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
        <h1 class="h1-name" style="font-size:2rem"><?= "Welcome, ", $email ?></h1>
        <a href="https://github.com/MOHAMED52001/ErraSoft-Tasks.git" target="_blank" style="color:black; font-size:1.6rem">This My Git Repository For This Project And My Solution For Each Task</a>
    </div>

    <div class="wrapper center-block">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

            <?php
                   foreach ($arr as $key => $value) {
                    echo "
                    <div class='panel panel-default'>
                    <div class='panel-heading active' role='tab' id='headingOne'>
                        <h4 class='panel-title'>
                            <a role='button' data-toggle='collapse' data-parent='#accordion' href='#$value[name]' aria-expanded='true' aria-controls='collapseOne'>
                                $value[name]
                            </a>
                        </h4>
                    </div>
                    <div id='$value[name]' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='heading1'>
                    <div class='panel-body'>
                    <ul>
                        <li> $value[dis] <br><br></li>
                        <li><a style='color:black' href='$value[git]' target='_blank'> $value[git]</a></li>
                    </ul>
                    </div>
                </div>
                 
                </div>

                    ";
                   }
                
            ?>
            <?php

            // foreach ($file_data  as $key => $value) {
            //     $key = explode("." ,$key);
            //     $key = $key[0];
            //     echo "
            //    <div class='panel panel-default'>
            //    <div class='panel-heading active' role='tab' id='headingOne'>
            //        <h4 class='panel-title'>
            //            <a role='button' data-toggle='collapse' data-parent='#accordion' href='#$key' aria-expanded='true' aria-controls='collapseOne'>
            //                $key
            //            </a>
            //        </h4>
            //    </div>
            //    ";
            //     foreach ($value as $content) {
            //         foreach ($content as  $item) {
            //             echo "
            //             <div id='$key' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='heading1'>
            //                 <div class='panel-body'>
            //                     $item
            //                 </div>
            //             </div>
            //         </div>

            //     ";
            //     }
            //     }
            // }
            ?>

        </div>
    </div>


    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
    <script src="./js/script.js"></script>
</body>

</html>