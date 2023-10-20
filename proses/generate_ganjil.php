<?php
require_once "autoload.php";
require "../helper/core.php";
// require_once "dd.php";

$temp  = '';
$angka = $_GET['angka'];

for($i = 1; $i <= $angka; $i++){
    if($i % 2 == 1 ){
        if($i == 1){
            $temp = $i;
        }else{
            $temp = $temp . ' - ' . $i;
        }
    }
}
return json_response($temp, 200);

