<?php

//comprova usuari i password
function checkUser() {

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