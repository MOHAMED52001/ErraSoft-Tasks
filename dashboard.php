<?php

session_start();
$allowed_files = ['php','txt','js','css'];
$var_log = $_SESSION['logged'];
$em = explode('@', $_SESSION['email']);
$email = $em[0];
if ($email) {
    if (isset($_POST['submit'])) {
        if (!empty($_FILES['upload']['name'])) {
            $file_name = $_FILES['upload']['name'];
            $file_tmp = $_FILES['upload']['tmp_name'];
            $target_dir = "Tasks/${file_name}";
            $file_ext = explode('.',$file_name);

            if (in_array($file_ext[1],$allowed_files)) {
                move_uploaded_file($file_tmp, $target_dir);
                $msg = "<h4 style='color:green'>File Uploaded Successfully !</h4>";
                
            }
            else{
                $msg = "<h4 style='color:red'>You must choose with .ext from [php','txt','js','css'] !</h4>";
            }
        } 
        else {
            $msg = "<h4 style='color:red'>You must choose file to upload</h4>";
        }
    }
} else {
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
                <li><a href="<?php echo $_SERVER['PHP_SELF'] ?>" class="btn">Home</a></li>
                <li><a href="Tasks.php" class="btn">Tasks</a></li>
                <li><a href="about.php" class="btn">About</a></li>
                <li><a href="logout.php" class="btn"><?= $var_log ?></a></li>
            </ul>
        </nav>
    </header>
    <div>
        <h1 class="h1-name"><?= "Welcome, ", $email ?></h1>
    </div>
    <section>

        <div class="contain">
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
            <?= $msg ?? null ?>
            Choose File To Upload :
            <input type="file" name="upload" id="upload">
            <input type="submit" name="submit" class="btn">
            </div>
        </form>
        </div>
    </section>

</body>

</html>