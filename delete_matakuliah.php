<?php
include 'koneksi.php';

$kodeMK = $_GET['kodeMK'];

$sql = "DELETE FROM t_matakuliah WHERE kodeMK=$kodeMK";

if ($link->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header("Location: index_studi.php");
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
}

$link->close();
?>
