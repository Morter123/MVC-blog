<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $fillable = ['title', 'content', 'excerpt'];
    $data = load($fillable);
    
    require_once CORE . '/classes/Validator.php';
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

    if ($validation->hasErrors()) {
        dump($validation->getErrors());
    } else {
        echo 'Ошибок нет';
    }
    die();

    // if (empty($data['title'])) {
    //     $errors['title'] = 'Заполните поле "Title"';
    // }
    // if (empty($data['excerpt'])) {
    //     $errors['excerpt'] = 'Заполните поле "Excerpt"';
    // }
    // if (empty($data['content'])) {
    //     $errors['content'] = 'Заполните поле "Content"';
    // }
    
    if (empty($errors)) {
        $db->query("INSERT INTO posts (`title`, `excerpt`, `content`) VALUES (:title, :excerpt, :content)", $data);  
        redirect('/posts/create');
    }    
}
require_once VIEWS . "/post-create_tpl.php";