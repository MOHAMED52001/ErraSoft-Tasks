<?php
// reverse each word in string in its place;

$s = "Let's take LeetCode contest";
echo $s . "<br> <br>";
function reverseWords(&$s) {
    $str = explode(" ",$s);
    foreach($str as $index => $value){
        $str[$index] = reverse($value);
    }
    $s = implode(" ",$str);
}

function reverse($s){
    $len = strlen($s);
    $l =0;
    $r = $len -1;
    while($l <= $r){
        $temp = $s[$l];   
        $s[$l] = $s[$r];  
        $s[$r] = $temp;  
        $l++;
        $r--;
    }
    return $s;
}
reverseWords($s);
echo "$s. <br> <br>";

?>