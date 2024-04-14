<?php

function dump($data) {
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die();
}

function abort($code = 404) {
    http_response_code($code);
    require_once VIEWS . "/errors/{$code}_tpl.php";
    die;
}

function load($fillable = []) {
    $data = [];
    foreach ($_POST as $key => $val) {
        if (in_array($key, $fillable)) {
            $data[$key] = $val;
        }
    } 
    return $data;
}   



