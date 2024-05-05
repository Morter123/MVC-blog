<?php
require_once "/OSPanel/domains/MVC/vendor/core/func.php";

$arr = range(1, 101);

$per_page = 10;
$total = count($arr);
$page_count = ceil($total / $per_page);

$page = isset($_GET['page']) ? (int)($_GET['page']) : 1;
    if ($page < 1) {
    $page = 1;
}
if ($page > $page_count) {
    $page = $page_count;
}

$number_info = ($page - 1) * $per_page;

if ($number_info > $total) {
    $number_info;
}

print_arr(array_slice($arr, $number_info, $per_page));

for ($i = 1; $i <= $page_count; $i++) {
    echo "<a href='?page={$i}'>{$i}</a> "; 
}

// var_dump($per_page, $total, $page_count, $number_info);

// foreach($arr as $value) {
//     print_arr(array_slice($arr, $number_info, $per_page));
// }


// print_arr($arr);

function print_arr($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}
