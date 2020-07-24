<?php
$array = array('ondo', 120, 'Ibadan', 'Lagos', 500, 'Kano', 'Kaduna');
$color = array('blue', 'green', 'yellow', 'red', 'purple');

$result = array_merge($color, $array);

print_r($result);