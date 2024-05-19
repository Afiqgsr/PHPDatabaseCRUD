<?php
include 'koneksi.php';

$id = $_GET['id'];
$jenis = $_GET['jenis'];

switch ($jenis) {
    case 'Dosen':
        $sql = "SELECT * FROM t_dosen WHERE idDosen = $id";
        break;
    case 'Mahasiswa':
        $sql = "SELECT * FROM t_mahasiswa WHERE npm = $id";
        break;
    case 'Matakuliah':
        $sql = "SELECT * FROM t_matakuliah WHERE kodeMK = $id";
        break;
    default:
        echo "Invalid type";
        exit;
}

$result = $link->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "No data found";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Detail <?php echo $jenis; ?></title>
    <link rel="stylesheet" type="text/css" href="css/detail.css">
</head>
<body>
    <h1>Detail <?php echo $jenis; ?></h1>
    <table border="1">
        <?php
        foreach ($row as $key => $value) {
            echo "<tr>
                    <th>" . ucfirst($key) . "</th>
                    <td>" . $value . "</td>
                  </tr>";
        }
        ?>
    </table>
    <br>
    <a href="index_studi.php">Back to Home</a>
</body>
</html>
