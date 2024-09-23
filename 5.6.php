<?php
$users1 = ["John" => "qwerty", "Nicole" => "asdf", "Mark" => "ww"];
$users2 = ["Joan" => "1234", "Mark" => "poiu", "Nicole" => "ggg"];

$merged_users = array_merge(array_diff_key($users1, $users2), array_diff_key($users2, $users1));
$common_users = array_intersect_key($users1, $users2);

foreach ($common_users as $key => $value) {
    $common_users[$key] = [$users1[$key], $users2[$key]];
}
print_r($merged_users);
print_r($common_users);
