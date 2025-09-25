<?php
session_start();
foreach (glob(__DIR__ . '/../functions/*.php') as $fitxer) {
    include ($fitxer);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (!usernameCorrect($username)) {
            header ('Location: ../view/login_view.php?error=1');
            exit();
        }

        if (!passwordCorrect($password)) {
            
            header ('Location: ../view/login_view.php?error=2');
            exit();
        }

        $users = $_SESSION['users'];

        if (checkUser($username,$password,$users)==3) {
            header ('Location: ../view/login_view.php?error=2');
            exit();
        }

        if (checkUser($username,$password,$users)==4) {
            header ('Location: ../view/login_view.php?error=2');
            exit();
        }

        $_SESSION['user_logged'] = checkUser($username,$password,$users);
        header ('Location: ../view/app_view.php');
        exit();


        


    }
}