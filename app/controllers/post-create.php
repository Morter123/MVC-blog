<?php

use vendor\Validator;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $fillable = ['title', 'content', 'excerpt', 'email', 'password'];
    $data = load($fillable);

    $validator = new Validator();
    $validation = $validator->validate($data, $rules = [
        'title' => [
            'required' => true,
            'min' => 1,
            'max' => 100,
        ],
        'excerpt' => [
            'required' => true,
            'min' => 1,
            'max' => 200,
        ],
        'content' => [
            'required' => true,
            'min' => 1,
            'max' => 5000,
        ],
    ]);

    if (!$validation->hasErrors()) {
        $db->query("INSERT INTO posts (`title`, `excerpt`, `content`) VALUES (:title, :excerpt, :content)", $data);
        $_SESSION['success'] = "OK";
        redirect('/posts/create');  
    } else {
        $_SESSION['error'] = "DB Error";
        
    }
}

require_once VIEWS . "/post-create_tpl.php";