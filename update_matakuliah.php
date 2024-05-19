<?php
include 'koneksi.php';

$kodeMK = $_POST['kodeMK'];
$namaMK = $_POST['namaMK'];
$sks = $_POST['sks'];
$jam = $_POST['jam'];

$sql = "UPDATE t_matakuliah SET namaMK='$namaMK', sks='$sks', jam='$jam' WHERE kodeMK=$kodeMK";

if ($link->query($sql) === TRUE) {
    echo "Record updated successfully";
    header("Location: index_studi.php");
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
}

$link->close();
?>
