<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fillable = ['title', 'content', 'excerpt'];
    $data = load($fillable);
    
    $errors = [];
    if (empty(trim($data['title']))) {
        $errors['title'] = 'Заполните поле Title';
    }
    if (empty(trim($data['excerpt']))) {
        $errors['excerpt'] = 'Заполните поле excerpt';
    }
    if (empty(trim($data['content']))) {
        $errors['content'] = 'Заполните поле content';
    }
    
    if (empty($errors)) {
        $db->query("INSERT INTO posts (`title`, `excerpt`, `content`) VALUES (?, ?, ?)", [$data['title'], $data['excerpt'], $data['content']]);
    }    
}

require_once VIEWS . "/post-create_tpl.php";