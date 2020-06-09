<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location: login");
  exit;
}

require 'functions.php';
// cek apakah tombol submit sudah ditekan atau belum
$binjai = query("SELECT * FROM binjai");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Laporan cuaca Kabupaten Kota Binjai</title>
  <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
  <script src="assets/js/sweetalert2.all.min.js"></script>
  <script src="assets/js/myscript.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lemonada&display=swap" rel="stylesheet">
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

  if (isset($_POST["submit"])) {

    // cek apakah data berhasil ditambahkan atau tidak
    if (tambah_binjai($_POST) > 0) {
      echo "
        <script>
          Swal.fire({
		      title: 'Ditambah',
		      text: 'Data berhasil ditambah! ',
		      icon: 'success'
      });   
      document.location.href = 'binjai';
        </script>";
    } else {
      echo "
        <script>
        Swal.fire({
		    title: 'Gagal',
		    text: 'Data gagal ditambah! ',
		    icon: 'error'
    });
    document.location.href = 'binjai';
        </script>";
    }
  }

  ?>

  <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand cursive" href="index"><img src="src/assets/img/bmkg.png" class="kecil"> BMKG</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button><!-- Navbar Search-->
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
        <div class="container-fluid">
          <div class="row justify-content-center mt-3 mb-3">
            <div class="col-md-10">
              <h2 class="text-center cursive">kelengkapan data cuaca Kota Binjai</h2>
            </div>
            <div class="col-md-2">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                Tambah Data
              </button>
            </div>

          </div>
          <div class="row">
            <div class="col-md">
              <div class="card">
                <h5 class="card-header text-center">Data Cuaca Kota Binjai</h5>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Pagi</th>
                          <th>Siang</th>
                          <th>Sore</th>
                          <th>Malam</th>

                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($binjai as $row) : ?>
                          <tr>
                            <td rowspan="3"><?= $i; ?></td>
                            <td><img src="dist/assets/img/<?php echo $row["gambar"]; ?>" width="30"></td>
                            <td><img src="dist/assets/img/<?php echo $row["gambar2"]; ?>" width="30"></td>
                            <td><img src="dist/assets/img/<?php echo $row["gambar3"]; ?>" width="30"></td>
                            <td><img src="dist/assets/img/<?php echo $row["gambar4"]; ?>" width="30"></td>

                            <td>
                              <a href="ubah_binjai?id=<?php echo $row["id"]; ?>" class="badge badge-warning">ubah</a>
                              <a href="hapus_binjai?id=<?php echo $row["id"]; ?>" onclick="return confirm('yakin?');" class="badge badge-danger">hapus</a>
                            </td>
                          </tr>
                          <tr>
                            <td><?= $row["suhu"]; ?></td>
                            <td><?= $row["suhu2"]; ?></td>
                            <td><?= $row["suhu3"]; ?></td>
                            <td><?= $row["suhu4"]; ?></td>
                          </tr>
                          <tr>
                            <td><?= $row["keterangan"]; ?></td>
                            <td><?= $row["keterangan2"]; ?></td>
                            <td><?= $row["keterangan3"]; ?></td>
                            <td><?= $row["keterangan4"]; ?></td>
                          </tr>
                          <?php $i++; ?>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                    <div class="row mt-2 mb-2">
                      <div class="col-md">
                        <a href="user" target="_blank">Lihat ditampilan user</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
      <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid">
          <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">
              <p class="text-center">Copyright &copy; <?= date('Y'); ?></p>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>

  <!-- modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Data Cuaca</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
          <div class="modal-body">
            <h5>Pagi</h5>
            <div class="card merah mb-2">
              <div class="card-body">
                <div class="form-group">
                  <label for="suhu1">Masukkan Suhu</label>
                  <input type="text" class="form-control" id="suhu1" name="suhu" placeholder="Masukkan suhu" required>
                </div>

                <div class="custom-file mb-2">
                  <input type="file" class="custom-file-input" id="gambar" name="gambar" required>
                  <label class="custom-file-label" for="gambar">Pilih Gambar Cuaca</label>
                </div>

                <div class="form-group">
                  <label for="keterangan">Masukkan Keterangan</label>
                  <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Masukkan keterangan" required>
                </div>
              </div>
            </div>

            <h5>Siang</h5>
            <div class="card kuning mb-2">
              <div class="card-body">
                <div class="form-group">
                  <label for="suhu2">Masukkan Suhu</label>
                  <input type="text" class="form-control" id="suhu2" name="suhu2" placeholder="Masukkan suhu" required>
                </div>

                <div class="custom-file mb-2">
                  <input type="file" class="custom-file-input" id="gambar2" name="gambar2" required>
                  <label class="custom-file-label" for="gambar2">Pilih Gambar Cuaca</label>
                </div>

                <div class="form-group">
                  <label for="keterangan2">Masukkan Keterangan</label>
                  <input type="text" class="form-control" id="keterangan2" name="keterangan2" placeholder="Masukkan keterangan" required>
                </div>
              </div>
            </div>

            <h5>Sore</h5>
            <div class="card hijau mb-2">
              <div class="card-body">
                <div class="form-group">
                  <label for="suhu3">Masukkan Suhu</label>
                  <input type="text" class="form-control" id="suhu3" name="suhu3" placeholder="Masukkan suhu" required>
                </div>

                <div class="custom-file mb-2">
                  <input type="file" class="custom-file-input" id="gambar3" name="gambar3" required>
                  <label class="custom-file-label" for="gambar3">Pilih Gambar Cuaca </label>
                </div>

                <div class="form-group">
                  <label for="keterangan3">Masukkan Keterangan</label>
                  <input type="text" class="form-control" id="keterangan3" name="keterangan3" placeholder="Masukkan keterangan" required>
                </div>
              </div>
            </div>

            <h5>Malam</h5>
            <div class="card biru mb-2">
              <div class="card-body">
                <div class="form-group">
                  <label for="suhu4">Masukkan Suhu</label>
                  <input type="text" class="form-control" id="suhu4" name="suhu4" placeholder="Masukkan suhu" required>
                </div>

                <div class="custom-file mb-2">
                  <input type="file" class="custom-file-input" id="gambar4" name="gambar4" required>
                  <label class="custom-file-label" for="gambar4">Pilih Gambar Cuaca</label>
                </div>

                <div class="form-group">
                  <label for="keterangan4">Masukkan Keterangan</label>
                  <input type="text" class="form-control" id="keterangan4" name="keterangan4" placeholder="Masukkan keterangan" required>
                </div>
              </div>
            </div>

          </div>
          <div class="modal-footer">
            <button type="submit" name="submit" class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- akhir modal -->

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