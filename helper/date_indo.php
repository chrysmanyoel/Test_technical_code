<?php
// Format Tanggal Indonesia (Tanggal-Bulan-Tahun)
// Penggunaan        : date_format_indo('Y-m-d')
function date_format_indo($date = NULL)
{
    if($date == NULL)
    {
        return NULL;
    }

    return date('d-m-Y', strtotime($date));
}

// Teks bulan berbahasa indonesia, ex => Januari
// Penggunaan        : month_indo(1)
function month_indo($month = null) {
    $text = null;
    switch($month) {
    case 1:
        $text = 'Januari';
        break;
    case 2:
        $text = 'Februari';
        break;
    case 3:
        $text = 'Maret';
        break;
    case 4:
        $text = 'April';
        break;
    case 5:
        $text = 'Mei';
        break;
    case 6:
        $text = 'Juni';
        break;
    case 7:
        $text = 'Juli';
        break;
    case 8:
        $text = 'Agustus';
        break;
    case 9:
        $text = 'September';
        break;
    case 10:
        $text = 'Oktober';
        break;
    case 11:
        $text = 'November';
        break;
    case 12:
        $text = 'Desember';
        break;
    default:
        $text = null;
        break;
    }

    return $text;
}