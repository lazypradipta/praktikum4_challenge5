<?php
 $nama = "";
 $nim = "";
 $jurusan = "";

 if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nim = $_POST['nim'] ?? "";
    $nama = $_POST['nama'] ?? "";
    $jurusan = $_POST['jurusan'] ?? "";
 }
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Seminar</title>
</head>
<body>
    <h1>Praktikum Form POST</h1>
    <hr>
    <table style="width: 100%;">
    <tbody>
        <tr>
            <th width="100" style="text-align: left;">NIM</th>
            <td width="10">:</td>
            <td>
                <?php echo htmlspecialchars($nim); ?>
            </td>
        </tr>
        <tr>
            <th width="100" style="text-align: left;">NAMA</th>
            <td width="10">:</td>
            <td>
                <?php echo htmlspecialchars($nama); ?>
            </td>
        </tr>
        <tr>
            <th width="100" style="text-align: left;">JURUSAN</th>
            <td width="10">:</td>
            <td>
                <?php echo htmlspecialchars($jurusan); ?>
            </td>
        </tr>
    </tbody>
    </table>
    <hr>

    <!-- form data -->
    <h2>FORM DATA</h2>
    
    <form action="" method="post">
        <p style="margin: 0px;">NIM</p>
        <input type="number" name="nim" id="nim" required>
        <br>
        <p style="margin: 0px;">NAMA</p>
        <input type="text" name="nama" id="nama" required>
        <br>
        <p style="margin: 0px;">JURUSAN</p>
        <select name="jurusan" id="JURUSAN" required>
            <option value="">Pilih jurusan</option>
            <option value="TI">TI</option>
            <option value="RSK">RSK</option>
            <option value="BD">BD</option>
            <option value="DKV">DKV</option>
        </select>
        <hr>
        <button type="submit">Simpan Data</button>
    </form>
</body>
</html>