<?php

if (isset($_SESSION['auth'])) {
    $_SESSION['guest'] = 1;
    unset($_SESSION['auth']);
}

redirect("/register");