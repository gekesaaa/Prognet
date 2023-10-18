<?php
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['nim'])) {
    $nim = $_GET['nim'];

    $sql = "SELECT * FROM tb_data WHERE nim='$nim'";
    $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $nama = $row['nama'];
        $gender = $row['gender'];
        $hobi = $row['hobi'];
        $status = $row['sts'];
        $email = $row['email'];
        $alamat = $row['alamat'];
        $nomor = $row['nomor'];
    } else {
        echo "Data tidak ditemukan.";
        exit();
    }
} else {
    echo "Permintaan tidak valid.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link rel="stylesheet" href="styleMenu.css" />

    <title>Edit Data</title>
</head>

<body>
    <div class="container mt-5">
        <h2>Edit Data</h2>
        <form action="update.php" method="post">
            <input type="hidden" name="nim" value="<?php echo $nim; ?>">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama :</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama; ?>" required />
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Jenis Kelamin :</label>
                <input type="text" class="form-control" id="gender" name="gender" value="<?php echo $gender; ?>" required />
            </div>
            <div class="mb-3">
                <label for="hobi" class="form-label">Hobi :</label>
                <input type="text" class="form-control" id="hobi" name="hobi" value="<?php echo $hobi; ?>" required />
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status :</label>
                <input type="text" class="form-control" id="status" name="status" value="<?php echo $status; ?>" required />
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email :</label>
                <input type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>" required />
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat :</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat; ?>" required />
            </div>
            <div class="mb-3">
                <label for="nomor" class="form-label">No Telepon :</label>
                <input type="text" class="form-control" id="nomor" name="nomor" value="<?php echo $nomor; ?>" required />
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>