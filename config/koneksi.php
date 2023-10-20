<?php
// set session true
session_start();

// set timezone jakarta
date_default_timezone_set('Asia/Jakarta');

// database
$host   = 'localhost';
$user   = 'root';
$pass   = '';
$db1     = 'soal1';
$db2     = 'soal2';
$db3     = 'soal3';

// connection
$conn1 = mysqli_connect($host, $user, $pass, $db1);
$conn2 = mysqli_connect($host, $user, $pass, $db2);
$conn3 = mysqli_connect($host, $user, $pass, $db3);

// Check connection
if (mysqli_connect_errno()) {
  echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
  exit();
}
?>