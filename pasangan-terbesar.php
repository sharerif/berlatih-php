<?php


function pasangan_terbesar($angka){
    $angkaTerbesar = substr($angka, 0, 2);
    for($i = 0; $i <= strlen($angka)-2 ; $i++){
        $pasanganAngka = substr($angka, $i, 2);
        if($pasanganAngka > $angkaTerbesar){
            $angkaTerbesar = $pasanganAngka;
        }
    }

    return $angkaTerbesar;
}

// TEST CASES
echo pasangan_terbesar(641573); echo "<br>"; // 73
echo pasangan_terbesar(12783456); echo "<br>"; // 83
echo pasangan_terbesar(910233); echo "<br>"; // 91
echo pasangan_terbesar(71856421); echo "<br>"; // 85
echo pasangan_terbesar(79918293); // 99

?>