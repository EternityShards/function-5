<?php
function unique_strings($array) {
    $unique = array();
    foreach ($array as $value) {
        if (!in_array($value, $unique)) {
            $unique[] = $value;
        }
    }
    return $unique;
}
$исходный_массив = array("apple", "banana", "apple", "orange", "banana");
$уникальные = unique_strings($исходный_массив);
print_r($уникальные);
?>