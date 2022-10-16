<?php
    $arr = array("kumar","harsh", "wow");
    echo "<pre>";
    print_r($arr);
    foreach($arr as $var){//foreach loop to iterate to every elements in array require no parameter like size and etc...
        echo "$var ";
    }
    rsort($arr);
    echo "<ol>";
    foreach($arr as $var){
        echo "<li> ".$var." </li>";
    }
    echo "</ol>";
    // array_push($student,"man"); add element to the end of an array
    // array_pop($arr); remove element from the end of the array
    // array_shift($student); removes element to the start of an array
    // array_unshift($arr,"women"); add an element to the start of an array.
?>