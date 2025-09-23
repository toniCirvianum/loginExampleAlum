<?php
session_start();
if (!isset($_SESSION['users'])) {
    include('./model/users_model.php');
}

header ('Location: ./view/home.php');

