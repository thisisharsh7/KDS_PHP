<?php
    echo "hey fizz buzz is on the mark.";
    echo 'so let\'s start'; 
    echo "<br />";
    for ( $i = 1 ; $i<=100 ; $i++){
        if($i%3 == 0 and $i%5 == 0){
            echo "FIZZ BUZZ ";
        }else if($i%3 == 0){
            echo " FIZZ";
        }else if($i%5 == 0){
            echo " BUZZ ";
        }else{
            echo $i;
        }
        echo "<br />";
    }
?>