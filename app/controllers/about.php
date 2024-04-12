<?php

$posts = $db->query('SELECT * FROM posts')->fetchAll();

$recent_posts = $db->query('SELECT * FROM posts ORDER BY id DESC LIMIT 3')->fetchAll();

require_once VIEWS . '/about_tpl.php';