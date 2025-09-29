<?php
session_start();

//comporvacions tipiques d'error request i post

$id_task = $_POST['id_task'];
foreach ($_SESSION['todoList'] as $key => $task) {
    if ($id_task == $task['id']) {
        //un cop hem localitzat la tasca
        //Actualitzar-la amb els valors que s'han pasat pel formulari
        $tasks = $_SESSION['todoList'];
        $tasks[$key]['name'] = $_POST['name'];
    }
}