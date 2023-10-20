<?php
require_once "autoload.php";
require "../helper/core.php";
// require_once "dd.php";

$temp  = '';
$angka = $_GET['angka'];

for($i = 1; $i <= $angka; $i++){
    $prima = true;
    
    for($j = 1; $j < $i; $j++){
        if($i % 2 == 0){
            $prima = false;
            break;
        }
    }

    if($prima){
        $angka--;
        $temp = $temp . ' ' . $i;
    }
}
// dd($temp);
return json_response($temp, 200);

