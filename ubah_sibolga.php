<?php
session_start();

if (!isset($_SESSION["login"])) {
  header("Location: login");
  exit;
}
require 'functions.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Ubah Data</title>
  <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Lemonada&display=swap" rel="stylesheet">
  <script src="assets/js/sweetalert2.all.min.js"></script>
  <script src="assets/js/myscript.js"></script>
  <link href="dist/css/styles.css" rel="stylesheet" />
  <link rel="shortcut icon" href="image/bmkg.png" type="image/x-icon">
  <style>
    .cursive {
      font-family: 'Lemonada', cursive;
    }

    .kecil {

      width: 40px;
      height: 40px;
    }

    .biru {
      border: 2px solid blue;
    }

    .merah {
      border: 2px solid red;
    }

    .kuning {
      border: 2px solid yellow;
    }

    .hijau {
      border: 2px solid green;
    }
  </style>
</head>

<body class="sb-nav-fixed">
  <?php
  // ambil data di URL
  $id = $_GET["id"];

  // query data mahasiswa berdasarkan id
  $mhs = query("SELECT * FROM sibolga WHERE id = $id")[0];
  // cek apakah tombol submit sudah ditekan atau belum
  if (isset($_POST["submit"])) {

    // cek apakah data berhasil ditambahkan atau tidak
    if (ubah_sibolga($_POST) > 0) {
      echo "
       <script>
          Swal.fire({
		      title: 'Diubah',
		      text: 'Data berhasil diubah! ',
		      icon: 'success'
      });   
      document.location.href = 'sibolga';
        </script>";
    } else {
      echo "
        <script>
          Swal.fire({
		      title: 'Gagal',
		      text: 'Data Gagal diubah! ',
		      icon: 'error'
      });   
      document.location.href = 'sibolga';
        </script>";
    }
  }

  ?>

  <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand cursive" href="index.html"><img src="src/assets/img/bmkg.png" class="kecil"> BMKG</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button><!-- Navbar Search-->
    <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
    </div>
    <!-- Navbar-->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="logout">Logout</a>
        </div>
      </li>
    </ul>
  </nav>
  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
      <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
          <div class="nav">
            <div class="sb-sidenav-menu-heading">Core</div>
            <a class="nav-link" href="index">
              <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
              Dashboard
            </a>
            <div class="sb-sidenav-menu-heading">Interface</div>
            <a class="nav-link" href="medan">
              <div class="sb-nav-link-icon"><i class="fas fa-place-of-worship"></i></div>
              Medan
            </a>
            <a class="nav-link" href="kisaran">
              <div class="sb-nav-link-icon"><i class="fas fa-mosque"></i></div>
              Kisaran
            </a>
            <a class="nav-link" href="batubara">
              <div class="sb-nav-link-icon"><i class="fas fa-house-damage"></i></div>
              Kabupaten Batu Bara
            </a>
            <a class="nav-link" href="sidikalang">
              <div class="sb-nav-link-icon"><i class="fas fa-coffee"></i></div>
              Sidikalang
            </a>
            <a class="nav-link" href="doloksanggul">
              <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
              Doloksanggul
            </a>
            <a class="nav-link" href="lubukpakam">
              <div class="sb-nav-link-icon"><i class="fas fa-chart-bar"></i></div>
              LubukPakam
            </a>
            <a class="nav-link" href="karo">
              <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
              Kabanjahe
            </a>
            <a class="nav-link" href="rantauparapat">
              <div class="sb-nav-link-icon"><i class="fas fa-igloo"></i></div>
              Rantau Parapat
            </a>
            <a class="nav-link" href="kotapinang">
              <div class="sb-nav-link-icon"><i class="fas fa-map-marked"></i></div>
              Kota Pinang
            </a>
            <a class="nav-link" href="aekkanopan">
              <div class="sb-nav-link-icon"><i class="far fa-map"></i></div>
              Aekkanopan
            </a>
            <a class="nav-link" href="stabat">
              <div class="sb-nav-link-icon"><i class="fas fa-route"></i></div>
              Stabat
            </a>
            <a class="nav-link" href="panyabungan">
              <div class="sb-nav-link-icon"><i class="fas fa-map-signs"></i></div>
              Panyabungan
            </a>
            <a class="nav-link" href="gido">
              <div class="sb-nav-link-icon"><i class="far fa-compass"></i></div>
              Gido(Kabupaten Nias)
            </a>
            <a class="nav-link" href="lahomi">
              <div class="sb-nav-link-icon"><i class="fas fa-hiking"></i></div>
              Lahomi
            </a>
            <a class="nav-link" href="telukdalam">
              <div class="sb-nav-link-icon"><i class="far fa-hospital"></i></div>
              Telukdalam
            </a>
            <a class="nav-link" href="lotu">
              <div class="sb-nav-link-icon"><i class="far fa-building"></i></div>
              Lotu
            </a>
            <a class="nav-link" href="sibuhuan">
              <div class="sb-nav-link-icon"><i class="fas fa-university"></i></div>
              Sibuhuan
            </a>
            <a class="nav-link" href="gunungtua">
              <div class="sb-nav-link-icon"><i class="fas fa-gopuram"></i></div>
              Gunung Tua
            </a>
            <a class="nav-link" href="salak">
              <div class="sb-nav-link-icon"><i class="fas fa-caravan"></i></div>
              Salak
            </a>
            <a class="nav-link" href="pangururan">
              <div class="sb-nav-link-icon"><i class="fas fa-city"></i></div>
              Pangururan
            </a>
            <a class="nav-link" href="seirampah">
              <div class="sb-nav-link-icon"><i class="fas fa-door-open"></i></div>
              Sei Rampah
            </a>
            <a class="nav-link" href="raya">
              <div class="sb-nav-link-icon"><i class="fas fa-hotel"></i></div>
              Raya
            </a>
            <a class="nav-link" href="sipirok">
              <div class="sb-nav-link-icon"><i class="fas fa-dungeon"></i></div>
              Sipirok
            </a>
            <a class="nav-link" href="pandan">
              <div class="sb-nav-link-icon"><i class="fas fa-door-closed"></i></div>
              Pandan
            </a>
            <a class="nav-link" href="tarutung">
              <div class="sb-nav-link-icon"><i class="fas fa-image"></i></div>
              Tarutung
            </a>
            <a class="nav-link" href="balige">
              <div class="sb-nav-link-icon"><i class="far fa-image"></i></div>
              Balige
            </a>
            <a class="nav-link" href="binjai">
              <div class="sb-nav-link-icon"><i class="fas fa-images"></i></div>
              Binjai
            </a>
            <a class="nav-link" href="gunungsitoli">
              <div class="sb-nav-link-icon"><i class="far fa-images"></i></div>
              Gunung Sitoli
            </a>
            <a class="nav-link" href="padangsidimpuan">
              <div class="sb-nav-link-icon"><i class="fas fa-archway"></i></div>
              Padang sidempuan
            </a>
            <a class="nav-link" href="siantar">
              <div class="sb-nav-link-icon"><i class="fas fa-globe-asia"></i></div>
              Siantar
            </a>
            <a class="nav-link" href="sibolga">
              <div class="sb-nav-link-icon"><i class="fas fa-tram"></i></div>
              Sibolga
            </a>
            <a class="nav-link" href="tanjungbalai">
              <div class="sb-nav-link-icon"><i class="fas fa-anchor"></i></div>
              Tanjung Balai
            </a>
            <a class="nav-link" href="tebing">
              <div class="sb-nav-link-icon"><i class="fas fa-ship"></i></div>
              Tebing Tinggi
            </a>
          </div>
        </div>

      </nav>
    </div>
    <div id="layoutSidenav_content">
      <main>
        <div class="container-fluid mt-2">
          <div class="col-md">
            <div class="card">
              <div class="card-header text-center">
                Ubah data
              </div>
              <div class="card-body p-5">
                <form action="" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
                  <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">
                  <input type="hidden" name="gambarLama2" value="<?= $mhs["gambar2"]; ?>">
                  <input type="hidden" name="gambarLama3" value="<?= $mhs["gambar3"]; ?>">
                  <input type="hidden" name="gambarLama4" value="<?= $mhs["gambar4"]; ?>">

                  <h5>Pagi</h5>
                  <div class="card merah mb-2">
                    <div class="card-body">
                      <div class="form-group">
                        <label for="suhu1">Masukkan Suhu</label>
                        <input type="text" class="form-control" id="suhu1" name="suhu" value="<?= $mhs['suhu']; ?>" required>
                      </div>

                      <div class="custom-file mb-2">
                        <label for="gambar">Ganti Gambar</label>
                        <img src="dist/assets/img/<?= $mhs['gambar']; ?>" width="50"> <br>
                        <input type="file" name="gambar" id="gambar" required>
                      </div>

                      <div class="form-group">
                        <label for="keterangan">Masukkan Keterangan</label>
                        <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= $mhs['keterangan']; ?>" required>
                      </div>
                    </div>
                  </div>

                  <h5>Siang</h5>
                  <div class="card kuning mb-2">
                    <div class="card-body">
                      <div class="form-group">
                        <label for="suhu2">Masukkan Suhu</label>
                        <input type="text" class="form-control" id="suhu2" name="suhu2" value="<?= $mhs['suhu2']; ?>" required>
                      </div>

                      <div class="custom-file mb-2">
                        <label for="gambar2">Ganti Gambar</label>
                        <img src="dist/assets/img/<?= $mhs['gambar2']; ?>" width="50"> <br>
                        <input type="file" name="gambar2" id="gambar2" required>
                      </div>

                      <div class="form-group">
                        <label for="keterangan2">Masukkan Keterangan</label>
                        <input type="text" class="form-control" id="keterangan2" name="keterangan2" value="<?= $mhs['keterangan2']; ?>" required>
                      </div>
                    </div>
                  </div>

                  <h5>Sore</h5>
                  <div class="card hijau mb-2">
                    <div class="card-body">
                      <div class="form-group">
                        <label for="suhu3">Masukkan Suhu</label>
                        <input type="text" class="form-control" id="suhu3" name="suhu3" value="<?= $mhs['suhu3']; ?>" required>
                      </div>

                      <div class="custom-file mb-2">
                        <label for="gambar3">Ganti Gambar</label>
                        <img src="dist/assets/img/<?= $mhs['gambar3']; ?>" width="50"> <br>
                        <input type="file" name="gambar3" id="gambar3" required>
                      </div>

                      <div class="form-group">
                        <label for="keterangan3">Masukkan Keterangan</label>
                        <input type="text" class="form-control" id="keterangan3" name="keterangan3" value="<?= $mhs['keterangan3']; ?>" required>
                      </div>
                    </div>
                  </div>

                  <h5>Malam</h5>
                  <div class="card biru mb-2">
                    <div class="card-body">
                      <div class="form-group">
                        <label for="suhu4">Masukkan Suhu</label>
                        <input type="text" class="form-control" id="suhu4" name="suhu4" value="<?= $mhs['suhu4']; ?>" required>
                      </div>

                      <div class="custom-file mb-2">
                        <label for="gambar4">Ganti Gambar</label>
                        <img src="dist/assets/img/<?= $mhs['gambar4']; ?>" width="50"> <br>
                        <input type="file" name="gambar4" id="gambar4" required>
                      </div>

                      <div class="form-group">
                        <label for="keterangan4">Masukkan Keterangan</label>
                        <input type="text" class="form-control" id="keterangan4" name="keterangan4" value="<?= $mhs['keterangan4']; ?>" required>
                      </div>
                    </div>
                  </div>

                  <div class="row mt-2">
                    <div class="col-md">
                      <button type="submit" name="submit" class="btn btn-success">Update data!</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </main>
      <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid">
          <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; <?= date('Y'); ?></div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="src/js/scripts.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
  <script src="src/assets/demo/chart-area-demo.js"></script>
  <script src="src/assets/demo/chart-bar-demo.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
  <script src="src/assets/demo/datatables-demo.js"></script>
</body>

</html>