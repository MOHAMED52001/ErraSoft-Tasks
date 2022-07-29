<?php
    session_start();
    $err = [];
    $email_db = "mohamedatef";
    $pass_db  = 123;

    if (isset($_POST['submit'])) {
        if ($_POST['email'] && $_POST['pass']) {
            if ($email_db == $_POST['email'] && $pass_db == $_POST['pass']) {
                $_SESSION['email'] = $email_db;
                $_SESSION['logged'] = "logout";
                $_SESSION['ifLogged'] = "dashboard.php";
                header("location: dashboard.php");
            }
            else{
                $err[] = "Email or Password is not correct";
                $_SESSION['err'] = $err;
                $_SESSION['logged'] = "login";
                $_SESSION['ifLogged'] = "index.php";
                header("location: index.php");

            }
        }
        else{
            if ($_POST['email'] == "") {
                $err[] = "Email is required !";
            }
            if ($_POST['pass'] == "") {
                $err[] = "Password is required !";
            }

            $_SESSION['err'] = $err;
            $_SESSION['logged'] = "login";
            $_SESSION['ifLogged'] = "index.php";
            header("location: index.php");

        }
    }


?>