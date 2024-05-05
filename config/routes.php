<?php

const MIDDLEWARE = [
    'auth' => vendor\middleware\Auth::class,
    'guest' => vendor\middleware\Guest::class,
];


// Список доступных страниц: метод для страницы(путь в браузере/ее контроллер)
$router->get('', 'posts/index.php');
$router->get('posts', 'posts/show.php');
$router->get('posts/create', 'posts/create.php')->only('auth');
$router->post('posts', 'posts/store.php')->only('auth');
$router->delete('posts', 'posts/destroy.php')->only('auth');

$router->get('about', 'about.php')->only('auth');

$router->get('contact', 'contact.php');

$router->get('register', 'users/register.php')->only('guest');
$router->get('auth', 'users/login.php')->only('guest');
$router->get('logout', 'users/logout.php')->only('auth');