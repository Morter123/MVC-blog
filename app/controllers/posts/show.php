<?php

$db = vendor\App::get('Db');

$id = $_GET['id'] ?? 0;
$post = $db->query("SELECT * FROM posts WHERE id = ? LIMIT 1", [$id])->findOrFail();

$recent_posts = $db->query('SELECT * FROM posts ORDER BY id DESC LIMIT 3')->findAll();

require_once VIEWS . "/posts/show_tpl.php";