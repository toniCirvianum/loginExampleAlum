<?php

function prettyEcho ($item,$message=' ') {

    if (is_array($item)) {
        echo "<pre>";
        echo $message. "<br>";
        print_r($item);
        echo "</pre>";
    } else {
        echo "<pre>";
        echo $message. ": ".$item;
        echo "</pre>";
    }
}