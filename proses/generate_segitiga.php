<?php
require_once "autoload.php";
require "../helper/core.php";
// require_once "dd.php";

$temp  = '';
$angka = $_GET['angka'];
$panjang = strlen((string)$angka);

for($i = 1; $i <= $panjang; $i++){
    for($j = 0; $j < $i; $j++){
        if($j + 1 == 1){
            $temp = $temp . $i . '0';
        }else{
            $temp = $temp . '0';
        }
    }
    $temp = $temp ."\n";
}
// dd($temp);
return json_response($temp, 200);

