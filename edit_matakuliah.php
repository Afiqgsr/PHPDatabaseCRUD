<?php
include 'koneksi.php';

$kodeMK = $_GET['kodeMK'];
$sql = "SELECT * FROM t_matakuliah WHERE kodeMK=$kodeMK";
$result = $link->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Mata Kuliah</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Edit Mata Kuliah</h1>
    <form action="update_matakuliah.php" method="post">
        <input type="hidden" name="kodeMK" value="<?php echo $row['kodeMK']; ?>">
        <label for="namaMK">Nama MK:</label>
        <input type="text" id="namaMK" name="namaMK" value="<?php echo $row['namaMK']; ?>"><br><br>
        <label for="sks">SKS:</label>
        <input type="number" id="sks" name="sks" value="<?php echo $row['sks']; ?>"><br><br>
        <label for="jam">Jam:</label>
        <input type="number" id="jam" name="jam" value="<?php echo $row['jam']; ?>"><br><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
