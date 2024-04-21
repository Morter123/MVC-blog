<?php

/**
 * @var vendor\Db $db подсказка вс коду для поиска файндол
 */

global $db;
// Перевернем таблицу, чтобы новые посты находились сверху
$posts = $db->query('SELECT * FROM posts ORDER BY id DESC')->findAll();

// recent_posts для sidebar, будет у всех,,, показывает 3 последних опубликованных поста
$recent_posts = $db->query('SELECT * FROM posts ORDER BY id DESC LIMIT 3')->findAll();

require_once VIEWS . '/posts/index_tpl.php';
