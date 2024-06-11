<!DOCTYPE html>
<html>
<head>
    <title>Konversi Nilai Matakuliah</title>
    <style>
        body {
            background-color: blue; /* Warna latar belakang biru */
            color: white; /* Warna teks putih */
            font-family: Arial, sans-serif;
        }
        .container {
            width: 300px;
            margin: 50px auto;
        }
        .result {
            background-color: rgba(255, 255, 255, 0.2); /* Warna latar belakang transparan putih */
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Konversi Nilai Matakuliah</h2>
        <form method="post" action="">
            <label for="nilai_angka">Nilai Angka:</label>
            <input type="number" name="nilai_angka" id="nilai_angka" min="0" max="100" required>
            <br><br>
            <label for="nilai_huruf">Nilai Huruf:</label>
            <input type="text" name="nilai_huruf" id="nilai_huruf" required>
            <br><br>
            <input type="submit" name="konversi" value="Konversi">
        </form>

        <?php
        if (isset($_POST['konversi'])) {
            $nilai_angka = $_POST['nilai_angka'];
            $nilai_huruf = strtoupper($_POST['nilai_huruf']); // Mengubah nilai huruf menjadi huruf besar (uppercase)

            echo "<div class='result'>";
            echo "<h3>Hasil Konversi:</h3>";
            echo "Nilai Angka: $nilai_angka<br>";
            echo "Nilai Huruf: $nilai_huruf<br>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
