<?php

function dump($data) {
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
}

function abort($code = 404) {
    http_response_code($code);
    require_once ERRORS . "/{$code}_tpl.php";
    die;
}



