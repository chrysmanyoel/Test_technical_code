<?php
// upload image
/**
 * Upload File
 * ------------------------------------------------------------------------------------------------------------
 * Penggunaan
 * 
 * $image['file_name']     = 'nama_file';    // tipe::string | jika tidak didefinisikan maka akan diberikan nama default
 * $image['file_path']     = '../upload/';   // tipe::string | folder tempat pengimpanan file upload, harus dibuat terlebih dahulu
 * $image['file_size_max'] = 5;              // tipe::int    | Ukuran file dalam Megabyte
 * $image['file_mime']     = 'jpg|jpeg|png'; // tipe::string | mendefinisakan tipe file yang diizinkan
 * $image['overwrite']     = FALSE;          // tipe::boolean| jika TRUE file sebelumnya dengan nilai yang sama akan ditimpa
 *  
 * $upload = upload('file_upload', $image);  // fungsi pengunggahan file akan mengembalikan nilai array = (file_path, file_name, file_mime, file_size)
 * 
 */

function upload($field_name, $param = array())
{
    // init
    $file_name = isset($param['file_name']) ? $param['file_name'] : pathinfo($_FILES[$field_name]['name'], PATHINFO_FILENAME);
    $overwrite = isset($param['overwrite']) ? $param['overwrite'] : TRUE;

    // validasi section
    if( ! isset($_FILES[$field_name]))
    {
        echo 'Input file dengan nama <strong><code>' . $field_name . '</code></strong> tidak ditemukan';
        exit();
    }

    if( ! isset($param['file_path']))
    {
        echo '<strong><code>file_path</code></strong> belum di set, <strong><code>file_path</code></strong> berfungsi sebagai tempat penyimpanan file upload';
        exit();
    }

    if( ! isset($param['file_size_max']))
    {
        echo '<strong><code>file_size_max</code></strong> belum di set, <strong><code>file_size_max</code></strong> berfungsi untuk membatasi ukuran maksimal file yang boleh diupload';
        exit();
    }

    if( ! is_int($param['file_size_max']))
    {
        echo '<strong><code>file_size_max</code></strong> harus bertipe integer';
        exit();
    }

    if( ! isset($param['file_mime']))
    {
        echo '<strong><code>file_mime</code></strong> belum di set, <strong><code>file_mime</code></strong> berfungsi untuk filter tipe file yang boleh diupload';
        exit();
    }
    
    // cek ukuran file
    $file_size_max = $param['file_size_max'] * 1028 * 1028; // convert Megabyte to byte
    
    if($_FILES[$field_name]['size'] > $file_size_max)
    {
        echo 'Ukuran file tidak boleh melebihi dari '. $param['file_size_max'] . ' Mb';
        exit();
    }

    // cek tipe file yang diijinkan
    $file_mime  = pathinfo($_FILES[$field_name]['name'], PATHINFO_EXTENSION);
    $check_mime = preg_match('/'. $file_mime .'/', $param['file_mime']);

    if(! $check_mime)
    {
        $string_mime = str_replace('|', ', ', $param['file_mime']);
        echo 'Tipe file yang diizinkan hanya '. $string_mime;
        exit();
    }

    // jika tidak ingin me replace file dengan nama yang sama
    if( ! $overwrite)
    {
        $i = 1;
        while(file_exists($param['file_path'] . $file_name . '.' . $file_mime))
        {
            $file_name = $file_name . '_' . $i;
            $i++;
        }
    }

    // get file type
    $type_arr   = explode('/',trim($_FILES[$field_name]['type']));
    $file_type  = $type_arr[0];

    // prepare data
    $file_temp = $_FILES[$field_name]['tmp_name'];
    $file_path = $param['file_path'];
    $full_path = $file_path . $file_name . '.' . $file_mime;

    // periksa direktori
    if ( ! is_dir($param['file_path']))
    {
        mkdir($param['file_path'], 0777);
    }

    // upload file
    $result = move_uploaded_file($file_temp, $full_path);
    if( ! $result)
    {
        echo 'Upload file gagal';
        exit();
    }

    // return data
    $return = array(
        'file_path' => str_replace('../', '', $full_path),
        'file_name' => $file_name,
        'file_mime' => $file_mime,
        'file_size' => $_FILES[$field_name]['size'],
        'file_type' => $file_type,
    );

    return $return;
}
?>