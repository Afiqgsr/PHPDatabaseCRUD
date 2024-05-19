<!DOCTYPE html>
<html>
<head>
    <title>Add New Mata Kuliah</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Add New Mata Kuliah</h1>
    <form action="create_matkul.php" method="post">
        <label for="kodeMK">Kode MK:</label>
        <input type="text" id="kodeMK" name="kodeMK"><br><br>
        <label for="namaMK">Nama MK:</label>
        <input type="text" id="namaMK" name="namaMK"><br><br>
        <label for="sks">SKS:</label>
        <input type="number" id="sks" name="sks"><br><br>
        <label for="jam">Jam:</label>
        <input type="number" id="jam" name="jam"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
