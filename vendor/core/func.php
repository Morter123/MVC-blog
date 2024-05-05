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

// Функция чтобы оставлять поля заполненными
function old($fieldname) {
    return isset($_POST[$fieldname]) ? h(trim($_POST[$fieldname])) : ""; 
}

// h - сократил функцию htmlspecialchairs (лучше делать, если что-то еще хотим сделать со строкой)
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

function get_Alerts() {
    if (!empty($_SESSION['success'])) {
        require_once VIEWS . '/template/alert_success.php';
        unset($_SESSION['success']);
    }
    if (!empty($_SESSION['error'])) {
        require_once VIEWS . '/template/alert_error.php';
        unset($_SESSION['error']);
    }
}

function check_auth($status) {
    return isset($_SESSION[$status]);
}

