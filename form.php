<?php
if (isset($_POST['hasil'])) {


  $bil1 = $_POST['bil1'];
  $bil2 = $_POST['bil2'];
  $operasi = $_POST['hitung'];
  switch ($operasi) {
    case 'tambah':

      $hasil = $bil1 + $bil2;
      break;
    case 'kurang':
      $hasil = $bil1 - $bil2;
      break;
    case 'kali':
      $hasil = $bil1 * $bil2;
      break;
    case 'bagi':
      $hasil = $bil1 / $bil2;
      break;
  }
}
if (isset($_POST['clear'])) {
  $hasil = 0;
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>kalkulator</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
    <table class="table1">
      <form action="" method="post">
        <tr class="kalku">
          <th colspan="2" class="kalkulator" id="kalkulator"> <B>KALKULATOR</B></th>
        </tr>
        <tr>
          <td>
            <label for="bilangan1" class="kalimat">Bilangan Pertama</label>
          </td>
          <td>
            <input autocomplete="off" type="number" id="bilangan1" placeholder="masukan angka" class="hitung" name="bil1" required>
          </td>
        </tr>
        <tr>
          <td>
            <label for="bilangan2" class="kalimat">Bilangan Kedua</label>
          </td>
          <td><?php if (empty($_POST)) ?>
          <input autocomplete="off" type="number" id="bilangan2" placeholder="masukan angka" class="hitung" name="bil2" required>
          </td>
        </tr>
        <tr>
          <td>
            <label for="operasi" class="kalimat">
              Operasi Aritmatika
            </label>
          </td>
          <td>
            <select name="hitung" class="hitung">
              <option value="tambah">+</option>
              <option value="kurang">-</option>
              <option value="kali">x</option>
              <option value="bagi">/</option>
            </select>
          </td>
        </tr>
        <tr class="akhiranhasil">
          <td colspan="2">
            <input type="submit" name="hasil" id="hasil" value="Hasil Perhitungan">
          </td>
        </tr>
        </form>
    </table>
  <table class="hasilakhir">
      <form action="" method="post">
        <tr>
          <td rowspan="2">
            <div class="aritmatika">
              <?php if (isset($_POST['hasil'])) {
                if (isset($_POST['bil1']) && isset($_POST['bil2'])) {
                  echo $hasil;
                } else {
                }
              } else {
                echo 0;
              } ?>
            </div>
            <input type="submit" id="clear" value="Clear" name="clear" class="clear">
          </td>
        </tr>
      </form>
    </table>
</body>

</html>