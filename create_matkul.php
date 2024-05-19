<?php
include 'koneksi.php';

$kodeMK = $_POST['kodeMK'];
$namaMK = $_POST['namaMK'];
$sks = $_POST['sks'];
$jam = $_POST['jam'];

$sql = "INSERT INTO t_matakuliah (kodeMK, namaMK, sks, jam) VALUES ('$kodeMK','$namaMK', '$sks', '$jam')";

if ($link->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location: index_studi.php");
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
}

$link->close();
?>
