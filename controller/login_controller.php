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
            echo "nom usuari incorrecte";
            exit();
        }

        if (!passwordCorrect($password)) {
            echo "password incorrecte";
            exit();
        }

        echo "tot bé";


    }
}