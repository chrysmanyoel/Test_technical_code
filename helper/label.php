<?php
/**
 * Label hasil follow up
 * 
 */
function label_hasil_followup($data)
{
    $label = '';
    
    switch ($data) {
        case 'PROSPEK':
            $label = '<span class="label label-warning">' . $data . '</span>';
            break;

        case 'DEAL TUNAI':
            $label = '<span class="label label-success">' . $data . '</span>';
            break;

        case 'DEAL KREDIT':
            $label = '<span class="label label-success">' . $data . '</span>';
            break;

        case 'BATAL':
            $label = '<span class="label label-danger">' . $data . '</span>';
            break;
        
        default:
            $label = $data;
            break;
    }

    return $label;
}

/**
 * Label validasi
 * 
 */
function label_validasi($data)
{
    $label = '';

    switch ($data) {
        case 'VALID':
            $label = '<span class="label label-success">' . $data . '</span>';
            break;

        case 'TIDAK VALID':
            $label = '<span class="label label-danger">' . $data . '</span>';
            break;

        case 'SALAH SAMBUNG':
            $label = '<span class="label label-warning">' . $data . '</span>';
            break;

        case 'TIDAK DIANGKAT':
            $label = '<span class="label label-primary">' . $data . '</span>';
            break;
    
        default:
            $label = $data;
            break;
    }

    return $label;
}

/**
 * Label minat
 * 
 */
function label_minat($data)
{
    $label = '';
    
    switch ($data) {
        case 'MINAT':
            $label = '<span class="label label-success">' . $data . '</span>';
            break;

        case 'TIDAK MINAT':
            $label = '<span class="label label-danger">' . $data . '</span>';
            break;
        
        case 'MINATSALES':
            $label = '<span class="label label-success">' . $data . '</span>';
            break;

        case 'MINATSERVIS':
            $label = '<span class="label label-success">' . $data . '</span>';
            break;
        
        default:
            $label = $data;
            break;
    }

    return $label;
}

/**
 * Label asal database
 * 
 */
function label_database($data)
{
    $label = '';
    
    switch (strtolower($data)) {
        case 'raw data':
            $label = '<span class="label label-warning">' . $data . '</span>';
            break;

        case 'reject':
            $label = '<span class="label label-danger">' . $data . '</span>';
            break;

        case 'ro sales':
            $label = '<span class="label label-success">' . $data . '</span>';
            break;

        case 'ro service':
            $label = '<span class="label label-primary">' . $data . '</span>';
            break;
        
        default:
            $label = $data;
            break;
    }

    return $label;
}

/**
 * Label validasi QC
 * 
 */
function label_validasi_qc($data)
{
    $label = '';
    
    switch (strtolower($data)) {
        case 0:
            $label = '<span class="label label-danger">belum</span>';
            break;
            
        case 1:
            $label = '<span class="label label-success">sudah</span>';
            break;
        
        default:
            $label = $data;
            break;
    }

    return $label;
}