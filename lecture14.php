<?php
    echo "head tail game <br />";
    $hcnt = 0;
    $tcnt = 0;
    for($i = 1; $i<=100 ;$i++){
    $var = rand(1,2);

    if($var == 1){
        // echo "Heads, I win !<br/>";
        $hcnt++;
    }else{
        // echo "Tails, You win !<br />";
        $tcnt++;
    }

    }
    echo "Head comes $hcnt <br />";
    echo "Tail comes $tcnt <br />";
    if($hcnt > $tcnt){
        echo "Head wins <br />";
    }else if($hcnt < $tcnt){
        echo "Tail wins <br />";
    }else{
        echo "Draw <br />";
    }
?>