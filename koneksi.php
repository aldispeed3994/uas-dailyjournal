<?php
date_default_timezone_set('Asia/Jakarta');

$servername = "sql106.infinityfree.com";
$username = "if0_38066663";
$password = "5TxC0Z7YJ0";
$db = "if0_38066663_webdailyjournal"; //nama database

//create connection
$conn = new mysqli($servername, $username, $password, $db);

//check apakah ada error connection
if ($conn->connect_error) {
    //jika ada, hentikan script dan tampilkan pesan error
    die("Connection failed: " . $conn->connect_error);
}
?>
