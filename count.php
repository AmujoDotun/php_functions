<?php

$array = array('mango', 'orange', 'apple', 'pennapple', 'pea');
echo count($array, COUNT_NORMAL);
// die();

// is_array
if(is_array($array))
{
    // count function used here is to prevent unlimited looping which will brake the system
    for($i=0; $i<count($array); $i++)
    {
        echo $array[$i]. '<br>';
    }
}
else{
    echo "It's not an array";
}
