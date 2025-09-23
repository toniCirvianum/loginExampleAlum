<?php

//comprova usuari i password
function checkUser($username, $password, $users) {
    foreach ($users as $user) {
        if ($username == $user['username']) {
            if ($password == $user['password']) {
                return $user;
            }
            else {
                return 3;
            }
        }
    }
    return 4;
}

//comprovar usuari satisfa Regex
function usernameCorrect ($username) {
    $regex = '/^[a-z0-9]{1,10}$/';
    if (preg_match($regex, $username)) {
        return true;
        // return 1;
    }
    return false;
    // return 0;
}

//comprovar pasword satisfa Regex
function passwordCorrect ($password) {
        $regex = '/^[a-z0-9]{1,10}$/';
    if (preg_match($regex, $password)) {
        return true;
        // return 1;
    }
    return false;
    // return 0;
}


?>