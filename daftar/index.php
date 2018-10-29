<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="class.php" method="post">
        <table>
            <H1>Data Mahasiswa</H1>
        <tR><td>nama<td><input type="text" name="input1"><br>
        <tr><td>nim<td><input type="text" name="input2"><br>
        <tr><td>tanggallahir<td><input type="date" name="tgl_lahir">
        <tr><td>Pilih Aksi
        <select name="pilih">
            <option value="tambah">tambah</option>
            <option value="hapus">hapus</option>
            <option value="tampil">tampil</option>
        </select>
        <br>
        <tr><td><input type="submit" value="Kirim">
    </form>
    </table>
</body>
</html>