<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Nilai</title>
</head>
<body>

<h2>Kalkulator Nilai Mahasiswa</h2>

<form method="POST">
    Nilai Tugas :
    <input type="number" name="tugas" required><br><br>

    Nilai UTS :
    <input type="number" name="uts" required><br><br>

    Nilai UAS :
    <input type="number" name="uas" required><br><br>

    <button type="submit">Hitung</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $tugas = $_POST["tugas"];
    $uts = $_POST["uts"];
    $uas = $_POST["uas"];

    $nilai_akhir = ($tugas * 0.30) + ($uts * 0.30) + ($uas * 0.40);

    if ($nilai_akhir >= 85) {
        $grade = "A";
    } elseif ($nilai_akhir >= 75) {
        $grade = "B";
    } elseif ($nilai_akhir >= 65) {
        $grade = "C";
    } elseif ($nilai_akhir >= 50) {
        $grade = "D";
    } else {
        $grade = "E";
    }

    if ($nilai_akhir >= 60) {
        $status = "Lulus";
    } else {
        $status = "Tidak Lulus";
    }

    echo "<hr>";
    echo "<h3>Hasil Perhitungan</h3>";
    echo "Nilai Akhir : " . number_format($nilai_akhir, 2) . "<br>";
    echo "Grade : " . $grade . "<br>";
    echo "Status : " . $status;
}
?>

</body>
</html>