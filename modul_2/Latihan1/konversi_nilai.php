<!DOCTYPE html>
<html>
<head>
    <title>Konversi Nilai Angka ke Nilai Huruf</title>
</head>
<body>
    <h2>Konversi Nilai Angka ke Nilai Huruf</h2>
    <form method="post" action="konversi_nilai.php">
        Nilai Angka: <input type="number" name="nilai_angka" required><br>
        <input type="submit" value="Konversi">
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nilaiAngka = $_POST["nilai_angka"];

    if ($nilaiAngka >= 80) {
        echo "Nilai Huruf: A";
    } elseif ($nilaiAngka >= 70) {
        echo "Nilai Huruf: B";
    } elseif ($nilaiAngka >= 60) {
        echo "Nilai Huruf: C";
    } elseif ($nilaiAngka >= 50) {
        echo "Nilai Huruf: D";
    } else {
        echo "Nilai Huruf: E";
    }
}
?>
