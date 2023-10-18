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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="styleShowData.css">
    <title>Detail Data</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-lg-3">
                <div class="title mt-5">Detail Data</div>
            </div>
        </div>
        <div class="showing mt-5">
            <div class="row justify-content-center">
                <div class="col col-lg-1 rounded-start border-2 border-bottom ">
                    <p>Nama :</p>
                </div>
                <div class="col col-lg-6 rounded-end border-2 border-bottom">
                    <p><?php echo "$nama"; ?></p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col col-lg-1 rounded-start border-2 border-bottom ">
                    <p>NIM :</p>
                </div>
                <div class="col col-lg-6 rounded-end border-2 border-bottom">
                    <p><?php echo "$nim"; ?></p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col col-lg-1 rounded-start border-2 border-bottom">
                    <p>Jenis Kelamin :</p>
                </div>
                <div class="col col-lg-6 rounded-end border-2 border-bottom">
                    <p><?php echo "$gender"; ?></p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col col-lg-1 rounded-start border-2 border-bottom">
                    <p>Hobi :</p>
                </div>
                <div class="col col-lg-6 rounded-end border-2 border-bottom">
                    <p><?php echo "$hobi"; ?></p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col col-lg-1 rounded-start border-2 border-bottom">
                    <p>Status :</p>
                </div>
                <div class="col col-lg-6 rounded-end border-2 border-bottom">
                    <p><?php echo "$status"; ?></p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col col-lg-1 rounded-start border-2 border-bottom">
                    <p>Email :</p>
                </div>
                <div class="col col-lg-6 rounded-end border-2 border-bottom">
                    <p><?php echo "$email"; ?></p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col col-lg-1 rounded-start border-2 border-bottom">
                    <p>Alamat :</p>
                </div>
                <div class="col col-lg-6 rounded-end border-2 border-bottom">
                    <p><?php echo "$alamat"; ?></p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col col-lg-1 rounded-start border-2 border-bottom">
                    <p>Telpon :</p>
                </div>
                <div class="col col-lg-6 rounded-end border-2 border-bottom">
                    <p><?php echo "$nomor"; ?></p>
                </div>
            </div>


        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>