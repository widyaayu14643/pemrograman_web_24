<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Luas dan Volume Bangun Ruang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
            background-color: #f7f7f7;
        }
        h2 {
            color: #333;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin: 0 auto;
        }
        label, input {
            display: block;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 3px;
            cursor: pointer;
        }
        .result {
            margin-top: 20px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            margin: 20px auto;
        }
        .result h3 {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h2>Kalkulator Luas dan Volume Bangun Ruang</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="bangun_ruang">Pilih Bangun Ruang:</label>
        <select name="bangun_ruang" id="bangun_ruang" required>
            <option value="balok">Balok</option>
            <option value="kubus">Kubus</option>
            <option value="bola">Bola</option>
            <option value="kerucut">Kerucut</option>
            <option value="prisma">Prisma</option>
            <option value="limas">Limas</option>
            <option value="tabung">Tabung</option>
        </select>
        <label for="panjang">Panjang :</label>
        <input type="number" step="any" name="panjang" id="panjang">
        <label for="lebar">Lebar :</label>
        <input type="number" step="any" name="lebar" id="lebar">
        <label for="tinggi">Tinggi :</label>
        <input type="number" step="any" name="tinggi" id="tinggi">
        <label for="jari_jari">Jari-jari :</label>
        <input type="number" step="any" name="jari_jari" id="jari_jari">
        <label for="tinggi_kerucut">Tinggi Kerucut :</label>
        <input type="number" step="any" name="tinggi_kerucut" id="tinggi_kerucut">
        <label for="alas_segitiga">Alas Segitiga :</label>
        <input type="number" step="any" name="alas_segitiga" id="alas_segitiga">
        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bangunRuang = $_POST["bangun_ruang"];

        switch ($bangunRuang) {
            case 'balok':
                echo "<div class='result'>";
                echo "<h3>Rumus Luas Balok:</h3>";
                echo "2 * (Panjang * Lebar + Panjang * Tinggi + Lebar * Tinggi)<br>";
                echo "<h3>Rumus Volume Balok:</h3>";
                echo "Panjang * Lebar * Tinggi<br>";
                echo "</div>";
                break;
            case 'kubus':
                echo "<div class='result'>";
                echo "<h3>Rumus Luas Kubus:</h3>";
                echo "6 * Sisi^2<br>";
                echo "<h3>Rumus Volume Kubus:</h3>";
                echo "Sisi^3<br>";
                echo "</div>";
                break;
            case 'bola':
                echo "<div class='result'>";
                echo "<h3>Rumus Luas Bola:</h3>";
                echo "4 * π * Jari-Jari^2<br>";
                echo "<h3>Rumus Volume Bola:</h3>";
                echo "(4 / 3) * π * Jari-Jari^3<br>";
                echo "</div>";
                break;
            case 'kerucut':
                echo "<div class='result'>";
                echo "<h3>Rumus Luas Kerucut:</h3>";
                echo "π * Jari-Jari * (Jari-Jari + sqrt(Tinggi^2 + Jari-Jari^2))<br>";
                echo "<h3>Rumus Volume Kerucut:</h3>";
                echo "(1 / 3) * π * Jari-Jari^2 * Tinggi Kerucut<br>";
                echo "</div>";
                break;
            case 'prisma':
                echo "<div class='result'>";
                echo "<h3>Rumus Luas Prisma:</h3>";
                echo "Alas Segitiga * 3 + (2 * Alas Segitiga * Tinggi Prisma)<br>";
                echo "<h3>Rumus Volume Prisma:</h3>";
                echo "Alas Segitiga * Tinggi Prisma<br>";
                echo "</div>";
                break;
            case 'limas':
                echo "<div class='result'>";
                echo "<h3>Rumus Luas Limas:</h3>";
                echo "(Alas Segitiga * 4) + (Panjang * Tinggi)<br>";
                echo "<h3>Rumus Volume Limas:</h3>";
                echo "(1 / 3) * Alas Segitiga * Tinggi<br>";
                echo "</div>";
                break;
            case 'tabung':
                echo "<div class='result'>";
                echo "<h3>Rumus Luas Tabung:</h3>";
                echo "2 * π * Jari-Jari * (Jari-Jari + Tinggi)<br>";
                echo "<h3>Rumus Volume Tabung:</h3>";
                echo "π * Jari-Jari^2 * Tinggi<br>";
                echo "</div>";
                break;
            default:
                echo "Pilih bangun ruang yang valid<br>";
                break;
        }
    }
    ?>
</body>
</html>
