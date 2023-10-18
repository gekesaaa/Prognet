<?php

include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = $_POST["nama"];
  $nim = $_POST["nim"];
  $gender = $_POST["gender"];
  $hobi = $_POST["hobi"];
  $status = $_POST["status"];
  $email = $_POST["email"];
  $alamat = $_POST["alamat"];
  $nomor = $_POST["nomor"];

  // Masukkan data ke tabel tb_data
  $sql = "INSERT INTO tb_data (nama, nim, gender, hobi, sts, email, alamat, nomor) VALUES ('$nama', '$nim', '$gender', '$hobi', '$status', '$email', '$alamat', '$nomor')";

  if (mysqli_query($koneksi, $sql)) {
    echo '<script>alert("Edit Data Berhasil")</script>';
    header("Location: data.php");
    exit;
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
  }
}





?>



<!-- <!DOCTYPE html>
<html lang="en">

<head> -->
<!-- Required meta tags -->
<!-- <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" /> -->

<!-- Bootstrap CSS -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <link rel="stylesheet" href="styleMenu.css" />

  <title>Rekap Data</title>
</head>

<body>
  <div class="row justify-content-center mt-5">
    <div class="col col-lg-10">
      <table class="table table-striped table-hover table-bordered text-center">
        <thead>
          <tr>
            <th scope="col">no</th>
            <th scope="col">Nama</th>
            <th scope="col">NIM</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td style="width:15% ">
              <a href="/edit" class="btn btn-sm btn-warning mr-3 mb-2">
                Edit
              </a>
              <a href="showData.php" class="btn btn-sm btn-primary mr-3 mb-2">
                Lihat
              </a>
              <a href="/delete" class="btn btn-sm btn-danger mr-3 mb-2">
                Hapus
              </a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div> -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>