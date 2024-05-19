<?php
include 'koneksi.php';

$npm = $_POST['npm'];
$namaMhs = $_POST['namaMhs'];
$prodi = $_POST['prodi'];
$alamat = $_POST['alamat'];
$noHP = $_POST['noHP'];

$sql = "UPDATE t_mahasiswa SET namaMhs='$namaMhs', prodi='$prodi', alamat='$alamat', noHP='$noHP' WHERE npm=$npm";

if ($link->query($sql) === TRUE) {
    echo "Record updated successfully";
    header("Location: index_studi.php");
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
}

$link->close();
?>
