<?php
require_once 'autoload.php';

$asaldbase   = $_GET['asaldbase'];
$kode_dealer = $_GET['kode_dealer'];
$area_dealer = $_GET['area_dealer'];
$id_aktivitas = $_GET['id_aktivitas'];
$id_crmlogger = $_GET['id_crmlogger'];
$date_now    = Date('Y-m-d');
$hasil       = [];

//UPDATE RESULT DB
$stmt   = "UPDATE activity 
            SET resultstu = resultstu+ 1 
            WHERE idaktivitas = '$id_aktivitas'";
$query  = mysqli_query($conn1,$stmt) or die(mysqli_error($conn1));

//UPDATE DAILY DB/STU DI TABLE new_input_daily
$hari = DATE('d');
$bulan   = DATE('m');

$stmt   = "UPDATE new_input_daily 
            SET stu = stu + 1 
            WHERE id_aktivitas = '$id_aktivitas' AND bulan = '$bulan' AND hari = '$hari' ";
$query  = mysqli_query($conn1,$stmt) or die(mysqli_error($conn1));

return json_response('berhasil');

// $stmt   = "SELECT * 
//             FROM activity 
//             WHERE id_aktivitas = '$id_aktivitas'";
// $query  = mysql_query($stmt) or die(mysql_error());
// $count  = mysql_num_rows($query);
// if($count > 0)
// {
//     while ($data = mysql_fetch_assoc($query))
//     {
//         $data_temp = [
//             "idaktivitas"                    => $data['id'],
//             "nmaktivitas"          => $data['id_aktivitas'],
//             "nama_aktivitas"        => $data['nama_aktivitas'],
//             "keterangan_aktivitas"  => $data['keterangan_aktivitas']
//         ];

//         array_push($hasil, $data_temp);
//     }
//     return json_response($hasil);

// }else{
//     echo 'Data Kosong';
// }
