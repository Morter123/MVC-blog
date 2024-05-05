<?php

namespace vendor\middleware;

class Auth {
    
    public function handle() {
        if (!check_auth('auth')) {
            redirect('/register');
        }
    }
}