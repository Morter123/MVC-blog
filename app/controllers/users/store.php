<?php

use vendor\Validator;

$db = vendor\App::get('Db');

$fillable = ['login', 'email', 'password'];
$data = load($fillable);

$validator = new Validator();
$validation = $validator->validate($data, $rules = [
    'login' => [
        'required' => true,
        'min' => 3,
        'max' => 100,
    ],
    'email' => [
        'required' => true,
        'max' => 200,
        'unique' => 'users:email',
    ],
    'password' => [
        'required' => true,
        'min' => 6,
    ],
]);

if (!$validation->hasErrors()) {
    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
    if ($db->query("INSERT INTO users (`login`, `email`, `password`) VALUES (:login, :email, :password)", $data)) {
        $_SESSION['success'] = "Вы успешно зарегистрировались!";
    } else {
        $_SESSION['error'] = "DB Error";
    }
    redirect('/');
} else {
    require_once VIEWS . "/users/register_tpl.php";
}

