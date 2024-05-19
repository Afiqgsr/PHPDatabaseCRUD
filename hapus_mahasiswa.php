<?php
include 'koneksi.php';

$npm = $_GET['npm'];

$sql = "DELETE FROM t_mahasiswa WHERE npm=$npm";

if ($link->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header("Location: index_studi.php");
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
}

$link->close();
?>
