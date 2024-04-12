<?php

$id = $_GET['id'] ?? 0;

$post = $db->query("SELECT * FROM posts WHERE id = {$id} LIMIT 1")->findOrFail();



$recent_posts = $db->query('SELECT * FROM posts ORDER BY id DESC LIMIT 3')->findAll();

require_once VIEWS . "/post_tpl.php";