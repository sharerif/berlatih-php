<?php
function skor_terbesar($arr){
    $temp = [];
    $nilai1 = 0;
    $nilai2 = 0;
    $nilai3 = 0;
    for($i = 0; $i < count($arr); $i++){
        if($arr[$i]["nilai"] > $nilai1 && $arr[$i]["kelas"] == "Laravel"){
            $nilai1 = $arr[$i]["nilai"];
            $temp[$arr[$i]["kelas"]] = [
                "nama" => $arr[$i]["nama"],
                "kelas" => $arr[$i]["kelas"],
                "nilai" => $arr[$i]["nilai"]
            ];
        }else if($arr[$i]["nilai"] > $nilai2 && $arr[$i]["kelas"] == "React Native"){
            $nilai2 = $arr[$i]["nilai"];
            $temp[$arr[$i]["kelas"]] = [
                "nama" => $arr[$i]["nama"],
                "kelas" => $arr[$i]["kelas"],
                "nilai" => $arr[$i]["nilai"]
            ];
        }else if($arr[$i]["nilai"] > $nilai3 && $arr[$i]["kelas"] == "React JS"){
            $nilai3 = $arr[$i]["nilai"];
            $temp[$arr[$i]["kelas"]] = [
                "nama" => $arr[$i]["nama"],
                "kelas" => $arr[$i]["kelas"],
                "nilai" => $arr[$i]["nilai"]
            ];
        }
    }
    return $temp;
}

// TEST CASES
$skor = [
    [
        "nama" => "Bobby",
        "kelas" => "Laravel",
        "nilai" => 78
    ],
    [
        "nama" => "Regi",
        "kelas" => "React Native",
        "nilai" => 86
    ],
    [
        "nama" => "Aghnat",
        "kelas" => "Laravel",
        "nilai" => 90
    ],
    [
        "nama" => "Indra",
        "kelas" => "React JS",
        "nilai" => 85
    ],
    [
        "nama" => "Yoga",
        "kelas" => "React Native",
        "nilai" => 77
    ],
];
echo "<pre>";
print_r(skor_terbesar($skor));
echo "</pre>";
/* OUTPUT
    Array (
        [Laravel] => Array
                (
                    [nama] => Aghnat
                    [kelas] => Laravel
                    [nilai] => 90
                )
        [React Native] => Array
                    (
                        [nama] => Regi
                        [kelas] => React Native
                        [nilai] => 86
                    )
        [React JS] => Array
                    (
                    [nama] => Indra
                    [kelas] => React JS
                    [nilai] => 85
                    )
    )
*/
?>