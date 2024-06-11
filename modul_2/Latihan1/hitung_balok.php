<!DOCTYPE html>
<html>
<head>
    <title>Hitung Luas dan Volume Balok</title>
</head>
<body>
    <h2>Hitung Luas dan Volume Balok</h2>
    <form method="post" action="hitung_balok.php">
        Panjang : <input type="number" name="panjang" required><br>
        Lebar   : <input type="number" name="lebar" required><br>
        Tinggi  : <input type="number" name="tinggi" required><br>
        <input type="submit" value="Hitung">
    </form>
</body>
</html>

<?php
class Balok {
    private $panjang;
    private $lebar;
    private $tinggi;

    public function __construct($p, $l, $t) {
        $this->panjang = $p;
        $this->lebar   = $l;
        $this->tinggi  = $t;
    }

    public function hitungLuas() {
        return 2 * ($this->panjang * $this->lebar + $this->panjang * $this->tinggi + $this->lebar * $this->tinggi);
    }

    public function hitungVolume() {
        return $this->panjang * $this->lebar * $this->tinggi;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $panjang = $_POST["panjang"];
    $lebar   = $_POST["lebar"];
    $tinggi  = $_POST["tinggi"];

    $balok  = new Balok($panjang, $lebar, $tinggi);
    $luas   = $balok->hitungLuas();
    $volume = $balok->hitungVolume();

    echo "Luas Balok: $luas<br>";
    echo "Volume Balok: $volume<br>";
}
?>
