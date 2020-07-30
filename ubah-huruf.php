<?php
function ubah_huruf($string){
    $abjad = "abcdefghijklmnopqrstuvwxyz";
    $output = "";
    for($i = 0; $i < strlen($string); $i++){
        $position = strpos($abjad, $string[$i]);
        $output .= substr($abjad, $position+1, 1);
    }
    return $output;
}

// TEST CASES
echo ubah_huruf('wow'); echo "<br>"; // xpx
echo ubah_huruf('developer'); echo "<br>"; // efwfmpqfs
echo ubah_huruf('laravel');echo "<br>";  // mbsbwfm
echo ubah_huruf('keren'); echo "<br>"; // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>