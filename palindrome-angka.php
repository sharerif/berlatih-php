<?php

function reverseString($string){
    $temp = "";
    $length = strlen($string);
    for($i = 1; $i <= $length; $i++)            {
    $temp .= substr($string, $length-$i, 1);
    }

    return $temp;
}

function palindrome($string){
    $temp = "";
    if(reverseString($string) == $string){
        $temp = true;
    }else{
        $temp = false;
    }

    return $temp;
}

function palindrome_angka($angka) {
    $cek = false;
    while($cek == false){
        $temp = $angka+=1;
        $cek = palindrome($temp);
    }
    return $temp;
}

// TEST CASES
echo palindrome_angka(8); echo "<br>"; // 9 
echo palindrome_angka(10); echo "<br>"; // 11
echo palindrome_angka(117); echo "<br>"; // 121
echo palindrome_angka(175); echo "<br>"; // 181
echo palindrome_angka(1000); // 1001

?>