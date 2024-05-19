<?php
include 'koneksi.php';

$idDosen = $_GET['idDosen'];

$sql = "DELETE FROM t_dosen WHERE idDosen=$idDosen";

if ($link->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header("Location: index_studi.php");
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
}

$link->close();
?>
