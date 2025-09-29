<?php
session_start();
if ($_SERVER['REQUEST_METHOD']=='GET') {
    if (isset($_GET['id'])) {
        $id_task = $_GET['id'];
        foreach ($_SESSION['todoList'] as $key => $task) {
            if ($id_task == $task['id']) {
                //un cop hem localitzat la tasca
                //amb l seva key l'esborrem
                unset($_SESSION['todoList'][$key]);
                header ('Location: ../view/app_view.php');
                exit();
            }
        }
    }
}