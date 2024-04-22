<?php

/**
 * @var vendor\Db $db подсказка вс коду для поиска файндол
 */

$db = vendor\App::get('Db');

$posts = $db->query('SELECT * FROM posts ORDER BY id DESC')->findAll();

$recent_posts = $db->query('SELECT * FROM posts ORDER BY id DESC LIMIT 3')->findAll();

require_once VIEWS . '/posts/index_tpl.php';
