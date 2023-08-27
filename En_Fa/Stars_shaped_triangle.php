<?php   
// convert english to persian nums

function convertToFarsi($num) {
    $Fa = array('۰', '۱', '۲', '۳', '۴', '۵','۶', '۷', '۸', '۹');
    $En = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
    $convertedFarsiNums = str_replace($En, $Fa, $num);
    return $convertedFarsiNums;
}

$num = 623623;
echo convertToFarsi($num);

echo "<br>";  


