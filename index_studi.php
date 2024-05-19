<?php
include 'koneksi.php';

// Query untuk data dosen
$query_dosen = "SELECT * FROM t_dosen ORDER BY idDosen ASC";
$result_dosen = mysqli_query($link, $query_dosen);
if (!$result_dosen) {
    die ("Query Error: ".mysqli_errno($link). " - ".mysqli_error($link));
}

// Query untuk data mahasiswa
$query_mahasiswa = "SELECT * FROM t_mahasiswa";
$result_mahasiswa = mysqli_query($link, $query_mahasiswa);
if (!$result_mahasiswa) {
    die ("Query Error: ".mysqli_errno($link). " - ".mysqli_error($link));
}

// Query untuk data mata kuliah
$query_matakuliah = "SELECT * FROM t_matakuliah";
$result_matakuliah = mysqli_query($link, $query_matakuliah);
if (!$result_matakuliah) {
    die ("Query Error: ".mysqli_errno($link). " - ".mysqli_error($link));
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD Application</title>
    <link rel="stylesheet" href="css/studi.css">
</head>
<body>
    <h1>CRUD Application</h1>
    <div class="container">
        <div class="search-box">
            <form action="search.php" method="GET">
                <input type="text" name="query" placeholder="Cari data dosen, mahasiswa, atau mata kuliah...">
                <input type="submit" value="Cari">
            </form>
        </div>

        <h2>Data Dosen</h2>
        <a class="btn" href="input.php">Tambah Dosen</a>
        <table>
            <tr>
                <th>ID</th>
                <th>Nama Dosen</th>
                <th>No HP</th>
                <th>Action</th>
            </tr>
            <?php
            while ($data_dosen = mysqli_fetch_assoc($result_dosen)) {
                echo "<tr>";
                echo "<td>{$data_dosen['idDosen']}</td>";
                echo "<td>{$data_dosen['namaDosen']}</td>";
                echo "<td>{$data_dosen['noHP']}</td>";
                echo '<td>
                        <a href="editdosen.php?idDosen='.$data_dosen['idDosen'].'">Edit</a> |
                        <a href="hapus_dosen.php?idDosen='.$data_dosen['idDosen'].'" onclick="return confirm(\'Anda yakin akan menghapus data?\')">Hapus</a>
                      </td>';
                echo "</tr>";
            }
            ?>
        </table>

        <h2>Data Mahasiswa</h2>
        <a class="btn" href="tambah_mahasiswa.php">Tambah Mahasiswa</a>
        <table>
            <tr>
                <th>NPM</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Action</th>
            </tr>
            <?php
            while ($data_mahasiswa = mysqli_fetch_assoc($result_mahasiswa)) {
                echo "<tr>";
                echo "<td>{$data_mahasiswa['npm']}</td>";
                echo "<td>{$data_mahasiswa['namaMhs']}</td>";
                echo "<td>{$data_mahasiswa['prodi']}</td>";
                echo "<td>{$data_mahasiswa['alamat']}</td>";
                echo "<td>{$data_mahasiswa['noHP']}</td>";
                echo '<td>
                        <a href="edit_mahasiswa.php?npm='.$data_mahasiswa['npm'].'">Edit</a> |
                        <a href="hapus_mahasiswa.php?npm='.$data_mahasiswa['npm'].'" onclick="return confirm(\'Anda yakin akan menghapus data?\')">Delete</a>
                      </td>';
                echo "</tr>";
            }
            ?>
        </table>

        <h2>Data Mata Kuliah</h2>
        <a class="btn" href="create_matakuliah.php">Tambah Mata Kuliah</a>
        <table>
            <tr>
                <th>Kode MK</th>
                <th>Nama MK</th>
                <th>SKS</th>
                <th>Jam</th>
                <th>Action</th>
            </tr>
            <?php
            while ($data_matakuliah = mysqli_fetch_assoc($result_matakuliah)) {
                echo "<tr>";
                echo "<td>{$data_matakuliah['kodeMK']}</td>";
                echo "<td>{$data_matakuliah['namaMK']}</td>";
                echo "<td>{$data_matakuliah['sks']}</td>";
                echo "<td>{$data_matakuliah['jam']}</td>";
                echo '<td>
                        <a href="edit_matakuliah.php?kodeMK='.$data_matakuliah['kodeMK'].'">Edit</a> |
                        <a href="delete_matakuliah.php?kodeMK='.$data_matakuliah['kodeMK'].'" onclick="return confirm(\'Anda yakin akan menghapus data?\')">Delete</a>
                      </td>';
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
