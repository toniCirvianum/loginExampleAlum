<?php

function userExist($users, $username) {
    // echo $username;
    // prettyEcho($users);
    foreach ($users as $user) {
        if ($user['username']== $username) {
            // echo "<br> usuari trobat! <br>";
            return 1;
        }
    }
    return 0;
}


function getNewUserId ($users){
    //amb la funcio end recupero l'ultim usuari de l'array d'usuaris
    $lastUser = end($users);
    //retorno el id d'aquest usuari + 1
    return $lastUser['id']+1;
}

function checkSamePassword($pass1, $pass2)
{
    $r = ($pass1 === $pass2) ? true : false;
    return $r;
}

function mailCorrect($mail) {
    if ( filter_var($mail,FILTER_VALIDATE_EMAIL)) {
        return 1;
    }
    return 0;
}