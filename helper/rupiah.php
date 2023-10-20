<?php
// Rupiah to Number : convert string rupiah ke number integer
// Contoh           : Rp. 2.000.000 => 2000000
// Penggunaan       : rupiah_to_number($variable)
function rupiah_to_number($value = 0)
{
    $result = str_replace('.', '', str_replace('Rp. ', '', $value));
    return $result;
}

// Number to Rupiah : convert string rupiah ke number integer
// Contoh           : 2000000 => Rp. 2.000.000
// Penggunaan       : number_to_rupiah($variable)
function number_to_rupiah($value = 0)
{
    $result = 'Rp. ' . number_format($value, 0, ',', '.');
    return $result;
}