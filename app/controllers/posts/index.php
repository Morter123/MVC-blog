<?php

/**
 * @var vendor\Db $db подсказка вс коду для поиска файндол
 */

$db = vendor\App::get('Db');

$per_page = 5;
$total = $db->query('SELECT count(*) as total FROM posts')->getColumn();
$page_count = ceil($total / $per_page);

$page = isset($_GET['page']) ? (int)($_GET['page']) : 1;
    if ($page < 1) {
    $page = 1;
}
if ($page > $page_count) {
    $page = $page_count;
}

$start = ($page - 1) * $per_page;

if ($start > $total) {
    $start;
}

$posts = $db->query("SELECT * FROM posts ORDER BY id DESC LIMIT {$start}, {$per_page}")->findAll();

$recent_posts = $db->query('SELECT * FROM posts ORDER BY id DESC LIMIT 3')->findAll();

require_once VIEWS . '/posts/index_tpl.php';
