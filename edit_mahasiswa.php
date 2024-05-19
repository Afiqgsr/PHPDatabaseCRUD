<?php
include 'koneksi.php';

$npm = $_GET['npm'];
$sql = "SELECT * FROM t_mahasiswa WHERE npm=$npm";
$result = $link->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Edit Mahasiswa</h1>
    <form action="update_mahasiswa.php" method="post">
        <label for="npm">Npm:</label>
        <input type="text" id="npm" name="npm" value="<?php echo $row['npm']; ?>"><br><br>
        <label for="namaMhs">Nama:</label>
        <input type="text" id="namaMhs" name="namaMhs" value="<?php echo $row['namaMhs']; ?>"><br><br>
        <label for="prodi">Prodi:</label>
        <input type="text" id="prodi" name="prodi" value="<?php echo $row['prodi']; ?>"><br><br>
        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat" value="<?php echo $row['alamat']; ?>"><br><br>
        <label for="noHP">No HP:</label>
        <input type="text" id="noHP" name="noHP" value="<?php echo $row['noHP']; ?>"><br><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
