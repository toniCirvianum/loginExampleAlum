<?php
session_start();
foreach (glob(__DIR__ . '/../functions/*.php') as $fitxer) {
    include($fitxer);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (
        isset($_POST['name']) &&
        isset($_POST['username']) &&
        isset($_POST['pass1']) &&
        isset($_POST['pass2']) &&
        isset($_POST['mail'])
    ) {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['pass1'];
        $password2 = $_POST['pass2'];
        $mail = $_POST['mail'];

        // Comprovar errors en l'entrada de dades
        // 1. Que les contresenyes siguin iguals
        if (!checkSamePassword($password, $password2)) {
            header('Location: ../view/register_view.php?error=1');
            exit();
        }
        //2. REgex username
        if (!usernameCorrect($username)) {
            header('Location: ../view/register_view.php?error=2');
            exit();
        }
        //     3. Regex password
        if (!passwordCorrect($password)) {
            header('Location: ../view/register_view.php?error=3');
            exit();
        }
        //4. Regex mail
        if (!mailCorrect($mail)) {
            header('Location: ../view/register_view.php?error=4');
            exit();
        }
        //     5. No existexi el usuari
        if (userExist($_SESSION['users'], $username)) {
            header('Location: ../view/register_view.php?error=5');
            exit();
        }


        $newUser = [
            "id" => getNewUserId($_SESSION['users']),
            "name" => $name,
            "username" => $username,
            "password" => $password,
            "mail" => $mail,
            "rol" => "user"
        ];

        array_push($_SESSION['users'], $newUser);

        // Si volem redirigir a dins l'aplicaci´o cal crear
        // la variable de sessio $_SESSION['user_logged']=$newUser
        header('Location: ../view/register_view.php?error=0');
        exit();
    }
}
