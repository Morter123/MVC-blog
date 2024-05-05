<?php

/**
 * @var vendor\Db $db подсказка вс коду
 */

use vendor\Pagination;

$db = vendor\App::get('Db');

$page = $_GET['page'] ?? 1;
$per_page = 4;
$total = $db->query('SELECT count(*) as total FROM posts')->getColumn();
$pagination = new Pagination((int)$page, $per_page, $total);

$start = $pagination->getStart();

$posts = $db->query("SELECT * FROM posts ORDER BY id DESC LIMIT {$start}, {$per_page}")->findAll();

$recent_posts = $db->query('SELECT * FROM posts ORDER BY id DESC LIMIT 3')->findAll();

require_once VIEWS . '/posts/index_tpl.php';
