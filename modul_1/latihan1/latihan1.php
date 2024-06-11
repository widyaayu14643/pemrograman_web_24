<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
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
        <h2>Kalkulator Sederhana</h2>
        <form method="post" action="">
            <label for="num1">Angka Input 1:</label>
            <input type="number" name="num1" id="num1" required>
            <br><br>
            <label for="operator">Operasi:</label>
            <select name="operator" id="operator">
                <option value="ditambah">+</option>
                <option value="dikurangi">-</option>
                <option value="dikalikan">*</option>
                <option value="dibagi">/</option>
                <option value="modulus">%</option>
            </select>
            <br><br>
            <label for="num2">Angka Input 2:</label>
            <input type="number" name="num2" id="num2" required>
            <br><br>
            <input type="submit" name="calculate" value="Hitung">
        </form>

        <?php
        if (isset($_POST['calculate'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operator = $_POST['operator'];
            $result = 0;

            switch ($operator) {
                case 'ditambah':
                    $result = $num1 + $num2;
                    break;
                case 'dikurang':
                    $result = $num1 - $num2;
                    break;
                case 'dikalikan':
                    $result = $num1 * $num2;
                    break;
                case 'dibagi':
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                    } else {
                        echo "Pembagian dengan 0 tidak bisa dilakukan.";
                        break;
                    }
                    break;
                case 'modulus':
                    if ($num2 != 0) {
                        $result = $num1 % $num2;
                    } else {
                        echo "Modulus dengan 0 tidak bisa dilakukan.";
                        break;
                    }
                    break;
                default:
                    echo "Operasi tidak valid.";
                    break;
            }

            echo "<div class='result'>";
            echo "<h3>Hasil</h3>";
            echo "Hasil dari $num1 $operator $num2 adalah: $result";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
