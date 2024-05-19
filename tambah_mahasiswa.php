<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Add New Mahasiswa</h1>
    <form action="input_mahasiswa.php" method="post">
        <label for="npm">npm:</label>
        <input type="text" id="npms" name="npm"><br><br>
        <label for="namaMhs">Nama:</label>
        <input type="text" id="namaMhs" name="namaMhs"><br><br>
        <label for="prodi">Prodi:</label>
        <input type="text" id="prodi" name="prodi"><br><br>
        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat"><br><br>
        <label for="noHP">No HP:</label>
        <input type="text" id="noHP" name="noHP"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
