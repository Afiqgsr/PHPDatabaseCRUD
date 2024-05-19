<?php
include 'koneksi.php';

$sql = "SELECT * FROM t_mahasiswa";
$result = $link->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <form action="search.php" method="get">
    <input type="text" name="query" placeholder="Cari...">
    <input type="submit" value="Search">
    </form>

    <table border="1">
        <tr>
            <th>NPM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Action</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["npm"] . "</td>
                        <td>" . $row["namaMhs"] . "</td>
                        <td>" . $row["prodi"] . "</td>
                        <td>" . $row["alamat"] . "</td>
                        <td>" . $row["noHP"] . "</td>
                        <td>
                            <a href='edit_mahasiswa.php?npm=" . $row["npm"] . "'>Edit</a> |
                            <a href='hapus_mahasiswa.php?npm=" . $row["npm"] . "'>Delete</a>
                        </td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No data found</td></tr>";
        }
        ?>
    </table>
    <br>
    <a href="tambah_mahasiswa.php">Tambah Mahasiswa</a>
</body>
</html>
