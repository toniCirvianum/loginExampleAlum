<?php
$users = [ [
         "id"=> 0,
         "name"=> "Toni Fernandez",
         "username" => "admin",
         "password" => "password",
         "mail" => "toni.fernandez@cirvianum.cat",
         "rol" => "admin"
     ],[
         "id"=> 1,
         "name"=> "Raquel Boronat",
         "username" => "raquel",
         "password" => "password",
         "mail" => "raquel.boronat@cirvianum.cat",
         "rol" => "user" ]
];
$_SESSION['users']=$users;



?>