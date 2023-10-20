<?php
// prosentase   : mengembalikan nilai berupa prosentase
// tujuan       : memberikan nilai default 0 jika pembagi = NULL atau 0
// Penggunaan   : prosentase($pembilang, $pembagi)
function prosentase($num, $denom)
{
    $result = ($denom == 0 || is_null($denom)) ? 0 : ($num / $denom) * 100;
    return number_format($result, 2);
}

// division     : mengembalikan nilai berupa hasil pembagian
// tujuan       : memberikan nilai default 0 jika pembagi = NULL atau 0
// Penggunaan   : division($pembilang, $pembagi)
function division($num, $denom)
{
    $result = ($denom == 0 || is_null($denom)) ? 0 : ($num / $denom);
    return number_format($result, 2);
}