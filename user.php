<?php

require 'functions.php';
$medan = query("SELECT * FROM medan");
$kisaran = query("SELECT * FROM kisaran");
$batubara = query("SELECT * FROM batu_bara");
$sidikalang = query("SELECT * FROM sidikalang");
$lubukpakam = query("SELECT * FROM lubukpakam");
$doloksanggul = query("SELECT * FROM doloksanggul");
$kabanjahe = query("SELECT * FROM kabanjahe");
$rantauparapat = query("SELECT * FROM rantauparapat");
$kotapinang = query("SELECT * FROM kotapinang");
$stabat = query("SELECT * FROM stabat");
$aekkanopan = query("SELECT * FROM aekkanopan");
$panyabungan = query("SELECT * FROM panyabungan");
$gido = query("SELECT * FROM gido");
$lahomi = query("SELECT * FROM lahomi");
$telukdalam = query("SELECT * FROM telukdalam");
$lotu = query("SELECT * FROM lotu");
$sibuhuan = query("SELECT * FROM sibuhuan");
$gunungtua = query("SELECT * FROM gunungtua");
$salak = query("SELECT * FROM salak");
$pangururan = query("SELECT * FROM pangururan");
$seirampah = query("SELECT * FROM seirampah");
$raya = query("SELECT * FROM raya");
$sipirok = query("SELECT * FROM sipirok");
$pandan = query("SELECT * FROM pandan");
$tarutung = query("SELECT * FROM tarutung");
$balige = query("SELECT * FROM balige");
$binjai = query("SELECT * FROM binjai");
$gunungsitoli = query("SELECT * FROM gunungsitoli");
$padangsidimpuan = query("SELECT * FROM padangsidimpuan");
$siantar = query("SELECT * FROM siantar");
$sibolga = query("SELECT * FROM sibolga");
$tanjungbalai = query("SELECT * FROM tanjungbalai");
$tebing = query("SELECT * FROM tebing");
?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Galada&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Galada|Heebo&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lemonada&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="image/bmkg.png" type="image/x-icon">
  <title>Laporan Cuaca Sumatera Utara</title>
  <style>
    .cursive {
      font-size: 20px;
    }

    .utama {
      width: 100%;
      height: 800px;
    }

    .judul2 {
      font-family: 'Galada',
        cursive;
      font-size: 20px;
      font-weight: 800;
    }
  </style>
</head>

<body>
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="image/istana_maimun.jpg" class="d-block utama">
        <div class="carousel-caption d-none d-md-block mb-5">
          <h1 class="judul">Medan</h1>
          <p class="paragraph">Cuaca Medan hari ini</p>
          <?php foreach ($medan as $ulang) : ?>
            <div class="row justify-content-center mb-5">

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    PAGI
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $ulang["suhu"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $ulang["gambar"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $ulang["keterangan"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SIANG
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $ulang["suhu2"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $ulang["gambar2"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $ulang["keterangan2"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SORE
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $ulang["suhu3"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $ulang["gambar3"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $ulang["keterangan3"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    MALAM
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $ulang["suhu4"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $ulang["gambar4"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $ulang["keterangan4"]; ?></p>
                  </div>
                </div>
              </div>
            </div>

          <?php endforeach; ?>
        </div>
      </div>


      <!-- kisaran -->
      <div class="carousel-item">
        <img src="image/kisaran.jpg" class="d-block utama">
        <div class="carousel-caption d-none d-md-block mb-5">
          <h1 class="judul">Kisaran</h1>
          <p class="paragraph">Cuaca Kisaran hari ini</p>
          <?php foreach ($kisaran as $kis) : ?>
            <div class="row justify-content-center mb-5">

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    PAGI
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $kis["suhu"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $kis["gambar"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $kis["keterangan"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SIANG
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $kis["suhu2"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $kis["gambar2"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $kis["keterangan2"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SORE
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $kis["suhu3"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $kis["gambar3"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $kis["keterangan3"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    MALAM
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $kis["suhu4"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $kis["gambar4"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $kis["keterangan4"]; ?></p>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- akhir kisaran -->

      <!-- batu bara -->
      <div class="carousel-item">
        <img src="image/batubara.jpg" class="d-block utama">
        <div class="carousel-caption d-none d-md-block mb-5">
          <h1 class="judul">Batu Bara</h1>
          <p class="paragraph">Cuaca Kabupaten Batu Bara hari ini</p>
          <?php foreach ($batubara as $bat) : ?>
            <div class="row justify-content-center mb-5">

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    PAGI
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $bat["suhu"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $bat["gambar"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $bat["keterangan"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SIANG
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $bat["suhu2"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $bat["gambar2"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $bat["keterangan2"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SORE
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $bat["suhu3"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $bat["gambar3"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $bat["keterangan3"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    MALAM
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $bat["suhu4"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $bat["gambar4"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $bat["keterangan4"]; ?></p>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <!-- akhir batu bara -->

      <!-- sidikalang -->
      <div class="carousel-item">
        <img src="image/dairi.jpg" class="d-block utama">
        <div class="carousel-caption d-none d-md-block mb-5">
          <h1 class="judul">Sidikalang</h1>
          <p class="paragraph">Cuaca Sidikalang hari ini</p>
          <?php foreach ($sidikalang as $sid) : ?>
            <div class="row justify-content-center mb-5">

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    PAGI
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $sid["suhu"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $sid["gambar"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $sid["keterangan"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SIANG
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $sid["suhu2"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $sid["gambar2"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $sid["keterangan2"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SORE
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $sid["suhu3"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $sid["gambar3"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $sid["keterangan3"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    MALAM
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $sid["suhu4"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $sid["gambar4"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $sid["keterangan4"]; ?></p>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <!-- akhir sidikalang -->

      <!-- lubuk pakam -->
      <div class="carousel-item">
        <img src="image/deliserdang.jpg" class="d-block utama">
        <div class="carousel-caption d-none d-md-block mb-5">
          <h1 class="judul">Lubuk Pakam</h1>
          <p class="paragraph">Cuaca Lubuk Pakam hari ini</p>
          <?php foreach ($lubukpakam as $lub) : ?>
            <div class="row justify-content-center mb-5">

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    PAGI
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $lub["suhu"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $lub["gambar"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $lub["keterangan"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SIANG
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $lub["suhu2"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $lub["gambar2"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $lub["keterangan2"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SORE
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $lub["suhu3"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $lub["gambar3"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $lub["keterangan3"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    MALAM
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $lub["suhu4"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $lub["gambar4"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $lub["keterangan4"]; ?></p>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <!-- akhir lubuk pakam -->

      <!-- doloksanggul -->
      <div class="carousel-item">
        <img src="image/humbang.jpg" class="d-block utama">
        <div class="carousel-caption d-none d-md-block mb-5">
          <h1 class="judul">Doloksanggul</h1>
          <p class="paragraph">Cuaca Doloksanggul hari ini</p>
          <?php foreach ($doloksanggul as $dok) : ?>
            <div class="row justify-content-center mb-5">

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    PAGI
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $dok["suhu"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $dok["gambar"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $dok["keterangan"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SIANG
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $dok["suhu2"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $dok["gambar2"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $dok["keterangan2"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SORE
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $dok["suhu3"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $dok["gambar3"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $dok["keterangan3"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    MALAM
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $dok["suhu4"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $dok["gambar4"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $dok["keterangan4"]; ?></p>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <!-- akhir doloksanggul -->

      <!-- kabanjahe -->
      <div class="carousel-item">
        <img src="image/karo.jpg" class="d-block utama">
        <div class="carousel-caption d-none d-md-block mb-5">
          <h1 class="judul">Kabanjahe</h1>
          <p class="paragraph">Cuaca Kabanjahe hari ini</p>
          <?php foreach ($kabanjahe as $kah) : ?>
            <div class="row justify-content-center mb-5">

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    PAGI
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $kah["suhu"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $kah["gambar"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $kah["keterangan"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SIANG
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $kah["suhu2"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $kah["gambar2"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $kah["keterangan2"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SORE
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $kah["suhu3"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $kah["gambar3"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $kah["keterangan3"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    MALAM
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $kah["suhu4"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $kah["gambar4"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $kah["keterangan4"]; ?></p>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <!-- akhir kabanjahe -->

      <!-- Rantau parapat -->
      <div class="carousel-item">
        <img src="image/labuhanbatu.jpg" class="d-block utama">
        <div class="carousel-caption d-none d-md-block mb-5">
          <h1 class="judul">Rantau Parapat</h1>
          <p class="paragraph">Cuaca Rantau Parapat hari ini</p>
          <?php foreach ($rantauparapat as $rap) : ?>
            <div class="row justify-content-center mb-5">

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    PAGI
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $rap["suhu"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $rap["gambar"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $rap["keterangan"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SIANG
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $rap["suhu2"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $rap["gambar2"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $rap["keterangan2"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SORE
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $rap["suhu3"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $rap["gambar3"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $rap["keterangan3"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    MALAM
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $rap["suhu4"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $rap["gambar4"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $rap["keterangan4"]; ?></p>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <!-- akhir rantau parapat -->

      <!-- kota pinang -->
      <div class="carousel-item">
        <img src="image/labuhanbatuselatan.jpg" class="d-block utama">
        <div class="carousel-caption d-none d-md-block mb-5">
          <h1 class="judul">Kota pinang</h1>
          <p class="paragraph">Cuaca Kota Pinang hari ini</p>
          <?php foreach ($kotapinang as $kot) : ?>
            <div class="row justify-content-center mb-5">

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    PAGI
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $kot["suhu"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $kot["gambar"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $kot["keterangan"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SIANG
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $kot["suhu2"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $kot["gambar2"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $kot["keterangan2"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SORE
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $kot["suhu3"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $kot["gambar3"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $kot["keterangan3"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    MALAM
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $kot["suhu4"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $kot["gambar4"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $kot["keterangan4"]; ?></p>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <!-- akhir kota pinang -->

      <!-- stabat -->
      <div class="carousel-item">
        <img src="image/langkat.jpg" class="d-block utama">
        <div class="carousel-caption d-none d-md-block mb-5">
          <h1 class="judul">Stabat</h1>
          <p class="paragraph">Cuaca Stabat hari ini</p>
          <?php foreach ($stabat as $sta) : ?>
            <div class="row justify-content-center mb-5">

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    PAGI
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $sta["suhu"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $sta["gambar"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $sta["keterangan"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SIANG
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $sta["suhu2"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $sta["gambar2"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $sta["keterangan2"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SORE
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $sta["suhu3"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $sta["gambar3"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $sta["keterangan3"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    MALAM
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $sta["suhu4"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $sta["gambar4"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $sta["keterangan4"]; ?></p>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <!-- akhir stabat -->

      <!-- aekkanopan -->
      <div class="carousel-item">
        <img src="image/labuhanbatuutara.jpg" class="d-block utama">
        <div class="carousel-caption d-none d-md-block mb-5">
          <h1 class="judul">Aek Kanopan</h1>
          <p class="paragraph">Cuaca Aek kanopan hari ini</p>
          <?php foreach ($aekkanopan as $aek) : ?>
            <div class="row justify-content-center mb-5">

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    PAGI
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $aek["suhu"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $aek["gambar"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $aek["keterangan"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SIANG
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $aek["suhu2"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $aek["gambar2"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $aek["keterangan2"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SORE
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $aek["suhu3"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $aek["gambar3"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $aek["keterangan3"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    MALAM
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $aek["suhu4"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $aek["gambar4"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $aek["keterangan4"]; ?></p>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <!-- akhir aekkanopan -->

      <!-- panyabungan -->
      <div class="carousel-item">
        <img src="image/mandailingnatal.jpg" class="d-block utama">
        <div class="carousel-caption d-none d-md-block mb-5">
          <h1 class="judul">Panyabungan</h1>
          <p class="paragraph">Cuaca Panyabungan hari ini</p>
          <?php foreach ($panyabungan as $pan) : ?>
            <div class="row justify-content-center mb-5">

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    PAGI
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $pan["suhu"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $pan["gambar"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $pan["keterangan"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SIANG
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $pan["suhu2"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $pan["gambar2"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $pan["keterangan2"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SORE
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $pan["suhu3"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $pan["gambar3"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $pan["keterangan3"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    MALAM
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $pan["suhu4"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $pan["gambar4"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $pan["keterangan4"]; ?></p>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <!-- akhir panyabungan -->

      <!-- gido -->
      <div class="carousel-item">
        <img src="image/nias.jpg" class="d-block utama">
        <div class="carousel-caption d-none d-md-block mb-5">
          <h1 class="judul">Gido</h1>
          <p class="paragraph">Cuaca Gido hari ini</p>
          <?php foreach ($gido as $gid) : ?>
            <div class="row justify-content-center mb-5">

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    PAGI
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $gid["suhu"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $gid["gambar"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $gid["keterangan"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SIANG
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $gid["suhu2"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $gid["gambar2"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $gid["keterangan2"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SORE
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $gid["suhu3"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $gid["gambar3"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $gid["keterangan3"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    MALAM
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $gid["suhu4"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $gid["gambar4"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $gid["keterangan4"]; ?></p>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <!-- akhir gido -->

      <!-- lahomi -->
      <div class="carousel-item">
        <img src="image/niasbarat.jpg" class="d-block utama">
        <div class="carousel-caption d-none d-md-block mb-5">
          <h1 class="judul">Lahomi (Nias Barat)</h1>
          <p class="paragraph">Cuaca Lahomi hari ini</p>
          <?php foreach ($lahomi as $lao) : ?>
            <div class="row justify-content-center mb-5">

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    PAGI
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $lao["suhu"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $lao["gambar"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $lao["keterangan"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SIANG
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $lao["suhu2"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $lao["gambar2"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $lao["keterangan2"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SORE
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $lao["suhu3"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $lao["gambar3"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $lao["keterangan3"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    MALAM
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $lao["suhu4"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $lao["gambar4"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $lao["keterangan4"]; ?></p>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <!-- akhir lahomi -->

      <!-- telukdalam -->
      <div class="carousel-item">
        <img src="image/niasselatan.jpg" class="d-block utama">
        <div class="carousel-caption d-none d-md-block mb-5">
          <h1 class="judul">Teluk Dalam (Nias Selatan)</h1>
          <p class="paragraph">Cuaca Teluk Dalam hari ini</p>
          <?php foreach ($telukdalam as $tol) : ?>
            <div class="row justify-content-center mb-5">

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    PAGI
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $tol["suhu"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $tol["gambar"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $tol["keterangan"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SIANG
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $tol["suhu2"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $tol["gambar2"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $tol["keterangan2"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SORE
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $tol["suhu3"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $tol["gambar3"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $tol["keterangan3"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    MALAM
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $tol["suhu4"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $tol["gambar4"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $tol["keterangan4"]; ?></p>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <!-- akhir telukdalam -->

      <!-- lotu -->
      <div class="carousel-item">
        <img src="image/niasutara.jpg" class="d-block utama">
        <div class="carousel-caption d-none d-md-block mb-5">
          <h1 class="judul">Lotu (Nias Utara)</h1>
          <p class="paragraph">Cuaca Lotu hari ini</p>
          <?php foreach ($lotu as $lot) : ?>
            <div class="row justify-content-center mb-5">

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    PAGI
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $lot["suhu"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $lot["gambar"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $lot["keterangan"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SIANG
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $lot["suhu2"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $lot["gambar2"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $lot["keterangan2"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SORE
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $lot["suhu3"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $lot["gambar3"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $lot["keterangan3"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    MALAM
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $lot["suhu4"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $lot["gambar4"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $lot["keterangan4"]; ?></p>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <!-- akhir lotu -->

      <!-- sibuhuan -->
      <div class="carousel-item">
        <img src="image/padanglawas.jpg" class="d-block utama">
        <div class="carousel-caption d-none d-md-block mb-5">
          <h1 class="judul">Padang Lawas (Sibuhuan)</h1>
          <p class="paragraph">Cuaca Sibuhuan hari ini</p>
          <?php foreach ($sibuhuan as $sib) : ?>
            <div class="row justify-content-center mb-5">

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    PAGI
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $sib["suhu"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $sib["gambar"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $sib["keterangan"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SIANG
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $sib["suhu2"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $sib["gambar2"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $sib["keterangan2"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SORE
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $sib["suhu3"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $sib["gambar3"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $sib["keterangan3"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    MALAM
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $sib["suhu4"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $sib["gambar4"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $sib["keterangan4"]; ?></p>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <!-- akhir sibuhuan -->

      <!-- gunung tua -->
      <div class="carousel-item">
        <img src="image/padanglawasutara.jpg" class="d-block utama">
        <div class="carousel-caption d-none d-md-block mb-5">
          <h1 class="judul">Padang Lawas Utara (Gunung Tua)</h1>
          <p class="paragraph">Cuaca Gunung Tua hari ini</p>
          <?php foreach ($gunungtua as $tua) : ?>
            <div class="row justify-content-center mb-5">

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    PAGI
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $tua["suhu"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $tua["gambar"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $tua["keterangan"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SIANG
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $tua["suhu2"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $tua["gambar2"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $tua["keterangan2"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SORE
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $tua["suhu3"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $tua["gambar3"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $tua["keterangan3"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    MALAM
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $tua["suhu4"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $tua["gambar4"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $tua["keterangan4"]; ?></p>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <!-- akhir gunung tua -->

      <!-- salak -->
      <div class="carousel-item">
        <img src="image/pakpakbarat.jpg" class="d-block utama">
        <div class="carousel-caption d-none d-md-block mb-5">
          <h1 class="judul">Pakpak Barat (Salak)</h1>
          <p class="paragraph">Cuaca Salak hari ini</p>
          <?php foreach ($salak as $sal) : ?>
            <div class="row justify-content-center mb-5">

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    PAGI
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $sal["suhu"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $sal["gambar"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $sal["keterangan"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SIANG
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $sal["suhu2"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $sal["gambar2"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $sal["keterangan2"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SORE
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $sal["suhu3"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $sal["gambar3"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $sal["keterangan3"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    MALAM
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $sal["suhu4"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $sal["gambar4"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $sal["keterangan4"]; ?></p>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <!-- akhir salak -->

      <!-- pangururan -->
      <div class="carousel-item">
        <img src="image/samosir.JPG" class="d-block utama">
        <div class="carousel-caption d-none d-md-block mb-5">
          <h1 class="judul">Kabupaten Samosir (pangururan)</h1>
          <p class="paragraph">Cuaca Pangururan hari ini</p>
          <?php foreach ($pangururan as $pang) : ?>
            <div class="row justify-content-center mb-5">

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    PAGI
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $pang["suhu"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $pang["gambar"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $pang["keterangan"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SIANG
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $pang["suhu2"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $pang["gambar2"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $pang["keterangan2"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SORE
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $pang["suhu3"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $pang["gambar3"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $pang["keterangan3"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    MALAM
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $pang["suhu4"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $pang["gambar4"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $pang["keterangan4"]; ?></p>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <!-- akhir pangururan -->

      <!-- SEIRAMPAH -->
      <div class="carousel-item">
        <img src="image/serdangbedagai.jpg" class="d-block utama">
        <div class="carousel-caption d-none d-md-block mb-5">
          <h1 class="judul">Kabupaten Serdang Bedagai (Sei Rampah)</h1>
          <p class="paragraph">Cuaca Seirampah hari ini</p>
          <?php foreach ($seirampah as $sei) : ?>
            <div class="row justify-content-center mb-5">

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    PAGI
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $sei["suhu"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $sei["gambar"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $sei["keterangan"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SIANG
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $sei["suhu2"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $sei["gambar2"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $sei["keterangan2"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SORE
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $sei["suhu3"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $sei["gambar3"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $sei["keterangan3"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    MALAM
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $sei["suhu4"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $sei["gambar4"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $sei["keterangan4"]; ?></p>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <!-- AKHIR SEIRAMPAH -->

      <!-- Raya -->
      <div class="carousel-item">
        <img src="image/simalungun.jpg" class="d-block utama">
        <div class="carousel-caption d-none d-md-block mb-5">
          <h1 class="judul">Kabupaten Simalungun (Raya)</h1>
          <p class="paragraph">Cuaca Raya hari ini</p>
          <?php foreach ($raya as $ray) : ?>
            <div class="row justify-content-center mb-5">

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    PAGI
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $ray["suhu"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $ray["gambar"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $ray["keterangan"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SIANG
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $ray["suhu2"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $ray["gambar2"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $ray["keterangan2"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SORE
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $ray["suhu3"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $ray["gambar3"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $ray["keterangan3"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    MALAM
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $ray["suhu4"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $ray["gambar4"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $ray["keterangan4"]; ?></p>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <!-- akhir raya -->

      <!-- sipirok -->
      <div class="carousel-item">
        <img src="image/tapsel.jpg" class="d-block utama">
        <div class="carousel-caption d-none d-md-block mb-5">
          <h1 class="judul">Kabupaten Tapanuli Selatan (Sipirok)</h1>
          <p class="paragraph">Cuaca Sipirok hari ini</p>
          <?php foreach ($sipirok as $sip) : ?>
            <div class="row justify-content-center mb-5">

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    PAGI
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $sip["suhu"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $sip["gambar"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $sip["keterangan"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SIANG
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $sip["suhu2"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $sip["gambar2"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $sip["keterangan2"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SORE
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $sip["suhu3"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $sip["gambar3"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $sip["keterangan3"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    MALAM
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $sip["suhu4"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $sip["gambar4"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $sip["keterangan4"]; ?></p>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <!-- akhir sipirok -->

      <!-- pandan -->
      <div class="carousel-item">
        <img src="image/tapteng.jpg" class="d-block utama">
        <div class="carousel-caption d-none d-md-block mb-5">
          <h1 class="judul">Kabupaten Tapanuli Tengah (Pandan)</h1>
          <p class="paragraph">Cuaca Pandan hari ini</p>
          <?php foreach ($pandan as $pan) : ?>
            <div class="row justify-content-center mb-5">

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    PAGI
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $pan["suhu"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $pan["gambar"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $pan["keterangan"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SIANG
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $pan["suhu2"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $pan["gambar2"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $pan["keterangan2"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SORE
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $pan["suhu3"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $pan["gambar3"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $pan["keterangan3"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    MALAM
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $pan["suhu4"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $pan["gambar4"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $pan["keterangan4"]; ?></p>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <!-- akhir pandan -->

      <!-- tarutung -->
      <div class="carousel-item">
        <img src="image/taput.jpg" class="d-block utama">
        <div class="carousel-caption d-none d-md-block mb-5">
          <h1 class="judul">Kabupaten Tapanuli Utara (Tarutung)</h1>
          <p class="paragraph">Cuaca Tarutung hari ini</p>
          <?php foreach ($tarutung as $tar) : ?>
            <div class="row justify-content-center mb-5">

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    PAGI
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $tar["suhu"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $tar["gambar"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $tar["keterangan"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SIANG
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $tar["suhu2"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $tar["gambar2"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $tar["keterangan2"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SORE
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $tar["suhu3"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $tar["gambar3"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $sei["keterangan3"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    MALAM
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $tar["suhu4"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $tar["gambar4"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $tar["keterangan4"]; ?></p>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <!-- akhir tarutung -->

      <!-- balige -->
      <div class="carousel-item">
        <img src="image/tobasamosir.jpg" class="d-block utama">
        <div class="carousel-caption d-none d-md-block mb-5">
          <h1 class="judul">Kabupaten Toba Samosir (Balige)</h1>
          <p class="paragraph">Cuaca Balige hari ini</p>
          <?php foreach ($tarutung as $trt) : ?>
            <div class="row justify-content-center mb-5">

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    PAGI
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $trt["suhu"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $trt["gambar"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $trt["keterangan"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SIANG
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $trt["suhu2"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $trt["gambar2"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $trt["keterangan2"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SORE
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $trt["suhu3"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $trt["gambar3"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $trt["keterangan3"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    MALAM
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $trt["suhu4"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $trt["gambar4"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $trt["keterangan4"]; ?></p>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <!-- akhir balige -->

      <!-- binjai -->
      <div class="carousel-item">
        <img src="image/binjai.jpg" class="d-block utama">
        <div class="carousel-caption d-none d-md-block mb-5">
          <h1 class="judul">Kota Binjai</h1>
          <p class="paragraph">Cuaca Binjai hari ini</p>
          <?php foreach ($binjai as $bij) : ?>
            <div class="row justify-content-center mb-5">

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    PAGI
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $bij["suhu"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $bij["gambar"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $bij["keterangan"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SIANG
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $bij["suhu2"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $bij["gambar2"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $bij["keterangan2"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SORE
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $bij["suhu3"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $bij["gambar3"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $bij["keterangan3"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    MALAM
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $bij["suhu4"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $bij["gambar4"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $bij["keterangan4"]; ?></p>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <!-- akhir binjai -->

      <!-- gunung sitoli -->
      <div class="carousel-item">
        <img src="image/gunungsitoli.jpg" class="d-block utama">
        <div class="carousel-caption d-none d-md-block mb-5">
          <h1 class="judul">Kota Gunung Sitoli</h1>
          <p class="paragraph">Cuaca GunungSitoli hari ini</p>
          <?php foreach ($gunungsitoli as $gun) : ?>
            <div class="row justify-content-center mb-5">

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    PAGI
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $gun["suhu"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $gun["gambar"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $gun["keterangan"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SIANG
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $gun["suhu2"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $gun["gambar2"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $gun["keterangan2"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SORE
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $gun["suhu3"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $gun["gambar3"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $gun["keterangan3"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    MALAM
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $gun["suhu4"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $gun["gambar4"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $gun["keterangan4"]; ?></p>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <!-- akhir gunung sitoli -->

      <!-- Padang sidimpuan -->
      <div class="carousel-item">
        <img src="image/padangsidimpuan.jpg" class="d-block utama">
        <div class="carousel-caption d-none d-md-block mb-5">
          <h1 class="judul">Kota Padang sidimpuan</h1>
          <p class="paragraph">Cuaca PadangSidimpuan hari ini</p>
          <?php foreach ($padangsidimpuan as $pas) : ?>
            <div class="row justify-content-center mb-5">

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    PAGI
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $pas["suhu"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $pas["gambar"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $pas["keterangan"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SIANG
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $pas["suhu2"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $pas["gambar2"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $pas["keterangan2"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SORE
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $pas["suhu3"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $pas["gambar3"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $pas["keterangan3"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    MALAM
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $pas["suhu4"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $pas["gambar4"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $pas["keterangan4"]; ?></p>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <!-- akhir sidimpuan -->

      <!-- siantar -->
      <div class="carousel-item">
        <img src="image/siantar.jpg" class="d-block utama">
        <div class="carousel-caption d-none d-md-block mb-5">
          <h1 class="judul">Kota Siantar</h1>
          <p class="paragraph">Cuaca Siantar hari ini</p>
          <?php foreach ($siantar as $sar) : ?>
            <div class="row justify-content-center mb-5">

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    PAGI
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $sar["suhu"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $sar["gambar"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $sar["keterangan"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SIANG
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $sar["suhu2"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $sar["gambar2"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $sar["keterangan2"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SORE
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $sar["suhu3"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $sar["gambar3"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $sar["keterangan3"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    MALAM
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $sar["suhu4"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $sar["gambar4"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $sar["keterangan4"]; ?></p>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <!-- akhir siantar -->

      <!-- sibolga -->
      <div class="carousel-item">
        <img src="image/sibolga.jpg" class="d-block utama">
        <div class="carousel-caption d-none d-md-block mb-5">
          <h1 class="judul">Kota Sibolga</h1>
          <p class="paragraph">Cuaca Sibolga hari ini</p>
          <?php foreach ($sibolga as $sib) : ?>
            <div class="row justify-content-center mb-5">

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    PAGI
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $sib["suhu"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $sib["gambar"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $sib["keterangan"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SIANG
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $sib["suhu2"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $sib["gambar2"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $sib["keterangan2"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SORE
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $sib["suhu3"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $sib["gambar3"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $sib["keterangan3"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    MALAM
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $sib["suhu4"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $sib["gambar4"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $sib["keterangan4"]; ?></p>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <!-- akhir sibolga -->

      <!-- tanjung balai -->
      <div class="carousel-item">
        <img src="image/tanjungbalai.jpg" class="d-block utama">
        <div class="carousel-caption d-none d-md-block mb-5">
          <h1 class="judul">Tanjung Balai</h1>
          <p class="paragraph">Cuaca S hari ini</p>
          <?php foreach ($siantar as $sar) : ?>
            <div class="row justify-content-center mb-5">

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    PAGI
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $sar["suhu"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $sar["gambar"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $sar["keterangan"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SIANG
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $sar["suhu2"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $sar["gambar2"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $sar["keterangan2"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SORE
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $sar["suhu3"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $sar["gambar3"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $sar["keterangan3"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    MALAM
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $sar["suhu4"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $sar["gambar4"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $sar["keterangan4"]; ?></p>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <!-- akhir tanjung balai -->

      <!-- tebing -->
      <div class="carousel-item">
        <img src="image/tebingtinggi.jpg" class="d-block utama">
        <div class="carousel-caption d-none d-md-block mb-5">
          <h1 class="judul">Tebing Tinggi</h1>
          <p class="paragraph">Cuaca Tebing Tinggi hari ini</p>
          <?php foreach ($tebing as $teb) : ?>
            <div class="row justify-content-center mb-5">

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    PAGI
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $teb["suhu"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $teb["gambar"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $teb["keterangan"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SIANG
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $teb["suhu2"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $teb["gambar2"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $teb["keterangan2"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    SORE
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $teb["suhu3"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $teb["gambar3"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $teb["keterangan3"]; ?></p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card bg-primary">
                  <div class="card-header">
                    MALAM
                  </div>
                  <div class="card-body text-center">
                    <h1 class="mb-2"><?= $teb["suhu4"]; ?></h1>
                    <img src="dist/assets/img/<?php echo $teb["gambar4"]; ?>" class="mb-3" width="70" height="70">
                    <p class="cursive"><?= $teb["keterangan4"]; ?></p>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <!-- akhir tebing -->

    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>
</body>

</html>