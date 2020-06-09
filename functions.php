<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "bmkg");


function query($query)
{
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}


function tambah($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);

  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $gambar2 = upload2();
  if (!$gambar2) {
    return false;
  }

  $gambar3 = upload3();
  if (!$gambar3) {
    return false;
  }

  $gambar4 = upload4();
  if (!$gambar4) {
    return false;
  }


  // query insert data
  $query = "INSERT INTO medan VALUES ('', '$suhu', '$keterangan', '$suhu2', '$keterangan2', '$suhu3', '$keterangan3', '$suhu4', '$keterangan4', '$gambar', '$gambar2', '$gambar3', '$gambar4')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function tambah_tebing($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);



  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $gambar2 = upload2();
  if (!$gambar2) {
    return false;
  }

  $gambar3 = upload3();
  if (!$gambar3) {
    return false;
  }

  $gambar4 = upload4();
  if (!$gambar4) {
    return false;
  }


  // query insert data
  $query = "INSERT INTO tebing VALUES ('', '$suhu', '$keterangan', '$suhu2', '$keterangan2', '$suhu3', '$keterangan3', '$suhu4', '$keterangan4', '$gambar', '$gambar2', '$gambar3', '$gambar4')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function tambah_tanjungbalai($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);



  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $gambar2 = upload2();
  if (!$gambar2) {
    return false;
  }

  $gambar3 = upload3();
  if (!$gambar3) {
    return false;
  }

  $gambar4 = upload4();
  if (!$gambar4) {
    return false;
  }


  // query insert data
  $query = "INSERT INTO tanjungbalai VALUES ('', '$suhu', '$keterangan', '$suhu2', '$keterangan2', '$suhu3', '$keterangan3', '$suhu4', '$keterangan4', '$gambar', '$gambar2', '$gambar3', '$gambar4')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function tambah_sibolga($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);



  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $gambar2 = upload2();
  if (!$gambar2) {
    return false;
  }

  $gambar3 = upload3();
  if (!$gambar3) {
    return false;
  }

  $gambar4 = upload4();
  if (!$gambar4) {
    return false;
  }


  // query insert data
  $query = "INSERT INTO sibolga VALUES ('', '$suhu', '$keterangan', '$suhu2', '$keterangan2', '$suhu3', '$keterangan3', '$suhu4', '$keterangan4', '$gambar', '$gambar2', '$gambar3', '$gambar4')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function tambah_siantar($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);



  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $gambar2 = upload2();
  if (!$gambar2) {
    return false;
  }

  $gambar3 = upload3();
  if (!$gambar3) {
    return false;
  }

  $gambar4 = upload4();
  if (!$gambar4) {
    return false;
  }


  // query insert data
  $query = "INSERT INTO siantar VALUES ('', '$suhu', '$keterangan', '$suhu2', '$keterangan2', '$suhu3', '$keterangan3', '$suhu4', '$keterangan4', '$gambar', '$gambar2', '$gambar3', '$gambar4')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}


function tambah_padangsidimpuan($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);



  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $gambar2 = upload2();
  if (!$gambar2) {
    return false;
  }

  $gambar3 = upload3();
  if (!$gambar3) {
    return false;
  }

  $gambar4 = upload4();
  if (!$gambar4) {
    return false;
  }


  // query insert data
  $query = "INSERT INTO padangsidimpuan VALUES ('', '$suhu', '$keterangan', '$suhu2', '$keterangan2', '$suhu3', '$keterangan3', '$suhu4', '$keterangan4', '$gambar', '$gambar2', '$gambar3', '$gambar4')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function tambah_gunungsitoli($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $gambar2 = upload2();
  if (!$gambar2) {
    return false;
  }

  $gambar3 = upload3();
  if (!$gambar3) {
    return false;
  }

  $gambar4 = upload4();
  if (!$gambar4) {
    return false;
  }


  // query insert data
  $query = "INSERT INTO gunungsitoli VALUES ('', '$suhu', '$keterangan', '$suhu2', '$keterangan2', '$suhu3', '$keterangan3', '$suhu4', '$keterangan4', '$gambar', '$gambar2', '$gambar3', '$gambar4')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function tambah_binjai($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $gambar2 = upload2();
  if (!$gambar2) {
    return false;
  }

  $gambar3 = upload3();
  if (!$gambar3) {
    return false;
  }

  $gambar4 = upload4();
  if (!$gambar4) {
    return false;
  }


  // query insert data
  $query = "INSERT INTO binjai VALUES ('', '$suhu', '$keterangan', '$suhu2', '$keterangan2', '$suhu3', '$keterangan3', '$suhu4', '$keterangan4', '$gambar', '$gambar2', '$gambar3', '$gambar4')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function tambah_balige($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);



  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $gambar2 = upload2();
  if (!$gambar2) {
    return false;
  }

  $gambar3 = upload3();
  if (!$gambar3) {
    return false;
  }

  $gambar4 = upload4();
  if (!$gambar4) {
    return false;
  }


  // query insert data
  $query = "INSERT INTO balige VALUES ('', '$suhu', '$keterangan', '$suhu2', '$keterangan2', '$suhu3', '$keterangan3', '$suhu4', '$keterangan4', '$gambar', '$gambar2', '$gambar3', '$gambar4')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function tambah_tarutung($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);



  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $gambar2 = upload2();
  if (!$gambar2) {
    return false;
  }

  $gambar3 = upload3();
  if (!$gambar3) {
    return false;
  }

  $gambar4 = upload4();
  if (!$gambar4) {
    return false;
  }


  // query insert data
  $query = "INSERT INTO tarutung VALUES ('', '$suhu', '$keterangan', '$suhu2', '$keterangan2', '$suhu3', '$keterangan3', '$suhu4', '$keterangan4', '$gambar', '$gambar2', '$gambar3', '$gambar4')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function tambah_sipirok($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);



  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $gambar2 = upload2();
  if (!$gambar2) {
    return false;
  }

  $gambar3 = upload3();
  if (!$gambar3) {
    return false;
  }

  $gambar4 = upload4();
  if (!$gambar4) {
    return false;
  }


  // query insert data
  $query = "INSERT INTO sipirok VALUES ('', '$suhu', '$keterangan', '$suhu2', '$keterangan2', '$suhu3', '$keterangan3', '$suhu4', '$keterangan4', '$gambar', '$gambar2', '$gambar3', '$gambar4')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function tambah_raya($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);



  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $gambar2 = upload2();
  if (!$gambar2) {
    return false;
  }

  $gambar3 = upload3();
  if (!$gambar3) {
    return false;
  }

  $gambar4 = upload4();
  if (!$gambar4) {
    return false;
  }


  // query insert data
  $query = "INSERT INTO raya VALUES ('', '$suhu', '$keterangan', '$suhu2', '$keterangan2', '$suhu3', '$keterangan3', '$suhu4', '$keterangan4', '$gambar', '$gambar2', '$gambar3', '$gambar4')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function tambah_pandan($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);



  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $gambar2 = upload2();
  if (!$gambar2) {
    return false;
  }

  $gambar3 = upload3();
  if (!$gambar3) {
    return false;
  }

  $gambar4 = upload4();
  if (!$gambar4) {
    return false;
  }


  // query insert data
  $query = "INSERT INTO pandan VALUES ('', '$suhu', '$keterangan', '$suhu2', '$keterangan2', '$suhu3', '$keterangan3', '$suhu4', '$keterangan4', '$gambar', '$gambar2', '$gambar3', '$gambar4')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function tambah_seirampah($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);



  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $gambar2 = upload2();
  if (!$gambar2) {
    return false;
  }

  $gambar3 = upload3();
  if (!$gambar3) {
    return false;
  }

  $gambar4 = upload4();
  if (!$gambar4) {
    return false;
  }


  // query insert data
  $query = "INSERT INTO seirampah VALUES ('', '$suhu', '$keterangan', '$suhu2', '$keterangan2', '$suhu3', '$keterangan3', '$suhu4', '$keterangan4', '$gambar', '$gambar2', '$gambar3', '$gambar4')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function tambah_pangururan($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);



  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $gambar2 = upload2();
  if (!$gambar2) {
    return false;
  }

  $gambar3 = upload3();
  if (!$gambar3) {
    return false;
  }

  $gambar4 = upload4();
  if (!$gambar4) {
    return false;
  }


  // query insert data
  $query = "INSERT INTO pangururan VALUES ('', '$suhu', '$keterangan', '$suhu2', '$keterangan2', '$suhu3', '$keterangan3', '$suhu4', '$keterangan4', '$gambar', '$gambar2', '$gambar3', '$gambar4')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function tambah_kabanjahe($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $gambar2 = upload2();
  if (!$gambar2) {
    return false;
  }

  $gambar3 = upload3();
  if (!$gambar3) {
    return false;
  }

  $gambar4 = upload4();
  if (!$gambar4) {
    return false;
  }


  // query insert data
  $query = "INSERT INTO kabanjahe VALUES ('', '$suhu', '$keterangan', '$suhu2', '$keterangan2', '$suhu3', '$keterangan3', '$suhu4', '$keterangan4', '$gambar', '$gambar2', '$gambar3', '$gambar4')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function tambah_panyabungan($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $gambar2 = upload2();
  if (!$gambar2) {
    return false;
  }

  $gambar3 = upload3();
  if (!$gambar3) {
    return false;
  }

  $gambar4 = upload4();
  if (!$gambar4) {
    return false;
  }


  // query insert data
  $query = "INSERT INTO panyabungan VALUES ('', '$suhu', '$keterangan', '$suhu2', '$keterangan2', '$suhu3', '$keterangan3', '$suhu4', '$keterangan4', '$gambar', '$gambar2', '$gambar3', '$gambar4')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function tambah_lotu($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $gambar2 = upload2();
  if (!$gambar2) {
    return false;
  }

  $gambar3 = upload3();
  if (!$gambar3) {
    return false;
  }

  $gambar4 = upload4();
  if (!$gambar4) {
    return false;
  }


  // query insert data
  $query = "INSERT INTO lotu VALUES ('', '$suhu', '$keterangan', '$suhu2', '$keterangan2', '$suhu3', '$keterangan3', '$suhu4', '$keterangan4', '$gambar', '$gambar2', '$gambar3', '$gambar4')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function tambah_gunungtua($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $gambar2 = upload2();
  if (!$gambar2) {
    return false;
  }

  $gambar3 = upload3();
  if (!$gambar3) {
    return false;
  }

  $gambar4 = upload4();
  if (!$gambar4) {
    return false;
  }


  // query insert data
  $query = "INSERT INTO gunungtua VALUES ('', '$suhu', '$keterangan', '$suhu2', '$keterangan2', '$suhu3', '$keterangan3', '$suhu4', '$keterangan4', '$gambar', '$gambar2', '$gambar3', '$gambar4')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function tambah_sibuhuan($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $gambar2 = upload2();
  if (!$gambar2) {
    return false;
  }

  $gambar3 = upload3();
  if (!$gambar3) {
    return false;
  }

  $gambar4 = upload4();
  if (!$gambar4) {
    return false;
  }


  // query insert data
  $query = "INSERT INTO sibuhuan VALUES ('', '$suhu', '$keterangan', '$suhu2', '$keterangan2', '$suhu3', '$keterangan3', '$suhu4', '$keterangan4', '$gambar', '$gambar2', '$gambar3', '$gambar4')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}


function tambah_kisaran($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $gambar2 = upload2();
  if (!$gambar2) {
    return false;
  }

  $gambar3 = upload3();
  if (!$gambar3) {
    return false;
  }

  $gambar4 = upload4();
  if (!$gambar4) {
    return false;
  }
  // query insert data
  $query = "INSERT INTO kisaran VALUES ('', '$suhu', '$keterangan', '$suhu2', '$keterangan2', '$suhu3', '$keterangan3', '$suhu4', '$keterangan4', '$gambar', '$gambar2', '$gambar3', '$gambar4')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function tambah_salak($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $gambar2 = upload2();
  if (!$gambar2) {
    return false;
  }

  $gambar3 = upload3();
  if (!$gambar3) {
    return false;
  }

  $gambar4 = upload4();
  if (!$gambar4) {
    return false;
  }
  // query insert data
  $query = "INSERT INTO salak VALUES ('', '$suhu', '$keterangan', '$suhu2', '$keterangan2', '$suhu3', '$keterangan3', '$suhu4', '$keterangan4', '$gambar', '$gambar2', '$gambar3', '$gambar4')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function tambah_doloksanggul($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $gambar2 = upload2();
  if (!$gambar2) {
    return false;
  }

  $gambar3 = upload3();
  if (!$gambar3) {
    return false;
  }

  $gambar4 = upload4();
  if (!$gambar4) {
    return false;
  }
  // query insert data
  $query = "INSERT INTO doloksanggul VALUES ('', '$suhu', '$keterangan', '$suhu2', '$keterangan2', '$suhu3', '$keterangan3', '$suhu4', '$keterangan4', '$gambar', '$gambar2', '$gambar3', '$gambar4')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function tambah_lahomi($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $gambar2 = upload2();
  if (!$gambar2) {
    return false;
  }

  $gambar3 = upload3();
  if (!$gambar3) {
    return false;
  }

  $gambar4 = upload4();
  if (!$gambar4) {
    return false;
  }
  // query insert data
  $query = "INSERT INTO lahomi VALUES ('', '$suhu', '$keterangan', '$suhu2', '$keterangan2', '$suhu3', '$keterangan3', '$suhu4', '$keterangan4', '$gambar', '$gambar2', '$gambar3', '$gambar4')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function tambah_batubara($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $gambar2 = upload2();
  if (!$gambar2) {
    return false;
  }

  $gambar3 = upload3();
  if (!$gambar3) {
    return false;
  }

  $gambar4 = upload4();
  if (!$gambar4) {
    return false;
  }


  // query insert data
  $query = "INSERT INTO batu_bara VALUES ('', '$suhu', '$keterangan', '$suhu2', '$keterangan2', '$suhu3', '$keterangan3', '$suhu4', '$keterangan4', '$gambar', '$gambar2', '$gambar3', '$gambar4')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function tambah_sidikalang($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $gambar2 = upload2();
  if (!$gambar2) {
    return false;
  }

  $gambar3 = upload3();
  if (!$gambar3) {
    return false;
  }

  $gambar4 = upload4();
  if (!$gambar4) {
    return false;
  }


  // query insert data
  $query = "INSERT INTO sidikalang VALUES ('', '$suhu', '$keterangan', '$suhu2', '$keterangan2', '$suhu3', '$keterangan3', '$suhu4', '$keterangan4', '$gambar', '$gambar2', '$gambar3', '$gambar4')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function tambah_lubukpakam($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $gambar2 = upload2();
  if (!$gambar2) {
    return false;
  }

  $gambar3 = upload3();
  if (!$gambar3) {
    return false;
  }

  $gambar4 = upload4();
  if (!$gambar4) {
    return false;
  }


  // query insert data
  $query = "INSERT INTO lubukpakam VALUES ('', '$suhu', '$keterangan', '$suhu2', '$keterangan2', '$suhu3', '$keterangan3', '$suhu4', '$keterangan4', '$gambar', '$gambar2', '$gambar3', '$gambar4')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function tambah_gido($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $gambar2 = upload2();
  if (!$gambar2) {
    return false;
  }

  $gambar3 = upload3();
  if (!$gambar3) {
    return false;
  }

  $gambar4 = upload4();
  if (!$gambar4) {
    return false;
  }


  // query insert data
  $query = "INSERT INTO gido VALUES ('', '$suhu', '$keterangan', '$suhu2', '$keterangan2', '$suhu3', '$keterangan3', '$suhu4', '$keterangan4', '$gambar', '$gambar2', '$gambar3', '$gambar4')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function tambah_rantauparapat($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $gambar2 = upload2();
  if (!$gambar2) {
    return false;
  }

  $gambar3 = upload3();
  if (!$gambar3) {
    return false;
  }

  $gambar4 = upload4();
  if (!$gambar4) {
    return false;
  }


  // query insert data
  $query = "INSERT INTO rantauparapat VALUES ('', '$suhu', '$keterangan', '$suhu2', '$keterangan2', '$suhu3', '$keterangan3', '$suhu4', '$keterangan4', '$gambar', '$gambar2', '$gambar3', '$gambar4')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function tambah_telukdalam($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $gambar2 = upload2();
  if (!$gambar2) {
    return false;
  }

  $gambar3 = upload3();
  if (!$gambar3) {
    return false;
  }

  $gambar4 = upload4();
  if (!$gambar4) {
    return false;
  }


  // query insert data
  $query = "INSERT INTO telukdalam VALUES ('', '$suhu', '$keterangan', '$suhu2', '$keterangan2', '$suhu3', '$keterangan3', '$suhu4', '$keterangan4', '$gambar', '$gambar2', '$gambar3', '$gambar4')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function tambah_kotapinang($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $gambar2 = upload2();
  if (!$gambar2) {
    return false;
  }

  $gambar3 = upload3();
  if (!$gambar3) {
    return false;
  }

  $gambar4 = upload4();
  if (!$gambar4) {
    return false;
  }


  // query insert data
  $query = "INSERT INTO kotapinang VALUES ('', '$suhu', '$keterangan', '$suhu2', '$keterangan2', '$suhu3', '$keterangan3', '$suhu4', '$keterangan4', '$gambar', '$gambar2', '$gambar3', '$gambar4')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function tambah_aekkanopan($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $gambar2 = upload2();
  if (!$gambar2) {
    return false;
  }

  $gambar3 = upload3();
  if (!$gambar3) {
    return false;
  }

  $gambar4 = upload4();
  if (!$gambar4) {
    return false;
  }


  // query insert data
  $query = "INSERT INTO aekkanopan VALUES ('', '$suhu', '$keterangan', '$suhu2', '$keterangan2', '$suhu3', '$keterangan3', '$suhu4', '$keterangan4', '$gambar', '$gambar2', '$gambar3', '$gambar4')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function tambah_stabat($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $gambar2 = upload2();
  if (!$gambar2) {
    return false;
  }

  $gambar3 = upload3();
  if (!$gambar3) {
    return false;
  }

  $gambar4 = upload4();
  if (!$gambar4) {
    return false;
  }


  // query insert data
  $query = "INSERT INTO stabat VALUES ('', '$suhu', '$keterangan', '$suhu2', '$keterangan2', '$suhu3', '$keterangan3', '$suhu4', '$keterangan4', '$gambar', '$gambar2', '$gambar3', '$gambar4')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function upload()
{
  $namaFile = $_FILES['gambar']['name'];
  $ukuranFile = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmpName = $_FILES['gambar']['tmp_name'];
  // cek apakah tidak ada gambar yang diupload
  if ($error === 4) {
    echo "<script>
            alert('pilih gambar terlebih dahulu!');
            </script>";
    return false;
  }
  // cek apakah yang diupload adalah gambar
  $ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'gif'];
  $ekstensiGambar = explode('.', $namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));

  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
    echo "<script>
            alert('file yang anda upload bukan gambar!');
            </script>";
    return false;
  }

  // cek jika ukurannya terlalu besar
  if ($ukuranFile > 1000000) {
    echo "<script>
            alert('ukuran gambar terlalu besar!');
            </script>";
    return false;
  }

  // lolos pengecekan, gambar siap diupload
  // generate nama gambar baru
  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiGambar;


  move_uploaded_file($tmpName, 'dist/assets/img/' . $namaFileBaru);
  return $namaFileBaru;
}

function upload2()
{
  $namaFile = $_FILES['gambar2']['name'];
  $ukuranFile = $_FILES['gambar2']['size'];
  $error = $_FILES['gambar2']['error'];
  $tmpName = $_FILES['gambar2']['tmp_name'];
  // cek apakah tidak ada gambar yang diupload
  if ($error === 4) {
    echo "<script>
            alert('pilih gambar terlebih dahulu!');
            </script>";
    return false;
  }
  // cek apakah yang diupload adalah gambar
  $ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'gif'];
  $ekstensiGambar = explode('.', $namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));

  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
    echo "<script>
            alert('file yang anda upload bukan gambar!');
            </script>";
    return false;
  }

  // cek jika ukurannya terlalu besar
  if ($ukuranFile > 1000000) {
    echo "<script>
            alert('ukuran gambar terlalu besar!');
            </script>";
    return false;
  }

  // lolos pengecekan, gambar siap diupload
  // generate nama gambar baru
  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiGambar;


  move_uploaded_file($tmpName, 'dist/assets/img/' . $namaFileBaru);
  return $namaFileBaru;
}

function upload3()
{
  $namaFile = $_FILES['gambar3']['name'];
  $ukuranFile = $_FILES['gambar3']['size'];
  $error = $_FILES['gambar3']['error'];
  $tmpName = $_FILES['gambar3']['tmp_name'];
  // cek apakah tidak ada gambar yang diupload
  if ($error === 4) {
    echo "<script>
            alert('pilih gambar terlebih dahulu!');
            </script>";
    return false;
  }
  // cek apakah yang diupload adalah gambar
  $ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'gif'];
  $ekstensiGambar = explode('.', $namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));

  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
    echo "<script>
            alert('file yang anda upload bukan gambar!');
            </script>";
    return false;
  }

  // cek jika ukurannya terlalu besar
  if ($ukuranFile > 1000000) {
    echo "<script>
            alert('ukuran gambar terlalu besar!');
            </script>";
    return false;
  }

  // lolos pengecekan, gambar siap diupload
  // generate nama gambar baru
  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiGambar;


  move_uploaded_file($tmpName, 'dist/assets/img/' . $namaFileBaru);
  return $namaFileBaru;
}

function upload4()
{
  $namaFile = $_FILES['gambar4']['name'];
  $ukuranFile = $_FILES['gambar4']['size'];
  $error = $_FILES['gambar4']['error'];
  $tmpName = $_FILES['gambar4']['tmp_name'];
  // cek apakah tidak ada gambar yang diupload
  if ($error === 4) {
    echo "<script>
            alert('pilih gambar terlebih dahulu!');
            </script>";
    return false;
  }
  // cek apakah yang diupload adalah gambar
  $ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'gif'];
  $ekstensiGambar = explode('.', $namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));

  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
    echo "<script>
            alert('file yang anda upload bukan gambar!');
            </script>";
    return false;
  }

  // cek jika ukurannya terlalu besar
  if ($ukuranFile > 1000000) {
    echo "<script>
            alert('ukuran gambar terlalu besar!');
            </script>";
    return false;
  }

  // lolos pengecekan, gambar siap diupload
  // generate nama gambar baru
  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiGambar;


  move_uploaded_file($tmpName, 'dist/assets/img/' . $namaFileBaru);
  return $namaFileBaru;
}


function hapus($id)
{
  global $conn;
  $pilih = mysqli_query($conn, "SELECT * FROM medan WHERE id = '$id'");
  $data = mysqli_fetch_array($pilih);
  $foto = $data['gambar'];
  $foto2 = $data['gambar2'];
  $foto3 = $data['gambar3'];
  $foto4 = $data['gambar4'];
  unlink("dist/assets/img/" . $foto);
  unlink("dist/assets/img/" . $foto2);
  unlink("dist/assets/img/" . $foto3);
  unlink("dist/assets/img/" . $foto4);
  mysqli_query($conn, "DELETE FROM medan WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function hapus_tebing($id)
{
  global $conn;
  $pilih = mysqli_query($conn, "SELECT * FROM tebing WHERE id = '$id'");
  $data = mysqli_fetch_array($pilih);
  $foto = $data['gambar'];
  $foto2 = $data['gambar2'];
  $foto3 = $data['gambar3'];
  $foto4 = $data['gambar4'];
  unlink("dist/assets/img/" . $foto);
  unlink("dist/assets/img/" . $foto2);
  unlink("dist/assets/img/" . $foto3);
  unlink("dist/assets/img/" . $foto4);
  mysqli_query($conn, "DELETE FROM tebing WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function hapus_tanjungbalai($id)
{
  global $conn;
  $pilih = mysqli_query($conn, "SELECT * FROM tanjungbalai WHERE id = '$id'");
  $data = mysqli_fetch_array($pilih);
  $foto = $data['gambar'];
  $foto2 = $data['gambar2'];
  $foto3 = $data['gambar3'];
  $foto4 = $data['gambar4'];
  unlink("dist/assets/img/" . $foto);
  unlink("dist/assets/img/" . $foto2);
  unlink("dist/assets/img/" . $foto3);
  unlink("dist/assets/img/" . $foto4);
  mysqli_query($conn, "DELETE FROM tanjungbalai WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function hapus_sibolga($id)
{
  global $conn;
  $pilih = mysqli_query($conn, "SELECT * FROM sibolga WHERE id = '$id'");
  $data = mysqli_fetch_array($pilih);
  $foto = $data['gambar'];
  $foto2 = $data['gambar2'];
  $foto3 = $data['gambar3'];
  $foto4 = $data['gambar4'];
  unlink("dist/assets/img/" . $foto);
  unlink("dist/assets/img/" . $foto2);
  unlink("dist/assets/img/" . $foto3);
  unlink("dist/assets/img/" . $foto4);
  mysqli_query($conn, "DELETE FROM sibolga WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function hapus_siantar($id)
{
  global $conn;
  $pilih = mysqli_query($conn, "SELECT * FROM siantar WHERE id = '$id'");
  $data = mysqli_fetch_array($pilih);
  $foto = $data['gambar'];
  $foto2 = $data['gambar2'];
  $foto3 = $data['gambar3'];
  $foto4 = $data['gambar4'];
  unlink("dist/assets/img/" . $foto);
  unlink("dist/assets/img/" . $foto2);
  unlink("dist/assets/img/" . $foto3);
  unlink("dist/assets/img/" . $foto4);
  mysqli_query($conn, "DELETE FROM siantar WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function hapus_padangsidimpuan($id)
{
  global $conn;
  $pilih = mysqli_query($conn, "SELECT * FROM padangsidimpuan WHERE id = '$id'");
  $data = mysqli_fetch_array($pilih);
  $foto = $data['gambar'];
  $foto2 = $data['gambar2'];
  $foto3 = $data['gambar3'];
  $foto4 = $data['gambar4'];
  unlink("dist/assets/img/" . $foto);
  unlink("dist/assets/img/" . $foto2);
  unlink("dist/assets/img/" . $foto3);
  unlink("dist/assets/img/" . $foto4);
  mysqli_query($conn, "DELETE FROM padangsidimpuan WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function hapus_gunungsitoli($id)
{
  global $conn;
  $pilih = mysqli_query($conn, "SELECT * FROM gunungsitoli WHERE id = '$id'");
  $data = mysqli_fetch_array($pilih);
  $foto = $data['gambar'];
  $foto2 = $data['gambar2'];
  $foto3 = $data['gambar3'];
  $foto4 = $data['gambar4'];
  unlink("dist/assets/img/" . $foto);
  unlink("dist/assets/img/" . $foto2);
  unlink("dist/assets/img/" . $foto3);
  unlink("dist/assets/img/" . $foto4);
  mysqli_query($conn, "DELETE FROM gunungsitoli WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function hapus_binjai($id)
{
  global $conn;
  $pilih = mysqli_query($conn, "SELECT * FROM binjai WHERE id = '$id'");
  $data = mysqli_fetch_array($pilih);
  $foto = $data['gambar'];
  $foto2 = $data['gambar2'];
  $foto3 = $data['gambar3'];
  $foto4 = $data['gambar4'];
  unlink("dist/assets/img/" . $foto);
  unlink("dist/assets/img/" . $foto2);
  unlink("dist/assets/img/" . $foto3);
  unlink("dist/assets/img/" . $foto4);
  mysqli_query($conn, "DELETE FROM binjai WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function hapus_tarutung($id)
{
  global $conn;
  $pilih = mysqli_query($conn, "SELECT * FROM tarutung WHERE id = '$id'");
  $data = mysqli_fetch_array($pilih);
  $foto = $data['gambar'];
  $foto2 = $data['gambar2'];
  $foto3 = $data['gambar3'];
  $foto4 = $data['gambar4'];
  unlink("dist/assets/img/" . $foto);
  unlink("dist/assets/img/" . $foto2);
  unlink("dist/assets/img/" . $foto3);
  unlink("dist/assets/img/" . $foto4);
  mysqli_query($conn, "DELETE FROM tarutung WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function hapus_balige($id)
{
  global $conn;
  $pilih = mysqli_query($conn, "SELECT * FROM balige WHERE id = '$id'");
  $data = mysqli_fetch_array($pilih);
  $foto = $data['gambar'];
  $foto2 = $data['gambar2'];
  $foto3 = $data['gambar3'];
  $foto4 = $data['gambar4'];
  unlink("dist/assets/img/" . $foto);
  unlink("dist/assets/img/" . $foto2);
  unlink("dist/assets/img/" . $foto3);
  unlink("dist/assets/img/" . $foto4);
  mysqli_query($conn, "DELETE FROM balige WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function hapus_pandan($id)
{
  global $conn;
  $pilih = mysqli_query($conn, "SELECT * FROM pandan WHERE id = '$id'");
  $data = mysqli_fetch_array($pilih);
  $foto = $data['gambar'];
  $foto2 = $data['gambar2'];
  $foto3 = $data['gambar3'];
  $foto4 = $data['gambar4'];
  unlink("dist/assets/img/" . $foto);
  unlink("dist/assets/img/" . $foto2);
  unlink("dist/assets/img/" . $foto3);
  unlink("dist/assets/img/" . $foto4);
  mysqli_query($conn, "DELETE FROM pandan WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function hapus_sipirok($id)
{
  global $conn;
  $pilih = mysqli_query($conn, "SELECT * FROM sipirok WHERE id = '$id'");
  $data = mysqli_fetch_array($pilih);
  $foto = $data['gambar'];
  $foto2 = $data['gambar2'];
  $foto3 = $data['gambar3'];
  $foto4 = $data['gambar4'];
  unlink("dist/assets/img/" . $foto);
  unlink("dist/assets/img/" . $foto2);
  unlink("dist/assets/img/" . $foto3);
  unlink("dist/assets/img/" . $foto4);
  mysqli_query($conn, "DELETE FROM sipirok WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function hapus_raya($id)
{
  global $conn;
  $pilih = mysqli_query($conn, "SELECT * FROM raya WHERE id = '$id'");
  $data = mysqli_fetch_array($pilih);
  $foto = $data['gambar'];
  $foto2 = $data['gambar2'];
  $foto3 = $data['gambar3'];
  $foto4 = $data['gambar4'];
  unlink("dist/assets/img/" . $foto);
  unlink("dist/assets/img/" . $foto2);
  unlink("dist/assets/img/" . $foto3);
  unlink("dist/assets/img/" . $foto4);
  mysqli_query($conn, "DELETE FROM raya WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function hapus_seirampah($id)
{
  global $conn;
  $pilih = mysqli_query($conn, "SELECT * FROM seirampah WHERE id = '$id'");
  $data = mysqli_fetch_array($pilih);
  $foto = $data['gambar'];
  $foto2 = $data['gambar2'];
  $foto3 = $data['gambar3'];
  $foto4 = $data['gambar4'];
  unlink("dist/assets/img/" . $foto);
  unlink("dist/assets/img/" . $foto2);
  unlink("dist/assets/img/" . $foto3);
  unlink("dist/assets/img/" . $foto4);
  mysqli_query($conn, "DELETE FROM seirampah WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function hapus_pangururan($id)
{
  global $conn;
  $pilih = mysqli_query($conn, "SELECT * FROM pangururan WHERE id = '$id'");
  $data = mysqli_fetch_array($pilih);
  $foto = $data['gambar'];
  $foto2 = $data['gambar2'];
  $foto3 = $data['gambar3'];
  $foto4 = $data['gambar4'];
  unlink("dist/assets/img/" . $foto);
  unlink("dist/assets/img/" . $foto2);
  unlink("dist/assets/img/" . $foto3);
  unlink("dist/assets/img/" . $foto4);
  mysqli_query($conn, "DELETE FROM pangururan WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function hapus_salak($id)
{
  global $conn;
  $pilih = mysqli_query($conn, "SELECT * FROM salak WHERE id = '$id'");
  $data = mysqli_fetch_array($pilih);
  $foto = $data['gambar'];
  $foto2 = $data['gambar2'];
  $foto3 = $data['gambar3'];
  $foto4 = $data['gambar4'];
  unlink("dist/assets/img/" . $foto);
  unlink("dist/assets/img/" . $foto2);
  unlink("dist/assets/img/" . $foto3);
  unlink("dist/assets/img/" . $foto4);
  mysqli_query($conn, "DELETE FROM salak WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function hapus_kabanjahe($id)
{
  global $conn;
  $pilih = mysqli_query($conn, "SELECT * FROM kabanjahe WHERE id = '$id'");
  $data = mysqli_fetch_array($pilih);
  $foto = $data['gambar'];
  $foto2 = $data['gambar2'];
  $foto3 = $data['gambar3'];
  $foto4 = $data['gambar4'];
  unlink("dist/assets/img/" . $foto);
  unlink("dist/assets/img/" . $foto2);
  unlink("dist/assets/img/" . $foto3);
  unlink("dist/assets/img/" . $foto4);
  mysqli_query($conn, "DELETE FROM kabanjahe WHERE id = $id");
  return mysqli_affected_rows($conn);
}


function hapus_gunungtua($id)
{
  global $conn;
  $pilih = mysqli_query($conn, "SELECT * FROM gunungtua WHERE id = '$id'");
  $data = mysqli_fetch_array($pilih);
  $foto = $data['gambar'];
  $foto2 = $data['gambar2'];
  $foto3 = $data['gambar3'];
  $foto4 = $data['gambar4'];
  unlink("dist/assets/img/" . $foto);
  unlink("dist/assets/img/" . $foto2);
  unlink("dist/assets/img/" . $foto3);
  unlink("dist/assets/img/" . $foto4);
  mysqli_query($conn, "DELETE FROM gunungtua WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function hapus_telukdalam($id)
{
  global $conn;
  $pilih = mysqli_query($conn, "SELECT * FROM telukdalam WHERE id = '$id'");
  $data = mysqli_fetch_array($pilih);
  $foto = $data['gambar'];
  $foto2 = $data['gambar2'];
  $foto3 = $data['gambar3'];
  $foto4 = $data['gambar4'];
  unlink("dist/assets/img/" . $foto);
  unlink("dist/assets/img/" . $foto2);
  unlink("dist/assets/img/" . $foto3);
  unlink("dist/assets/img/" . $foto4);
  mysqli_query($conn, "DELETE FROM telukdalam WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function hapus_lahomi($id)
{
  global $conn;
  $pilih = mysqli_query($conn, "SELECT * FROM lahomi WHERE id = '$id'");
  $data = mysqli_fetch_array($pilih);
  $foto = $data['gambar'];
  $foto2 = $data['gambar2'];
  $foto3 = $data['gambar3'];
  $foto4 = $data['gambar4'];
  unlink("dist/assets/img/" . $foto);
  unlink("dist/assets/img/" . $foto2);
  unlink("dist/assets/img/" . $foto3);
  unlink("dist/assets/img/" . $foto4);
  mysqli_query($conn, "DELETE FROM lahomi WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function hapus_gido($id)
{
  global $conn;
  $pilih = mysqli_query($conn, "SELECT * FROM gido WHERE id = '$id'");
  $data = mysqli_fetch_array($pilih);
  $foto = $data['gambar'];
  $foto2 = $data['gambar2'];
  $foto3 = $data['gambar3'];
  $foto4 = $data['gambar4'];
  unlink("dist/assets/img/" . $foto);
  unlink("dist/assets/img/" . $foto2);
  unlink("dist/assets/img/" . $foto3);
  unlink("dist/assets/img/" . $foto4);
  mysqli_query($conn, "DELETE FROM gido WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function hapus_sibuhuan($id)
{
  global $conn;
  $pilih = mysqli_query($conn, "SELECT * FROM sibuhuan WHERE id = '$id'");
  $data = mysqli_fetch_array($pilih);
  $foto = $data['gambar'];
  $foto2 = $data['gambar2'];
  $foto3 = $data['gambar3'];
  $foto4 = $data['gambar4'];
  unlink("dist/assets/img/" . $foto);
  unlink("dist/assets/img/" . $foto2);
  unlink("dist/assets/img/" . $foto3);
  unlink("dist/assets/img/" . $foto4);
  mysqli_query($conn, "DELETE FROM sibuhuan WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function hapus_panyabungan($id)
{
  global $conn;
  $pilih = mysqli_query($conn, "SELECT * FROM panyabungan WHERE id = '$id'");
  $data = mysqli_fetch_array($pilih);
  $foto = $data['gambar'];
  $foto2 = $data['gambar2'];
  $foto3 = $data['gambar3'];
  $foto4 = $data['gambar4'];
  unlink("dist/assets/img/" . $foto);
  unlink("dist/assets/img/" . $foto2);
  unlink("dist/assets/img/" . $foto3);
  unlink("dist/assets/img/" . $foto4);
  mysqli_query($conn, "DELETE FROM panyabungan WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function hapus_rantauparapat($id)
{
  global $conn;
  $pilih = mysqli_query($conn, "SELECT * FROM rantauparapat WHERE id = '$id'");
  $data = mysqli_fetch_array($pilih);
  $foto = $data['gambar'];
  $foto2 = $data['gambar2'];
  $foto3 = $data['gambar3'];
  $foto4 = $data['gambar4'];
  unlink("dist/assets/img/" . $foto);
  unlink("dist/assets/img/" . $foto2);
  unlink("dist/assets/img/" . $foto3);
  unlink("dist/assets/img/" . $foto4);
  mysqli_query($conn, "DELETE FROM rantauparapat WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function hapus_doloksanggul($id)
{
  global $conn;
  $pilih = mysqli_query($conn, "SELECT * FROM doloksanggul WHERE id = '$id'");
  $data = mysqli_fetch_array($pilih);
  $foto = $data['gambar'];
  $foto2 = $data['gambar2'];
  $foto3 = $data['gambar3'];
  $foto4 = $data['gambar4'];
  unlink("dist/assets/img/" . $foto);
  unlink("dist/assets/img/" . $foto2);
  unlink("dist/assets/img/" . $foto3);
  unlink("dist/assets/img/" . $foto4);
  mysqli_query($conn, "DELETE FROM doloksanggul WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function hapus_kisaran($id)
{
  global $conn;
  $pilih = mysqli_query($conn, "SELECT * FROM kisaran WHERE id = '$id'");
  $data = mysqli_fetch_array($pilih);
  $foto = $data['gambar'];
  $foto2 = $data['gambar2'];
  $foto3 = $data['gambar3'];
  $foto4 = $data['gambar4'];
  unlink("dist/assets/img/" . $foto);
  unlink("dist/assets/img/" . $foto2);
  unlink("dist/assets/img/" . $foto3);
  unlink("dist/assets/img/" . $foto4);
  mysqli_query($conn, "DELETE FROM kisaran WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function hapus_batubara($id)
{
  global $conn;
  $pilih = mysqli_query($conn, "SELECT * FROM batu_bara WHERE id = '$id'");
  $data = mysqli_fetch_array($pilih);
  $foto = $data['gambar'];
  $foto2 = $data['gambar2'];
  $foto3 = $data['gambar3'];
  $foto4 = $data['gambar4'];
  unlink("dist/assets/img/" . $foto);
  unlink("dist/assets/img/" . $foto2);
  unlink("dist/assets/img/" . $foto3);
  unlink("dist/assets/img/" . $foto4);
  mysqli_query($conn, "DELETE FROM batu_bara WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function hapus_sidikalang($id)
{
  global $conn;
  $pilih = mysqli_query($conn, "SELECT * FROM sidikalang WHERE id = '$id'");
  $data = mysqli_fetch_array($pilih);
  $foto = $data['gambar'];
  $foto2 = $data['gambar2'];
  $foto3 = $data['gambar3'];
  $foto4 = $data['gambar4'];
  unlink("dist/assets/img/" . $foto);
  unlink("dist/assets/img/" . $foto2);
  unlink("dist/assets/img/" . $foto3);
  unlink("dist/assets/img/" . $foto4);
  mysqli_query($conn, "DELETE FROM sidikalang WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function hapus_lotu($id)
{
  global $conn;
  $pilih = mysqli_query($conn, "SELECT * FROM lotu WHERE id = '$id'");
  $data = mysqli_fetch_array($pilih);
  $foto = $data['gambar'];
  $foto2 = $data['gambar2'];
  $foto3 = $data['gambar3'];
  $foto4 = $data['gambar4'];
  unlink("dist/assets/img/" . $foto);
  unlink("dist/assets/img/" . $foto2);
  unlink("dist/assets/img/" . $foto3);
  unlink("dist/assets/img/" . $foto4);
  mysqli_query($conn, "DELETE FROM lotu WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function hapus_lubukpakam($id)
{
  global $conn;
  $pilih = mysqli_query($conn, "SELECT * FROM lubukpakam WHERE id = '$id'");
  $data = mysqli_fetch_array($pilih);
  $foto = $data['gambar'];
  $foto2 = $data['gambar2'];
  $foto3 = $data['gambar3'];
  $foto4 = $data['gambar4'];
  unlink("dist/assets/img/" . $foto);
  unlink("dist/assets/img/" . $foto2);
  unlink("dist/assets/img/" . $foto3);
  unlink("dist/assets/img/" . $foto4);
  mysqli_query($conn, "DELETE FROM lubukpakam WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function hapus_kotapinang($id)
{
  global $conn;
  $pilih = mysqli_query($conn, "SELECT * FROM kotapinang WHERE id = '$id'");
  $data = mysqli_fetch_array($pilih);
  $foto = $data['gambar'];
  $foto2 = $data['gambar2'];
  $foto3 = $data['gambar3'];
  $foto4 = $data['gambar4'];
  unlink("dist/assets/img/" . $foto);
  unlink("dist/assets/img/" . $foto2);
  unlink("dist/assets/img/" . $foto3);
  unlink("dist/assets/img/" . $foto4);
  mysqli_query($conn, "DELETE FROM kotapinang WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function hapus_aekkanopan($id)
{
  global $conn;
  $pilih = mysqli_query($conn, "SELECT * FROM aekkanopan WHERE id = '$id'");
  $data = mysqli_fetch_array($pilih);
  $foto = $data['gambar'];
  $foto2 = $data['gambar2'];
  $foto3 = $data['gambar3'];
  $foto4 = $data['gambar4'];
  unlink("dist/assets/img/" . $foto);
  unlink("dist/assets/img/" . $foto2);
  unlink("dist/assets/img/" . $foto3);
  unlink("dist/assets/img/" . $foto4);
  mysqli_query($conn, "DELETE FROM aekkanopan WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function hapus_stabat($id)
{
  global $conn;
  $pilih = mysqli_query($conn, "SELECT * FROM stabat WHERE id = '$id'");
  $data = mysqli_fetch_array($pilih);
  $foto = $data['gambar'];
  $foto2 = $data['gambar2'];
  $foto3 = $data['gambar3'];
  $foto4 = $data['gambar4'];
  unlink("dist/assets/img/" . $foto);
  unlink("dist/assets/img/" . $foto2);
  unlink("dist/assets/img/" . $foto3);
  unlink("dist/assets/img/" . $foto4);
  mysqli_query($conn, "DELETE FROM stabat WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function ubah_gunungtua($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $id = $data["id"];
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  $gambarLama = htmlspecialchars($data["gambarLama"]);
  $gambarLama2 = htmlspecialchars($data["gambarLama2"]);
  $gambarLama3 = htmlspecialchars($data["gambarLama3"]);
  $gambarLama4 = htmlspecialchars($data["gambarLama4"]);

  // cek apakah user pilih gambar baru atau tidak
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }

  if ($_FILES['gambar2']['error'] === 4) {
    $gambar2 = $gambarLama2;
  } else {
    $gambar2 = upload2();
  }

  if ($_FILES['gambar3']['error'] === 4) {
    $gambar3 = $gambarLama3;
  } else {
    $gambar3 = upload3();
  }

  if ($_FILES['gambar4']['error'] === 4) {
    $gambar4 = $gambarLama4;
  } else {
    $gambar4 = upload4();
  }
  // query insert data
  $query = "UPDATE gunungtua SET
            suhu = '$suhu',
            keterangan = '$keterangan',
            suhu2 = '$suhu2',
            keterangan2 = '$keterangan2',
            suhu3 = '$suhu3',
            keterangan3 = '$keterangan3',
            suhu4 = '$suhu4',
            keterangan4 = '$keterangan4',
            gambar = '$gambar',
            gambar2 = '$gambar2',
            gambar3 = '$gambar3',
            gambar4 = '$gambar4'
            WHERE id = $id
            ";


  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function ubah_tebing($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $id = $data["id"];
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  $gambarLama = htmlspecialchars($data["gambarLama"]);
  $gambarLama2 = htmlspecialchars($data["gambarLama2"]);
  $gambarLama3 = htmlspecialchars($data["gambarLama3"]);
  $gambarLama4 = htmlspecialchars($data["gambarLama4"]);

  // cek apakah user pilih gambar baru atau tidak
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }

  if ($_FILES['gambar2']['error'] === 4) {
    $gambar2 = $gambarLama2;
  } else {
    $gambar2 = upload2();
  }

  if ($_FILES['gambar3']['error'] === 4) {
    $gambar3 = $gambarLama3;
  } else {
    $gambar3 = upload3();
  }

  if ($_FILES['gambar4']['error'] === 4) {
    $gambar4 = $gambarLama4;
  } else {
    $gambar4 = upload4();
  }
  // query insert data
  $query = "UPDATE tebing SET
            suhu = '$suhu',
            keterangan = '$keterangan',
            suhu2 = '$suhu2',
            keterangan2 = '$keterangan2',
            suhu3 = '$suhu3',
            keterangan3 = '$keterangan3',
            suhu4 = '$suhu4',
            keterangan4 = '$keterangan4',
            gambar = '$gambar',
            gambar2 = '$gambar2',
            gambar3 = '$gambar3',
            gambar4 = '$gambar4'
            WHERE id = $id
            ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function ubah_tanjungbalai($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $id = $data["id"];
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  $gambarLama = htmlspecialchars($data["gambarLama"]);
  $gambarLama2 = htmlspecialchars($data["gambarLama2"]);
  $gambarLama3 = htmlspecialchars($data["gambarLama3"]);
  $gambarLama4 = htmlspecialchars($data["gambarLama4"]);

  // cek apakah user pilih gambar baru atau tidak
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }

  if ($_FILES['gambar2']['error'] === 4) {
    $gambar2 = $gambarLama2;
  } else {
    $gambar2 = upload2();
  }

  if ($_FILES['gambar3']['error'] === 4) {
    $gambar3 = $gambarLama3;
  } else {
    $gambar3 = upload3();
  }

  if ($_FILES['gambar4']['error'] === 4) {
    $gambar4 = $gambarLama4;
  } else {
    $gambar4 = upload4();
  }
  // query insert data
  $query = "UPDATE tanjungbalai SET
            suhu = '$suhu',
            keterangan = '$keterangan',
            suhu2 = '$suhu2',
            keterangan2 = '$keterangan2',
            suhu3 = '$suhu3',
            keterangan3 = '$keterangan3',
            suhu4 = '$suhu4',
            keterangan4 = '$keterangan4',
            gambar = '$gambar',
            gambar2 = '$gambar2',
            gambar3 = '$gambar3',
            gambar4 = '$gambar4'
            WHERE id = $id
            ";


  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}


function ubah_siantar($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $id = $data["id"];
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  $gambarLama = htmlspecialchars($data["gambarLama"]);
  $gambarLama2 = htmlspecialchars($data["gambarLama2"]);
  $gambarLama3 = htmlspecialchars($data["gambarLama3"]);
  $gambarLama4 = htmlspecialchars($data["gambarLama4"]);

  // cek apakah user pilih gambar baru atau tidak
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }

  if ($_FILES['gambar2']['error'] === 4) {
    $gambar2 = $gambarLama2;
  } else {
    $gambar2 = upload2();
  }

  if ($_FILES['gambar3']['error'] === 4) {
    $gambar3 = $gambarLama3;
  } else {
    $gambar3 = upload3();
  }

  if ($_FILES['gambar4']['error'] === 4) {
    $gambar4 = $gambarLama4;
  } else {
    $gambar4 = upload4();
  }
  // query insert data
  $query = "UPDATE siantar SET
            suhu = '$suhu',
            keterangan = '$keterangan',
            suhu2 = '$suhu2',
            keterangan2 = '$keterangan2',
            suhu3 = '$suhu3',
            keterangan3 = '$keterangan3',
            suhu4 = '$suhu4',
            keterangan4 = '$keterangan4',
            gambar = '$gambar',
            gambar2 = '$gambar2',
            gambar3 = '$gambar3',
            gambar4 = '$gambar4'
            WHERE id = $id
            ";


  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function ubah_sibolga($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $id = $data["id"];
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  $gambarLama = htmlspecialchars($data["gambarLama"]);
  $gambarLama2 = htmlspecialchars($data["gambarLama2"]);
  $gambarLama3 = htmlspecialchars($data["gambarLama3"]);
  $gambarLama4 = htmlspecialchars($data["gambarLama4"]);

  // cek apakah user pilih gambar baru atau tidak
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }

  if ($_FILES['gambar2']['error'] === 4) {
    $gambar2 = $gambarLama2;
  } else {
    $gambar2 = upload2();
  }

  if ($_FILES['gambar3']['error'] === 4) {
    $gambar3 = $gambarLama3;
  } else {
    $gambar3 = upload3();
  }

  if ($_FILES['gambar4']['error'] === 4) {
    $gambar4 = $gambarLama4;
  } else {
    $gambar4 = upload4();
  }
  // query insert data
  $query = "UPDATE sibolga SET
            suhu = '$suhu',
            keterangan = '$keterangan',
            suhu2 = '$suhu2',
            keterangan2 = '$keterangan2',
            suhu3 = '$suhu3',
            keterangan3 = '$keterangan3',
            suhu4 = '$suhu4',
            keterangan4 = '$keterangan4',
            gambar = '$gambar',
            gambar2 = '$gambar2',
            gambar3 = '$gambar3',
            gambar4 = '$gambar4'
            WHERE id = $id
            ";


  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function ubah_padangsidimpuan($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $id = $data["id"];
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  $gambarLama = htmlspecialchars($data["gambarLama"]);
  $gambarLama2 = htmlspecialchars($data["gambarLama2"]);
  $gambarLama3 = htmlspecialchars($data["gambarLama3"]);
  $gambarLama4 = htmlspecialchars($data["gambarLama4"]);

  // cek apakah user pilih gambar baru atau tidak
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }

  if ($_FILES['gambar2']['error'] === 4) {
    $gambar2 = $gambarLama2;
  } else {
    $gambar2 = upload2();
  }

  if ($_FILES['gambar3']['error'] === 4) {
    $gambar3 = $gambarLama3;
  } else {
    $gambar3 = upload3();
  }

  if ($_FILES['gambar4']['error'] === 4) {
    $gambar4 = $gambarLama4;
  } else {
    $gambar4 = upload4();
  }
  // query insert data
  $query = "UPDATE sidimpuan SET
            suhu = '$suhu',
            keterangan = '$keterangan',
            suhu2 = '$suhu2',
            keterangan2 = '$keterangan2',
            suhu3 = '$suhu3',
            keterangan3 = '$keterangan3',
            suhu4 = '$suhu4',
            keterangan4 = '$keterangan4',
            gambar = '$gambar',
            gambar2 = '$gambar2',
            gambar3 = '$gambar3',
            gambar4 = '$gambar4'
            WHERE id = $id
            ";


  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function ubah_gunungsitoli($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $id = $data["id"];
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  $gambarLama = htmlspecialchars($data["gambarLama"]);
  $gambarLama2 = htmlspecialchars($data["gambarLama2"]);
  $gambarLama3 = htmlspecialchars($data["gambarLama3"]);
  $gambarLama4 = htmlspecialchars($data["gambarLama4"]);

  // cek apakah user pilih gambar baru atau tidak
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }

  if ($_FILES['gambar2']['error'] === 4) {
    $gambar2 = $gambarLama2;
  } else {
    $gambar2 = upload2();
  }

  if ($_FILES['gambar3']['error'] === 4) {
    $gambar3 = $gambarLama3;
  } else {
    $gambar3 = upload3();
  }

  if ($_FILES['gambar4']['error'] === 4) {
    $gambar4 = $gambarLama4;
  } else {
    $gambar4 = upload4();
  }
  // query insert data
  $query = "UPDATE gunungsitoli SET
            suhu = '$suhu',
            keterangan = '$keterangan',
            suhu2 = '$suhu2',
            keterangan2 = '$keterangan2',
            suhu3 = '$suhu3',
            keterangan3 = '$keterangan3',
            suhu4 = '$suhu4',
            keterangan4 = '$keterangan4',
            gambar = '$gambar',
            gambar2 = '$gambar2',
            gambar3 = '$gambar3',
            gambar4 = '$gambar4'
            WHERE id = $id
            ";


  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function ubah_binjai($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $id = $data["id"];
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  $gambarLama = htmlspecialchars($data["gambarLama"]);
  $gambarLama2 = htmlspecialchars($data["gambarLama2"]);
  $gambarLama3 = htmlspecialchars($data["gambarLama3"]);
  $gambarLama4 = htmlspecialchars($data["gambarLama4"]);

  // cek apakah user pilih gambar baru atau tidak
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }

  if ($_FILES['gambar2']['error'] === 4) {
    $gambar2 = $gambarLama2;
  } else {
    $gambar2 = upload2();
  }

  if ($_FILES['gambar3']['error'] === 4) {
    $gambar3 = $gambarLama3;
  } else {
    $gambar3 = upload3();
  }

  if ($_FILES['gambar4']['error'] === 4) {
    $gambar4 = $gambarLama4;
  } else {
    $gambar4 = upload4();
  }
  // query insert data
  $query = "UPDATE binjai SET
            suhu = '$suhu',
            keterangan = '$keterangan',
            suhu2 = '$suhu2',
            keterangan2 = '$keterangan2',
            suhu3 = '$suhu3',
            keterangan3 = '$keterangan3',
            suhu4 = '$suhu4',
            keterangan4 = '$keterangan4',
            gambar = '$gambar',
            gambar2 = '$gambar2',
            gambar3 = '$gambar3',
            gambar4 = '$gambar4'
            WHERE id = $id
            ";


  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function ubah_balige($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $id = $data["id"];
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  $gambarLama = htmlspecialchars($data["gambarLama"]);
  $gambarLama2 = htmlspecialchars($data["gambarLama2"]);
  $gambarLama3 = htmlspecialchars($data["gambarLama3"]);
  $gambarLama4 = htmlspecialchars($data["gambarLama4"]);

  // cek apakah user pilih gambar baru atau tidak
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }

  if ($_FILES['gambar2']['error'] === 4) {
    $gambar2 = $gambarLama2;
  } else {
    $gambar2 = upload2();
  }

  if ($_FILES['gambar3']['error'] === 4) {
    $gambar3 = $gambarLama3;
  } else {
    $gambar3 = upload3();
  }

  if ($_FILES['gambar4']['error'] === 4) {
    $gambar4 = $gambarLama4;
  } else {
    $gambar4 = upload4();
  }
  // query insert data
  $query = "UPDATE balige SET
            suhu = '$suhu',
            keterangan = '$keterangan',
            suhu2 = '$suhu2',
            keterangan2 = '$keterangan2',
            suhu3 = '$suhu3',
            keterangan3 = '$keterangan3',
            suhu4 = '$suhu4',
            keterangan4 = '$keterangan4',
            gambar = '$gambar',
            gambar2 = '$gambar2',
            gambar3 = '$gambar3',
            gambar4 = '$gambar4'
            WHERE id = $id
            ";


  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function ubah_tarutung($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $id = $data["id"];
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  $gambarLama = htmlspecialchars($data["gambarLama"]);
  $gambarLama2 = htmlspecialchars($data["gambarLama2"]);
  $gambarLama3 = htmlspecialchars($data["gambarLama3"]);
  $gambarLama4 = htmlspecialchars($data["gambarLama4"]);

  // cek apakah user pilih gambar baru atau tidak
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }

  if ($_FILES['gambar2']['error'] === 4) {
    $gambar2 = $gambarLama2;
  } else {
    $gambar2 = upload2();
  }

  if ($_FILES['gambar3']['error'] === 4) {
    $gambar3 = $gambarLama3;
  } else {
    $gambar3 = upload3();
  }

  if ($_FILES['gambar4']['error'] === 4) {
    $gambar4 = $gambarLama4;
  } else {
    $gambar4 = upload4();
  }
  // query insert data
  $query = "UPDATE tarutung SET
            suhu = '$suhu',
            keterangan = '$keterangan',
            suhu2 = '$suhu2',
            keterangan2 = '$keterangan2',
            suhu3 = '$suhu3',
            keterangan3 = '$keterangan3',
            suhu4 = '$suhu4',
            keterangan4 = '$keterangan4',
            gambar = '$gambar',
            gambar2 = '$gambar2',
            gambar3 = '$gambar3',
            gambar4 = '$gambar4'
            WHERE id = $id
            ";


  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function ubah_pandan($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $id = $data["id"];
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  $gambarLama = htmlspecialchars($data["gambarLama"]);
  $gambarLama2 = htmlspecialchars($data["gambarLama2"]);
  $gambarLama3 = htmlspecialchars($data["gambarLama3"]);
  $gambarLama4 = htmlspecialchars($data["gambarLama4"]);

  // cek apakah user pilih gambar baru atau tidak
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }

  if ($_FILES['gambar2']['error'] === 4) {
    $gambar2 = $gambarLama2;
  } else {
    $gambar2 = upload2();
  }

  if ($_FILES['gambar3']['error'] === 4) {
    $gambar3 = $gambarLama3;
  } else {
    $gambar3 = upload3();
  }

  if ($_FILES['gambar4']['error'] === 4) {
    $gambar4 = $gambarLama4;
  } else {
    $gambar4 = upload4();
  }
  // query insert data
  $query = "UPDATE pandan SET
            suhu = '$suhu',
            keterangan = '$keterangan',
            suhu2 = '$suhu2',
            keterangan2 = '$keterangan2',
            suhu3 = '$suhu3',
            keterangan3 = '$keterangan3',
            suhu4 = '$suhu4',
            keterangan4 = '$keterangan4',
            gambar = '$gambar',
            gambar2 = '$gambar2',
            gambar3 = '$gambar3',
            gambar4 = '$gambar4'
            WHERE id = $id
            ";


  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function ubah_sipirok($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $id = $data["id"];
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  $gambarLama = htmlspecialchars($data["gambarLama"]);
  $gambarLama2 = htmlspecialchars($data["gambarLama2"]);
  $gambarLama3 = htmlspecialchars($data["gambarLama3"]);
  $gambarLama4 = htmlspecialchars($data["gambarLama4"]);

  // cek apakah user pilih gambar baru atau tidak
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }

  if ($_FILES['gambar2']['error'] === 4) {
    $gambar2 = $gambarLama2;
  } else {
    $gambar2 = upload2();
  }

  if ($_FILES['gambar3']['error'] === 4) {
    $gambar3 = $gambarLama3;
  } else {
    $gambar3 = upload3();
  }

  if ($_FILES['gambar4']['error'] === 4) {
    $gambar4 = $gambarLama4;
  } else {
    $gambar4 = upload4();
  }
  // query insert data
  $query = "UPDATE sipirok SET
            suhu = '$suhu',
            keterangan = '$keterangan',
            suhu2 = '$suhu2',
            keterangan2 = '$keterangan2',
            suhu3 = '$suhu3',
            keterangan3 = '$keterangan3',
            suhu4 = '$suhu4',
            keterangan4 = '$keterangan4',
            gambar = '$gambar',
            gambar2 = '$gambar2',
            gambar3 = '$gambar3',
            gambar4 = '$gambar4'
            WHERE id = $id
            ";


  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function ubah_raya($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $id = $data["id"];
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  $gambarLama = htmlspecialchars($data["gambarLama"]);
  $gambarLama2 = htmlspecialchars($data["gambarLama2"]);
  $gambarLama3 = htmlspecialchars($data["gambarLama3"]);
  $gambarLama4 = htmlspecialchars($data["gambarLama4"]);

  // cek apakah user pilih gambar baru atau tidak
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }

  if ($_FILES['gambar2']['error'] === 4) {
    $gambar2 = $gambarLama2;
  } else {
    $gambar2 = upload2();
  }

  if ($_FILES['gambar3']['error'] === 4) {
    $gambar3 = $gambarLama3;
  } else {
    $gambar3 = upload3();
  }

  if ($_FILES['gambar4']['error'] === 4) {
    $gambar4 = $gambarLama4;
  } else {
    $gambar4 = upload4();
  }
  // query insert data
  $query = "UPDATE raya SET
            suhu = '$suhu',
            keterangan = '$keterangan',
            suhu2 = '$suhu2',
            keterangan2 = '$keterangan2',
            suhu3 = '$suhu3',
            keterangan3 = '$keterangan3',
            suhu4 = '$suhu4',
            keterangan4 = '$keterangan4',
            gambar = '$gambar',
            gambar2 = '$gambar2',
            gambar3 = '$gambar3',
            gambar4 = '$gambar4'
            WHERE id = $id
            ";


  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}


function ubah_seirampah($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $id = $data["id"];
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  $gambarLama = htmlspecialchars($data["gambarLama"]);
  $gambarLama2 = htmlspecialchars($data["gambarLama2"]);
  $gambarLama3 = htmlspecialchars($data["gambarLama3"]);
  $gambarLama4 = htmlspecialchars($data["gambarLama4"]);

  // cek apakah user pilih gambar baru atau tidak
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }

  if ($_FILES['gambar2']['error'] === 4) {
    $gambar2 = $gambarLama2;
  } else {
    $gambar2 = upload2();
  }

  if ($_FILES['gambar3']['error'] === 4) {
    $gambar3 = $gambarLama3;
  } else {
    $gambar3 = upload3();
  }

  if ($_FILES['gambar4']['error'] === 4) {
    $gambar4 = $gambarLama4;
  } else {
    $gambar4 = upload4();
  }
  // query insert data
  $query = "UPDATE seirampah SET
            suhu = '$suhu',
            keterangan = '$keterangan',
            suhu2 = '$suhu2',
            keterangan2 = '$keterangan2',
            suhu3 = '$suhu3',
            keterangan3 = '$keterangan3',
            suhu4 = '$suhu4',
            keterangan4 = '$keterangan4',
            gambar = '$gambar',
            gambar2 = '$gambar2',
            gambar3 = '$gambar3',
            gambar4 = '$gambar4'
            WHERE id = $id
            ";


  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function ubah_pangururan($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $id = $data["id"];
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  $gambarLama = htmlspecialchars($data["gambarLama"]);
  $gambarLama2 = htmlspecialchars($data["gambarLama2"]);
  $gambarLama3 = htmlspecialchars($data["gambarLama3"]);
  $gambarLama4 = htmlspecialchars($data["gambarLama4"]);

  // cek apakah user pilih gambar baru atau tidak
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }

  if ($_FILES['gambar2']['error'] === 4) {
    $gambar2 = $gambarLama2;
  } else {
    $gambar2 = upload2();
  }

  if ($_FILES['gambar3']['error'] === 4) {
    $gambar3 = $gambarLama3;
  } else {
    $gambar3 = upload3();
  }

  if ($_FILES['gambar4']['error'] === 4) {
    $gambar4 = $gambarLama4;
  } else {
    $gambar4 = upload4();
  }
  // query insert data
  $query = "UPDATE pangururan SET
            suhu = '$suhu',
            keterangan = '$keterangan',
            suhu2 = '$suhu2',
            keterangan2 = '$keterangan2',
            suhu3 = '$suhu3',
            keterangan3 = '$keterangan3',
            suhu4 = '$suhu4',
            keterangan4 = '$keterangan4',
            gambar = '$gambar',
            gambar2 = '$gambar2',
            gambar3 = '$gambar3',
            gambar4 = '$gambar4'
            WHERE id = $id
            ";


  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function ubah_salak($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $id = $data["id"];
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  $gambarLama = htmlspecialchars($data["gambarLama"]);
  $gambarLama2 = htmlspecialchars($data["gambarLama2"]);
  $gambarLama3 = htmlspecialchars($data["gambarLama3"]);
  $gambarLama4 = htmlspecialchars($data["gambarLama4"]);

  // cek apakah user pilih gambar baru atau tidak
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }

  if ($_FILES['gambar2']['error'] === 4) {
    $gambar2 = $gambarLama2;
  } else {
    $gambar2 = upload2();
  }

  if ($_FILES['gambar3']['error'] === 4) {
    $gambar3 = $gambarLama3;
  } else {
    $gambar3 = upload3();
  }

  if ($_FILES['gambar4']['error'] === 4) {
    $gambar4 = $gambarLama4;
  } else {
    $gambar4 = upload4();
  }
  // query insert data
  $query = "UPDATE salak SET
            suhu = '$suhu',
            keterangan = '$keterangan',
            suhu2 = '$suhu2',
            keterangan2 = '$keterangan2',
            suhu3 = '$suhu3',
            keterangan3 = '$keterangan3',
            suhu4 = '$suhu4',
            keterangan4 = '$keterangan4',
            gambar = '$gambar',
            gambar2 = '$gambar2',
            gambar3 = '$gambar3',
            gambar4 = '$gambar4'
            WHERE id = $id
            ";


  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $id = $data["id"];
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  $gambarLama = htmlspecialchars($data["gambarLama"]);
  $gambarLama2 = htmlspecialchars($data["gambarLama2"]);
  $gambarLama3 = htmlspecialchars($data["gambarLama3"]);
  $gambarLama4 = htmlspecialchars($data["gambarLama4"]);

  // cek apakah user pilih gambar baru atau tidak
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }

  if ($_FILES['gambar2']['error'] === 4) {
    $gambar2 = $gambarLama2;
  } else {
    $gambar2 = upload2();
  }

  if ($_FILES['gambar3']['error'] === 4) {
    $gambar3 = $gambarLama3;
  } else {
    $gambar3 = upload3();
  }

  if ($_FILES['gambar4']['error'] === 4) {
    $gambar4 = $gambarLama4;
  } else {
    $gambar4 = upload4();
  }
  // query insert data
  $query = "UPDATE medan SET
            suhu = '$suhu',
            keterangan = '$keterangan',
            suhu2 = '$suhu2',
            keterangan2 = '$keterangan2',
            suhu3 = '$suhu3',
            keterangan3 = '$keterangan3',
            suhu4 = '$suhu4',
            keterangan4 = '$keterangan4',
            gambar = '$gambar',
            gambar2 = '$gambar2',
            gambar3 = '$gambar3',
            gambar4 = '$gambar4'
            WHERE id = $id
            ";


  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function ubah_kisaran($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $id = $data["id"];
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  $gambarLama = htmlspecialchars($data["gambarLama"]);
  $gambarLama2 = htmlspecialchars($data["gambarLama2"]);
  $gambarLama3 = htmlspecialchars($data["gambarLama3"]);
  $gambarLama4 = htmlspecialchars($data["gambarLama4"]);

  // cek apakah user pilih gambar baru atau tidak
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }

  if ($_FILES['gambar2']['error'] === 4) {
    $gambar2 = $gambarLama2;
  } else {
    $gambar2 = upload2();
  }

  if ($_FILES['gambar3']['error'] === 4) {
    $gambar3 = $gambarLama3;
  } else {
    $gambar3 = upload3();
  }

  if ($_FILES['gambar4']['error'] === 4) {
    $gambar4 = $gambarLama4;
  } else {
    $gambar4 = upload4();
  }
  // query insert data
  $query = "UPDATE kisaran SET
            suhu = '$suhu',
            keterangan = '$keterangan',
            suhu2 = '$suhu2',
            keterangan2 = '$keterangan2',
            suhu3 = '$suhu3',
            keterangan3 = '$keterangan3',
            suhu4 = '$suhu4',
            keterangan4 = '$keterangan4',
            gambar = '$gambar',
            gambar2 = '$gambar2',
            gambar3 = '$gambar3',
            gambar4 = '$gambar4'
            WHERE id = $id
            ";


  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function ubah_sibuhuan($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $id = $data["id"];
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  $gambarLama = htmlspecialchars($data["gambarLama"]);
  $gambarLama2 = htmlspecialchars($data["gambarLama2"]);
  $gambarLama3 = htmlspecialchars($data["gambarLama3"]);
  $gambarLama4 = htmlspecialchars($data["gambarLama4"]);

  // cek apakah user pilih gambar baru atau tidak
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }

  if ($_FILES['gambar2']['error'] === 4) {
    $gambar2 = $gambarLama2;
  } else {
    $gambar2 = upload2();
  }

  if ($_FILES['gambar3']['error'] === 4) {
    $gambar3 = $gambarLama3;
  } else {
    $gambar3 = upload3();
  }

  if ($_FILES['gambar4']['error'] === 4) {
    $gambar4 = $gambarLama4;
  } else {
    $gambar4 = upload4();
  }
  // query insert data
  $query = "UPDATE sibuhuan SET
            suhu = '$suhu',
            keterangan = '$keterangan',
            suhu2 = '$suhu2',
            keterangan2 = '$keterangan2',
            suhu3 = '$suhu3',
            keterangan3 = '$keterangan3',
            suhu4 = '$suhu4',
            keterangan4 = '$keterangan4',
            gambar = '$gambar',
            gambar2 = '$gambar2',
            gambar3 = '$gambar3',
            gambar4 = '$gambar4'
            WHERE id = $id
            ";


  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function ubah_lotu($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $id = $data["id"];
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  $gambarLama = htmlspecialchars($data["gambarLama"]);
  $gambarLama2 = htmlspecialchars($data["gambarLama2"]);
  $gambarLama3 = htmlspecialchars($data["gambarLama3"]);
  $gambarLama4 = htmlspecialchars($data["gambarLama4"]);

  // cek apakah user pilih gambar baru atau tidak
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }

  if ($_FILES['gambar2']['error'] === 4) {
    $gambar2 = $gambarLama2;
  } else {
    $gambar2 = upload2();
  }

  if ($_FILES['gambar3']['error'] === 4) {
    $gambar3 = $gambarLama3;
  } else {
    $gambar3 = upload3();
  }

  if ($_FILES['gambar4']['error'] === 4) {
    $gambar4 = $gambarLama4;
  } else {
    $gambar4 = upload4();
  }
  // query insert data
  $query = "UPDATE lotu SET
            suhu = '$suhu',
            keterangan = '$keterangan',
            suhu2 = '$suhu2',
            keterangan2 = '$keterangan2',
            suhu3 = '$suhu3',
            keterangan3 = '$keterangan3',
            suhu4 = '$suhu4',
            keterangan4 = '$keterangan4',
            gambar = '$gambar',
            gambar2 = '$gambar2',
            gambar3 = '$gambar3',
            gambar4 = '$gambar4'
            WHERE id = $id
            ";


  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function ubah_gido($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $id = $data["id"];
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  $gambarLama = htmlspecialchars($data["gambarLama"]);
  $gambarLama2 = htmlspecialchars($data["gambarLama2"]);
  $gambarLama3 = htmlspecialchars($data["gambarLama3"]);
  $gambarLama4 = htmlspecialchars($data["gambarLama4"]);

  // cek apakah user pilih gambar baru atau tidak
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }

  if ($_FILES['gambar2']['error'] === 4) {
    $gambar2 = $gambarLama2;
  } else {
    $gambar2 = upload2();
  }

  if ($_FILES['gambar3']['error'] === 4) {
    $gambar3 = $gambarLama3;
  } else {
    $gambar3 = upload3();
  }

  if ($_FILES['gambar4']['error'] === 4) {
    $gambar4 = $gambarLama4;
  } else {
    $gambar4 = upload4();
  }
  // query insert data
  $query = "UPDATE gido SET
            suhu = '$suhu',
            keterangan = '$keterangan',
            suhu2 = '$suhu2',
            keterangan2 = '$keterangan2',
            suhu3 = '$suhu3',
            keterangan3 = '$keterangan3',
            suhu4 = '$suhu4',
            keterangan4 = '$keterangan4',
            gambar = '$gambar',
            gambar2 = '$gambar2',
            gambar3 = '$gambar3',
            gambar4 = '$gambar4'
            WHERE id = $id
            ";


  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function ubah_telukdalam($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $id = $data["id"];
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  $gambarLama = htmlspecialchars($data["gambarLama"]);
  $gambarLama2 = htmlspecialchars($data["gambarLama2"]);
  $gambarLama3 = htmlspecialchars($data["gambarLama3"]);
  $gambarLama4 = htmlspecialchars($data["gambarLama4"]);

  // cek apakah user pilih gambar baru atau tidak
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }

  if ($_FILES['gambar2']['error'] === 4) {
    $gambar2 = $gambarLama2;
  } else {
    $gambar2 = upload2();
  }

  if ($_FILES['gambar3']['error'] === 4) {
    $gambar3 = $gambarLama3;
  } else {
    $gambar3 = upload3();
  }

  if ($_FILES['gambar4']['error'] === 4) {
    $gambar4 = $gambarLama4;
  } else {
    $gambar4 = upload4();
  }
  // query insert data
  $query = "UPDATE telukdalam SET
            suhu = '$suhu',
            keterangan = '$keterangan',
            suhu2 = '$suhu2',
            keterangan2 = '$keterangan2',
            suhu3 = '$suhu3',
            keterangan3 = '$keterangan3',
            suhu4 = '$suhu4',
            keterangan4 = '$keterangan4',
            gambar = '$gambar',
            gambar2 = '$gambar2',
            gambar3 = '$gambar3',
            gambar4 = '$gambar4'
            WHERE id = $id
            ";


  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function ubah_panyabungan($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $id = $data["id"];
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  $gambarLama = htmlspecialchars($data["gambarLama"]);
  $gambarLama2 = htmlspecialchars($data["gambarLama2"]);
  $gambarLama3 = htmlspecialchars($data["gambarLama3"]);
  $gambarLama4 = htmlspecialchars($data["gambarLama4"]);

  // cek apakah user pilih gambar baru atau tidak
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }

  if ($_FILES['gambar2']['error'] === 4) {
    $gambar2 = $gambarLama2;
  } else {
    $gambar2 = upload2();
  }

  if ($_FILES['gambar3']['error'] === 4) {
    $gambar3 = $gambarLama3;
  } else {
    $gambar3 = upload3();
  }

  if ($_FILES['gambar4']['error'] === 4) {
    $gambar4 = $gambarLama4;
  } else {
    $gambar4 = upload4();
  }
  // query insert data
  $query = "UPDATE panyabungan SET
            suhu = '$suhu',
            keterangan = '$keterangan',
            suhu2 = '$suhu2',
            keterangan2 = '$keterangan2',
            suhu3 = '$suhu3',
            keterangan3 = '$keterangan3',
            suhu4 = '$suhu4',
            keterangan4 = '$keterangan4',
            gambar = '$gambar',
            gambar2 = '$gambar2',
            gambar3 = '$gambar3',
            gambar4 = '$gambar4'
            WHERE id = $id
            ";


  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function ubah_lahomi($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $id = $data["id"];
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  $gambarLama = htmlspecialchars($data["gambarLama"]);
  $gambarLama2 = htmlspecialchars($data["gambarLama2"]);
  $gambarLama3 = htmlspecialchars($data["gambarLama3"]);
  $gambarLama4 = htmlspecialchars($data["gambarLama4"]);

  // cek apakah user pilih gambar baru atau tidak
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }

  if ($_FILES['gambar2']['error'] === 4) {
    $gambar2 = $gambarLama2;
  } else {
    $gambar2 = upload2();
  }

  if ($_FILES['gambar3']['error'] === 4) {
    $gambar3 = $gambarLama3;
  } else {
    $gambar3 = upload3();
  }

  if ($_FILES['gambar4']['error'] === 4) {
    $gambar4 = $gambarLama4;
  } else {
    $gambar4 = upload4();
  }
  // query insert data
  $query = "UPDATE lahomi SET
            suhu = '$suhu',
            keterangan = '$keterangan',
            suhu2 = '$suhu2',
            keterangan2 = '$keterangan2',
            suhu3 = '$suhu3',
            keterangan3 = '$keterangan3',
            suhu4 = '$suhu4',
            keterangan4 = '$keterangan4',
            gambar = '$gambar',
            gambar2 = '$gambar2',
            gambar3 = '$gambar3',
            gambar4 = '$gambar4'
            WHERE id = $id
            ";


  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}


function ubah_rantauparapat($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $id = $data["id"];
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  $gambarLama = htmlspecialchars($data["gambarLama"]);
  $gambarLama2 = htmlspecialchars($data["gambarLama2"]);
  $gambarLama3 = htmlspecialchars($data["gambarLama3"]);
  $gambarLama4 = htmlspecialchars($data["gambarLama4"]);

  // cek apakah user pilih gambar baru atau tidak
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }

  if ($_FILES['gambar2']['error'] === 4) {
    $gambar2 = $gambarLama2;
  } else {
    $gambar2 = upload2();
  }

  if ($_FILES['gambar3']['error'] === 4) {
    $gambar3 = $gambarLama3;
  } else {
    $gambar3 = upload3();
  }

  if ($_FILES['gambar4']['error'] === 4) {
    $gambar4 = $gambarLama4;
  } else {
    $gambar4 = upload4();
  }
  // query insert data
  $query = "UPDATE rantauparapat SET
            suhu = '$suhu',
            keterangan = '$keterangan',
            suhu2 = '$suhu2',
            keterangan2 = '$keterangan2',
            suhu3 = '$suhu3',
            keterangan3 = '$keterangan3',
            suhu4 = '$suhu4',
            keterangan4 = '$keterangan4',
            gambar = '$gambar',
            gambar2 = '$gambar2',
            gambar3 = '$gambar3',
            gambar4 = '$gambar4'
            WHERE id = $id
            ";


  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function ubah_batubara($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $id = $data["id"];
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  $gambarLama = htmlspecialchars($data["gambarLama"]);
  $gambarLama2 = htmlspecialchars($data["gambarLama2"]);
  $gambarLama3 = htmlspecialchars($data["gambarLama3"]);
  $gambarLama4 = htmlspecialchars($data["gambarLama4"]);

  // cek apakah user pilih gambar baru atau tidak
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }

  if ($_FILES['gambar2']['error'] === 4) {
    $gambar2 = $gambarLama2;
  } else {
    $gambar2 = upload2();
  }

  if ($_FILES['gambar3']['error'] === 4) {
    $gambar3 = $gambarLama3;
  } else {
    $gambar3 = upload3();
  }

  if ($_FILES['gambar4']['error'] === 4) {
    $gambar4 = $gambarLama4;
  } else {
    $gambar4 = upload4();
  }
  // query insert data
  $query = "UPDATE batu_bara SET
            suhu = '$suhu',
            keterangan = '$keterangan',
            suhu2 = '$suhu2',
            keterangan2 = '$keterangan2',
            suhu3 = '$suhu3',
            keterangan3 = '$keterangan3',
            suhu4 = '$suhu4',
            keterangan4 = '$keterangan4',
            gambar = '$gambar',
            gambar2 = '$gambar2',
            gambar3 = '$gambar3',
            gambar4 = '$gambar4'
            WHERE id = $id
            ";


  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function ubah_sidikalang($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $id = $data["id"];
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  $gambarLama = htmlspecialchars($data["gambarLama"]);
  $gambarLama2 = htmlspecialchars($data["gambarLama2"]);
  $gambarLama3 = htmlspecialchars($data["gambarLama3"]);
  $gambarLama4 = htmlspecialchars($data["gambarLama4"]);

  // cek apakah user pilih gambar baru atau tidak
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }

  if ($_FILES['gambar2']['error'] === 4) {
    $gambar2 = $gambarLama2;
  } else {
    $gambar2 = upload2();
  }

  if ($_FILES['gambar3']['error'] === 4) {
    $gambar3 = $gambarLama3;
  } else {
    $gambar3 = upload3();
  }

  if ($_FILES['gambar4']['error'] === 4) {
    $gambar4 = $gambarLama4;
  } else {
    $gambar4 = upload4();
  }
  // query insert data
  $query = "UPDATE sidikalang SET
            suhu = '$suhu',
            keterangan = '$keterangan',
            suhu2 = '$suhu2',
            keterangan2 = '$keterangan2',
            suhu3 = '$suhu3',
            keterangan3 = '$keterangan3',
            suhu4 = '$suhu4',
            keterangan4 = '$keterangan4',
            gambar = '$gambar',
            gambar2 = '$gambar2',
            gambar3 = '$gambar3',
            gambar4 = '$gambar4'
            WHERE id = $id
            ";


  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function ubah_doloksanggul($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $id = $data["id"];
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  $gambarLama = htmlspecialchars($data["gambarLama"]);
  $gambarLama2 = htmlspecialchars($data["gambarLama2"]);
  $gambarLama3 = htmlspecialchars($data["gambarLama3"]);
  $gambarLama4 = htmlspecialchars($data["gambarLama4"]);

  // cek apakah user pilih gambar baru atau tidak
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }

  if ($_FILES['gambar2']['error'] === 4) {
    $gambar2 = $gambarLama2;
  } else {
    $gambar2 = upload2();
  }

  if ($_FILES['gambar3']['error'] === 4) {
    $gambar3 = $gambarLama3;
  } else {
    $gambar3 = upload3();
  }

  if ($_FILES['gambar4']['error'] === 4) {
    $gambar4 = $gambarLama4;
  } else {
    $gambar4 = upload4();
  }
  // query insert data
  $query = "UPDATE doloksanggul SET
            suhu = '$suhu',
            keterangan = '$keterangan',
            suhu2 = '$suhu2',
            keterangan2 = '$keterangan2',
            suhu3 = '$suhu3',
            keterangan3 = '$keterangan3',
            suhu4 = '$suhu4',
            keterangan4 = '$keterangan4',
            gambar = '$gambar',
            gambar2 = '$gambar2',
            gambar3 = '$gambar3',
            gambar4 = '$gambar4'
            WHERE id = $id
            ";


  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function ubah_kotapinang($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $id = $data["id"];
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  $gambarLama = htmlspecialchars($data["gambarLama"]);
  $gambarLama2 = htmlspecialchars($data["gambarLama2"]);
  $gambarLama3 = htmlspecialchars($data["gambarLama3"]);
  $gambarLama4 = htmlspecialchars($data["gambarLama4"]);

  // cek apakah user pilih gambar baru atau tidak
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }

  if ($_FILES['gambar2']['error'] === 4) {
    $gambar2 = $gambarLama2;
  } else {
    $gambar2 = upload2();
  }

  if ($_FILES['gambar3']['error'] === 4) {
    $gambar3 = $gambarLama3;
  } else {
    $gambar3 = upload3();
  }

  if ($_FILES['gambar4']['error'] === 4) {
    $gambar4 = $gambarLama4;
  } else {
    $gambar4 = upload4();
  }
  // query insert data
  $query = "UPDATE doloksanggul SET
            suhu = '$suhu',
            keterangan = '$keterangan',
            suhu2 = '$suhu2',
            keterangan2 = '$keterangan2',
            suhu3 = '$suhu3',
            keterangan3 = '$keterangan3',
            suhu4 = '$suhu4',
            keterangan4 = '$keterangan4',
            gambar = '$gambar',
            gambar2 = '$gambar2',
            gambar3 = '$gambar3',
            gambar4 = '$gambar4'
            WHERE id = $id
            ";


  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function ubah_kabanjahe($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $id = $data["id"];
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  $gambarLama = htmlspecialchars($data["gambarLama"]);
  $gambarLama2 = htmlspecialchars($data["gambarLama2"]);
  $gambarLama3 = htmlspecialchars($data["gambarLama3"]);
  $gambarLama4 = htmlspecialchars($data["gambarLama4"]);

  // cek apakah user pilih gambar baru atau tidak
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }

  if ($_FILES['gambar2']['error'] === 4) {
    $gambar2 = $gambarLama2;
  } else {
    $gambar2 = upload2();
  }

  if ($_FILES['gambar3']['error'] === 4) {
    $gambar3 = $gambarLama3;
  } else {
    $gambar3 = upload3();
  }

  if ($_FILES['gambar4']['error'] === 4) {
    $gambar4 = $gambarLama4;
  } else {
    $gambar4 = upload4();
  }
  // query insert data
  $query = "UPDATE kabanjahe SET
            suhu = '$suhu',
            keterangan = '$keterangan',
            suhu2 = '$suhu2',
            keterangan2 = '$keterangan2',
            suhu3 = '$suhu3',
            keterangan3 = '$keterangan3',
            suhu4 = '$suhu4',
            keterangan4 = '$keterangan4',
            gambar = '$gambar',
            gambar2 = '$gambar2',
            gambar3 = '$gambar3',
            gambar4 = '$gambar4'
            WHERE id = $id
            ";


  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function ubah_lubukpakam($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $id = $data["id"];
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  $gambarLama = htmlspecialchars($data["gambarLama"]);
  $gambarLama2 = htmlspecialchars($data["gambarLama2"]);
  $gambarLama3 = htmlspecialchars($data["gambarLama3"]);
  $gambarLama4 = htmlspecialchars($data["gambarLama4"]);

  // cek apakah user pilih gambar baru atau tidak
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }

  if ($_FILES['gambar2']['error'] === 4) {
    $gambar2 = $gambarLama2;
  } else {
    $gambar2 = upload2();
  }

  if ($_FILES['gambar3']['error'] === 4) {
    $gambar3 = $gambarLama3;
  } else {
    $gambar3 = upload3();
  }

  if ($_FILES['gambar4']['error'] === 4) {
    $gambar4 = $gambarLama4;
  } else {
    $gambar4 = upload4();
  }
  // query insert data
  $query = "UPDATE lubukpakam SET
            suhu = '$suhu',
            keterangan = '$keterangan',
            suhu2 = '$suhu2',
            keterangan2 = '$keterangan2',
            suhu3 = '$suhu3',
            keterangan3 = '$keterangan3',
            suhu4 = '$suhu4',
            keterangan4 = '$keterangan4',
            gambar = '$gambar',
            gambar2 = '$gambar2',
            gambar3 = '$gambar3',
            gambar4 = '$gambar4'
            WHERE id = $id
            ";


  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function ubah_aekkanopan($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $id = $data["id"];
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  $gambarLama = htmlspecialchars($data["gambarLama"]);
  $gambarLama2 = htmlspecialchars($data["gambarLama2"]);
  $gambarLama3 = htmlspecialchars($data["gambarLama3"]);
  $gambarLama4 = htmlspecialchars($data["gambarLama4"]);

  // cek apakah user pilih gambar baru atau tidak
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }

  if ($_FILES['gambar2']['error'] === 4) {
    $gambar2 = $gambarLama2;
  } else {
    $gambar2 = upload2();
  }

  if ($_FILES['gambar3']['error'] === 4) {
    $gambar3 = $gambarLama3;
  } else {
    $gambar3 = upload3();
  }

  if ($_FILES['gambar4']['error'] === 4) {
    $gambar4 = $gambarLama4;
  } else {
    $gambar4 = upload4();
  }
  // query insert data
  $query = "UPDATE aekkanopan SET
            suhu = '$suhu',
            keterangan = '$keterangan',
            suhu2 = '$suhu2',
            keterangan2 = '$keterangan2',
            suhu3 = '$suhu3',
            keterangan3 = '$keterangan3',
            suhu4 = '$suhu4',
            keterangan4 = '$keterangan4',
            gambar = '$gambar',
            gambar2 = '$gambar2',
            gambar3 = '$gambar3',
            gambar4 = '$gambar4'
            WHERE id = $id
            ";


  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function ubah_stabat($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $id = $data["id"];
  $suhu = htmlspecialchars($data["suhu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $suhu2 = htmlspecialchars($data["suhu2"]);
  $keterangan2 = htmlspecialchars($data["keterangan2"]);
  $suhu3 = htmlspecialchars($data["suhu3"]);
  $keterangan3 = htmlspecialchars($data["keterangan3"]);
  $suhu4 = htmlspecialchars($data["suhu4"]);
  $keterangan4 = htmlspecialchars($data["keterangan4"]);


  $gambarLama = htmlspecialchars($data["gambarLama"]);
  $gambarLama2 = htmlspecialchars($data["gambarLama2"]);
  $gambarLama3 = htmlspecialchars($data["gambarLama3"]);
  $gambarLama4 = htmlspecialchars($data["gambarLama4"]);

  // cek apakah user pilih gambar baru atau tidak
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }

  if ($_FILES['gambar2']['error'] === 4) {
    $gambar2 = $gambarLama2;
  } else {
    $gambar2 = upload2();
  }

  if ($_FILES['gambar3']['error'] === 4) {
    $gambar3 = $gambarLama3;
  } else {
    $gambar3 = upload3();
  }

  if ($_FILES['gambar4']['error'] === 4) {
    $gambar4 = $gambarLama4;
  } else {
    $gambar4 = upload4();
  }
  // query insert data
  $query = "UPDATE stabat SET
            suhu = '$suhu',
            keterangan = '$keterangan',
            suhu2 = '$suhu2',
            keterangan2 = '$keterangan2',
            suhu3 = '$suhu3',
            keterangan3 = '$keterangan3',
            suhu4 = '$suhu4',
            keterangan4 = '$keterangan4',
            gambar = '$gambar',
            gambar2 = '$gambar2',
            gambar3 = '$gambar3',
            gambar4 = '$gambar4'
            WHERE id = $id
            ";


  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  $query = "SELECT * FROM mahasiswa
            WHERE
            nama LIKE '%$keyword%' OR
            nrp LIKE '%$keyword%' OR
            email LIKE '%$keyword%' OR
            jurusan LIKE '%$keyword%'
            ";
  return query($query);
}

function registrasi($data)
{
  global $conn;

  $username = strtolower(stripcslashes($data["username"]));
  $password = mysqli_real_escape_string($conn, $data["password"]);
  $password2 = mysqli_real_escape_string($conn, $data["password2"]);

  // cek username sudah ada atau belom
  $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

  if (mysqli_fetch_assoc($result)) {
    echo "<script>
            alert('username sudah terdaftar!');
        </script>";
    return false;
  }

  // cek konfirmasi password
  if ($password !== $password2) {
    echo "<script>
            alert('konfirmasi password tidak sesuai');
            </script>";
    return false;
  }

  // enkripsi password
  $password = password_hash($password, PASSWORD_DEFAULT);

  // tambahkan user baru ke database
  mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

  return mysqli_affected_rows($conn);
}
