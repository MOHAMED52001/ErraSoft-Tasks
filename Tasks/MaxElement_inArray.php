<?php 
// <Max Element array 
    $arr = [1,2,22,111,3,4,5,6,7,998];
    $max = 0;

        $i = 0;
        while($i < count($arr)){

            if($arr[$i] >= $max){
                $max = $arr[$i];
            
            }
         
            $i++;
        }
    
    foreach ($arr as $elem) {
        if ($elem > $max) {
            $max = $elem;
        }
    }

    echo $max;
    ?>