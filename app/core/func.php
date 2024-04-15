<?php

function dump($data) {
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
}

function dd($data) {
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
            $data[$key] = trim($val);
        }
    } 
    return $data;
}   

function old($fieldname) {
    return isset($_POST[$fieldname]) ? h(trim($_POST[$fieldname])) : ""; 
}

function h($str) {
    return htmlspecialchars($str, ENT_QUOTES);
}

function redirect($url = '') {
    if ($url) {
        $redirect = $url;
    } else {
        // Помни что HTTP_REFERER это место, откуда был совершен переход на текущую страницу, но его можно легко подменить, не понял до конца
        // логику else, если url мы указываем
        $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : PATH;
    }
    header("Location: {$redirect}");
    die();
}

