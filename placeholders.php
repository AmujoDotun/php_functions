<?php

// $sprintf()

$number = 10;
$animals ='seagulls';
$location = 'beach';
$number2 = 44;
$insects = 'butterflies';

$format = 'There are %d %s by the %s, and %f %s';

echo sprintf($format, $number, $animals,$location, $number2, $insects);
