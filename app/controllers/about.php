<?php

$post = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta architecto libero, harum porro perspiciatis explicabo quam rem modi qui dolor repellat nobis facilis ut? Nam suscipit doloremque commodi? Autem, ipsam!
Id quae, sint nisi cupiditate corrupti voluptas pariatur atque, aut eaque nam fugit reiciendis quaerat, harum numquam commodi illo earum sunt rem delectus nemo suscipit! Cumque nesciunt itaque quo veniam?
Velit maxime accusamus, ad, nulla sit totam explicabo iure impedit nam commodi earum corrupti ratione obcaecati pariatur quo voluptas. Consequatur sunt ipsum commodi autem a quia error voluptas ut repudiandae?
Natus voluptas dicta sed, nesciunt aliquid nobis alias ut et? Quod non explicabo, fuga placeat ad, repellendus ratione vero ex dolor magni excepturi quidem, at ipsa quibusdam? Eveniet, modi est.
Possimus repellendus provident eveniet exercitationem veniam, vitae dolor. Corporis quidem voluptatibus quaerat placeat ipsa, quam maxime labore perferendis, maiores eveniet sit tempora, distinctio molestiae animi quae natus nemo illum vero?";

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

require_once VIEWS . '/about_tpl.php';