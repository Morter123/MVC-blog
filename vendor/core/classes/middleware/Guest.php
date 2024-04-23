<?php

namespace vendor\middleware;

class Guest {

    public function handle() {
        if (!check_auth('guest')) {
            redirect();
        }
    }
}