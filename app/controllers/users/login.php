<?php

if (isset($_SESSION['guest'])) {
    $_SESSION['auth'] = "Misha";
    unset($_SESSION['guest']);
}
redirect("/");

require_once VIEWS . '/users/login_tpl.php';