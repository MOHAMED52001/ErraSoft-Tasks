<?php 
    // Richest Customer Wealth 
    $arr =
    [
        [4, 2],
        [5, 5],
        [5, 6],
        [5,550],
        [6,60,600]
    ];
    $Richest_Customer = 0;
    $i =0;
    while ($i < count($arr)){

        $sum = 0;
        $j = 0;
        while($j < count($arr[$i])){

            $sum += $arr[$i][$j];
        
            if ($sum >= $Richest_Customer) {
                $Richest_Customer = $sum;
            }
            $j++;
        }
        $i++;
    }

    echo $Richest_Customer;



?>