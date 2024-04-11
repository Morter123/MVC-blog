<?php

$posts = [
    1 => [
        'title' => 'Title 1',
        'desc' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
        'link' => 'title-1',
    ],
    2 => [
        'title' => 'Title 2',
        'desc' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
        'link' => 'title-2',
    ],
    3 => [
        'title' => 'Title 3',
        'desc' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
        'link' => 'title-3',
    ],
    4 => [
        'title' => 'Title 4',
        'desc' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
        'link' => 'title-4',
    ],
    5 => [
        'title' => 'Title 5',
        'desc' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
        'link' => 'title-5',
    ],
];

$recent_posts = [
    1 =>
    [
        'title' => 'An item one',
        'link' => lcfirst(str_replace(" ", "-", "An item one"))
    ],
    21 =>
    [
        'title' => 'An item two',
        'link' => lcfirst(str_replace(" ", "-", "An item two"))
    ],
    3 =>
    [
        'title' => 'An item three',
        'link' => lcfirst(str_replace(" ", "-", "An item three"))
    ],
    4 =>
    [
        'title' => 'An item four',
        'link' => lcfirst(str_replace(" ", "-", "An item four"))
    ],
    5 =>
    [
        'title' => 'An item five',
        'link' => lcfirst(str_replace(" ", "-", "An item five"))
    ],
];

require_once VIEWS . '/index_tpl.php';
