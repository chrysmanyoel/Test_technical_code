<?php
require_once "autoload.php";
// require "../helper/core.php";
require_once "dd.php";

$temp  = '';
$angka = $_GET['angka'];

for($i = 1; $i <= $angka; $i++){
    for($j = 1; $j <= $i; $j++){
        $temp = $temp . $i;
    }
    $temp = "\n";
}
dd($temp);
// return json_response($temp, 200);

