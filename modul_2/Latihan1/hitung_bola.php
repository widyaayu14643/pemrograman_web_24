<!DOCTYPE html>
<html>
<head>
    <title>Hitung Luas dan Volume Bola</title>
</head>
<body>
    <h2>Hitung Luas dan Volume Bola</h2>
    <form method="post" action="hitung_bola.php">
        Jari-Jari: <input type="number" name="jari_jari" required><br>
        <input type="submit" value="Hitung">
    </form>
</body>
</html>

<?php
class Bola {
    private $jariJari;

    public function __construct($r) {
        $this->jariJari = $r;
    }

    public function hitungLuas() {
        return 4 * M_PI * pow($this->jariJari, 2);
    }

    public function hitungVolume() {
        return (4 / 3) * M_PI * pow($this->jariJari, 3);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jariJari = $_POST["jari_jari"];

    $bola = new Bola($jariJari);
    $luas = $bola->hitungLuas();
    $volume = $bola->hitungVolume();

    echo "Luas Bola: $luas<br>";
    echo "Volume Bola: $volume<br>";
}
?>
