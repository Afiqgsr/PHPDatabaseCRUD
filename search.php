<?php
include 'koneksi.php';

$query = $_GET['query'];

// Mencari di tabel dosen
$sqlDosen = "SELECT idDosen AS id, namaDosen AS nama, 'Dosen' AS jenis FROM t_dosen WHERE namaDosen LIKE '%$query%'";
// Mencari di tabel mahasiswa
$sqlMahasiswa = "SELECT npm AS id, namaMhs AS nama, 'Mahasiswa' AS jenis FROM t_mahasiswa WHERE namaMhs LIKE '%$query%'";
// Mencari di tabel matakuliah
$sqlMatakuliah = "SELECT kodeMK AS id, namaMK AS nama, 'Matakuliah' AS jenis FROM t_matakuliah WHERE namaMK LIKE '%$query%'";

// Menggabungkan hasil pencarian dari ketiga tabel
$sql = "($sqlDosen) UNION ($sqlMahasiswa) UNION ($sqlMatakuliah)";

$result = $link->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Results</title>
    <link rel="stylesheet" type="text/css" href="css/search.css">
</head>
<body>
    <h1>Search Results</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Detail</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["id"] . "</td>
                        <td>" . $row["nama"] . "</td>
                        <td>" . $row["jenis"] . "</td>
                        <td>
                            <a href='detail.php?id=" . $row["id"] . "&jenis=" . $row["jenis"] . "'>View</a>
                        </td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No data found</td></tr>";
        }
        ?>
    </table>
    <br>
    <a href="index_studi.php">Back to Home</a>
</body>
</html>
