<?php
$mysqli = new mysqli("localhost", "root", "", "penjualan_23441062");

if ($mysqli->connect_error){
    die("Koneksi gagal:" . $mysqli->connect_error);

}else{
    // echo "koneksi ke database berhasil.";
}
