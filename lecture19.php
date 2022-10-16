<?php
    function merge($arr1, $arr2){
        $marr = array_merge($arr1, $arr2);
        echo "<pre>";
        print_r($marr);
        $uarr = array_unique($marr);
        echo "<pre>";
        print_r($uarr);
    }
    $arr1 = array("harsh", "jadu", "why");
    $arr2 = array("why", "go", "now");
    merge($arr1, $arr2);
?>