<?php
include 'koneksi.php';

$sql = "SELECT * FROM t_matakuliah";
$result = $link->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mata Kuliah</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <h1>Daftar Mata Kuliah</h1>
    <form action="search.php" method="get">
    <input type="text" name="query" placeholder="Cari...">
    <input type="submit" value="Search">
    </form>
    <table border="1">
        <tr>
            <th>Kode MK</th>
            <th>Nama MK</th>
            <th>SKS</th>
            <th>Jam</th>
            <th>Action</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["kodeMK"] . "</td>
                        <td>" . $row["namaMK"] . "</td>
                        <td>" . $row["sks"] . "</td>
                        <td>" . $row["jam"] . "</td>
                        <td>
                            <a href='edit_matakuliah.php?kodeMK=" . $row["kodeMK"] . "'>Edit</a> |
                            <a href='delete_matakuliah.php?kodeMK=" . $row["kodeMK"] . "'>Delete</a>
                        </td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No data found</td></tr>";
        }
        ?>
    </table>
    <br>
    <a href="create_matakuliah.php">Add New Mata Kuliah</a>
</body>
</html>
