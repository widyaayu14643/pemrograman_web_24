<!DOCTYPE html>
<html>
<head>
  <title>Kalkulator BMI</title>
  <style>
    body {
      background-color: pink;
      font-family: Arial, sans-serif;
    }

    .container {
      max-width: 500px;
      margin: 50px auto;
      padding: 20px;
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    input[type="number"], input[type="date"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    .button {
      background-color: blue;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
    }

    .result {
      margin-top: 20px;
    }

    .result img {
      width: 100px; 
      height: auto;
      margin-bottom: 10px;
    }

    .result p {
      font-size: 20px;
      text-align: center;
    }

    .progress-bar {
      width: 100%;
      height: 20px;
      background-color: lightgray;
      border-radius: 5px;
      margin-top: 10px;
      overflow: hidden;
    }

    .progress {
      height: 100%;
      background-color: green;
    }

    .gender img {
      width: 30px; 
      height: 30px; 
      margin-right: 5px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Hitung BMI</h1>
    <form method="POST">
      <label>Tanggal Lahir Anda</label>
      <input type="date" name="tanggal_lahir" required><br>

      <label>Jenis Kelamin Anda</label>
      <div class="gender">
        <input type="radio" name="jenis_kelamin" value="laki-laki" required> 
        <img src="male.jpg" alt="Laki-laki"> Laki-laki

        <input type="radio" name="jenis_kelamin" value="perempuan" required> 
        <img src="female.jpg" alt="Perempuan"> Perempuan
      </div><br>

      <label>Tinggi Anda (cm)</label>
      <input type="number" name="tinggi" required><br>

      <label>Berat Badan Anda (kg)</label>
      <input type="number" name="berat" required><br>

      <input type="submit" name="hitung" value="Hitung" class="button">
    </form>

    <?php
    if (isset($_POST['hitung'])) {
      $tinggi = $_POST['tinggi'];
      $berat = $_POST['berat'];
      $bmi = $berat / (($tinggi/100) * ($tinggi/100));

      $keterangan = '';
      $image = '';

      if ($bmi < 18.4) {
        $keterangan = 'Kekurangan Bobot';
        $image = 'kekurangan.png';
      } else if ($bmi >= 18.5 && $bmi <= 22.9) {
        $keterangan = 'Sehat';
        $image = 'sehat.jpg';
      } else if ($bmi >= 23 && $bmi <= 24.9) {
        $keterangan = 'Kelebihan Bobot';
        $image = 'kelebihan.jpg';
      } else if ($bmi >= 25 && $bmi <= 29.9) {
        $keterangan = 'Obesitas 1';
        $image = 'obesitas.jpg';
      } else {
        $keterangan = 'Obesitas 2';
        $image = 'obesitass.jpg';
      }

      echo '<div class="result">';
      echo '<img src="' . $image . '" alt="Gambar BMI">';
      echo '<p>' . $keterangan . '</p>';
      echo '<p><b>BMI Anda adalah ' . number_format($bmi, 1) . '</b></p>';
      echo '</div>';

      // Garis Pengukuran
      $color = '';
      if ($bmi < 18.5) {
        $color = 'green';
      } else if ($bmi >= 18.5 && $bmi <= 22.9) {
        $color = 'yellow';
      } else if ($bmi >= 23 && $bmi <= 24.9) {
        $color = 'orange';
      } else {
        $color = 'red';
      }
      echo '<div class="progress-bar">';
      echo '<div class="progress" style="width: ' . ($bmi * 10) . '%; background-color: ' . $color . ';"></div>';
      echo '</div>';
    }
    ?>
  </div>
</body>
</html>
