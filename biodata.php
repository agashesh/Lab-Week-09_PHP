<!DOCTYPE html>
<html>
<head>
    <title>Biodata Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }
        table {
            border-collapse: collapse;
            width: 500px;
        }
        td {
            border: 1px solid black;
            padding: 8px;
        }
        h2 {
            color: navy;
        }
    </style>
</head>
<body>

<?php
$nim = "24.11.1234";
$nama = "L.M.Hanggara Putra Akbar";
$kelas = "BCI";
$prodi = "Informatika";
$alamat = "Yogyakarta";
$hobi = "Baca Buku";
$cita_cita = "Hidup tenteram";
?>

<h2>Biodata Mahasiswa</h2>

<table>
    <tr>
        <td>NIM</td>
        <td><?php echo $nim; ?></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td><?php echo $nama; ?></td>
    </tr>
    <tr>
        <td>Kelas</td>
        <td><?php echo $kelas; ?></td>
    </tr>
    <tr>
        <td>Prodi</td>
        <td><?php echo $prodi; ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><?php echo $alamat; ?></td>
    </tr>
    <tr>
        <td>Hobi</td>
        <td><?php echo $hobi; ?></td>
    </tr>
    <tr>
        <td>Cita-cita</td>
        <td><?php echo $cita_cita; ?></td>
    </tr>
</table>

</body>
</html>