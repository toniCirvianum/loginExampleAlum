<?php

function userExist($users, $username) {
    foreach ($users as $user) {
        if ($user['username']== $username) {
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