<?php
function tentukan_deret_aritmatika($arr) {
    $temp1 = $arr[1] - $arr[0];
    $temp2 = 0;
    $cek = "true";
    for($i = 1; $i < count($arr); $i++){
        $temp2 = $arr[$i] - $arr[$i-1];
        if($temp2 != $temp1){
            $cek = "false";
        }
    }
    return $cek;
}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]); echo "<br>"; // true
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]); echo "<br>"; // false
echo tentukan_deret_aritmatika([2, 4, 6, 8]); echo "<br>"; //true
echo tentukan_deret_aritmatika([2, 6, 18, 54]); echo "<br>"; // false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]); echo "<br>"; // false
?>