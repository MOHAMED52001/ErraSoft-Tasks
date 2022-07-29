<?php 

$str = "Mohamed Atef Is Mohamed And Mohamed";
$word = "Mohamed";
$str = explode(" ", $str);
$counter = 0;
foreach ($str as  $value) {
    if ($word === $value) {
        $counter++;
    }
}

echo $counter;

?>