<?php

$array = array('ondo', 120, 'Ibadan', 'Lagos', 500, 'Kano', 'Kaduna');

if(in_array('ondo',$array, true))
{
    echo "word found";
}
else{
    echo "Not in the array";
}